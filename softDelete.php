<?php
    $conn = new mysqli('localhost','root','','abdo');
    $id=$_GET['id'];
    $state=$_GET['state'];
    $sql="update punishment set softDelete='$state' where id='$id' ";
    if($conn->query($sql)===True){
        echo"<center>
        تم العمل بنجاح
        <br><a href='index.php' class='link pb-5 fw-bold' id='ds'>العودة للصفحة الرئيسية</a>";
    }
?>