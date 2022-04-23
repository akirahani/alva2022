<?php
	require_once "model/LyDoHuyDon.php";
	require_once "model/Landing.php";
	require_once "model/TenMien.php";
	require_once "model/DonHang.php";
	$lydohuy = new LyDoHuyDon();
	$landing = new Landing();
	$tenmien = new TenMien();
	$donhang = new DonHang();

	// Tên miền
	$data_tenmien = $tenmien->DanhSach();

	// Đơn hàng danh sách
	$data_lydohuy = $lydohuy->DanhSach();
	$arr_lydohuy = [];
	foreach ($data_lydohuy as $key => $value) {
		$arr_lydohuy[$value->id] = $value->ten;
	}

	// Xử lý landing
	$data_landing = new Landing();
	$data_landing = $landing->DanhSach();
	$arr_landing = [];
	$arr_landing_slug = [];
	foreach ($data_landing as $key => $value) {
		$arr_landing[$value->id] = $value->ten;
		$arr_landing_slug[$value->link] = $value->id;
	}

	//Khi nào chốt đơn
	//Đơn hàng chỉ cốt khi đơn hàng có người gọi và trạng thái đơn hàng là 2 - đơn hàng đang gọi
	//chuyển trạng thái sang 3 - chuẩn bị giao hàng
	//chuyển trạng thái sang 4 - đơn hàng hủy -> và nêu lý do hủy đơn hàng
	//chuyển trạng thái sang 5 - đơn hàng giao thành công
	$don_moi = $donhang->DemDonHang(1);
	$don_goi = $donhang->DemDonHang(2);
	$don_chuanbi = $donhang->DemDonHang(3);
	$don_huy = $donhang->DemDonHang(4);
	$don_giao = $donhang->DemDonHang(5);

	// Xử lý đơn hàng
	$data_donhang_list = $donhang->DanhSach(0);
	$arr_donhang = [];
	$arr_donhang_page = [];
	foreach ($data_donhang_list as $key => $value) 
	{
		// Đơn hàng lý do hủy
		if(array_key_exists(@$arr_donhang[$value->lydohuy], $arr_donhang))
		{
			@$arr_donhang[@$value->lydohuy] += 1;
		}
		else
		{
			$arr_donhang[$value->lydohuy] = 1;
		}
		// Đơn hàng trang
		if(array_key_exists($value->trang, $arr_landing_slug))
		{
			@$arr_donhang_page[$value->trang] += 1;
		}
		else
		{
			$arr_donhang_page[$value->trang] = 1;
		}
	}
?>
<!-- Chart -->
<script src="lib/chart/Chart.min.js"></script>
<script src="lib/chart/utils.js"></script>

<!-- Datepicker -->
<link rel="stylesheet" type="text/css" href="lib/datepicker/jquery-ui.min.css" />
<script src="lib/datepicker/jquery-ui.min.js"></script>
<script src="lib/datepicker/jquery.ui.datepicker-vi-VN.js"></script>

<div class="row">
	<div class="nhom left">
		<h2 style="text-align: center;">Đơn hàng</h2>
		<canvas id="chart-area"></canvas>
		
		<?php
		// echo '<h2 style="text-align: center;margin-top: 50px;">Đơn hàng hủy</h2>';
		// foreach ($arr_donhang as $key => $value) 
		// {
		// 	if($key !=0)
		// 	{
		// 		echo '<p style="text-align:center">'.$value.' đơn hàng: '.$arr_lydohuy[$key].'</p>';
		// 	}
		// }
		?>
	</div>

	<div class="nhom right">
		<h2 style="text-align: center;">Đơn hàng hủy</h2>
		<canvas id="donhuyChart"></canvas>
	</div>
	<div class="clear"></div><br><br><br><br>

	<div class="nhom left">
		<h2 style="text-align: center;margin-top: 50px;">Đơn hàng landing</h2>
		<?php
		foreach ($data_landing as $key => $value) 
		{
			echo '<p style="text-align:center">'.@$arr_donhang_page[$value->link].' Đơn hàng: '.$value->ten.'</p>';
		}
		?>
	</div>

	<div class="nhom right">
		<h2 style="text-align: center;margin-top: 50px;">Tên miền</h2>
		<?php
		foreach ($data_tenmien as $key => $value) 
		{
			// Tính hiệu số ngày
			$current_date = strtotime(date("Y-m-d"));
			$second_date = strtotime($value->ngayhet);
			$datediff = abs($current_date - $second_date);
			$day_exp = floor($datediff / (60*60*24));
			echo '<p style="text-align:center">Còn <b style="color:red;">'.$day_exp.'</b> ngày sẽ hết hạn tên miền: '.$value->ten.' - <b style="color:red;">'.$value->dns.'</b></p>';
		}
		?>
	</div>
	<div class="clear"></div><br><br><br><br>

	<div class="nhom left">
		<h2 style="text-align: center;">Chọn ngày <input type="text" class="chon-ngay" style="width: 100px; outline: none; height: 25px; padding: 0 10px;"></h2>
		<div class="ket-qua"></div>
	</div>

	<div class="clear"></div>
</div>

<script>
	// Biểu đồ đơn hàng
	var config = {
		type: 'pie',
		data: {
			datasets: [{
				data: [
					<?=$don_moi?>,
					<?=$don_goi?>,
					<?=$don_chuanbi?>,
					<?=$don_huy?>,
					<?=$don_giao?>,
				],
				backgroundColor: [
					window.chartColors.green,
					window.chartColors.orange,
					window.chartColors.yellow,
					window.chartColors.red,
					window.chartColors.blue,
				],
				label: 'Đơn hàng'
			}],
			labels: [
				'Đơn mới',
				'Đơn đang gọi',
				'Đơn chuẩn bị',
				'Đơn hủy',
				'Đơn đã giao'
			]
		},
		options: {
			responsive: true
		}
	};
	window.onload = function() {
		var ctx = document.getElementById('chart-area').getContext('2d');
		window.myPie = new Chart(ctx, config);
	};

	// Biểu đồ đơn hàng hủy
	$(function() {
	    var data_huydon = {
	        labels: [
	        	<?php
	        	foreach ($arr_donhang as $key => $value) {
	        		if($key!=0)
	        		{
	        			echo '"'.$arr_lydohuy[$key].'",';
	        		}
	        	}
	        	?>
	        ],
	        datasets: [{
	            label: 'Đơn hàng',
	            data: [
	            	<?php
		        	foreach ($arr_donhang as $key => $value) {
		        		if($key!=0)
		        		{
		        			echo $value.",";
		        		}
		        	}
		        	?>
	            ],
	            backgroundColor: 'rgba(255, 159, 64, 1)',
	            borderWidth: 0,
	            fill: false
	        }]
	    };
	    var options_huydon = {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                }
	            }]
	        },
	        legend: {
	            display: false
	        },
	        elements: {
	            point: {
	                radius: 0
	            }
	        }

	    };
	    if ($("#donhuyChart").length) {
	        var huydonChartCanvas = $("#donhuyChart").get(0).getContext("2d");
	        var barChart = new Chart(huydonChartCanvas, {
	            type: 'bar',
	            data: data_huydon,
	            options: options_huydon
	        });
	    }
	});

	// Datepicker
	$( ".chon-ngay" ).datepicker({
	    changeMonth: true,
	    changeYear: true,
	    showOtherMonths: true,
	    selectOtherMonths: true,
	    dateFormat: 'dd-mm-yy',
	    regional: 'vi-VN',
	    yearRange: "1960:2030"
	});

	// Thay đổi ngày
	$(".chon-ngay").change(function(){
		let ngay = $(this).val();
		$.ajax({
			method: "POST",
			data: {ngay:ngay},
			url: "view/thong-ke/ajax_truy_cap.php",
			success:function(dulieu)
			{
				$(".ket-qua").html(dulieu);
			}
		});
	});
</script>