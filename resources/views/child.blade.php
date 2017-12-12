@extends('welcome')

@section('block')

@parent

<div id="menuBar">
	<div class="menuLineOne">
		<div class="oneItems">
  			<a href="#">ABOUT ME</a>
		</div>
		<div class="oneItems">
			<a href="#">JOURNEY</a>
		</div>
		<div class="oneItems">
			<a href="#">POST</a>
		</div>
	</div>
	<div class="menuLineTwo">
		<div class="twoItems">
  			<a href="#">CONTACT</a>
		</div>
		<div class="twoItems">
  			<a href="#">SKILLS</a>
		</div>
	</div>
	<div class="menuLineThree">
		<div class="threeItems">
  			<a href="#">FOCUS</a>
		</div>
	</div>
</div>

<!-- Use any element to open the sidenav -->
<span id="menuIcon"><img src="{{asset('img/oneLine.jpg')}}"/></span>

@endsection