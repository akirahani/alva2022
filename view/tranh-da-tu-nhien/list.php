<?php 
    require 'admin/lib/phpmailer/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
?>
<link rel="stylesheet" type="text/css" href="public/css/tranh-da.css?v=28042022">
<section class="bg-head">
    <img src="public/image/logo.svg" alt="logo-alva">
    <h1>
        Tranh đá xuyên sáng 
        <br>
        vẻ đẹp kì bí từ thiên nhiên
    </h1>
    <div class="line"></div>
</section>
<section class="bg-two">
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
    <h1>
        Tranh đá xuyên sáng 
        <br>
        vẻ đẹp kì bí từ thiên nhiên
    </h1>
    <div class="line"></div>
    <p>
        Giúp cho các thiết kế tăng thêm độ sang trọng, lung linh. Tranh Đá tự nhiên xuyên sáng chính là làn gió mới mà rất nhiều các nhà thiết kế kiến trúc ưa chuộng để tạo nên nét đặc biệt, sự nổi bật, chút xa hoa và sự tinh tế cần thiết cho không gian.
    </p>
    <div class="info1">
        <img src="view/tranh-da-tu-nhien/upload/image-tranh-da1.png" alt="Ảnh tranh đá">
        <p class="text-in-image">
            Trong phong thủy, đá tự nhiên đá xuyên sáng onyx mang rất nhiều năng lượng tích cực có tác dụng giúp con người được mạnh mẽ hơn về thể chất lẫn tinh thần.
        </p>
    </div>
    <h1>
        mang vẻ đẹp thần bí
        <br>
        được nhiều gia chủ lựa chọn
        <br>
        đưa vào không gian sống
    </h1>
    <div class="line"></div>
    <ul class="slide2 owl-carousel owl-theme">
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
    $('.slide2').owlCarousel({
        loop:true,
        margin: -10,
        nav:true,
        autoplay: true,
        autoplayTimeout:5000,
        items: 1
    })
</script>