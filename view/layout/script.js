$('.lazy').Lazy();
$(".icon-menu").click(function(){
	$("nav").toggleClass("active");
});	
$(document).on("click", ".close-menu", function(){
	$("nav").removeClass("active");
});
if($(document).width()>1200)
{
	$("nav").sticky();
}
$(document).on("click", ".close-form img", function(){
    $(".form-dang-ky").css("display", "none");
});

