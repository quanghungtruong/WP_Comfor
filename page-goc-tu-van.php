<?php get_header();
$url_redirect = site_url().'/goc-tu-van/';
$qa_messages = $_SESSION['qa_messages'];
$_SESSION['qa_messages'] = '';
?>
<style>
label.error{
    color:red;
}
</style>

<script>
jQuery(document).ready(function(){
    var validator = jQuery("#input_form").validate({
        rules: {
            username: "required",
            phone: "required",
            email: {
                required: true,
                email: true
            },
            content: "required",
            recaptcha_response_field: "required"
        },
        messages: {
            username: "Vui lòng điền họ tên.",
            phone: "Vui lòng điền số điện thoại.",
            email: {
                required: "Vui lòng nhập 1 địa chỉ email hợp lệ",
                email:"Địa chỉ email không hợp lệ"
            },
            content: "Vui lòng nhập câu hỏi.",
            recaptcha_response_field: "Vui lòng nhập mã bảo vệ."
        }
    });
})
</script>
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
                        <h2 class="titHdMn fnt bgIco">Góc tư vấn</h2>
                    </div>
                    <div class="mnMys">
                        <h3 class="fnt clGrn titMys">Hãy để Comfort giúp mẹ giải đáp các thắc mắc
                            về làn da nhạy cảm và các vấn đề về giặt giũ cho bé nhé!</h3>
                        <h4 class="fnt clGrn titMys" style = "color:red;" ><?=$qa_messages;?></h4>
                        <div class="askDoc">
                            <form method="post" id='input_form'>
                            <input name="qa-action" value="add-thread" type="hidden">
                            <input name="url_redirect" value="<?=$url_redirect?>" type="hidden">
                                <ul class="ctn_rgsCf">
                                    <li class="it_rgsCf">
                                        <label class="til_Cf fnt" for="">
                                            <span class="bul bgIco"></span>
                                            Họ & tên
                                        </label>
                                        <input class="ipRgs" type="text" name="username" id="username" class="required"/>
                                    </li>
                                    <li class="it_rgsCf">
                                        <label class="til_Cf fnt" for="">
                                            <span class="bul bgIco"></span>
                                            Điện thoại
                                        </label>
                                        <input class="ipRgs" type="text" name="phone" id="phone" class="required"/>
                                    </li>
                                    <li class="it_rgsCf">
                                        <label class="til_Cf fnt" for="">
                                            <span class="bul bgIco"></span>
                                            Mail
                                        </label>
                                        <input class="ipRgs" type="text" name="email" id="email" class="required"/>
                                    </li>
                                    <li class="it_rgsCf">
                                        <label class="til_Cf fnt" for="">
                                            <span class="bul bgIco"></span>
                                            Câu hỏi
                                        </label>
                                        <textarea class="ipRgs" name="content" id="content" class="required"/></textarea>
                                    </li>
                                </ul>
                                <?php
                                  require get_template_directory() . '/inc/recaptchalib.php';
                                  $publickey = "6Ld8ewMTAAAAAHvCPQNqWvdc8XqBZvWnNZGiHzQk"; // 6Ld8ewMTAAAAAHvCPQNqWvdc8XqBZvWnNZGiHzQk you got this from the signup page 6LeTGMQSAAAAAKJDdOKVbcIfBNjgRPavb0cfX_tQ
                                  echo recaptcha_get_html($publickey);
                                ?>
                                <div class="nutEnj"><input class="btnSnt bgIco" type="submit" value=""></div>
                            </form>
                        </div>
                    </div>
                    <span class="shaAdv1"></span>
                </div>

                <div class="mysRf fl">
                    <div class="adv">
                        <div class="hdMn">
                            <h2 class="titHdMn fnt bgIco">Các câu hỏi khác</h2>
                        </div>
                        <div class="ctnAdv">
                            <?php
                                $type = 'tu_van';
                                $args=array(
                                      'post_type' => $type,
                                      'post_status' => 'publish',
                                      'posts_per_page' => 3
                                );
                                $my_query = null;
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                     $i = 0;
                                     while ($my_query->have_posts()) : $my_query->the_post();
                                     $i++;

                                     $answer = get_post_meta(get_the_ID(), 'tra_loi', true);
                                     ?>

                            <div class="itAdv">
                                <h3 class="fnt clGrn">Câu hỏi <?=$i;?>:</h3>
                                <p><?php echo ShortTitle(get_the_content(), 200); ?></p>
                                <div class="ans">
                                    <p class="clGrn"><?php echo ShortTitle($answer, 300); ?></p>
                                    <!--<a class="clGrn" href="#">Xem thêm</a>-->
                                    <em class="arrAns bgIco"></em>
                                </div>
                            </div>
                            <?php
                                    endwhile;
                                  }
                                  wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>

                            <a class="btnAll bgIco" href="<?=site_url().'/nhung-thac-mac-cua-me/';?>"></a>
                        </div>
                        <span class="shaAdv2"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php get_footer();?>