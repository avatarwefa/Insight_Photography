<?php  
 $connect = mysqli_connect("localhost", "root", "", "insight");  
 mysqli_set_charset($connect, 'UTF8');
 $output = '';  
 $sql = "SELECT * FROM lessons ORDER BY lessons_id";  
 $result = mysqli_query($connect, $sql);  

 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">LESSONS_ID</th>
                     <th width="20%">COURSE_ID</th> 
                     <th width="40%">VIDEO</th>  
                     <th width="20%">TITLE</th>
                     <th width="10%">Delete</th>  
                </tr>'; 
                // var_dump($sql); 
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["lessons_id"].'</td>  
                     <td class="course_id" data-id1="'.$row["lessons_id"].'" contenteditable>'.$row["course_id"].'</td>  
                     <td class="video" data-id2="'.$row["lessons_id"].'" contenteditable>'.$row["video"].'</td>  
                     <td class="title" data-id3="'.$row["lessons_id"].'" contenteditable>'.$row["title"].'</td>  
                     <td><button type="button" name="delete_btn" data-id7="'.$row["lessons_id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="course_id" contenteditable></td> 
                <td id="video" contenteditable></td>
                <td id="title" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                <td></td>  
                <td id="course_id" contenteditable></td> 
                <td id="video" contenteditable></td>
                <td id="title" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  ';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>