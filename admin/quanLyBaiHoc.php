<?php
//Chuyển hướng k bị lỗi
// ob_start();
// session_start();
	// echo $_SESSION["idGroup"];
	// if(!isset($_SESSION["idUser"]) || $_SESSION["idGroup"] != 1){
	// 	header("location:../index.php");
	// }
	//ket noi csdl
// require "../lib/dbCon.php";
// require "../lib/quantri.php";


require "lib/dbCon.php";
// require "lib/trangchu.php";
$conn = MyConnect();
ob_start();
session_start();
?>

<?php 
if(isset($_POST["btnSignout"]))
{
  unset($_SESSION["USER_ID"]);
  unset($_SESSION["USER_NAME"]);
  unset($_SESSION["PASSWORD"]);
  unset($_SESSION["FULL_NAME"]);
  unset($_SESSION["TRIAL_DATE"]);
  unset($_SESSION["EMAIL"]);
  unset($_SESSION["IDGROUP"]);
  header("location:../pages/index.php");
}
    //header("Location:index.php")
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->
      <title>Quản Lý Bài Học</title>
      <!-- BOOTSTRAP CORE STYLE  -->
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <!-- FONT AWESOME STYLE  -->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLE  -->
      <link href="assets/css/style.css" rel="stylesheet" />
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <!-- GOOGLE FONT -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    </head>
    <body>
      <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">

              TRANG QUẢN TRỊ

            </a>
             <div class="text-danger">Xin chào <?php echo $_SESSION["FULL_NAME"] ?></div>

          </div>

          <div class="right-div">
            <form method="post">
              <button class="btn btn-primary" name="btnSignout">
               LOG ME OUT
             </button>
           </form>
         </div>
       </div>
     </div>
     <!-- LOGO HEADER END-->
     <section class="menu-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="navbar-collapse collapse ">
              <ul id="menu-top" class="nav navbar-nav navbar-right">
                <li><a href="index.php" >TRANG CHỦ</a></li>
                <li><a href="quanLyThanhVien.php">QUẢN LÝ THÀNH VIÊN</a></li>
                <li><a href="quanLyKhoaHoc.php" >QUẢN LÝ KHÓA HỌC </a></li>
                <li><a href="" >QUẢN LÝ BÀI HỌC </a></li>
                <li><a href="newsletter.php">NEWSLETTER</a></li>
                <li><a href="quanLyLichTrinh.php">QUẢN LÝ LỊCH HỌC</a></li>
                <!-- <li><a href="./listQuangCao.php">QUẢN lÝ QUẢNG CÁO</a></li> -->
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">  
        <br />  
        <br />  
        <br />  
        <div class="table-responsive">  
         <h3 align="center">QUẢN LÝ BÀI HỌC INSIGHT</h3><br />
         <div id="live_data"></div>                 
       </div>  
     </div>  
   </div>
   <!-- CONTENT-WRAPPER SECTION END-->
   <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         &copy; INSIGHT | 2019-2020 
       </div>

     </div>
   </div>
 </section>
 <script>  
   $(document).ready(function(){  
    function fetch_data()  
    {  
     $.ajax({  
      url:"lessons/select.php",  
      method:"POST",  
      success:function(data){  
       $('#live_data').html(data);  
     }  
   });  
   }  
   fetch_data();  
   $(document).on('click', '#btn_add', function(){  
     var course_id = $('#course_id').text();
     var video = $('#video').text();
     var title = $('#title').text(); 


     $.ajax({  
      url:"lessons/insert.php",  
      method:"POST",  
      data:{course_id:course_id,video:video, title:title},  
      dataType:"text",  
      success:function(data)  
      {  
       // alert(data);  
       fetch_data();  
     }  
   })  
   });  
   function edit_data(lessons_id, text, column_name)  
   {  
     $.ajax({  
      url:"lessons/edit.php",  
      method:"POST",  
      data:{lessons_id:lessons_id, text:text, column_name:column_name},  
      dataType:"text",  
      success:function(data){  
       // alert(data);  
     }  
   });  
   }  
   $(document).on('blur', '.course_id', function(){  
     var course_id = $(this).data("id1");  
     var course_id = $(this).text();  
     edit_data(lessons_id, course_id, "course_id");  
   }); 
   $(document).on('blur', '.video', function(){  
     var lessons_id = $(this).data("id2");  
     var video = $(this).text();  
     edit_data(lessons_id, video, "video");  
   });      
   $(document).on('blur', '.title', function(){  
     var lessons_id = $(this).data("id3");  
     var title = $(this).text();  
     edit_data(lessons_id, title, "title");  
   });       
   $(document).on('click', '.btn_delete', function(){  
     var lessons_id = $(this).data("id7");  
     if(confirm("Bạn muốn xoá hàng này?"))  
     {  
      $.ajax({  
       url:"lessons/delete.php",  
       method:"POST",  
       data:{lessons_id:lessons_id},  
       dataType:"text",  
       success:function(data){  
        // alert(data);  
        fetch_data();  
      }  
    });  
    }  
  });  
 });  
</script>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<!-- <script src="assets/js/jquery-1.10.2.js"></script> -->
<!-- BOOTSTRAP SCRIPTS  -->
<!-- <script src="assets/js/bootstrap.js"></script> -->
<!-- CUSTOM SCRIPTS  -->
<!-- <script src="assets/js/custom.js"></script> -->
</body>
</html>
