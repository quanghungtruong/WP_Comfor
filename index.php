<?php get_header();?>
<div id="main">
        <div class="ctnMn clbt">
<!--            <div class="brd clbt">
                <a href="<?php echo site_url();?>">Trang chủ</a>
                <span class="arrBrd"> >> </span>
                <span class="clPnk">Cuộc thi "Mẹ - Chuyên gia làm đẹp số 1"</span>
            </div>-->
            <div class="mnPage">

                <div class="clbt tpHp">
                    <div class="mysLf fl">
                        <div class="hdMn">
                            <h2 class="titHdMn fnt bgIco">Bí quyết của mẹ</h2>
                        </div>
                        <div class="mnMys hpCf">
                            <div id="tabMn" class="tabHp">
                                <ul class="tabs clbt">
                                    <li class="fl"><span class="dfTabs fnt tabsNv" rel="tabsFst">Làn da nhạy cảm của bé</span></li>
                                    <li class="fl"><span class="fnt tabsNv" rel="tabsScd">Tủ quần áo cho bé</span></li>
                                </ul>
                                <div class="ctnTab" id="tabsFst">
                                    <div class="ardMys clbt ardhp">
                                        <?php
                                        $args = array(
                                            'posts_per_page' => 1,
                                            'category' => 10,
                                        );
                                        $posts = get_posts($args);
                                        if (!empty($posts)):
                                            foreach ($posts as $post) {
                                                setup_postdata($post);
                                                $img_src = get_image_src_medium($post->ID);   
                                                ?>
                                        <div class="fl lfScd">
                                            <p class="imgBx"><img src="<?=$img_src;?>" alt="" height="240" width="241"></p>
                                        </div>
                                        <div class="fl rfScd">
                                            <div class="bxTxtMys">
                                                <a href="<?php echo get_permalink( $post->ID ); ?>"><h3 class="fnt clCya titTxtMys"><?php echo ShortTitle(get_the_title(), 70); ?></h3></a>
                                                <p><?php echo ShortTitle(get_the_excerpt(), 350); ?></p>
                                                <a class="btnAll bgIco" href="<?=site_url().'/category/lan-da-nhay-cam/';/*the_permalink();*/?>"></a>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        endif;
                                        wp_reset_query();
                                        ?>
                                    </div>
                                </div>
                                <div class="ctnTab" id="tabsScd">
                                    <div class="ardMys clbt ardhp">
                                        <?php
                                        $args = array(
                                            'posts_per_page' => 1,
                                            'category' => 12,
                                        );
                                        $posts = get_posts($args);
                                        if (!empty($posts)):
                                            foreach ($posts as $post) {
                                                setup_postdata($post);
                                                $img_src = get_image_src_medium($post->ID);
                                                ?>
                                        <div class="fl lfScd">
                                            <p class="imgBx"><img src="<?=$img_src;?>" alt="" height="240" width="241"></p>
                                        </div>
                                        <div class="fl rfScd">
                                            <div class="bxTxtMys">
                                                <a href="<?php echo get_permalink( $post->ID ); ?>"><h3 class="fnt clCya titTxtMys"><?php echo ShortTitle(get_the_title(), 70); ?></h3></a>
                                                <p><?php echo ShortTitle(get_the_excerpt(), 350); ?></p>
                                                <a class="btnAll bgIco" href="<?=site_url().'/category/tu-quan-ao-cho-be/';/*the_permalink();*/?>"></a>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        endif;
                                        wp_reset_query();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="banRgsHp">
                                <a href="http://www.comfort.com.vn/comfort-cho-da-nhay-cam-2014/dang-ky-mau-thu.aspx?utm_source=webtretho&utm_medium=banner-microsite&utm_term=comfortsample&utm_content=sample&utm_campaign=comfort" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/'?>imgRegnow.jpg" alt="Đăng ký nhay"/></a>
                            </div>
                        </div>
                        <span class="shaAdv1"></span>
                    </div>
                    <div class="mysRf fl">
                        <?php
                        get_template_part('box', 'tuvan');
                        ?>
                    </div>
                </div>

                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Các hoạt động nổi bật</h2>
                    </div>
                    <div class="hpCf">
                        <ul class="lstVdHp clbt">
                            <li class="itVdHp fl">
                                <a class="ctnVd" href="<?php echo site_url()?>/2015/03/13/chuyen-la-co-that-gau-di-dao-khap-thanh-pho/">
                                    <p class="tumbVd"><img src="<?php echo get_template_directory_uri().'/images/'?>vd1.jpg"></p>
                                    <h3 class="clBlu">Diễu hành Gấu Dịu Hương Comfort</h3>
                                </a>
                            </li>
                            <li class="itVdHp fl">
                                <a class="ctnVd" href="<?php echo site_url()?>/chuyen-gia-lam-dep/">
                                    <p class="tumbVd"><img src="<?php echo get_template_directory_uri().'/images/'?>vd2.jpg"></p>
                                    <h3 class="clBlu">Mẹ - chuyên gia làm đẹp số 1</h3>
                                </a>
                            </li>
                            <li class="itVdHp fl">
                                <a class="ctnVd" href="https://www.comfort.com.vn/?utm_source=webtretho&utm_medium=footer-microsite&utm_term=comfort-danhaycam&utm_campaign=comfort">
                                    <p class="tumbVd"><img src="<?php echo get_template_directory_uri().'/images/'?>vd3.jpg"></p>
                                    <h3 class="clBlu">Thơm lâu cùng comfort</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <span class="shaMn"></span>
                </div>

            </div>
        </div>
    </div><?php get_footer();?>