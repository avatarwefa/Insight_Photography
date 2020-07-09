<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight"); 

 $output = '';  
 $sql = "SELECT * FROM SCHEDULE ORDER BY SCHEDULE_ID DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>
                     <th width="50%">Thông Tin</th> 
                     <th width="10%">Dụng cụ</th>  
                     <th width="10%">Ngày</th>
                     <th width="10%">Cơ Sở</th> 
                     <th width="5%">Miễn phí?</th>
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["SCHEDULE_ID"].'</td>  
                     <td class="SCHEDULE_INFO" data-id1="'.$row["SCHEDULE_ID"].'" contenteditable>'.$row["SCHEDULE_INFO"].'</td>  
                     <td class="SCHEDULE_GADGETS" data-id2="'.$row["SCHEDULE_ID"].'" contenteditable>'.$row["SCHEDULE_GADGETS"].'</td>  
                     <td class="SCHEDULE_DATE" data-id3="'.$row["SCHEDULE_ID"].'" contenteditable>'.$row["SCHEDULE_DATE"].'</td>  
                     <td class="SCHEDULE_AREA" data-id4="'.$row["SCHEDULE_ID"].'" contenteditable>'.$row["SCHEDULE_AREA"].'</td>  
                     <td class="SCHEDULE_FREE" data-id5="'.$row["SCHEDULE_ID"].'" contenteditable>'.$row["SCHEDULE_FREE"].'</td>  
                     <td><button type="button" name="delete_btn" data-id6="'.$row["SCHEDULE_ID"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="SCHEDULE_INFO" contenteditable></td> 
                <td id="SCHEDULE_GADGETS" contenteditable></td>
                <td id="SCHEDULE_DATE" contenteditable></td>
                <td id="SCHEDULE_AREA" contenteditable></td>
                <td id="SCHEDULE_FREE" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                <td></td>  
                <td id="SCHEDULE_INFO" contenteditable></td> 
                <td id="SCHEDULE_GADGETS" contenteditable></td>
                <td id="SCHEDULE_DATE" contenteditable></td>
                <td id="SCHEDULE_AREA" contenteditable></td>
                <td id="SCHEDULE_FREE" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  ';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>