<?php
    $_SESSION['danhmuc'] = [];
    $data_thongso = $query->DanhSach("thongso", [], [], [], [], [], []);

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
    $arr_loai[0] = "Update";

	if(isset($_POST['add']))
	{
        // Hình vuông
		if(!empty($_FILES['vuong']['tmp_name']))
        {
            $hinh_vuong=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['vuong']['name']); 
            move_uploaded_file($_FILES['vuong']['tmp_name'], "../uploads/van-da/".$hinh_vuong);
            $file_tmp = $hinh_vuong;
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

        // Danh mục
        if(!empty($_POST['danhmuc']))
        {
            $str_danhmuc = $_POST['danhmuc'];
        }
        else
        {
            $str_danhmuc = NULL;
        }

        $fields = [ "ten", "vuong", "album", "gioithieu", "noidung", "danhmuc", "xuatxu", "slug", "noibat", "mota", "banngay", "bandem", "latsan", "cauthang", "doday", "kichthuoc", "thucte", "ma", "loai", "ngang", "doc", "soluong", "kho","niemyet","chietkhau","baokhach"];
        $post_form = [
            "ten" => $_POST['ten'],
            "vuong" => $file_tmp,
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
?>
<div class="blog">

	<div class="bread">
		<h1>Đá tự nhiên <span>| thêm mới</span></h1>
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
            <input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" />
        
            <p class="tit-label">Tên không dấu</p>
            <input type="text" name="slug" required spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Mã</p>
            <input type="text" name="ma" required spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Số lượng</p>
            <input type="text" name="soluong" required spellcheck="false" autocomplete="off" class="input-text" />
            
            <p class="tit-label">Ngang [Chiều dài]</p>
            <input type="text" name="ngang" required spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Dọc [Chiều rộng]</p>
            <input type="text" name="doc" required spellcheck="false" autocomplete="off" class="input-text" />
            
            <p class="tit-label">Độ dày</p>
            <input type="text" name="doday" required spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Kích thước</p>
            <input type="text" name="kichthuoc" required  spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Kho [Mô tả]</p>
            <input type="text" name="kho" required spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Sản phẩm nổi bật</p>
            <label><input type="radio" name="noibat" value="1"> Có</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="noibat" value="0" checked> không</label>
        </div>
		
        <div class="tab-item" id="loai">
            <p class="tit-label">Loại</p>
            <select name="loai">
                <option value="0">Chọn loại</option>
                <?php 
                foreach ($data_loai as $key => $value) 
                {
                    echo '<option value="'.$value->id.'">'.$value->ten.'</option>';
                }
                ?>
            </select>

            <p class="tit-label">Danh mục</p>
            <select  name="danhmuc" />
                <option value="0">Chọn</option>
                 <?php foreach ($data_danhmuc as $key => $value) { ?>
                    <option value="<?=$value->id ?>" ><?=$value->ten ?></option>
                <?php }?> 
            <select>

           <div class="load-thong-so">
                <p class="tit-label">Chọn thông số</p>
            </div>
        </div>

        <div class="tab-item" id="gia">
            <p class="tit-label">Giá niêm yết</p>
            <input type="text" name="niemyet" required spellcheck="false" autocomplete="off" class="input-text" />
        
            <p class="tit-label">Giá báo khách</p>
            <input type="text" name="baokhach" required spellcheck="false" autocomplete="off" class="input-text" />

            <p class="tit-label">Giá chiết khấu</p>
            <input type="text" name="chietkhau" required spellcheck="false" autocomplete="off" class="input-text" />
        </div>

        <div class="tab-item" id="hinhanh">
            <div class="load-hinh">
                <p class="tit-label">Hình vuông</p>
                <input type="file" name="vuong" required class="choose" loai="one"/> 500 x 408 px
                <br><br><div class="load-one"></div>
            </div>

            <p class="tit-label">Album</p>
            <input type="file" name="album[]" multiple required class="choose" loai="multi"  /> 800 x 800 px
            <br><br><div class="load-multi"></div>
        </div>

        <div class="tab-item" id="baiviet">   
            <p class="tit-label">Giới thiệu</p>
            <textarea rows="5" spellcheck="false" required  name="gioithieu" class="ckeditor"></textarea>

            <p class="tit-label">Mô tả</p>
            <textarea rows="5" spellcheck="false" required  name="mota"></textarea>

            <p class="tit-label">Nội dung</p>
            <textarea rows="5" spellcheck="false" required  name="noidung" class="ckeditor"></textarea>

            <p class="tit-label">Xuất xứ</p>
            <input type="text" name="xuatxu" required  spellcheck="false" autocomplete="off" class="input-text" />
        </div>
		
        <div class="tab-item" id="banngay"> 
            <p class="tit-label">Ảnh ban ngày</p>
            <textarea rows="5" spellcheck="false" name="banngay" class="ckeditor"></textarea>
        </div>

        <div class="tab-item" id="bandem"> 
            <p class="tit-label">Ảnh ban đêm</p>
            <textarea rows="5" spellcheck="false" name="bandem" class="ckeditor"></textarea>
        </div>

        <div class="tab-item" id="latsan"> 
            <p class="tit-label">Ảnh lát sàn</p>
            <textarea rows="5" spellcheck="false" name="latsan" class="ckeditor"></textarea>
        </div>

        <div class="tab-item" id="cauthang"> 
            <p class="tit-label">Ảnh cầu thang</p>
            <textarea rows="5" spellcheck="false" name="cauthang" class="ckeditor"></textarea>
        </div>

        <div class="tab-item" id="thucte"> 
            <p class="tit-label">Ảnh thực tế</p>
            <textarea rows="5" spellcheck="false" name="thucte" class="ckeditor"></textarea>
        </div>

        <p style="color:red;">Tạo slide với thẻ div lass="slide-thuc-te owl-carousel"</p>

		<p class="tit-label"></p>
		<input type="submit" name="add" class="submit" value="Thêm mới" />
	</form>
</div>
<script>
    $('select[name="danhmuc"]').change(function(){
        let iddanhmuc = $(this).val();
        if(iddanhmuc != 0)
        {
            $.ajax({
                method: "POST",
                data: {danhmuc:iddanhmuc},
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