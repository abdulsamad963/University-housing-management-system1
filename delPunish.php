<?php
    $conn = new mysqli('localhost','root','','abdo');
    $id=$_GET['id'];

    $sql="delete from punishment where id='$id'";
    if($conn->query($sql)===True){
        echo"<center>
        تم الحذف بنجاح
        <br><a href='index.php' class='link pb-5 fw-bold' id='ds'>العودة للصفحة الرئيسية</a>";
    }
?>