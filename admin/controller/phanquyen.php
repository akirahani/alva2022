<?php 
	class PhanQuyen{
		public function xem($p,$nhom,$q){
			$phanquyen = $q->ChiTiet('phanquyen',[],['trang'=>'=','nhom'=>'='],['trang'=>$p, 'nhom'=>$nhom]);
			if($phanquyen->xem == 0){
				header("location:404/list");
			}
		}
		public function tsx($one,$p,$nhom,$query){
			$phanquyen = $query->ChiTiet('phanquyen',[],['trang'=>'=','nhom'=>'='],['trang'=>$p, 'nhom'=>$nhom]);
			if($one == 'add'){
				if($phanquyen->them == 0){
					header('location:../404/list');
				}
			}
			else if($one == 'edit'){
				if($phanquyen->sua == 0){
					header('location:../404/list');
				}
			}
			else if($one == 'del'){
				if($phanquyen->xoa == 0){
					header('location:../404/list');
				}
			}
		}
	}
 ?>