
<link rel="stylesheet" type="text/css" href="public/css/product-detail.css?v=290322" />
<main>
	<section class="bread">
		<ul>
			<li><a href="./">Trang chủ</a></li>
			<li><span>></span></li>
			<li><a href="<?=$p?>"><?=$arr_danhmuc->$p[1]?></a></li>
		</ul>
	</section>

	<section class="content">
		<div class="slide-wrap">
			<div class="slide owl-carousel owl-theme">
				<?php
				foreach ($arr_album as $key => $value) {
					echo '<img class="item owl-lazy" data-src="uploads/van-da/'.$value.'" alt="'.$data_da->ten.'" />';
				}
				?>
			</div>
		</div>

		<div class="lua-chon">
			<ul>
				<li class="active">Dành cho khách lẻ</li>
				<li>Dành cho bán buôn</li>
			</ul>
		</div>

		<div class="thong-tin">
			<div class="khach-le">DÀNH CHO KHÁCH LẺ</div>
			<h1><?=@$data_da->ten?></h1>
			<h2>Giá : Liên hệ</h2>
			<div class="dac-diem">
				<p>
					<b>Xuất xứ:</b>
					<span> Alva</span>
				</p>
				<p>
					<b>Độ dày:</b>
					<span><?php if($data_da->doday!=NULL) echo $data_da->doday; else echo 'Update';?></span>
				</p>
				<p>
					<b>Loại đá:</b>
					<span> Đá tự nhiên</span>
				</p>
				<p>
					<b>Vân đá:</b>
					<span> Vân hồng</span>
				</p>
				<p>
					<b>Kích thước:</b>
					<span><?php if($data_da->doday!=NULL) echo $data_da->kichthuoc; else echo 'Update';?></span>
				</p>
				<p>
					<b>Ứng dụng :</b>
					<span><?=$arr_danhmuc->$p[1]?></span>
				</p>
				<?php if(isset($_SESSION['fullname'])){ 
					echo'<p>
						<span style="color: red; ">Số lượng: '.$data_da->soluong.' tấm = '.$data_da->ngang * $data_da->doc. ' m2 </span>
					</p>';
					echo'
					<p>
						<span style="color: red; ">Giá NY: '.$data_da->niemyet.'VNĐ</span>
					</p>
					';
					echo'
					<p>
						<span style="color: red; ">Giá BK: '.$data_da->baokhach.'VNĐ</span>
					</p>
					';
					echo'
					<p>
						<span style="color: red; ">Giá CK: '.$data_da->chietkhau.'VNĐ</span>
					</p>
					';
				} ?>
			</div>
			<div class="button">
				<div class="dang-ky" vanda="<?=$data_da->ten?>" dienthoai="<?=$data_company->dienthoai?>" hinhanh="<?=$data_da->vuong?>">
					<h3>Đăng ký mua</h3>
					<p>Tư vấn miễn phí</p>
				</div>
				<div class="hen-lich" vanda="<?=$data_da->ten?>" dienthoai="<?=$data_company->dienthoai?>" hinhanh="<?=$data_da->vuong?>">
					<h3>Hẹn lịch đến xem</h3>
					<p>Có chỗ để xe miễn phí</p>
				</div>
				<div class="bao-gia" vanda="<?=$data_da->ten?>" dienthoai="<?=$data_company->dienthoai?>" hinhanh="<?=$data_da->vuong?>">
					<h3>Yêu cầu báo giá</h3>
					<p>Được tư vấn và báo giá tốt nhất</p>
				</div>
				<p class="work">Giờ làm việc: 8h00 - 17:00</p>
			</div>
			<div class="he-thong">
				<h3>HỆ THỐNG SHOWROOM ALVA</h3>
				<p>
					<img src="public/image/location-red.svg" alt="Đá xuyên sáng tự nhiên Alva" />
					<span>Hải Phòng : Số 9 lô 6 PG An Đồng, An Dương</span>
				</p>
				<p>
					<img src="public/image/location-red.svg" alt="Đá xuyên sáng tự nhiên Alva" />
					<span>Hà Nội: Shop House NT06 - 200 Vinhome Ocean Park Gia Lâm</span>
				</p>
				<p>
					<img src="public/image/location-red.svg" alt="Đá xuyên sáng tự nhiên Alva" />
					<span>Kho đá: Anh Dũng, Dương Kinh, Hải Phòng</span>
				</p>
			</div>
			<div class="social">
				<p>
					<img src="public/image/mes.png" alt="Liên hệ Alva"/>
					<a href="https://www.facebook.com/messages/t/">Chat Facebook</a>
		
				</p>
				<p>
					<img src="public/image/zalo.png" alt="Liên hệ Alva"/>
					<a href="https://zalo.me/">Chat Zalo</a>
				</p>
			</div>
		</div>

		<div class="tong-quan">
			<div class="tab">
				<ul>
					<li loai="phoicanh" vanda="<?=$data_da->id?>" class="active">PHỐI CẢNH VÂN ĐÁ</li>
					<li loai="thicong" vanda="<?=$data_da->id?>">ẢNH THỰC TẾ THI CÔNG</li>
					<li loai="baiviet" vanda="<?=$data_da->id?>">BÀI VIẾT</li>
					<li loai="muahang" vanda="<?=$data_da->id?>">HƯỚNG DẪN MUA HÀNG</li>
				</ul>
			</div>
			<article>
				<div class="child">
					<ul>
						<?php
						$phoicanh = '';
						if($data_da->banngay!=NULL || $data_da->banngay!='')
						{
							echo '<li phoicanh="ngay" da="'.$data_da->id.'"><span>Tranh đá ban ngày</span></li>';
							$phoicanh .= $data_da->banngay;
						}
						if($data_da->bandem!=NULL || $data_da->bandem!='')
						{
							echo '<li phoicanh="dem" da="'.$data_da->id.'"><span>Tranh đá ban đêm</span></li>';
							$phoicanh .= $data_da->bandem;
						}
						if($data_da->latsan!=NULL || $data_da->latsan!='')
						{
							echo '<li phoicanh="san" da="'.$data_da->id.'"><span>Lát sàn</span></li>';
							$phoicanh .= $data_da->latsan;
						}
						if($data_da->cauthang!=NULL || $data_da->cauthang!='')
						{
							echo '<li phoicanh="thang" da="'.$data_da->id.'"><span>Cầu thang</span></li>';
							$phoicanh .= $data_da->cauthang;
						}
						?>
					</ul>
					
				</div>
				<div class="load">
					<div class="phoi-canh owl-carousel owl-theme">
						<?=$phoicanh ?>
					</div>
				</div>
			</article>
		</div>

		<div class="nhan-bao-gia">
			<div class="picture">
				<img class="lazy" src="uploads/lazy/van-da.svg" data-src="uploads/van-da/<?=$data_da->vuong?>" alt="<?=$data_da->ten?>" />
			</div>
			<div class="form">
				<div class="tit">
					<h2>Nhận báo giá</h2>
					<p>Được tư vấn và báo giá tốt nhất</p>
				</div>
				<form>
					<input type="text" name="tenbao" placeholder="Tên khách" spellcheck="false" autocomplete="off" />
					<input type="text" name="dienthoaibao" placeholder="Điện thoại" spellcheck="false" autocomplete="off" />
					<textarea name="noidungbao" placeholder="Lời nhắn" spellcheck="false" autocomplete="off"></textarea>
					<input type="button" name="baogia" value="Gửi yêu cầu" vanda="<?=$data_da->ten?>"/>
				</form>
				<div class="mes-bao"></div>
			</div>
		</div>
	</section>

	<section class="right-pro">
		<div class="ban-buon">DÀNH CHO BÁN BUÔN</div>
		<div class="hop-tac">
			<h2>BÁN CÙNG ALVA</h2>
			<ul>
				<li>
					<b>Khách cũ giới thiệu khách mới</b>
					Nhận chiết khấu % lợi nhuận
				</li>
				<li>
					<b>Dành cho cộng tác viên</b>
					Giới thiệu khách & nhận hoa hồng
				</li>
				<li>
					<b>Nhà thiết kế nội thất, kiến trúc sư</b>
					Đưa khách đến mua thưởng phần trăm doanh thu
				</li>
			</ul>
		</div>
		<div class="ho-tro">
			<ul>
				<li>
					<h2>TƯ VẤN 24/7</h2>
					<p>Hotline: <a href="tel:<?=$data_company->dienthoai?>"><?=$data_company->dienthoai?></a></p>
				</li>
				<li>
					<h2>HỖ TRỢ THI CÔNG</h2>
					<p>Chất lượng thi công cao</p>
				</li>
				<li>
					<h2>BẢO HÀNH TẬN NƠI</h2>
					<p>Nhanh chóng và đảm bảo</p>
				</li>
				<li>
					<h2>PHỐI CẢNH THIẾT KẾ 3D</h2>
					<p>Miễn phí</p>
				</li>
			</ul>
		</div>
		<?php if(!empty($data_lienquan)) { ?>
		<div class="lien-quan">
			<h2>Vân đá cùng loại</h2>
			<ul>
				<?php foreach ($data_lienquan as $key => $value) { 
					$str_da = "dm-".$arr_danhmuc->$p[0];
					?>

				<li>
					<div class="picture">
						<a href="<?=$arr_danhmuc->$p[2]."/".$value->slug?>"><img class="lazy" src="uploads/lazy/da.svg" data-src="uploads/van-da/<?=$value->vuong?>" /></a>
					</div>
					<div class="text">
						<h3><a href="<?=$arr_danhmuc->$p[2]."/".$value->slug?>"><?=$value->ten?></a></h3>
					</div>
				</li><?php } ?>
			</ul>
		</div><?php } ?>

	</section>

	<section class="tin-tuc">
		<ul class="owl-carousel owl-theme">
			<?php
			foreach ($arr_tintuc as $key => $value) {
				echo '<li>';
					echo '<div class="picture">';
						echo '<a href="'.$value->slug.'"><img class="lazy" src="uploads/lazy/tin.svg" data-src="uploads/tin-tuc/'.$value->vuong.'" alt="'.$value->ten.'" /></a>';
					echo '</div>';
					echo '<div class="text">';
						echo '<h3><a href="'.$value->slug.'">'.$value->ten.'</a></h3>';
						echo '<p class="intro">'.$value->mota.'</p>';
						echo '<p class="time">'.date("d/m/Y", strtotime($value->ngay)).'</p>';
					echo '</div>';
				echo '</li>';
			}
			?>
		</ul>
	</section>
</main>
<script src="view/product/detail.js?v=120422"></script>