@extends('layouts.master')

@section('title')
    Edit- Registered
@endsection

@section('content')
<div class ="container">
<div class ="row">
  <div class ="col-md-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Role for Registered User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class ="row">
  <div class ="col-md-6">
              <form action ="/role-register-update/{{$users->$id }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="name" class="form-control" id="exampleInputName1" placeholder="{{$users->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{$users->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone1">Phone No</label>
                    <input type="phone" class="form-control" id="exampleInputPhone1" placeholder="{{$users->phone}}">
                  </div>
                  <div class="form-group">
                    <label>Give Role</label>
                    <select name="usertype">
                        <option value="admin">Admin</option>
                        <option value="vendor">Vendor</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href ="/role-register" class="btn btn-danger">Cancel</a>
                </div>
              </form>
            </div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')

@endsection