@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->



      <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Add User</h4>

           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form method="POST" action="{{route('users.store')}}">
                    @csrf
                     <div class="row">
                       <div class="col-12">

                        <div class="row">
                            <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                    <select name="usertype" id="usertype" required="" class="form-control">
                        <option value="" selected="" disabled="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                           </div>
                        </div>
                            </div>{{-- End COl MD-6 --}}

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Name  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                <input type="text" name="name" id="name" class="form-control" > </div>

                                </div>
                            </div>{{-- End COl MD-6 --}}

                        </div>      {{-- End Row --}}



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                <input type="email" name="email" class="form-control" > </div>

                                </div>
                            </div>{{-- End COl MD-6 --}}

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Password  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                <input type="password" name="password" class="form-control" > </div>

                                </div>
                            </div>{{-- End COl MD-6 --}}

                        </div>      {{-- End Row --}}




                       <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-info mb-5" value="submit">
                       </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>




    </div>
</div>


@endsection
