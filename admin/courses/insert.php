<?php  

 $connect = mysqli_connect("localhost", "root", "", "insight");  
 mysqli_set_charset($connect, 'UTF8');
 
  
echo $sql = "INSERT INTO course(NAME,TEACHER,THUMB,DESCRIPTION) VALUES('".$_POST["NAME"]."','".md5($_POST["TEACHER"])."' ,'".$_POST["THUMB"]."','".$_POST["DESCRIPTION"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Thêm dữ liệu';  
 }  
 ?> 