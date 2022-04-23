<?php 
	require_once "../../admin/model/Query.php";
	$query = new Query();
	$id_vanda = $_POST['vanda'];
	$data_da = $query->ChiTiet("da",[],["id"=>"="],["id"=>$id_vanda]);
	$data_company = $query->ChiTiet("company",[],["id"=>"="],["id"=>1]);
	if($_POST['loai']=="phoicanh")
	{
	?>
	<div class="child">
		<ul>
			<?php
			$phoicanh = '';
			if($data_da->banngay!=NULL || $data_da->banngay!='')
			{
				echo '<li phoicanh="ngay" da="'.$data_da->id.'"><span>Tranh đá ban ngày</span></li>';
				$phoicanh .= $data_da->banngay;
			}
			if($data_da->bandem!=NULL || $data_da->bandem!='')
			{
				echo '<li phoicanh="dem" da="'.$data_da->id.'"><span>Tranh đá ban đêm</span></li>';
				$phoicanh .= $data_da->bandem;
			}
			if($data_da->latsan!=NULL || $data_da->latsan!='')
			{
				echo '<li phoicanh="san" da="'.$data_da->id.'"><span>Lát sàn</span></li>';
				$phoicanh .= $data_da->latsan;
			}
			if($data_da->cauthang!=NULL || $data_da->cauthang!='')
			{
				echo '<li phoicanh="thang" da="'.$data_da->id.'"><span>Cầu thang</span></li>';
				$phoicanh .= $data_da->cauthang;
			}
			?>
		</ul>
	</div>
	<div class="load">
		<div class="phoi-canh owl-carousel owl-theme">
			<?=$phoicanh ?>
		</div>
		<script>
			$("article .child ul li:first").addClass('active');
		</script>
	</div>
	<script>
		$(".phoi-canh").owlCarousel({
		  	dots: true,
		  	items:1,
			lazyLoad: true,
			autoHeight: true
		});
	</script>
	<?php
	}
	if($_POST['loai']=="thicong"){
		if($data_da->thucte!=NULL || $data_da->thucte!='')
		{
		?>
		<div class="thuc-te">
			<?=$data_da->thucte?>
		</div>
		<script>
			$(".slide-thuc-te").owlCarousel({
				nav: false,
				dots: false,
				margin: 5,
				loop:true,
				responsive:{
					0:{
						items:2
					},
					1200:{
						items:3
					}
				}
			});
		</script>
		<?php
		}
	}
	if($_POST['loai']=="baiviet"){
		echo '<div class="noi-dung">';
		echo $data_da->noidung;
		echo '</div>';
	}
	if($_POST['loai']=="muahang"){
		echo '<div class="noi-dung">';
			echo $data_company->muahang;
			echo '<iframe src="'.$data_company->map.'" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
		echo '</div>';
	}
?>