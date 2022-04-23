<?php 
	class PhanQuyen{
		public function quyen_xem($p,$nhom,$q){
			$phanquyen = $q->ChiTiet('phan_quyen',[],['trang'=>'=','nhom'=>'='],['trang'=>$p, 'nhom'=>$nhom]);
				if($phanquyen->xem == 0){
					header("location:404/list");
				}
		}
		public function quyen_tsx($one,$p,$nhom,$query){
			$phanquyen = $query->ChiTiet('phan_quyen',[],['trang'=>'=','nhom'=>'='],['trang'=>$p, 'nhom'=>$nhom]);
			if($one == 'add'){
				if($phanquyen->them == 0){
					header('location:../404/list');
				}
			}
			else{
				if($phanquyen->sua == 0){
					header('location:../404/list');
				}
			}
			if($one == 'del'){
				if($phanquyen->xoa == 0){
					header('location:../404/list');
				}
			}
		}
	}
 ?>