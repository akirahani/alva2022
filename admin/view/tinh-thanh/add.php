<?php
	$data_vungmien = $query->DanhSach("vungmien", [], [], [], [], [], []);
	if(isset($_POST['add']))
	{
        $fields = ["ten", "vungmien"];
		$post_form = [
			"ten" => $_POST['ten'],
			"vungmien" => $_POST['vungmien']
		];
		$query->ThemMoi("tinhthanh", $fields, $post_form);
        header("location:list");
	}
?>
<div class="blog small">

	<div class="bread">
		<h1>Tỉnh thành <span>| thêm mới</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" />

		<p class="tit-label">Vùng miền</p>
		<select name="vungmien">
			<option value="0">Chọn</option>
			<?php
			foreach ($data_vungmien as $key => $value) 
			{
				echo '<option value="'.$value->id.'">'.$value->ten.'</option>';
			}
			?>
		</select>

		<p class="tit-label"></p>
		<input type="submit" name="add" value="Thêm mới" />
	</form>
</div>