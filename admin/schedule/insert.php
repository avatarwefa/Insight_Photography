<?php  

 $connect = mysqli_connect("localhost", "root", "", "insight");  
  
echo $sql = "INSERT INTO SCHEDULE(SCHEDULE_INFO,SCHEDULE_GADGETS,SCHEDULE_DATE,SCHEDULE_AREA,SCHEDULE_FREE) VALUES('".$_POST["SCHEDULE_INFO"]."','".$_POST["SCHEDULE_GADGETS"]."','".$_POST["SCHEDULE_DATE"]."','".$_POST["SCHEDULE_AREA"]."','".$_POST["SCHEDULE_FREE"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Thêm dữ liệu';  
 }  
 ?> 