<?php
	if(isset($_POST['update']))
	{
		if(!empty($_FILES['mobile']['name']))
		{
			$mobile = date('Y-m-d-H-i-s-').$_FILES['mobile']['name'];
			move_uploaded_file($_FILES['mobile']['tmp_name'], '../uploads/banner/'.$mobile);
		}
		else
		{
			$mobile = NULL;
		}

		if(!empty($_FILES['file']['name']))
		{
			$pic = date('Y-m-d-H-i-s-').$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/banner/'.$pic);
		}
		else
		{
			$pic = NULL;
		}
		
		$fields = ["ten", "link", "thutu", "mobile", "desktop"];
		$post_form = [
			"ten" => $_POST['ten'],
			"link" => $_POST['link'],
			"thutu" => $_POST['thutu'],
			"mobile" => $mobile,
			"desktop" => $pic,
		];
		$query->ThemMoi("banner", $fields, $post_form);
		#Xử lý banner
		$data_list = $query->DanhSach("banner", [], [], ["thutu" => "ASC"], [], []);
		$fields = ["banner"];
        $condition = ["id"];
        $post_form = [
			"banner" => json_encode($data_list),
            "id" => 1
        ];
        $query->CapNhat("company", $fields, $condition, $post_form);
		header("location:list");
	}
?>
<div class="blog small">
	<div class="bread">
		<h1>Banner <span>| thêm mới</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input class="input-text" type="text" name="ten" autocomplete="off" />

		<p class="tit-label">Mobile</p>
		<input type="file" name="mobile"/> 800 x 610

		<p class="tit-label">Desktop</p>
		<input type="file" name="file"/> 1200 x 558

		<p class="tit-label">Link</p>
		<input class="input-text" type="text" name="link" autocomplete="off" />

		<p class="tit-label">Thứ tự</p>
		<input class="input-text" type="number" name="thutu" autocomplete="off" />

		<p class="tit-label"></p>
		<input type="submit" name="update" value="Thêm mới" />
	</form>
</div>