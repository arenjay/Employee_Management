

@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                <p class="breadcrumb-item active" style="padding-left:1010px;">Employee Management</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   

                    <div class="card-body" style="background-color: #f2f2f2;">
                    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('employee/'.$employees->id.'/update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputfirstname">Firstname</label>
                    <input type="text"  class="form-control" name="firstname"  placeholder="Firstname" value="{{$employees->firstname}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputlastname">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Lastname"  value="{{$employees->lastname}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">DOB</label>
                    <input type="date" class="form-control" name="DOB" placeholder="Date of Birth"  value="{{$employees->DOB}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputphone">Phone</label>
                    <input type="int" class="form-control" name="phone" placeholder="Phone"  value="{{$employees->phone}}" >
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
   
    <!-- /.content -->
@endsection