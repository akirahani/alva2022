<?php 
	require_once('../../model/Query.php');
	$query = new Query();
	if(isset($_POST['sanpham'])){
		$id = $_POST['sanpham'];
		foreach ($id as $key => $value) {
			$get_product = $query->DanhSach("da",['chietkhau','baokhach','niemyet'],['ten'=>'like'],[],[],['ten'=>'%'.$value.'%']);
			foreach ($get_product as $key => $val) {
				echo '<li><input value="'.$val->chietkhau.'"></li>';
			// var_dump($val);
			}
		}
	
	}
?>