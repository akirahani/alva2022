<?php
	require '../../admin/lib/phpmailer/autoload.php';
	require '../../admin/model/Lib.php';
	require '../../admin/model/Query.php';
	require '../../admin/lib/phpmailer/phpmailer/phpmailer/src/Exception.php';
	require '../../admin/lib/phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
	require '../../admin/lib/phpmailer/phpmailer/phpmailer/src/SMTP.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(true);
	$lib = new Lib();
	$query = new Query();
	if(@$_POST["ten"] != '' && @$_POST["dienthoai"]!='' && @$_POST["noidung"]!='')
	{
		$them_don = $query->ThemMoi('donhang',[],['tenkhach'=>'=','dienthoaikhach'=>'=','ghichu'=>'=','trangthai'=>'=','ngay'=>'=','gio'=>'='],['tenkhach'=>$_POST['ten'],'dienthoaikhach'=>$_POST["dienthoai"],'ghichu'=>$_POST["noidung"],'trangthai'=>1,'ngay'=>date("d-m-Y"),'gio'=>strtotime(date("H:i:s"))]);
		$lib->ConfigEmail($mail);
		// $mail->setFrom('sentmail.alva@gmail.com', 'Alva nhận báo giá #'.date("d-m-Y H:i:s"));//Dat cung tieu de se ve cung 1 mail
		$mail->setFrom('minhvu21091@gmail.com','Alva nhận báo giá #'.date("d-m-Y H:i:s"));
		$mail->addAddress('minhvu21091@gmail.com');         
		$mail->Subject = $_POST['ten'].' đăng ký nhận báo giá #'.date("d-m-Y H:i:s");
		$mail->Body    = '
			<h2>Khách nhận báo giá</h2>
			<p>Tên: '.$_POST["ten"].'</p>
			<p>Điện thoại: '.$_POST["dienthoai"].'</p>
			<p>Nội dung: '.$_POST["noidung"].'</p>
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