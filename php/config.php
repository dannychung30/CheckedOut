<?php

try{
    $connString = "mysql:host=localhost; dbname=CheckedOut";
    $user="root";
    $pass="root";

    $pdo=new pdo($connString,$user,$pass);

    echo "Connected Successfully!";
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//useful during initial development and debugging

} catch(PDOException $e){
    die("Connection failed:" .$e->getMessage()) ;
}


