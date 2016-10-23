<?php
/*
 * Template name: Xếp hạng
 * */
?>
<?php get_header();?>
    <div id="main">
        <div class="ctnMn clbt">
<!--            <div class="brd clbt">
                <a href="#">Trang chủ</a>
                <span class="arrBrd"> >> </span>
                <a href="#">Cuộc thi "Mẹ - Chuyên gia làm đẹp số 1"</a>
                <span class="arrBrd"> >> </span>
                <span class="clPnk">Đăng ký</span>
            </div>-->

            <div class="mnPage">


                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Bảng xếp hạng</h2>
                    </div>
                    <div class="ctaMn clbt">
                         <div class="ratTabl clbt top-title">
                                    <ul class="mnRat">
                                        <li class="colOne fl it_rat">
                                            <h4 class="fnt clGrn titRat">Họ tên</h4>
                                        </li>
                                         <li class="colTwo fl it_rat">
                                            <h4 class="fnt clGrn titRat">Điểm</h4>
                                        </li>
                                         <li class="colThr fl it_rat">
                                            <h4 class="fnt clGrn titRat">Thời gian</h4>
                                        </li>
                                    </ul>
                             </div>
                       <ul class="bxslider">
                           <li>
                              <?php
                                /*$debugs=  debug_com(-1);

                                   while ($debugs->have_posts()){
                                       $debugs->the_post();
                                        $get_diem=get_post_meta(get_the_ID(),'diem',true);
                                        $int_get_diem=intval($get_diem);
                                        if($int_get_diem<10)
                                        {
                                             $diem='0'.$int_get_diem;
                                             update_post_meta(get_the_ID(),'diem',$diem);
                                        }



                                    }*/
                                    /*$debugs=  debug_com(-1);

                                     while ($debugs->have_posts()){
                                         $debugs->the_post();
                                          $order_time=get_post_meta(get_the_ID(),'order_time',true);
                                          $len_order_time = strlen($order_time) ;
                                          if($len_order_time == 3){
                                              $order_time_3 = substr($order_time,-1);
                                              $order_time_1_2 = substr($order_time,0,2);
                                              $order_time_3_replace = '0'.$order_time_3;
                                              $order_time_replace = $order_time_1_2.$order_time_3_replace;
                                              update_post_meta(get_the_ID(),'order_time',$order_time_replace);
                                          }



                                      } */
                              ?>

                               <?php
                                $query=com_get_xep_hang();
                                global $wp_query;
                                $i=1;

                                foreach ($query as $result){
                                    $diem=$result->diem;
                                    $int_diem=intval($diem);
                                    $time_play=$result->thoi_gian_choi;
                                    $name=$result->post_title;
                                    $xu_ly_time=  explode(':',$time_play);
                                    $xu_ly_phut = trim($xu_ly_time[0]);
                                    $xu_ly_giay = trim($xu_ly_time[1]);
                                    $giay=$xu_ly_giay.' giây';
                                    $int_xu_ly_phut=intval($xu_ly_phut);
                                    $phut='';
                                    if($int_xu_ly_phut>0)
                                    {
                                        $phut=$int_xu_ly_phut.' phút' ;
                                    }
                                    $thoi_gian=$phut.' '.$giay;
                                    $post_author = $result->post_author;
                                    $user = get_user_by( 'id', $post_author );
                                    ?>
                                   <div class="ratTabl clbt">
                                       <ul  class="mnRat">
                                           <li class="colOne fl it_rat"><?php echo $user->user_login;?></li>
                                           <li class="colTwo fl it_rat"><?php echo $int_diem?>/10</li>
                                          <li class="colThr fl it_rat show_time"><?php echo $thoi_gian?></li>
                                       </ul>
                                    </div>
                                   <?php
                                    }
                               ?>

                           </li>
                       </ul>
                    </div>

                    <span class="shaMn"></span>
                    <div >
                            <?php wp_pagenavi(array('query'=>$wp_query))?>
                        </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>
