<?php
	require"../../admin/model/Query.php";
	session_start();
	$query = new Query(); 
	if(isset($_POST['danhmuc'])){
		$danhmuc = $_POST['danhmuc'];
		if(isset($_POST['slug'])){
			$ps = $_POST['slug'];
		}
		else{
			$ps = NULL;
		}
		$sap_xep = $query->DanhSach('da', ["soluong","doc","ngang","vuong", "ten", "slug", "gioithieu", "id"], ['danhmuc'=>'='], ['id'=>'DESC'], [], ['danhmuc'=>$danhmuc]);
		
		$tong_da= count($sap_xep);
		$da_mot_trang = 10;
		$tong_trang = ceil($tong_da/$da_mot_trang);
		$con_lai = $tong_da - $da_mot_trang;

		if(isset($_POST['trang']) && $_POST['trang']!=1){
			$trang = $_POST['trang'];
			$start_page = ($trang-1) *	$da_mot_trang;
			$end_page = $trang * $da_mot_trang;
			foreach ($sap_xep as $key => $value) {
				if($key >= $start_page &&  $key < $end_page ){
					echo '<li>';
						echo  '<a href="'.$ps.'/'.$value->slug.'"><img class="lazy"
							  src="uploads/lazy/vuong.svg" data-src="uploads/van-da/'.$value->vuong.'" alt="'.$value->ten.'" /></a>';
						echo  '<h2 class="title"><a href="'.$ps.'/'.$value->slug.'">'.$value->ten.'</a></h2>';
						echo  $value->gioithieu;
						if(isset($_SESSION['fullname'])) echo'<p style="color:red">Số lượng: '.$value->soluong.' tấm = '.$value->ngang * $value->doc.' m2 </p>';
					echo '</li>';
				}

			}
		}
		else{
			echo "<ul>";
			foreach ($sap_xep as $key => $value) {
				if($key<10){
					echo '<li>';
						echo  '<a href="'.$ps.'/'.$value->slug.'"><img class="lazy"
							  src="uploads/lazy/vuong.svg" data-src="uploads/van-da/'.$value->vuong.'" alt="'.$value->ten.'" /></a>';
						echo  '<h2 class="title"><a href="'.$ps.'/'.$value->slug.'">'.$value->ten.'</a></h2>';
						echo  $value->gioithieu;
						if(isset($_SESSION['fullname'])) echo'<p style="color:red">Số lượng: '.$value->soluong.' tấm = '.$value->ngang * $value->doc.' m2 </p>';
					echo '</li>';
			
				}
			}
			echo "</ul>";
			if($tong_da > $da_mot_trang){
				echo '<div class="load-more1" trang="1" tongtrang="'.$tong_trang.'" tongda="'.$tong_da.'" danhmuc="'.$danhmuc.'" datrang="'.$da_mot_trang.'">
					<p>Xem thêm &nbsp;<b>'.$con_lai.'</b>&nbsp; đá còn lại</p>
				</div>';
			}
			else{
				echo '';
			}
		}
	}
	else{
		echo 'no';
	}
?>