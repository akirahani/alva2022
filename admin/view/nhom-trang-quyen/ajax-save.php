<?php 
	require_once("../../model/Query.php");
	$query = new Query();
	if(isset($_POST['trang']) && isset($_POST['nhom']) && isset($_POST['trangthai']) && isset($_POST['quyen'] )){
		$nhom = $_POST['nhom'];
		$trang = $_POST['trang'];
		$quyen = $_POST['quyen'];
		$trangthai = $_POST['trangthai'];
		$check = $query->ChiTiet('phanquyen',[],['trang'=>'=','nhom'=>'='],['trang'=>$trang,'nhom'=>$nhom]);
		if($trangthai ==0){
			$save = 1;
		}
		else{
			$save =0;
		}
		if(empty($check)){
			if($quyen== "xem"){
				$query->ThemMoi('phanquyen',['nhom','trang','xem'],['nhom'=>$nhom,'trang'=>$trang,'xem'=>$save]);
			}
			else if($quyen== "them"){
				$query->ThemMoi('phanquyen',['nhom','trang','them'],['nhom'=>$nhom,'trang'=>$trang,'them'=>$save]);
			}
			else if($quyen =="sua"){
				$query->ThemMoi('phanquyen',['nhom','trang','sua'],['nhom'=>$nhom,'trang'=>$trang,'sua'=>$save]);
			}
			else if($quyen =="xoa"){
				$query->ThemMoi('phanquyen',['nhom','trang','xoa'],['nhom'=>$nhom,'trang'=>$trang,'xoa'=>$save]);
			}
		}
		else{
			if($quyen== "xem"){
				$query->CapNhat('phanquyen',['xem'],['nhom','trang'],['nhom'=>$nhom,'trang'=>$trang,'xem'=>$save]);
			}
			else if($quyen =="them"){
				$query->CapNhat('phanquyen',['them'],['nhom','trang'],['nhom'=>$nhom,'trang'=>$trang,'them'=>$save]);
			}
			else if($quyen =="sua"){
				$query->CapNhat('phanquyen',['sua'],['nhom','trang'],['nhom'=>$nhom,'trang'=>$trang,'sua'=>$save]);
			}
			else if($quyen =="xoa"){
				$query->CapNhat('phanquyen',['xoa'],['nhom','trang'],['nhom'=>$nhom,'trang'=>$trang,'xoa'=>$save]);
			}
		}
	}

 ?>