@extends('layouts.mainlayout')

@section('content')


<section id="intro" class="intro">
    @include('layouts.services')
</section>



<!-- /Section: intro -->

<!-- Section: boxes -->
@include('layouts.boxes')
<!-- /Section: boxes -->



<!-- Section: services -->
<!-- @include('layouts.serve') -->
<!-- /Section: services -->


<!-- Section: team -->
@include('layouts.teams')
<!-- /Section: team -->

@include('layouts.emergency')


<!-- Section: works -->
<!-- @include('layouts.partials.works') -->
<!-- /Section: works -->


<!-- Section: testimonial -->
<!-- @include('layouts.testimonial') -->
<!-- /Section: testimonial -->



<section id="partner" class="home-section paddingbot-60">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Our partner</h2>
                        <p>Take charge of your health today with our specially designed health packages</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="{{('img/featured/lal.jpg')}}" alt=""  width="210" height="70"/></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="{{('img/featured/thyrocare.png')}}" alt=""  width="210" height="70"/></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="{{('img/featured/1mg.png')}}" alt=""  width="210" height="70"/></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="{{('img/featured/applo.jpg')}}" alt=""  width="210" height="70"/></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="partner" class="home-section paddingbot-60">
@include('layouts.advertise')
</section>


</div>

    
@endsection