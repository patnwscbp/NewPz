@extends('layouts.sys')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		@if (Auth::user()->verify==0)
		<img src="{{ asset('img/logopz.png') }}" class="img-responsive" alt="">
		<h2 class=" title content">ยังไม่ได้ยืนยันข้อมูล</h2>
			<p class="subtitle2 content">โปรดยันข้อมูลก่อนใช้บริการ</p>
		<p class=" olo content">**** ถ้าจะใช้Dedicatedยืนยัน ถ้าไม่ยื่นยันก็ไม่ต้องใช้ olo</p>		
			<a class="btn btn-block btn-danger">ยืนยันข้อมูล</a>
		@else
		<img src="{{ asset('img/logopz.png') }}" class="img-responsive" alt="">
		<h2 class=" suss content">ยืนยันข้อมูลเรียบร้อย</h2>
		@endif
	</div>
</div>
				
@endsection
