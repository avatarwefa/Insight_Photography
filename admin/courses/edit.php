<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");
 mysqli_set_charset($connect, 'UTF8');
 
 $course_id = $_POST["course_id"];
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 
 $sql = "UPDATE course SET ".$column_name."='".$text."' WHERE course_id='".$course_id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Update dữ liệu';  
 }  
 ?>