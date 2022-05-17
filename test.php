<script src="public/js/jquery.js"></script>
<ul style="list-style: none; display: flex;">
	<li style="width: 20px"><img danhgia="1" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="2" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="3" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="4" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="5" src="uploads/binhluan/star.png" style="width: 100%;"></li>
</ul>
<script type="text/javascript">
	$('ul li img').click(function(){
		let danhgia = $(this).attr('danhgia');
		for (i=1; i<danhgia; i++){
			var star = $('img').attr('danhgia'+i,'src','uploads/binhluan/starcheck.webp');
		}
		console.log(star);
	});
</script>
