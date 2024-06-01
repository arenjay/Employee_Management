

@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management Arenjay') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                <p class="breadcrumb-item active" style="padding-left:1010px;">Arenjay gregorio</p>
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
                   


                   

                   

                    <div class="card-body" style="background-color: white">
                   

                    
                    

                    <div class="card-body" style="background-color:gray;">




              <div class="card-header">
                <h3 class="card-title">Add New Employee Rob</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('employee')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputfirstname">Firstname</label>
                    <input type="text"  class="form-control" name="firstname"  placeholder="Firstname" value="{{old('firstname')}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputlastname">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Lastname"  value="{{old('lastname')}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">DOB</label>
                    <input type="date" class="form-control" name="DOB" placeholder="Date of Birth"  value="{{old('DOB')}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputphone">Phone</label>
                    <input type="int" class="form-control" name="phone" placeholder="Phone"  value="{{old('phone')}}" >
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">


                 



                  <button type="submit" class="btn btn-primary" style="background-color:green;">Submit</button>

                  



          
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
    <div class="row">


    

</div>

    <!-- /.container -->
    <div class="row" >



          <div class="col-12">
            <div class="card">
              <div class="card-header"  style="background-color:green;">
                <h3 class="card-title">Robley miles Guinto</h3>


                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                   
                  
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>firstname</th>
                      <th>lastname</th>
                      <th>DOB</th>
                      <th>phone</th>
                      <th>update and delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                   
                     @foreach ($employees as $item)
                     <tr> <td>{{$item->id}}</td>
                      <td>{{$item->firstname}}</td>
                      <td>{{$item->lastname}}</td>
                      <td>{{$item->DOB}}</td>
                      <td>{{$item->phone}}</td>

                      <td>
                      <a class="btn btn-info btn-sm" href="{{url('employee/'.$item->id.'/update')}}">
                           <i class="fas fa-pencil-alt">
                            </i>
                                 Edit 
                                 </a>
                                 <span class="mx-2"></span> 
                       <a class="btn btn-danger btn-sm" href="{{url($item->id)}}">
                           <i class="">
                            Delete </a>
</td></tr>
                     @endforeach
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!-- /.content -->
@endsection