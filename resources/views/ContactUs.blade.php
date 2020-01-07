@extends('index')
@section('content')

<section class="contact">
<div class="container">
    <div class="raw">
        <div class="col-md-8">
            <br><br>
            <h1 class="text-left">Address</h1>
                <h4>No 567,<br>
                Nawalapitiya Road,<br>
                Kandy<br><br></h4>
                
                <img src="images/57.jpg" width="600" height="500">
        </div>
        <div class="col-md-5">
            <div class="raw">
                <div class="col-md-6">
                    <br><br>
                    <h1 class="text-left">Contact Us</h1>
                </div>
                <div class="col-md-6">
                    <span class="glyphicon glyphicon-pencil"></span>
                </div>
            </div>
            <br>

            <div class="raw">
                <label class="label col-md-2 control-label">First Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="FName" placeholder="First Nmae">
                </div>
            </div>

            <div class="raw">
                <label class="label col-md-2 control-label">Last Name</label>
                <div class="col-md-10">
                    <input type class="form-control" id="LName" placeholder="Last Name">
                </div>
            </div>

            <div class="raw">
                <label class="label col-md-2 control-label">E-mail</label>
                <div class="col-md-10">
                    <input type="Email" class="form-control" id="Email" placeholder="E-mail">
                </div>
            </div>

            <div class="raw">
                <label class="label col-md-2 control-label">Message</label>
                <div class="col-md-10">
                    <textarea class="form-control" placeholder="Message"></textarea>
                </div>
            </div>

            <a href="#"><div class="btn btn-info">Send</div></a>



        </div>
    </div>
</div>
</section>
















@include('footer')

@endsection
