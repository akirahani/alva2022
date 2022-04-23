<?php
    isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
    isset($_GET ['page']) ? $page_get = intval($_GET ['page']) : $page_get = 1;

    #Detail
    $fields = [];
    $operator = ["id" => "="];
    $condition = ["id" => $id];
    $data_da_chitiet = $query->ChiTiet("da", $fields, $operator, $condition);
    $id_danhmuc = $data_da_chitiet->danhmuc;
    $data_thongso = $query->DanhSach("thongso", [], [], [], [], [], []);
    
    #Xử lý đá danh mục
    $arr_dadanhmuc = [];
    $data_dadanhmuc = $query->DanhSach("dadanhmuc", [], ["da" => "="], [], [], ["da"=>$id]);
    $_SESSION['danhmuc'] = [];
    foreach ($data_dadanhmuc as $key => $value) 
    {
        array_push($arr_dadanhmuc, $value->danhmuc);
        if(!array_key_exists($value->danhmuc, $_SESSION['danhmuc']))
        {
            $_SESSION['danhmuc'][$value->danhmuc] = $value->danhmuc;
        }
    }

    #Đá thông số
    $arr_dathongso = [];
    $data_dathongso = $query->DanhSach("dathongso", [], ["da" => "="], [], [], ["da" => $id], []);
    foreach ($data_dathongso as $key => $value) {
        $arr_dathongso[$value->thongso] = $value; 
        foreach ($data_thongso as $key => $val) {
            if($val->id == $value->thongso){
                $arr_dathongso[$value->thongso] = $val->id;
            }
        }
    }

    #Xử lý danh mục
    $data_danhmuc = $query->DanhSach("danhmuc", [], [], [], [], [], []);
    $arr_danhmuc = [];
    foreach ($data_danhmuc as $key => $value) {
        $arr_danhmuc[$value->id] = $value->ten;
    }

    #Xử lý loại
    $data_loai = $query->DanhSach("loai", [], [], [], [], [], []);
    $arr_loai = [];
    foreach ($data_loai as $key => $value) {
        $arr_loai[$value->id] = [
            "ten" => $value->ten,
            "danhmuc" => $value->danhmuc
        ];
    }

	// Hình vuông
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
	if(isset($_POST['edit']))
	{
        // Album
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
            $str_danhmuc = $_POST['danhmuc'];
            $query->Xoa("dadanhmuc", ["da" => "="], ["da" => $id]);
            $query->ThemMoi("dadanhmuc", ["da", "danhmuc"], ["da" => $id, "danhmuc" =>  $str_danhmuc]);
            
        }
        else
        {
            $query->Xoa("dadanhmuc", ["da" => "="], ["da" => $id]);
            $str_danhmuc = NULL;
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
                $file_tmp = $vuong;
            }
            else
            {
                if(isset($vuong_old))
                {
                    $file_tmp = $vuong_old;
                }
                else
                {
                    $file_tmp = NULL;
                }
            }
  
        $vuong_save = $file_tmp;
  
        $fields = ["ten", "vuong", "album", "gioithieu", "noidung", "danhmuc", "xuatxu", "slug", "noibat", "mota", "banngay", "bandem", "latsan", "cauthang", "doday", "kichthuoc", "thucte", "ma", "loai", "ngang", "doc", "soluong", "kho","niemyet","chietkhau","baokhach"];
        $condition = ["id"];
        $post_form = [
            "ten" => $_POST['ten'],
            "vuong" => $vuong_save,
            "album" => $save_album,
            "gioithieu" => $_POST['gioithieu'],
            "noidung" => $_POST['noidung'],
            "danhmuc" => $str_danhmuc,
            "xuatxu" => $_POST['xuatxu'],
            "slug" => $_POST['slug'],
            "noibat" => $_POST['noibat'],
            "mota" => $_POST['mota'],
            "banngay" => $_POST['banngay'],
            "bandem" => $_POST['bandem'],
            "latsan" => $_POST['latsan'],
            "cauthang" => $_POST['cauthang'],
            "doday" => $_POST['doday'],
            "kichthuoc" => $_POST['kichthuoc'],
            "thucte" => $_POST['thucte'],
            "ma" => $_POST['ma'],
            "loai" => $_POST['loai'],
            "ngang" => $_POST['ngang'],
            "doc" => $_POST['doc'],
            "soluong" => $_POST['soluong'],
            "kho" => $_POST['kho'],
            "niemyet"=>$_POST['niemyet'],
            "chietkhau"=>$_POST['chietkhau'],
            "baokhach"=>$_POST['baokhach'],
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
?>
<div class="blog">

	<div class="bread">
		<h1>Đá tự nhiên <span>| cập nhật</span></h1>
		<div class="clear"></div>
	</div>

    <ul class="tab">
        <li><a href="#tongquan">Tổng quan</a></li>
        <li><a href="#loai">Loại - Thông số - Danh mục</a></li>
        <li><a href="#gia">Giá</a></li>
        <li><a href="#hinhanh">Hình ảnh</a></li>
        <li><a href="#baiviet">Bài viết</a></li>
        <li><a href="#banngay">Ảnh ban ngày</a></li>
        <li><a href="#bandem">Ảnh ban đêm</a></li>
        <li><a href="#latsan">Ảnh lát sàn</a></li>
        <li><a href="#cauthang">Ảnh cầu thang</a></li>
        <li><a href="#thucte">Ảnh thực tế</a></li>
    </ul>

	<form method="post" enctype="multipart/form-data" class="form">
        <div class="tab-item" id="tongquan">
		    <p class="tit-label">Tên</p>
		    <input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->ten?>" />
		
            <p class="tit-label">Tên không dấu</p>
            <input type="text" name="slug" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->slug?>" />

            <p class="tit-label">Mã</p>
            <input type="text" name="ma" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->ma?>" />

            <p class="tit-label">Số lượng</p>
            <input type="text" name="soluong" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->soluong?>" />

            <p class="tit-label">Ngang [Chiều dài]</p>
            <input type="text" name="ngang" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->ngang?>" />

            <p class="tit-label">Dọc [Chiều rộng]</p>
            <input type="text" name="doc" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->doc?>" />

            <p class="tit-label">Độ dày</p>
            <input type="text" name="doday" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->doday?>" />

            <p class="tit-label">Kích thước</p>
            <input type="text" name="kichthuoc" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->kichthuoc?>" />

            <p class="tit-label">Kho [Mô tả]</p>
            <input type="text" name="kho" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->kho?>" />

            <p class="tit-label">Sản phẩm nổi bật</p>
            <label><input type="radio" name="noibat" value="1" <?php if($data_da_chitiet->noibat == 1) echo 'checked'; ?>> Có</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="noibat" value="0" <?php if($data_da_chitiet->noibat == 0) echo 'checked'; ?>> không</label>
        </div>

        <div class="tab-item" id="loai">
            <p class="tit-label">Loại</p>
            <select name="loai">
                <option value="0">Chọn loại</option>
                <?php 
                foreach ($data_loai as $key => $value) 
                {
                    if($value->id == $data_da_chitiet->loai)
                    {
                        echo '<option value="'.$value->id.'" selected>'.$value->ten.'</option>';
                    }
                    else
                    {
                        echo '<option value="'.$value->id.'">'.$value->ten.'</option>';
                    }
                }
                ?>
            </select>

            <p class="tit-label">Danh mục</p>
            <select  name="danhmuc" class="">
                <option value="0">Chọn</option>
                 <?php foreach ($data_danhmuc as $key => $value) { 
                        if($value->id == $data_da_chitiet->danhmuc){
                            echo'<option value="'.$value->id.'"  selected="selected">'.$value->ten.'</option>';
                        }else{ 
                             echo'<option value="'.$value->id.'">'.$value->ten.'</option>';
                        }  
                    } 
                ?> 
            </select>

            <div class="load-thong-so">
            <?php 
                echo '<p class="tit-label">Chọn thông số</p>';
                foreach ($data_thongso as $key => $val) 
                {
                    if($val->danhmuc == $data_da_chitiet->danhmuc)
                    {
                        if(array_key_exists($val->id,$arr_dathongso))
                        {
                            echo '<label class="danhmuc-"><input type="checkbox" name="thongso[]" value="'.$val->id.'" checked> '.$val->ten.'</label><br><br>';
                        }
                        else
                        {
                            echo '<label class="danhmuc-"><input type="checkbox" name="thongso[]" value="'.$val->id.'" > '.$val->ten.'</label><br><br>'; 
                        }
                    }
                }
            ?>
            </div>
        </div>

        <div class="tab-item" id="gia">
            <p class="tit-label">Giá niêm yết</p>
            <input type="text" name="niemyet" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->niemyet ?>" />
        
            <p class="tit-label">Giá báo khách</p>
            <input type="text" name="baokhach" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->baokhach ?>" />

            <p class="tit-label">Giá chiết khấu</p>
            <input type="text" name="chietkhau" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->chietkhau ?>" />
        </div>

        <div class="tab-item" id="hinhanh">
            <p class="tit-label">Hình vuông</p>
            <div class="load-hinh">
                <?php 
                    echo '<p><input type="file" name="vuong" /> 500 x 408 | <p>';
                    if( isset($vuong_old) )
                    {
                        echo '<p><img src="../uploads/van-da/'.$vuong_old.'" height="150" /></p>';
                    }
                ?>
            </div>

            <p class="tit-label">Album</p>
            <input type="file" name="album[]" multiple /> 800 x 800 px<br><br>
            <?php
            if($data_da_chitiet->album != NULL)
            {
                foreach ($arr_album_old as $key_p => $value_p) {
                    echo '<img src="../uploads/van-da/'.$value_p.'" height="100" />';
                }
            }
            ?>
        </div>
		
        <div class="tab-item" id="baiviet"> 
            <p class="tit-label">Giới thiệu</p>
            <textarea rows="5" spellcheck="false" name="gioithieu" class="ckeditor"><?=$data_da_chitiet->gioithieu?></textarea>

            <p class="tit-label">Mô tả</p>
            <textarea rows="5" spellcheck="false" name="mota"><?=$data_da_chitiet->mota?></textarea>

            <p class="tit-label">Nội dung</p>
            <textarea rows="5" spellcheck="false" name="noidung" class="ckeditor"><?=$data_da_chitiet->noidung?></textarea>

            <p class="tit-label">Xuất xứ</p>
            <input type="text" name="xuatxu" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_da_chitiet->xuatxu?>" />
        </div>

        <div class="tab-item" id="banngay"> 
            <p class="tit-label">Ảnh ban ngày</p>
            <textarea rows="5" spellcheck="false" name="banngay" class="ckeditor"><?=$data_da_chitiet->banngay?></textarea>
        </div>

        <div class="tab-item" id="bandem"> 
            <p class="tit-label">Ảnh ban đêm</p>
            <textarea rows="5" spellcheck="false" name="bandem" class="ckeditor"><?=$data_da_chitiet->bandem?></textarea>
        </div>

        <div class="tab-item" id="latsan"> 
            <p class="tit-label">Ảnh lát sàn</p>
            <textarea rows="5" spellcheck="false" name="latsan" class="ckeditor"><?=$data_da_chitiet->latsan?></textarea>
        </div>

        <div class="tab-item" id="cauthang"> 
            <p class="tit-label">Ảnh cầu thang</p>
            <textarea rows="5" spellcheck="false" name="cauthang" class="ckeditor"><?=$data_da_chitiet->cauthang?></textarea>
        </div>

        <div class="tab-item" id="thucte"> 
            <p class="tit-label">Ảnh thực tế</p>
            <textarea rows="5" spellcheck="false" name="thucte" class="ckeditor"><?=$data_da_chitiet->thucte?></textarea>
        </div>

        <p style="color:red;">Tạo slide với thẻ div lass="slide-thuc-te owl-carousel"</p>

		<p class="tit-label"></p>
		<input type="submit" name="edit" class="submit" value="Cập nhật" />
	</form>
</div>
<script>
    $('select[name="danhmuc"]').change(function(){
        let iddanhmuc = $(this).val();
        if(iddanhmuc != 0)
        {
            $.ajax({
                method: "POST",
                data: {danhmuc:iddanhmuc, status:"edit", da:<?=$data_da_chitiet->id?>},
                url: "view/da/thong-so-danh-muc.php",
                success:function(data)
                {
                    $(".load-thong-so").html(data);
                }
            });
        }
    });

    $('.choose').change(function(){
        let loai = $(this).attr("loai");
        $(".load-"+loai).html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $(".load-"+loai).append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" />&nbsp;&nbsp;&nbsp;');
        }
    });
</script>