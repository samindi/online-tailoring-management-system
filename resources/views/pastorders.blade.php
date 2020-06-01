@extends('layout2.master1')


@section('title')
Customer Dasshboard

@endsection

@section('content')

<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Past Orders</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> id </th>
                      <th> Name </th>
                      <th>Email</th>
                      <th>Telephone</th>
                      <th>Address</th>
                      <th>ExpectedDate</th>
                      <th>Collar</th>
                      <th>Sleeve</th>
                      <th>Cuff</th>
                      <th>Chest</th>
                      <th>Length</th>
                      <th>Material</th>
                      <th>colour</th>
                      
                      
                    </thead>
                    <tbody>

                    @foreach($past as $order)
                      <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->Name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->Telephone }}</td>
                        <td>{{ $order->Address }}</td>
                        <td>{{ $order->ExpectedDate }}</td>
                        <td>{{ $order->Collar }}</td>
                        <td>{{ $order->Sleeve }}</td>
                        <td>{{ $order->Cuff }}</td>
                        <td>{{ $order->Chest }}</td>
                        <td>{{ $order->Length }}</td>
                        <td>{{ $order->Material }}</td>
                        <td>{{ $order->colour }}</td>



                        <td>
                        @if(!$order->iscanceled)
                        <a href="/markasnotcanceled/{{$order->id}}" class="btn btn-success">Not Cancelled</a>
                        @else
                        <a href="/markascanceled/{{$order->id}}" class="btn btn-danger" > Canceled</a>
                        @endif
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