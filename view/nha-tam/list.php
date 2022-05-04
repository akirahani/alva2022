<?php 
    require 'admin/lib/phpmailer/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
?>
<link rel="stylesheet" type="text/css" href="public/css/nha-tam.css?v=28042022">
<main class="nha-tam-all">
    <section class="nha-tam">
        <div class="bg-extand">
            <h1>
                Nhà tắm sang trọng 
                <br>
                hiện đại với đá tự nhiên
            </h1>
        </div>
    </section>
   
    <section class="carousel1">
        <article class="content-first">
            <p>Phòng tắm không chỉ phục vụ cho nhu cầu sinh hoạt thường ngày. Nó còn ảnh hưởng đến đời sống tinh thần, phản ánh gu thẩm mỹ của người sở hữu.</p>
        </article>
        <div class="bg-second">
            <div class="text-noibat">
                <h1>
                    Sử dụng đá tự nhiên ốp lát
                    <br>
                    tạo nên vẻ đẹp sang trọng
                </h1>
                <span class="noibat"></span>
            </div> 
            <ul class="img-list owl-carousel owl-theme">
                <li><img src="view/nha-tam/upload/nha-tam1.1.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.2.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.3.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.4.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.5.png" alt="Lavabo đá tự nhiên"></li>
            </ul>
            <article class="content-second">
                <p>
                    Đá tự nhiên ốp lát nhà tắm tạo nên vẻ đẹp sang trọng với những đường nét hoa văn độc đáo, màu sắc đa dạng sang trọng, độ bền cao, khả năng chống vết bẩn và hao mòn.   
                </p>
            </article>
        </div>
    </section>
    <section class="description1">
        <div class="text-noibat2">
            <span class="noibat2"></span>
            <h1>
                được nhiều gia chủ lựa chọn
                <br>
                đưa vào không gian sống
            </h1>
        </div> 
        <img src="view/nha-tam/upload/bg-third.png" alt="Trụ cột đá tự nhiên" class="img-2" />
        <article class="content-third">
            <p>
                Đá tự nhiên ngoài việc được dùng để ốp tường và lát sàn trong phòng tắm, đá còn dùng làm các thiết bị vệ sinh như bồn tắm, chậu rửa mặt, chân đỡ, bàn lavabo…
            </p>
        </article>
        <div class="group-nha-tam">
            <ul class="img-list-2 owl-carousel owl-theme">
                <li><img src="view/nha-tam/upload/nha-tam2.1.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam2.2.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam2.3.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam2.4.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam2.5.png" alt="Lavabo đá tự nhiên"></li>
            </ul>
            <h1>Đá tự nhiên và những tác dụng trong phong thủy</h1>
            <p>
                Đá tự nhiên còn là sự lựa chọn đặc biệt thích hợp về phong thủy.
                <br>
                Sử dụng loại đá này trong nhà sẽ khiến cho người sở hữu tịnh tâm, bình tĩnh, giảm thiểu tối đa những cảm xúc đau buồn, giận dữ và những suy nghĩ tiêu cực.
            </p>
        </div>
    </section>

    <section class="social">
        <h1>Alva Stone</h1>
        <p>Đưa tới sự khác biệt, khẳng định là đơn vị tư vấn, cung cấp và thi công lắp đặt các sản phẩm về đá tự nhiên cao cấp, ứng dụng công nghệ hiện đại và triết lý vượt qua thử thách để dẫn đầu.
         Titan Stone quyết tâm trở thành thương hiệu uy tín tại Việt Nam.</p>
        <div class="service">
            <div class="detail-service">
                <div class="icon">
                    <img src="view/nha-tam/upload/icon1.png" alt="icon service">
                </div>
                <p>
                    Miễn phí 
                    <br>
                    Tư vấn, thiết kế
                </p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <img src="view/nha-tam/upload/icon2.png" alt="icon service">
                </div>
                 <p>
                    Lắp đặt
                    <br>
                    hoàn thiện 2 ngày
                </p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <img src="view/nha-tam/upload/icon3.png" alt="icon service">
                </div>
                <p>
                    Bảo hành Đá
                    <br>
                    01 năm
                </p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <img src="view/nha-tam/upload/icon4.png" alt="icon service">
                </div>
                <p>
                    Bảo hành đèn led
                    Samsung 05 năm
                </p>
            </div>
        </div>
        <ul class="company-info">
            <li><img src="view/nha-tam/upload/place.svg" alt="Showroom" /> <p>Showroom: Số 2 Mạc Đăng Doanh, Dương Kinh, Hải Phòng</p></li>
            <li><img src="view/nha-tam/upload/tel.svg" alt="Hotline" /><p>Hotline: 1900 669 996</p></li>
            <li><img src="view/nha-tam/upload/fb.svg" alt="Fanpage" /><p>Fanpage: Đá Tự Nhiên Titan Stone</p></li>
            <li><img src="view/nha-tam/upload/mail.svg" alt="Email" /><p>Email: Titanstone@gmail.com</p></li>
        </ul>
    </section>

    <section class="contact">
        <h1>
            Gửi thông tin của bạn cho chúng tôi 
            <br>
            Để được tư vấn miễn phí tốt nhất
        </h1>
        <div class="form-contact-box" id="form-contact">
            <form class="form-area" method="post">
                <div class="input-placeholder">
                    <input type="text" name="name" required spellcheck="false" autocomplete="off">
                    <div class="placeholder-ct">
                        Tên của bạn (<span>*</span>)
                    </div>
                </div>
                <div class="input-placeholder">
                    <input type="text" name="email" required spellcheck="false" autocomplete="off">
                    <div class="placeholder-ct">
                        Email (<span>*</span>)
                    </div>
                </div>
                <div class="input-placeholder">
                    <input type="text" name="phone" required spellcheck="false" autocomplete="off">
                    <div class="placeholder-ct">
                        Số điện thoại (<span>*</span>)
                    </div>
                </div>
                <div class="input-placeholder">
                    <textarea type="text" name="note" placeholder="Tin nhắn"></textarea>
                </div>
                <button type="sumbit" name="submit">Gửi liên hệ</button>
            </form>            
        </div>
    </section>
</main>
<script type="text/javascript">
    $('.img-list').owlCarousel({
        loop:true,
        margin: -110,
        nav: false,
        autoplay: true,
        autoplayTimeout:5000,
        items: 1
    })

    $('.img-list-2').owlCarousel({
        loop:true,
        margin: -40,
        nav:true,
        autoplay: true,
        autoplayTimeout:5000,
        items: 1
    })
</script>