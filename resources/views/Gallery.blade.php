@extends('index')
@section('content')

<section class="gallery-block cards-gallery">
    <div class="container">
        <div class="heading">
            <h1>Gallery</h1>
        </div>
        <div class="raw">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="images/14.jpg"><img src="images/14.jpg" class="card-img-top"></a>
                    <div class="card-body">
                        <h6>Lorem Ipsum</h6>
                        <p class=text-muted card-text>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium aspernatur</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="images/12.jpg"><img src="images/12.jpg" class="card-img-top"></a>
                    <div class="card-body">
                        <h6>Lorem Ipsum</h6>
                        <p class=text-muted card-text>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium aspernatur</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="images/27.jpg"><img src="images/27.jpg" class="card-img-top"></a>
                    <div class="card-body">
                        <h6>Lorem Ipsum</h6>
                        <p class=text-muted card-text>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium aspernatur</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

@include('footer')
@endsection