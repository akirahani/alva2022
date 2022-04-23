<?php 
	require_once "../../admin/model/Query.php";
	$query = new Query();
	$data_da = $query->ChiTiet("da",[], ["id" => "="], ["id" => $_POST['vanda']]);
	if($_POST['phoicanh'] == "ngay")
	{
		echo $data_da->banngay;
	}
	if($_POST['phoicanh'] == "dem")
	{
		echo $data_da->bandem;
	}
	if($_POST['phoicanh'] == "san")
	{
		echo $data_da->latsan;
	}
	if($_POST['phoicanh'] == "thang")
	{
		echo $data_da->cauthang;
	}
?>