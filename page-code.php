<?php
/*
 * Template name: show code
 * */
?>
<?php get_header();?>
    <?php
        $photo_point=com_get_point_photo();
        $writes=com_get_point_write_contest();
        $quiz=com_update_quiz_to_user();
        //print_r($writes);
        //print_r($photo_point);
        /*
        if($photo_point)
        {
            foreach ($photo_point as $photo)
            {
                $user_id=$photo->post_author;
                $point=$photo->_rb_image_point;
                update_user_meta($user_id,'diem_hinh',$point);
            }
        }         
         */
        if($writes)
        {
            foreach ($writes as $photo)
            {
                $user_id=$photo->post_author;
                $point=$photo->diem_write_contest;
                update_user_meta($user_id,'diem_write_contest',$point);
            }
        }    
//         if($quiz)
//        {
//            foreach ($quiz as $diem)
//            {
//                $user_id=$diem->post_author;
//                $point=$diem->diem;
//                update_user_meta($user_id,'diem_trac_nghiem',$point);
//            }
//        }  
    ?>
<?php get_footer();?>