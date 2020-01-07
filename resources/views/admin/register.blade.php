@extends('Layouts.master')


@section('title')
Registered <Table></Table>
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Table</h4>
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
                      <th>ID</th>
                      <th> Name </th>
                      <th>Phone</th>
                      <th> Email</th>
                      <th>usertype</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach ($users as $raw)
                      <tr>
                        <td>{{$raw->id}}</td>
                        <td>{{ $raw->name }}</td>
                        <td> {{ $raw->phone }}</td>
                        <td>{{ $raw->email}}</td>
                        <td>-{{ $raw->usertype }}</td>
                        <td>
                        <a href="/role-edit/{{$raw->id}}" class="btn  btn-success">EDIT</a>
                        </td>
                        <td>
                        <form action="/role-delete/{{$raw->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn  btn-danger">DELETE</button>
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