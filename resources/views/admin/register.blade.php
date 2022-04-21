@extends('layouts.master')

@section('title')
    Registered Roles 
@endsection

@section('content')
<div class ="row">
  <div class ="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Registered Role</h4>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>
<div class="card-body">
  <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone No</th>
                      <th>User Type</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $row)
                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->phone}}</td>
                      <td>{{$row->usertype}}</td>
                      <td><a href="/role-edit/{{$row->id}}" class="btn btn-block btn-success btn-sm">Edit</a></td>
                      <td>
                        <form action="/role-delete/{{$row->id}}" method ="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                          <input type ="hidden" name="id" value="{{$row->id}}">
                              <button type ="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
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