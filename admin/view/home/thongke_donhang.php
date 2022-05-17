<?php 
	require_once("../../model/Query.php");
	$query = new Query();
	if(isset($_GET['trangthai']) &&  isset($_GET['ngay'])){
		$trangthai = $_GET['trangthai'];
		$ngay = $_GET['ngay'];
		$donhang = $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy','hoanthanh','thoigianhuy'],['trangthai'=>'=','ngay'=>'='],[],[],['trangthai'=>$trangthai,'ngay'=>$ngay]);
		echo "<pre>";
		var_dump($donhang);
		echo "</pre>";
	}
?>	