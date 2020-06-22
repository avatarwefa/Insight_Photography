<?php

require "../lib/queries.php";
$conn = myConnect();
if (isset($_POST["btnSignup"]))
{

    $flag = 0;
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $retypepassword = $_POST["txtRetypePassword"];
    $fullname = $_POST["txtFullName"];
    $gender = $_POST["gender"];
    $email = $_POST["txtEmail"];
    $date = date("Y-m-d ");
    $idgroup = $_POST["idgroup"];
    $qr1 = 
          "
            select * from USER
            where USER.USER_NAME = '$username' or USER.EMAIL = '$email'
            
          ";
  $result = mysqli_query($conn,$qr1);
    
if ($username == "" || $password == "" || $fullname == "" || $gender == "" || $idgroup == "")
{
    $flag = 1;
    echo "<script type='text/javascript'>alert('Please Check Your Information Again, Thank You');</script>";
}
if ( $password != $retypepassword  && $flag == 0 )
{
    $flag = 1;
    echo "<script type='text/javascript'>alert('Mật khẩu bạn nhập cần trùng khớp nhau');</script>";
}
if (mysqli_num_rows($result) > 0 && $flag == 0)
{
        $flag = 1;
    echo "<script type='text/javascript'>alert('Tên đăng nhập đã có người sở hữu! Hãy thay bằng tên khác!');</script>";
}
if ($flag == 0)
{
    if ($idgroup == 0)
    {
        $date = null;
    }


 echo  $qr = "
  INSERT INTO USER VALUES
  (null,'$username','$password','$gender','$email' ,'$fullname', '$date' ,'$idgroup')
  ";
  mysqli_query($conn,$qr);

    echo "<script type='text/javascript'>alert('Đăng kí thành công! Bạn có thể đăng nhập ngay bây giờ.);</script>";

}

}


?>

<?php
//require "../../lib/queries.php";
//$conn = myConnect();
if (isset($_POST["btnLogin"]))
{

  $user = $_POST["txtUser"];
  $pass = $_POST["txtPass"];

$qr1 = 
  "
    select * from USER
    where USER.USER_NAME = '$user'
    
  ";
  $result = mysqli_query($conn,$qr1);
  $row_user = mysqli_fetch_array($result);
  if ($user == $row_user['USER_NAME'] && $pass == $row_user['PASSWORD'])
  {
    $_SESSION["USER_ID"] = $row_user['USER_ID'];
    $_SESSION["USER_NAME"] = $row_user['USER_NAME'];
    $fullname = $row_user['FULL_NAME'];

    $_SESSION["PASSWORD"] = $row_user['PASSWORD'];
    $_SESSION["FULL_NAME"] = $row_user['FULL_NAME'];
    $_SESSION["TRIAL_DATE"] =$row_user['TRIAL_DATE'];
    $_SESSION["EMAIL"] =$row_user['EMAIL'];
    $_SESSION["IDGROUP"] = $row_user['IDGROUP'];
        echo "<script> alert('Welcome $fullname');
window.setTimeout(function(){


    window.location.href = '../index.php';

}, 3000);
</script>";

  }
    

else
{
  echo "<script type='text/javascript'>alert('Đăng Nhập Thất Bại, Thử Lại Sau');</script>";

}
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Insight Sign Up!</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
    <!-- Include this for Ajax use-->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script language="javascript" type="text/javascript">
    $(document).ready(function()
{
    $('#txtSignIn').click(function()
    {
        $('.card-body').load('login/login.php');
    })
    
});

    </script>
</head>

<body>
    <div class="hello" id="hello">
        
    </div>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" div="card-body">
                    <h2 class="title">Form Đăng Kí!</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tên Đăng Nhập</label>
                                    <input class="input--style-4" type="text" pattern="[a-zA-Z0-9]+" required name="txtUsername">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mật khẩu</label>
                                    <input class="input--style-4" type="Password" name="txtRetypePassword">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Giới Tính</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Nam
                                            <input type="radio" checked="checked" value="1" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Nữ
                                            <input type="radio" value="0" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nhập lại mật khẩu</label>
                                    <input class="input--style-4" type="Password" name="txtPassword">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="txtEmail">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tên đầy đủ</label>
                                    <input class="input--style-4" type="text" name="txtFullName">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Loại Người Dùng</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="idgroup">
                                    <option disabled="disabled" selected="selected">Chọn ...</option>
                                    <option value="0">Cơ Bản</option>
                                    <option value="1">Chuyên Nghiệp</option>
                                    <option value="2">Nâng Cao</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button id="btnSignup" class="btn btn--radius-2 btn--blue" name="btnSignup" type="submit">Đăng Kí</button>
                        </div>
                        <br>
                        <div class="input-group" >
                            <label class="label" ></label>
                            
                           <a href="#" type="button" id="txtSignIn" >Đã có tài khoản? Đăng nhập tại đây!</a>
                          
                           
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->