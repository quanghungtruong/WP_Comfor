<?php get_header();
$check_login = false;
if (is_user_logged_in() || isset($_SESSION['facebook_user'])) {
    $check_login = true;
}
$link_to = '';
if(!$check_login){
//dangnhap
$link_to_a = 'href="'.site_url().'/dang-nhap/"' ;
$link_to_b = 'class="btn" href="'.site_url().'/dang-nhap/"' ;
}else{
//popup thele
$link_to_a = 'class="lnk_ctaMn" href="#ctnRule"';
$link_to_b = 'class="btn fniRule" href="#ctnRule"';
}

?>
    <div id="main">
      
        <div class="ctnMn clbt">
<!--            <div class="brd clbt">
                <a href="<?php echo site_url();?>">Trang chủ</a>
                <span class="arrBrd"> >> </span>
                <span class="clPnk">Cuộc thi "Mẹ - Chuyên gia làm đẹp số 1"</span>
            </div>-->
            <div class="mnPage">
                <div class="ctn_mnPg">
                    <div class="hdMn">
                        <h2 class="titHdMn fnt bgIco">Cuộc thi Mẹ - Chuyên gia làm đẹp số 1</h2>
                    </div>
                    <div class="ctaMn clbt">
                        <ul class="ctn_ctaMn">
                            <li class="it_ctaMn">
                                <a href="<?php echo site_url('/ket-qua-vong-1/')?>">
                                    <h3 class="unline clPnk">Đợt 1 (18/03/2015 - 24/03/2015) </h3>
                                    <h4 class="lgSz fnt">Trắc nghiệm “Mẹ hiểu da Bé cần gì?” </h4>
                                </a>
                            </li>
                            <li class="it_ctaMn ">
                                <a href="<?php echo site_url('/me-lam-dieu-cho-be/')?>">
                                    <h3 class="unline clPnk">Đợt 2 (25/03/2015 - 04/04/2015) </h3>
                                    <h4 class="lgSz fnt">Cuộc thi ảnh “Mẹ làm điệu cho Bé”</h4>
                                </a>
                            </li>
                            <li class="it_ctaMn">
                                <a href="<?php echo site_url('/danh-sach-bai-du-thi/')?>">
                                    <h3 class="unline clPnk">đợt 3 (06/04/2015 - 12/04/2015)</h3>
                                    <h4 class="lgSz fnt">Cuộc thi viết "Mẹ - Chuyên gia làm đẹp số 1"</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <span class="shaMn"></span>
                </div>
                <div class="nutEnj"><a class="btn btnFnish" href="<?php echo site_url('/ket-qua-chuong-trinh/')?>">Xem kết quả cuộc thi</a></div>
                <div class="nutEnj" style="display:none"><a <?=$link_to_b;?> >Tham gia ngay</a></div>
                
                 <!--lightbox-->
                <div class="bxCtn">
                    <div id="ctnRule" class="lbFni">
                        <div class="innerTest">
                            <h2 class="fnt clGrn tit_lb">Thể lệ tham gia</h2>
                            <div id="scrollbar1" class="txtRl">
                                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                                <div class="viewport">
                                    <div class="overview ctn_txtRl">
                                        <p>Từ khi có con, cuộc sống của mẹ thay đổi thật nhiều: bận rộn hơn nhưng cũng ý nghĩa và hạnh phúc hơn. Niềm vui mỗi ngày của mẹ đến từ những điều đơn giản nhất: là phút giây ôm con trong vòng tay mềm mại, là những giờ tỉ mỉ ướp hương từng đôi tất, chiếc quần, cái áo… để nâng niu làn da nhạy cảm của con, được tự tay chọn cho con những trang phục thật xinh xắn…  </p>

                                        <p>Là chuyên gia chăm sóc làn da nhạy cảm, hơn ai hết Comfort thấu hiểu và trân trọng tình mẫu tử thiêng liêng và niềm tự hào của mẹ. Đó là lý do Comfort mang đến cuộc thi “Mẹ - Chuyên gia làm đẹp số 1” với những thử thách khác nhau để mẹ có dịp thể hiện sự hiểu biết tinh tường về kiến thức chăm sóc da nhạy cảm của bé, chia sẻ những bí quyết giúp mẹ trở thành một người mẹ lý tưởng mà bất cứ người mẹ nào cũng muốn hướng tới. Đặc biệt, những mẹ thông thái nhất, tuyệt vời nhất sẽ nhận được những quà tặng giá trị từ Comfort. </p>

                                        <p>Và bây giờ, chúng ta cùng đi tìm chủ nhân của danh hiệu “Mẹ - Chuyên gia làm đẹp số 1” nào!</p>
                                        <h4 class="fnt clGrn">1. ĐỐI TƯỢNG THAM GIA: </h4>

                                        <p>Tất cả phụ nữ có quốc tịch Việt Nam đang có con và sinh sống tại Việt Nam, có con dưới 6 tuổi.</p>
                                        <h4 class="fnt clGrn">2. THỜI GIAN THAM GIA: </h4>

                                        <p><b>Từ 18/03/2015 đến 12/04/2015</b></p>
                                        <h4 class="fnt clGrn">3. GIẢI THƯỞNG</h4>
                                        <ul class="rulOne">
                                            <li>
                                                <p>3.1.  Giải tuần: 12 giải thưởng tuần</p>
                                            </li>
                                            <li>
                                                <ul class="rulInOne">
                                                    <li>
                                                        <p>- Phiếu mua quần áo tại Ninh Khương trị giá 1.500.000 (Ninhkhuong.vn)</p>
                                                    </li>
                                                    <li>
                                                        <p>- 01 năm sử dụng Comfort Cho Da Nhạy Cảm (12 chai 800ml)</p>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p>3.2. Giải chung cuộc: 03 giải</p>
                                            </li>
                                            <li>
                                                <ul class="rulInOne">
                                                    <li>
                                                        <h5>-01 Iphone 6 16 Gb: “Mẹ - Chuyên gia làm đẹp số 1” </h5>
                                                        <p>Dành cho mẹ có tổng điểm cao nhất sau 3 vòng thi: 01 Iphone 6 16Gb.Tài khoản của người tham gia sẽ đính kèm một danh hiệu của chương trình <b>Giải nhất cuộc thi “Mẹ- Chuyên gia làm đẹp số 1 trên Webtretho”</b></p>
                                                    </li>
                                                    <li>
                                                        <h5>- 02 Ipad Air Wifi 16 Gb: “Mẹ chọn đồ phong cách nhất</h5>
                                                        <p>Dành cho mẹ có tổng điểm cao thứ hai và thứ ba sau 3 vòng thi

                                                        </p>
                                                        <p>Đối với trường hợp nhiều mẹ có số điểm cao bằng nhau, BTC sẽ xác định người chiến thắng bằng cách:</p>
                                                        <p><img src="<?php bloginfo('stylesheet_directory')?>/images/imgThele.jpg" alt="p"/></p>
                                                        <p>Đối với trường hợp nhiều mẹ có số điểm cao bằng nhau, BTC sẽ xác định người chiến thắng bằng cách: </p>
                                                    </li>
                                                    <li>
                                                        <ul class="rulInTwo">
                                                            <li>
                                                                <p>a. Xét điểm đợt 1 - "Mẹ hiểu da bé cần gì" của các mẹ, mẹ nào có điểm cao hơn thì sẽ giành chiến thắng.</p>
                                                            </li>
                                                            <li>
                                                                <p>b. Trong trường hợp các mẹ tiếp tục bằng điểm nhau, thí sinh nào đăng kí tham gia trước thì giải thưởng sẽ thuộc về thí sinh đó.</p>
                                                            </li>
                                                            <li>
                                                                <p>Để có cơ hội sở hữu giải thưởng giá trị nhất của cuộc thi, mẹ hãy tích cực tham gia đủ cả 3 đợt thi nhé. Tuy nhiên, nếu có bỏ lỡ đợt 1 hoặc 2 của cuộc thi nhưng vẫn trong thời gian diễn ra chương trình, mẹ đừng quên đăng ký tham gia vì BTC luôn có rất nhiều giải thưởng hấp dẫn mỗi tuần.</p>
                                                            </li>
                                                            <li>
                                                                <p>Kết quả chung cuộc sẽ được thông báo vào ngày 18/04/2015</p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <h4 class="fnt clGrn">4. THÀNH PHẦN BAN TỔ CHỨC </h4>
                                        <p>Đại diện nhãn hàng Comfort và đại diện Diễn đàn Webtretho (WTT) </p>
                                        <h4 class="fnt clGrn">5. CÁCH THỨC THAM GIA: </h4>
                                        <ul class="rulOne">
                                            <li>
                                                <h4>5.1. ĐỢT 1 - Từ 18/03/2015 –24/03/2015</h4>
                                                <h5>MẸ HIỂU DA BÉ CẦN GÌ?</h5>
                                                <p>Bé yêu của mẹ khôn lớn và thay đổi nhanh chóng từng ngày nhưng điều không hề đổi thay từ ngày bé được sinh ra đời, đó là làn da nhạy cảm cần sự chăm sóc đặc biệtTừ lúc chào đời, làn da nhạy cảm của bé luôn cần sự chăm sóc đặc biệtVậy mẹ có tự tin mình hoàn toàn hiểu da bé cần gì? Mẹ hãy trả lời các câu hỏi trắc nghiệm liên quan đến kiến thức về làn da nhạy cảm của bé dựa trên các gợi ý có sẵn từ Comfort. Không chỉ có thể kiểm tra về vốn hiểu biết của mẹ về da nhạy cảm mà hơn thế, mẹ còn bổ sung thêm những thông tin mà có thể mẹ chưa biết đấy. Đây cũng là một cách để mẹ tích lũy thêm những thông tin mới và bổ ích đấy!</p>
                                                <p>Hãy đăng ký tài khoản trực tiếp tại đây <a href="<?php site_url()?>/melachuyengialamdepso1/dang-nhap/">(link đăng ký)</a> để bắt đầu tham gia ngay đợt 1 nào!</p>
                                            </li>
                                            <li>
                                                <h5>Điều kiện chấm giải: </h5>
                                                <ul class="rulInOne">
                                                    <li>
                                                        <p>- Mỗi lượt thi có 10 câu hỏi khác nhau, người dự thi phải trả lời trong vòng 1 phút 30 giây.</p>
                                                    </li>
                                                    <li><p>-  Mỗi câu hỏi tương ứng với 10 điểm. Thang điểm cao nhất là 100 điểm </p>
                                                    </li>
                                                    <li><p>- Nếu các mẹ đạt số điểm bằng nhau,  mẹ nào hoàn thành bài thi sớm hơn với số câu trả lời chính xác nhiều hơn trong thời gian 1 phút 30 giây sẽ giành được chiến thắng.</p>
                                                    </li>
                                                    <li><p>- Nếu các mẹ có số điểm như nhau và thời gian hoàn thành bài thi giống nhau, BTC sẽ xem xét thời gian đăng ký tham gia cuộc thi của các mẹ,  mẹ nào đăng kí tham gia trước thì giải thưởng sẽ giành được giải thưởng.</p></li>
                                                    <li><p>- Bảng điểm sẽ được cập nhật liên tục và kết quả đợt 1 sẽ được công bố vào ngày 27/03/2015</p></li>
                                                </ul>
                                                <h5>Số lượng giải thưởng: 03 giải tuần</h5>
                                            </li>
                                            <li>
                                                <h4>5.2. ĐỢT 2: Từ ngày 25/03/2015 –04/04/2015</h4>
                                                <h5>Cuộc thi ảnh - “MẸ LÀM ĐIỆU CHO BÉ” </h5>
                                                <p>Để không “hổ danh” là “Mẹ - Chuyên gia làm đẹp số 1” của bé thì ngoài am hiểu kiến thức về da nhạy cảm cũng như sở hữu những bí quyết độc đáo trong việc chăm sóc quần áo bé, mẹ còn thể hiện sự tinh tế trong việc lựa chọn trang phục, phối đồ… để bé yêu nhà mình trở nên thật sành điệu và phong cách.
                                                </p>
                                                <p>Còn chờ gì mà mẹ không chia sẻ những bức ảnh thật lung linh và cá tính của bé kèm những câu chuyện thú vị đằng sau bức ảnh đó cùng Comfort nào!</p>
                                                <p>Hãy đăng nhập tài khoản tại <a href="<?php site_url()?>/melachuyengialamdepso1/dang-nhap/">(link đăng nhập)</a> để bắt đầu tham gia đợt 2 nhé! </p>
                                                <p>Nếu chưa có tài khoản, hãy đăng ký tài khoản trực tiếp tại đây <a href="<?php site_url()?>/melachuyengialamdepso1/dang-nhap/">(link đăng ký)</a> để tham gia.</p>

                                            </li>
                                            <li>
                                                <h4>Cách thức dự thi:</h4>
                                                <ul class="rulInOne">
                                                    <li><p>- Đăng tải ảnh dự thi và chỉnh sửa ảnh theo ý thích của người dự thi</p></li>
                                                    <li><p>- Mỗi mẹ có thể tham gia nhiều hơn một tấm ảnh  </p></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4>Điều kiện chấm giải:</h4>
                                                <ul class="rulInTwo">
                                                    <li><p>Ảnh dự thi hợp lệ của bạn cần đáp ứng đầy đủ các tiêu chí dưới đây:</p></li>
                                                    <li><p>- Ảnh dự thi có thể được chụp từ máy ảnh kỹ thuật số, máy ảnh thông thường hoặc điện thoại di động, máy tính bảng…được gửi đến dưới dạng file ảnh số.</p></li>
                                                    <li><p>- Bố cục ảnh rõ ràng, sắc nét. Hình không bị mờ hay biến dạng. Không lạm dụng Photoshop làm thay đổi hình ảnh thật của bé. </p></li>
                                                    <li><p>- Ảnh dự thi phải thuộc sở hữu của thí sinh. Ban tổ chức (BTC) sẽ yêu cầu thí sinh chứng thực và cam kết về quyền sở hữu ảnh khi nhận giải thưởng.</p></li>
                                                    <li><p>- Các mẹ lưu ý chọn những trang phục thật dễ thương và phong cách nhưng phải phù hợpvới độ tuổi của bé để có cơ hội nhận được những điểm số cao nhất từ BTC nhé</p></li>
                                                    <li><p>- Nội dung ảnh gồm:</p></li>
                                                    <li><p>+ Họ và tên bé</p></li>
                                                    <li><p>+ Nickname (nếu có)</p></li>
                                                    <li><p>+ Tuổi của bé</p></li>
                                                    <li><p>+ Câu chuyện về bức ảnh (giới hạn 300 từ)</p></li>
                                                    <li><p>- Thời gian công bố kết quả vòng 2 dự kiến là ngày 07/04/2015</p></li>
                                                    <li><p>Cách thức chấm giải </p></li>
                                                    <li><p>- Với thang điểm 100, mỗi bài thi sẽ được chấm sẽ dao động từ 0 – 100 điểm.</p></li>
                                                    <li><p>Số lượng giải thưởng: 06 giải gồm:</p></li>
                                                    <li><p>+ 05 giải có số điểm cao nhất do Ban tổ chức (Webtretho và Ốc Thanh Vân) chấm; mỗi giải mang 1 danh hiệu (Ví dụ:Mẹcủa bé sành điệu, Mẹcủa bé thân thiện, Mẹ của bé cá tính, etc.)</p></li>
                                                    <li><p>+ 01 giải có số lượt bình chọn cao nhất. Người tham gia có thể bình chọn trực tiếp cho bức ảnh mình yêu thích thông qua tài khoản Facebook. Dựa trên tổng số lượt bình chọn (Like), BTC sẽ chọn ra người thắng giải.</p></li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <ul class="rulOne">
                                            <li><h4>5.3. ĐỢT 3: 06/04/2015 – 12/04/2015</h4></li>
                                            <li>
                                                <h4>Cuộc thi viết - “MẸ-CHUYÊN GIA LÀM ĐẸP SỐ 1”</h4>
                                                <p>Mẹ hiểu rõ làn da bé yêu vô cùng mỏng manh và cần được bảo vệ, nâng niu mỗi ngày. Do đó mẹ cũng biết, để chăm sóc tốt nhất cho làn da của bé thì việc trước tiên là phải chăm sóc quần áo cho bé thật đúng cách từ việc chọn mua cho đến việc giặt giũ, chọn nước xả vải sao cho phù hợp...
                                                    Còn chờ gì mà không chia sẻ những bí quyết chăm sóc áo quần của bé chỉ mẹ mới có cùng
                                                    <a href="<?php site_url()?>/melachuyengialamdepso1/">Comfort</a> nào!

                                                </p>
                                                <p>Hãy đăng nhập tài khoản tại <a href="<?php site_url()?>/melachuyengialamdepso1/dang-nhap/">(link đăng nhập)</a> để bắt đầu tham gia đợt 2 nhé! </p>
                                                <p>Nếu chưa có tài khoản, hãy đăng ký tài khoản trực tiếp tại đây <a href="<?php site_url()?>/melachuyengialamdepso1/dang-nhap/">(link đăng ký)</a> để tham gia.</p>
                                            </li>
                                            <li>
                                                <h4>Điều kiện chấm giải:</h4>
                                                <ul class="rulInOne">
                                                    <li><p>- Bài viết dài ít nhất 300 từ bằng tiếng Việt có dấu.</p></li>
                                                    <li><p>- Thang điểm cao nhất cho mỗi bài viết là 100. Ban tổ chức khuyến khích những bài chia sẻ liên quan đến các bí quyết giúp quần áo sạch sẽ và mềm mại.</p></li>
                                                    <li><p>- 03 mẹ đạt số điểm cao nhất do BTC bình chọn sẽ giành được giải thưởng của tuần.</p></li>
                                                    <li><p>- Ngày công bố kết quả dự kiến: 14/04/2015</p></li>
                                                    <li><p>- Số lượng giải thưởng: 03 giải tuần</p></li>
                                                </ul>
                                            </li>
                                            <li><h4>5.4. QUY ĐỊNH CHUNG:</h4></li>
                                            <li>
                                                <p>- Kết quả cuộc thi sẽ được thông báo tại <a href="<?php site_url()?>/melachuyengialamdepso1/">[link]</a></p>
                                                <p>- BTC có toàn quyền sử dụng hình ảnh, tên tuổi của người tham gia cũng như bài dự thi mà không phải trả bất kì khoản phí nào liên quan đến quyền tác giả cho người tham gia.</p>
                                                <p>- BTC có toàn quyền gỡ bỏ những tác phẩm nộp trễ, vi phạm quy định của cuộc thi hoặc chứa nội dung nhạy cảm hoặc ảnh hưởng đến thuần phong mỹ tục và văn hoá Việt Nam.</p>
                                                <p>- Thí sinh tham gia cần phải đọc và hiểu rõ thể lệ tham dự, đồng ý và tuân theo bản thể lệ này do ban tổ chức đề ra. Người tham dự phải đảm bảo có toàn quyền sử dụng và sở hữu hợp pháp Tác phẩm dự thi, nhãn hàng Comfort không chịu trách nhiệm và không có nghĩa vụ giải quyết nếu xảy ra bất kì tranh chấp nào liên quan đến bản quyền của Tác phẩm dự thi.</p>
                                                <p>-  Thí sinh tham gia cuộc thi trên Webtretho nếu thực hiện bất cứ hành động nào gây ảnh hưởng đến kết quả trung thực cuối cùng của cuộc thi, đều sẽ bị BTC loại khỏi chương trình mà không cần thông báo trước.</p>
                                                <p>- Nếu có bất kỳ thay đổi về thể lệ của chương trình, BTC sẽ thông báo trước trên minisite webtretho</p>
                                                <p>- Trường hợp bất khả kháng do thiên tai, lũ lụt, sét đánh, khủng bố tấn công máy chủ làm thất thoát dữ liệu đăng ký của thí sinh, BTC giữ quyền quyết định thay đổi hoặc hủy bỏ chương trình và thông báo với thí sinh dự thi trong thời gian sớm nhất.</p>
                                                <p>- BTC có trách nhiệm bảo mật thông tin cá nhân cho thí sinh tham gia cuộc thi này, không chia sẻ cho bên thứ ba và chỉ sử dụng cho mục đích trao đổi thông tin giữa công ty và thí sinh.</p>
                                                <p>- Bất kỳ thí sinh nào vi phạm những quy định và thể lệ của cuộc thi đều sẽ bị loại. Nếu được trúng giải cũng sẽ bị tước giải thưởng theo quyết định của nhãn hàng Comfort.</p>
                                                <p>- Trong trường hợp phát sinh tranh chấp, khiếu nại liên quan đến cuộc thi, BTC sẽ trực tiếp giải quyết và quyết định của BTC là kết quả cuối cùng.</p>
                                                <p>- Nhân viên công ty TNHH Quốc Tế Unilever Việt Nam, các đại lý, công ty quảng cáo, truyền thông và in ấn phục vụ cuộc thi không được tham gia chương trình này.</p>
                                            </li>
                                        </ul>
                                        <h4 class="fnt clGrn">Cách thức nhận giải:</h4>
                                        <ul class="rulOne">
                                            <li>
                                                <p>Nếu bạn ở TPHCM, bạn vui lòng đến văn phòng Webtretho chi nhánh TPHCM vào  chiều thứ 6 mỗi tuần.Hạn cuối cùng mà BTC có trách nhiệm trao giải cho người đoạt giải là ngày 12/05/2015. Khi đi nhớ mang theo CMND hoặc Hộ chiếu).</p>
                                                <p>Địa điểm nhận giải thưởng:</p>
                                                <p>Văn phòng Webtretho, lầu 3 tòa nhà Mirae</p>
                                                <p>268 Tô Hiến Thành, P15, Q.10, TPHCM</p>
                                                <p>Nếu bạn ở các tỉnh và thành phố khác, ban tổ chức sẽ tổng kết giải thưởng khi chương trình kết thúc và gửi qua đường bưu điện đến bạn trong 7 ngày làm việc.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grpAcc">
                            <p>
                                <input id="conf8" type="checkbox" class="ipcheck">
                                <label class="checkboxcb" for="conf8">
                                    <span class="bgIco cksRule"></span>
                                    Tôi đồng ý với các điều khoản và thể lệ tham gia của chương trình
                                </label>
                            </p>
                        </div>
                        <div class="nutEnj"><a class="btn" href="<?=site_url().'/cuoc-thi-viet/';?>">Tiếp tục</a></div>
                    </div>
                </div>
                <!--END lightbox-->
                
            </div>
        </div>
    </div>
<?php get_footer();?>