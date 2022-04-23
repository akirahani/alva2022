<?php
	isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
	#Detail
    $fields = [];
    $operator = ["id" => "="];
    $condition = ["id" => $id];
    $data_detail = $query->ChiTiet("duan", $fields, $operator, $condition);

	// Hình vuông
	if($data_detail->vuong != NULL)
	{
		$vuong_old = $data_detail->vuong;
	}
	else
	{
		$vuong_old = NULL;
	}
	// Hình dài
	if($data_detail->dai != NULL)
	{
		$dai_old = $data_detail->dai;
	}
	else
	{
		$dai_old = NULL;
	}
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
		// Hinhg vuông
        if(!empty($_FILES['vuong']['name']))
        {  
            $vuong=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['vuong']['name']);      
            move_uploaded_file($_FILES['vuong']['tmp_name'], "../uploads/du-an/".$vuong);
            if($vuong_old != NULL)
            {
            	unlink('../uploads/du-an/'.$vuong_old);
            }
            $vuong_save = $vuong;
        }
        else
        {
            $vuong_save = $vuong_old;
        }
        // Hinhg dài
        if(!empty($_FILES['dai']['name']))
        {  
            $dai=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['dai']['name']);      
            move_uploaded_file($_FILES['dai']['tmp_name'], "../uploads/du-an/".$dai);
            if($dai_old != NULL)
            {
            	unlink('../uploads/du-an/'.$dai_old);
            }
            $dai_save = $dai;
        }
        else
        {
            $dai_save = $dai_old;
        }
        // Album
        if(!empty($_FILES['album']['tmp_name'][0]))
        {
        	// Lưu file album
            $arr_album=[];
            foreach($_FILES['album']['tmp_name'] as $key => $tmp_name)
            {
                $album_ten=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['album']['name'][$key]); 
                array_push($arr_album, $album_ten);      
                move_uploaded_file($_FILES['album']['tmp_name'][$key], "../uploads/du-an/".$album_ten);
            }
            $save_album = implode(",", $arr_album);
            // Xóa file
            if($data_detail->album != NULL)
            {
            	foreach ($arr_album_old as $key_del => $value_del) {
            		unlink('../uploads/du-an/'.$value_del);
            	}
            }
        }
        else
        {
            $save_album = implode(",", $arr_album_old);
        }
        $fields = [ "ten", "vuong", "dai", "album", "gioithieu", "noidung", "loai" ];
        $condition = ["id"];
        $post_form = [
        	"id" => $id,
        	"ten" => $_POST['ten'],
        	"vuong" => $vuong_save,
        	"dai" => $dai_save,
        	"album" => $save_album,
        	"gioithieu" => $_POST['gioithieu'],
        	"noidung" => $_POST['noidung'],
        	"loai" => $_POST['loai']
        ];
        $query->CapNhat("duan", $fields, $condition, $post_form);
        header("location:list");
	}
?>
<div class="blog medium">

	<div class="bread">
		<h1>Dự án <span>| cập nhật</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->ten?>" />
		
		<p class="tit-label">Hình ảnh</p>
		<input type="file" name="vuong" /> 600 x 600 px
		<?php
		if($data_detail->vuong != NULL)
		{
			echo '<br><br><p><img src="../uploads/du-an/'.$data_detail->vuong.'" height="150" />';
		}
		?>

		<p class="tit-label">Hình dài</p>
		<input type="file" name="dai" /> 600 x 314 px
		<?php
		if($data_detail->dai != NULL)
		{
			echo '<br><br><p><img src="../uploads/du-an/'.$data_detail->dai.'" height="150" />';
		}
		?>

		<p class="tit-label">Album</p>
		<input type="file" name="album[]" multiple />
		<?php
		if($data_detail->album != NULL)
		{
			foreach ($arr_album_old as $key_p => $value_p) {
				echo '<br><br><p><img src="../uploads/du-an/'.$value_p.'" height="150" />';
			}
		}
		?>

		<p class="tit-label">Giới thiệu</p>
		<textarea rows="5" spellcheck="false" name="gioithieu" class="ckeditor"><?=$data_detail->gioithieu?></textarea>

		<p class="tit-label">Nội dung</p>
		<textarea rows="5" spellcheck="false" name="noidung" class="ckeditor"><?=$data_detail->noidung?></textarea>

		<p class="tit-label">Loại dự án</p>
		<label><input type="radio" name="loai" value="1" <?php if($data_detail->loai ==1) echo 'checked';?> /> Nổi bật</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><input type="radio" name="loai" value="0" <?php if($data_detail->loai ==0) echo 'checked';?> /> khách hàng</label>

		<p class="tit-label"></p>
		<input type="submit" name="edit" value="Cập nhật" />
	</form>
</div>