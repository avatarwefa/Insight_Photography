<?php
ob_start();
session_start();
require "../lib/queries.php";
if (!isset($_SESSION['USER_ID']))
{
    echo "<script type='text/javascript'>alert('Bạn phải đăng nhập trước!');</script>";
    header("location : ../index.php");
}
    
?>

<?php
if (isset($_POST["btnEdit"]))
    {
        $USER_ID = $_SESSION['USER_ID'];
        $conn = MyConnect();
        # code..
        if ($_POST['txtFullName'] != $_SESSION['FULL_NAME'])
        {
            $FULL_NAME = $_POST['txtFullName'];
            $qr = "UPDATE USER SET USER.FULL_NAME = '$FULL_NAME' WHERE USER.USER_ID = '$USER_ID'";
            mysqli_query($conn,$qr);
        }
        if ($_POST['GENDER'] != $_SESSION['GENDER'])
        {   
            $GENDER = $_POST['GENDER'];
            $qr = "UPDATE USER SET USER.GENDER = '$GENDER' WHERE USER.USER_ID = '$USER_ID'";
            mysqli_query($conn,$qr);
        }
        if ($_POST['txtEmail'] != $_SESSION['EMAIL'])
        {   
            $EMAIL = $_POST['txtEmail'];
            $qr = "UPDATE USER SET USER.EMAIL = '$EMAIL' WHERE USER.USER_ID = '$USER_ID'";
            mysqli_query($conn,$qr);
        }
        if ($_POST['txtPassword'] != "" && $_POST['txtRetypePassword'] != "")
        {
            if ($_POST['txtPassword'] == $_POST['txtRetypePassword'])
            {
                $Password = md5($_POST['txtPassword']);
                $qr = "UPDATE USER SET USER.Password = '$Password' WHERE USER.USER_ID = '$USER_ID' ";
            mysqli_query($conn,$qr);
            }
            else
            {
                echo "<script> alert('Mật khẩu không trùng khớp')";
                return false;
            }
        }
    unset($_SESSION["PASSWORD"]);
    unset($_SESSION["GENDER"]);
    unset($_SESSION["EMAIL"]);
    unset($_SESSION["FULL_NAME"]);
    $qr1 = 
  "
    select * from USER
    where USER.USER_ID = '$USER_ID'
    
  ";
    $result = mysqli_query($conn,$qr1);
  $row_user = mysqli_fetch_array($result);
    $_SESSION["PASSWORD"] = $row_user['PASSWORD'];
    $_SESSION["FULL_NAME"] = $row_user['FULL_NAME'];
    $_SESSION["EMAIL"] =$row_user['EMAIL'];
    $_SESSION["GENDER"] =$row_user['GENDER'];
        echo "<script> alert('Cập nhật thông tin thành công');
window.setTimeout(function(){


    window.location.href = 'editProfile.php';

}, 3000);
</script>";
            
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
    <title>Insight Edit!</title>

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

</head>

<body>
    <div class="hello" id="hello">
        
    </div>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" div="card-body">
                    <h2 class="title">Chỉnh sửa thông tin!</h2>
                    <form method="POST">
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mật khẩu</label>
                                    <input class="input--style-4" type="Password" name="txtRetypePassword">
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
                                    <label class="label">Giới Tính</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Nam
                                            <input type="radio" <?php if ($_SESSION['GENDER'] == '1' ) echo 'Checked' ?> value="1" name="GENDER">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Nữ
                                            <input type="radio" <?php if ($_SESSION['GENDER'] == '0' ) echo 'Checked' ?> value="0" name="GENDER">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="txtEmail" value="<?php echo $_SESSION['EMAIL'] ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tên đầy đủ</label>
                                    <input class="input--style-4" type="text" name="txtFullName" value="<?php echo $_SESSION['FULL_NAME'] ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-t-15">
                            <button id="btnEdit" class="btn btn--radius-2 btn--blue" name="btnEdit" type="submit">Lưu thay đổi</button>
                        </div>
                        <br>
                        <div class="input-group" >
                            <label class="label" ></label>
                            
                           <a href="../index.php" type="button" id="txtSignIn" >Trở về trang chủ!</a>
                          
                           
                           
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