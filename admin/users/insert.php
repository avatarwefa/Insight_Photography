<?php  

 $connect = mysqli_connect("localhost", "root", "", "insight");  
  
echo $sql = "INSERT INTO user(USER_NAME,EMAIL,FULL_NAME,TRIAL_DATE,IDGROUP) VALUES('".$_POST["USER_NAME"]."', '".$_POST["EMAIL"]."','".$_POST["FULL_NAME"]."','".$_POST["TRIAL_DATE"]."','".$_POST["IDGROUP"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Thêm dữ liệu';  
 }  
 ?> 