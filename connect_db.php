<?php 
$dsn = "mysql:host=localhost;dbname=students";
$user = 'root';
$pass = '';
$con=new mysqli("localhost","root","");
 try{
     $con = new PDO($dsn,$user,$pass);
 }catch(PDOException $ex){
     echo $ex->getMessage();

 }

