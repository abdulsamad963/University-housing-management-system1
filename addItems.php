<?php
    $conn = new mysqli('localhost','root','','abdo');
    $items=[];
    if(isset($_GET['i1'])):
    for($i=1;$i<=10;$i++){
        $x=$_GET['i'.$i];
        array_push($items,$x);
    }
    $stdId=$_GET['stdId'];
    $sql="insert into items values ('$stdId','$items[0]','$items[1]','$items[2]','$items[3]'
    ,'$items[4]','$items[5]','$items[6]','$items[7]','$items[8]','$items[9]')";
    if ($conn->query($sql) === TRUE){
        echo"تمت الإضافة بنجاح";
    }
    else {
        echo"error";
    }
    endif;

?>