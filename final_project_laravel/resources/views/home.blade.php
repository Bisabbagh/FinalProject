@extends('frontend.master')

@section('header')
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to Izra3 shajarah</h3>
                        <p>A Great Theme For Garden Lawn Care</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Beautiful Garden</h3>
                        <p>A Great Theme For Garden Lawn Care</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to N & LW Lawn Care</h3>
                        <p>A Great Theme For Garden Lawn Care</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
@endsection


@section('content')
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Your Points: {{ Auth::user()->all_point }}</h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        @foreach ($gifts as $gift)
                        <br>
                            <h4 class="card-header">{{ $gift->name }}</h4>
                            <div class="card-img">
                                <img class="img-fluid" src="images/services-img-01.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $gift->point }}</p>
                            </div>
                            <div class="card-footer">

                              <form action="{{ route('choose.gift', $gift->id) }}" method="post">
                                 @csrf
                                 <button type="submit">Choose</button>
                             </form>
                                
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Supplies</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-03.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Welcome to N & LW Lawn Care</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <h5>Our smart approach</h5>
                    <ul>
                        <li>Sed at tellus eu quam posuere mattis.</li>
                        <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Duis porttitor odio pellentesque mollis vulputate.</li>
                        <li>Quisque ac eros non ex hendrerit vehicula.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                        reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia
                        dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        
        <hr>
        <!-- Get In Touch Now Section <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti
                    beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Get In Touch Now</a>
            </div>
        </div> -->
        
    </div>
@endsection
