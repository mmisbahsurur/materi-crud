@extends('layouts.main')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Create User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter name" required autofocus>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="Enter email" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" value="" placeholder="081234567890">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="User">User</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" class="form-control" id="photo">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="photo">Address</label>
                                    <textarea class="form-control" name="address" id="addredd"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer float-right">
                                <a href="" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
