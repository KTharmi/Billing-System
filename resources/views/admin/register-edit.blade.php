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
              <form action ="/role-register-update/{{$users->id }}" method="POST">
              {{ csrf_field() }}
               
                <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="username" value="{{$users->name}}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" value="{{$users->email}}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Phone No</label>
                    <input type="phone" name="phone" value="{{$users->phone}}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Give Role</label>
                    <select name="usertype" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="vendor">Vendor</option>
                        <option value="none">None</option>
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