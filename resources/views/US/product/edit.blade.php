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
                        <li class="breadcrumb-item active">Category</li>
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
                </div>
            </div>
            <div class="row">
                <div class="col-9 m-auto">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <section class="w-100 m-auto">
                                <div class="container py-5">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-12 col-lg-9 col-xl-7">
                                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                                <div class="card-body p-4">
                                                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Product</h3>
                                                    <form action="{{ route('updateProduct',$product->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-12 mb-4 form-group">
                                                            <div class="form-outline">
                                                                <label class="form-label">Name</label>
                                                                <input type="text" name="name" class="form-control form-control-lg"  value="{{ $product->name }}"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-4 form-group">
                                                            <label>Select Category</label>
                                                            <select name="category_id" class="form-control">
                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : ' ' }}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 form-group">
                                                                <label class="form-label">Price</label>
                                                                <input type="number" name="narx" class="form-control form-control-lg" value="{{ $product->narx }}"/>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 form-group">
                                                                <label class="form-label">Image: <img src="{{ asset('storage/'.$product->image) }}" class="w-25" alt=""></label>
                                                                <input type="file" name="image" class="form-control form-control-lg"/>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
