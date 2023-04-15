<?php
    $conn = new mysqli('localhost','root','','abdo');

    if(isset($_GET['name'])):
        $name=$_GET['name'];
        $id=$_GET['id'];
        $sql="select * from items where id='$id'";
        $result=$conn->query($sql);
        $_result=$result->fetch_array();
    endif;
    $itemsName=['سرير حديد','فرشة ضغط','حرام صوف','وسادة','لحاف داكرون','غلاف فرشة'
    ,'وجه لحاف','وجه وسادة','خزانة حديد','مدفأة'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <title>المواد المستلمة</title>
</head>
<body>
    <center>
    <h3>الطالب <?= $name ?></h3>
    <form action="addItems.php" method="get" enctype="multipart/form-data">
    <input type="hidden" name="stdId" value="<?=$stdId?>">
        
    <table cellpadding='0' cellspacing='0' style='text-align: right; direction:rtl;' class='table table-hover table-striped'> 
    <tr>
        <th>م</th>
        <th>اسم المادة</th>
        <th>العدد</th>
    </tr> 
    <?php for($i=0;$i<10;$i++){  ?>
        <tr>
            <td><?=$i+1?></td>
            <td><?=$itemsName[$i]?> </td>
            <td><input type="number" value="<?=$_result[$i+1]?>" disabled></td>
        </tr>
    <?php  }; ?>
    </table>
    
    </form>
    </center>
</body>
</html>