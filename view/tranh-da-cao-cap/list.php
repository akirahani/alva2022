<link rel="stylesheet" type="text/css" href="public/css/tranh-da-cao-cap.css?v=200822">
<link rel="stylesheet" type="text/css" href="view/tranh-da-cao-cap/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="view/tranh-da-cao-cap/slick/slick-theme.css" />
<link href="view/tranh-da-cao-cap/slick/horizontal-vertical-slick-slider.css" rel="stylesheet" type="text/css" />
<main>
	<section class="anh-da">
		<div class="tieu-de-tranh-da">
	    	<h1>
				TINH HOA ĐÁ VIỆT
				<br>
				TRANH ĐÁ CAO CẤP ALVA
			</h1>
		</div>	

		<div class="slide">
			<ul class="owl-carousel owl-theme">
				<li><img  src="uploads/lazy/vuong.svg" alt="Tranh đá cao cấp" /></li>
				<li>
					<img src="uploads/lazy/vuong.svg" alt="Tranh đá cao cấp" />
					<img src="uploads/lazy/vuong.svg" alt="Tranh đá cao cấp" />
					<img src="uploads/lazy/vuong.svg" alt="Tranh đá cao cấp" />
				</li>
			</ul>
		</div>

		<div class="slide1">
			<div class="w-container">
	            <div class="wrapper">
	                <div class="slider-wrapper">
	                    <div class="slick-slider-grid">
	                        <div class="slick-slider-main">
	                            <div class="slick-slider-inner">
	                                <div class="images-list grid-main-slick">
	                                	<?php for ($i= 3 ; $i<6; $i++){ ?>
	                                    <div class="slick-list-item">
	                                        <img src="view/tranh-da-cao-cap/image/sync1/<?=$i?>.png" loading="lazy" alt="" />
	                                    </div>
	                                	<?php } ?>
	                                </div>
	                            </div>
	                            <div class="slider-controls project-page">
	              					<a href="#" class="slider-control slider-control-prev grid-1-prev w-inline-block"></a>
	              					<a href="#" class="slider-control slider-control-next grid-1-next w-inline-block"></a>
	            				</div>
	                        </div>
	                        <div class="slick-slider-nav">
	                            <div class="slick-slider-inner _4-12">
	                                <div class="images-list grid-nav-slick">
	                                	<?php for ($i= 0 ; $i<3; $i++){ ?>
	                                    <div class="slick-list-item vertical">
	                                        <div class="slick-list-item-inner">
	                                            <img src="view/tranh-da-cao-cap/image/<?=$i?>.png" loading="lazy" alt="" />
	                                        </div>
	                                    </div>
	             						<?php } ?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>



		<div class="nut-lien-he">
			<button class="lien-he1">Liên hệ ngay</button>
		</div>
	
		<div class="slogan">
			<h1 class="text-left">Hãy tìm cho mình</h1>
			<h1 class="text-right">Bức tranh xứng tầm</h1>
		</div>	
		
		<div class="lua-chon-van-da">
			<div class="desk1">
				<div class="btn-lien-he">
					<button class="lien-he1">Liên hệ ngay</button>
				</div>
				<div class="anh-chon">
					<ul class="anh-ghep owl-carousel owl-theme">
						<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/anh-ghep.png" alt="Tranh đá cao cấp"></li>
					</ul>
				</div>
			</div>

			<div class="desk2">
				<div class="head-nut-chon">
					<h1 class="text-left">Hãy tìm cho mình</h1>
					<h1 class="text-right">Bức tranh xứng tầm</h1>
				</div>
				<div class="nut-chon">
					<div class="toggle"></div>
					<div class="tieu-de-chon">Chọn vân đá</div>
					<div class="chon-van">
						<button class="kieu-van" kieu="cheo">Vân chéo</button>
						<button class="kieu-van" kieu="hoa">Vân hoa</button>
						<button class="kieu-van" kieu="ngang">Vân ngang</button>
					</div>
					<div class="kich-thuoc">
						<div class="tieu-de-kich-thuoc">Kích thước</div>
						<div class="chi-tiet-kich-thuoc">
							<ul class="head-title">
								<li><p>Chiều Ngang</p></li>
								<li><p>Chiều cao</p></li>
								<li><p>Độ dày</p></li>
							</ul>
							<ul class="body-content">
								<li><p><span>300</span> cm</p></li>
								<li><p><span>250</span> cm</p></li>
								<li><p><span>1.8</span> cm</p></li>
							</ul>
						</div>
					</div>
					<div class="khac">
						<div class="co-den">
							<div class="lua-chon-den">
								<button class="chon-den" chon="co" kieu="">Có Đèn</button>
								<button class="chon-den" chon="khong" kieu="">Không Đèn</button>
							</div>	
							<div class="hang-led">
								<button class="led ngang" loai="samsung" >Led Samsung</button>
								<button class="led ngang" loai="china">Led Trung Quốc</button>
							</div>

						</div>

						<div class="tac-vu">
							<ul class="nut-khac">
								<li><button class="ghep-van ngang" loai="g2" kieu="" chon="">Ghép Vân 2</button></li>
								<li><button class="ghep-van ngang" loai="g4" kieu="" chon="">Ghép Vân 4</button></li>
								<li><button class="ghep-van ngang" loai="1b" kieu="" chon="">Một Bức</button></li>
								<li><button class="ghep-van ngang" loai="ss" kieu="" chon="">Song Song</button></li>
							</ul>
							<ul class="doi-xung">
								<li><button class="tranh-doi-xung ngang" doixung="dx1" loai="" kieu="" chon="">Đối Xứng 1</button></li>
								<li><button class="tranh-doi-xung ngang" doixung="dx2" loai="" kieu="" chon="">Đối Xứng 2</button></li>
								<li><button class="tranh-doi-xung dx3 ngang" doixung="dx3" loai="" kieu="" chon="">Đối Xứng 3</button></li>
								<li><button class="tranh-doi-xung dx4 ngang" doixung="dx4" loai="" kieu="" chon="">Đối Xứng 4</button></li>
							</ul>
						</div>
			
					</div>
				</div>
			</div>
		</div>

	</section>


	<section class="hang-dau">
		<div class="anh-hang-dau">
			<div class="tieu-de-hang-dau">
				<h1 class="td1">TRANH ĐÁ XUYÊN SÁNG</h1>
				<h1 class="td2">VẺ ĐẸP KÌ BÍ TỪ THIÊN NHIÊN</h1>
			</div>
			<div class="img1">
				<div class="anh-tranh-da">
				    <picture>
		                <source class="mobile" media="(max-width:1199px)" srcset="view/tranh-da-cao-cap/image/img1.png">
		                <source class="desktop" media="(min-width:1200px)" srcset="view/tranh-da-cao-cap/image/img1-desk.png">
		                <img src="view/tranh-da-cao-cap/image/img1-desk.png" alt="Ảnh tranh đá cao cấp">
		            </picture>
	            </div>
            </div>
		</div>
		<div class="lien-he-dau">
			<div class="tieu-de-hang-dau">
				<h1 class="td1">TRANH ĐÁ XUYÊN SÁNG</h1>
				<h1 class="td2">VẺ ĐẸP KÌ BÍ TỪ THIÊN NHIÊN</h1>
			</div>
			<article>
				<p>Vân đá xuyên sáng tự nhiên  mang đến những nét chấm phá mềm mại như những bức tranh thiên nhiên sống động. Nhiều người nhìn vào tranh đá tự nhiên không khỏi giật mình khi biết đây là bức tranh thiên nhiên ban tặng, bởi vì nó quá giống một bức tranh do một họa sỹ vẽ phong cảnh núi non hùng vỹ.</p>
				<br>
				<p>Dưới sự vận động không ngừng của trái đất, sự nâng lên hạ xuống của thềm lục địa, núi lửa phun trào... Những hoạt động địa chất đó đã hình thành những loại đá tự nhiên với những đặc tính, màu sắc, đặc biệt là những đường vân đặc trưng khác nhau.</p>
			</article>
			<button class="lien-he1">Liên Hệ Ngay</button>
		</div>
	</section>

	<section class="hang-hai">
		<div class="anh-hang-hai">
			<div class="tieu-de-hang-hai">
				<h1 class="td3">ĐƯỢC NHIỀU GIA CHỦ </h1>
				<h1 class="td4">LỰA CHỌN ĐƯA VÀO</h1>
				<h1 class="td5">KHÔNG GIAN SỐNG</h1>
			</div>
			<div class="img2">
				<picture >
	                <source class="mobile" media="(max-width:1199px)" srcset="view/tranh-da-cao-cap/image/img2.png">
	                <source class="desktop" media="(min-width:1200px)" srcset="view/tranh-da-cao-cap/image/img2-desk.png">
	                <img src="view/tranh-da-cao-cap/image/img2-desk.png" alt="Ảnh tranh đá cao cấp">
	            </picture>
            </div>
		</div>
		<div class="lien-he-hai">
			<div class="detail-hang-hai">
				<div class="tieu-de-hang-hai">
					<h1 class="td3">ĐƯỢC NHIỀU GIA CHỦ </h1>
					<h1 class="td4">LỰA CHỌN ĐƯA VÀO</h1>
					<h1 class="td5">KHÔNG GIAN SỐNG</h1>
				</div>
				<article>
					<p>Sự tuyệt vời của các tấm đá tự nhiên,chúng sẽ hiện thị rõ nhất trên những khu vực rộng lớn,cũng sẽ là nơi tất cả hiệu ứng,sự sắp xếp của đá và ý đồ nhà lắp đặp muốn thể hiện rõ ràng, biến không gian phòng khách nhà bạn trở nên phá cách hơn bao giờ hết.</p>
					<br>
					<p>Sự phối trộn hài hòa đẹp về màu sắc, ấn tượng trong từng đường vân. Thiên nhiên đã tạo ra những kiệt tác nghệ thuật mà khi sở hữu gia chủ sẽ gặp được nhiều may mắn và bình an.</p>
				</article>			
				<div class="nut-lh">
					<button class="lien-he1">Liên Hệ Ngay</button>
				</div>
			</div>
		</div>

	</section>

	<section class="quy-trinh">
		<div class="chi-tiet">
			<div class="lap-dat">
				<h1>QUY TRÌNH LẮP ĐẶT TRANH ĐÁ ALVA</h1>
				<ul>
					<li>
						<img src="view/tranh-da-cao-cap/image/qt1.png">
						<p>Khảo sát nhà khách
						chỉ trong <span>1 ngày</span></p>
					</li>
					<li>
						<img src="view/tranh-da-cao-cap/image/qt2.png">
						<p>Tư vấn</p>
					</li>
					<li>
						<img src="view/tranh-da-cao-cap/image/qt3.png">
						<p>Báo giá chỉ trong 
						<span>1 ngày</span></p>
					</li>
					<li>
						<img src="view/tranh-da-cao-cap/image/qt4.png">
						<p>
							Lắp đặt tại nhà khách hoàn thiện chỉ trong
							<span>3 ngày</span>
						</p>
					</li>
				</ul>
			</div>
			<div class="thi-cong">
				<h1>Phương thức thi công</h1>
				<ul>
					<li>
						<img src="view/tranh-da-cao-cap/image/tc1.png">
						<p>Hàn khung</p>
					</li>
					<li>
						<img src="view/tranh-da-cao-cap/image/tc2.png">
						<p>Lắp đèn led</p>
					</li>
					<li>
						<img src="view/tranh-da-cao-cap/image/tc3.png">
						<p>
							Mang đến nhà khách
							lắp đặt
						</p>
					</li>
				</ul>
			</div>			
		</div>
		<div class="gioi-thieu">
			<div class="img-logo">
				<img class="lazy" src="view/tranh-da-cao-cap/image/logo.png" alt="Logo" />
			</div>
			<p>Alva luôn cam kết cung cấp đá Tera – thạch anh tự nhiên xuyên sáng với chất lượng tốt nhất, giá cả cạnh tranh, hỗ trợ khách hàng nhiệt tình, luôn đặt chất lượng sản phẩm lên hàng đầu. Liên hệ với chúng tôi ngay hôm nay để nhận được báo giá tốt nhất cho bạn, sẵn sàng tư vấn bất kì thời gian nào cho Quý khách.</p>
		</div>
		<div class="lien-he">
			<div class="form">
				<h1>
					LIÊN HỆ VỚI CHÚNG TÔI
					<br>
					ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ
				</h1>
				<form>
					<div>
						<input type="text" name="name" placeholder="Họ và tên" spellcheck="false" autocomplete="off">
					</div>
					<div>
						<input type="text" name="phone" placeholder="Số điện thoại" spellcheck="false" autocomplete="off">
					</div>
					<div>
						<input type="text" name="noidung" placeholder="Nội dung" spellcheck="false" autocomplete="off">
					</div>
					<div class="button-lien-he">
						<input type="button" name="lienhe" value="Liên Hệ Ngay" trang="<?=$p?>" />	
					</div>
				</form>	
			</div>
		</div>
		
	</section>


</main>
<script src="view/tranh-da-cao-cap/tranh-cao-cap.js"></script>
<script>
	let anh = '';
	anh += `
		<div id="sync1" class="owl-carousel owl-theme">
            <?php
            $str_picture = '';
            for ($i= 3 ; $i<6; $i++)
            {	
            	$str_picture .= '"'.$ROOT.'/view/tranh-da-cao-cap/image/sync1/'.$i.'.png"';
	            echo '<div class="item"><img src="view/tranh-da-cao-cap/image/sync1/'.$i.'.png" alt="Tranh đá cao cấp" /></div>';
            } 
            ?>
		</div>

		<div id="sync2" class="owl-carousel owl-theme">
            <?php 
            $stt = 0;
            for ($i= 0 ; $i<3; $i++) 
            {
            	echo '<div class="item index'.$stt.' owl-'.$stt.' " stt="'.$stt.'"><img src="view/tranh-da-cao-cap/image/'.$i.'.png" alt="Tranh đá cao cấp" /></div>';
            }
            ?>
		</div>
	`;
	$(".slide").html(anh);

</script>
<script type="text/javascript" src="view/tranh-da-cao-cap/slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.grid-main-slick').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.grid-1-prev'),
            nextArrow: $('.grid-1-next'),
            fade: false,
            useTransform: true,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            asNavFor: '.grid-nav-slick'
        });
        $('.grid-nav-slick').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            asNavFor: '.slider-for',
            arrows: true,
            revArrow: $('.grid-1-prev'),
            nextArrow: $('.grid-1-next'),
            fade: false,
            useTransform: false,
            adaptiveHeight: true,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            vertical: true,
            verticalSwiping: true,
            asNavFor: '.grid-main-slick',
            centerMode: true,
            focusOnSelect: true,
            centerPadding: '0px',
        });
    });
</script>
<script>
	$('.toggle').click(function(){
		if($('.nut-chon').css("margin-left") == "-600px"){
			$('.nut-chon').animate({"margin-left": '+=600'});
			$(this).removeClass('show');
		}
		else{
			$('.nut-chon').animate({"margin-left": '-=600'});
	     	$(this).addClass('show');   
		}

	});

	$('input[type="button"]').click(function(){
        var name= $('input[name="name"]').val();
        var phone = $('input[name="phone"]').val();
        var note = $('input[name="noidung"]').val();
        var trang = $(this).attr('trang');
        if(name != ''){
            if(phone != ''){
                $(".loading-popup").css("display", "flex");
                $.ajax({
                    type : "POST",
                    url: "view/tranh-da-cao-cap/lien-he.php",
                    data: {
                        name: name,
                        phone: phone,
                        note: note,
                        trang: trang
                    },
                    success:function(data){
                        var info = JSON.parse(data);
                        if(info.status == 'success'){
                            $(".loading-popup").hide();
                            Swal.fire(
                                'THÀNH CÔNG!',
                                'Cảm ơn bạn, Alvastone sẽ liên hệ với bạn sớm nhất!',
                                'success'
                            );
                        }
                        else{
                            $(".loading-popup").hide();
                            Swal.fire(
                                "",
                                "Có lỗi trong quá trình nhận tư vấn!",
                                "error"
                            );
                        }
                    }
                });
            }
            else{
                Swal.fire(
                    "",
                    "Bạn chưa nhập số điện thoại !",
                    "error"
                );
            }
        }
        else{
            Swal.fire(
                "",
                "Bạn chưa nhập tên !",
                "error"
            );
        }
    });

    // kéo xuống phần form khách hàng
    $('button.lien-he1').click(function(){
    	window.scrollTo({
			top: $('.lien-he form').offset().top,
			behavior: 'smooth'
		});
    });

    // $('.lazy').Lazy();
</script>