<?php 
	require"../../admin/model/Query.php";
	session_start();
	$query = new Query();
	if(isset($_POST['thongso']))
	{
		// Xử lý đá
		$data_vanda = $query->DanhSach("da", ["soluong","doc","ngang","vuong", "ten", "slug", "gioithieu", "id"]);
		$arr_da = [];
		foreach ($data_vanda as $key => $value) {
			$arr_da[$value->id] = $value;
		}
		if(isset($_POST['slug'])){
			$ps = $_POST['slug'];
		}
		else{
			$ps = NULL;
		}
		$id_thongso = $_POST['thongso'];
		$str_vanda = 'SELECT da FROM dathongso WHERE thongso='.$id_thongso.' GROUP BY da';
		$loc_thongso = $query->Chuoi($str_vanda);
		$count_vanda_thongso = count($loc_thongso);
		$conlai = $count_vanda_thongso - 10;
		#Phân trang
		$soda1trang = 10;
		$total_page = ceil($count_vanda_thongso/10);
		if(isset($_POST['trang']) && $_POST['trang'] !=1 )
		{
			$get_page = $_POST['trang'];
			$start_page = ($get_page - 1) * $soda1trang;
    		$end_page = $get_page * $soda1trang;
    		foreach ($loc_thongso as $key => $value) 
			{
				if($key >= $start_page && $key < $end_page)
				{
					$id_da = $value->da;
					echo '<li>';
						echo '<a href"'.$ps.'/'.$arr_da[$id_da]->slug.'"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="uploads/van-da/'.$arr_da[$id_da]->vuong.'" alt="'.$arr_da[$id_da]->ten.'" /></a>';
						echo '<h2 class="title"><a href="'.$ps.'/'.$arr_da[$id_da]->slug.'">'.$arr_da[$id_da]->ten.'</a></h2>';
						echo $arr_da[$id_da]->gioithieu;
						if(isset($_SESSION['fullname'])) echo'<p style="color:red">Số lượng: '.$arr_da[$id_da]->soluong.' tấm = '.$arr_da[$id_da]->ngang * $arr_da[$id_da]->doc.' m2 </p>';
					echo '</li>';
				}
			}
		}
		else
		{
			echo '<ul>';
			foreach ($loc_thongso as $key => $value) 
			{
				if($key<10)
				{
					$id_da = $value->da;
					echo '<li>';
						echo '<a href"'.$ps.'/'.$arr_da[$id_da]->slug.'"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="uploads/van-da/'.$arr_da[$id_da]->vuong.'" alt="'.$arr_da[$id_da]->ten.'" /></a>';
						echo '<h2 class="title"><a href="'.$ps.'/'.$arr_da[$id_da]->slug.'">'.$arr_da[$id_da]->ten.'</a></h2>';
						echo $arr_da[$id_da]->gioithieu;
						if(isset($_SESSION['fullname'])) echo'<p style="color:red">Số lượng: '.$arr_da[$id_da]->soluong.' tấm = '.$arr_da[$id_da]->ngang * $arr_da[$id_da]->doc.' m2 </p>';
					echo '</li>';
				}
			}
			echo '</ul>';
			if($count_vanda_thongso > $soda1trang){
				echo '<div class="load-more" trang="1" tongtrang="'.$total_page.'" thongso="'.$id_thongso.'" tongda="'.$count_vanda_thongso.'" datrang="'.$soda1trang.'">';
				echo 'Xem thêm &nbsp;<b>'.$conlai.'</b>&nbsp; vân đá';
				echo '<p class="hide"><img src="uploads/lazy/vuong.svg" /></p>';
				echo '</div>';
			}
			else{
				echo '';
			}
		}
	}
	else{
		echo 'Hi';
	}
?>