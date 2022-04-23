<div class="center">
	<div class="close-form"><img src="public/image/close.svg" alt="Close" /></div>
	<div class="thong-tin">
		<img src="uploads/van-da/<?=$_POST['hinhanh']?>"/>
		<h2><?=$_POST['vanda']?></h2>
		<p>Điện thoại: <span><?=$_POST['dienthoai']?></span></p>
	</div>
	<form method="post">
		<h2>Đăng ký mua</h2>
		<input type="text" name="tenreg" placeholder="Tên của bạn *" spellcheck="false" autocomplete="off"/>
		<input type="text" name="dienthoaireg" placeholder="Điện thoại *" spellcheck="false" autocomplete="off"/>
		<input type="text" name="diachired" placeholder="Địa chỉ" spellcheck="false" autocomplete="off"/>
		<textarea name="noidungreg" placeholder="Ghi chú" spellcheck="false" autocomplete="off"></textarea>
		<input type="button" name="sentreg" value="Đăng ký" vanda="<?=$_POST['vanda']?>" />
	</form>
</div>
<script>
	$('input[name="sentreg"]').click(function(){
		let ten = $('input[name="tenreg"]').val();
		let dienthoai = $('input[name="dienthoaireg"]').val();
		let diachi = $('input[name="diachired"]').val();
		let noidung = $('textarea[name="noidungreg"]').val();
		let vanda = $(this).attr("vanda");
		if(ten!='')
		{
			if(dienthoai!='')
			{
				$(".loading-popup").css("display", "flex");
				$.ajax({
			        method: "POST",
			        data: {ten:ten, dienthoai:dienthoai, diachi:diachi, vanda:vanda, noidung:noidung},
			        url: "view/product/dang-ky-mes.php",
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