<div class="center">
	<div class="close-form"><img src="public/image/close.svg" alt="Close" /></div>
	<div class="thong-tin">
		<img src="uploads/van-da/<?=$_POST['hinhanh']?>"/>
		<h2><?=$_POST['vanda']?></h2>
		<p>Điện thoại: <span><?=$_POST['dienthoai']?></span></p>
	</div>
	<form method="post">
		<h2>Hẹn lịch đến kho đá</h2>
		<input type="text" name="tenreg" placeholder="Tên của bạn *" spellcheck="false" autocomplete="off"/>
		<input type="text" name="dienthoaireg" placeholder="Điện thoại *" spellcheck="false" autocomplete="off"/>
		<input type="text" name="diachireg" placeholder="Địa chỉ của bạn" spellcheck="false" autocomplete="off"/>
		<p><input type="radio" name="vitri" checked value="Tổng kho: Anh Dũng, Dương Kinh, Hải Phòng" style="height:25px; width:25px; vertical-align: middle;"> Tổng kho: Anh Dũng, Dương Kinh, Hải Phòng</p>
		<p><input type="radio" name="vitri" value="Địa chỉ: Khương Trung, Thanh Xuân, Hà Nội" style="height:25px; width:25px; vertical-align: middle;"> Địa chỉ: Khương Trung, Thanh Xuân, Hà Nội</p>
		<input type="button" name="senthen" value="Đặt lịch ngay" vanda="<?=$_POST['vanda']?>" />
	</form>
</div>
<script>
	$('input[name="senthen"]').click(function(){
		let ten = $('input[name="tenreg"]').val();
		let dienthoai = $('input[name="dienthoaireg"]').val();
		let diachi = $('input[name="diachireg"]').val();
		let khoda = $("input[type='radio'][name='vitri']:checked").val();
		let vanda = $(this).attr("vanda");
		if(ten!='')
		{
			if(dienthoai!='')
			{
				$(".loading-popup").css("display", "flex");
				$.ajax({
			        method: "POST",
			        data: {ten:ten, dienthoai:dienthoai, vanda:vanda, diachi:diachi, khoda:khoda},
			        url: "view/product/hen-lich-mes.php",
			        success:function(data)
			        {
			        	let info = JSON.parse(data);
			        	if(info.status == 'success')
			        	{
			        		$(".form-dang-ky").css("display", "none");
			        		$(".loading-popup").html(`<p style="font-size:30px;text-transform: uppercase; color:green;">Đăng ký thành công</span>`);
			        		setTimeout(function(){$(".loading-popup").css("display","none")}, 3000);
			        	}
			        	else
			        	{
			        		$(".form-dang-ky").css("display", "none");
			        	}
			        }
			    });
			}
			else
			{
				alert ('Bạn chưa nhập điện thoại');
			}
		}
		else
		{
			alert ('Bạn chưa nhập tên');
		}
	});
</script>