<?php
  session_start();

  require_once "connect.php";

  $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
  $email = isset($_POST['mail']) ? $_POST['mail'] : null;
  $username = isset($_POST['username']) ? $_POST['username'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;

  $dat = [];
  $isVal = "false";
  $getData = $db->query('SELECT * FROM users_july',PDO::FETCH_ASSOC);
  if($getData){
   foreach($getData as $data){
     $dat[] = $data;
    };
  };
  for($i=0;$i<count($dat);$i++){
    if($dat[$i]['person_email'] == $email){
      $isVal = "true";
    };
    if($dat[$i]['person_username'] == $username){
      $isVal = "true";
    }
  };
  
  // in data control
  if($isVal == 'true'){
    echo 'kullanıcı adı veya email adresi bu sisteme daha önce kayıt oldu.';
    die();
  };
  
  if(!$fullname || !$email || !$username || !$password){
    echo 'Fill in all information ...';
  }else{
    $dat = [];
    $execute = $db->prepare('INSERT INTO users_july(person_fullname,person_email,person_username,person_password)
                          VALUES(:person_fullname,:person_email,:person_username,:person_password)');
    $execute->bindParam(':person_fullname',$fullname,PDO::PARAM_STR);
    $execute->bindParam(':person_email',$email,PDO::PARAM_STR);
    $execute->bindParam(':person_username',$username,PDO::PARAM_STR);
    $execute->bindParam(':person_password',$password,PDO::PARAM_STR);
    $execute->execute();
    if($execute){
      $_SESSION['username'] = $username;
      header("Location: createTable.php");
      echo 'başarılı';
    }else{
      echo 'başarısız';
    };

  }

  $db = null;



?>