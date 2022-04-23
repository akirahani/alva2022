<?php
    #Detail
    $id = 1;
    $fields = [];
    $operator = ["id" => "="];
    $condition = ["id" => $id];
    $data_detail = $query->ChiTiet("company", $fields, $operator, $condition);
    //Update
    if(isset($_POST['update']))
    {
        $fields = [ "ten", "dienthoai", "email", "diachi", "tongkho", "mo", "facebook", "youtube", "des", "keyword", "muahang", "map", "mes", "zalo"];
        $condition = ["id"];
        $post_form = [
            "ten" => $_POST['ten'],
            "dienthoai" => $_POST['dienthoai'],
            "email" => $_POST['email'],
            "diachi" => $_POST['diachi'],
            "tongkho" => $_POST['tongkho'],
            "mo" => $_POST['mo'],
            "facebook" => $_POST['facebook'],
            "youtube" => $_POST['youtube'],
            "des" => $_POST['des'],
            "keyword" => $_POST['keyword'],
            "muahang" => $_POST['muahang'],
            "map" => $_POST['map'],
            "mes" => $_POST['mes'],
            "zalo" => $_POST['zalo'],
            "id" => $id
        ];
        $query->CapNhat("company", $fields, $condition, $post_form);
        header("location:info");
    }
?>

<div class="blog">
    <div class="bread">
        <h1><?= __NAME__?> <span>| cập nhật</span></h1>
        <div class="clear"></div>
    </div>

    <form method="post" class="form">
        <p class="tit-label">Tên công ty</p>
        <input type="text" name="ten" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->ten?>" />
        
        <p class="tit-label">Điện thoại</p>
        <input type="text" name="dienthoai" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->dienthoai?>" />
        
        <p class="tit-label">Email</p>
        <input type="email" name="email" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->email?>" />

        <p class="tit-label">Địa chỉ</p>
        <input type="text" name="diachi" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->diachi?>" />

        <p class="tit-label">Tổng kho</p>
        <input type="text" name="tongkho" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->tongkho?>" />

        <p class="tit-label">Mỏ khai thác</p>
        <input type="text" name="mo" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->mo?>" />

        <p class="tit-label">Fanpage</p>
        <input type="text" name="facebook" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->facebook?>" />

        <p class="tit-label">Facebook cá nhân [Chat]</p>
        <input type="text" name="mes" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->mes?>" />

        <p class="tit-label">Zalo</p>
        <input type="text" name="zalo" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->zalo?>" />

        <p class="tit-label">Youtube</p>
        <input type="text" name="youtube" spellcheck="false" autocomplete="off" class="input-text" value="<?=$data_detail->youtube?>" />

        <p class="tit-label">Description</p>
        <textarea rows="5" spellcheck="false" name="des"><?=$data_detail->des?></textarea>

        <p class="tit-label">Keyword</p>
        <textarea rows="5" spellcheck="false" name="keyword"><?=$data_detail->keyword?></textarea>

        <p class="tit-label">Chính sách mua hàng sản phẩm</p>
        <textarea rows="5" spellcheck="false" name="muahang" class="ckeditor"><?=$data_detail->muahang?></textarea>

        <p class="tit-label">Map</p>
        <textarea rows="5" spellcheck="false" name="map"><?=$data_detail->map?></textarea>

        <p class="tit-label"></p>
        <input type="submit" name="update" value="Cập nhật">
    </form>
</div>