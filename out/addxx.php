<?php

// include('co.php');
$conn = new mysqli('localhost','root');



 
$ax=$_GET['addx'];
$b=$_GET['adx'];



$sql="update abdo.table3 set a2='$b' where name=$ax";

$result= $conn->query($sql);



  



?>