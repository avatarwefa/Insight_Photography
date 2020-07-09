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


// require "newsletter/connect.php";
// // require "lib/trangchu.php";
// $conn = MyConnect();
// ob_start();
// session_start();
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
      <title>ADMIN</title>
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
    <style>
      .cont {
        /*border: 1px solid black;*/
        /*background-color: lightblue;*/
        padding-top: 200px;
        padding-right: 30px;
        padding-bottom: 50px;
        padding-left: 80px;
        font-size: 25px;
      }
    </style>
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

          </div>

          <div class="right-div">
            <a href="#" class="btn btn-info pull-right">LOG ME OUT</a>
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
                  <li><a href="" >TRANG CHỦ</a></li>
                  <li><a href="quanLyThanhVien.php">QUẢN LÝ THÀNH VIÊN</a></li>
                  <li><a href="quanLyKhoaHoc.php" >QUẢN LÝ KHÓA HỌC </a></li>
                  <li><a href="quanLyBaiHoc.php" >QUẢN LÝ BÀI HỌC </a></li>
                  <li><a href="newsletter.php">NEWSLETTER</a></li>
                  <!-- <li><a href="./listQuangCao.php">QUẢN lÝ QUẢNG CÁO</a></li> -->
                </ul>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- MENU SECTION END-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 cont">WELCOME ADMINISTRATOR</div>
          <div class="col-md-7">
            <img src="admin.png">
          </div>
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
