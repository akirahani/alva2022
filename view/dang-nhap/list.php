<?php 
	$access = [1];
?>

<link rel="stylesheet" type="text/css" href="public/css/login.css"/>
<div class="login-wrap">
	<div class="blog">
		<img src="public/image/logo/alva.svg" />
		<h1>Xin chào! Bắt đầu làm việc</h1>
		<p>Đăng nhập tài khoản hệ thống</p>
		<form method="post" class="form-login">
			<input type="text" name="username"	 placeholder="Tài khoản" autocomplete="off" spellcheck="false" />
			<input type="password" name="password" placeholder="Mật khẩu" />
			<div>
				<input type="submit" name="login" value="Đăng nhập" class="submit primary" />
			</div>
			<div class="clear"></div>
			<br>
		</form>
		<?php
          	if(isset($_POST['login']))
          	{
          		header("Cache-Control: no cache");
				@session_cache_limiter("private_no_expire");
 				$fields = [];
				$operator = ["ten" => "="];
				$condition = ["ten" => $_POST['username']];
				$checkuser = $query->ChiTiet("thanhvien", $fields, $operator, $condition);
          		if( !empty($checkuser) )
          		{
          			if(in_array($checkuser->nhom, $access))
          			{
          				if(md5($_POST['password']) == $checkuser->matkhau)
	          			{
                        	$_SESSION['id']=$checkuser->id;
                        	$_SESSION['nhom']=$checkuser->nhom;
                        	$_SESSION['fullname']=$checkuser->fullname;
                        	header('location:tai-khoan');
	          			}
	          			else
	          			{
	          				echo '<p class="login-mes text-danger">Sai mật khẩu</p>';
	          			}
          			}
          			else
          			{
          				echo '<p class="login-mes text-danger">Bạn không có quyền</p>';
          			}
          		}
          		else
          		{
          			echo '<p class="login-mes text-danger">Sai tên đăng nhập</p>';
          		}
          	}
        ?>
	</div>
</div>