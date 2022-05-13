<?php
	ob_start();
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	CONST __URL__ = "http://localhost/alva/admin/";
	// CONST __URL__ = "https://daxuyensang/admin/";
	CONST __NAME__ = "Alva";
	if(!isset($_SESSION['avid'])) header("location:login.php");
	if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ){
		$actual_link = "https"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$ROOT = "https"."://$_SERVER[HTTP_HOST]/";
	}
	else{
		$actual_link = "http"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$ROOT = "http"."://$_SERVER[HTTP_HOST]/";
	}
	$arr_link = explode("/", $actual_link);
	if($arr_link[2] == 'localhost' || $arr_link[2] == '192.168.1.8'){
		$__URL__ = $ROOT.$arr_link[3]."/admin/";
		isset($arr_link[5]) ? $p = $arr_link[5] : $p = '';
		isset($arr_link[6]) ? $one = $arr_link[6] : $one = '';
	}
	else{
		$__URL__ = $ROOT.$arr_link[3]."/";
		isset($arr_link[4]) ? $p = $arr_link[4] : $p = '';
		isset($arr_link[5]) ? $one = $arr_link[5] : $one = '';
	}
	$string_page = explode("?", $p);
	if(count($string_page) != 1){
		$p = $string_page[0];
	}
	$__ID__ = isset($_SESSION['avid']) ? $_SESSION['avid'] : '';
	$__NHOM__ = isset($_SESSION['avnhom']) ? $_SESSION['avnhom'] : '';
	$__FULLNAME__ = isset($_SESSION['avfullname']) ? $_SESSION['avfullname'] : '';
	require_once "model/Query.php";
	require_once "model/Lib.php";
	require_once "controller/phanquyen.php";
	$query = new Query();
	$lib = new Lib();
	$quyen = new PhanQuyen();
	if($p == ''){
		$folder = "home";
		require_once 'controller/'.$folder.'.php';
		$path = 'view/'.$folder.'/list.php';
	}
	else{
		$folder = 'view/'.$p;
		$quyen->xem($p,$__NHOM__,$query);
		if (file_exists($folder)){
			if($one == ''){
				require_once "controller/".$p.".php";
				$path = 'view/'.$p.'/list.php';
				$quyen->xem($p,$__NHOM__,$query);
			}
			else{
				require_once "controller/".$p.".php";
				$url_full = 'view/'.$p.'/'.$one;
				$str_process = explode("?", $url_full);
				if (count($str_process) != 1){
					$url_full = $str_process[0];
				}
				$path = $url_full.'.php';
				$quyen->tsx($one,$p,$__NHOM__,$query);
			}
		}
		else{
			$quyen->xem($p,$__NHOM__,$query);
			$str_process = explode("?", $p);
			if(count($str_process) != 1){
				$folder = $str_process[0];
			}
			require_once 'controller/'.$p.'.php';
			$path = 'view/'.$p.'/list.php';
		}
	}
?>