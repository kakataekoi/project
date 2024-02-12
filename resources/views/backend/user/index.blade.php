@extends('layouts.master_backend')
@section('content')
<br>
<br>
<br>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Users</h5>
    <div class="table-responsive text-nowrap">
      <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($u as $user)
            <tr>
              <td>{{ $user->id}}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection