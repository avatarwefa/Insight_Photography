<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 $sql = "DELETE FROM user WHERE USER_ID = '".$_POST["USER_ID"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Xoá dữ liệu';  
 }  
 ?>