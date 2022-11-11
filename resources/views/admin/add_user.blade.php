@extends('layouts.admin_frontend')

@section('page-content')
<!--APP-CONTENT OPEN-->
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Add User/Student</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row" id="user-profile">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('admin.create.user',  Crypt::encrypt(Auth::user()->id))}}">
                            @csrf
                                <div class="mb-4 main-content-label">Create User</div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="fname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="fname" name="first_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="lname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lname" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="pno" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="pno" name="phone_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="pno" class="form-label">Gender</label>
                                            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>                                
                                            </select>                                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="pno" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="pno" name="country">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group float-end">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-info my-1" type="submit">Create User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection