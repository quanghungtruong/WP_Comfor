<?php
/*
 * Template name: Trắc nghiệm
 * */
?>
<?php
 if(is_user_logged_in()){
    $user_id=get_current_user_id();
    $da_choi=get_user_meta($user_id,'da_choi_trac_nghiem',true);
    if($da_choi!=1){
        
?>
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
            	

                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Mẹ hiểu bé cần gì?</h2>
                        <span class="cout_tm fnt">
                            <em class="bgIco clock"></em>
                            <span class="timetrack">00 : 00</span>
                        </span>
                    </div>
                    <div class="ctaMn clbt">
                       <ul class="bxslider">                           
                           <li>
                               <?php 
                                $query=com_get_trac_nghiem();
                                $i=1;
                                $mang_dap_an=array();
                              
                                while ($query->have_posts()): $query->the_post();
                                
                                $dap_an_1=get_post_meta(get_the_ID(),'dap_an_1',true);
                                $dap_an_2=get_post_meta(get_the_ID(),'dap_an_2',true);
                                $dap_an_3=get_post_meta(get_the_ID(),'dap_an_3',true);
                                $dap_an_4=get_post_meta(get_the_ID(),'dap_an_4',true);
                           
                                
                                $dap_an_dung=get_post_meta(get_the_ID(),'dap_an_dung',true);
                                $name='cau_'.$i;                              
                                $mang_dap_an[]=$dap_an_dung;   
                                
                                
                                ?>
                               <div class="ques">
                                   
                                    <h2 class="clGrn">
                                        <?php 
                                            echo $i.'.'.get_the_content();
                                            
                                        ?>
                                    </h2>
                                    <ul class="chk">
                                        <?php if($dap_an_1){?>
                                        <li class="it_chk">
                                            <input id="conf_<?php the_ID()?>" value="dap_an_1" type="radio" class="ipcheck" name="<?php echo $name?>">
                                            <label class="checkboxcb" for="conf_<?php the_ID()?>">
                                                <span class="bgIco btncks"></span>
                                                <?php echo $dap_an_1;?>
                                            </label>
                                        </li>
                                        <?php }?>
                                        <?php if($dap_an_2){?>
                                        <li class="it_chk">
                                            <input id="conf1_<?php the_ID()?>" value="dap_an_2" type="radio" class="ipcheck" name="<?php echo $name?>">
                                            <label class="checkboxcb" for="conf1_<?php the_ID()?>">
                                                <span class="bgIco btncks"></span>
                                                <?php echo $dap_an_2;?>
                                            </label>
                                        </li>
                                        <?php }?>
                                        <?php if($dap_an_3){?>
                                        <li class="it_chk">
                                            <input id="conf2_<?php the_ID()?>" value="dap_an_3" type="radio" class="ipcheck" name="<?php echo $name?>">
                                            <label class="checkboxcb" for="conf2_<?php the_ID()?>">
                                                <span class="bgIco btncks"></span>
                                                <?php echo $dap_an_3;?>
                                            </label>
                                        </li>
                                        <?php }?>
                                        <?php if($dap_an_4){?>
                                        <li class="it_chk">
                                            <input id="conf3_<?php the_ID()?>" value="dap_an_4" type="radio" class="ipcheck" name="<?php echo $name?>">
                                            <label class="checkboxcb" for="conf3_<?php the_ID()?>">
                                                <span class="bgIco btncks"></span>
                                                <?php echo $dap_an_4;?>
                                            </label>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                               <?php
                                    if($i%2==0 && $i<10)
                                    {
                                        echo '</li><li class="lev_'.$i.'">';
                                    }
                                    $i++;    
                                endwhile;
                                
                               ?>
                              
                           </li>
                           
                       </ul>    
                    </div>
                    <?php 
                        $_SESSION['dap_an_dung']=$mang_dap_an;    
                        
                    ?>
                    <span class="shaMn"></span>
                </div>
                 
                <div class="nutEnj"><a class="btn fniTest" href="#ctnTest">Hoàn tất</a></div>
                <!--lightbox-->
                <div class="bxCtn">
                    <div id="ctnTest" class="lbFni">
                        <div class="innerTest">
                            <h2 class="fnt clGrn">Cảm ơn bạn đã tham gia chương trình. Bạn đã trả lời đúng:</h2>
                            <h1 class="fnt clBlu result-quiz">0/10 câu hỏi</h1>
                            <h4>Kết quả sẽ được công bố vào ngày 27/3/2015. Đợt 2 Cuộc thi ảnh - “MẸ LÀM ĐIỆU CHO BÉ” sẽ bắt đầu vào ngày 25/3/2015.</h4>
                        </div>
                    </div>
                </div>
                <!--END lightbox-->
            </div>
        </div>
    </div>

<?php get_footer();?>
<?php
    }
    else{
        wp_redirect(home_url());
             exit();
    }
 }
 else{
     wp_redirect(site_url().'/dang-nhap/');
     exit();
 }
?>