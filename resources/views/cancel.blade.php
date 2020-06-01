@extends('Layouts.master')


@section('title')
Dashboard
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Canceled Orders</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th> Order id </th>
                      <th> Name </th>
                      <th> Email </th>
                      <th>Telephone </th>
                      <th>Address </th>
                      <th> Expected Date</th>
                    </thead>
                    <tbody>
                    @foreach($cancel as $order)
                      <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->Name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->Telephone }}</td>
                        <td>{{ $order->Address }}</td>
                        <td>{{ $order->ExpectedDate }}</td>
                        
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