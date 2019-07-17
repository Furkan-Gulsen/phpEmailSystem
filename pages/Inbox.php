<?php 
  require_once "connect.php";
  require_once "navbar.php";
  session_start();

  $session_username = $_SESSION['person']['username'];


  // ================  READ MY EMAIL BOX CODES  =================== //
  $myTable = $db->query("SELECT * FROM $session_username",PDO::FETCH_ASSOC);
  ?>
  
  <div class="tab">
    <?php
    if($myTable):
      foreach($myTable as $val):
    ?> 
    <button class="tablinks" onclick="openCity(event, '<?php echo $val['header'] ?>')" ><?php echo $val['header'] ?></button>
    <?php 
        endforeach;
      endif;
    ?>
  </div>
  
  <?php
  $myTable = $db->query("SELECT * FROM $session_username",PDO::FETCH_ASSOC);
  if($myTable):
    foreach($myTable as $val): ?>


    <div id="<?php echo $val['header'] ?>" class="tabcontent">
      <h1><?php echo $val['header'] ?></h1>
      <h4><?php echo $val['messages_date'] ?></h4>
      <p><b><?php echo $val['messages_sender'] ?></b></p>
      <hr>
      <p><?php echo $val['messages_content'] ?></p>
    </div>


    <?php 
    endforeach;
  endif;

?>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>
<style> <?php include "./styleFile/inbox.css"; ?> </style>
