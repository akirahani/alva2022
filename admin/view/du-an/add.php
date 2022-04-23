<?php
	if(isset($_POST['add']))
	{
		// Hình vuông
		if(!empty($_FILES['vuong']['tmp_name']))
        {
            $hinh_vuong=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['vuong']['name']); 
            move_uploaded_file($_FILES['vuong']['tmp_name'], "../uploads/du-an/".$hinh_vuong);
        }
        else
        {
            $hinh_vuong = NULL;
        }
        // Hình dài
        if(!empty($_FILES['dai']['tmp_name']))
        {
            $hinh_dai=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['dai']['name']); 
            move_uploaded_file($_FILES['dai']['tmp_name'], "../uploads/du-an/".$hinh_dai);
        }
        else
        {
            $hinh_dai = NULL;
        }
        // Album
        if(!empty($_FILES['album']['tmp_name'][0]))
        {
            $arr_album=[];
            foreach($_FILES['album']['tmp_name'] as $key => $tmp_name)
            {
                $album_ten=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['album']['name'][$key]); 
                array_push($arr_album, $album_ten);      
                move_uploaded_file($_FILES['album']['tmp_name'][$key], "../uploads/du-an/".$album_ten);
            }
            $save_album = implode(",", $arr_album);
        }
        else
        {
            $save_album = NULL;
        }
        $fields = [	"ten", "vuong", "dai", "album", "gioithieu", "noidung", "loai" ];
        $post_form=[
        	"ten" => $_POST['ten'],
        	"vuong" => $hinh_vuong,
        	"dai" => $hinh_dai,
        	"album" => $save_album,
        	"gioithieu" => $_POST['gioithieu'],
        	"noidung" => $_POST['noidung'],
        	"loai" => $_POST['loai']
        ];
        $query->ThemMoi("duan", $fields, $post_form);
        header("location:list");
	}
?>
<div class="blog medium">

	<div class="bread">
		<h1>Dự án <span>| thêm mới</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" />
		
		<p class="tit-label">Hình vuông</p>
		<input type="file" name="vuong" /> 600 x 600 px

		<p class="tit-label">Hình dài</p>
		<input type="file" name="dai" /> 600 x 314 px

		<p class="tit-label">Album</p>
		<input type="file" name="album[]" multiple />

		<p class="tit-label">Giới thiệu</p>
		<textarea rows="5" spellcheck="false" name="gioithieu" class="ckeditor"></textarea>

		<p class="tit-label">Nội dung</p>
		<textarea rows="5" spellcheck="false" name="noidung" class="ckeditor"></textarea>

		<p class="tit-label">Loại dự án</p>
		<label><input type="radio" name="loai" value="1"> Nổi bật</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><input type="radio" name="loai" value="0" checked> khách hàng</label>

		<p class="tit-label"></p>
		<input type="submit" name="add" value="Thêm mới" />
	</form>
</div>