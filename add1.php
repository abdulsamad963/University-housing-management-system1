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
    <title> صفحة إضافة طالب </title>

</head>
<style>
    h2{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 50px;
        color: SlateGray;
    }
p{
    color: brown;
    font-size: x-large;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
input,select{
 
    border-style: outset;
    border: 2px solid DimGray ;
     border-radius: 10px;
}
<?php 
    $stdId=$_GET['stdId'];
    $stdName=$_GET['name'];
?>

</style>
<body>

<a href="index.php" class="btn btn-danger"> الرجوع للخلف</a>

 <center>

 <h2>
    الصفحة الرئيسية لإضافة طالب
 </h2>
 
    <form action="add.php" method="post" enctype="multipart/form-data">

        <table cellpadding='0' cellspacing='0' style='text-align: right;' class='table table-hover table-striped'>
  <tbody> 
   <tr> <td>  <input type="text" name="name" required  autofocus > </td><td>الاسم واللقب باللغة العربية</td> </tr>
   <tr> <td>  <input type="text" name="fatherName" required > </td><td>اسم الأب </td> </tr>
   <tr> <td>  <input type="text" name="lname" required> </td><td>  الاسم واللقب باللغة الإنكليزية</td> </tr>
   <tr> <td> <input type="number"  name="h"></td><td>الرقم الوطني</td> </tr>
   <tr> <td>  <input type="date" name="date" required> </td><td> تاريخ الولادة</td> </tr>




   <tr> <td>  <input type="text" name="$"> </td><td> رقم إشعار الدفع </td> </tr>


   <td>
    <input type="hidden" name="stdId" value="<?= $stdId ?>">
    </td>

    </tr>



    <tr> <td>
    <input type="text" id="sick_type" name="sick_type" placeholder="نوع المرض" hidden>
    <select id="alhala" name="alhala" required  onchange="test_temp('alhala', 'alhala','مريض' ,'sick_type')">
    <option class='alhala'  value="غير محدد">--غير محدد--</option>
    <option class='alhala' value="سليم">سليم</option>
    <option class='alhala' value="مريض">مريض</option>
    </select>
    </td>
    <td>الحالة الصحية</td>
    </tr>


    <tr> <td><select  required name="dkan" >
        <option  value="غير محدد">--غير محدد--</option>
        <option  value="مدخن">مدخن</option>
        <option   value="غير مدخن">غير مدخن</option> </select></td><td> التدخين </td> </tr>

        <tr> <td>
        <input type="text" id="child_num"  name="num"   placeholder="عدد الأولاد" hidden>
        <select id="d" name="d"  onchange="test_temp('d', 'd' ,'متزوج','child_num')">
        <option class='d'>--غير محدد--</option>
        <option class='d' value="أعزب">أعزب</option>
        <option class='d' value="متزوج">متزوج</option> 
        </select>
        </td>
        <td>الحالة الأجتماعية </td>
        </tr>

        <tr> <td>  <input type="text" required name="numbrother"> </td><td>عدد الأخوة </td> </tr>


   <tr> <td>  <input type="text" required name="number"> </td><td> رقم التواصل</td> </tr>
   <tr> <td>  <input type="text" name="number2"> </td><td> رقم تواصل ولي الأمر</td> </tr>
   <tr> <td>   <select name="a">
    <option selected="selected" required value="لم يتم التحديد">--غير محدد--</option>
<option value="كلية الهندسة المعلوماتية ">كلية الهندسة المعلوماتية </option>
    <option value="كلية الهندسة المدنية">كلية الهندسة المدنية</option>
    <option value="كلية الهندسة الكيميائية">كلية الهندسة الكيميائية </option>
    <option value="كلية الهندسة الميكاترونيكس">كلية الهندسة الميكاترونيكس </option>
    <option value="كلية الهندسةالأتصالات">كلية الهندسة الأتصالات </option>
    <option value ="كلية الهندسة الزراعية">كلية الهندسة الزراعية</option> 
    <option value ="كلية التربية قسم معلم صف">كلية التربية قسم معلم الصف</option>
    <option value ="كلية التربية قسم معلم الأرشاد النفسي">كلية التربية قسم  الأرشاد النفسي</option>  
    <option value ="كلية الأدارة والأقتصاد">كلية الأدارة والأقتصاد</option> 
    <option value ="كلية الشريعة والقانون">كلية الشريعة والقانون</option>
    <option value ="كلية التربية قسم رياض الأطفال">كلية التربية قسم رياض الأطفال</option> 
    <option value =" كلية العلوم الصحية قسم التخدير">كلية التخدير</option>
    <option value ="كلية العلوم الصحية  قسم التمريض">كلية التمريض</option> 
    <option value ="كلية العلوم الصحية قسم المخبري">كلية المخبري</option> 
    <option value ="كلية العلوم الصحية قسم طب طوارئ">كلية طب طوارئ</option>  
    <option value ="كلية العلوم الصحية قسم القبالة">كلية القبالة </option> 

</select></td><td>الكلية </td> </tr> 

<tr> <td><select required name="x">

<option selected="selected" value="1">الأولى</option>
<option selected="selected"  value="2">الثانية</option>
<option selected="selected"  value="3">الثالثة</option>
<option selected="selected"  value="4">الرابعة</option></td><td>   السنة الدراسية </td> </tr>
   <tr> <td> <input type="text"  name="b"></td><td>مكان الأٌقامة </td> </tr> 
   <tr> <td> <input type="number"  name="c"></td><td>بعد الأقامة عن الجامعة </td> </tr>

    <tr> <td><select id="years" name="e">
        <option selected="selected" value="2022">--غير محدد--</option>
        <option value="ضعيف">ضعيف</option>
        <option value="متوسط">متوسط</option>
        <option value="ميسور">ميسور</option></td><td>   الوضع المادي </td> </tr>
        <tr> <td>  <input type="text" name="work"> </td><td>العمل الحالي</td> </tr>
        <tr> <td> <input type="text"  name="f"></td><td>الملاحظات </td> </tr>
        <tr> <td> <input type="number"  name="g"></td><td>رقم الغرفة </td> </tr>






            <tr> <td>  <input type="text" name="k"> </td><td>  عمل الأب</td> </tr>
            
            <tr> <td>  <input type="text" name="l"> </td><td>  عمل الأم</td> </tr>
            <tr> <td> <input type="file"  name="i"></td><td>صورة الشخصية </td> </tr>

            <!-- <a href="addItems.php"><tr> <td><p> *******************  إدخال المواد المستلمة من المستودع ******************* </p></td></tr></a>
            

            <tr> <td> <input type="number"  name="i1"></td><td>عدد فرشة</td> </tr>
            
            <tr> <td> <input type="number"  name="i2"></td><td>عدد مخدة </td> </tr>
            
            <tr> <td> <input type="number"  name="i3"></td><td>عدد لحاف</td> </tr>
            
            <tr> <td> <input type="number"  name="i4"></td><td>عدد غطاء فرشة</td> </tr>
            
            <tr> <td> <input type="number"  name="i5"></td><td>عدد غطاء لحاف </td> </tr>
            
            <tr> <td> <input type="number"  name="i6"></td><td>عدد غاطاء مخدة </td> </tr>
            
            <tr> <td> <input type="number"  name="i7"></td><td>عدد حرامات </td> </tr> -->

            
</table>
    <button name='upload' class="btn btn-secondary btn-lg active">إضافة الطالب</button>
</center> 



</form>
     <script>
    function test_temp(select_id,cls , val,ele_id)
    {
        var title=document.getElementById(select_id).selectedIndex;
        if(document.getElementsByClassName(cls)[title].value===val)
        {
            document.getElementById(ele_id).removeAttribute("hidden");
        }
        else
        {
            document.getElementById(ele_id).setAttribute("hidden" ,"");
        }
    }
</script>   
</body>
</html>

