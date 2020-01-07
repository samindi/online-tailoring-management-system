@extends('Layouts.master')


@section('title')
Employees
@endsection


@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>

      <form action="/save-employees" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="Name" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone:</label>
            <input type="text" name="Phone" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" name="Email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" name="Address" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Salary:</label>
            <input type="text" name="Salary" class="form-control" id="recipient-name">
          </div>
          
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SAVE</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Employees Table
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Id </th>
                      <th>Name</th>
                      <th> Phone</th>
                      <th> Email</th>
                      <th> Address</th>
                      <th> Salary</th>
                    </thead>
                    <tbody>
                      @foreach($emplo as $data)

                      
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email}}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->salary}}</td>
                        <td>
                        <a href="{{ url('employees-edit/'.$data->id) }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                        <form action="{{ 'employees-delete/'.$data->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


@section('scripts')
@endsection