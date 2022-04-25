<?php 
	require_once('../../model/Query.php');	
	$query = new Query();
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		foreach ($id as $key => $val) {
			$update = $query->CapNhat("da",['chietkhau','baokhach','niemyet','soluong'],['id'],['soluong'=>$_POST['soluong'][$key],'chietkhau'=>$_POST['chietkhau'][$key],'baokhach'=>$_POST['baokhach'][$key],'niemyet'=>$_POST['niemyet'][$key],'id'=>$val]);
		}
		header('location:../../da');
	}
	else{
		echo 'no';
	}
?>