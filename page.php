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
            	<?php while (have_posts()): the_post();?>
                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco"><?php the_title();?></h2>
                    </div>
                    <div class="ctaMn clbt">
                        <div class="mnRgs">
                            <?php the_content();?>
                        </div>
                    </div>
                    <span class="shaMn"></span>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php get_footer();?>
