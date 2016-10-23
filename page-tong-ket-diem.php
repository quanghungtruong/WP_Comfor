<?php
/*
 * Template name: tong ket diem
 * */
?>
<?php get_header();?>
<div id="main">
        <div class="ctnMn clbt">
           
            <div class="mnPage">
                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Bảng xếp hạng</h2>
                    </div>
                    <div class="ctaMn clbt">
                        <div class="ratTabl clbt top-title">
                            <ul class="mnRd">
                                <li class="colOne fl it_rat colName">
                                    <h4 class="fnt clGrn titRat">Họ tên</h4>
                                </li>
                                <li class="colTwo fl it_rat colRd">
                                    <h4 class="fnt clGrn titRat">Điểm <br> vòng 1</h4>
                                </li>
                                <li class="colThr fl it_rat colRd">
                                    <h4 class="fnt clGrn titRat">Điểm <br>vòng 2</h4>
                                </li>
                                <li class="colThr fl it_rat colRd">
                                    <h4 class="fnt clGrn titRat">Điểm<br> vòng 3</h4>
                                </li>
                                <li class="colThr fl it_rat colRd">
                                    <h4 class="fnt clGrn titRat">Tổng <br>điểm</h4>
                                </li>
                            </ul>
                        </div>
                        <ul class="no-bxslider">
                            <?php
                                $query=  com_get_tong_diem(20);
                                global $wp_query;
                                
                                //print_r($query);
                                foreach ($query as $key=>$kq):
                            ?>
                                    <li>
                                        <div class="ratTabl clbt">
                                            <ul class="mnRd">
                                                <li class="colOne fl it_rat colName"><?php echo $kq->display_name?></li>
                                                <li class="colTwo fl it_rat colRd"><?php echo $kq->diem_trac_nghiem?$kq->diem_trac_nghiem:0?> / 100</li>
                                                <li class="colThr fl it_rat colRd"><?php echo $kq->diem_hinh?$kq->diem_hinh:0?> / 100</li>
                                                <li class="colThr fl it_rat colRd"><?php echo $kq->diem_write_contest?$kq->diem_write_contest:0?> / 100</li>
                                                <li class="colThr fl it_rat colRd"><?php echo $kq->tong?></li>
                                            </ul>
                                        </div>                                
                                    </li>
                            <?php
                                endforeach;
                            ?>
                        </ul>
                    </div>
                    <span class="shaMn"></span>
                    <div class="phan-trang" style="width:40%">
                            <?php wp_pagenavi(array('query'=>$wp_query))?>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php get_footer();?>