<div class="container">
                              <div class="section">
                                <!-- Blog style taken from https://codepen.io/Michael-luke/pen/PzGywb?editors=1000 -->
                                <div class="blog-post blog-single-post">
                                  <div class="single-post-title">
                                    <h2>Lịch các buổi học offline sắp tới</h2>
                                </div>
                                <div class="single-post-content">
                                    <table class="events-list">

                                        <?php
                                        $connect = mysqli_connect('localhost', 'root', '', 'insight');
                                        //Kiểm tra kết nối
                                        if (!$connect) {
                                            die('kết nối không thành công ' . mysqli_connect_error());
                                        }
                                        //khởi tạo biến $i để đếm;
                                        $now_date = time('Y-m-d');
                                        //câu truy vấn
                                        $sql = "SELECT * FROM SCHEDULE WHERE SCHEDULE.SCHEDULE_DATE > '$now_date' ORDER BY  SCHEDULE_DATE ASC";
                                        //kiểm tra
                                        $result = mysqli_query($connect, $sql);
                                        while($EventList = mysqli_fetch_array($result))
                                        {
                                            $event_date = $EventList['SCHEDULE_DATE'];
                                            $event_date = date("jS F, Y", strtotime($event_date)); 
                                        ?>
                                      <tr>
                                        <td>
                                          <div class="event-date">
                                            <div class="event-day"><?php echo date("jS", strtotime($event_date)); ?></div>
                                            <div class="event-month"><?php echo date("F", strtotime($event_date)); ?></div>
                                        </div>
                                    </td>
                                    <td>
                                      <?php echo $EventList['SCHEDULE_INFO'] ; ?>
                                  </td>
                                  <td class="event-venue hidden-xs"><i class="icon-map-marker"><?php echo $EventList['SCHEDULE_GADGETS'] ; ?> </i></td>
                                  <td class="event-price hidden-xs"><?php if ($EventList['SCHEDULE_FREE']==0) { echo 'FREE';} else echo 'VIP' ; ?></td>
                                  <td><a href="#" class="btn btn-grey btn-sm event-more"><?php echo $EventList['SCHEDULE_AREA'] ; ?> </a></td>
                                        </tr>

                                        <?php
                                    }
                                        ?>
                                    
                </table>

                </div>
                </div>
                </div>
                </div>
                </div>