<?php 
	require 'admin/lib/phpmailer/autoload.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(true);
?>

<link rel="stylesheet" type="text/css" href="public/css/da-ngoc.css?v151021" />
<section class="dangoc-banner">
	
	<div class="dangoc">
		<ul class="owl-carousel owl-theme intro">
			<li>
				<h2 class="trai">Vàng thời có giá</h2>
				<h2 class="phai">Mà Ngọc thời vô giá</h2>
				<p>Từ thời xa xưa, Đá Ngọc Tự Nhiên đã được ưa chuộng ở phương Đông và phương Tây được xem như là viên đá của đế vương là bảo vật của hoàng gia. Nhưng mấy ai đã tìm hiểu kỹ về giá trị cũng như ý nghĩa của loại Đá Ngọc này khi trên thị trường tràn lan đá giả và nhân tạo.</p>
				<p>Nếu bạn đang có ý định mua hoặc sắp mua thì hãy cùng chúng tôi tìm hiểu về loại Đá Ngọc này.Từ đó tránh trường hợp tiền mất tật mang sử dụng sản phẩm kém chất lượng !</p>
				<img class="owl-lazy" data-src="public/image/da-ngoc/slide-1.jpg" alt="Đá xuyên sáng Alva" />
			</li>
			<li>
				<h2>Giá trị của <span>Đá ngọc tự nhiên</span></h2>
				<p>Đá Ngọc Tự Nhiên - đây là một trong những loại ngọc quý hiếm rất được tầng lớp vua chúa yêu thích và ưa chuộng. Đá Ngọc Tự Nhiên được coi là một bảo bối không chỉ có vẻ đẹp tinh tế mà còn biểu tượng cho sức khỏe, may mắn.</p>
				<p>Đá Ngọc Tự Nhiên là một loại đá có sức mê hoặc. Loại đá này có màu trắng, vàng nhạt hoặc đỏ lợt. Giá trị của Đá Ngọc Tự Nhiên được xác định tùy theo cường độ của màu sắc, tính rực rỡ và vân sọc cùng với độ sáng và tính trong suốt của đá từ đó xác định giá trị của một viên đá này.</p>
				<img class="owl-lazy" data-src="public/image/da-ngoc/slide-2.jpg" alt="Đá xuyên sáng Alva" />
			</li>
			<li>
				<h2 class="trai">Tác dụng <span>Trong phong thủy</span></h2>
				<p>Người xưa cho rằng, Đá Ngọc tốt cho Vận Khí, tốt cho Sức Khỏe, tốt cho Tiền tài... Đá Ngọc ở trong đất sâu thẳm, từ vài nghìn năm đến vài triệu năm, trong phân chất của Đá Ngọc chứa lấy vô vố khoáng chất vi lượng, hấp thu tinh hoa Nhật Nguyệt Tinh Thần nên gọi là Tinh Hoa.</p>
				<p>Đá Ngọc Tự Nhiên mang đến những mối quan hệ bền chặt, thúc đẩy và củng cố khả năng giao tiếp, ứng xử được linh hoạt. Giúp bảo vệ khỏi những tai ương, vận hạn, tránh được những điều không may mắn.</p>
				<img class="owl-lazy" data-src="public/image/da-ngoc/slide-3.jpg" alt="Đá xuyên sáng Alva" />
			</li>
		</ul>
	</div>
</section>

<section class="luachon">
	<h2>Lựa chọn tinh tế<br> Cho không gian nhà bạn</h2>
	<p>Hãy sống như một vị thần và say giấc như một vị vua</p>
	<p class="hidden">"Sang trọng, tinh tế, và đẳng cấp" là những gì bạn sẽ cảm nhận thấy khi sử dụng Đá Ngọc Tự Nhiên với không gian kiến trúc của bạn. Sự kết hợp độc đáo trong thiết kế đường vân đá từ tự nhiên đến đột phá. Sự chuyển hóa này thổi hồn vào không gian ngôi nhà bạn tạo nên sự đổi mới, sang trọng và không kém phần lôi cuốn</p>
	<ul class="owl-carousel owl-theme slide">
		<li>
			<img class="owl-lazy" data-src="public/image/da-ngoc/slide-4.jpg" alt="Đá xuyên sáng Alva" />
		</li>
		<li>
			<img class="owl-lazy" data-src="public/image/da-ngoc/slide-5.jpg" alt="Đá xuyên sáng Alva" />
		</li>
		<li>
			<img class="owl-lazy" data-src="public/image/da-ngoc/slide-6.jpg" alt="Đá xuyên sáng Alva" />
		</li>
		<li>
			<img class="owl-lazy" data-src="public/image/da-ngoc/slide-7.jpg" alt="Đá xuyên sáng Alva" />
		</li>
		<li>
			<img class="owl-lazy" data-src="public/image/da-ngoc/slide-8.jpg" alt="Đá xuyên sáng Alva" />
		</li>
	</ul>
</section>

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
	function DaNgoc()
	{
		let data = '';
		if( $(document).width()<1200 )
		{
			data += `
			<ul class="owl-carousel owl-theme intro">
				<li>
					<h2 class="trai">Vàng thời có giá</h2>
					<h2 class="phai">Mà Ngọc thời vô giá</h2>
					<p>Từ thời xa xưa, Đá Ngọc Tự Nhiên đã được ưa chuộng ở phương Đông và phương Tây được xem như là viên đá của đế vương là bảo vật của hoàng gia. Nhưng mấy ai đã tìm hiểu kỹ về giá trị cũng như ý nghĩa của loại Đá Ngọc này khi trên thị trường tràn lan đá giả và nhân tạo.</p>
					<p>Nếu bạn đang có ý định mua hoặc sắp mua thì hãy cùng chúng tôi tìm hiểu về loại Đá Ngọc này.Từ đó tránh trường hợp tiền mất tật mang sử dụng sản phẩm kém chất lượng !</p>
					<img class="owl-lazy" data-src="public/image/da-ngoc/slide-1.jpg" alt="Đá xuyên sáng Alva" />
				</li>
				<li>
					<h2>Giá trị của <span>Đá ngọc tự nhiên</span></h2>
					<p>Đá Ngọc Tự Nhiên - đây là một trong những loại ngọc quý hiếm rất được tầng lớp vua chúa yêu thích và ưa chuộng. Đá Ngọc Tự Nhiên được coi là một bảo bối không chỉ có vẻ đẹp tinh tế mà còn biểu tượng cho sức khỏe, may mắn.</p>
					<p>Đá Ngọc Tự Nhiên là một loại đá có sức mê hoặc. Loại đá này có màu trắng, vàng nhạt hoặc đỏ lợt. Giá trị của Đá Ngọc Tự Nhiên được xác định tùy theo cường độ của màu sắc, tính rực rỡ và vân sọc cùng với độ sáng và tính trong suốt của đá từ đó xác định giá trị của một viên đá này.</p>
					<img class="owl-lazy" data-src="public/image/da-ngoc/slide-2.jpg" alt="Đá xuyên sáng Alva" />
				</li>
				<li>
					<h2 class="trai">Tác dụng <span>Trong phong thủy</span></h2>
					<p>Người xưa cho rằng, Đá Ngọc tốt cho Vận Khí, tốt cho Sức Khỏe, tốt cho Tiền tài... Đá Ngọc ở trong đất sâu thẳm, từ vài nghìn năm đến vài triệu năm, trong phân chất của Đá Ngọc chứa lấy vô vố khoáng chất vi lượng, hấp thu tinh hoa Nhật Nguyệt Tinh Thần nên gọi là Tinh Hoa.</p>
					<p>Đá Ngọc Tự Nhiên mang đến những mối quan hệ bền chặt, thúc đẩy và củng cố khả năng giao tiếp, ứng xử được linh hoạt. Giúp bảo vệ khỏi những tai ương, vận hạn, tránh được những điều không may mắn.</p>
					<img class="owl-lazy" data-src="public/image/da-ngoc/slide-3.jpg" alt="Đá xuyên sáng Alva" />
				</li>
			</ul>
			`;
		}
		else
		{
			data+=`
			<ul>
				<li class="one">
					<h2>Vàng thời có giá <span>Mà Ngọc thời vô giá</span></h2>
					<p>Từ thời xa xưa, Đá Ngọc Tự Nhiên đã được ưa chuộng ở phương Đông và phương Tây được xem như là viên đá của đế vương là bảo vật của hoàng gia. Nhưng mấy ai đã tìm hiểu kỹ về giá trị cũng như ý nghĩa của loại Đá Ngọc này khi trên thị trường tràn lan đá giả và nhân tạo. Nếu bạn đang có ý định mua hoặc sắp mua thì hãy cùng chúng tôi tìm hiểu về loại Đá Ngọc này.Từ đó tránh trường hợp tiền mất tật mang sử dụng sản phẩm kém chất lượng!</p>
				</li>
				<li class="two">
					<div class="trai">
						<h2>Giá trị của <span>Đá ngọc tự nhiên</span></h2>
						<p>Đá Ngọc Tự Nhiên - đây là một trong những loại ngọc quý hiếm rất được tầng lớp vua chúa yêu thích và ưa chuộng. Đá Ngọc Tự Nhiên được coi là một bảo bối không chỉ có vẻ đẹp tinh tế mà còn biểu tượng cho sức khỏe, may mắn.</p>
						<p>Đá Ngọc Tự Nhiên là một loại đá có sức mê hoặc. Loại đá này có màu trắng, vàng nhạt hoặc đỏ lợt. Giá trị của Đá Ngọc Tự Nhiên được xác định tùy theo cường độ của màu sắc, tính rực rỡ và vân sọc cùng với độ sáng và tính trong suốt của đá từ đó xác định giá trị của một viên đá này.</p>
					</div>
					<div class="phai">
						<img src="public/image/da-ngoc/slide-1.jpg" alt="Đá xuyên sáng Alva" />
					</div>
				</li>
				<li class="three">
					<div class="trai">
						<img src="public/image/da-ngoc/slide-3.jpg" alt="Đá xuyên sáng Alva" />
					</div>
					<div class="phai">
						<h2 class="trai">Tác dụng <span>Trong phong thủy</span></h2>
						<p>Người xưa cho rằng, Đá Ngọc tốt cho Vận Khí, tốt cho Sức Khỏe, tốt cho Tiền tài... Đá Ngọc ở trong đất sâu thẳm, từ vài nghìn năm đến vài triệu năm, trong phân chất của Đá Ngọc chứa lấy vô vố khoáng chất vi lượng, hấp thu tinh hoa Nhật Nguyệt Tinh Thần nên gọi là Tinh Hoa.</p>
						<p>Đá Ngọc Tự Nhiên mang đến những mối quan hệ bền chặt, thúc đẩy và củng cố khả năng giao tiếp, ứng xử được linh hoạt. Giúp bảo vệ khỏi những tai ương, vận hạn, tránh được những điều không may mắn.</p>
					</div>
				</li>
			</ul>
			`;
		}
		return data;
	}
	$(document).ready(function(){
		$(".dangoc").html(DaNgoc);
		if($(document).width()<1200)
		{
			$(".dangoc-banner").prepend(`<img class="banner" src="public/image/da-ngoc/da-ngoc-top.png" alt="Đá xuyên sáng Alva" />`);
			$(".intro").owlCarousel({
				loop:true,
				nav: true,
				navText:["<img src='public/image/da-ngoc/left-yel.svg'>", "<img src='public/image/da-ngoc/right-yel.svg'>"],
				items:1,
				lazyLoad: true,
				dots:false,
				autoHeight: true
			});
		}
		else
		{
			$(".lienhe").prepend(`
				<h3 class="tren">Luôn làm hài lòng <span>khách hàng</span></h3>
				<h3 class="duoi">và đối tác của <span>khách hàng</span></h3>
			`);
		}
		$(".submit").click(function(){
			$(this).hide();
		});
	});
	
	$(".slide").owlCarousel({
		loop:true,
		nav: true,
		navText:["<img src='public/image/da-ngoc/left-hid.svg'>", "<img src='public/image/da-ngoc/right-hid.svg'>"],
		items:1,
		lazyLoad: true,
		dots: true,
		center: true
	});
</script>