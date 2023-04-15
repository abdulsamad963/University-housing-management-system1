<?php
$conn = new mysqli('localhost','root');
$D1=$_GET['a2'];

$sql="select name,level,room,id,notes from abdo.table3 where section='$D1'  "; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>  صفحة طلاب <?= $D1 ?> </title>
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
            margin-left: 200%;
            color: chocolate;
        }
        .b{
            margin-left: 950%;
            color: chocolate;
        }
        .c{
            margin-left: 400%;
            color: chocolate;
        }
        .d{
            margin-left: 540%;
            color: chocolate;
        }
        
    
    </style>
</head>
<body id='body'>

<?php  
$i=1;

$result= $conn->query($sql); ?>
  
<center>   

    
<h3 > الطلاب الذين يدرسون في <span class="bg-info"><?= $D1 ?></span></h3>
<img src="p.png" alt="" width="200px">
<br>
<button onclick='printPage()' class='btn-secondary'>طباعة الملف</button><br>
<br>
<input type="text" id="name" onkeyup="filterSrch(1,'name')" placeholder="Search for names..">

    <input type="text" id="room" onkeyup="filterSrch(3,'room')" placeholder="Search for room..">

<br>
<br>
<div id='data'>
<table id="std" cellpadding='0' cellspacing='0' style='text-align: left;' class='table table-hover table-striped'>
    <tr >
        <th> الرقم </th>
        <th> الاسم </th>
        <th>السنة الدراسية</th>
        <th>رقم الغرفة</th>
        <th>الملاحظات</th>
        <th></th>
    </tr>
<?php while($row =mysqli_fetch_array($result)):?>
    <tr onclick="window.location='stdData.php?name=<?=$row['name']?>'" class="dataRow">
        <td> <?= $i++; ?></td>
        <td> <?= $row['name'] ?></td>
        <td> <?= $row['level'] ?></td>
        <td>  <?= $row['room'] ?> </td>
        <td>  <?=$row['notes'] ?></td>
    </tr>

<?php endwhile ?>
</table>
</div>
<a href="index.php" class="link pb-5 fw-bold">العودة للصفحة الرئيسية</a>
</center>


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