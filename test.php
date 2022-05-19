<script src="public/js/jquery.js"></script>
<ul style="list-style: none; display: flex;">
	<li style="width: 20px"><img danhgia="1" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="2" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="3" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="4" src="uploads/binhluan/star.png" style="width: 100%;"></li>
	<li style="width: 20px"><img danhgia="5" src="uploads/binhluan/star.png" style="width: 100%;"></li>
</ul>
<textarea class="text" style="margin-left"></textarea>
			$('img[danhgia="'+i+'"]').attr('src','uploads/binhluan/starc.png');
		}

<script type="text/javascript">
if(localStorage.star){
	let starcs = localStorage.star;
	for(i=1; i<=starcs; i++){
		$('ul li img[danhgia="'+i+'"]').attr('src','uploads/binhluan/starc.png');
	}
}
	$('ul li img').click(function(){
		let danhgia = $(this).attr('danhgia');
		localStorage.star = danhgia;
		let star = $('ul li img').attr('src','uploads/binhluan/star.png');
		for (i=1; i<=danhgia; i++){
	});
</script>
<?php 
	session_start();

?>
