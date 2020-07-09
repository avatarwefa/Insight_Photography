<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 mysqli_set_charset($connect, 'UTF8');

 $sql = "DELETE FROM lessons WHERE lessons.lessons_id = '".$_POST["lessons_id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Xoá dữ liệu';  
 }  
 ?>