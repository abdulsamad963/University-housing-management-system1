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
    <title>  صفحة أضافة العقوبة</title>

</head>
<body>

<?php 
    $stdId=$_GET['stdId'];
    $stdName=$_GET['name'];
?>
<center>

<table cellpadding='0' cellspacing='0' style='text-align: right;' class='table table-hover '>
 <form action="Punishment.php">
<tr>
    <td>
 <input type="text" name="name" value="<?= $stdName ?>" readonly>
    </td>
    <td>
        اسم الطالب الثلاثي
    </td>
</tr>
<tr>
<td>
    <input type="hidden" name="stdId" value="<?= $stdId ?>">
    </td>
</tr>


<tr>

<td>
<input type="text" id="days" name="days"  placeholder="مدة الفصل" hidden>
    <select id="type" name="type" onchange="test_temp()">
        <option value="إنذار">إنذار</option>
        <option value="توبيخ">توبيخ</option>
        <option value="فصل مؤقت">فصل مؤقت</option>
        <option value="فصل نهائي">فصل نهائي</option>
    </select>
</td>
<td>
    اختر نوع العقوبة 
</td>
</tr>

<tr>
    <td>
    <input type="text" name="reason" size="70" required>
    </td>

    <td>
    سبب العقوبة
    </td>
</tr>

<tr>
    <td>
    <input type="date" name="date" value="<?= date('Y-m-d'); ?>" >
    </td>
    <td>
تاريخ إصدار العقوبة
    </td>
</tr>

<tr>
<td>
<input type="date" name="excDate" required>
</td>

<td>
تاريخ بدء تنفيذ العقوبة
</td>

</tr>
</table>

<input type="submit" value="إضافة العقوبة" class="btn-success"><br>


</form> 
<a href="index.php" class="link pb-5 fw-bold" id="ds">العودة للصفحة الرئيسية</a>
</center>
<script>
    function test_temp()
    {
        var title=document.getElementById("type").selectedIndex;
        if(document.getElementsByTagName("option")[title].value==="فصل مؤقت")
        {
            document.getElementById("days").removeAttribute("hidden");
        }
        else
        {
            document.getElementById("days").setAttribute("hidden" ,"");
        }
    }
</script>
</body>
</html>