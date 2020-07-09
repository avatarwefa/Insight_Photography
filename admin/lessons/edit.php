<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");
 mysqli_set_charset($connect, 'UTF8');
 
 $lessons_id = $_POST["lessons_id"];
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 
 $sql = "UPDATE lessons SET ".$column_name."='".$text."' WHERE lessons_id='".$lessons_id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Update dữ liệu';  
 }  
 ?>