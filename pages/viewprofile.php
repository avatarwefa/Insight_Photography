<!--  -->

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
    header("Refresh:0");
}
    //header("Location:index.php")
?>
<li>
    <div class="card-container">
        <span class="pro" style="left: 5px;"><?php switch ($_SESSION["IDGROUP"]) {
            case 1:
            case 3:
            echo "Nâng Cao";
            # code...
            break;
            case 2:
            case 4:
            echo "Chuyên Nghiệp";
            # code...
            break;
            case 5:
            echo "Admin";
            # code...
            break;
            
            default:
            # code...
            echo "Cơ Bản";
            break;
        } ?></span>
        <img class="round" style="object-fit: contain; width: 20vh;" src="https://i.dlpng.com/static/png/5065892-my-profile-icon-png-327283-free-icons-library-profile-icon-png-500_500_preview.png" alt="user" />
        <h3><?php echo $_SESSION["FULL_NAME"] ?></h3>
        <?php if ($_SESSION['TRIAL_DATE'] != '0000-00-00') 
        {
            $time = date('Y-m-d',strtotime($_SESSION["TRIAL_DATE"] . ' + 1 month'));
        //$time = DateTime::createFromFormat('Y-m-d', $_SESSION["TRIAL_DATE"]);
        //$time = strtotime($_SESSION["TRIAL_DATE"]);
    // $_SESSION['TRIAL_DATE'] = strtotime($_SESSION['TRIAL_DATE']);
    //$time = $time->modify('+1 month');
            echo "<h6> Hết hạn : ".   $time ."</h6>";
        }
        ?>
        <p><?php echo $_SESSION['EMAIL'] ?></p>
        <div class="buttons">
           <a class="btn btn-outline-dark" href="course.php" role="button">Khóa Học Của Bạn</a>
        </div>
        <div class="buttons">
            <a class="btn btn-outline-dark" href="pages/editProfile.php" role="button">Thay đổi thông tin người dùng</a>
            <form method="post">
                <button class="primary ghost" name="btnSignout">
                    Đăng Xuất
                </button>
            </form>
        </div>
        
    </div>
</li>