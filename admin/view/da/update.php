<?php 
	require_once 'lib/phpspreadsheet/autoload.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	$spreadsheet = new Spreadsheet();

	$ds = $query->DanhSach('da',['ma'],[],[]);
	$gia = $query->DanhSach('da',['baokhach'],[],[]);
	$arr = [];
	foreach ($ds as $key => $value) {
		foreach ($value as $k => $ma) {
			$arr[$key] = $ma;
		}
	}
	$da = array_chunk($arr, 1);
	$spreadsheet->getActiveSheet()->fromArray(
        $da,  
        NULL,        
        'A1'       
	);
	// baokhach
	$bk = [];
	foreach ($gia as $key => $value) {
		foreach ($value as $k => $val) {
			$bk[$key] = $val;
		}
	}
	$baokhach = array_chunk($bk, 1);
	$spreadsheet->getActiveSheet()->fromArray(
        $baokhach,  
        NULL,        
        'B1'       
	);
	$writer = new Xlsx($spreadsheet);
	$writer->save('view/da/da-giao-bao.xlsx');
?>
<link rel="stylesheet" type="text/css" href="public/css/style.css?v=230422">
<div class="blog">
	<div class="bread">
		<h1>Đá tự nhiên <span>| Cập nhật giá nhiều sản phẩm</span></h1>
		<div class="clear"></div>
	</div>
	<div class="form">
		<p>Tên đá</p>
		<input class="input-text text-product" type="text">
	</div>
	<div class="load-product">
	</div>
	<button class="get-product"><a>Lấy thông tin sản phẩm</a></button>
	<button class="file-upload">
		Tải file Exel
    	<input type="file" />
  	</button>
</div>
<script>
	$('.get-product').click(function(){
		if($('.form input').val() != ''){
			var info = $('.text-product').val();
			var processing = info.split(','); 
			$.ajax({
				type: "POST",
				data:{
					sanpham:processing
				},
				url: 'view/da/process-update.php',
				success:function(data){
					$('.load-product').html(data);
				}
			});
		}
		else{
			alert('Vui lòng điền thông tin');
		}
	});
</script>