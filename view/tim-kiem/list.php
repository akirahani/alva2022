
<link rel="stylesheet" type="text/css" href="public/css/product.css?v=071221" />

<section class="danh-muc">
	<ul>
		<?php  ?>
		<li class="active"><a href="">Tranh đá</a></li>
		<li><a href="">Đá ốp lát</a></li>
		<li><a href="">Trụ đá</a></li>
		<li><a href="">Lavabo</a></li>
	</ul>
</section>

<section class="thong-tin">
	<div class="so-luong"><br><p>Tìm kiếm vân đá <?=$tukhoa?></p></div>
</section>

<section class="san-pham">
	<ul>
		<?php 
		foreach ($data_vanda as $key => $value) 
		{
			$get_vanda = $value;
			$id_danhmuc = $get_vanda->danhmuc;
			#Slug danh mục
			$str_danhmuc = $process_danhmuc[$id_danhmuc];
		?>

		<li>
			<a href="<?=$arr_danhmuc->$str_danhmuc[2]."/".$get_vanda->slug?>"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="uploads/van-da/<?=$value->vuong?>" alt="Đá Ngọc Tự Nhiên Xuyên Sáng AT22" style=""></a>
			<h2 class="title"><a href="<?=$arr_danhmuc->$str_danhmuc[2]."/".$get_vanda->slug?>"><?=$value->ten?></a></h2>
			<?=$value->gioithieu?>
		</li>
		<?php } ?>

	</ul>
</section>

<script>
	$(".banner .slide").owlCarousel({
		nav: false,
		lazyLoad: true,
		dots: false,
		loop: true,
		responsive:{
			0:{
				items: 1
			},
			1200:{
				items: 3,
				margin: 7
			}
		}
	});
</script>