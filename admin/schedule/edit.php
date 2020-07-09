<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");
 $SCHEDULE_ID = $_POST["SCHEDULE_ID"];
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  

 $sql = "UPDATE SCHEDULE SET ".$column_name."='".$text."' WHERE SCHEDULE_ID='".$USER_ID."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Update dữ liệu';  
 }  
 ?>