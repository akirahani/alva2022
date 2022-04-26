<?php 
	require_once 'lib/phpspreadsheet/autoload.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Exception.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE.php';
	require_once 'lib/phpspreadsheet/phpoffice/phpspreadsheet/src/PhpSpreadsheet/IOFactory.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	if(isset($_POST['submit'])){
		if(isset($_FILES['file']['name'])){
			$inputFileName = $_FILES['file']['name'];
			$target_dir = 'public/file/';
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

			$spreadsheet = IOFactory::load($target_dir.$inputFileName);
	        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
	        $arrayCount = count($sheetData);
	        $arr_print = [];
	        for($i=5;$i<=$arrayCount;$i++)
	        {
	        	$model = trim(strtoupper($sheetData[$i]["A"]));
	        	$number = trim(strtoupper($sheetData[$i]["B"]));
	        	$soluong = trim(strtoupper($sheetData[$i]["I"]));
	        	$niemyet = trim(strtoupper($sheetData[$i]["L"]));
	        	$chietkhau = trim(strtoupper($sheetData[$i]["M"]));
	        	$baokhach = trim(strtoupper($sheetData[$i]["N"]));
	        	$arr_print[$model]['ma'] = $number;
	        	$arr_print[$model]['soluong']=$soluong;
	        	$arr_print[$model]['niemyet'] = $niemyet;
	        	$arr_print[$model]['chietkhau']=$chietkhau;
	        	$arr_print[$model]['baokhach']=$baokhach;
	        }
	        $arr_da = [];
	        foreach ($arr_print as $key => $value) {
	        	$arr_da[$key] = $value['ma']; 
	        }
	        $process_da = implode(',',$arr_da);
	        $gia_da = json_encode($arr_print);
		}
	}


	// }	
	// // $spreadsheet = new Spreadsheet();
	// // $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
	// // $spreadsheet = $reader->load($inputFileName);
	// // $ds = $query->DanhSach('da',['ma'],[],[]);
	// // $gia = $query->DanhSach('da',['baokhach'],[],[]);
	// // $arr = [];
	// // foreach ($ds as $key => $value) {
	// // 	foreach ($value as $k => $ma) {
	// // 		$arr[$key] = $ma;
	// // 	}
	// // }
	// // $da = array_chunk($arr, 1);
	// // $spreadsheet->getActiveSheet()->fromArray(
 // //        $da,  
 // //        NULL,        
 // //        'A1'       
	// // );
	// // // baokhach
	// // $bk = [];
	// // foreach ($gia as $key => $value) {
	// // 	foreach ($value as $k => $val) {
	// // 		$bk[$key] = $val;
	// // 	}
	// // }
	// // $baokhach = array_chunk($bk, 1);
	// // $spreadsheet->getActiveSheet()->fromArray(
 // //        $baokhach,  
 // //        NULL,        
 // //        'B1'       
	// // );
	// // $writer = new Xlsx($spreadsheet);
	// // $writer->save('view/da/da-giao-bao.xlsx');
?>
<link rel="stylesheet" type="text/css" href="public/css/style.css?v=230422">
<div class="blog">
	<div class="bread">
		<h1>Đá tự nhiên <span>| Cập nhật giá nhiều sản phẩm</span></h1>
		<div class="clear"></div>
	</div>
	<div class="form">
		<p>Tên đá</p>
		<?php  
			if(isset($_POST['submit'])){
				if(isset($_FILES['file']['name'])){
					echo '<input class="input-text text-product" type="text" value="'.$process_da.'" gia="'.$gia_da.'">';
				}
			}
		?>
	</div>
	<div class="load-product"></div>
	<button class="get-product"><a>Lấy thông tin sản phẩm</a></button>
	<form method="post" enctype="multipart/form-data">
		<button class="file-upload">
			Tải file Exel
    		<input type="file" name="file" required />
  		</button>
  		<br>
  		<button type="submit" name="submit">Lấy dữ liệu file</button>
	</form>
</div>
<script>
	$('.get-product').click(function(){
		if($('.form input').val() != ''){
			var info = $('.text-product').val();
			var processing = info.split(','); 
			var gia = [];
			var gia = $('.text-product').attr('gia');
			console.log(gia);
			// $.ajax({
			// 	type: "POST",
			// 	data:{
			// 		sanpham:processing,
			// 		gia: gia,
			// 	},
			// 	url: 'view/da/process-update.php',
			// 	success:function(data){
			// 		$('.load-product').html(data);
			// 	}
			// });
		}
		else{
			alert('Vui lòng điền thông tin');
		}
	});
</script>