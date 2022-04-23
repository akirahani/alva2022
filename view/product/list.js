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
$(".dac-tinh ul li").click(function(){
	var id = $(this).attr("id");
	var trang = $(this).attr("slug");
	$(".dac-tinh ul li").removeClass("active");
	$(this).addClass("active");
	$.ajax({
		method: "POST",
		data:{ thongso: id, slug: trang },
		url: "view/product/loc-thong-so.php",
		success:function(data)
		{
			$(".san-pham").html(data);
			$('.lazy').Lazy();
		}
	});
});

$(document).on("click", ".load-more", function(e){
	// Lịch sử
	var trang = parseInt($(this).attr("trang"));
	var tongtrang = parseInt($(this).attr("tongtrang"));
	var datrang = parseInt($(this).attr("datrang"));
	var thongso = $(this).attr("thongso");
	let tongda = parseInt($(this).attr("tongda"));
	trang = trang + 1;
	$(this).attr("trang", trang);
	$(".load-more .hide").css("display", "flex");
	$.ajax({
		method: "POST",
		data: {trang:trang, thongso:thongso},
		url: "view/product/loc-thong-so.php",
		success:function(data) {
			$(".san-pham ul").append(data);
			$('.lazy').Lazy();
			$(".load-more .hide").css("display", "none");
		}
	});
	if(tongtrang == trang)
	{
		$(this).hide();
	}
	else
	{
		var daconlai = tongda - parseInt((datrang * trang));
		$(".load-more b").html(daconlai);
	}
});

	// sap xep
$('.chon-sap-xep').click(function(){
	$('.sap-xep ul').toggle();
});

$('.sap-xep ul .moi-nhat').click(function(){
	var danhmuc = $(this).attr('danhmuc');
	var slug = $(this).attr("slug");
	$.ajax({
		method: "POST",
		data: {danhmuc:danhmuc, slug: slug},
		url: "view/product/sap-xep.php",
		success:function(data) {
			$(".san-pham").html(data);
			$('.lazy').Lazy();
		}
	});
});

$(document).on("click", ".load-more1", function(e){
	var trang = parseInt($(this).attr("trang"));
	var tongtrang = parseInt($(this).attr("tongtrang"));
	var datrang = parseInt($(this).attr("datrang"));
	var danhmuc = $(this).attr("danhmuc");
	let tongda = parseInt($(this).attr("tongda"));
	trang = trang + 1;
	$(this).attr("trang", trang);
	$(".load-more .hide").css("display", "flex");
	$.ajax({
		method: "POST",
		data: {trang:trang, danhmuc:danhmuc},
		url: "view/product/sap-xep.php",
		success:function(data) {
			$(".san-pham ul").append(data);
			$('.lazy').Lazy();
			$(".load-more1 .hide").css("display", "none");
		}
	});
	if(tongtrang == trang)
	{
		$(this).hide();
	}
	else
	{
		var daconlai = tongda - parseInt((datrang * trang));
		$(".load-more1 b").html(daconlai);
	}
});
