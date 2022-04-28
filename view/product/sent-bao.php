<?php
	require '../../admin/lib/phpmailer/autoload.php';
	require '../../admin/model/Lib.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(true);
	$lib = new Lib();
	if(@$_POST["ten"] != '' && @$_POST["dienthoai"]!='' && @$_POST["noidung"]!='')
	{
		$lib->ConfigEmail($mail);
		$mail->setFrom('minhvu21091@gmail.com', 'Alva nhận báo giá #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		$mail->addAddress('minhvu21091@gmail.com');         
		$mail->Subject = $_POST['ten'].' gửi liên hệ #'.date("d-m-Y H:i:s");
		$mail->Body    = '
			<h2>Khách nhận báo giá</h2>
			<p>'.$_POST["vanda"].'</p>
			<p>Tên: '.$_POST["ten"].'</p>
			<p>Điện thoại: '.$_POST["dienthoai"].'</p>
			<p>Nội dung: '.$_POST["noidung"].'</p>';
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