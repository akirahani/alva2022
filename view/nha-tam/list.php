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
            <div class="active"></div>
            <p>Phòng tắm không chỉ phục vụ cho nhu cầu sinh hoạt thường ngày. Nó còn ảnh hưởng đến đời sống tinh thần, phản ánh gu thẩm mỹ của người sở hữu.</p>
        </article>
        <div class="bg-second">
            <div class="text-noibat">
                <h1>Sử dụng đá tự nhiên ốp lát tạo nên vẻ đẹp sang trọng</h1>
                <span class="noibat"></span>
            </div> 
            <ul class="img-list owl-carousel owl-theme">
                <li><img src="view/nha-tam/upload/nha-tam1.1.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.2.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.3.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.4.png" alt="Lavabo đá tự nhiên"></li>
                <li><img src="view/nha-tam/upload/nha-tam1.5.png" alt="Lavabo đá tự nhiên"></li>
            </ul>
        </div>
    </section>
    
    <section class="description1">
        <article class="content-second">
            <p>
                Đá tự nhiên ốp lát nhà tắm tạo nên vẻ đẹp sang trọng với những đường nét hoa văn độc đáo, màu sắc đa dạng sang trọng, độ bền cao, khả năng chống vết bẩn và hao mòn.   
            </p>
        </article>
        <div class="text-noibat2">
            <span class="noibat2"></span>
            <h1>được nhiều gia chủ lựa chọn đưa vào không gian sống</h1>
        </div> 
        <picture  class="img-2">
          <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/bg-third.png">
          <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/bg-second-desktop.png">
          <img src="view/nha-tam/upload/bg-second-desktop.png" alt="nha-tam">
        </picture>
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
            <article>
                <p>
                    Đá tự nhiên còn là sự lựa chọn đặc biệt thích hợp về phong thủy.
                    <br><br>
                    Sử dụng loại đá này trong nhà sẽ khiến cho người sở hữu tịnh tâm, bình tĩnh, giảm thiểu tối đa những cảm xúc đau buồn, giận dữ và những suy nghĩ tiêu cực.
                </p>
            </article>
        </div>
    </section>

    <section class="social">
        <h1>Alva Stone</h1>
        <article>
            <p>Đưa tới sự khác biệt, khẳng định là đơn vị tư vấn, cung cấp và thi công lắp đặt các sản phẩm về đá tự nhiên cao cấp, ứng dụng công nghệ hiện đại và triết lý vượt qua thử thách để dẫn đầu.
            Alva Stone quyết tâm trở thành thương hiệu uy tín tại Việt Nam.</p> 
        </article>
        <div class="service">
            <div class="detail-service">
                <div class="icon">
                    <picture  class="pen">
                      <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/icon1.png">
                      <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/icon1-desktop.png">
                      <img src="view/nha-tam/upload/icon1-desktop.png" alt="nha-tam">
                    </picture>
                </div>
                <p>
                    Miễn phí 
                    <br>
                    Tư vấn, thiết kế
                </p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <picture  class="person">
                      <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/icon2.png">
                      <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/icon2-desktop.png">
                      <img src="view/nha-tam/upload/icon2-desktop" alt="nha-tam">
                    </picture>
                </div>
                 <p>
                    Lắp đặt
                    <br>
                    hoàn thiện 2 ngày
                </p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <picture  class="da">
                      <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/icon3.png">
                      <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/icon3-desktop.png">
                      <img src="view/nha-tam/upload/icon3-desktop.png" alt="nha-tam">
                    </picture>
                </div>
                <p>
                    Bảo hành Đá
                    <br>
                    01 năm
                </p>
            </div>
            <div class="detail-service">
                <div class="icon">
                    <picture  class="led">
                      <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/icon4.png">
                      <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/icon4-desktop.png">
                      <img src="view/nha-tam/upload/icon4-desktop.png" alt="nha-tam">
                    </picture>
                </div>
                <p>
                    Bảo hành đèn led
                    <br>
                    Samsung 05 năm
                </p>
            </div>
        </div>
        <ul class="company-info">
            <li>
                <picture class="da">
                    <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/place.svg">
                    <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/place-desktop.png">
                    <img src="view/nha-tam/upload/place-desktop.png" alt="Showroom" />
                </picture>
                <p>Showroom: Số 2 Mạc Đăng Doanh, Dương Kinh, Hải Phòng</p>
            </li>
            <li>
                <picture class="da">
                    <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/tel.svg">
                    <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/tel-desktop.png">
                    <img src="view/nha-tam/upload/tel-desktop.png" alt="tel" />
                </picture>
                <p>Hotline: 1900 669 996</p></li>
            <li>
                <picture class="da">
                    <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/fb.svg">
                    <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/fb-desktop.png">
                    <img src="view/nha-tam/upload/fb-desktop.png" alt="Fanpage" />
                </picture>
                <p>Fanpage: Đá Tự Nhiên Alva Stone</p></li>
            <li>
                <picture  class="da">
                    <source class="mobile" media="(max-width:1199px)" srcset="view/nha-tam/upload/mail.svg">
                    <source class="desktop" media="(min-width:1200px)" srcset="view/nha-tam/upload/mail-desktop.png">
                    <img src="view/nha-tam/upload/mail-desktop.png" alt="Email" />
                </picture>
                <p>Email: Alvastone@gmail.com</p>
            </li>
        </ul>
    </section>

    <section class="contact">
        <div class="form-all">
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
                    <button type="button" name="submit" trang="<?=$p?>">Gửi liên hệ</button>
                </form>            
            </div>
        </div>
    </section>
</main>
<script type="text/javascript">
    $('.img-list').owlCarousel({
        loop:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false,
                margin:-80,
            },
            1200:{
                items:5,
                nav:true,
                loop:true,
                margin:10,  
            }
        }
    })

    $('.img-list-2').owlCarousel({
        loop:true,
        autoplay: true,
        autoplayTimeout:5000,
        nav: true, 
        dots: true,
        responsive:{
            0:{
                items:1,
                margin: -40,
            },
            1200:{
                items:5,
            }
        }
    })
    $('button[name="submit"]').click(function(){
        var name= $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var phone = $('input[name="phone"]').val();
        var note = $('textarea').val();
        var trang = $(this).attr('trang');
        if(name != ''){
            if(email != ''){
                if(phone != ''){
                    $(".loading-popup").css("display", "flex");
                    $.ajax({
                        type : "POST",
                        url: "view/nha-tam/lien-he.php",
                        data: {
                            name: name,
                            email: email,
                            phone: phone,
                            note: note,
                            trang: trang
                        },
                        success:function(data){
                            var info = JSON.parse(data);
                            if(info.status == 'success'){
                                $(".loading-popup").hide();
                                Swal.fire(
                                    'THÀNH CÔNG!',
                                    'Cảm ơn bạn, Alvastone sẽ liên hệ với bạn sớm nhất!',
                                    'success'
                                );
                            }
                            else{
                                $(".loading-popup").hide();
                                Swal.fire(
                                    "",
                                    "Có lỗi trong quá trình nhận tư vấn!",
                                    "error"
                                );
                            }
                        }
                    });
                }
                else{
                    Swal.fire(
                        "",
                        "Bạn chưa nhập số điện thoại !",
                        "error"
                    );
                }
            }
            else{
                Swal.fire(
                    "",
                    "Bạn chưa nhập email !",
                    "error"
                );
            }
        }
        else{
            Swal.fire(
                "",
                "Bạn chưa nhập tên !",
                "error"
            );
        }
    });
</script>