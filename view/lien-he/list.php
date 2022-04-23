
<link rel="stylesheet" type="text/css" href="public/css/lien-he.css?v151021" />

<section class="contact">
	<div class="map">
		<iframe src="<?=$data_company->map?>" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

	<div class="info">
		<h2><?=$data_company->ten?></h2>
		<p class="address">
			<img src="public/image/footer/location.svg" alt="Địa chỉ Đá xuyên sáng Alva" />
			<a href=""><b>Địa chỉ</b>: <?=$data_company->diachi?></a>
		</p>
		<p class="address">
			<img src="public/image/footer/phone.svg" alt="Hotline Đá xuyên sáng Alva" />
			<a href=""><b>Hot line</b>: <?=$data_company->dienthoai?></a>
		</p>
		<p class="address">
			<img src="public/image/footer/google.svg" alt="TitanStone" />
			<a href=""><b>Email</b>: <?=$data_company->email?></a>
		</p>
		<p class="address">
			<img src="public/image/footer/facebook.svg" alt="Fanpage Đá xuyên sáng Alva" />
			<a href="<?=$data_company->facebook?>"><b>Fanpage</b>: Titan Stone</a>
		</p><br>

		<form method="post" class="form">
			<input type="text" name="ten" placeholder="Họ tên" spellcheck="false" autocomplete="off" class="input left" required />
			<input type="text" name="dienthoai" placeholder="Điện thoại" spellcheck="false" autocomplete="off" class="input right" required />
			<textarea rows="5" placeholder="Nội dung" spellcheck="false" name="noidung" required><?php if(isset($_SESSION['tenda'])) echo $_SESSION['tenda'];?></textarea>
			<input type="button" name="lienhe" value="Gửi liên hệ" class="submit" />
		</form>

		<div class="mes"></div>
	</div>
</section>
<script src="view/lien-he/script.js"></script>