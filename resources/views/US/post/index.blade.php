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
            @if (auth()->user())
            <button id="openModalButton" class="btn btn-primary">Add</button>
            @endif
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
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Category</h3>
                       <form action="{{ route('storeCategory') }}" method="POST">
                        @csrf
                          <div class="col-md-12 mb-4 form-group">

                            <div class="form-outline">
                                <label class="form-label">Name</label>
                              <input type="text" name="name" class="form-control form-control-lg" />
                            </div>

                          </div>
                          <div class="col-md-12 mb-4 form-group">

                            <div class="form-outline">
                                <label class="form-label" id="selected-icon">Imoji</label>
                              <input type="text" name="imoji" id="icon-input" class="form-control form-control-lg" />
                            </div>

                          </div>



                        <div class="row">

                        </div>

                        <div class="row">
                          <div class="col-12 form-group">

                              <label class="form-label">Description</label>
                            <textarea name="description" id="summernote" cols="50" rows="5"></textarea>

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
                <thead>
                  <tr>
                    <th class="disabled"></th>
                    <th>Emoji</th>
                    <th>Name</th>
                    <th>Availability</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                  <tr>
                    <td>=</td>
                    <td>{{ $category->imoji }}</td>
                    <td>{{ $category->name }}</td>
                    <td>true false</td>
                    <td>
                        @auth
                        <a href="{{ route('showCategory', $category->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('editCategory', $category->id) }}"><i class='text-primary fa-solid fa-pen'></i></a>
                        <form action="{{ route('deleteCategory', ['category' => $category->id]) }}" method="POST" class="d-inline">
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
