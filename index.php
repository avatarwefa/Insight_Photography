<?php
include "lib/queries.php";
ob_start();
session_start();

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
                <div class="col-md-7">
                    <h2>Insight Photography, chúng tôi là ai?.</h2>
                    <p>Nhiếp ảnh là một bộ môn nghệ thuật mới, nhưng để học được nó không phải ai cũng nắm rõ các kỹ năng. Vì vậy chúng tôi - những chuyên gia về lĩnh vực nhiếp ảnh ở đây để giúp bạn.</p>
                    <p>Chúng tối biết, việc học là vô tận, vì vậy chúng tôi luôn cập nhật các bài giảng của chúng tôi cùng với các công nghệ tân tiến nhất.</p>

                    <p>Mọi nội dung được chúng tôi chọn lựa kỹ càng và đem đến cho người dùng một trải nghiệm tuyệt vời, để các học viên luôn đến với chúng tôi với mục đích giải trí, đồng thời khơi gợi lên những khao khát về nghệ thuật bên trong bạn.</p>
                    <a class="btn btn-danger btn-lg" href="#photos"> Lượn 1 vòng <i class="fa fa-arrow-circle-o-right"></i> </a>
                </div>
                <div class="col-md-5">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1563206748-a8d1142ea31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="achievement" class="number wow fadeInUp" data-wow-delay="300ms">
        <!-- thay đổi ảnh tại style.css ở class .number .container-fluid [approximately row 102] -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 opaline col-md-offset-6">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Các thống kê sơ bộ</h3>
                                <h5>Mắt thẩm mỹ và tính chuyên nghiệp là thứ có thể học được!</h5>
                                <p>Chúng tôi đã "cho ra lò" hàng loạt các nhiếp ảnh gia thứ thiệt mà sản phẩm của những bạn trẻ này đã len lõi trên khắp các mặt báo nổi tiếng ở Việt Nam.</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <!-- thay đổi số tại assets/js/scripts.js  -->
                            <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
                                <h5>Số học viên theo học</h5>
                                <h3 class="odometer 01">00000</h3>
                            </div>
                            <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-2 col-md-offset-2 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                                <h5>Số đơn vị bài học</h5>
                                <h3 class="odometer 02">00000</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Features">
        <div class="container">
            <div class="row features">
                <h1 class="arrow" style="text-align:center">KHOÁ HỌC NÀY CÓ GÌ?</h1>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="typcn typcn-pencil x3"></span>
                    <h4>Lý thuyết về nhiếp ảnh</h4>
                    <p>Bạn lo sợ vì xuất phát từ con số 0? Khoá học sẽ bao gồm các kiến thức nền tảng và căn bản nhất về nhiếp ảnh. Các bố cục cần có để nhiếp ảnh đẹp và các kiến thức và các loại máy ảnh, lens trên thị trường.</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                    <span class="typcn typcn-camera-outline x3"></span>
                    <h4>Thao tác thật.</h4>
                    <p>Các bạn sẽ được cùng đoàn của chúng tôi đi tới những vùng đất kì diệu, được thực hành các kiến thức đã học.</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                    <span class="typcn typcn-bookmark x3"></span>
                    <h4>Ảnh đẹp cần có filter</h4>
                    <p>Các kiến thức về chỉnh sửa ảnh trên các ứng dụng tối tân nhất hiện nay, từ Adobe Photoshop hay chỉ là Snapseed trên điện thoại, các khái niệm về chỉnh sửa ảnh sẽ đáp ứng các tiêu chí của bạn để cho ra một bức ảnh không thể tuyệt vời hơn.</p>
                </div>
            </div>
        </div>
    </section>




    <section id="review" class="story wow fadeInUp" data-wow-delay="300ms">
        <!-- thay đổi ảnh tại style.css ở class .story .container-fluid [approximately row 141] -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 opaline">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p class="lead"><i>Nâng cao kỹ năng và học hỏi không ngừng, đó là những gì tôi đã học được trong khoá học của Insight Photography.</i></p>
                                <p><i>Là một nhà báo tác nghiệp hơn 5 năm, tôi hiểu được câu nói "Một bức tranh hơn ngàn lời nói", khoá học là thú vui thanh tao sau những giờ làm việc căng thẳng, và sau những trải nghiệm đó là nấc thang cao hơn cho sự nghiệp.</i></p>
                                <h6 class="lead"> – Amber Nguyễn</h6>
                                <p><small>Phóng viên - biên tập viên<br>
                                        Tại website tin tức hàng đầu Việt Nam VN-Express.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Pricing-->

    <section class="intro text-center section-padding" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wp1">
                    <h1 class="arrow">BẢNG GIÁ DỊCH VỤ</h1>
                    <p>Chúng tôi đã tính toán và cân nhắc rất kỹ khi đưa ra những khoá học sau để phù hợp vơi nhiều đối tượng nhất có thể, khoá học phía bên phải đã bao gồm các tính năng của khoá học bên trái nó cộng với các tính năng cao cấp hơn.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="blog wow fadeInUp" data-wow-delay="300ms">

        <div class="background">
            <div class="container">
                <div class="panel pricing-table">

                    <?php
                    if (!isset($_SESSION['USER_NAME'])) {
                        require('pages/viewlogin.php');
                    } else {
                        require('pages/viewprice.php');
                    }
                    ?>
                    <!-- <div class="pricing-plan">
        <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
        <h2 class="pricing-header">CƠ BẢN</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Stream các video về nhiếp ảnh cơ bản, các tips mới nhất</li>
          <li class="pricing-features-item">Tutorial về chỉnh sửa ảnh & challenge hàng tuần</li>
        </ul>
        <span class="pricing-price">MIỄN PHÍ</span>
        <a href="#/" class="pricing-button">Đăng kí</a>
      </div>
      
      <div class="pricing-plan">
        <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
        <h2 class="pricing-header">CHUYÊN NGHIỆP</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Các video chuyên sâu về nhiếp ảnh</li>
          <li class="pricing-features-item">Các buổi học offline và truy cập vào kho nội dung trực tuyến có thể tải về</li>
        </ul>
        <span class="pricing-price">$150</span>
        <a href="#/" class="pricing-button is-featured">DÙNG THỬ</a>
      </div>
      
      <div class="pricing-plan">
        <img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt="" class="pricing-img">
        <h2 class="pricing-header">NÂNG CAO</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Đi các chuyến dã ngoại thực hành các kỹ năng đã học</li>
          <li class="pricing-features-item">Nhận được feedback và hướng dẫn trong suốt khoá học</li>
        </ul>
        <span class="pricing-price">$400</span>
        <a href="#/" class="pricing-button">DÙNG THỬ</a>
      </div> -->

                </div>
            </div>
        </div>
    </section>




    <section id="photos" class="gallery wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <h3 class="text-center">Các hình ảnh "tác nghiệp" của học viên.</h3>
            <div class="row">
                <div class="masonry image-gallery">
                    <div class="grid-sizer"></div>
                    <div class="gutter-sizer"></div>
                    <?php
                    $connect = myConnect();
                    //Kiểm tra kết nối
                    if (!$connect) {
                        die('kết nối không thành công ' . mysqli_connect_error());
                    }
                    //khởi tạo biến $i để đếm;
                    $i = 1;
                    //câu truy vấn
                    $sql = "SELECT * FROM images";
                    //kiểm tra
                    if ($result = mysqli_query($connect, $sql)) {
                        while ($row = mysqli_fetch_array($result)) {
                            //hiển thị dữ liệu
                            // echo 'Dữ liệu thứ ' . $i . ' gồm: ' . $row['url'] . '-' . $row['title'] . '-' . $row['content'] . '<br/>';
                            //tăng $i lên 1
                            echo '<div class="item item-width2">
                                <a href=' . $row['url'] . '>
                                  <img src=' . $row['url'] . ' alt="" />
                                </a>
                            </div>';

                            $i++;
                        }
                    } else
                        //Hiện thông báo khi không thành công
                        echo 'Không thành công. Lỗi' . mysqli_error($connect);
                    //ngắt kết nối
                    mysqli_close($connect);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="clients wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <h4 class="text-center">Các đối tác của chúng tôi</h4>
            <div class="row">
                <div class="col-md-2">
                    <img src="images/logo-sample-01.jpg" class="img-responsive" alt="logo-sample1" />
                </div>
                <div class="col-md-2">
                    <img src="images/logo-sample-02.jpg" class="img-responsive" alt="logo-sample2" />
                </div>
                <div class="col-md-2">
                    <img src="images/logo-sample-03.png" class="img-responsive" alt="logo-sample3" />
                </div>
                <div class="col-md-2">
                    <img src="images/logo-sample-04.jpg" class="img-responsive" alt="logo-sample4" />
                </div>
                <div class="col-md-2">
                    <img src="images/logo-sample-05.jpg" class="img-responsive" alt="logo-sample5" />
                </div>
                <div class="col-md-2">
                    <img src="images/logo-sample-06.png" class="img-responsive" alt="logo-sample6" />
                </div>
            </div>
        </div>
    </section>
    <section id="newsletter" class="prefooter wow fadeInUp" data-wow-delay="300ms">
        <!-- change the image in style.css to the class .prefooter .container-fluid [approximately row 154] -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Để không bỏ lỡ những cập nhật mới.</h3>
                        <p>Đăng kí hộp thư newsletter để nhận ngay những thông tin mới nhất về những ưu đãi về khoá học, cũng như các buổi workshop miễn phí để không ngừng đột phá trong những shoot ảnh của bạn.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Email Here...">
                                <br>
                                <button type="button" class="btn btn-danger">Đăng kí Newsletter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-bg text-center section-padding contact-wrap" id="contact" data-wow-delay="300ms">
        <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="arrow">Liên hệ với chúng tôi</h1>
                </div>
            </div>
            <div class="row contact-details">

                <?php
                // khởi tạo kết nối
                $connect = myConnect();
                //Kiểm tra kết nối
                if (!$connect) {
                    die('kết nối không thành công ' . mysqli_connect_error());
                }
                //khởi tạo biến $i để đếm;
                $i = 1;
                //câu truy vấn
                $sql = "SELECT value FROM ADDRESS";
                //kiểm tra
                if ($result = mysqli_query($connect, $sql)) {
                    while ($row = mysqli_fetch_array($result)) {
                        //hiển thị dữ liệu
                        echo '<div class="col-md-4">
                    <div class="light-box box-hover">
                    <h3><i class="fa fa-mobile"></i></h3>
                      <h2>
                      <span>Địa chỉ</span></h2>
                      <p>' . $row['value'] . '</p>
                    </div>
                  </div>';
                    }
                } else
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($connect);
                //ngắt kết nối
                mysqli_close($connect);


                ?>

                <?php
                // khởi tạo kết nối
                $connect = myConnect();
                //Kiểm tra kết nối
                if (!$connect) {
                    die('kết nối không thành công ' . mysqli_connect_error());
                }
                //khởi tạo biến $i để đếm;
                $i = 1;
                //câu truy vấn
                $sql = "SELECT value FROM PHONE";
                //kiểm tra
                if ($result = mysqli_query($connect, $sql)) {
                    while ($row = mysqli_fetch_array($result)) {
                        //hiển thị dữ liệu
                        echo '<div class="col-md-4">
                    <div class="light-box box-hover">
                    <h3><i class="fa fa-mobile"></i></h3>
                      <h2>
                      <span>Điện thoại</span></h2>
                      <p>' . $row['value'] . '</p>
                    </div>
                  </div>' //tăng $i lên 1
                        ;
                        $i++;
                    }
                } else
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($connect);
                //ngắt kết nối
                mysqli_close($connect);


                ?>

                <?php
                // khởi tạo kết nối
                $connect = myConnect();
                //Kiểm tra kết nối
                if (!$connect) {
                    die('kết nối không thành công ' . mysqli_connect_error());
                }
                //khởi tạo biến $i để đếm;
                $i = 1;
                //câu truy vấn
                $sql = "SELECT value FROM EMAIL";
                //kiểm tra
                if ($result = mysqli_query($connect, $sql)) {
                    while ($row = mysqli_fetch_array($result)) {
                        //hiển thị dữ liệu
                        echo '<div class="col-md-4">
                    <div class="light-box box-hover">
                    <h3><i class="fa fa-mobile"></i></h3>
                      <h2>
                      <span>Email</span></h2>
                      <p><a href="#">' . $row['value'] . '</a></p>
                    </div>
                  </div>' //tăng $i lên 1
                        ;
                        $i++;
                    }
                } else
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($connect);
                //ngắt kết nối
                mysqli_close($connect);


                ?>
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


</body>

</html>