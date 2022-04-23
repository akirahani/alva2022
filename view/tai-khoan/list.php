<link rel="stylesheet" type="text/css" href="public/css/taikhoan.css?v=21042022">
<section class="tai-khoan">
	<img src="./public/image/member/member_infor.png" alt="member">
	<form action="" method="POST">
		<h1>Thông tin thành viên</h1>
		<p>Tên đăng nhập</p>
		<input type="text" value="<?=$tai_khoan->ten?>" disabled autocomplete="off" spellcheck="false" placeholder="Tên đăng nhập...">
		<p>Tên thành viên</p>
		<input type="text" name="fullname" value="<?=$tai_khoan->fullname?>" autocomplete="off" spellcheck="false" placeholder="Tên thành viên...">
		<p>Mật khẩu</p>
		<input type="text" name="matkhau" autocomplete="off" spellcheck="false" placeholder="Mật khẩu...">
		<input type="submit" name="submit" value="Cập nhật">
	</form>
</section>