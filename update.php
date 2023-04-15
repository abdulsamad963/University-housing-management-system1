<?php 
$id=$_GET['id'];
$name=$_GET['name'];
$fatherName=$_GET['fatherName'];
$date=$_GET['date'];
$alhala=$_GET['alhala'];
$dkan=$_GET['dkan'];
$number=$_GET['number'];
$number2=$_GET['number2'];
$job=$_GET['job'];
$section=$_GET['section'];
$place=$_GET['place'];
$distance=$_GET['distance'];
$marital=$_GET['marital'];
$financial=$_GET['financial'];
$notes=$_GET['notes'];
$room=$_GET['room'];

$fullName=$name.$fatherName;
$conn = new mysqli('localhost','root');
$sql="update abdo.table3 set name='$name' ,fatherName='$fatherName', fullName='$fullName' ,date='$date' ,alhala='$alhala' ,dkan='$dkan'
    ,number='$number' ,number2='$number2',job='$job',section='$section',place='$place',distance='$distance'
    ,marital='$marital',financial='$financial',notes='$notes',room='$room' where id='$id' ";

if ($conn->query($sql) === TRUE){
    header("Location: stdData.php?name=$name");
}
else {
    echo "error";
}


?>