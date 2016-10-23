<?php get_header();?>
    <div id="main">
        <div class="ctnMn clbt">
<!--            <div class="brd clbt">
                <a href="#">Trang chủ</a>
                <span class="arrBrd"> >> </span>
                <span class="clPnk">Cuộc thi "Mẹ - Chuyên gia làm đẹp số 1"</span>
            </div>-->
            <div class="mnPage clbt">
                <div class="mysLf fl">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Bí quyết của mẹ</h2>
                    </div>
                    <div class="mnMys">
                        <div class="scdCtnMys">
                            <h3 class="fnt clPnk titMys titEven">
                                <span class="tit_inEvent">Làn da nhạy cảm của bé</span>
                            </h3>
                            <?php
                                $args = array(
                                    'posts_per_page' => 2,
                                    'category' => 10,
                                );
                                $posts = get_posts($args);
                                if (!empty($posts)):
                                    foreach ($posts as $post) {
                                        setup_postdata($post);
                                        $img_src_thumbnail = get_image_src_thumbnail($post->ID);
                                        $t = strtotime(get_the_date());
                                        $t_str = date('d-m-Y',$t);
                                        $t_arr = explode("-",$t_str);
                                        ?>
                            <div class="ardMys clbt">
                                <div class="fl lfScd">
                                    <p class="imgBx"><img src="<?=$img_src_thumbnail;?>" alt="" height="170" width="170"></p>
                                </div>
                                <div class="fl rfScd">
                                    <div class="bxTxtMys">
                                        <h3 class="fnt clCya titTxtMys"><?php echo ShortTitle(get_the_title(), 70); ?></h3>
                                        <div class="ctnMys clbt">
                                            <span class="tumb fl"><?=$t_arr['0'].'.'.$t_arr['1'].' '.$t_arr['2'];?></span>
                                            <div class="fl txtMys">
                                                <p><?php echo ShortTitle(get_the_excerpt(), 350); ?></p>
                                                <a class="more" href="<?php the_permalink();?>">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                            }
                              endif;
                              wp_reset_query();
                              ?>
                            <a class="btnAll bgIco" href="<?=site_url().'/category/lan-da-nhay-cam/';/*the_permalink();*/?>"></a>
                        </div>
                        <div class="scdCtnMys">
                            <h3 class="fnt clPnk titMys titEven">
                                <span class="tit_inEvent">Tủ quần áo của bé</span>
                            </h3>

                            <?php
                                $args = array(
                                    'posts_per_page' => 2,
                                    'category' => 12,
                                );
                                $posts = get_posts($args);
                                if (!empty($posts)):
                                    foreach ($posts as $post) {
                                        setup_postdata($post);
                                        $img_src_thumbnail = get_image_src_thumbnail($post->ID);
                                        $t = strtotime(get_the_date());
                                        $t_str = date('d-m-Y',$t);
                                        $t_arr = explode("-",$t_str);
                                        ?>
                            <div class="ardMys clbt">
                                <div class="fl lfScd">
                                    <p class="imgBx"><img src="<?=$img_src_thumbnail;?>" alt="" height="170" width="170"></p>
                                </div>
                                <div class="fl rfScd">
                                    <div class="bxTxtMys">
                                        <h3 class="fnt clCya titTxtMys"><?php echo ShortTitle(get_the_title(), 70); ?></h3>
                                        <div class="ctnMys clbt">
                                            <span class="tumb fl"><?=$t_arr['0'].'.'.$t_arr['1'].' '.$t_arr['2'];?></span>
                                            <div class="fl txtMys">
                                                <p><?php echo ShortTitle(get_the_excerpt(), 350); ?></p>
                                                <a class="more" href="<?php the_permalink();?>">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                            }
                              endif;
                              wp_reset_query();
                              ?>

                            <a class="btnAll bgIco" href="<?=site_url().'/category/tu-quan-ao-cho-be/';/*the_permalink();*/?>"></a>
                        </div>

                    </div>
                    <span class="shaAdv1"></span>
                </div>

                <div class="mysRf fl">
                    <?php
                    get_template_part('box', 'comfort');
                    get_template_part('box', 'tuvan');
                    ?>
                </div>

            </div>
        </div>
    </div>
<?php get_footer();?>