<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php 
  require_once "navbar.php";
?>

<?php
  session_start();
  require_once "connect.php";
  require_once "navbar.php";

  $session_username = $_SESSION['person']['username'];
  $session_email    = $_SESSION['person']['email'];
  $formEmail        = isset($_POST['getEmail']) ? $_POST['getEmail'] : null;




  // ================  SEND EMAIL CODES  =================== //
  $allTable = $db->query('SELECT * FROM users_july',PDO::FETCH_ASSOC);
  $emailForUsername = [];
  $data = [];
  if($allTable){
   foreach($allTable as $val){
     $data[] = $val;
     $emailForUsername[$val['person_email']]  = $val['person_username'];
   };
  };


  if(isset($formEmail)){
    for($i=0;$i<count($data);$i++){
      if($data[$i]['person_email'] == $formEmail){
        $setUsername = $emailForUsername[$_POST['getEmail']];
        $messages_content = $_POST['getContain'];
        $messages_header = $_POST['getHeader'];
        $setData = $db->prepare("INSERT INTO $setUsername(header,messages_sender,messages_content) 
                            VALUES(:header,:messages_sender,:messages_content)");
        $setData->bindParam(':header',$messages_header, PDO::PARAM_STR);
        $setData->bindParam(':messages_sender',$session_email, PDO::PARAM_STR);
        $setData->bindParam(':messages_content',$messages_content, PDO::PARAM_STR);
        $setData->execute();
      }
    };
  }

?>


<div class="container">
  <form action=""  method='post'>
  <div class="row">
    <div class="col-25">
      <label for="email">E-mail</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="getEmail" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="header">Header</label>
    </div>
    <div class="col-75">
      <input type="text" id="header" name="getHeader" placeholder="Your last name..">
    </div>
  </div>  
  <div class="row">
    <div class="col-25">
      <label for="contain">Contain</label>
    </div>
    <div class="col-75">
      <textarea id="contain" name="getContain" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


<script>

</script>
</div>
</body>
</html>
<style> <?php include "./styleFile/newMessage.css"; ?> </style>
