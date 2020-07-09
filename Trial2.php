<?php
ob_start();
session_start();
require "lib/queries.php";
$conn = myConnect();
$date = date("Y-m-d");
//   $qr = "UPDATE `user` SET `TRIAL_DATE`="$date,`IDGROUP`=[value-8] WHERE `USER_ID`=[value-1]";
//   $qr = "
//   INSERT INTO USER VALUES
//   (null,'$username','$password','$gender','$email' ,'$fullname', '$date' ,'$idgroup')
//   ";
//   echo($qr);
//   mysqli_query($conn,$qr);
$user = $_SESSION["USER_NAME"];
$pass = $_SESSION["PASSWORD"];
if (isset($_GET["coban"])) {
} else {
    $qr1 =
        "
      select * from USER
      where USER.USER_NAME = '$user'
      
    ";
    $result = mysqli_query($conn, $qr1);
    $row_user = mysqli_fetch_array($result);
    if ($user == $row_user['USER_NAME'] && ($pass) == $row_user['PASSWORD'])
    // if ($user == $row_user['USER_NAME'] && md5($pass) == $row_user['PASSWORD'])

    {
        $_SESSION["IDGROUP"] = $row_user['IDGROUP'];
        $user_id = $row_user['USER_ID'];
        $_SESSION["USER_ID"] = $row_user['USER_ID'];
        $_SESSION["TRIAL_DATE"] = $row_user['TRIAL_DATE'];

        if ($_SESSION["IDGROUP"] == 1 or $_SESSION["IDGROUP"] == 2) {
            $time = date('Y-m-d', strtotime($_SESSION["TRIAL_DATE"] . ' + 1 month'));
            if (date('Y-m-d') > $time) {
                $qr1 = "
                  UPDATE USER SET USER.IDGROUP=0 WHERE USER.USER_ID = $user_id
              ";
                echo $qr1;
                $_SESSION["IDGROUP"] = 0;
                $result = mysqli_query($conn, $qr1);
                echo "<script type='text/javascript'>alert('Dùng thử đã hết hạn!');</script>";
            }
        } else if ($_SESSION["IDGROUP"] == 0 && $_SESSION["TRIAL_DATE"] == "0000-00-00") {

            if (isset($_GET["chuyennghiep"])) {
                $qr1 = "
        UPDATE USER SET USER.IDGROUP=2 WHERE USER.USER_ID = $user_id;
        UPDATE USER SET USER.TRIAL_DATE= '$date' WHERE USER.USER_ID = $user_id;
    ";
                echo $qr1;

                $_SESSION["IDGROUP"] = 2;
                $result = mysqli_query($conn, $qr1);
                echo "<script type='text/javascript'>alert('Bắt đầu dùng thử gói chuyên nghiệp');</script>";
            } else if (isset($_GET["nangcao"])) {

                $qr1 = "
        UPDATE USER SET USER.IDGROUP=1 WHERE USER.USER_ID = $user_id;
        UPDATE USER SET USER.TRIAL_DATE= '$date' WHERE USER.USER_ID = $user_id;
    ";
                echo $qr1;

                $_SESSION["IDGROUP"] = 1;
                $result = mysqli_query($conn, $qr1);
                echo "<script type='text/javascript'>alert('Bắt đầu dùng thử gói nâng cao');</script>";
            }
        } else if ($_SESSION["IDGROUP"] == 0) {
            echo "<script type='text/javascript'>alert('Mỗi tài khoản chỉ có một phiên dùng thử');</script>";
        }
    }
}
