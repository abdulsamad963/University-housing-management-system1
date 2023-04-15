<?php

// include('co.php');
$conn = new mysqli('localhost','root');



 
$ax=$_GET['addx'];
$b=$_GET['adx'];



$sql="update abdo.table3 set a1='$b' where h=$ax";

$result= $conn->query($sql);



  



?>