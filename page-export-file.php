<?php 
// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('username', 'diem', 'thoi gian choi'));
global $wpdb;   
$query = "select post_title, post_date, post_author, v1.meta_value as diem, v2.meta_value as thoi_gian_choi, v3.meta_value as order_time
 FROM $wpdb->posts
 LEFT JOIN $wpdb->postmeta v1 ON ($wpdb->posts.ID = v1.post_id and v1.meta_key = 'diem')
 LEFT JOIN $wpdb->postmeta v2 ON ($wpdb->posts.ID = v2.post_id and v2.meta_key = 'thoi_gian_choi')
 LEFT JOIN $wpdb->postmeta v3 ON ($wpdb->posts.ID = v3.post_id and v3.meta_key = 'order_time')
 WHERE post_status = 'publish' AND post_type = 'result_quiz'  AND v3.meta_value <> 'Null'
    group by post_title, post_author, v1.meta_value, v2.meta_value, v3.meta_value
 ORDER BY v1.meta_value DESC, v3.meta_value ASC, post_date ASC
 LIMIT 10 OFFSET 0
 ";
 $list = $wpdb->get_results($query.$limit_query);
 foreach ($list as $result){
    $diem=$result->diem;
    $time_play=$result->thoi_gian_choi;
    $xu_ly_time=  explode(':',$time_play);
    $xu_ly_phut = trim($xu_ly_time[0]);
    $xu_ly_giay = trim($xu_ly_time[1]);
    $giay=$xu_ly_giay.' giay';
    $int_xu_ly_phut=intval($xu_ly_phut);
    $phut='';
    if($int_xu_ly_phut>0)
    {
    $phut=$int_xu_ly_phut.' phut' ;
    }
    $post_author = $result->post_author;
    $user = get_user_by( 'id', $post_author );
    $row = array();
    $row[] = $export_username= $user->user_login;
    $export_hoten = $result->post_title;
    //$row[] = $export_hoten;
    $row[] = $export_diem=intval($diem);
    $row[] = $export_thoi_gian=$phut.' '.$giay;
    fputcsv($output, $row);
}
?>
