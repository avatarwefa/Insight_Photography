<?php
$connect = myConnect();
            //Kiểm tra kết nối
            if (!$connect) {
                die('kết nối không thành công ' . mysqli_connect_error());
            }
            //khởi tạo biến $i để đếm;
            $i = 1;
            //câu truy vấn
            $sql = "SELECT * FROM BUNDLE";
            //kiểm tra
            if ($result = mysqli_query($connect, $sql)) {
                while ($row = mysqli_fetch_array($result)) {
                    //hiển thị dữ liệu
                    // echo 'Dữ liệu thứ ' . $i . ' gồm: ' . $row['id'] . '-' . $row['title'] . '-' . $row['content'] . '<br/>';
                    echo '<div class="pricing-plan">
                    <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
                    <h2 class="pricing-header">'.$row['BUNDLE_NAME'].'</h2>
                    <p>'.$row['BUNDLE_DES'].'<p>
                    <span class="pricing-price">'.$row['BUNDLE_PRICE'].'</span>';
                    if ($row['ID']==1)
                    {
                        echo "<a href='Trial2.php?coban=true' class='pricing-button'>Dùng thử</a>
                        </div>";
                  
                    }
                    else if ($row['ID']==2)
                    {
                        echo "<a href='Trial2.php?nangcao=true' class='pricing-button'>Dùng thử</a>
                        </div>";

                    }
                    else if($row['ID']==3)
                    {
                        echo "<a href='Trial2.php?chuyennghiep=true' class='pricing-button'>Dùng thử</a>
                        </div>";

                    }

                //     echo '<a href="#/" class="pricing-button">Đăng kí</a>
                //   </div>';
                    //tăng $i lên 1
                    $i++;
                }
            } else
                //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($connect);
            //ngắt kết nối
            mysqli_close($connect);
?>