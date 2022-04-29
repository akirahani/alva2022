<?php 
    require 'admin/lib/phpmailer/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
?>
<link rel="stylesheet" type="text/css" href="public/css/tranh-da.css?v=28042022">
<section class="bg-head">
    <img src="public/image/logo.svg" alt="Logo Alva">
    <h1>Tranh đá xuyên sáng vẻ đẹp kì bí từ thiên nhiên</h1>
</section>
<section class="bg-two">
    <div class="line"></div>
    <p>
        Tranh đá tự nhiên xuyên sáng có vẻ đẹp xuất sắc và mang nhiều ý nghĩa. Với khả năng xuyên sáng đặc biệt, đá tự nhiên xuyên sáng được ưu ái ứng dụng trong các công trình kiến trúc nội ngoại thất như ốp mặt tiền, đại sảnh, lát hành lang, quầy lễ tân, …
    </p>
    <ul class="slide1 owl-carousel owl-theme">
        <li><img src="view/tranh-da-tu-nhien/upload/slide1.1.png" alt="Tranh đá tự nhiên slide1.1"></li>
        <li><img src="view/tranh-da-tu-nhien/upload/slide1.2.png" alt="Tranh đá tự nhiên slide1.2"></li>
        <li><img src="view/tranh-da-tu-nhien/upload/slide1.3.png" alt="Tranh đá tự nhiên slide1.3"></li>
        <li><img src="view/tranh-da-tu-nhien/upload/slide1.4.png" alt="Tranh đá tự nhiên slide1.4"></li>
        <li><img src="view/tranh-da-tu-nhien/upload/slide1.5.png" alt="Tranh đá tự nhiên slide1.5"></li>
    </ul>
</section>

<script>
    $('.slide1').owlCarousel({
        loop:true,
        margin: -50,
        nav:false,
        autoplay: true,
        autoplayTimeout:5000,
        items: 1
    })
</script>