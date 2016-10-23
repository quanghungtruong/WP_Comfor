<!doctype html>
<!--[if IE 7]> <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="author" content="" />
	<!--[if lte IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <![endif]-->

	<title><?php wp_title('|', true, 'right'); ?></title>

	<link href="favicon.gif" rel="image_src" />
	<link href="favicon.gif" rel="icon" type="image/gif" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'> 
        <?php wp_head();?>    
	<!--[if IE ]>
	<link type="text/css" media="screen,projection" rel="stylesheet" href="css/ie.css" />
	<![endif]-->
	<!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <![endif]-->

        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<?php
    if(is_page('cuoc-thi-viet'))
    {
        $addclass="write_contest";
    }
    else{
        $addclass="nothing";
    }
?>
<body class="<?php echo $addclass ?>">
	<header>
            <div class="header">
                <h1 class="logo">
                    <a class="innerLg bgIco" href="<?php echo site_url();?>"></a>
                </h1>
                <div class="navCom">
                    <ul class="ctnNavCm">
                        
                        <li>
                            <a class="nav1 bgIco 
                                <?php if(is_page('bi-quyet-cua-me')){
                                    echo 'active';
                                }                               
                               ?>"
                               href="<?=site_url().'/bi-quyet-cua-me/';?>"></a>
                        </li>
                        <li>
                            <a class="nav2 bgIco 
                                <?php if(is_page('goc-tu-van')){
                                    echo 'active';
                                }                               
                               ?>"
                               href="<?=site_url().'/goc-tu-van/';?>"></a>
                        </li>
                        <li>
                            <a class="nav3 bgIco 
                                <?php if(is_page('chuyen-gia-lam-dep')){
                                    echo 'active';
                                }
                               ?>"  href="<?=site_url().'/chuyen-gia-lam-dep/';?>"></a>
                        </li>
                    </ul>
                </div>
                <div class="bxSetting">
                <a class="lnkRegs clGrn" href=" <?php if(!is_user_logged_in()){echo site_url().'/dang-nhap/';}else{echo '#';}?>">
                    <span class="ico_lnkRegs bgIco"></span>
                    <?php if(!is_user_logged_in()){
                        echo 'Đăng nhập / Đăng ký';
                    }else{
                        global $current_user;
                        get_currentuserinfo();
                        echo $current_user->display_name;
                    }
                    ?>
                </a>
                <?php if(is_user_logged_in()){  ?>
                <ul class="lstRegs">
                    <li>
                        <a class="rankSet" href="<?=site_url().'/bang-xep-hang/';?>" >
                            Bảng xếp hạng
                        </a>
                    </li>
                    <li>
                        <a class="rankSet" href="<?=site_url().'/ket-qua-vong-1/';?>" >
                          Kết quả vòng 1
                        </a>
                    </li>
                   <li>
                        <a class="rankSet" href="<?=site_url().'/ket-qua-vong-2/';?>" >
                          Kết quả vòng 2
                        </a>
                    </li>
                     <li>
                        <a class="rankSet" href="<?=site_url().'/ket-qua-vong-3/';?>" >
                          Kết quả vòng 3
                        </a>
                    </li>
                    <li>
                        <a class="rankSet" href="<?=site_url().'/ket-qua-chung-cuoc/';?>" >
                          Kết quả chung cuộc
                        </a>
                    </li>
                    <li>
                        <a class="rankSet" href="<?=site_url().'/tong-bang-diem/';?>">
                            Tổng bảng điểm
                        </a>
                    </li>
                    <li>
                        <a class="rankSet" href="<?php echo wp_logout_url(); ?>">
                            Thoát
                        </a>
                    </li>
                </ul>
                <?}?>
            </div>
            
            </div>
            <span class="bglnHd"></span>
	</header>