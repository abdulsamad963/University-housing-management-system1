<?php
    $stdId=$_GET['stdId'];
    $id=$_GET['id'];
    if(isset($_GET['name']))
    {
        $name=$_GET['name'];
    }
    $conn = new mysqli('localhost','root','','abdo');
    $sql="select * from punishment where punishment.id='$id'";
    $result=$conn->query($sql);
    $sql="select name,section,level,room from table3 where table3.id='$stdId'";
    $result2=$conn->query($sql);
    $prow=$result->fetch_array();
    $srow=$result2->fetch_array();
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
    <title>Document</title>
    
</head>
<body id='body'>
<center>
<button onclick="window.location='stdData.php?name=<?=$name?>'" class="btn-danger"> الرجوع للخلف</button> <br>

<button onclick="window.location='delPunish.php?id=<?=$id?>'" class='btn-success'>حذف العقوبة</button>
<?php if($prow['softDelete']=='0'): ?>
    <button onclick="window.location='softDelete.php?id=<?=$id?>&state=<?= 1?>'" class='btn-success'>طي العقوبة  </button>
<?php else:?>
    <button onclick="window.location='softDelete.php?id=<?=$id?>&state=<?= 0?>'" class='btn-success'>إلغاء طي العقوبة </button>
<?php endif?>

<button onclick='printPage()' class='btn-secondary'>طباعة الملف</button><br>
    <?php if($result->num_rows > 0): ?>
    <h3><?=$prow['type']?></h3>
    <div id='data'>
    <table cellpadding='0' cellspacing='0' style='text-align: right;' class='table table-hover table-striped'>
        <tbody> 
            
            <tr> <td>  <?= $srow['name']?> </td><td class="fw-bold"> اسم الطالب</td> </tr>
            <tr> <td> (<?=$srow['level']?>) <?=$srow['section']?> </td><td class="fw-bold" >الكلية والسنة الدراسية</td> </tr>
            <tr> <td>  <?=$srow['room']?> </td><td class="fw-bold">رقم الغرفة</td> </tr>
            <tr> <td>  <?=$prow['type']?> </td><td class="fw-bold">نوع العقوبة</td></tr>
            <tr> <td>  <?= $prow['id']?> </td><td class="fw-bold">رقم العقوبة</td> </tr>
            <?php if($prow['type']=="فصل مؤقت"): ?>
            <tr> <td>  <?=$prow['days']?> </td><td class="fw-bold">مدة العقوبة</td></tr>
            <?php endif; ?>
            <tr> <td>  <?=$prow['reason']?> </td><td class="fw-bold">سبب العقوبة</td> </tr>
            <tr> <td>  <?=$prow['date']?> </td><td class="fw-bold">تاريخ العقوبة</td> </tr>
            <tr> <td>  <?=$prow['excDate']?> </td><td class="fw-bold">تاريخ بدء تنفيذ العقوبة</td> </tr>
        </tbody>
        <?php endif; ?>
    </table>
    <br><br>
    <div class="row">
        <div class="col-6">اسم وتوقيع رئيس مجلس إدارة السكن الطلابي</div>
        <div class="col-6">اسم وتوقيع مشرف السكن الطلابي</div>
    </div>
    </center>
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