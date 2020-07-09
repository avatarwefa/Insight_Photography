
<?php

require "lib/queries.php";
ob_start();
session_start();
if (!isset($_SESSION['USER_NAME']))
{
   echo "<script type='text/javascript'>alert('Bạn phải đăng nhập trước!!');</script>";
   header("location:index.php");
}

 //echo "<script type='text/javascript'>alert('$_SESSION['USER_NAME']');</script>";

 
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Insight Photography's Homepage</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/theme.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/pushy.css">
  <link rel="stylesheet" href="assets/css/masonry.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/odometer-theme-default.css">

  <!-- Hook -->



  <script>
    window.odometerOptions = {
        selector: '.odometer',
            format: '(,ddd)', //group số, và số chữ số sau digit
            duration: 13000, // thời gian đợi của javascript
            theme: 'default'
        };
    </script>
</head>

<body class="">
    <!-- Pushy Menu -->
    <nav class="pushy pushy-left">
        <ul class="list-unstyled">
           <?php if (!isset($_SESSION['USER_NAME'])) {
            require('pages/viewlogin.php');
        } else {
            require('pages/viewprofile.php');
        } ?>
        <li><a href="pages/index.php">Đăng Kí/ Đăng Nhập</a></li>
        <li><a href="#news">Chúng tôi là ai</a></li>
        <li><a href="#achievement">Những thành tựu</a></li>
        <li><a href="#Features">Tính năng của khoá học</a></li>
        <li><a href="#review">Học viên nói gì</a></li>
        <li><a href="#pricing">Bảng giá</a></li>
        <li><a href="#photos">Hình ảnh từ khoá học</a></li>
        <li><a href="#newsletter">Đăng kí newsletter</a></li>
        <li><a href="#contact">Liên hệ!</a></li>
        <li><a href="https://www.youtube.com/watch?v=dFz5E1rZqR4" target="_blank">Buổi học thử</a></li>
    </ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<header id="home">
    <div class="container-fluid">
        <!-- Thay đổi hình ảnh tại style.css to the class header .container-fluid [approximately row 50] -->
        <div class="container">
            <div class="row">

                <div class="col-xs-2 text-center">
                    <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                </div>
            </div>
            <div class="jumbotron">
                <h1><small>Nơi khơi nguồn cho đam mê</small>
                    <strong>Nhiếp ảnh</strong></h1>
                    <p>Đây là nơi bạn có thể biến những khoảnh khắc thành những bước ảnh đắc giá cho hành trình của bạn.</p>
                    <p><a class="btn btn-primary btn-lg" role="button">Tìm hiểu thêm</a> <a target="_blank" href="#Features" class="btn btn-lg btn-danger" role="button">Chúng tôi trên Youtube</a></p>
                </div>
            </div>
        </div>
    </header>

    <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <?php
                $course_id = -1;
                if (isset($_GET["course_id"])) {
                    $id = intval($_GET['course_id']);
                }

                $connect = mysqli_connect('localhost', 'root', '', 'insight');
                mysqli_set_charset($connect, "UTF8");
                if (!$connect) {
                    die('kết nối không thành công ' . mysqli_connect_error());
                }

                $sql = "SELECT * FROM COURSE WHERE course_id=$id";

                if ($result = mysqli_query($connect, $sql)) {
                    $row = mysqli_fetch_array($result)

                ?>
                    <h4><?php echo $row['name']; ?> - Giảng viên: <?php echo $row['teacher']; ?><h4><hr>
                            <div class="col-lg-8 col-md-8">

                            <?php
                        } else
                            //Hiện thông báo khi không thành công
                        echo 'Không thành công. Lỗi' . mysqli_error($connect);
                        //ngắt kết nối
                        mysqli_close($connect);
                        ?>

                        <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'insight');
                        mysqli_set_charset($connect, "UTF8");
                        if (!$connect) {
                            die('kết nối không thành công ' . mysqli_connect_error());
                        }
                        $i = 1;
                            //câu truy vấn

                            $sql = "SELECT * FROM LESSONS WHERE course_id = $id";
                            
                            //kiểm tra
                            if ($result1 = mysqli_query($connect, $sql)) {
                                $data = mysqli_fetch_array($result1);
                                
                            ?>
                            
                            <iframe class= "videoarea" id="youtube" 
                                src="https://www.youtube.com/embed/<?php echo $data["video_id"] ?> " 
                                frameborder="0" 
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                            <h5 id = "vidtitle">
                                Bài <?php echo $data["lessons_id"] ?>: <?php echo $data["title"] ?>
                            </h5>
                            <p id="description">
                            <?php echo $data["description"] ?>
                            </p>
                            
                                
                                    
                                
                            </div>
                            <div class="col-lg-4 col-md-4">
                            <div class="playlist" data-spy="scroll" data-target="#myScrollspy" data-offset="10">

                                <div class = "item">
                                    <a href="javascript:void(0)" 
                                        title = "<?php echo $data["title"] ?>" 
                                        des = "<?php echo $data["description"] ?>" 
                                        idx = "<?php echo $data["lessons_id"] ?>"
                                        data-src="https://www.youtube.com/embed/<?php echo $data["video_id"] ?>" 
                                        class="src">
                                            <img src = "https://i.ytimg.com/vi/<?php echo $data["video_id"] ?>/maxresdefault.jpg">
                                            <div class ="title">
                                                Bài <?php echo $data["lessons_id"] ?>: <?php echo $data["title"] ?>
                                                <p class ="des"> <?php echo $data["description"] ?>
                                            </div>
                                            
                                    </a>
                                </div>
                                
                                <?php
                                while ($data = mysqli_fetch_array($result1)) {
                                ?>
                                <div class = "item inner">
                                    <a href="javascript:void(0)" 
                                        title = "<?php echo $data["title"] ?>" 
                                        des = "<?php echo $data["description"] ?>" 
                                        idx = "<?php echo $data["lessons_id"] ?>"
                                        data-src="https://www.youtube.com/embed/<?php echo $data["video_id"] ?>" 
                                        class="src ">
                                            <img src = "https://i.ytimg.com/vi/<?php echo $data["video_id"] ?>/maxresdefault.jpg">
                                            <div class ="title">
                                                Bài <?php echo $data["lessons_id"] ?>: <?php echo $data["title"] ?>
                                                <p class ="des"> <?php echo $data["description"] ?>
                                            </div>
                                            
                                    </a>
                                </div>
                              

                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                            </div>

                        <?php
                        while ($data = mysqli_fetch_array($result1)) {
                            ?>
                            <a href="javascript:void(0)" 
                            title = "<?php echo $data["title"] ?>" 
                            data-src="https://www.youtube.com/embed/<?php echo $data["video_id"] ?>" 
                            class="src">
                            <?php echo $data["title"] ?></a><br>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <?php
                } else
                echo 'Không thành công. Lỗi' . mysqli_error($connect);
                mysqli_close($connect);
                ?>
            </div>
        

        <div class ="container">
            <div class = "row">
                <div class =  "col-lg-8 col-md-8">
                    <div class="comment" data-spy="scroll" data-target="#myScrollspy" data-offset="10">
                        <div class ="item">
                            <div class ="username">
                                <img style="margin: 20px;" width="7%" src = "images/user.png">
                                <b>User_name</b>
                            </div>
                            Comment nè
                        </div><hr> 
                        <div class ="item">
                            <div class ="username">
                                <img style="margin: 20px;" width="7%" src = "images/user.png">
                                <b>User_name 2</b>
                            </div>
                            Comment 2 nè
                        </div><hr>
                    </div>
                    <br>
                </div>
                <div class = " col-lg-4 col-md-4 input">
                    <form  action="" method="get">
                        <input type="text" name="comment" placeholder="Nhập comment"/>
                        <input type="submit" name="ok" value="Gửi" /> 
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Kết nối qua mạng xã hội</h3>
                    <p>© 2019 Insight Photography. Được thế kế bởi Từ Ngọc Huy <a target="_blank" href="http://www.facebook.com/NgocHuyTuVEVO">InsightPhotography.com</a></p>
                </div>
                <div class="col-md-4">
                    <p class="text-right social"><i class="typcn typcn-social-facebook-circular"></i><i class="typcn typcn-social-twitter-circular"></i><i class="typcn typcn-social-tumbler-circular"></i><i class="typcn typcn-social-github-circular"></i><i class="typcn typcn-social-dribbble-circular"></i></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
    <script src="assets/js/masonry.js"></script>
    <script src="assets/js/pushy.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/odometer.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.src', function() {
                var src = $(this).attr('data-src');
                var title = $(this).attr('title');
                var idx = $(this).attr('idx');
                var des = $(this).attr('des');
                var caption = "Bài " + idx + ": " + title

                $("#youtube").attr('src', src += '?autoplay=1');
                $("#vidtitle").html(caption);
                $("#description").html(des);

            });
            });
        </script>



</body>
</html>