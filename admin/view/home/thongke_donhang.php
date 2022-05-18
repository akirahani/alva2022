<?php 
	require_once("../../model/Query.php");
	$query = new Query();
	if(isset($_GET['trangthai']) &&  isset($_GET['ngay'])){
		$trangthai = $_GET['trangthai'];
		$ngay = $_GET['ngay'];
		if($trangthai ==1){
			$donhang = $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy','hoanthanh','thoigianhuy'],['trangthai'=>'=','ngay'=>'='],[],[],['trangthai'=>$trangthai,'ngay'=>$ngay,]);
		}
		// else if($trangthai ==4){
		// 	$donhang = $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy','hoanthanh','thoigianhuy'],['trangthai'=>'=',date('thoigianhuy')=>'='],[],[],['trangthai'=>$trangthai,date('thoigianhuy')=>$ngay,]);
		// }else if($trangthai ==5){
		// 	$donhang = $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy','hoanthanh','thoigianhuy'],['trangthai'=>'=',date('hoanthanh')=>'='],[],[],['trangthai'=>$trangthai,date('hoanthanh')=>$ngay,]);
		// }
		var_dump($donhang);
	}
?>	