@extends('layouts.mainlayout')

@section('content')

<link href="{{('css/frontend-css/login.css')}}" rel="stylesheet">

<div class="login" style="background-color: #fffbfa;
	align-items: center; margin-top:280px">
	<div class="image"><img src="https://images.unsplash.com/photo-1625321643039-ed4aa7f9ceeb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMjgxMjM5OQ&ixlib=rb-1.2.1&q=85" alt=""></div>
	<div class="details">
		<h1 class="title">Sign up</h1>
        <div class="input"><label for="">Name
			</label>
			<input type="text" placeholder="Enter your email address">
		</div>
	
		<div class="input"><label for="">Email
			</label>
			<input type="text" placeholder="Enter your email address">
		</div>
        <div class="input"><label for="">Phone
			</label>
			<input type="text" placeholder="Enter your email address">
		</div>
        <div class="input"><label for="">Name
			</label>
			<input type="text" placeholder="Enter your email address">
		</div>
		<div class="input">
			<label for="">Password
			</label><input type="text" placeholder="Enter your password">
		</div>
		<button class="login-button">Sign Up</button>
	 	<span class="signup">Can’t log in? ∙ Sign up for an account</span>
	</div>
</div>

@endsection