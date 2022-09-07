@extends('layouts.mainlayout')

@section('content')

<link href="{{('css/package-detail.css')}}" rel="stylesheet">



<div class="pd-wrap" style="margin-top: 200px;">

	<div class="container" style="background-color: #fffbfa; width:80%">


		<div class="heading-section">
			<h2>Comprehensive Gold Full Body Checkup</h2>
		</div>

		<div class="row">
		
		<div class="col-md-6 left-package">

				<p class="details-para">Unhealthy lifestyle and stress can gradually take a toll on our
					 health. Early detection can help to capture the warning signs of masked diseases in the body. 
					 Comprehensive Gold Full Body Checkup Package provides a comprehensive range of tests that check your liver, heart & kidney function, blood sugar, thyroid status, lipid profile, blood counts, vitamins, minerals, urine and more. In addition to all the features of Comprehensive Silver Full Body Checkup Package, it also provides C-Reactive Protein, Rheumatoid Factor, Hepatitis B and more detailed urine examination. This package – a part of our ‘premium range’ of diagnostic tests – can be ordered once every 6 to 12 months or as recommended by your doctor..</p>
				
					 <h6>Package Tests Included in Comprehensive Gold Full Body Checkup<span>(78 tests)</span></h6>
				
					 @include('layouts.components.accordion')



					 

				 

			</div>	
		
		
		
			<div class="col-md-6">
				<div id="slider" class="owl-carousel product-slider">

					<p class="details-para">Call labs is a state-of-art facility offering highest quality diagnostic services at the convenience of your doorstep. We pride ourselves on three things 1) Assured Quality 2) Best Prices 3) Excellent Turn Around Time. We believe in providing the highest level of transparency to our customers. Testimony to the quality is the ISO certification, a gold standard in the quality of diagnostics. Our entire team is dedicated to providing the best customer experience and continuously strives to....</p>
					
				 
				</div>

			</div>

			

		</div>

		
		        <ul class="nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
				  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
				  	</div>
				  	<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
				  		<div class="review-heading">REVIEWS</div>
				  		<p class="mb-20">There are no reviews yet.</p>
				  		<form class="review-form">
		        			<div class="form-group">
			        			<label>Your rating</label>
			        			<div class="reviews-counter">
									<div class="rate">
									    <input type="radio" id="star5" name="rate" value="5" />
									    <label for="star5" title="text">5 stars</label>
									    <input type="radio" id="star4" name="rate" value="4" />
									    <label for="star4" title="text">4 stars</label>
									    <input type="radio" id="star3" name="rate" value="3" />
									    <label for="star3" title="text">3 stars</label>
									    <input type="radio" id="star2" name="rate" value="2" />
									    <label for="star2" title="text">2 stars</label>
									    <input type="radio" id="star1" name="rate" value="1" />
									    <label for="star1" title="text">1 star</label>
									</div>
								</div>
							</div>
		        			<div class="form-group">
			        			<label>Your message</label>
			        			<textarea class="form-control" rows="10"></textarea>
			        		</div>
			        		<div class="row">
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Name*">
					        		</div>
					        	</div>
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Email Id*">
					        		</div>
					        	</div>
					        </div>
					        <button class="round-black-btn">Submit Review</button>
			        	</form>
				  	</div>
				</div>
			</div> -->


	</div>
</div>
</div>

@endsection