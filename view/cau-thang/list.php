<?php 
	require 'admin/lib/phpmailer/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
?>

<script>
	$('.slide-top ul').owlCarousel({
        loop:true,
        nav:false,
        autoplay: false,
        items: 1
    });

	$('.slide-bot ul').owlCarousel({
        loop:true,
        nav:true,
        autoplay: false,
        items: 1,
        navText:["<img src='view/cau-thang/image/phai.svg'>", "<img src='view/cau-thang/image/trai.svg'>"]
    });
</script>