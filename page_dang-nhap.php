<?php
/*
* Template name: Đăng nhập
 */ 
?>
<?php if (!is_user_logged_in()) {?>
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
                            <div class="frRgs">
                                <?php
                                        if($_GET['login']=='failed'){                                            
                                            $mes='Mật khẩu hoặc tên đăng nhập không đúng';                                           
                                        }
                                        if($_GET['mes']=='ok')   
                                        {
                                            $mes='Đăng ký thành công hãy đăng nhập để tham gia chương trình';
                                        }
                                        if($mes)
                                        {
                                             echo '<div style="margin-bottom: 6px;color:red" class="">';
                                            echo '<strong>'.$mes.'</strong>';
                                            echo '</div>';
                                        }
                                ?>
                                <h3 class="til_rgs clGrn">Đăng nhập:</h3>
                               
                                <form name="loginform" action="<?php echo site_url() . '/wp-login.php' ?>" role="form" method="post">
                                    <ul class="ctn_rgsCf">
                                        <li class="it_rgsCf">
                                            <label class="til_Cf fnt" for="">
                                                <span class="bul bgIco"></span>
                                                Tên đăng nhập:
                                            </label>
                                            <input name="log" class="ipRgs" type="text"/>
                                        </li>
                                        <li class="it_rgsCf">
                                            <label class="til_Cf fnt" for="">
                                                <span class="bul bgIco"></span>
                                                Mật khẩu:
                                            </label>
                                            <input name="pwd" class="ipRgs" type="password" />
                                        </li>
                                    </ul>
                                    <div class="nutEnj"><input name="btn_login" class="btn btn_dang-nhap" type="submit" value="Đăng nhập"></div>
                                </form>
                                
                            </div>
                             <div class="frRgs">
                                <h3 class="til_rgs clGrn">Nếu bạn chưa có tài khoản, hãy đăng kí ngay tại đây:</h3>	
                           		<?php the_content();?>
                           </div>
                        </div>
                    </div>
                    <span class="shaMn"></span>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php get_footer();?>
<?php 
        }else {
                wp_redirect(home_url());
                exit();
        }
                                
 ?>