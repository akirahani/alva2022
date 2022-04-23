<?php 
	$tit = "Thông tin tài khoản";
	$des = "Thông tin tài khoản";
	$key = "Thông tin tài khoản";
	$link = $__URL__;
	$thumbs = $ROOT."uploads/info.jpg";
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		$tai_khoan = $query->ChiTiet("thanhvien",[],['id'=>'='],['id'=>$id]);
		if(isset($_POST['submit'])){

			$condition = ['id'];
			if($_POST['matkhau']!=''){
				$feild = ['fullname','matkhau'];
				$form = [
					'fullname' => $_POST['fullname'],
					'matkhau' => md5($_POST['matkhau']),
					'id'=> $id
				];
			}
			else{
				$feild = ['fullname'];
				$form = [
					'fullname' => $_POST['fullname'],
					'id'=> $id
				];
			}
			$capnhat = $query->CapNhat('thanhvien',$feild,$condition,$form);
			header('location:tai-khoan');
		}
	}
	else{
		header('location:./');
	}

?>