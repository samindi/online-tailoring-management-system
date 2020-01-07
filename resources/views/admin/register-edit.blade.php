@extends('Layouts.master')


@section('title')
Edit-Registered <Table></Table>
@endsection


@section('content')
<div class="container">
<div class="raw">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h3>Edit Registered User</h3>
</div>
<div class="card-body">
<div class="raw">
<div class="col-md-6">
<form action="/role-register-update/{{ $users->id }}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="form-group">
<lable>Name</lable>
<input type="text" name="username" value="{{ $users->name }}" class="form-control">
</div>
<div class="form-group">
<lable>Give Role</lable>
<select name="usertype" class="form-control">
<option value="admin">Admin</option>
<option value="customer">Customer</option>
<option value="employee">Employee</option>
<option value="">None</option>

</select>
</div>
<button type="submit" class="btn btn-success">Update</button>
<a href="/role-register" class="btn btn-danger">Cansel</a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')
@endsection