<?php
$con=mysqli_connect('localhost','root','','abdo');
$ID=$_GET['id'];
$NAME=$_GET['name'];
$sql="DELETE FROM table3 WHERE id='$ID' ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete student</title>
</head>
<body>
<center>
    <?php
        if($con->query($sql)===True):
    ?>
    <h2 class='text-success'>  تم حذف الطالب <?= $NAME.' ' ?> بنجاح  </h2>
    <br><br><a href='index.php'>العودة للصفحة الرئيسية</a>
    <?php
        else:
            echo "<h2>خطأ في حذف الطالب</h2>";
        endif;
    ?>
</center>
</body>
</html>



