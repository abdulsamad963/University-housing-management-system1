<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style1.css">
<script src="script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  جميع الطلاب في السكن الجامعي</title>
<style>
    
    h3
    {
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
    }
    .card
    {
        float: right;
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
    }
    .card img{
        width:100%;
        height: 200px;
    }
    main
    {
        width:60%;
    }
    .a{
        margin-left: 30%;
        color: chocolate;
    }
    .b{
        margin-left: 300%;
        color: chocolate;
    }
    .c{
        margin-left: 140%;
        color: chocolate;
    }
    .d{
        margin-left: 540%;
        color: chocolate;
    }
    .e{
        margin-left: 540%;
        color: chocolate;
    }
    
</style>
</head>
<body id="body">


<br><br>
    <center>
    <h3>صفحة جميع طلاب السكن </h3>  
    <a href="index.php" title="الرئيسية"><img src="p.png" width="200px" alt=""></a>

    <br>

    <button onclick='printPage()'><img src="images.png" alt="" width="60px"></button>
    <br>
    <br>
    <input type="text" id="name" onkeyup="filterSrch(1,'name')" placeholder="بحث عن طريق الاسم">
    <input type="text" id="section" onkeyup="filterSrch(4,'section')" placeholder="بحث عن طريق القسم">
    <input type="text" id="room" onkeyup="filterSrch(6,'room')" placeholder="بحث عن طريق رقم الغرفة">
    </center>
<?php
$conn = new mysqli('localhost','root');

$sql="select name,section,level,room,notes,id,place,marital,lname,fatherName from abdo.table3 order by room";
$result= $conn->query($sql); $i=1;?>
<div id="data" >
<table id="std" cellpadding='0' cellspacing='0' style='text-align: left;' class='table table-hover table-striped'>
    <tr>
        <th>الرقم</th>
        <th>الاسم واللقب</th>
        <th>اسم الأب</th>
        <th>الاسم باللغة الأجنبية</th>
        <th>الكلية</th>
        <th>السنة الدراسية</th>
        <th>رقم الغرفة</th>
        <th>الملاحظات</th>
        <th>المكان</th>
        <th>الحالة الأجتماعية</th>
    </tr>
<?php while($row =mysqli_fetch_array($result)): ?>
    <tr onclick="window.location='stdData.php?name=<?=$row['name']?>'" class="dataRow">
        <td> <?=  $i;?> </td>
        <td> <?= $row['name'] ?></td>
        <td> <?= $row['fatherName'] ?></td>
        <td> <?= $row['lname']?> </td>
        <td><?= $row['section'] ?>  </td>
        <td> <?= $row['level'] ?></td>
        <td> <?=$row['room']?> </td>
        <td> <?= $row['notes']?> </td>
        <td> <?= $row['place']?> </td>
        <td> <?= $row['marital']?> </td>
  
    </tr>
<?php $i++; endwhile ?>
</table>
</div>
<script>
    function printPage()
    {
        body=document.getElementById('body').innerHTML;
        data=document.getElementById('data').innerHTML;
        document.getElementById('body').innerHTML=data;
        window.print();
        document.getElementById('body').innerHTML=body;
    }
</script>
</body>
</html>