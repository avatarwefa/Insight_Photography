<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 $sql = "DELETE FROM SCHEDULE WHERE SCHEDULE.SCHEDULE_ID = '".$_POST["SCHEDULE_ID"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Xoá dữ liệu';  
 }  
 ?>