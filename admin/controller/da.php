<?php  
	$tit ="Đá tự nhiên";
	class Da
	{
		function XuliDanhMuc($data_danhmuc){
		    $arr_danhmuc = [];
		    foreach ($data_danhmuc as $key => $value) {
		        $arr_danhmuc[$value->id] = $value->ten;
		    }
		    return $arr_danhmuc;
		}
		function XuLiLoai($data_loai){
		    $arr_loai = [];
		    foreach ($data_loai as $key => $value) {
		        $arr_loai[$value->id] = [
		            "ten" => $value->ten,
		            "danhmuc" => $value->danhmuc
		        ];
		    }
	    return $arr_loai;
		}
		
		function ThemMoi($query,$lib)
		{  
			$data_danhmuc = $query->DanhSach("danhmuc");
		    $arr_danhmuc = [];
		    foreach ($data_danhmuc as $key => $value) {
		        $arr_danhmuc[$value->id] = $value->ten;
		    }

		    #Xử lý loại
		    $data_loai = $query->DanhSach("loai");
		    $arr_loai = [];
		    foreach ($data_loai as $key => $value) {
		        $arr_loai[$value->id] = [
		            "ten" => $value->ten,
		            "danhmuc" => $value->danhmuc
		        ];
		    }
		    $arr_loai[0] = "Update";
			
	
	     	// Xử lí lưu hình vuông
    		if(isset($_FILES['vuong']['tmp_name']))
            {
                $hinh_vuong=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['vuong']['name']); 
                move_uploaded_file($_FILES['vuong']['tmp_name'], "../uploads/van-da/".$hinh_vuong);
            }
	

	        // Album
	        if(!empty($_FILES['album']['tmp_name'][0]))
	        {
	            $arr_album=[];
	            foreach($_FILES['album']['tmp_name'] as $key => $tmp_name)
	            {
	                $album_ten=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['album']['name'][$key]); 
	                array_push($arr_album, $album_ten);      
	                move_uploaded_file($_FILES['album']['tmp_name'][$key], "../uploads/van-da/".$album_ten);
	            }
	            $save_album = implode(",", $arr_album);
	        }
	        else
	        {
	            $save_album = NULL;
	        }
	        $fields = [ "ten", "vuong", "album", "gioithieu", "noidung", "danhmuc", "xuatxu", "slug", "noibat", "mota","doday","kichthuoc","banngay", "bandem","latsan","cauthang","thucte"];
	        $post_form = [
	            "ten" => $_POST['ten'],
	            "vuong" => $hinh_vuong,
	            "album" => $save_album,
	            "gioithieu" => $_POST['gioithieu'],
	            "noidung" => $_POST['noidung'],
	            "danhmuc" => $_POST['danhmuc'],
	            "xuatxu" => $_POST['xuatxu'],
	            "slug" => $_POST['slug'],
	            "noibat" => $_POST['noibat'],
	            "mota" => $_POST['mota'],
	            "doday" => $_POST['doday'],
	            "kichthuoc" => $_POST['kichthuoc'],
	            "banngay" => $_POST['banngay'],
	            "bandem" => $_POST['bandem'],
	            "latsan" => $_POST['latsan'],
	            "cauthang" => $_POST['cauthang'],
	            "thucte" => $_POST['thucte'],
	        ];
	        $last = $query->ThemMoi("da", $fields, $post_form);
	        if(!empty($_POST['thongso']))
	        {
	            foreach ($_POST['thongso'] as $key => $value) 
	            {
	                $fields = [ "da", "thongso" ];
	                $post_form = [
	                    "da" => $last,
	                    "thongso" => $value
	                ];
	                $query->ThemMoi("dathongso", $fields, $post_form);
	            }
	        }
	        if(!empty($_POST['danhmuc']))
	        {
	            $query->ThemMoi("dadanhmuc", ["da", "danhmuc"], ["da" => $last, "danhmuc" => $_POST['danhmuc']]);
	        }
	        #Xử lý sản phẩm
	        $data_list = $query->DanhSach("da", ["ten", "vuong", "mota", "slug", "danhmuc"], ["noibat" => "="], [], [], ["noibat" => 1]);
	        $fields = ["sanpham"];
	        $condition = ["id"];
	        $post_form = [
	            "sanpham" => json_encode($data_list),
	            "id" => 1
	        ];
	        $query->CapNhat("company", $fields, $condition, $post_form);
	        header("location:list");
		}
		function XuLiDanhMucCapNhat($data_dadanhmuc){
			$arr_dadanhmuc = [];
		    $_SESSION['danhmuc'] = [];
		    foreach ($data_dadanhmuc as $key => $value) 
		    {
		        array_push($arr_dadanhmuc, $value->danhmuc);
		        if(!array_key_exists($value->danhmuc, $_SESSION['danhmuc']))
		        {
		            $_SESSION['danhmuc'][$value->danhmuc] = $value->danhmuc;
		        }
		    }
		    return $arr_dadanhmuc;
		}
		public function XuLiDaThongSoCapNhat($data_dathongso,$query,$id){
			$arr_dathongso = [];
		    $data_dathongso = $query->DanhSach("dathongso", [], ["da" => "="], [], [], ["da" => $id], []);
		    foreach ($data_dathongso as $key => $value) {
		    	array_push($arr_dathongso, $value->thongso);
		    }
		    return $arr_dathongso;
		}
		function HinhVuong($data_da_chitiet){
			if($data_da_chitiet->vuong != NULL)
				{
					$vuong_old = json_decode($data_da_chitiet->vuong);
				}
				else
				{
					$vuong_old = NULL;
				}
				return $vuong_old;
		}
		public function AlbumVuong($data_da_chitiet){

				// Album
				if($data_da_chitiet->album != NULL)
				{
					$arr_album_old = explode(",", $data_da_chitiet->album);
				}
				else
				{
					$arr_album_old = [];
				}
				return $arr_album_old; 
		}
		public function CapNhat($query,$id,$data_da_chitiet,$lib,$data_dadanhmuc, $data_dathongso,$data_danhmuc,$data_loai){
			// danh mucj cap nhat
	
			     $arr_dathongso = [];
			    foreach ($data_dathongso as $key => $value) {
			    	array_push($arr_dathongso, $value->thongso);
			    }
			      $arr_danhmuc = [];
				    foreach ($data_danhmuc as $key => $value) {
				        $arr_danhmuc[$value->id] = $value->ten;
				    }
				     $arr_loai = [];
				    foreach ($data_loai as $key => $value) {
				        $arr_loai[$value->id] = [
				            "ten" => $value->ten,
				            "danhmuc" => $value->danhmuc
				        ];
				    }
				 if($data_da_chitiet->vuong != NULL)
				{
					$vuong_old = $data_da_chitiet->vuong;
				}
				else
				{
					$vuong_old = NULL;
				}

				// Album
				if($data_da_chitiet->album != NULL)
				{
					$arr_album_old = explode(",", $data_da_chitiet->album);
				}
				else
				{
					$arr_album_old = [];
				}
				if(!empty($_FILES['album']['tmp_name'][0]))
		        {
		        	// Lưu file album
		            $arr_album=[];
		            foreach($_FILES['album']['tmp_name'] as $key => $tmp_name)
		            {
		                $album_ten=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['album']['name'][$key]); 
		                array_push($arr_album, $album_ten);      
		                move_uploaded_file($_FILES['album']['tmp_name'][$key], "../uploads/van-da/".$album_ten);
		            }
		            $save_album = implode(",", $arr_album);
		            // Xóa file
		            if($data_da_chitiet->album != NULL)
		            {
		            	foreach ($arr_album_old as $key_del => $value_del) {
		            		unlink('../uploads/van-da/'.$value_del);
		            	}
		            }
		        }
		        else
		        {
		            $save_album = implode(",", $arr_album_old);
		        }

	        // Danh mục
	        if(!empty($_POST['danhmuc']))
	        {
	            $query->Xoa("dadanhmuc", ["da" => "="], ["da" => $id]);
	       
	                $query->ThemMoi("dadanhmuc", ["da", "danhmuc"], ["da" => $id, "danhmuc" => $_POST['danhmuc']]);
	       
	        }
	        else
	        {
	            $query->Xoa("dadanhmuc", ["da" => "="], ["da" => $id]);
	        }
	        // Hình ảnh đại diện
	   
	       
	            // Hinhg vuông
	            if(isset($_FILES['vuong']['name']) && !empty($_FILES['vuong']['name']))
	            {
	                $vuong=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['vuong']['name']);
	                move_uploaded_file($_FILES['vuong']['tmp_name'], "../uploads/van-da/".$vuong);
	                if($vuong_old != NULL)
	                {
	                    unlink('../uploads/van-da/'.$vuong_old);
	                }
	                $vuong_save = $vuong;
	            }
	     
	        
	  
	        $fields = ["ten", "vuong", "album", "gioithieu", "noidung", "danhmuc", "xuatxu", "slug", "noibat", "mota","doday","kichthuoc","banngay", "bandem","latsan","cauthang","thucte"];
	        $condition = ["id"];
	        $post_form = [
	            "ten" => $_POST['ten'],
	            "vuong" => $vuong_save,
	            "album" => $save_album,
	            "gioithieu" => $_POST['gioithieu'],
	            "noidung" => $_POST['noidung'],
	            "danhmuc" => $_POST['danhmuc'],
	            "xuatxu" => $_POST['xuatxu'],
	            "slug" => $_POST['slug'],
	            "noibat" => $_POST['noibat'],
	            "mota" => $_POST['mota'],
	            "doday" => $_POST['doday'],
	            "kichthuoc" => $_POST['kichthuoc'],
	            "banngay" => $_POST['banngay'],
	            "bandem" => $_POST['bandem'],
	            "latsan" => $_POST['latsan'],
	            "cauthang" => $_POST['cauthang'],
	            "thucte" => $_POST['thucte'],
	            "id" => $id
	        ];
	        $query->CapNhat("da", $fields, $condition, $post_form);
	        $query->Xoa("dathongso", ["da" => "="], ["da" => $id]);
	        if(!empty($_POST['thongso']))
	        {
	            foreach ($_POST['thongso'] as $key => $value) 
	            {
	                $fields = [ "da", "thongso" ];
	                $post_form = [
	                    "da" => $id,
	                    "thongso" => $value
	                ];
	                $query->ThemMoi("dathongso", $fields, $post_form);
	            }
	        }
	        #Xử lý sản phẩm
	        $data_list = $query->DanhSach("da", ["ten", "vuong", "mota", "slug", "danhmuc"], ["noibat" => "="], [], [], ["noibat" => 1]);
	        $fields = ["sanpham"];
	        $condition = ["id"];
	        $post_form = [
	            "sanpham" => json_encode($data_list),
	            "id" => 1
	        ];
	        $query->CapNhat("company", $fields, $condition, $post_form);
	        header("location:list?page=".$page_get);
			}
	}

?>