<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	require '../../admin/lib/phpmailer/autoload.php';
	require '../../admin/model/Lib.php';
	require '../../admin/model/Query.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(true);
	$lib = new Lib();
	$query = new Query();
	if(@$_POST["ten"] != '' && @$_POST["dienthoai"]!='')
	{
		$field=[
			'tenkhach',
			'dienthoaikhach',
			'ngay',
			'gio',
			'trangthai',
		];
		$form =[
			'tenkhach'=>$_POST["ten"],
			'dienthoaikhach'=>$_POST["dienthoai"],
			'ngay'=> date("Y-m-d"),
			'gio'=>strtotime(date('H:i:s')),
			'trangthai'=>1,
		];
		$them = $query->ThemMoi('donhang',$field,$form);
		$lib->ConfigEmail($mail);
		// $mail->setFrom('daxuyensangalva@gmail.com', 'Alva nhận khách đến xem kho đá #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		// $mail->addAddress('vanphonggiang@gmail.com');     
		$mail->setFrom('minhvu21091@gmail.com', 'Alva nhận báo giá #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		$mail->addAddress('minhvu21091@gmail.com');         
		$mail->Subject = $_POST['ten'].' hẹn lịch xem kho đá #'.date("d-m-Y H:i:s");
		$mail->Body    = '
			<h2>Khách hẹn lịch xem kho đá</h2>
			<p>Tên: '.$_POST["ten"].'</p>
			<p>Điện thoại: '.$_POST["dienthoai"].'</p>
			<p>Kho đá: '.$_POST["khoda"].'</p>
			<p>Vân đá quan tâm: '.$_POST["vanda"].'</p>';
		$mail -> CharSet = "UTF-8";
		$mail->isHTML(true);                   
		if(!$mail->send())
		{
			echo json_encode([
				"status" => "fail",
				"mes" => $mail->ErrorInfo
			]);
		}
		else
		{
			echo json_encode([
				"status" => "success",
				"mes" => "Gửi liên hệ thành công"
			]);
		}
	}
	else
	{
		echo "Hi";
	}
?>