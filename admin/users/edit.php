<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");

 $USER_ID = $_POST["USER_ID"];
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE user SET ".$column_name."='".$text."' WHERE USER_ID='".$USER_ID."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Update dữ liệu';  
 }  
 ?>