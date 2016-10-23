<?php
include (TEMPLATEPATH . '/inc/widget.php' );
include (TEMPLATEPATH . '/inc/comfort.php' );
//==================DEFAULT FUNCTION=============================
function setup_theme_hung()
{
    add_theme_support( 'menus',true );
    add_theme_support('post-formats',array('aside','image','quote','link','status'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support('widgets');
    add_theme_support('editor-style');
    add_theme_support('custom-header');
    add_theme_support( 'title-tag' );
    $defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );
}
add_action('after_setup_theme','setup_theme_hung');

function  add_style_js()
{
    
    //wp_enqueue_style('bootstrapmin-css',  get_template_directory_uri().'/bootstrap/css/bootstrap.min.css','',true);
    wp_enqueue_style('plugin-css',  get_template_directory_uri().'/css/plugin.css','',true);
    wp_enqueue_style('template-css',  get_template_directory_uri().'/css/style.css','',true);
    wp_enqueue_style('bxs-css',  get_template_directory_uri().'/css/jquery.bxslider.css','',true);
   
    wp_enqueue_script('jquery');
    //wp_enqueue_script('bootstrap-js',  get_template_directory_uri().'/bootstrap/js/bootstrap.min.js','',true,true);
    wp_enqueue_script('common-js',  get_template_directory_uri().'/js/common.js','',true,true);
    //wp_enqueue_script('comfort-js',  get_template_directory_uri().'/js/comfort.js','',true,true);
    wp_enqueue_script('plugin-js',  get_template_directory_uri().'/js/plugin.js','',true,true);
    wp_enqueue_script('bxslider-js',  get_template_directory_uri().'/js/jquery.bxslider.min.js','',true,true);
    wp_enqueue_script('tinyscrollbar-js',  get_template_directory_uri().'/js/jquery.tinyscrollbar.min.js','',true,true); 
    wp_enqueue_script('validate-js',  get_template_directory_uri().'/js/jquery.validate.min.js','',true,true); 
}
add_action('wp_enqueue_scripts','add_style_js');

//===xu ly trac nghiem
function com_get_trac_nghiem()
{
    $args=array(
        'posts_per_page'=>10,
        'post_type'=>'trac_nghiem',
        'orderby'=>'rand',
        'order'=>'DESC'
    );
    $query=new WP_Query($args);
    return $query;
}

if (is_admin()) {
    add_action('wp_ajax_nopriv_do-ajax-jobs', 'do_ajax_job');
    add_action('wp_ajax_do-ajax-jobs', 'do_ajax_job');
}
function init_ajax_values() {
    wp_enqueue_script('do-ajax-jobs', get_template_directory_uri() . '/js/comfort.js', array('jquery'), null, true);
    wp_localize_script('do-ajax-jobs', 'AjaxDat', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'site_url' => site_url(),
        'theme_url' => get_bloginfo('stylesheet_directory'),
        'nonce' => wp_create_nonce('ajax_whp_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'init_ajax_values');

function do_ajax_job() {
    switch ($_REQUEST['do_job']) {
        case "dap_an_quiz":
            $mang_tra_loi=$_REQUEST['tra_loi'];            
            com_get_process_quiz($mang_tra_loi);
            break;
        case "write_contest":
            //com_save_write_contest();
            break;
    }
    exit;
}

function com_get_process_quiz($mang_tra_loi=array())
{
    $dap_an_dung=$_SESSION['dap_an_dung'];
    $user=wp_get_current_user();
    $user_id=$user->ID;
    $user_name=$user->display_name;
    $play_time=$_REQUEST['play_time'];
    $order_time=  str_replace(' : ','',$play_time);
    $da_choi=get_user_meta($user_id,'da_choi_trac_nghiem',true);
    $t=0;
    if(isset($mang_tra_loi)){
        foreach ($mang_tra_loi as $key_tl=>$val_tl)
        {
            foreach ($dap_an_dung as $key_da=>$val_da)
            {
                if($key_tl==$key_da && $val_tl==$val_da)
                {
                    $t=$t+1;
                }
            }
        }
    }
    if(empty($user_name))
    {
        $user_name='test';
    }
    $post = array(
        'post_title' => $user_name,
        'post_type' => 'result_quiz',
        'post_status' => 'publish',
        'post_author' => $user_id
    );
    $t=intval($t);
    if($da_choi!=1)
    {
        if($t<10)
        {
            $diem='0'.$t;
        }
        else{
            $diem=$t;
        }
        $order_time = trim($order_time);
        $len_order_time = strlen($order_time) ;
        if($len_order_time == 3){
            $order_time_3 = substr($order_time,-1);
            $order_time_1_2 = substr($order_time,0,2);
            $order_time_3_replace = '0'.$order_time_3;
            $order_time = $order_time_1_2.$order_time_3_replace;
        }
        $post_id = wp_insert_post($post, true);
        update_post_meta($post_id,'user_id',$user_id);
        update_post_meta($post_id,'diem',$diem);
        update_post_meta($post_id,'thoi_gian_choi',$play_time);
        update_post_meta($post_id,'order_time',$order_time);
        update_user_meta($user_id,'da_choi_trac_nghiem',1);
        update_user_meta($user_id,'diem_trac_nghiem',$diem);
    }    
    echo $t.'/10 câu hỏi';
}
//======save write contest
function com_save_write_contest()
{
    $content=$_REQUEST['content'];
    $current_user=wp_get_current_user();
    $user_id=$current_user->ID;
    $user_name=$current_user->display_name;
    
    $args=array(
      'post_type'=>'write_contest',  
      'post_content'=>$content,
      'post_author'=>$current_user,
      'post_status'=>'publish'        
    );
    if($current_user)
    {
        $post_id=wp_insert_post($args);
        if($post_id)
        {
            wp_update_post(
                array(
                    'ID'=>$post_id,
                    'post_title'=>$post_id
                )        
            );
        }
    }
    echo $post_id;
}
//===Bảng xếp hạng
function com_get_xep_hang()
{
  global $wpdb;
  global $wp_query;
  $query = "select post_title, post_date, post_author, v1.meta_value as diem, v2.meta_value as thoi_gian_choi, v3.meta_value as order_time
 FROM $wpdb->posts
 LEFT JOIN $wpdb->postmeta v1 ON ($wpdb->posts.ID = v1.post_id and v1.meta_key = 'diem')
 LEFT JOIN $wpdb->postmeta v2 ON ($wpdb->posts.ID = v2.post_id and v2.meta_key = 'thoi_gian_choi')
 LEFT JOIN $wpdb->postmeta v3 ON ($wpdb->posts.ID = v3.post_id and v3.meta_key = 'order_time')
 WHERE post_status = 'publish' AND post_type = 'result_quiz'  AND v3.meta_value <> 'Null'
    group by post_title, post_author, v1.meta_value, v2.meta_value, v3.meta_value
 ORDER BY v1.meta_value DESC, v3.meta_value ASC, post_date ASC ";
    $total_record = count($wpdb->get_results($query));
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page  = 50;//get_option('posts_per_page');
    $offset = ($paged - 1)*$post_per_page;
    $max_num_pages  = ceil($total_record/ $post_per_page);
    $wp_query->found_posts = $total_record;
    $wp_query->max_num_pages = $max_num_pages;
    // var_dump($wp_query);exit;
    $limit_query    =   " LIMIT ".$post_per_page." OFFSET ".$offset;
    $query.$limit_query;
    $list = $wpdb->get_results($query.$limit_query);
   return $list;

}
function debug_com($num)
{
    $args=array(
        'posts_per_page'=>$num,
        'post_type'=>'result_quiz'
    );
    $query=new WP_Query($args);
    return $query;

}
//====get tra loi tu van
function com_get_tra_loi_tu_van($num)
{
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args=array(
        'posts_per_page'=>$num,
        'paged'=>$paged,
        'post_type'=>'tu_van',
        'orderby'=>'date',
        'order'=>'DESC'
    );
    $query=new WP_Query($args);
    return $query;

}
//==============
function com_login_redirect($redirect_to, $request, $user) {
	//is there a user to check?
	global $user;
	if (isset($user->roles) && is_array($user->roles)) {
		//check for admins
		if (in_array('administrator', $user->roles)) {
			// redirect them to the default place
			return admin_url();
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter('login_redirect', 'com_login_redirect', 10, 3);
function com_logout_redirect() {
	wp_redirect(home_url());
	exit();
}
add_action('wp_logout', 'com_logout_redirect');

function login_failed() {
	$login_page = home_url('/dang-nhap/');
	wp_redirect($login_page . '?login=failed');
	exit;
}
add_action('wp_login_failed', 'login_failed');

function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/dang-nhap/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);

function auto_login_new_user( $user_id ) {
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);         
        wp_redirect( home_url('/chuyen-gia-lam-dep/') );
        exit;
}
//add_action( 'user_register', 'auto_login_new_user' );
//===session define
add_action('init', 'myStartSession', 1);
function myStartSession() {
 
    if(!session_id()) {
 
        session_start(); 
    }
}
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');
function myEndSession() {
    session_destroy ();
}
//=====test user id exist
//add_action( 'wp_loaded', 'com_check_terms_trac_nghiem',10,2);
function com_check_terms_trac_nghiem()
{
    $user_id=get_current_user_id();
    $da_choi=get_user_meta($user_id,'da_choi_trac_nghiem',true);
    
    if(is_page('trac-nghiem'))
    {
        if(! is_user_logged_in())
        {
             wp_redirect(site_url().'/dang-nhap/');
             exit();
        }
        if($da_choi==1)
        {
             wp_redirect(home_url());
             exit();
        }
    }
}

function com_get_face_like_count($url)
{

    $fql  = "SELECT url, normalized_url, share_count, like_count, comment_count, ";
    $fql .= "total_count, commentsbox_count, comments_fbid, click_count FROM ";
    $fql .= "link_stat WHERE url = '".$url."'";

    $apifql="https://api.facebook.com/method/fql.query?format=json&query=".urlencode($fql);
    $fb_json=file_get_contents($apifql);
    $fb=json_decode($fb_json);
   return $fb;
} 
function com_update_like_face($post_id,$val)
{
    if($post_id)
    {
        update_post_meta($post_id,'like_face',(int)$val);
    }
}
function com_get_write_contest($num)
{
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;    
    $args=array(
        'posts_per_page'=>$num,
        'post_type'=>'write_contest',
        'paged'=>$paged,
        'orderby'=>'date',
        'order'=>'DESC'
    );
    $query=new WP_Query($args);
   return $query;
}
/*
   update point photo contest to user
 *  */
function com_get_point_photo()
{
    global $wpdb;
    $query="select v.post_author, max(CAST(v1.meta_value as UNSIGNED)) as _rb_image_point
        from $wpdb->posts v
        LEFT JOIN $wpdb->postmeta v1 on (v.ID=v1.post_id AND v1.meta_key='_rb_image_point')
        WHERE v.post_type='rb_content_image' and v.post_status='publish'
        GROUP BY v.post_author";
    $result=$wpdb->get_results($query,object);
    return $result;
}
/*
 update point write contest to user
 * */
function com_get_point_write_contest()
{
    global $wpdb;
    $query="select v.post_author, max(CAST(v1.meta_value as UNSIGNED)) as diem_write_contest
            from $wpdb->posts v
            LEFT JOIN $wpdb->postmeta v1 on (v.ID=v1.post_id AND v1.meta_key='diem_write_contest')
            WHERE v.post_type='write_contest' and v.post_status='publish'
            GROUP BY v.post_author";
     $result=$wpdb->get_results($query,object);
    return $result;
    
}

function com_update_quiz_to_user()
{
    global $wpdb;
    $query="SELECT v.post_author,v2.meta_value as diem
        FROM $wpdb->posts v
        LEFT JOIN $wpdb->postmeta v2 ON (v.ID=v2.post_id AND v2.meta_key='diem')
        WHERE v.post_type='result_quiz' AND v.post_status='publish' and v.post_author <= 449";
    $result=$wpdb->get_results($query,object);
    return $result;
}
function com_get_tong_diem($num)
{
    global $wpdb;
    global $wp_query;
    $query="SELECT DISTINCT(v.ID),v.display_name,v.user_login,CAST(v1.meta_value as UNSIGNED)*10 as diem_trac_nghiem,CAST(v2.meta_value as UNSIGNED) as diem_hinh,CAST(v3.meta_value as UNSIGNED) as diem_write_contest,(CAST(IFNULL(v1.meta_value,0) as UNSIGNED)*10 + CAST(IFNULL(v2.meta_value,0) as UNSIGNED)+CAST(IFNULL(v3.meta_value,0) as UNSIGNED)) as tong
            FROM $wpdb->users v
            LEFT JOIN $wpdb->usermeta v1 ON (v.ID=v1.user_id AND v1.meta_key='diem_trac_nghiem')
            LEFT JOIN $wpdb->usermeta v2 ON (v.ID=v2.user_id AND v2.meta_key='diem_hinh')
            LEFT JOIN $wpdb->usermeta v3 ON (v.ID=v3.user_id AND v3.meta_key='diem_write_contest')
            ORDER BY tong DESC,v.user_registered ";
    
    $result=$wpdb->get_results($query,object);
    $total_record = count($wpdb->get_results($query));
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page  =$num;
    $offset = ($paged - 1)*$post_per_page;
    $max_num_pages  = ceil($total_record/ $post_per_page);
    $wp_query->found_posts = $total_record;
    $wp_query->max_num_pages = $max_num_pages;
    
    $limit_query    =   " LIMIT ".$post_per_page." OFFSET ".$offset;
   
    $list = $wpdb->get_results($query.$limit_query);
    return $list;
}