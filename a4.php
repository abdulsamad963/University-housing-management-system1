<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  صفحة الطلاب المتزوجين</title>

</head>
<body>
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
    <center>

    <h3>صفحة الطلاب المتزوجيين </h3>
    <img src="p.png" alt="" width="200px">
    <br>
    <button onclick='myfanction()' class='btn-secondary'>طباعة الملف</button><br>
<?php
$conn = new mysqli('localhost','root');
$D1="متزوج";
$i=1;
$sql="select id,name,section,level,notes from abdo.table3 where marital='$D1'  ";
$result= $conn->query($sql);?>

<table cellpadding='0' cellspacing='0' style='text-align: left;' class='table table-hover table-striped'>
    <tr>
        <th>الرقم</th>
        <th>الاسم</th>
        <th>الكلية</th>
        <th>السنة الدراسية</th>
        <th>عدد الأولاد</th>

        <th></th>
    </tr>
<?php while($row =mysqli_fetch_array($result)): ?>
    <tr onclick="window.location='stdData.php?name=<?=$row['name']?>'" class="dataRow">
        <td><?= $i; ?></td>
        <td> <?=$row['name']?></td>
        <td> <?=$row['section'] ?></td>
        <td><?= $row['level'] ?></td>
        <td><?= $row['notes'] ?></td>

    </tr>
<?php $i++; endwhile?>
</table>


<script>
        function myfanction(){
        window.print()
    }

</script>
<a href="index.php" class="link pb-5 fw-bold">العودة للصفحة الرئيسية</a>
</center>
</body>
</html>