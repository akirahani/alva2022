<header>
	<div class="logo">
		<a href="./"><img src="public/image/logo.svg" alt="Alva" /></a>
	</div>
	<div class="right">
		<ul>
			<li class="setting">
				<div class="box">
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
					<span><?=$__FULLNAME__?></span>
					<i class="fa fa-chevron-down" aria-hidden="true"></i>
				</div>
				<div class="blog">
					<p><a onClick="return confirm('Bạn chắc chắn muốn thoát?')" href="logout.php">Thoát</a></p>
					<p><a href="thanh-vien/edit?id=<?= $_SESSION['avid'] ?>">Sửa thông tin</a></p>
					<p><a href="thanh-vien/reset?id=<?= $_SESSION['avid'] ?>">Đổi mật khẩu</a></p>
				</div>
			</li>
			<li class="menu-append icon-menu"></li>
		</ul>
	</div>
</header>