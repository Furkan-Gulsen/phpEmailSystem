
<?php
session_start();
require_once "connect.php";

$username = isset($_POST['username']) ?   htmlspecialchars($_POST['username']) : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if(!$username){echo 'Do not leave username blank ...';}
elseif(!$password){echo 'Do not leave password blank ...';}
else{
  $getData = $db->prepare('SELECT * FROM users_july');
  $getData->execute();
  $values = $getData->fetchAll(PDO::FETCH_ASSOC);
  
  foreach( $values as $val){

    // ------------------VERI KONTROLLERI----------------
    // print_r($val['person_username']);
    // print_r($val['person_password']);    
    // echo 'getControl: ' . $getControl['person_password'] . '<br>';
    // echo 'password: ' . $password . '<br>';

    $control = $db->prepare('SELECT person_password FROM users_july WHERE person_username = ?');
    $control->execute(array($val['person_username']));
    $getControl= $control->fetch(PDO::FETCH_ASSOC);

    // Burada form'dan gelen kullanıcı adı ile mysql database'in içinde eşleştirme arıyoruz...
    if($username === $val['person_username']){
      if($password == $getControl['person_password']){
        $_SESSION['person'] = ['username' => $val['person_username'], 'email' => $val['person_email']];
        header('Location: index.php?page=mail');
      }else{
        echo 'Password is incorrect';
      }
    }else{
      echo 'The user name or password is incorrect';
    }
  }
}

  $db=null;

?>  


<form id='form' action='' method='post' autocomplete="off">
  <input type='text' name='username' autocomplete="off" placeholder='username'><br>
  <input name="password" type="password" autocomplete="new-password" placeholder='password'><br>
  <input type='hidden' value='1'/>
  <button type='submit' name='submit'>LOGIN</button><br/>
  <a href='?page=homepage'>BACK</a>
</form>

<style> <?php include './styleFile/style.css'; ?> </style>