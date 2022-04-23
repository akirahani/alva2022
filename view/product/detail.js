$(".slide").owlCarousel({
  	dots: true,
  	items:1,
	lazyLoad: true,
	navText:["<img src='public/image/left.svg'>", "<img src='public/image/right.svg'>"],
	nav: true
});
$(".phoi-canh").owlCarousel({
  	dots: true,
  	items:1,
	lazyLoad: true,
	autoHeight: true
});
$(".tin-tuc ul").owlCarousel({
	nav: true,
	lazyLoad: true,
	items: 3,
	dots: true,
	margin: 25,
	navText:["<img src='public/image/left.svg'>", "<img src='public/image/right.svg'>"]
});
$(".tong-quan .tab ul li").click(function(){
	$(".tong-quan .tab ul li").removeClass("active");
	$(this).addClass("active");
	let loai = $(this).attr("loai");
	let vanda = $(this).attr("vanda");
	$.ajax({
		method: "POST",
		data: {loai:loai, vanda:vanda},
		url:"view/product/tab.php",
		success:function(data)
		{
			$("article").html(data);
		}
	});
});
$("article .child ul li:first").addClass('active');
$(document).on("click", "article .child ul li", function(){
	$("article .child ul li").removeClass("active");
	$(this).addClass("active");
	let phoicanh = $(this).attr("phoicanh");
	let vanda = $(this).attr("da");
	$.ajax({
		method: "POST",
		data: {phoicanh:phoicanh, vanda:vanda},
		url:"view/product/phoi-canh.php",
		success:function(data)
		{
			$(".load .phoi-canh").html(data);
			$(".load .phoi-canh").trigger('destroy.owl.carousel');
			$(".load .phoi-canh").owlCarousel({
				nav : false,
		      	dots : true,
		      	items: 1
			});
			return false;
		}
	});
});
$('input[name="baogia"]').click(function(){
	let vanda = $(this).attr("vanda");
    let ten = $('input[name="tenbao"]').val();
    let dienthoai = $('input[name="dienthoaibao"]').val();
    let noidung = $('textarea[name="noidungbao"]').val();
    if(ten!='')
    {
        if(dienthoai!='')
        {
            if(noidung!='')
            {
                $(".loading-popup").css("display","flex");
                $.ajax({
                    method:"POST",
                    data:{ten:ten, dienthoai:dienthoai, noidung:noidung, vanda:vanda},
                    url:"view/product/sent-bao.php",
                    success:function(dulieu)
                    {
                        let info = JSON.parse(dulieu);
                        if(info.status == "success")
                        {
                            $(".mes-bao").html('<p class="success">Gửi thành công!</p>');
                        }
                        else
                        {
                            $(".mes-bao").html('<p class="fail">Chưa gửi được!</p>');
                        }
                        $('input[name="tenbao"]').val('');
                        $('input[name="dienthoaibao"]').val('');
                        $('textarea[name="noidungbao"]').val('');
                        $(".loading-popup").css("display","none");
                    }
                });
            }
            else
            {
                alert('Bạn chưa nhập lời nhắn');
            }
        }
        else
        {
            alert('Điện thoại không được để trống');
        }
        
    }
    else
    {
        alert('Tên không được để trống');
    }
});
$(".thong-tin .button div").click(function(){
	let loai = $(this).attr("class");
	let vanda = $(this).attr("vanda");
	let hinhanh = $(this).attr("hinhanh");
	let dienthoai = $(this).attr("dienthoai");
	$.ajax({
		method:"POST",
		data:{loai:loai, vanda:vanda, hinhanh:hinhanh, dienthoai:dienthoai},
		url: "view/product/"+loai+".php",
		success:function(data)
		{
			$(".form-dang-ky").css("display", "flex");
	        $(".form-dang-ky").html(data);
		}
	});
});