<?php
$conn = new mysqli('localhost','root');
$name=$_GET['name'];
$Err="";
$sql="select * from abdo.table3 where name='$name'  ";
$result= $conn->query($sql);

$row =mysqli_fetch_array($result);
$sql2 = "select id,date,type,softDelete from abdo.punishment where stdId='$row[id]' ";
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
    <title>   صفحة الطالب <?=$name?></title>
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
        input{
            border:0;
            outline:0;
            background-color: inherit;
            direction: rtl;
        }
        p{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: large;
        }
        
    </style>
</head>
<body id="body">



<?php

$result2=$conn->query($sql2);

echo '<center>';

if ($result->num_rows > 0): ?>
    <h3>صفحة الطالب</h3>



    <h3><?=$name?></h3>
    <h3><?=$Err?></h3>

    <a href="delete.php?id=<?=$row['id'] ?>&name=<?= $row['name'] ?>" class='btn btn-danger'>حذف الطالب</a>

    <a href="AddPunishment.php?stdId=<?= $row['id'] ?>&name=<?= $row['name'] ?>"><button  class='btn btn-danger'>إضافة عقوبة</button></a>
    <br>
    <br>

    <button onclick='printPage()'><img src="images.png" alt="" width="60px"></button>
    <br>
    <br>

    <button id="update" class='btn btn-danger'onclick="fun1()">تعديل</button>




<div id="data">
<table cellpadding='0' cellspacing='0' style='text-align: right;' class='table table-hover table-striped'>
<tbody> 
<!--  -->
    <form id="update" onSubmit="return confirm('هل متأكد من إجراء التعديلات؟')" action="update.php" >
<br>



    <div class='card' style='width: 12rem;'>
       <img src="<?=  $row['i']  ?>" width="300px"  alt="الصورة الشخصية للطالب"> <p>الصوة الشخصية للطالب</p>
</div>


        <input type="hidden" name='id' value="<?=  $row['id'] ?>">

        <tr><td><?=  $row['id'] ?></td>
        <td class="fw-bold">الرقم السكني</td> </tr>

        <tr><td><input type="text" name="name"  required  disabled value="<?=  $row['name'] ?>"> </td><td class="fw-bold" > الاسم واللقب باللغة العربية</td> </tr>
        <tr><td><input type="text" name="fatherName"  required  disabled value="<?=  $row['fatherName'] ?>"> </td><td class="fw-bold" > اسم الأب</td> </tr>

        <tr><td><input type="text" required  name="lname"disabled value="<?=  $row['lname'] ?>"> </td>
        <td class="fw-bold">  الاسم الثلاثي باللغة الأنكليزية</td> </tr>

        <tr><td><input type="text" required  name="date"disabled value="<?=  $row['date'] ?>"> </td>
        <td class="fw-bold">تاريخ الولادة</td> </tr>
        <tr> <td> <?=    $row['h']    ?></td>
        <td class="fw-bold">الرقم الوطني</td> </tr>


        <tr><td><input type="text"  required name="section" disabled value="<?=  $row['section'] ?>"> </td>
        <td class="fw-bold">الكلية </td> </tr>


        <tr><td><input type="text" disabled value="<?=  $row['level'] ?>"> </td>
        <td class="fw-bold">السنة الدراسية  </td> </tr> 


        <tr><td><input type="text" required  name="room" disabled value="<?=  $row['room'] ?>"> </td>
        <td class="fw-bold">رقم الغرفة </td> </tr> 

        <tr><td><input type="text" required name="place" disabled value="<?=  $row['place'] ?>"> </td>
        <td class="fw-bold">مكان الأقامة </td> </tr> 
        <tr><td><input type="text"  required name="marital" disabled value="<?=  $row['marital'] ?>"> </td>
        <td class="fw-bold">الحالة الأجتماعية </td> </tr> 



        <tr><td><input type="text" required  name="alhala"disabled value="<?=  $row['alhala'] ?>"> </td>
        <td class="fw-bold"> الحالة الصحية للطالب</td> </tr>

        <tr><td><input type="text" required  name="dkan"disabled value="<?=  $row['dkan'] ?>"> </td>
        <td class="fw-bold"> وضع الطالب</td> </tr>

        <tr><td><input type="text"  required name="number"disabled value="<?=  $row['number'] ?>"> </td>
        <td class="fw-bold">رقم التواصل</td> </tr>

        <tr><td><input type="text" required  name="number2"disabled value="<?=  $row['number2'] ?>"> </td>
        <td class="fw-bold">رقم تواصل ولي الأمر</td> </tr>

        <tr><td><input type="text" required  name="job" disabled value="<?=  $row['job'] ?>"> </td>
        <td class="fw-bold">العمل الحالي</td> </tr>



        <tr><td><input type="text" required  name="distance" disabled value="<?=  $row['distance'] ?>"> </td>
        <td class="fw-bold">بعد الأقامة عن الجامعة</td> </tr> 

        <tr><td><input type="text"  required name="financial" disabled value="<?=  $row['financial'] ?>"> </td>
        <td class="fw-bold">الوضع المادي </td> </tr> 

        <tr><td><input type="text" required  name="notes" disabled value="<?=  $row['notes'] ?>"> </td>
        <td class="fw-bold">الملاحظات </td> </tr> 



        <tr> <td>  <?=$row['k']?> </td>
        <td class="fw-bold">  عمل الأب</td> </tr>
        <tr> <td>  <?=$row['l']?> </td>
        <td class="fw-bold">  عمل الأم</td> </tr>

        <tr  class="dataRow fw-bold" onclick="window.location='viewItems.php?name=<?= $row['name']?>&id=<?= $row['id']?>' ">
        <td class="fw-bold">عرض المواد المستلمة</td>
        <td class="fw-bold">المواد المستلمة</td> </tr> </tr>

        <tr  class="dataRow fw-bold" onclick="punish()"><td>عرض العقوبات</td>
        <td class="fw-bold">العقوبات</td> </tr>
        <?php $i=1; while($row2=mysqli_fetch_array($result2)):?>
                
                
                <tr onclick="window.location='viewPunishment.php?stdId=<?= $row['id']?>&id=<?= $row2['id']?>&name=<?= $row['name']?>' " class="punish dataRow"  hidden>                
                <?php if($row2["softDelete"]==1){?>
                <td class="text-danger fw-bold">عقوبة مطوية </td>
                <?php }?>
                <td><span class="fw-bold"><?= $row2["date"] ?></span>  عقوبة 
                <span class="fw-bold"><?= $row2["type"] ?></span>  بتاريخ </td>
                <td class="fw-bold"><?= $i?></td> </tr>
        <?php $i++; endwhile ?>
        
        

    </tbody> 
    <!--  -->
    </table>
    </div>
    <input type="submit" id="update_submit"  class="btn-success" style="display:none;"  value="تأكيد التعديل"/>
    </form>
    <?php else:?>
    <span class="bg-info fw-bold fs-3"><?= $name ?></span>
    <h3> الاسم غير موجود </h3>
    <?php endif?>
    <img src="p.png" width="200px" alt="">
<br>
    
    <a href="addItemsView.php?name=<?= $row["name"]?>"class="link pb-5 fw-bold">إضافة مواد مستلمة من المستودع</a><br>
    <a href="index.php" class="link pb-5 fw-bold" id="ds">العودة للصفحة الرئيسية</a>
    
</center>
<script>
    
    function fun1(){
            document.getElementById("update").style.display="none";
            document.getElementById("update_submit").style.display="block";
            const input=document.querySelectorAll('input[type="text"]');
            for (let i = 0; i < input.length; i++) {
                input[i].disabled=false;
                input[i].style.border="1px solid ";
                input[i].style.backgroundColor="white";
            }           
    }
    function punish(result){
        const row=document.getElementsByClassName("punish");
        
            for (let i = 0; i < row.length; i++) {
                if(row[i].hidden==false){
                    row[i].setAttribute("hidden",'');
                    continue;
                }
                row[i].removeAttribute("hidden");
            }
    }
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