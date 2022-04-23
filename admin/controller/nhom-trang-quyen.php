<?php
	$tit ="Nhóm trang quyền"
    $thanhvien = $query->DanhSach('thanhvien',['id','username','fullname','nhom'],[],[],[]);
    $trang = $query->DanhSach('trang',['id'],[],[],[]);
    $nhom = $query->DanhSach('nhom',[],[],[],[]);
?>