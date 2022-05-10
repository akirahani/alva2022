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
	if($_POST["name"] != '' && $_POST["phone"]!='' && $_POST["email"]!='')
	{
		$field=[
			'tenkhach',
			'dienthoaikhach',
			'email',
			'ngay',
			'gio',
			'trangthai',
			'ghichu',
			'trang'
		];
		$form =[
			'tenkhach'=>$_POST["name"],
			'dienthoaikhach'=>$_POST["phone"],
			'email'=>$_POST['email'],
			'ngay'=> date("Y-m-d"),
			'gio'=>strtotime(date('H:i:s')),
			'trangthai'=>1,
			'ghichu'=>$_POST["note"],
			'trang'=>$_POST["trang"]
		];
		$them = $query->ThemMoi('donhang',$field,$form);
		$lib->ConfigEmail($mail);
		// $mail->setFrom('daxuyensangalva@gmail.com', 'Alva nhận tư vấn #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		// $mail->addAddress('vanphonggiang@gmail.com');       
		$mail->setFrom('minhvu21091@gmail.com', 'Alva nhận tư vấn #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		$mail->addAddress('minhvu21091@gmail.com');         
		$mail->Subject = $_POST['name'].' gửi thông tin nhận tư vấn #'.date("d-m-Y H:i:s");
		$mail->Body    = '
			<h2>Khách yêu cầu tư vấn Tranh đá</h2>
			<p>Tên: '.$_POST["name"].'</p>
			<p>Điện thoại: '.$_POST["phone"].'</p>
			<p>Email: '.$_POST["email"].'</p>
			<p>Nội dung: '.$_POST["note"].'</p>';
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