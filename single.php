<?php get_header();
$category = get_the_category(get_the_id());
$catname = $category[1]->cat_name;
if($catname=='')
{
    $catname='Cuộc thi viết';
}
?>
    <div id="main">
        <div class="ctnMn clbt">
<!--            <div class="brd clbt">
                <a href="<?php echo site_url();?>">Trang chủ</a>
                <span class="arrBrd"> >> </span>
                <span class="clPnk">Cuộc thi "Mẹ - Chuyên gia làm đẹp số 1"</span>
            </div>-->
            <div class="mnPage clbt">
                <div class="mysLf fl">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco"><?=$catname;?></h2>
                    </div>
                    <div class="mnMys dtMys">
                        <div class="fstCtnMys">
                            <div class="bxTxtMys">
                                <?php while (have_posts()): the_post();
                                      $t = strtotime(get_the_date());
                                      $t_str = date('d-m-Y',$t);
                                      $t_arr = explode("-",$t_str);
                                      $post_type=get_post_type(get_the_ID());
                                      if($post_type=='write_contest')
                                      {
                                          $title=get_the_author();
                                      }
                                      else{
                                          $title=get_the_title();
                                      }
                                ?>
                                <div class="ctnMys clbt">
                                    <span class="tumb fl"><?=$t_arr['0'].'.'.$t_arr['1'].' '.$t_arr['2'];?></span>
                                    <div class="fl txtMys">
                                        <h3 class="fnt clCya titTxtMys"><?php echo $title; ?></h3>
                                        <div class="clear"></div>
                                        <?php
                                            if($post_type=='write_contest')
                                            {
                                         ?>
                                        <div style="margin-top:10px" class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="mysDt">
                                    <p><?php the_content(); ?></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <span class="shaAdv1"></span>
                </div>

                <div class="mysRf fl">
                    <?php
                    get_template_part('box', 'comfort');
                    ?>
                    <div class="adv">
                        <div class="hdMn">
                            <h2 class="titHdMn fnt bgIco">Các bài liên quan</h2>
                        </div>
                        <div class="ctnAdv">
                        <?php
                        //for use in the loop, list 5 post titles related to first tag on current post
                        global $wp_query;
                        $thePostID = $wp_query->post->ID;
                        $tmp_cate = wp_get_post_categories($thePostID);
                        $cate__in = $tmp_cate['1'];
                        //var_dump($tmp_cate);
                        $related = get_posts(array('category__in' => $cate__in, 'numberposts' => 4, 'post__not_in' => array($thePostID)));
                        if ($related) {
                            foreach ($related as $post) {
                                setup_postdata($post);
                                $img_src_thumbnail = get_image_src_thumbnail($post->ID);
                                $t = strtotime($post->post_date);
                                $t_str = date('d.m.Y',$t);
                            ?>
                            <div class="ardMys clbt lfDt_sub">
                                <div class="fl lfScd">
                                    <a class="imgBx" href="<?php the_permalink() ?>"><img src="<?=$img_src_thumbnail;?>" alt="" height="103" width="103"></a>
                                </div>
                                <div class="fl rfScd">
                                    <div class="bxTxtMys">
                                        <h3 class="titTxtMys"><a class="fnt clCya" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                        <span class="ntSt"><?=$t_str;?></span>
                                    </div>
                                </div>
                            </div>
                        <?php }} wp_reset_postdata(); ?>

                        </div>
                        <span class="shaAdv2"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer();?>