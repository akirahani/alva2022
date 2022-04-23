<?php 
	$data_danhmuc = $arr_danhmuc->$ps;
	if(!empty($data_danhmuc))
	{
		$id_danhmuc = $data_danhmuc[0];
		$ten_danhmuc = $data_danhmuc[1];
		$slug_danhmuc = $data_danhmuc[2];
		$data_dadanhmuc = $query->DanhSach("dadanhmuc",["da"],["danhmuc"=>"="],[],[],["danhmuc"=>$id_danhmuc]);
		$data_vanda = $query->DanhSach("da", ["vuong", "ten", "slug", "gioithieu", "id", "soluong", "ngang", "doc"],["danhmuc"=>"="],[],[],["danhmuc"=>$id_danhmuc]);
		$number_vanda = count($data_dadanhmuc);
		#Banner danh mục
		$banner_danhmuc = json_decode($data_company->bannerdanhmuc);
		#Thông số
		$data_thongso = $query->DanhSach("thongso",[],["danhmuc"=>"="], ["thutu" => "ASC"], [], ["danhmuc"=>$id_danhmuc]);
		#SEO
		$tit = $ten_danhmuc;
		$des = $ten_danhmuc;
		$key = $ten_danhmuc;
		$link = $__URL__;
		$thumbs = $ROOT."uploads/info.jpg";
		#Xử lý sản phẩm
	    // Xử lí phân trang
	    $total_row = count($data_vanda);
	    $num_of_page = 10;
	    $total_page = ceil($total_row / $num_of_page);
	    if(isset($_GET ['page']))
	    {
	        $page_get = intval($_GET ['page']);
	    }
	    else
	    {
	        $page_get = 1;
	    }
	    if ($page_get <= 0)
	    {
	        $page = 1;
	    }
	    else
	    {
	        if($page_get <= $total_page)
	        {
	            $page = $page_get;
	        }
	        else
	        {
	            $page = 1;
	        }
	    }
	    $start_page = ($page - 1) * $num_of_page;
		$end_page = $page * $num_of_page;
	}
	else
	{
		header("location:./");
	}
?>