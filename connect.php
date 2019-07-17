<?php

  try{
    $db = new PDO("mysql:host=localhost;dbname=phpTutorial",'root','');
  }catch(PDOException $e){
    echo 'veritabanı hatası oluştu ... <br>';
    echo $e->getMessage(); 
    die();
  };

?>