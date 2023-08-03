@extends('US.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-1 mb-3">
            @auth
            <button id="openModalButton" class="btn btn-primary">Add</button>
            @endauth
        </div>
      </div>
      <div class="row">
        <div class="col-9">
          <div class="card">
        <section class="w-50 m-auto modal" id="myModal">
            <div class="container py-5">
                <span class="close">&times;</span>
              <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Product</h3>
                       <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="col-md-12 mb-4 form-group">
                            <div class="form-outline">
                                <label class="form-label">Name</label>
                              <input type="text" name="name" class="form-control form-control-lg" />
                            </div>
                          </div>
                          <div class="col-md-12 mb-4 form-group">
                            <label>Select Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="row">
                        </div>
                        <div class="row">
                          <div class="col-6 form-group">
                              <label class="form-label">Price</label>
                              <input type="number" name="narx" class="form-control form-control-lg" />
                          </div>
                          <div class="col-6 form-group">
                              <label class="form-label">Image</label>
                              <input type="file" name="image" class="form-control form-control-lg" />
                          </div>
                        </div>
                        <div class="mt-4 pt-2 form-group">
                          <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead class="text-center">
                  <tr>
                    <th class="disabled"></th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th class="img-fluid w-25 content">Image</th>
                    <th>Availability</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  @foreach ($products as $product)
                  <tr>
                    <td>=</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->narx }}</td>
                    <td><img src="{{ asset('storage/'.$product->image) }}" class="img-fluid w-25 content" alt="rasm"></td>
                    <td>true false</td>
                    <td>
                        @auth
                        <a href="{{ route('showProduct', $product->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('editProduct', $product->id) }}"><i class='text-primary fa-solid fa-pen'></i></a>
                        <form action="{{ route('deleteProduct', ['product' => $product->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fa-solid fa-trash-can text-danger" role="button"></i>
                            </button>
                        </form>
                        @endauth
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
        </div>


      </div><!-- /.container-fluid -->
    </section>
  </div>
  @endsection
