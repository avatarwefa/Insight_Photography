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
                    </div>
                </div>
            </div>
        </header>
        
        <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row ">
                <form class ="search center" action="course.php" method="get">
                    <input type="text" name="search" placeholder="Nhập từ khóa cần tìm"/>
                    <input type="submit" name="ok" value="Tìm kiếm" /> 
                </form>
                
                <?php 
                    if (isset($_REQUEST['ok'])) {
                        $search = addslashes($_GET['search']);
                        if (empty($search)) {
                            echo "Yeu cau nhap du lieu vao o trong";
                        } 
                        else {
                            $connect = mysqli_connect('localhost', 'root', '', 'insight');
                            mysqli_set_charset($connect, "UTF8");
                            if (!$connect) {
                                die('kết nối không thành công ' . mysqli_connect_error());
                            }
                            $query = "select * from course where name like '%$search%'";
                            if ($result = mysqli_query($connect, $query)) {
                                $num = mysqli_num_rows($result);
                                $i =1;
                                if ($num > 0 && $search != "") 
                                {
                                    echo "$num ket qua tra ve voi tu khoa <b>$search</b><br><br>";
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    //hiển thị dữ liệu
                                    // echo 'Dữ liệu thứ ' . $i . ' gồm: ' . $row['id'] . '-' . $row['title'] . '-' . $row['content'] . '<br/>';
                            ?>
                                    <div class="col-lg-4 col-md-6">
                                        <article class=" border-0 rounded-0 mb-4">
                                            <img src=' <?php echo $row['thumb'] ?> ' alt="" class="img-responsive">
                                            <div class="mt-3 px-4 py-3 ">
                                            <a href="lessons.php?course_id=<?php echo $row['course_id']?>">
                                                    <h3><?php echo $row['name'] ?> </h3> 
                                                </a>
                                                <h2 class="mb-3 font-secondary"><?php echo $row['teacher'] ?></h2>
                                                <p><?php echo $row['description'] ?></p>
                                            </div>
                                        </article>
                                    </div>
                                   
                            <?php
                                        $i++;
                                    
                                    }
                                } else
                                    //Hiện thông báo khi không thành công
                                    echo 'Không thành công. Lỗi' . mysqli_error($connect);
                                //ngắt kết nối
                                mysqli_close($connect);
                            }
                        }
                    }
                   
                    else {
                        $connect = mysqli_connect('localhost', 'root', '', 'insight');
                        mysqli_set_charset($connect, "UTF8");
                        //Kiểm tra kết nối
                        if (!$connect) {
                            die('kết nối không thành công ' . mysqli_connect_error());
                        }
                        //khởi tạo biến $i để đếm;
                        $i = 1;
                        //câu truy vấn
                        $sql = "SELECT * FROM COURSE";
  
                        //kiểm tra
                        if ($result = mysqli_query($connect, $sql)) {
                            while ($row = mysqli_fetch_array($result)) {
                                //hiển thị dữ liệu
                                // echo 'Dữ liệu thứ ' . $i . ' gồm: ' . $row['id'] . '-' . $row['title'] . '-' . $row['content'] . '<br/>';
                        ?>
                                <div class="col-lg-4 col-md-6" style="margin-top:30px;">
                                    <article class=" border-0 rounded-0 mb-4">
                                        <img src=' <?php echo $row['thumb'] ?> ' alt="" class="img-responsive">
                                        <div class="mt-3 px-4 py-3 ">
                                            <a href="lessons.php?course_id=<?php echo $row['course_id']?>">
                                                <h3><?php echo $row['name'] ?> </h3> 
                                            </a>
                                            <h2 class="mb-3 font-secondary"><?php echo $row['teacher'] ?></h2>
                                            <p><?php echo $row['description'] ?></p>
                                        </div>
                                    </article>
                                </div>
                               
                    <?php
                                $i++;
                            
                            }
                        } else
                            //Hiện thông báo khi không thành công
                            echo 'Không thành công. Lỗi' . mysqli_error($connect);
                        //ngắt kết nối
                        mysqli_close($connect);
                    }
                ?>
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
        

    </body>
</html>


