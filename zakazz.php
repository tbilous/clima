/*	<?php
		$path = "./clickfrogru_tcp.php";
		include_once($path);
	?>*/
<?php 
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));

if($_GET['product_id']){
    $product_id = $_GET['product_id'];
}else{
    $product_id = $_POST['product_id'];
}
if(empty($name) || empty($phone)){
echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
$subject = 'Заказ на Hybrid'; // заголовок письмя
$addressat = "zakaz@hybrid-ceramic.in.ua"; // Ваш Электронный адрес
$success_url = './form-ok.php?name='.$_POST['name'].'&phone='.$_POST['phone'].'&time='.$_POST['Время_звонка'].'';
$message = "Имя: {$name}\nТелефон: {$phone}\nТовар: {$product_id}";
$verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");
if ($verify == 'true'){
    header('Location: '.$success_url);
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    exit;
}
else 
    {
    echo '<h1 style="color:red;">Произошла ошибка!</h1>';
    }
}
?>

<div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='35adbd07b4bcb578e9e64b176ca8d31f';</script>
<!-- bodyclick.net, Analyzer - START -->
<script language="Javascript">
var ref = escape(document.referrer);
var server = 'banalyze.net';
document.write('<scr'+'ipt type="text/jav'+'ascript" src="http://'+server+'/analyze.php?ref='+ref+'"></scr'+'ipt>');
</script>
<!-- bodyclick.net, END --> 
<!-- ActionTeaser.ru, Analyzer - START -->
<script language="Javascript">
var ref = escape(document.referrer);
var server = 'an.actionteaser.ru';
document.write('<scr'+'ipt type="text/jav'+'ascript" src="http://'+server+'/analyze.php?ref='+ref+'"></scr'+'ipt>');
</script>
<!-- ActionTeaser.ru, END -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter26450643 = new Ya.Metrika({id:26450643,
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
<noscript><div><img src="//mc.yandex.ru/watch/26450643" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google Code for &#1047;&#1072;&#1082;&#1072;&#1079; &#1086;&#1090;&#1086;&#1087;&#1083;&#1077;&#1085;&#1080;&#1103; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 968572424;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "ila6CN_kq18QiPzszQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/968572424/?label=ila6CN_kq18QiPzszQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script src='http://scan.botscanner.com/'></script><br/>
<noscript><img src='http://scan.botscanner.com/noscript' /></noscript>
