<?php
ob_start();
session_start();
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
    $date = date('Y-m-d',strtotime($date. ' + 1 month'));
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
        echo "<script type='text/javascript'>alert('Kiểm tra các cột nhập liệu!');</script>";
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
        $password = md5($password);
        if ($idgroup == 0)
        {
        #$date = null;
            $date = '0000-00-00';
        }


        $qr = "
        INSERT INTO USER VALUES
        (null,'$username','$password','$gender','$email' ,'$fullname', '$date' ,'$idgroup')
        ";
        mysqli_query($conn,$qr);

        echo "<script type='text/javascript'>alert('Đăng kí thành công! Bạn có thể đăng nhập ngay bây giờ.);</script>";
        // echo($qr);

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
  if ($user == $row_user['USER_NAME'] && md5($pass) == $row_user['PASSWORD'])
  {
    if($row_user['IDGROUP'] == 5){
        $_SESSION["IDGROUP"] = $row_user['IDGROUP'];
        echo "<script type='text/javascript'>alert('Chào mừng bạn đến với trang quản trị Admin!');
        window.location.href='../admin/index.php';</script>";
    }

    $_SESSION["IDGROUP"] = $row_user['IDGROUP'];
    $user_id = $row_user['USER_ID'];
    $_SESSION["USER_ID"] = $row_user['USER_ID'];
    $_SESSION["TRIAL_DATE"] =$row_user['TRIAL_DATE'];
    if($_SESSION["IDGROUP"]==1 or $_SESSION["IDGROUP"]==2)
    {
        $time = date('Y-m-d',strtotime($_SESSION["TRIAL_DATE"]));
        if(date('Y-m-d') > $time)
        {
            $qr1 = "
            UPDATE USER SET USER.IDGROUP=0 WHERE USER.USER_ID = $user_id
            ";
            $_SESSION["IDGROUP"] = 0;
            $result = mysqli_query($conn,$qr1);
            echo "<script type='text/javascript'>alert('Dùng thử đã hết hạn!');</script>";
        }
    }

    $_SESSION["USER_NAME"] = $row_user['USER_NAME'];
    $fullname = $row_user['FULL_NAME'];
    $_SESSION["PASSWORD"] = $row_user['PASSWORD'];
    $_SESSION["FULL_NAME"] = $row_user['FULL_NAME'];

    $date = $_SESSION["TRIAL_DATE"];
    $_SESSION["EMAIL"] =$row_user['EMAIL'];

    $_SESSION["GENDER"] =$row_user['GENDER'];
    echo "<script> alert('Xin chào quay trở lại, $fullname ');
    window.setTimeout(function(){


        window.location.href = '../index.php';

        }, 1000);
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
            $('#txtSignUp').click(function()
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
                    <h2 class="title">Form Đăng Nhập!</h2>
                    <form method="POST">
                        <div class="row row-space">

                        </div>
                        <div class="row row-space">




                        </div>
                        <div class="input-group">

                            <div class="input-group">
                                <label class="label">Username</label>
                                <input class="input--style-4" type="text" name="txtUser" minlength="5" maxlength="30">
                            </div>


                        </div>
                        <div class="input-group">

                            <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" type="Password" name="txtPass" minlength="5" maxlength="30">
                            </div>

                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="btnLogin" id="btnLogin" type="submit">Đăng Nhập</button>
                        </div>
                        <br>
                        <div class="input-group" >
                            <label class="label" ></label>

                            <a href="#" type="button" id="txtSignUp" >Chưa tạo tài khoản? Đăng Kí tại đây!</a><br><br>
                            <a href="../ResetPassword/forgotPassword.php" type="button" id="txtSignUp" >Quên mật khẩu?</a>






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