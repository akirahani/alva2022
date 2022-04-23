<?php
	if(isset($_POST['add']))
	{
		if(!empty($_FILES['file']['name']))
		{
			$pic = date('Y-m-d-H-i-s-').$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/catalog/'.$pic);
		}
		else
		{
			$pic = NULL;
		}
		$fields = ["ten", "hinh"];
		$post_form = [
			"ten" => $_POST['ten'],
			"hinh" => $pic
		];
		$query->ThemMoi("catalog", $fields, $post_form);
		header("location:list");
	}
?>
<div class="blog small">
	<div class="bread">
		<h1>Catalog <span>| thêm mới</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" />
		
		<p class="tit-label">Hình ảnh</p>
		<input type="file" name="file" /> 800 x 521 px

		<p class="tit-label"></p>
		<input type="submit" name="add" value="Thêm mới" />
	</form>
</div>