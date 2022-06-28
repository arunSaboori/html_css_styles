<?php 

$servername ="localhost";
$username="root";
$password="";
try {
$conn = new PDO("mysql:host=$servername;dbname=dbname",$username,$password);

$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"hell yeah";

}catch(PDOException $e){
echo "connection faild ".$e->getMessage();
}




















?>