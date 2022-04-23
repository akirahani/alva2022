<?php require_once "route/route.php";?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<base href="<?=$__URL__?>" />
	<title><?=$tit?></title>
	<link rel="shortcut icon" href="public/image/favicon.svg" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css?v=<?=time()?>" />
	<link rel="canonical" href="<?=$link?>" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?=$des?>" />
	<meta name="keywords" content="<?=$key?>" />
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?=$tit?>" />
	<meta property="og:image" content="<?=$thumbs?>" />
	<meta property="og:image:secure_url" content="<?=$thumbs?>" />
	<meta property="og:description" content="<?=$des?>" />
	<meta property="og:url" content="<?=$link?>" />
	<meta property="og:site_name" content="<?=$tit?>" />
	<meta name="format-detection" content="telephone=no" />
	<script src="public/js/jquery.js"></script>
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '302302104796042');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=302302104796042&ev=PageView&noscript=1"/></noscript>
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-344515554"></script>
	<script>
	  	window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
	  	gtag('js', new Date());
	  	gtag('config', 'AW-344515554');

	  	function gtag_report_conversion(url) {
			var callback = function () {
			    if (typeof(url) != 'undefined') {
			      	window.location = url;
			    }
			};
			gtag('event', 'conversion', {
			    'send_to': 'AW-344515554/fqyLCJeK4ssCEOLHo6QB',
			    'value': 1.0,
			    'currency': 'VND',
			    'event_callback': callback
			});
		  	return false;
		}
	</script>
</head>
<body>
	<?php
		require_once "view/layout/header.php";
		require_once $path;
		require_once "view/layout/footer.php";
		require_once "view/layout/facebook.php";
	?>

	<script src="view/layout/script.js"></script>
</body>
</html>