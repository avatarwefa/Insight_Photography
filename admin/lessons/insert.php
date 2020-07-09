<?php  

 $connect = mysqli_connect("localhost", "root", "", "insight");  
 mysqli_set_charset($connect, 'UTF8');
 
  
echo $sql = "INSERT INTO lessons(course_id,video,title) VALUES('".$_POST["course_id"]."','".$_POST["video"]."','".$_POST["title"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Thêm dữ liệu';  
 }  
 ?> 