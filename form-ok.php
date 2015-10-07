<?php 
session_start();
//************************** SEND DATA to CRM **************************
$data = array(
        'order_id' => ''.date('dmy0Gis').'', //(авто)код заказа
	'site' => $_SERVER['SERVER_NAME'], //(авто)сайт отправитель заказа
        'product_id' => 20, //код товара
	//'product' => $_POST['pokupka_product_name'], //название товара
	'price' => 1190.00, //цена товара
	'count' => 1, //количество товара
	'total' => 1190.00, //сумма цены товара
	'bayer_name' => $_GET['name'], // покупатель
	'phone' => $_GET['phone'], // телефон
	'email' => $_POST['email'], //электронка
	'comment' => $_GET['time'], // комментарий
	'ip' => $_SERVER['REMOTE_ADDR'], //(авто)IP-адрес клиента	
'utm_source' => $_SESSION['utms']['utm_source'],	
'utm_medium' => $_SESSION['utms']['utm_medium'],	
'utm_term' => $_SESSION['utms']['utm_term'],	
'utm_content' => $_SESSION['utms']['utm_content'],	
'utm_campaign' => $_SESSION['utms']['utm_campaign']	
);
$send = urlencode(serialize($data));
echo '<img width="1" src="http://nauma77.lp-crm.biz/api/?data='.$send.'">';
?>

<!DOCTYPE html>
<html>
<head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29513965 = new Ya.Metrika({id:29513965,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29513965" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65229936-1', 'auto');
  ga('send', 'pageview');

</script>
	<title>Поздравляем! Ваш заказ принят!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cssform/style.css">
	<link rel="stylesheet" href="cssform/reset.css">
	<link rel="stylesheet" href="cssform/fonts.css">
	<style type="text/css">
		html, body {
			height: 100%;
		}
		.all-thank {
			background: url('images/header-bg.png');
			background-size: cover;
			height: 100%;
			text-align: center;
		}
		.all-thank h2 {
		    font-size: 40px;
		    text-align: center;
		    color: #fff;
		    padding-top: 100px;
		    margin-bottom: 30px;
		}
		.all-thank p {
		    text-align: center;
		    width: 630px;
		    margin: 0 auto;
		    font-size: 20px;
		    color: #fff;
		}
		.all-thank a.return {
			line-height: 50px;
    		padding: 0 30px;
    		margin-top: 50px; 
		}
	</style>
</head>
<body>
	<div class="all-thank">
		<h2>ПОЗДРАВЛЯЕМ! ВАШ ЗАКАЗ ПРИНЯТ!</h2>
		<p>В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p>
		<a class="return" href="/" onclick="javascript:history.back();">Перейти на сайт</a>
	</div>
</body>
</html>