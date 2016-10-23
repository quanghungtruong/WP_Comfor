<?php
function get_image_src_full($postid) {
    $src = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), full );
    return $src;
}

function get_image_src_large($postid) {
    $large_array = image_downsize( get_post_thumbnail_id($postid), 'large' );
    $img_src = $large_array[0];
    return $img_src;
}

function get_image_src_medium($postid) {
    $medium_array = image_downsize( get_post_thumbnail_id($postid), 'medium' );
    $img_src = $medium_array[0];
    return $img_src;
}

function get_image_src_thumbnail($postid) {
    $thumbnail_array = image_downsize( get_post_thumbnail_id($postid), 'thumbnail' );
    $img_src = $thumbnail_array[0];
    return $img_src;
}

function ShortTitle($text, $chars_limit = 30)

{
      $chars_text = strlen($text);
      $text = $text." ";
      $text = substr($text,0,$chars_limit);
      $text = substr($text,0,strrpos($text,' '));
      if ($chars_text > $chars_limit)
      {
            $text = $text."...";
      }

      return $text;
}

function narga_excerpts($content = false, $excerpt_length = 50) {
        $content = strip_shortcodes($content);
        $content = str_replace(']]>', ']]&gt;', $content);
        $content = strip_tags($content);
        $words = explode(' ', $content, $excerpt_length + 1);
        if(count($words) > $excerpt_length) :
            array_pop($words);
        $content = implode(' ', $words);
        $content = $content.' ...';
        endif;

# Make sure to return the content
return $content;
    }
add_action( 'init', 'processActionUserQA' );
function processActionUserQA() {

        $action = $_POST['qa-action'];
        if(!empty($action))
        {
            switch($action)
            {
                case 'add-thread':
                    processAddThread();
                    break;
                case 'add-comment':
                    processAddCommentToThread();
                    break;
                case 'vote':
                    processVote();
                    break;
            }
        }

    }
function processAddThread()
{
    require_once('recaptchalib.php');
    $privatekey = "6Ld8ewMTAAAAAE62rGmM0STY5fyUCCWZMMWQ7nKC"; //6Ld8ewMTAAAAAE62rGmM0STY5fyUCCWZMMWQ7nKC      6LeTGMQSAAAAAHwhoyZzxUfDTgZw8DWRGLC0T0SW
    if(!session_id())
    {
        session_start();
    }
    $url_redirect     = $_POST['url_redirect'];
    $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
    if (!$resp->is_valid) {
        $_SESSION['qa_messages'] = 'Vui lòng nhập mã bảo vệ';
        wp_redirect($url_redirect);
        exit;
    }
    $ho_ten = trim(wp_kses($_POST['username'], array()));
    $dien_thoai = trim(wp_kses($_POST['phone'], array()));
    $mail = trim(wp_kses($_POST['email'], array()));
    $cau_hoi = trim(wp_kses($_POST['content'], array(
            'a'      => array(
                'href'  => array(),
                'title' => array()
            ),
            'em'     => array(),
            'strong' => array(),
            'b'      => array(),
            'pre'    => array()
        )));
    $post_type = 'tu_van';
    $title = 'Câu hỏi';
    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $cau_hoi,
        'post_status'   => 'draft',           // Choose: publish, preview, future, draft, etc.
        'post_type' => $post_type  // Use a custom post type if you want to
    );
    if(!empty($ho_ten)&& !empty($dien_thoai)&& !empty($mail)&& !empty($cau_hoi)){
        $pid = wp_insert_post($new_post);
        update_post_meta($pid,'ho_ten',$ho_ten);
        update_post_meta($pid,'dien_thoai',$dien_thoai);
        update_post_meta($pid,'mail',$mail);
        $_SESSION['qa_messages'] = 'Cám ơn bạn đã đặt câu hỏi';
    }else{
        $_SESSION['qa_messages'] = 'Vui lòng điền đầy đủ thông tin';
    }
    wp_redirect($url_redirect);
    exit;
}
?>