
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
		  if(!empty($_POST["remember_me"]))
                {
                $hour = time() + 3600 * 24 * 30;
                setcookie('username', $username, $hour);
                setcookie('password', $password, $hour);
                }else{
                  
                        setcookie('username', "");
                        setcookie('password', "");
              
                }
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

<?php 
	
	if(!empty($_COOKIE['username'])) {
	
	?>
   <input type="text" name="username" value="<?php echo $_COOKIE['username'];?>" autocomplete="off" placeholder="username"> 
<?php   
}else{
	
?>
  <input type='text' name='username' autocomplete="off" placeholder='username'><br>
  <?php
}
?>
<?php if(!empty($_COOKIE['password'])){

	?>
  <input name="password" type="password" value="<?php echo $_COOKIE['password'];?>" autocomplete="new-password" placeholder='password'><br>
  <?php   
}else{
	
?>
  <input name="password" type="password"  autocomplete="new-password" placeholder='password'>
  <?php
}

?>  

  <input type='hidden' value='1'/>
     <label style="color:white;">
	 <?php 	if(!empty($_COOKIE['username'])){
		 ?>
      <input type="checkbox" value="remember-me" name="remember_me" checked> Remember me
	  <?php
	 }else
	 { 
	 ?>
	 <input type="checkbox" value="remember-me" name="remember_me" > Remember me
	 <?php
	 }	 
	 ?>
    </label>
  <button type='submit' name='submit'>LOGIN</button><br/>
  <a href='?page=homepage'>BACK</a>
</form>

<style> <?php include './styleFile/style.css'; ?> </style>