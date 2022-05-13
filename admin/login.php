<?php
	ob_start();
	session_start();
	require_once "model/Query.php";
	$query = new Query();
	$access = [1,2];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Alva</title>
	<link rel="shortcut icon" href="public/image/favicon.svg" />
	<link rel="stylesheet" type="text/css" href="public/css/login.css"/>
</head>
<body>
	<div class="login-wrap">
		<div class="blog">
			<img src="public/image/logo.svg" />
			<h1>Xin chào! Bắt đầu làm việc</h1>
			<p>Đăng nhập tài khoản hệ thống</p>
			<form method="post" class="form-login">
				<input type="text" name="username" placeholder="Tài khoản" autocomplete="off" spellcheck="false" />
				<input type="password" name="password" placeholder="Mật khẩu" />
				<div>
					<input type="submit" name="login" value="Đăng nhập" class="submit primary" />
				</div>
				<div class="clear"></div>
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
	                        	$_SESSION['avid']=$checkuser->id;
	                        	$_SESSION['avnhom']=$checkuser->nhom;
	                        	$_SESSION['avfullname']=$checkuser->fullname;
	                        	header('location:./');
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
</body>
</html>
<?php ob_end_flush(); ?>