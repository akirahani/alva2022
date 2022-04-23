<?php 
	$data_da = $query->ChiTiet("da",[],["slug"=>"="],["slug"=>$one]);
	if(!empty($data_da))
	{
		$data_lienquan = $query->DanhSach("da",["vuong", "ten", "slug",  "soluong", "ngang", "doc"],["danhmuc"=>"="],[],[5],["danhmuc"=>$data_da->danhmuc]);
		$arr_tintuc = $query->DanhSach("tintuc", ["ten", "vuong", "ngay", "slug", "mota"],[], ["id" => "DESC"], [9]);
		$arr_album = explode(",", $data_da->album);
		#Hình đại diện
		$arr_vanda = json_decode($data_da->vuong);
		$str_vanda = "dm-".$arr_danhmuc->$p[0];
		$tit = $data_da->ten;
		$des = $data_da->mota;
		$key = $arr_danhmuc->$p[1];
		$link = $__URL__."/".$one;
		$thumbs = $ROOT."uploads/van-da/".$data_da->vuong;
	}
	else
	{
		$tit = "Sản phẩm đá ngọc tự nhiên xuyên sáng";
		$des = "Sản phẩm đá ngọc tự nhiên xuyên sáng";
		$key = "Đá ngọc tự nhiên, đá tự nhiên, đá xuyên sáng";
		$link = $__URL__;
		$thumbs = $__URL__."uploads/thumbs.png";
		header("location:./");
	}
?>