<?php
/*
 * Template name: danh sach bai du thi
 * */
?>
<?php get_header();?>
   <div id="main">
        <div class="ctnMn clbt">
            
            <div class="mnPage">
                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Danh sách bài dự thi</h2>
                    </div>
                    <div class="ctaMn clbt">
                        <div id="image-tool-page">
                            <div id="images-listing">
                                <?php
                                    $query=  com_get_write_contest(6);
                                    if($query):
                                        while ($query->have_posts()): $query->the_post();
                                    
                                ?>
                                <div class="rb-col-4">
                                    <div class="inner">
                                        <div class="image">
                                            <a href="<?php the_permalink();?>" >
                                                <image class="du-thi-image" src="<?php bloginfo('stylesheet_directory')?>/images/icoNote.jpg" />
                                            </a>
                                        </div>
                                        <h1 class="fnt du-thi-h1">
                                            <a class="title  clCya" href="<?php the_permalink();?>">
                                                <?php the_author();?>
                                            </a>
                                        </h1>                                       
                                        <div class="clear"></div>
					<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                    </div>
                                </div>
                                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;    
                                ?>
                            </div>
                            <div class="clear"></div>
                            <div class="phan-trang">
                                 <?php wp_pagenavi(array('query'=>$query)); ?>
                            </div>
                           
                        </div>    
                    </div>
                    <span class="shaMn"></span>
                    
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>