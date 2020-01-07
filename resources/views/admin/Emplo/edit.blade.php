@extends('Layouts.master')


@section('title')
Employees Edit
@endsection

@section('content')

<div class="raw">
<div class="dol-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title"> Edit Employees</h4>

<form action="{{url('employees-update/'.$emplo->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="modal-body">
      
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="{{$emplo->name}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" value="{{$emplo->phone}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" name="email" class="form-control" value="{{$emplo->email}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" name="address" class="form-control" value="{{$emplo->address}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Salary:</label>
            <input type="text" name="salary" class="form-control" value="{{$emplo->salary}}">
          </div>
          
       
      </div>
      <div class="modal-footer">
        <a href="{{url('employees')}}" class="btn btn-secondary">BACK</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
      </div>
      </form>

</div>
</div>
</div>
</div>

@endsection
