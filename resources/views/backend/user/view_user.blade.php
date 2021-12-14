@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-12">
              <div class="box">



          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">User List</h3>
                <a href="{{route('user.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">Sl No</th>
                              <th width="15%">Role</th>
                              <th width="15%">Name</th>
                              <th width="30%">Email</th>
                              <th width="15%">Created Date</th>
                              <th width="20%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key => $user )
                          <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{$user->usertype}} </td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->created_at}}</td>
                              <td>
                                  <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Edit</a>
                                  <a href="{{route('users.delete',$user->id)}}" class="btn btn-danger" id="delete">Delete</a>

                              </td>
                          </tr>
                          @endforeach

                      </tbody>
                      <tfoot>
                          <tr>
                            <th width="5%">Sl No</th>
                            <th width="15%">Name</th>
                            <th width="15%">Role</th>
                            <th width="30%">Email</th>
                            <th width="15%">Created Date</th>
                            <th width="20%">Action</th>
                          </tr>
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
</div>


@endsection
