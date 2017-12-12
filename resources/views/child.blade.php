@extends('welcome')

@section('block')

@parent

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<!-- Use any element to open the sidenav -->
<span id="menuIcon"><img src="{{asset('img/menuIcon.png')}}"/></span>

<div id="main">
</div>
@endsection