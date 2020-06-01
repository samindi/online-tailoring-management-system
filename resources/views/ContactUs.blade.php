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

@if($errors->any())
<div class="alert alert-warning">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


<form action="/savefeedback" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
            <div class="row">
                <label class="label col-md-2 control-label">Name</label>
                <div class="col-md-10 form-group">
                    <input type="text" name="Name" class="form-control"  id="Name" placeholder="Name">
                </div>
            </div>

            <div class="row">
                <label class="label col-md-2 control-label">E-mail</label>
                <div class="col-md-10 form-group">
                    <input type="Email" name="Email" class="form-control"  placeholder="E-mail">
                </div>
            </div>

            <div class="row">
                <label class="label col-md-2 control-label">Subject</label>
                <div class="col-md-10 form-group">
                    <input type="text" name="Subject" class="form-control"   placeholder="Subject">
                </div>
            </div>

            <div class="row">
                <label class="label col-md-2 control-label">Message</label>
                <div class="col-md-10 form-group">
                    <textarea name="Message" class="form-control" ></textarea>
                </div>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>

</form>

        </div>
    </div>
</div>
</section>
















@include('footer')

@endsection
