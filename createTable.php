<?php


session_start();
$server     = "localhost";
$dbuser     = "root";
$dbpassword = "";
$dbname     = "phpTutorial";
$cookie     =  $_SESSION['username'];

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpassword);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlQuery = "CREATE TABLE $cookie (
        messages_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        messages_sender VARCHAR(100) NOT NULL,
        messages_content VARCHAR(5000) NOT NULL,
        messages_date TIMESTAMP
    )";

    $connection->exec($sqlQuery);

    }
catch(PDOException $e){
    $sqlQuery . "<br>" . $e->getMessage();
};

  $db = null;
  session_destroy();
  header('Location: index.php');
?>