
<link rel="stylesheet" type="text/css" href="public/css/style.css?v=230422">
<div class="blog mini">
	<div class="bread">
		<h1>Đá tự nhiên <span>| Cập nhật giá nhiều sản phẩm</span></h1>
		<div class="clear"></div>
	</div>
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

		        echo '<form action="" method="POST">';
		        for($i=2;$i<=$arrayCount;$i++)
        		{
		        	$model = trim(strtoupper($sheetData[$i]["A"]));
		        	$number = trim(strtoupper($sheetData[$i]["B"]));
		        	$soluong = trim(strtoupper($sheetData[$i]["I"]));
		        	$niemyet = trim(strtoupper($sheetData[$i]["L"]));
		        	$chietkhau = trim(strtoupper($sheetData[$i]["M"]));
		        	$baokhach = trim(strtoupper($sheetData[$i]["N"]));


			        $get_id = $query->DanhSach('da',['id'],['ma'=>'='],[],[],['ma'=>$number]);
			        if($number != ''){
			        	if(!empty($get_id)){
			        	echo '<div class="load-product" style="padding-top: 2%; margin: 0 auto; width: 350px;">';
					       	foreach ($get_id as $key => $val) {
				    			echo '<b>'.$number.'</b>';
								echo '<input class="capnhat_da" type="hidden" value="'.$val->id.'" name="id[]">';
								echo '<p>Giá chiết khấu:</p><input class="input-text chietkhau" value="'.$chietkhau.'" name="chietkhau[]">';
								echo '<p>Giá niêm yết:</p> <input class="input-text niemyet" value="'.$niemyet.'" name="niemyet[]">';
								echo '<p>Giá báo khách:</p> <input class="input-text baokhach" value="'.$baokhach.'" name="baokhach[]">';
								echo '<p>Số lượng:</p> <input class="input-text soluong" value="'.$soluong.'" name="soluong[]">';
					       	}
				      		echo '</div>';	
				        }
				        else{
				        	echo '<div class="load-product" style="padding-top: 2%; margin: 0 auto; width: 350px;">';
							echo '<p style="color: red">Không có mã'.$number.'</p>';
				      		echo '</div>';	
				        }
			        }
				}
				echo '<button class="get-product" type="submit" name="capnhat" style="justify-conent:center;"><a>Cập nhật dữ liệu file</a></button>';
				echo '</form>';
			}
			
        }
		if(isset($_POST['capnhat'])) {
			foreach ($_POST['id'] as $key => $value) {
				$capnhat = $query->CapNhat('da',['soluong','niemyet','chietkhau','baokhach'],['id'],['id'=>$value,'soluong'=>$_POST['soluong'][$key],'niemyet'=>$_POST['niemyet'][$key],'baokhach'=>$_POST['baokhach'][$key],'chietkhau'=>$_POST['chietkhau'][$key]]);
			}
		}
	?>
	<form method="post" enctype="multipart/form-data">
		<!--<button class="file-upload">-->
			Tải file Exel
    		<input type="file" name="file" required />
  		<!--</button>-->
  		<p style="color:red">
  		    Cột B: Mã sản phẩm
  		    <br>  
  		    Cột I: Số lượng 
  		    <br>
  		    Cột L: Giá niêm yết
  		    <br>
  		    Cột M: Giá chiết khấu
  		    <br>
  		    Cột N: Giá báo khách 
  		</p>
  		<br>
  		<button class="get-product" type="submit" name="submit"><a>Lấy dữ liệu file</a></button>
	</form>
</div>