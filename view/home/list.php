
<link rel="stylesheet" type="text/css" href="public/css/home.css?v=250322"/>

<section class="banner">
	<ul class="slide owl-carousel owl-theme">
		<?php 
		foreach ($arr_banner as $key => $value) 
		{
			if($key == 0)
			{
			?>
			<li>
				<picture>
					<source media="(min-width: 1200px)" class="owl-lazy" data-srcset="uploads/banner/<?=$value->desktop?>">
					<img class="owl-lazy" data-src="uploads/banner/<?=$value->mobile?>" alt="<?=$value->ten?>"/>
				</picture>
				<div class="box">
					<h2>Chào mừng bạn đến với Alva</h2>
					<h3>CUNG CẤP, PHÂN PHỐI ĐÁ XUYÊN SÁNG<br>Đá tự nhiên - Tranh đá - Đá ốp lát</h3>
					<p class="more"><a href="<?=$value->link?>">Xem sản phẩm</a></p>
					<ul class="thumbs-pro">
						<li><img src="public/image/san-pham/1.png" alt="<?=$data_company->ten?>" /></li>
						<li><img src="public/image/san-pham/2.png" alt="<?=$data_company->ten?>" /></li>
						<li><img src="public/image/san-pham/3.png" alt="<?=$data_company->ten?>" /></li>
						<li>
							<img src="public/image/san-pham/4.png" alt="<?=$data_company->ten?>" />
							<div class="more"><p><a href="<?=$value->link?>">Xem thêm<br>sản phẩm</a></p></div>
						</li>
					</ul>
				</div>
			</li>
			<?php
			}
			else
			{
			?>
			<li>
				<picture>
					<source media="(min-width: 1201px)" class="owl-lazy" data-srcset="uploads/banner/<?=$value->desktop?>">
					<img class="owl-lazy" data-src="uploads/banner/<?=$value->mobile?>" alt="<?=$value->ten?>"/>
				</picture>
			</li>
			<?php
			}
		}
		?>
	</ul>

	<ul class="thumbs-pro">
		<li><img src="public/image/san-pham/1.png" alt="<?=$data_company->ten?>" /></li>
		<li><img src="public/image/san-pham/2.png" alt="<?=$data_company->ten?>" /></li>
		<li><img src="public/image/san-pham/3.png" alt="<?=$data_company->ten?>" /></li>
		<li>
			<img src="public/image/san-pham/4.png" alt="<?=$data_company->ten?>" />
			<div class="more"><p><a href="tranh-da">Xem thêm<br>sản phẩm</a></p></div>
		</li>
	</ul>
</section>

<section class="gioi-thieu">
	<h2>Giới thiệu Alva</h2>
	<p class="intro">Đưa tới sự khác biệt, khẳng định là đơn vị tư vấn, cung cấp và thi công lắp đặt các sản phẩm về đá tự nhiên cao cấp, ứng dụng công nghệ hiện đại và triết lý vượt qua thử thách để dẫn đầu. Alva quyết tâm trở thành thương hiệu uy tín tại Việt Nam.</p>
	<div class="mobile">
		<ul class="owl-carousel owl-theme">
			<li><img class="owl-lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/1.png" alt="<?=$data_company->ten?>" /></li>
			<li><img class="owl-lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/2.png" alt="<?=$data_company->ten?>" /></li>
			<li><img class="owl-lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/3.png" alt="<?=$data_company->ten?>" /></li>
			<li><img class="owl-lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/4.png" alt="<?=$data_company->ten?>" /></li>
		</ul>
	</div>
	
	<div class="desktop">
		<ul>
			<li><img class="lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/1.png" alt="<?=$data_company->ten?>" /></li>
			<li><img class="lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/2.png" alt="<?=$data_company->ten?>" /></li>
			<li><img class="lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/3.png" alt="<?=$data_company->ten?>" /></li>
			<li><img class="lazy" src="uploads/lazy/about.svg" data-src="public/image/gioi-thieu/4.png" alt="<?=$data_company->ten?>" /></li>
		</ul>
	</div>
</section>

<section class="uu-diem">
	<h2>Ưu điểm của Alva</h2>
	<p class="intro">Tại sao chúng tôi luôn là sự lựa chọn<br> tốt nhất dành cho bạn?</p>
	<ul>
		<li class="one">
			<h3>
				<img src="public/image/home/tu-van.svg" alt="Tư vấn miễn phí" />
				<span>Miễn phí tư vấn</span>
			</h3>
			<p>Alva miễn phí tư vấn, đo đạc và thiết kế. Luôn đảm bảo được tiến hành chuyên nghiệp và nghiêm túc.</p>
		</li>
		<li class="two">
			<h3>
				<img src="public/image/home/chat-luong.svg" alt="Giá tốt nhất" />
				<span>Giá - chất lượng</span>
			</h3>
			<p>Đảm bảo mức giá của Alva luôn tốt nhất so với chất lượng công trình mà chúng tôi mang lại. Bởi nguồn đá của được nhập khẩu trực tiếp không qua trung gian, đồng thời việc thi công nhanh chóng 2 ngày được thực hiện bởi thợ lành nghề và trang thiết bị hiện đại.                 </p>
		</li>
		<li class="one">
			<h3>
				<img src="public/image/home/thiet-ke.svg" alt="Thiết kế miễn phí" />
				<span>Miễn phí thiết kế</span>
			</h3>
			<p>Với chất lượng công trình được quản lý chặt chẽ, Alva cam kết bảo hành 1 năm cho mọi sự hư hại của chất lượng đá, bảo hành đèn LED Samsung 5 năm.</p>
		</li>
	</ul>
</section>

<section class="dich-vu">
	<h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
	<p class="intro">Phân phối & thi công<br> ốp lát đá tự nhiên tất cả các hạng mục như:<br>Tranh đá, mặt tiền, cầu thang, mặt bếp, lavabo,...</p>
	<div class="mobile">
		<ul class="owl-carousel owl-theme">
			<li>
				<a href="tranh-da-tu-nhien"><img class="owl-lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/1.png" alt="<?=$data_company->ten?>" /></a>
				<h3>TRANH ĐÁ TỰ NHIÊN XUYÊN SÁNG</h3>
			</li>
			<li>
				<a href="cau-thang"><img class="owl-lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/2.png" alt="<?=$data_company->ten?>" /></a>
				<h3>ỐP LÁT CẦU THANG ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="lavabo-da-tu-nhien"><img class="owl-lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/3.png" alt="<?=$data_company->ten?>" /></a>
				<h3>LAVABO ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="tru-cot-da"><img class="owl-lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/4.png" alt="<?=$data_company->ten?>" /></a>
				<h3>ỐP LÁT TRỤ CỘT ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="da-lat-nen"><img class="owl-lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/5.png" alt="<?=$data_company->ten?>" /></a>
				<h3>LÁT NỀN ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="nha-tam"><img class="owl-lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/6.png" alt="<?=$data_company->ten?>" /></a>
				<h3>ỐP LÁT PHÒNG TẮM ĐÁ TỰ NHIÊN</h3>
			</li>
		</ul>
	</div>

	<div class="desktop">
		<ul>
			<li>
				<a href="tranh-da-tu-nhien"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/1.png" alt="<?=$data_company->ten?>" /></a>
				<h3>TRANH ĐÁ TỰ NHIÊN XUYÊN SÁNG</h3>
			</li>
			<li>
				<a href="lavabo-da-tu-nhien"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/3.png" alt="<?=$data_company->ten?>" /></a>
				<h3>LAVABO ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="cau-thang"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/2.png" alt="<?=$data_company->ten?>" /></a>
				<h3>ỐP LÁT CẦU THANG ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="tru-cot-da"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/4.png" alt="<?=$data_company->ten?>" /></a>
				<h3>ỐP LÁT TRỤ CỘT ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="da-lat-nen"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/5.png" alt="<?=$data_company->ten?>" /></a>
				<h3>LÁT NỀN ĐÁ TỰ NHIÊN</h3>
			</li>
			<li>
				<a href="nha-tam"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/dich-vu/6.png" alt="<?=$data_company->ten?>" /></a>
				<h3>ỐP LÁT PHÒNG TẮM ĐÁ TỰ NHIÊN</h3>
			</li>
		</ul>
	</div>
</section>

<section class="san-pham">
	<h2>SẢN PHẨM ĐÁ NGỌC NỔI BẬT <br>TẠI ALVA</h2>
	<ul class="owl-carousel owl-theme">
		<?php foreach ($arr_sanpham as $key => $value) { ?>
			<li>
				<a href="<?=$process_danhmuc[$value->danhmuc].'/'.$value->slug?>"><img class="owl-lazy" src="uploads/lazy/da.svg" data-src="uploads/van-da/<?=$value->vuong?>" alt="<?=$value->ten?>" /></a>
				<h3><a href="<?=$process_danhmuc[$value->danhmuc].'/'.$value->slug?>"><?=$value->ten?></a></h3>
				<p><?=$value->mota?></p>
			</li>
		<?php } ?>
	</ul>
</section>

<section class="cong-trinh">
	<h2>CÔNG TRÌNH HOÀN THIỆN</h2>
	<p class="intro">Bên dưới là những công trình tiêu biểu của Alva</p>
	<ul>
		<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/cong-trinh/1.png" alt="<?=$data_company->ten?>" /></li>
		<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/cong-trinh/2.png" alt="<?=$data_company->ten?>" /></li>
		<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/cong-trinh/3.png" alt="<?=$data_company->ten?>" /></li>
		<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/cong-trinh/4.png" alt="<?=$data_company->ten?>" /></li>
		<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/cong-trinh/5.png" alt="<?=$data_company->ten?>" /></li>
		<li><img class="lazy" src="uploads/lazy/vuong.svg" data-src="public/image/cong-trinh/6.png" alt="<?=$data_company->ten?>" /></li>
	</ul>

	<p class="more">
		<a href="du-an">Xem thêm dự án</a>
	</p>
</section>

<section class="tin-tuc">
	<h2>TIN TỨC NỔI BẬT</h2>
	<ul>
		<?php 
		foreach ($arr_tintuc as $key => $value) 
		{
			echo '<li>';
				echo '<div class="left">';
					echo '<h3><a href="'.$value->slug.'">'.$value->ten.'</a></h3>';
					echo '<div class="intro">'.$value->mota.'</div>';
					echo '<p class="time">Thời gian: '.date("d/m/Y", strtotime($value->ngay)).'</p>';
				echo '</div>';
				echo '<div class="right">';
					echo '<a href="'.$value->slug.'"><img class="lazy" src="uploads/lazy/tin.svg" data-src="uploads/tin-tuc/'.$value->vuong.'" alt="'.$value->ten.'" /></a>';
				echo '</div>';
			echo '</li>';
		}
		?>
	</ul>
	<p class="all"><a href="tin-tuc">Xem tất cả</a></p>
</section>

<script>
	$(".banner ul.slide").owlCarousel({
		nav: false,
		lazyLoad: true,
		items: 1,
		dots: true
	});
	$(".gioi-thieu .mobile ul").owlCarousel({
		nav: false,
		lazyLoad: true,
		items: 1,
		dots: true
	});
	if($(document).width()<1200)
	{
		$(".dich-vu .mobile ul").owlCarousel({
			nav: false,
			lazyLoad: true,
			items: 1,
			dots: true
		});
	}
	$(".san-pham ul").owlCarousel({
		nav: false,
		lazyLoad: true,
		dots: true,
		loop: true,
		responsive:{
	        0:{
	          	items: 2,
	          	margin: 10

	        },
	        1200:{
	        	items: 3,
	        	margin: 30
	        }
      	}
	});
</script>