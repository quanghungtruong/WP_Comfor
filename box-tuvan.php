<style>
/*doctor*/
.doc {
    margin-top: 20px;
    background: #def0ff;
    padding: 12px 15px;
}
    .doc .lnkDoc {
        display: block;
    }
        .doc .lnkDoc:hover h5, .doc .lnkDoc:hover h6, .doc .lnkDoc:hover h3 {
            color: #fe76b0;
        }
    .doc .lfDoc {
        width: 107px;
        margin-right: 10px;
    }
    .doc .rfDoc {
        width: 192px;
    }
        .rfDoc h5 {font-size: 12px;}
        .rfDoc h6 {margin-bottom: 7px; font-size: 12px;}
        .rfDoc p {
            color: #444444;
            font-size: 12px;
        }
            .rfDoc p > b {
                font-style: italic;
            }
/*END doctor*/
</style>
                <div class="adv">
                        <div class="hdMn">
                            <h2 class="titHdMn fnt bgIco">Góc Tư vấn</h2>
                        </div>
                        <?php
                        if ( is_home() ) {
                        ?>
                        <div class="doc clbt">
                            <!--<a class="clbt lnkDoc" href="#">-->
                                <div class="fl lfDoc">
                                    <p class="imgBx">
                                        <img src="<?php echo get_template_directory_uri().'/images/'?>doctor.png" alt=""/>
                                    </p>
                                </div>
                                <div class="fl rfDoc">
                                    <h5 class="fnt clGrn">BS Chuyên Khoa II</h5>
                                    <h3 class="fnt clGrn">Nguyễn Thị Thanh</h3>
                                    <h6 class="fnt clGrn">Trưởng khoa DV1 BV Nhi Đồng 2<br>
                                        Tu nghiệp nhi khoa tại PHÁP</h6>
                                    <p><b>Chuyên khám và điều trị:</b> bệnh lý hô hấp, tiêu hóa , suy dinh dưỡng, dị ứng và bệnh ngoài da ở trẻ em.</p>
                                </div>
                            <!-- </a> -->
                        </div>
                        <?php }?>
                        <div class="ctnAdv">
                            <h3 class="fnt clGrn">Hãy để Comfort giúp mẹ giải đáp các thắc mắc về làn da nhạy cảm và các vấn đề về giặt giũ cho bé nhé.</h3>
                            <?php
                                $type = 'tu_van';
                                $args=array(
                                      'post_type' => $type,
                                      'post_status' => 'publish'
                                );
                                if (( is_home() )||(is_page())) {
                                    $posts_per_page = 3;
                                }else{
                                    $posts_per_page = 4;
                                }
                                $args['posts_per_page'] = $posts_per_page;
                                $my_query = null;
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                     $i = 0;
                                     while ($my_query->have_posts()) : $my_query->the_post();
                                     $i++;
                                     ?>
                                     <div class="itAdv">
                                          <h3 class="fnt clGrn">Câu hỏi <?=$i;?>:</h3>
                                          <p><?php echo ShortTitle(get_the_content(), 300); ?></p>
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