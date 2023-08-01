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
          <button id="openModalButton" class="btn btn-primary">Add</button>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <!-- /.card-header -->
             {{-- form --}}
        <section class="w-50 m-auto modal" id="myModal">
            <div class="container py-5">
                <span class="close">&times;</span>
              <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                      <form>

                        <div class="row">
                          <div class="col-md-6 mb-4">

                            <div class="form-outline">
                              <input type="text" id="firstName" class="form-control form-control-lg" />
                              <label class="form-label" for="firstName">First Name</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4">

                            <div class="form-outline">
                              <input type="text" id="lastName" class="form-control form-control-lg" />
                              <label class="form-label" for="lastName">Last Name</label>
                            </div>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline datepicker w-100">
                              <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                              <label for="birthdayDate" class="form-label">Birthday</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4">

                            <h6 class="mb-2 pb-1">Gender: </h6>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1" checked />
                              <label class="form-check-label" for="femaleGender">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                              <label class="form-check-label" for="maleGender">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                value="option3" />
                              <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="email" id="emailAddress" class="form-control form-control-lg" />
                              <label class="form-label" for="emailAddress">Email</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12">

                            <select class="select form-control-lg">
                              <option value="1" disabled>Choose option</option>
                              <option value="2">Subject 1</option>
                              <option value="3">Subject 2</option>
                              <option value="4">Subject 3</option>
                            </select>
                            <label class="form-label select-label">Choose option</label>

                          </div>
                        </div>

                        <div class="mt-4 pt-2">
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
