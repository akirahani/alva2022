<?php 
	require 'admin/lib/phpmailer/autoload.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(true);
?>

<link rel="stylesheet" type="text/css" href="public/css/da-viet.css?v151021" />
<section class="daviet-top"></section>

<section class="daviet-slide"></section>

<section class="lienhe">
	<form method="post" class="form-contact">
		<h2>Liên hệ với Alva</h2>
		<h3>Để có được sự lựa chọn<br> phù hợp nhất cho công trình của bạn</h3>
		<input type="text" required name="ten" placeholder="Họ tên" spellcheck="false" autocomplete="off" class="name-contact" />
		<input type="text" required name="dienthoai" placeholder="Điện thoại" spellcheck="false" autocomplete="off" class="dienthoai-contact" />
		<input type="submit" name="lienheda" value="Gửi liên hệ" class="submit" />
	</form>
</section>

<section class="hotline">
	<p>
		<img src="public/image/da-ngoc/hotline.svg" alt="Đá xuyên sáng Alva" alt="Call now!" onclick="return gtag_report_conversion('tel:0766-698-883')" />
		<span alt="Call now!" onclick="return gtag_report_conversion('tel:0766-698-883')"><?=$data_company->dienthoai?></span>
	</p>
</section>

<div class="tong-dai">
	<div class="hotline-wrap">
		<div class="hotline-one"></div>
		<div class="hotline-three">
			<svg class="phone-icon" viewBox="0 0 512 512" alt="Call now!" onclick="return gtag_report_conversion('tel:0766-698-883')">
				<path d="M439.44,411.595l-77.319-77.318c-9.299-9.298-24.374-9.298-33.672,0l-32.036,32.036c-62.811-35.428-115.3-87.917-150.728-150.728l34.21-34.21c9.299-9.298,9.299-24.374,0-33.672l-77.319-77.316c-9.299-9.298-24.374-9.298-33.672,0l-49.374,49.374l0.191,0.191C2.241,134.231-4.924,158.937,3.575,183.288C56.242,334.211,177.788,455.756,328.71,508.423c23.26,8.117,46.773,1.962,61.305-13.832l0.05,0.05l49.374-49.374C448.739,435.969,448.739,420.894,439.44,411.595z"/>
				<path d="M260.948,135.95c-9.271,0-16.787,7.516-16.787,16.787c0,9.271,7.515,16.787,16.787,16.787c44.954,0,81.528,36.573,81.528,81.527c0,9.271,7.516,16.787,16.787,16.787s16.787-7.516,16.787-16.787C376.05,187.585,324.415,135.95,260.948,135.95z"/>
				<path d="M260.948,67.591c-9.271,0-16.787,7.516-16.787,16.787c0,9.271,7.515,16.787,16.787,16.787c82.648,0,149.887,67.239,149.887,149.885c0,9.271,7.516,16.787,16.787,16.787c9.271,0,16.787-7.516,16.787-16.787C444.409,149.89,362.109,67.591,260.948,67.591z"/>
				<path d="M438.467,73.531C391.049,26.114,328.005,0,260.948,0c-9.271,0-16.787,7.516-16.787,16.787c0,9.271,7.516,16.787,16.787,16.787c119.916,0,217.477,97.559,217.477,217.477c0,9.271,7.516,16.787,16.787,16.787c9.271,0,16.787-7.516,16.787-16.787C511.999,183.992,485.885,120.948,438.467,73.531z"/>
			</svg>
		</div>
	</div>
</div>

<?php
	require_once "admin/lib/user-agent/BrowserDetect.php";
	$obj_ua = new BrowserDetection();
	$obj_info = $obj_ua->detect()->getInfo();

	// Check file and create is not
	$file_check = 'report/visit/'.date("d-m-Y").'.txt';
	if (file_exists($file_check)) {}
	else 
	{
	    $myfile = fopen("report/visit/".date("d-m-Y").".txt", "w");
	}
	//Save info User Agent
	$fp = fopen('report/visit/'.date("d-m-Y").'.txt', 'a');
	fwrite( $fp, date("d/m/Y H:i:s")." | ".$obj_info['ip_address']." | ".$obj_info['platform']." | ".$obj_info['browser_name']." | ".$obj_info['browser_version']." | ".$obj_info['browser_ua_string']." | ".date('H:i:s')." || \n" );
	fclose($fp);

	// Liên hệ
    if(isset($_POST['lienheda']))
    {
    	$_SESSION['thoigian'] = time();
        $data = array(
            'ten' => $_POST['ten'],
		    'dienthoai' => $_POST['dienthoai'],
		    'email' => '',
		    'gio' => time(),
		    'ghichu' => $note,
		    'trang' => $trang
        );
		// Sent mail
	    try {
	        $lib->ConfigEmail($mail);
	        //Recipients
	        $mail->setFrom('sentmail.alva@gmail.com', 'Alva Stone Marble '.date("d/y/Y H:i:s"));
		    $mail->addAddress('congtyalva@gmail.com', 'Mr.Ngãi');
		    $mail->addAddress('vanphonggiang@gmail.com', 'Mr.Giang CESMEDIA');
		    $mail->addAddress('phuongthaoalva@gmail.com', 'Phương Thảo');

	        //Content
	        $mail->Subject = 'Đơn hàng '.$_POST['dienthoai']." | ".date("d/y/Y H:i:s");
	        $mail->Body    = 'Khách hàng: '.$_POST['ten'].'<br>Điện thoại: '.$_POST['dienthoai'].'<br>Thời gian đặt: '.date("d-m-Y H:i:s");

	        // Encode 
	        $mail->CharSet = "UTF-8";
	        $mail->isHTML(true);

	        $mail->send();
	    } 
	    catch (Exception $e) 
	    {
	        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    }
	    // Sent mail
		header("location:dat-hang-thanh-cong");
    }
?>

<script>
	function DaVietTop()
	{
		let data = '';
		if($(document).width()<1200)
		{
			data +=`
			<h1>Đá tự nhiên xuyên sáng</h1>
			<h2 class="hoitu">Hội tụ tinh hoa</h2>
			<h2 class="thonhuong">Thổ nhưỡng Việt</h2>
			<img class="three-slide" src="public/image/da-viet/slide.png" alt="Đá xuyên sáng Alva" />
			<h2 class="hinhthanh">Hành trình từ đá</h2>
			<h3><span>Trải qua 1 quá trình</span></h3>
			<h4 class="top">Biến đổi từ các hoạt động núi lửa</h4>
			<p>Chính điều này tạo nên một trong những nguồn tài nguyên đá thạch anh vô cùng đa dạng, Đá Marble – thạch anh tự nhiên xuyên sáng còn được biết đến như một loại chất liệu có độ bền thách thức thời gian</p>
			<img class="hoan-hao" src="public/image/da-viet/hoan-hao.png" alt="Đá xuyên sáng Alva" />
			<h3 class="tinhte">Tạo nên sự tinh tế</h3>
			<h4 class="bot">Cho không gian kiến trúc Việt Nam</h4>
			`;
		}
		else
		{
			data +=`
			<h1>Đá xuyên sáng<br> tự nhiên</h1>
			<h2 class="hoitu">Hội tụ tinh hoa Thổ nhưỡng Việt</h2>
			<div class="picture">
				<img class="three-slide" src="public/image/da-viet/slide.png" alt="Đá xuyên sáng Alva" />
			</div>
			<div class="frame">
				<div class="trai">
					<h2 class="hinhthanh">Hành trình từ đá</h2>
					<h3><span>Trải qua một quá trình</span></h3>
					<h4 class="top">Biến đổi từ các hoạt động núi lửa</h4>
				</div>
				<div class="phai">
					<p>Chính điều này tạo nên một trong những nguồn tài nguyên đá thạch anh vô cùng đa dạng, Đá Marble – thạch anh tự nhiên xuyên sáng còn được biết đến như một loại chất liệu có độ bền thách thức thời gian</p>
				</div>
			</div>
			<img class="hoan-hao" src="public/image/da-viet/hoan-hao.png" alt="Đá xuyên sáng Alva" />
			<h3 class="tinhte">Tạo nên sự tinh tế Cho không gian kiến trúc Việt Nam</h3>
			`;
		}
		return data;
	}
	function DaVietSlide()
	{
		let data = '';
		if($(document).width()<1200)
		{
			data += `
			<ul class="owl-carousel owl-theme intro">
				<li>
					<div class="tit">
						<h2 class="tren"><span>Sự lựa chọn hoàn hảo</span></h2>
						<h2 class="duoi"><span>Cho không gian nhà bạn</span></h2>
					</div>
					<p>Được sử dụng rất nhiều trong kiến trúc nội, ngoại thất. Cho các vị trí cần sự sang trọng, tinh tế hoặc tạo điểm nhấn cho toàn không gian kiến trúc:  Tranh đá, cầu thang, ốp lát nền, mặt tiền nhà...và các ứng dụng khác</p>
					<img class="owl-lazy" data-src="public/image/da-ngoc/slide-1.jpg" alt="Đá xuyên sáng Alva" />
				</li>
				<li>
					<div class="tit">
						<h2 class="tren"><span>Sự lựa chọn hoàn hảo</span></h2>
						<h2 class="duoi"><span>Cho không gian nhà bạn</span></h2>
					</div>
					<p>Khi được kết hợp với các đồ nội thất, đá giống như hòa vào cùng một thể, lúc này các đường vân ngẫu nhiên không có quy luật của nó càng trở nên cuốn hút đến lạ kỳ. Căn phòng cũng trở nên sáng sủa, rộng rãi và sạch sẽ hơn rất nhiều</p>
					<img class="owl-lazy" data-src="public/image/da-ngoc/slide-2.jpg" alt="Đá xuyên sáng Alva" />
				</li>
				<li>
					<div class="tit">
						<h2 class="tren"><span>Tinh hoa thổ nhưỡng Việt</span></h2>
						<h2 class="duoi"><span>Gần gũi với thiên nhiên</span></h2>
					</div>
					<p>Được khai thác từ mỏ đá tại Yên Bái – Việt Nam, có hoa văn đa dạng, màu sắc tự nhiên cực bắt mắt</p>
					<p>Các vân đá được hình thành một cách ngẫu nhiên, nên không tồn tại hai viên giống nhau. Dưới ánh sáng mặt trời, ánh sáng đèn các đường vân trở nên sắc nét và có chiều sâu hơn. Tạo ra những bức tranh với mảng màu sắc độc đáo đầy tính trừu tượng</p>
					<img class="owl-lazy" data-src="public/image/da-ngoc/slide-3.jpg" alt="Đá xuyên sáng Alva" />
				</li>
			</ul>
			`;
		}
		else
		{
			data += `
			<ul>
				<li>
					<div class="phai small">
						<img src="public/image/da-viet/one-pic.png" alt="Đá xuyên sáng Alva" />
					</div>
					<div class="trai">
						<div class="tit">
							<h2 class="tren"><span>Sự lựa chọn hoàn hảo</span></h2>
							<h2 class="duoi"><span>Cho không gian nhà bạn</span></h2>
						</div>
						<p>Được sử dụng rất nhiều trong kiến trúc nội, ngoại thất. Cho các vị trí cần sự sang trọng, tinh tế hoặc tạo điểm nhấn cho toàn không gian kiến trúc:  Tranh đá, cầu thang, ốp lát nền, mặt tiền nhà...và các ứng dụng khác</p>
						<p>Khi được kết hợp với các đồ nội thất, đá giống như hòa vào cùng một thể, lúc này các đường vân ngẫu nhiên không có quy luật của nó càng trở nên cuốn hút đến lạ kỳ. Căn phòng cũng trở nên sáng sủa, rộng rãi và sạch sẽ hơn rất nhiều</p>
					</div>
				</li>
				<li>
					<div class="trai">
						<div class="tit">
							<h2 class="duoi"><span>Hội tụ</span></h2>
							<h2 class="tren"><span>Tinh hoa thổ nhưỡng Việt</span></h2>
							<h2 class="duoi"><span>Gần gũi với thiên nhiên</span></h2>
						</div>
						<p>Được khai thác từ mỏ đá tại Yên Bái – Việt Nam, có hoa văn đa dạng, màu sắc tự nhiên cực bắt mắt</p>
						<p>Các vân đá được hình thành một cách ngẫu nhiên, nên không tồn tại hai viên giống nhau. Dưới ánh sáng mặt trời, ánh sáng đèn các đường vân trở nên sắc nét và có chiều sâu hơn. Tạo ra những bức tranh với mảng màu sắc độc đáo đầy tính trừu tượng</p>
					</div>
					<div class="phai owl-carousel owl-theme three-slide">
						<img class="owl-lazy" data-src="public/image/da-viet/three-pic-1.png" alt="Đá xuyên sáng Alva" />
						<img class="owl-lazy" data-src="public/image/da-viet/three-pic-2.png" alt="Đá xuyên sáng Alva" />
						<img class="owl-lazy" data-src="public/image/da-viet/three-pic-3.png" alt="Đá xuyên sáng Alva" />
					</div>
				</li>
			</ul>
			`;
		}
		return data;
	}
	$(".daviet-top").html(DaVietTop);
	$(document).ready(function(){
		$(".daviet-slide").html(DaVietSlide);
		$(".intro").owlCarousel({
			loop:true,
			nav: true,
			navText:["<img src='public/image/da-ngoc/left-yel.svg'>", "<img src='public/image/da-ngoc/right-yel.svg'>"],
			items:1,
			lazyLoad: true,
			dots:false,
			autoHeight: true
		});
		$(".three-slide").owlCarousel({
			loop:true,
			nav: false,
			items:1,
			lazyLoad: true,
			dots:true
		});
		$(".submit").click(function(){
			$(this).hide();
		});
	});
</script>