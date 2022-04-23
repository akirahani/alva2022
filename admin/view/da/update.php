<link rel="stylesheet" type="text/css" href="public/css/style.css?v=230422">
<div class="blog">
	<div class="bread">
		<h1>Đá tự nhiên <span>| Cập nhật giá nhiều sản phẩm</span></h1>
		<div class="clear"></div>
	</div>
	<div class="form">
		<p>Tên đá</p>
		<input class="input-text text-product" type="text">
	</div>
	<div class="load-product">
	</div>
	<button class="get-product"><a>Lấy thông tin sản phẩm</a></button>
</div>
<script>
	$('.get-product').click(function(){
		var info = $('.text-product').val();
		var processing = info.split(' '); 
		$.ajax({
			type: "POST",
			data:{
				sanpham:processing
			},
			url: 'view/da/process-update.php',
			success:function(data){
				$('.load-product').html(data);
			}
		});
	});

</script>