<?php
	isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
	#Detail
    $fields = [];
    $operator = ["id" => "="];
    $condition = ["id" => $id];
    $data_detail = $query->ChiTiet("daily", $fields, $operator, $condition);
	// Album
	if($data_detail->album != NULL)
	{
		$arr_album_old = explode(",", $data_detail->album);
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
                move_uploaded_file($_FILES['album']['tmp_name'][$key], "../uploads/dai-ly/".$album_ten);
            }
            $save_album = implode(",", $arr_album);
            // Xóa file
            if($data_detail->album != NULL)
            {
            	foreach ($arr_album_old as $key_del => $value_del) {
            		unlink('../uploads/dai-ly/'.$value_del);
            	}
            }
        }
        else
        {
            $save_album = implode(",", $arr_album_old);
        }
        $fields = [	"ten", "diachi", "dienthoai", "hethong", "tinhthanh", "slug", "map", "gioithieu", "album" ];
        $condition = ["id"];
		$post_form = [
			"id" => $id,
			"ten" => $_POST['ten'],
        	"diachi" => $_POST['diachi'],
        	"dienthoai" => $_POST['dienthoai'],
        	"hethong" => $_POST['hethong'],
        	"tinhthanh" => $_POST['tinhthanh'],
        	"slug" => $_POST['slug'],
        	"map" => $_POST['map'],
        	"gioithieu" => $_POST['gioithieu'],
        	"album" => $save_album
		];
        $query->CapNhat("daily", $fields, $condition, $post_form);
        header("location:list");
	}
	$data_tinhthanh = $query->DanhSach("tinhthanh", [], [], [], [], [], []);
?>
<div class="blog small">

	<div class="bread">
		<h1>Đại lý <span>| cập nhật</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->ten?>" />
		
		<p class="tit-label">Địa chỉ</p>
		<input type="text" name="diachi" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->diachi?>" />

		<p class="tit-label">Điện thoại</p>
		<input type="text" name="dienthoai" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->dienthoai?>" />

		<p class="tit-label">Hệ thống</p>
		<label><input type="radio" name="hethong" value="1" <?php if($data_detail->hethong==1) echo "checked";?>> Đại lý hệ thống</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><input type="radio" name="hethong" value="0" <?php if($data_detail->hethong==0) echo "checked";?>> Đại lý thường</label>

		<p class="tit-label">Tỉnh thành</p>
		<select name="tinhthanh">
			<option value="0">Chọn</option>
			<?php
			foreach ($data_tinhthanh as $key => $value) {
				if($value->id == $data_detail->tinhthanh)
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

		<p class="tit-label">Album</p>
		<input type="file" name="album[]" multiple /> 16 x 9 px<br><br>

		<?php
		if($data_detail->album != NULL)
		{
			foreach ($arr_album_old as $key_p => $value_p) {
				echo '<img src="../uploads/dai-ly/'.$value_p.'" height="100" />';
			}
		}
		?>

		<p class="tit-label">Tên Không dấu</p>
		<input type="text" name="slug" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->slug?>" />

		<p class="tit-label">Map</p>
		<textarea rows="6" name="map"><?=$data_detail->map?></textarea>

		<p class="tit-label">Giới thiệu</p>
		<textarea class="ckeditor" name="gioithieu"><?=$data_detail->gioithieu?></textarea>

		<p class="tit-label"></p>
		<input type="submit" name="edit" value="Cập nhật" />
	</form>
</div>