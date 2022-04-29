<?php 
    require 'admin/lib/phpmailer/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
?>
<link rel="stylesheet" type="text/css" href="public/css/tru-cot.css?v=28042022">
<div class="tru-cot-da-all">
    <section class="tru-cot-da">
        <img src="public/image/logo.svg" class="logo" alt="Logo Alva">
        <div class="bg-extand">
            <h1>
                Đá tự nhiên ốp cột trụ
                <br>
                sang trọng, hiện đại
            </h1>
        </div>
    </section>
    <article class="content-first">
        <p>
            Cột trụ nhà được ví như nốt nhạc hay nhất trong một bài nhạc. Cột nhà có vai trò cực kỳ quan trọng trong việc tô điểm thêm cho vẻ đẹp ngôi nhà. Chính vì vậy việc sử dụng đá ốp cột là rất cần thiết giúp tô điểm cho cột nhà thêm sang trọng hơn.
        </p>
    </article>
    <ul class="img-list owl-carousel owl-theme">
        <li><img src="view/tru-cot-da/upload/owl-tru-cot.png" alt="Trụ cột đá tự nhiên"></li>
        <li><img src="view/tru-cot-da/upload/owl-tru-cot.png" alt="Trụ cột đá tự nhiên"></li>
        <li><img src="view/tru-cot-da/upload/owl-tru-cot.png" alt="Trụ cột đá tự nhiên"></li>
    </ul>
    <section class="description1">
        <article class="content-second">
            <p>
               không chỉ để nâng đỡ ngôi nhà mà còn đóng vai trò trang trí tuyệt vời. Đá tự nhiên làm nổi bật sự quý phái, sang trọng cho ngôi nhà. Ngoài ra, hình dáng tròn mềm mại hay vuông vững chãi cũng tạo ra nhiều lựa chọn cho bạn.
            </p>
        </article>
        <img src="view/tru-cot-da/upload/tru-cot-da2.png" alt="Trụ cột đá tự nhiên" class="img-2" />
        <article class="content-third">
            <p>
                Cột đã tự nhiên có nhiều ưu điểm vượt trội so với vật liệu ốp cột thông thường.
                <br><br>
                Những công trình sử dụng đá tự nhiên thì bạn sẽ yên tâm hơn về độ bền của chúng.
                <br><br>
                Được sử dụng phải chống chịu được các điều kiện về thời tiết, sức nặng và các lực tác động.
            </p>
        </article>
        <div class="group-tru-cot">
            <h1>
                được nhiều gia chủ lựa chọn 
                <br>
                đưa vào không gian sống
            </h1>
            <ul class="img-list-2 owl-carousel owl-theme">
                <li><img src="view/tru-cot-da/upload/owl-tru-cot.png" alt="Trụ cột đá tự nhiên"></li>
                <li><img src="view/tru-cot-da/upload/owl-tru-cot.png" alt="Trụ cột đá tự nhiên"></li>
                <li><img src="view/tru-cot-da/upload/owl-tru-cot.png" alt="Trụ cột đá tự nhiên"></li>
            </ul>
            <p>
                Trụ cột ốp lát đá tự nhiên thiết kế nổi tiếng từ xưa tới giờ, luôn được sử dụng khá phổ biến trong nhiều thiết kế nhà cổ điển hay hiện đại.
                <br><br>
                Để công trình đá ốp cột được toàn diện hơn bạn nên chọn được đơn vị thi công chất lượng, uy tín, chuyên nghiệp.
            </p>
        </div>
    </section>
    <section class="social">
        <h1>Alva Stone</h1>
        <p>Đưa tới sự khác biệt, khẳng định là đơn vị tư vấn, cung cấp và thi công lắp đặt các sản phẩm về đá tự nhiên cao cấp, ứng dụng công nghệ hiện đại và triết lý vượt qua thử thách để dẫn đầu. Titan Stone quyết tâm trở thành thương hiệu uy tín tại Việt Nam.</p>
        <div class="service">
            <div class="detail-service">
                <div class="icon">
                    <img src="" alt="">
                </div>
                <p>a</p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <img src="">
                    <p>a</p>
                </div>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <img src="">
                    <p>a</p>
                </div>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <img src="">
                    <p>a</p>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $('.img-list').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: false,
        autoplayTimeout:5000,
        items: 1,
    })

    $('.img-list-2').owlCarousel({
        loop:true,
        margin:-100,
        nav:false,
        autoplay: true,
        autoplayTimeout:5000,
        items: 1
    })
</script>