@extends('layout2.master1')


@section('title')
Customer Dasshboard

@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Completed Orders
                <button type="button" class="btn btn-primar float-right" data-toggle="modal" data-target="#">Pay Online</button>

                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Order_id </th>
                      <th>Status</th>
                      <th> Price</th>
                      <th> Image</th>
                    </thead>
                    <tbody>
                    @foreach($view as $views)
                      <tr>
                        <td>{{$views->order_id}}</td>
                        <td>{{$views->status}}</td>
                        <td>{{$views->price}}</td>
                        
                        <td><img src="{{ asset('uploads/images/' . $views->image) }}" width="300px;" height="300px;" alt="image"></td>
                        
                        <td>
                        <button type="button" class="btn btn-success" >Paid</button>
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