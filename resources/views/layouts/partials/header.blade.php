<link href="{{('css/frontend-css/cart.css')}}" rel="stylesheet">

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<div id="wrapper">

		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-2">
							<p class="bold text-left">Everyday, 8 to 10 </p>
						</div>


						<div class="col-sm-6 col-md-6" style="margin-top: -15px;">

							@include('layouts.searchbar')
						</div>

						<div class="col-sm-6 col-md-2">

							<a href="{{ url('/frontend-login')}}" style="color:#fff">
								<p class="bold text-right" style="display: inline-block;">
									LOG IN</p>
							</a>|
							<a href="{{ url('/frontend-signup')}}" style="color:#fff">
								<p class="bold text-right" style="display: inline-block;">SIGN UP</p>
							</a>

						</div>

						<div class="col-sm-6 col-md-2">

							<div class="dropdown">
								<button type="button" class="btn btn-success" data-toggle="dropdown">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
								</button>

								<div class="dropdown-menu">
									<div class="row total-header-section">
										@php $total = 0 @endphp
										@foreach((array) session('cart') as $id => $details)
										@php $total += $details['price'] * $details['quantity'] @endphp
										@endforeach
										<div class="col-lg-12 col-sm-12 col-12 total-section text-right">
											<p>Total: <span class="text-info">$ {{ $total }}</span></p>
										</div>
									</div>
									@if(session('cart'))
									@foreach(session('cart') as $id => $details)
									<div class="row cart-detail">
										<div class="col-lg-8 col-sm-4 col-4 cart-detail-img">
											<p>{{ $details['name'] }}</p>
										</div>
										<div class="col-lg-4 col-sm-8 col-8 cart-detail-product">
										<p>{{ $details['lab_name'] }}</p>
											<span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Qty:{{ $details['quantity'] }}</span>
										</div>
									</div>
									@endforeach
									@endif

									<div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a  href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>


			<div class="container navigation">

				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="{{url('/')}}">
						<img src="{{('img/Logo.jpeg')}}" alt="" width="270" style="height: 96px !important;" />
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#intro">Diagonostics</a></li>
						<li><a href="#service">Health Checkup</a></li>
						<li><a href="#doctor">Corona Virus Testing</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="badge custom-badge red pull-right">From Prescription</span>Book Test </a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>



		</nav>