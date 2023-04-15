<?php
$conn = new mysqli('localhost','root');
$stdId=$_GET['stdId'];
$type= $_GET['type'];
$reason= $_GET['reason'];
$date= $_GET['date'];
$excDate= $_GET['excDate'];
$days= $_GET['days'];
$days = (isset($_GET['days'])) ? $_GET['days'] : 0;

$sql="insert into abdo.punishment (stdID,type,reason,date,excDate, days) values
    ('$stdId', '$type','$reason', '$date', '$excDate' ,'$days')";
    if ($conn->query($sql) === TRUE){
        $last_id = $conn->insert_id;
        header("Location:viewPunishment.php?stdId=$stdId&id=$last_id");
        exit();
    }
?>
