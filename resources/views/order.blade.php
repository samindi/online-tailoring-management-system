@extends('Layouts.master')


@section('title')
Dashboard
@endsection


@section('content')


@if($errors->any())
<div class="alert alert-warning">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Complete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
        <form action="/addimage" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="message-text" class="col-form-label">Order id</label>
            <input type class="form-control" name="order_id">
          </div>
  
        <div class="form-group">
            <label for="message-text" class="col-form-label">Status</label>
            <input type class="form-control" name="status">
          </div>
          <div class="form-group">
            <label for="email-name" class="col-form-label"> Email:</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="price-name" class="col-form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price">
          </div>
          <div class="form-group">
          <label for="image-name" class="col-form-label">Choose Image</label>
          <input type="file" class="form-control-file" name="image" id="image" >
           </div>
   
  
 

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>  
  
        </form>
      
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabe2">Order Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
        <form action="/confirm" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="message-text" class="col-form-label">Order id</label>
            <input type class="form-control" name="order_id">
          </div>
  
        <div class="form-group">
            <label for="message-text" class="col-form-label">Status</label>
            <input type class="form-control" name="status">
          </div>
          <div class="form-group">
            <label for="email-name" class="col-form-label"> Email:</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>  
  
        </form>
      
      </div>
    </div>
  </div>
</div>













<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Orders Details</h4>
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
                      <th> Collar</th>
                      <th> Sleeve</th>
                      <th>Cuff </th>
                      <th>Chest </th>
                      <th>Length </th>
                      <th> Material</th>
                      <th> Colour</th>
                      <th>Completed</th>
                      <th>Confirmed</th>
                      <th>Action</th>
                     
                      
                    </thead>
                    <tbody>

                    @foreach($orders as $order)
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
                        <td>{{ $order->Length}}</td>
                        <td>{{ $order->Material}}</td>
                        <td>{{ $order->colour }}</td>



                        <td>
                        @if(!$order->iscompleted)

                        <a href="/markascompleted/{{$order->id}}" class="btn btn-success" > Completed</a>
                        @else

                        <a href="/markasnotcompleted/{{$order->id}}" class="btn btn-danger">Not Completed</a>
                        @endif
                        </td>



                        <td>
                        @if(!$order->isconfirmed)

                        <a href="/markasconfirmed/{{$order->id}}" class="btn btn-success" >Confirmed</a>
                        @else

                        <a href="/markasnotconfirmed/{{$order->id}}" class="btn btn-danger">Not Confirmed</a>
                        @endif
                        </td>




                        

                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2">Confirm Meesage</button>
                        </td>

                        <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Complete Message</button>
                        </td>-->

                        <td>
                        <button type="button" class="btn btn-primary" >Delete</button> 
                        </td>
                      </tr>
                        
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