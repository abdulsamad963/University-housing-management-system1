<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>إضافة طالب</title>
</head>
<body>
    


<?php

$conn = new mysqli('localhost','root','','abdo');
if(isset($_POST['upload']))  
{

$NAME=$_POST['name'];  
$fatherName=$_POST['fatherName'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$x=$_POST['x'];
$k=$_POST['k'];
$l=$_POST['l'];
$numbrother =$_POST['numbrother'];
$number=$_POST['number'];
$number2=$_POST['number2'];
$work=$_POST['work'];
$date=$_POST['date'];
$alhala=$_POST['alhala'];
$sick_type=isset($_POST['sick_type'])?$_POST['sick_type']:NULL;

$dkan=$_POST['dkan'];
$num=$_POST['num'];

//full name
$fullName=$NAME.$fatherName;

// رفع صورة الهوية 

$IMAGE2=$_FILES['i'];
$IMAGE_LCATION2=$_FILES['i']['tmp_name'];
$image_name2=$_FILES['i']['name'];
$image_up2="صور الهوية/".$image_name2;
// النهاية
}

$sql ="insert into table3 (name,fatherName, fullName,section,place,distance,marital,financial,notes,room,h,i,level,lname,k,l,number,job,number2,date,alhala,sick_type ,dkan,num,numbrother)
    values ('$NAME','$fatherName','$fullName' ,'$a' ,'$b','$c','$d','$e','$f','$g','$h','$image_up2',$x,'$lname','$k','$l','$number','$work','$number2','$date','$alhala', '$sick_type' ,'$dkan','$num','$numbrother')";
  


try {$conn->query($sql); ?>

    <center>
        <h2 class='text-success'>  تمت إضافة الطالب <?= $NAME.' ' ?> بنجاح  </h2>
        <h3 class="text-success"><a href="stdData.php?name=<?=$NAME?>">عرض صفحة الطالب</a></h3>
    <br><br><a href='index.php'>العودة للصفحة الرئيسية</a><br><br>";
    <a href='addItemsView.php?name=".$NAME."'> إضافة المواد المستلمة من المستودع </a></center>
<?php
}
catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1062): ?>
        <center>
            <h2 class="text-danger">  !...خطأ<br>الطالب <?= $NAME.' بن '.$fatherName.' '?>موجود في السجلات</h2>
            <br><br><a href='index.php'>العودة للصفحة الرئيسية</a><br><br></center>
    <?php
    else:
            throw $e;// in case it's any other error
    endif;
    
}

    
if ( move_uploaded_file($IMAGE_LCATION2 , 'صور الهوية/'.$image_name2))
{
    echo "<script>alert('تم رفع صورة الهوية بنجاح')   </script>";
}
else
{
    echo "<script>alert('حدث خطأ لم يتم رفع صورة الهوية ')   </script>";
}

?>


</body>
</html>