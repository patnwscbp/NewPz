@extends('layouts.home')

{{-- Web site Title --}}
@section('title') "PzVPS" VPS ราคาถูก คุณภาพเยี่ยม บริการประทับใจตลอด 24 ชม. by PzHacker  @parent @endsection
@section('content')
<div class="pz-hero">			
		<div class="menubar">
			<div class="container">
				<div class="pull-right menu none">
					<a href="index.html">Home</a>
					<a href="vps.html">VPS</a>
					<a href="vps4b.html">VPS4B</a>
					<a href="dedicated.html">Dedicated</a>
					<a href="payment.html">Payment</a>
					<a href="contact.html">Contact</a>
					<a class="menu-extra" href="login"> Login / Register</a>
				</div>
				<div class="pull-right display-none">
					<select name="forma" class="form-control" onchange="location = this.options[this.selectedIndex].value;">
					 <option value="index.html">Home - หน้าแรก
					 <option value="vps.html">VPS - เช่า VPS
					 <option value="vps4b.html">VPS4B - เช่า VPS สำหรับธุรกิจ
					 <option value="dedicated.html">Dedicated - เช่าเซิฟเวอร์
					 <option value="payment.html">Payment - ช่องทางการชำระเงิน
					 <option value="contact.html">Contact - ติดต่อเรา
					 <option value="login">Login / Register
					</select>
				</div>
				<div class="logo">
					<img src="{{ asset('pz/img\logo-pzvps-small.png') }}" alt="PzVPS's Logo">
				</div>
			</div>
		</div>

		<div class="container">
			<center><h1>PzVPS : บริการ VPS</h1></center>
			<center><span>บริการ VPS ราคาถูก คุณภาพเยี่ยม </span></center>
			<br>
			<center>
				<a href="login" class="login">Login</a>
				<a href="contact.html" class="register">Chat with us</a>
			</center>

		</div>
	</div>

	<center><br><h1 class="title">Our Service | บริการของเรา</h1></center><br>

	<div class="container">
		<div class="row">
			<div class="col-md-4 center">
				<img class="img" src="{{asset('pz') }}/img\i2.png"><br>
				<span class="title">คุณภาพ</span><br>
				<span class="sub-title">ทาง PzVPS ได้ทำการคัดสรรเครื่องเซิฟเวอร์คุณภาพสูงอย่าง Dell และ Cisco ในการบริการ และใช้ระบบจัดการ VMWare Esxi เพื่อให้ลูกค้าได้ใช้ทรัพยากรอย่างเต็มที่ และเครื่องเซิฟเวอร์ที่เราใช้เป็น CPU Xeon ที่มีประสิทธิภาพในการทำงานสูงกว่า CPU ทั่วๆไป รวมถึงคุณภาพในการทำงานที่เสถียรกว่า CPU รุ่นอื่นๆ อย่างแน่นอน และสุดท้ายท่านสามารถมั่นใจได้ว่า เมื่อท่านใช้บริการกับทาง PzVPS จะได้ประสิทธิภาพในการทำงานอย่างเต็มที่แน่นอน</span>
			</div>
			<div class="col-md-4 center">
				<img class="img" src="{{asset('pz') }}/img\i1.png"><br>
				<span class="title">ความรวดเร็ว</span><br>
				<span class="sub-title">เราการันตีในเครื่องเซิฟเวอร์ทุกๆ เครื่องของเรา ที่มีระบบที่เร็ว แรง ทันสมัยและอัพเดทมากกว่าที่อื่น และยังมีอินเตอร์ความเร็วสูงที่เหมาะกับการเปิดเซิฟเวอร์เกมออนไลน์ต่างๆได้อีกเช่นกัน และไม่ใช่แค่เครื่องเซิฟเวอร์ที่รวดเร็วทันใจเท่านั้น การบริการของทาง PzVPS ยังรวดเร็วทันใจท่านอย่างแน่นอน ด้วยทีมงานที่มีประสิทธิภาพและมีประสบการณ์ในการทำงาน ทำให้ท่านได้รับความสะดวกสบาย รวดเร็วทันใจแน่นอน</span>
			</div>
			<div class="col-md-4 center">
				<img class="img" src="{{asset('pz') }}/img\i3.png"><br>
				<span class="title">การบริการ</span><br>
				<span class="sub-title">ทาง PzVPS เน้นเรื่องการดูแลลูกค้าหรือการซับพอร์ตเป็นหัวใจสำคัญ เราจึงบริการลูกค้าตลอดเวลา เพื่อให้ท่านลูกค้าสามารถมั่นใจว่า ท่านจะได้รับความสะดวกสบายตลอดการใช้งาน VPS และบริการของทางเราตลอด 24 ชม. โดยทางเราได้คัดสรรทีมงานระดับมืออาชีพที่มีประสบการณ์ในการทำงานด้านนี้ มาช่วยเหลือและค่อยตอบคำถามตลอดเวลา เพื่อให้ท่านลูกค้าได้รับผลประโยชน์ในการใช้งานอย่างมากที่สุด</span>
			</div>
		</div>
	</div><br>


	<center><br><h1 class="title">Customer Reviews | ความคิดเห็นจากผู้ใช้งาน</h1></center><br><br>

	<div class="container">
		<div class="rows">
			<div class="col-md-3">
				<div class="review-panel">
					
					<center><span class="sub-title"><b>Puckawut PrimKung Pinwaha</b></span></center><br>

					<center><img class="image" src="{{asset('pz') }}/img\cus1.jpg"></center><br>
					<span class="sub-title">ถ้าไม่แจ่มจริง ผมไม่ไว้ใจหรอก ขอบคุณทุกการดูแลครับ  :D<br><br><br><br><br></span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="review-panel">
					<center><span class="sub-title"><b>มณัสวี เนตรกระจ่าง</b></span></center><br>

					<center><img class="image" src="{{asset('pz') }}/img\cus2.jpg"></center><br>
					<span class="sub-title">บริการสุดยอดครับ เป็นกันเองจริงๆ 555555 คุยกันครั้งแรกเหมือนรู้จักกันมาก่อน ติดใจตรงนั้นล่ะครับ และก็ VPS เขาแรงจริงๆ มีระบบอะไรที่ผมชอบมากครับ สุดยอด</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="review-panel">
					<center><span class="sub-title"><b>Pond Kiatisak</b></span></center><br>

					<center><img class="image" src="{{asset('pz') }}/img\cus3.jpg"></center><br>
					<span class="sub-title">ขอบคุณบริการดีดีที่ให้ผมได้ทดลองฝีมือและทำธุรกิจ<br><br><br><br><br></span></div>
			</div>
			<div class="col-md-3">
				<div class="review-panel">
					<center><span class="sub-title"><b>Tanawat Aditadsuntorn</b></span></center><br>

					<center><img class="image" src="{{asset('pz') }}/img\cus4.jpg"></center><br>
					<span class="sub-title">สุดยอดครับ แถมแรมให้ผมด้วย :D ประทับใจมากครับ ที่นี่ซับพอร์ตเร็วมาก ถามไปไม่ถึง 20 วิ ตอบกลับมาแล้ว<br><br><br></span>
				</div>
			</div>

			<a href="https://www.facebook.com/PzHackerOfficial/reviews/" class="buying">ดู Reviews เพิ่มเติม คลิ๊ก !!</a>
		</div>
	</div>

	<br><br>

	<div class="gray-panel">
		<div class="container">
			<div class="row">
			<div class="col-md-5">
					<img style="width:100%;" class="none" src="{{asset('pz') }}/img\logo.png">
				</div>
				<div class="col-md-7">
					<br><h1 class="why-title">Why Choose us ? | ทำไมต้องเลือกเรา ?</h1><br>
					<div class="why-content">
						ทำไม ? ต้องเลือก PzVPS ในการทำงานต่างๆ ?<br>
							PzVPS บริการเครื่องเซิฟเวอร์ ในการใช้งานในลักษณะต่างๆ ทั้งการเปิดเว็บ การเปิดเซิฟเกมออนไลน์ ไม่ว่าจะเป็น Minecraft, ARK, CS:GO,Arma III ก็สามารถเปิดได้หมด หรือจะเป็นการรัน Bitcoins Forex และบอทหุ้นต่างๆ ก็สะดวกสบายในการใช้งาน ด้วยทีมงานที่เป็นมืออาชีพของทาง PzVPS ทำให้ลูกค้าทุกท่านสามารถมั่นใจได้ว่าจะได้งานได้อย่างเต็มประสิทธิภาพ คุ้มสมราคาที่ลูกค้าได้ไว้ใจในการใช้บริการของเรา ซับพอร์ตของทาง PzVPS บริการตลอด 24 ชม. เพราะฉะนั้นจึงสามารถมั่นใจได้ว่า ลูกค้าจะได้รับการบริการที่สะดวกสบายตลอดการใช้บริการกับทางเรา<br><br>
						<a href="contact.html" class="buy">ติดต่อสอบถามเพิ่มคลิ๊ก</a><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="black-panel">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<br><div class="why-title-b">VPS - วีพีเอสไทย</div>
					<div class="price">ราคาเริ่มต้นที่ 500 บาท/ เดือน</div>
					<div class="why-content-b">
						<span class="fa fa-check-circle green"></span> Max CPU Xeon 8 Core<br>
						<span class="fa fa-check-circle green"></span> Max Ram 96 GB (ไม่แชร์)<br>
						<span class="fa fa-check-circle green"></span> Max HDD 1 TB<br>
						<span class="fa fa-check-circle green"></span> Unlimited Bandwidth<br>
						<span class="fa fa-check-circle green"></span> Hardware Dell & Cisco<br>
						<span class="fa fa-check-circle green"></span> 24/7 Support<br><br>
						
						<a href="vps.html" class="buy">
						<span class="fa fa-shopping-cart"></span>
						ดูรายละเอียดเพิ่มเติม</a>

						<br><br>

					</div>
				</div>
				<div class="col-md-4">
					<br><div class="why-title-b">VPS4B - วีพีเอสสธุรกิจ</div>
					<div class="price">ราคาเริ่มต้นที่ 1,200 บาท/ เดือน</div>
					<div class="why-content-b">
						<span class="fa fa-check-circle green"></span> Max CPU Xeon 8 Core<br>
						<span class="fa fa-check-circle green"></span> Max Ram 64 GB (ไม่แชร์)<br>
						<span class="fa fa-check-circle green"></span> <strong>Free Hardware Firewall</strong><br>
						<span class="fa fa-check-circle green"></span> Unlimited Bandwidth<br>
						<span class="fa fa-check-circle green"></span> Hardware Dell & Cisco<br>
						<span class="fa fa-check-circle green"></span> 24/7 Support<br><br>


						<a href="vps4b.html" class="buy">
						<span class="fa fa-shopping-cart"></span>
						ดูรายละเอียดเพิ่มเติม</a>

						<br><br>


					</div>
				</div>
				<div class="col-md-4">
					<br><div class="why-title-b">Dedicated - เครื่องเซิฟเวอร์</div>
					<div class="price">ราคาเริ่มต้นที่ 3,500 บาท/ เดือน</div>
					<div class="why-content-b">
						<span class="fa fa-check-circle green"></span> CPU Intel i7,Xeon E3-5<br>
						<span class="fa fa-check-circle green"></span> Max Ram 64GB<br>
						<span class="fa fa-check-circle green"></span> <strong>Free Hardware Firewall</strong><br>
						<span class="fa fa-check-circle green"></span> Unlimited Bandwidth<br>
						<span class="fa fa-check-circle green"></span> Hardware Dell & Cisco<br>
						<span class="fa fa-check-circle green"></span> 24/7 Support<br><br>


						<a href="dedicated.html" class="buy">
						<span class="fa fa-shopping-cart"></span>
						ดูรายละเอียดเพิ่มเติม	</a>

						<br><br>


					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
			<div class="row">
				<div class="col-md-7">
                    <h1 class="why-title">อ่านข้อตกลงการเช่า PzVPS</h1><br>
					<div class="why-content">
						<a href="term.html" class="buy">
						<span class="fa fa-check-square-o"></span>
						Click Here</a>
					</div>
				
					<h1 class="why-title">ช่องทางการชำระเงิน</h1><br>
					<div class="why-content">
						<a href="payment.html" class="buy">
						<span class="fa fa-shopping-cart"></span>
						Click Here</a>
					</div>
				</div>
				<div class="col-md-5"><br><h1 class="why-title">Facebook Page</h1><br>
					<div class="fb-page" data-href="https://www.facebook.com/PzHackerOfficial" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PzHackerOfficial"><a href="https://www.facebook.com/PzHackerOfficial">PzHacker.com</a></blockquote></div></div>
				</div>
			</div>
		</div>

	<br>
@endsection