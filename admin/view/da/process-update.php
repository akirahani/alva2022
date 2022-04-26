<?php 
	require_once('../../model/Query.php');
	$query = new Query();
	if(isset($_POST['sanpham'])){
		$id = $_POST['sanpham'];
		$gia = json_decode($_POST['gia']);
		echo "<pre>";
		print_r($gia);
		echo "</pre>";

		// foreach ($id as $key => $value) {
			// $get_product = $query->DanhSach("da",['chietkhau', 'baokhach', 'niemyet', 'soluong', 'id'],["ma"=>"LIKE"],[],[],["ma"=>"%".$value."%"]);
			// echo '<form action="view/da/result-update.php" method="POST" >';
			// foreach ($get_product as $key => $val) {
			// 	echo '<b>'.$value.'</b>';
			// 	echo "<ul class='cap_nhat_gia form' style='list-style:none;'>";
			// 		echo '<input class="capnhat_da" type="hidden" value="'.$val->id.'" name="id[]">';
			// 		echo '<p>Giá chiết khấu:</p><input class="input-text chietkhau" value="'.$val->chietkhau.'" name="chietkhau[]">';
			// 		echo '<p>Giá niêm yết:</p> <input class="input-text niemyet" value="'.$val->niemyet.'" name="niemyet[]">';
			// 		echo '<p>Giá báo khách:</p> <input class="input-text baokhach" value="'.$val->baokhach.'" name="baokhach[]">';
			// 		echo '<p>Số lượng:</p> <input class="input-text soluong" value="'.$val->soluong.'" name="soluong[]">';
			// 	echo "</ul>";
			// 	echo '<br>';
			// }
		// }
		// echo '<div class="bread"><div class="button"><button type="submit"><a>Cập nhật</a></button></div></div>';
		// echo '</form>';
	}
?>