<?php get_header();
$categories = get_the_category();
//var_dump($categories);
$catid = $categories[1]->term_id;
//var_dump($categories[0]);
$catname = $categories[1]->cat_name;
//$parent_catid = $categories[0]->category_parent;
//$parent_catname = get_cat_name($parent_catid);
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
                    <div class="mnMys">
                        <div class="fstCtnMys">
                            <?php
                            $query = "select ID, post_title, post_content, post_date
                            	FROM $wpdb->posts
                                INNER JOIN $wpdb->term_relationships t ON ($wpdb->posts.ID = t.object_id)
                                INNER JOIN $wpdb->term_taxonomy m ON ('".$catid."' = m.term_id)
                                where post_status = 'publish' and post_type = 'post' and t.term_taxonomy_id = m.term_taxonomy_id
                            	ORDER BY post_date DESC
                            	limit 0, 1";//echo $query;
                            $first_posts = $wpdb->get_row($query);
                            $img_src_large = get_image_src_large($first_posts->ID);
                            $narga_excerpts =  narga_excerpts($first_posts->post_content, 60);
                                    ?>
                            <div class="bxMys">
                                <h3 class="fnt clPnk titMys">Bài viết mới nhất</h3>
                                <p class="imgBx"><img src="<?=$img_src_large;?>" alt="" height="323" width="560"></p>
                            </div>
                            <div class="bxTxtMys">
                                <h3 class="fnt clCya titTxtMys"><?php echo ShortTitle($first_posts->post_title, 80); ?></h3>
                                <div class="ctnMys clbt">
                                <?php
                                $t = strtotime($first_posts->post_date);
                                $t_str = date('d-m-Y',$t);
                                $t_arr = explode("-",$t_str);
                                ?>
                                    <span class="tumb fl"><?=$t_arr['0'].'.'.$t_arr['1'].' '.$t_arr['2'];?></span>
                                    <div class="fl txtMys">
                                        <p><?php echo $narga_excerpts;?></p>
                                        <a class="more" href="<?php echo get_permalink( $first_posts->ID ); ?>">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="scdCtnMys">
                            <h3 class="fnt clPnk titMys">Tất cả bài viết</h3>

                            <?php
                                while (have_posts()):the_post();
                                $img_src_thumbnail = get_image_src_thumbnail(get_the_ID());
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
                                                <p><?php echo ShortTitle(get_the_excerpt(), 200); ?></p>
                                                <a class="more" href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php endwhile; ?>
                           <div class="pgNv pgMys">  <?php
                              wp_pagenavi();
                          ?></div>

                        </div>
                        <!--
                        <div class="pgNv pgMys">
                            <a class="arrLfPg bgIco" href="#"></a>
                            <a class="arrRfPg bgIco" href="#"></a>
                            <div class="ctn_pgNv clbt">
                                <span class="dotPg actPg">1</span>
                                <span class="dotPg">2</span>
                                <span class="dotPg">3</span>
                            </div>
                        </div>
                        -->
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