<?php
/*
 * Template name: Ket qua vong 1
 * */
?>
<?php get_header();?>
    <div id="main">
        <div class="ctnMn clbt">
            <div class="mnPage">
                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">10 bạn có câu trả lời đúng và nhanh nhất vòng thi Trắc nghiệm</h2>
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
                        <div class="round">
                            <ul class="clbt">
                                <li class="hiLgh">
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">* thuyhang <span class="chp"><img src="<?php echo bloginfo('stylesheet_directory')?>/images/champion.png" alt=""/></span></li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">10 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hiLgh">
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">* thaihoa2011 <span class="chp"><img src="<?php echo bloginfo('stylesheet_directory')?>/images/champion.png" alt=""/></span></li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">10 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hiLgh">
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">* bao_nam <span class="chp"><img src="<?php echo bloginfo('stylesheet_directory')?>/images/champion.png" alt=""/></span></li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">10 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">namthuy</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">11 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">nguyenthibichnga29</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">12 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">hanhan</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">12 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">trangthuy</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">12 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">phuonganh</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">12 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">hanh</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">13 giây</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="ratTabl clbt">
                                        <ul class="mnRat clbt">
                                            <li class="colOne fl it_rat">tho2012</li>
                                            <li class="colTwo fl it_rat">100</li>
                                            <li class="colThr fl it_rat show_time">13 giây</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="shaMn"></span>
                </div>
                
                <p class="note">* 10 câu hỏi, mỗi câu tương ứng với 10 điểm. Thang điểm cao nhất là 100 điểm</p>
            </div>
        </div>
    </div>
<?php
//    $paged = get_query_var( 'paged' );
//    $paged = $paged ? $paged : 1;
//    $args=array(
//        'posts_per_page'=>100,
//        'post_type'=>'rb_content_image',
//        'paged' => $paged
//    );
//    $query=new WP_Query($args);
//    while ($query->have_posts()){
//        $query->the_post();
//        $link='http://www.webtretho.com/melachuyengialamdepso1/me-lam-dieu-cho-be/?image='.get_the_ID();
//        $like_count=com_get_face_like_count($link);
//        com_update_like_face(get_the_ID(),$like_count[0]->like_count);
//    }
     
?>
<?php get_footer();?>