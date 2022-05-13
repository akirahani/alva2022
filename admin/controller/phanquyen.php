<?php 
	class PhanQuyen{
		public function quyen($one,$p,$nhom,$q){
			$phanquyen = $q->ChiTiet('phanquyen',[],['trang'=>'=','nhom'=>'='],['trang'=>$p, 'nhom'=>$nhom]);
			if($p != 'thanh-vien'){
				if($one == ''){
					if($phanquyen->xem == 0){
						header("location:404/list");
					}
				}
				else{
					if($one=='add'){
						if ($phanquyen->them == 0){
							header("location:../404/list");
						}
					}
					else if($one=='edit'){
						if ($phanquyen->sua == 0){
							header("location:../404/list");
						}
					}
					else if($one=='del'){
						if ($phanquyen->xoa == 0){
							header("location:../404/list");
						}
					}
				}
			}
		}
	}
 ?>