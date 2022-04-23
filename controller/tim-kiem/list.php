<?php 
	if(isset($_POST['search']))
	{
		header("Cache-Control: no cache");
		@session_cache_limiter("private_no_expire");
		@$tit="Tìm kiếm với từ khóa ".$_POST['keyword'];
		@$des="Tìm kiếm với từ khóa ".$_POST['keyword'];
		@$keys="Tìm kiếm với từ khóa ".$_POST['keyword'];
		$link = $__URL__;
		$thumbs = $ROOT."uploads/info.jpg";
		$tukhoa=$_POST['keyword'];
		$fields = ["vuong", "ten", "slug", "gioithieu", "id", "danhmuc"];
		$sorts = [];
		$limits = [];
		$condition = ["ten" => "LIKE"];
		$forms = ["ten" => "%".$tukhoa."%"];
		$data_vanda = $query->DanhSach("da", $fields, $condition, $sorts, $limits, $forms);
	}
	else
	{
		header("location:./");
	}
?>