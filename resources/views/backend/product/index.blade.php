@extends('layouts.master_backend')
@section('content')
<br>
<br>
<br>
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Product</h5>
                            <div class="table-responsive text-nowrap">
                              <br>
                              <br>
<a href="{{ route('p.from')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
<div class="table-responsive m-b-40">
  <br>
  <table class="table table-borderless table-data3">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Category_id</th>
        <th>images</th>
        <th>Price</th>
        <th>Description</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($product as $p)
      <tr>
        <td>{{$product->firstItem() + $loop->index}}</td>
        <td>{{$p -> name}}</td>
        <td>{{$p -> category->name}}</td>
        <td><img src="{{asset ('backend/product/resize/'. $p ->image)}}" alt=""></td>
        <td>{{$p -> price}}</td>
        <td>{{$p -> description}}</td>
        <td>{{$p -> created_at}}</td>
        <td>{{$p -> updated_at}}</td>
        <td>
          <a href="{{ url('admin/product/edit/'.$p->product_id)}}"><i class='far fa-edit'></i></a>
          <span></span>
          <a href="{{url('admin/product/delete/'.$p->product_id)}}"><i class='far fa-trash-alt'></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection