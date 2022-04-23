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
		$mail->setFrom('daxuyensangalva@gmail.com', 'Alva nhận liên hệ #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		$mail->addAddress('vanphonggiang@gmail.com');         
		$mail->Subject = $_POST['ten'].' gửi liên hệ #'.date("d-m-Y H:i:s");
		$mail->Body    = '
			<h2>Khách liên hệ</h2>
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