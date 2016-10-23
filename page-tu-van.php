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
                        <h2 class="titHdMn fnt bgIco">Làn da nhạy cảm của bé</h2>
                    </div>
                    <div class="mnMys">
                        <div class="ctnAdv">
                            <?php
                                $query=com_get_tra_loi_tu_van(3);
                                while ($query->have_posts()): $query->the_post();
                                $tra_loi=get_post_meta(get_the_ID(),'tra_loi',true);
                            ?>
                            <div class="itAdv">
                                
                                <h3 class="fnt clGrn ansAdv"><?php the_title();?><span class="upClaps bgIco"></span></h3>
                                <p><?php the_content();?></p>
                                <div class="ans hidAns">
                                    <p class="clGrn"><?php echo $tra_loi;?></p>
                                    <em class="arrAns bgIco"></em>
                                </div>
                            </div>
                            
                            <?php 
                                endwhile;
                                
                            ?>
                        </div>
                        
                        <div class="pgNv pgMys">                          
                            <?php wp_pagenavi(array('query'=>$query))?>
                        </div>
                    </div>
                    <span class="shaAdv1"></span>
                </div>


                <div class="mysRf fl">
                    <?php
                    get_template_part('box', 'comfort');
                    ?>
                </div>

            </div>
        </div>
    </div>

<?php get_footer();?>