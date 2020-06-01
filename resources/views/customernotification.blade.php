@extends('layout2.master1')


@section('title')
Customer Dasshboard

@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Order id </th>
                      <th>Message</th>
                    </thead>
                    <tbody>
                    @foreach($notification as $confirms)
                      <tr>
                        <td>{{ $confirms->order_id }}</td>
                        <td>{{ $confirms->status }}</td>
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