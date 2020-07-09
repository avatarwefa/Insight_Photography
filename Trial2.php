<?php
ob_start();
session_start();
require "lib/queries.php";
$conn = myConnect();
$date = date("Y-m-d");
// var_dump($date);
//   $qr = "UPDATE `user` SET `TRIAL_DATE`="$date,`IDGROUP`=[value-8] WHERE `USER_ID`=[value-1]";
//   $qr = "
//   INSERT INTO USER VALUES
//   (null,'$username','$password','$gender','$email' ,'$fullname', '$date' ,'$idgroup')
//   ";
//   echo($qr);
//   mysqli_query($conn,$qr);
$user = $_SESSION["USER_NAME"];
$pass = $_SESSION["PASSWORD"];
// echo($user);
// echo($pass);
if (isset($_GET["coban"])) {
    if($user == "" or $pass ==""){
        header("location:pages/index.php?");
    }
    else{
        echo "<script>
    alert('Bạn đã đăng nhập!');
    window.location.href='index.php';
    </script>";
    
    }
}
 else {
    // echo"hi";
    $qr1 =
    "
    SELECT * from USER
    WHERE USER.USER_NAME = '$user'

    ";
    // var_dump($qr1);
    $result = mysqli_query($conn, $qr1);
    $row_user = mysqli_fetch_array($result);
    // var_dump($row_user);
    if ($user == $row_user['USER_NAME'] && ($pass) == $row_user['PASSWORD'])
    // if ($user == $row_user['USER_NAME'] && md5($pass) == $row_user['PASSWORD'])

    {
        $_SESSION["IDGROUP"] = $row_user['IDGROUP'];
        $_SESSION["USER_ID"] = $row_user['USER_ID'];
        $_SESSION["TRIAL_DATE"] = $row_user['TRIAL_DATE'];
        $user_id = $row_user['USER_ID'];
        // var_dump($user_id);


        if ($_SESSION["IDGROUP"] == 1 or $_SESSION["IDGROUP"] == 2) {
            $time = date('Y-m-d', strtotime($_SESSION["TRIAL_DATE"] . ' + 1 month'));
            // var_dump(date('Y-m-d'));
            // var_dump($date);
            // var_dump($time);
            //$time là trial
            if ($date > $time) {
                $qr1 = "
                UPDATE user SET USER.IDGROUP=0 WHERE USER.USER_ID = $user_id
                ";
                echo $qr1;
                $_SESSION["IDGROUP"] = 0;
                $result = mysqli_query($conn, $qr1);
                echo "<script type='text/javascript'>alert('Dùng thử đã hết hạn!');</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Chưa hết hạn dùng thử!');
              window.location.href='index.php';</script>";
            }
        } else if ($_SESSION["IDGROUP"] == 0 && $_SESSION["TRIAL_DATE"] == "0000-00-00") {

            if (isset($_GET["chuyennghiep"]) or  ($_SESSION["IDGROUP"] ==2)) {
                $qr1 = "
                UPDATE user SET user.IDGROUP = 2 WHERE user.USER_ID = $user_id;
                ";
                $qr11 = "
                UPDATE user SET user.TRIAL_DATE= '$date' WHERE user.USER_ID = $user_id;
                ";

                $_SESSION["IDGROUP"] = 2;
                $result = mysqli_query($conn, $qr1);
                $result = mysqli_query($conn, $qr11);

                // var_dump($result);
                // echo $qr1;
                echo "<script type='text/javascript'>alert('Bắt đầu dùng thử gói chuyên nghiệp');
                 window.location.href='index.php';</script>";
            } else if (isset($_GET["nangcao"]) or ($_SESSION["IDGROUP"] == 1)) {

                $qr1 = "
                UPDATE USER SET USER.IDGROUP=1 WHERE USER.USER_ID = $user_id;
                UPDATE USER SET USER.TRIAL_DATE= '$date' WHERE USER.USER_ID = $user_id;
                ";
                echo $qr1;

                $_SESSION["IDGROUP"] = 1;
                $result = mysqli_query($conn, $qr1);
                echo "<script type='text/javascript'>alert('Bắt đầu dùng thử gói nâng cao');
                 window.location.href='index.php';</script>";
            }
        } else if ($_SESSION["IDGROUP"] == 0) {
            echo "<script type='text/javascript'>alert('Mỗi tài khoản chỉ có một phiên dùng thử');
              window.location.href='index.php';</script>";
        }
        else if  ($_SESSION["IDGROUP"] == 1){

        } 
    }
}
