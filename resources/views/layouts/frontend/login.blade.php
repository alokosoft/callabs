@extends('layouts.mainlayout')

@section('content')

<link href="{{('css/frontend-css/login.css')}}" rel="stylesheet">

<div class="pd-wrap" style="margin-top: 500px;">

	<div class="container" style="background-color: #fffbfa; width:80%">


<div class="login">
	<div class="image"><img src="https://images.unsplash.com/photo-1625321643039-ed4aa7f9ceeb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMjgxMjM5OQ&ixlib=rb-1.2.1&q=85" alt=""></div>
	<div class="details">
		<h1 class="title">Log in</h1>
		<div class="input"><label for="">Email
			</label>
			<input type="text" placeholder="Enter your email address">
		</div>
		<div class="input">
			<label for="">Password
			</label><input type="text" placeholder="Enter your password">
		</div>
		<button class="login-button">Log in</button>
	  	<span class="between-button">Can’t log in? ∙ Sign up for an account</span>
	</div>
</div>
</div>
</div>

@endsection