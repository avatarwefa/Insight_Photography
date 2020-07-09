<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 mysqli_set_charset($connect, 'UTF8');

 $sql = "DELETE FROM course WHERE course.course_id = '".$_POST["course_id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Xoá dữ liệu';  
 }  
 ?>