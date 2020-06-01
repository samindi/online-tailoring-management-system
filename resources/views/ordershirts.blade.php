<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
</head>

<body>



<section class="shirts">
<div class="col-md-6">
   <span class="glyphicon glyphicon-pencil"></span>
</div>



@if($errors->any())
<div class="alert alert-warning">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


<form action="/saveorder1" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  
  <div class="row">
  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Name</label>
      <input type="text" class="form-control" name="Name" placeholder="Name">
</div>

<div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
</div>

    
    <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Telephone</label>
      <input type="text" class="form-control" name="Telephone" placeholder="Telephone">
    </div>
  </div>

  <div class="row">      
    <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Address</label>
      <input type="text" class="form-control" name="Address" placeholder="Address">
    </div>
    <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Expected Date</label>
      <input type="text" class="form-control" name="ExpectedDate" placeholder="Expected Date">
    </div>
  </div>

  <div class="row">
  <img src="images/7.svg" width="100px" height="100px">
  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Collar</label>
      <input type="text" class="form-control" name="Collar" placeholder="Collar">
    </div>
  </div>

  <div class="row">
  <img src="images/1.svg" width="100px" height="100px">
  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Sleeve</label>
      <input type="text" class="form-control" name="Sleeve" placeholder="Sleeve">
    </div>
  </div>

  <div class="row">
  <img src="images/2_4.svg" width="100px" height="100px">
  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Cuff</label>
      <input type="text" class="form-control" name="Cuff" placeholder="Cuff">
    </div>
  </div>

  <div class="row">
  <img src="images/4.svg" width="100px" height="100px">
  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Chest</label>
      <input type="text" class="form-control" name="Chest" placeholder="Sleeve">
    </div>
  </div>

  <div class="row">
  <img src="images/0.svg" width="100px" height="100px">
  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">Length</label>
      <input type="text" class="form-control" name="Length" placeholder="Sleeve">
    </div>
  </div>

  <div class="row">
  <div class="form-group col-md-6">
  <select name=" Material" class="form-control">
  <option value="Fine cotton">Fine cotton</option>
  <option value="Popline">Popline</option>
  <option value="Twill">Twill</option>
  <option value="Flannel">Flannel</option>
  <option value="Garbardine Cotton">Garbardine Cotton</option>
  <option value="Pinpoint Fabric">Pinpoint Fabric</option>
</select>
</div>
  </div>

  <div class="form-group col-md-6">
      <label class="label col-md-2 control-label">colour</label>
      <input type="text" class="form-control" name="colour" placeholder="colour">
    </div>

  
  
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

</section>

</body>
</html>