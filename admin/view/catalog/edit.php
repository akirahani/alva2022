<?php
	isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
	#Detail
    $fields = [];
    $operator = ["id" => "="];
    $condition = ["id" => $id];
    $data_detail = $query->ChiTiet("catalog", $fields, $operator, $condition);

	if(isset($_POST['edit']))
	{
        if(!empty($_FILES['file']['name']))
        {  
            $pic=date('Y-m-d-H-i-s').$lib->changeTitle($_FILES['file']['name']);      
            move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/catalog/".$pic);
            unlink('../uploads/catalog/'.$data_detail->hinh);
        }
        else
        {
            $pic = $data_detail->hinh;
        }
        $fields = ["ten", "hinh"];
        $condition = ["id"];
        $post_form = [
			"ten" => $_POST['ten'],
			"hinh" => $pic,
            "id" => $id
        ];
        $query->CapNhat("catalog", $fields, $condition, $post_form);
        header("location:list");
	}
?>
<div class="blog small">

	<div class="bread">
		<h1>Catalog <span>| cập nhật</span></h1>
		<div class="clear"></div>
	</div>

	<form method="post" enctype="multipart/form-data" class="form">
		<p class="tit-label">Tên</p>
		<input type="text" name="ten" required spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->ten?>" />
		
		<p class="tit-label">Hình ảnh</p>
		<input type="file" name="file" /> 800 x 521 px
		<?php
		if($data_detail->hinh != NULL)
		{
			echo '<br><br><p><img src="../uploads/catalog/'.$data_detail->hinh.'" height="150" />';
		}
		?>
		<p class="tit-label"></p>
		<input type="submit" name="edit" value="Cập nhật" />
	</form>
</div>