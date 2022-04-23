
<link rel="stylesheet" type="text/css" href="public/css/product.css?v=071221" />
<?php if(!empty($banner_danhmuc)) { ?>
<section class="banner">
	<div class="slide owl-carousel">
		<?php 
		foreach ($banner_danhmuc as $key => $value) { if($value->danhmuc == $id_danhmuc) { ?>
		<a href="<?=$value->link?>"><img class="owl-lazy" src="uploads/lazy/banner-danh-muc.svg" data-src="uploads/banner-danh-muc/<?=$value->hinh?>" alt="<?=$value->ten?>"/></a>
		<?php }} ?>

	</div>
</section><?php } ?>


<section class="danh-muc">
	<ul>
		<?php foreach ($arr_danhmuc as $key => $value) {
			if($value[2] == $p)
			{ echo '<li class="active"><a href="'.$key.'">'.$value[1].'</a></li>'; }
			else{ echo '<li><a href="'.$key.'">'.$value[1].'</a></li>'; } } ?>
	</ul>
</section>

<section class="thong-tin">
	<div class="so-luong"><p><?=$number_vanda?> mẫu đá</p></div>
	<div class="dac-tinh">
		<?php if(!empty($data_thongso)) { ?>

		<ul>	
			<?php 
			foreach ($data_thongso as $key => $value) 
			{ 
				echo '<li id="'.$value->id.'" slug="'.$ps.'">'.$value->ten.'</li>';
			} 
			?>
		</ul>
		<?php } ?>

	</div>
	<div class="sap-xep">
		<p class="chon-sap-xep">Sắp xếp</p>
		<ul>
			<li class="moi-nhat" danhmuc="<?=$id_danhmuc?>" slug="<?=$ps?>">Mới nhất</li>
			<!-- <li>Bán chạy</li> -->
		</ul>
	</div>
</section>

<section class="san-pham">
	<ul>
		<?php 
		foreach ($data_vanda as $key => $value) 
		{
			if( $key >= $start_page && $key < $end_page)
			{
			?>

			<li>
				<a href="<?=$ps."/".$value->slug?>"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="uploads/van-da/<?=$value->vuong?>" alt="<?=$value->ten?>" /></a>
				<h2 class="title"><a href="<?=$ps."/".$value->slug?>"><?=$value->ten?></a></h2>
				
				<?=$value->gioithieu?>
				<?php if(isset($_SESSION['fullname'])) echo'<p style="color:red">Số lượng: '.$value->soluong.' tấm = '.$value->ngang * $value->doc.' m2 </p>';?>
		
			</li>
			<?php 
			} 
		}
		?>

	</ul>
	<?php 
		if($total_row > $num_of_page)
		{
	        echo '<ul class="page">';
				echo $lib->PhanTrang($ps.'?', $total_page, $page);
			echo '</ul>';
		}
	?>
</section>
<script src="view/product/list.js"></script>	