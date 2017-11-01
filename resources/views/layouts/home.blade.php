<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
    <title>@section('title')  @show</title>
    
	<!--บริการ VPS ราคาถูก windows linux คุณภาพดี ราคาประทับใจ บริการ 24 ชม. โคโลเกมออนไลน์ โคโลมายคราฟ colo online game minecraft cs:go ark steam 24hrs. thailand Colocation VPS Dedicated คุณภาเยี่ยม Firewall หนา กันยิง 40GBPS Hosting VPS-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="https://scontent-sin1-1.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1510965_1035407153136327_1552235413657728200_n.jpg?oh=9687e5678709cb1c996843de26898cfb&oe=570FA417">
    <meta property="og:url" content="http://pzvps.com">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="{{ asset('pz/img/icon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pz/css/style.css') }}">
</head>
<body>
	
	  @yield('content')

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- Footer Logo -->
					<span class="fa fa-server" style="font-size: 50px;"></span><br><br>
					<span class="footer-inc">
						Copyright © 2015<br>PzVPS ™ Inc.<br><br>Services 24Hrs.
					</span>
				</div>
				<div class="col-md-3">
					<span class="footer-title">Menu of Website</span><br>
					<a href="index.html" class="footer-content">Home - หน้าแรก</a><br>
					<a href="vps.html" class="footer-content">Vps Thai - เช่าวีพีเอสไทย</a><br>
					<a href="vps4b.html" class="footer-content">VPS4B - เช่าวีพีเอสสำหรับธุรกิจ</a><br>
					<a href="dedicated.html" class="footer-content">Dedicated - เช่าเครื่องเซิฟเวอร์</a><br>
					<a href="payment.html" class="footer-content">Payment - ช่องทางการชำระเงิน</a><br>
					<a href="contact.html" class="footer-content">Contact - ติดต่อเรา</a><br>
					<a href="login.html" class="footer-content">Login & Register</a><br>
				</div>
				<div class="col-md-3">
					<span class="footer-title">Contact </span><br>
					<a href="http://www.facebook.com/PzHackerOfficial" class="footer-content"><span class="footer-icon fa fa-facebook-square"></span>PzHacker.com</a><br>
					<a href="http://youtube.com/PzhackerOfficial" class="footer-content"><span class="footer-icon fa fa-youtube-play"></span>PzHackerOfficial</a><br>
					<a href="" class="footer-content"><span class="footer-icon fa fa-skype"></span>PzHacker</a><br>
					<a href="" class="footer-content"><span class="footer-icon fa fa-mobile"></span>0809970007</a><br>
					<a href="http://www.PzHacker.com" class="footer-content"><span class="footer-icon fa fa-globe"></span>PzHacker.com</a><br>
					<a href="http://www.PzVPS.com" class="footer-content"><span class="footer-icon fa fa-globe"></span>PzVPS.com</a><br>
				</div>
				<div class="col-md-3">
					<span class="footer-title">FACEBOOK</span><br>
					<div class="fb-page" data-href="https://www.facebook.com/PzHackerOfficial?fref=ts" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PzHackerOfficial?fref=ts"><a href="https://www.facebook.com/PzHackerOfficial?fref=ts">PzHacker.com</a></blockquote></div></div>
				</div>
			</div><br><br>
			<center>
				<span class="footer-text">PzVPS Powered by PzHacker.</span>
			</center>
		</div>
	</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>