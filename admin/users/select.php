<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 $output = '';  
 $sql = "SELECT * FROM user ORDER BY USER_ID DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>
                     <th width="15%">Username</th> 
                     <th width="15%">Email</th>  
                     <th width="15%">Họ Tên</th>
                     <th width="15%">TRIAL DATE</th> 
                     <th width="5%">idGroup</th>
                     <th width="20%">Password</th> 
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["USER_ID"].'</td>  
                     <td class="USER_NAME" data-id1="'.$row["USER_ID"].'" contenteditable>'.$row["USER_NAME"].'</td>  
                     <td class="EMAIL" data-id2="'.$row["USER_ID"].'" contenteditable>'.$row["EMAIL"].'</td>  
                     <td class="FULL_NAME" data-id3="'.$row["USER_ID"].'" contenteditable>'.$row["FULL_NAME"].'</td>  
                     <td class="TRIAL_DATE" data-id4="'.$row["USER_ID"].'" contenteditable>'.$row["TRIAL_DATE"].'</td>  
                     <td class="IDGROUP" data-id5="'.$row["USER_ID"].'" contenteditable>'.$row["IDGROUP"].'</td>  
                     <td class="PASSWORD" data-id6="'.$row["USER_ID"].'" contenteditable>'.$row["PASSWORD"].'</td>
                     <td><button type="button" name="delete_btn" data-id7="'.$row["USER_ID"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="USER_NAME" contenteditable></td> 
                <td id="EMAIL" contenteditable></td>
                <td id="FULL_NAME" contenteditable></td>
                <td id="TRIAL_DATE" contenteditable></td>
                <td id="IDGROUP" contenteditable></td>  
                <td id="PASSWORD" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                <td></td>  
                <td id="USER_NAME" contenteditable></td> 
                <td id="EMAIL" contenteditable></td>
                <td id="FULL_NAME" contenteditable></td>
                <td id="TRIAL_DATE" contenteditable></td>
                <td id="IDGROUP" contenteditable></td>  
                <td id="PASSWORD" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  ';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>