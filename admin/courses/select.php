<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 mysqli_set_charset($connect, 'UTF8');
 $output = '';  
 $sql = "SELECT * FROM course ORDER BY course_id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">COURSE_ID</th>
                     <th width="20%">NAME</th> 
                     <th width="15%">TEACHER</th>  
                     <th width="15%">THUMB</th>
                     <th width="35%">DESCRIPTION</th> 
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["course_id"].'</td>  
                     <td class="name" data-id1="'.$row["course_id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="teacher" data-id2="'.$row["course_id"].'" contenteditable>'.$row["teacher"].'</td>  
                     <td class="thumb" data-id3="'.$row["course_id"].'" contenteditable>'.$row["thumb"].'</td>  
                     <td class="description" data-id4="'.$row["course_id"].'" contenteditable>'.$row["description"].'</td>  
                     <td><button type="button" name="delete_btn" data-id7="'.$row["course_id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="NAME" contenteditable></td> 
                <td id="TEACHER" contenteditable></td>
                <td id="THUMB" contenteditable></td>
                <td id="DESCRIPTION" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                <td></td>  
                <td id="NAME" contenteditable></td> 
                <td id="TEACHER" contenteditable></td>
                <td id="THUMB" contenteditable></td>
                <td id="DESCRIPTION" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  ';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>