@extends('Layouts.master')


@section('title')
Dashboard
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Feedbacks</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> id </th>
                      <th> Name </th>
                      <th>Email</th>
                      <th> Subject</th>
                      <th> Message </th>
                      
                    </thead>
                    <tbody>

                    @foreach($feedback as $feedbacks)
                      <tr>
                        <td>{{ $feedbacks->id }}</td>
                        <td>{{ $feedbacks->Name }}</td>
                        <td>{{ $feedbacks->Email }}</td>
                        <td>{{ $feedbacks->Subject }}</td>
                        <td>{{ $feedbacks->Message }}</td>
                        
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