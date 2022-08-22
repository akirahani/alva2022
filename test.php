<script src="public/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
<div id="sync1" class="owl-carousel">
  <div class="item" data-hash="zero"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/0.png" alt="Tranh đá cao cấp" /></div>
  <div class="item" data-hash="one"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/1.png" alt="Tranh đá cao cấp" /></div>
  <div class="item" data-hash="two"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/2.png" alt="Tranh đá cao cấp" /></div>
</div>
<div id="sync2" class="owl-carousel owl-theme">
  <div class="item" data-hash="zero"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/0.png" alt="Tranh đá cao cấp" /></div>
  <div class="item" data-hash="one"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/1.png" alt="Tranh đá cao cấp" /></div>
  <div class="item" data-hash="two"><img class="lazy" src="uploads/lazy/vuong.svg" data-src="view/tranh-da-cao-cap/image/2.png" alt="Tranh đá cao cấp" /></div>
</div>


<style>
	#sync1 .item{
	    padding: 80px 0px;
	    margin: 5px;
	    color: #FFF;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	    border-radius: 3px;
	    text-align: center;
	    img{
	    	width: 100%;
	    }
	}
	#sync2 .item{
	    padding: 10px 0px;
	    margin: 5px;
	    color: #FFF;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	    border-radius: 3px;
	    text-align: center;
	    cursor: pointer;
	}
	 
</style>

<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 3; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 200,
    nav: true,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: true,
    nav: true,
    loop:false,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});
$('.lazy').Lazy();
</script>