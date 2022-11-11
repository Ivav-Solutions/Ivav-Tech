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
                    <h1 class="page-title">{{$user->first_name}} {{$user->last_name}}</h1>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-12 col-xl-6">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="profile-img-main rounded">
                                            @if($user->avatar)
                                            <img src="{{$user->avatar}}" alt="img" width="100px" class="m-0 p-1 rounded hrem-6">
                                            @else
                                            <div class="m-0 p-1 rounded hrem-6" style="width: 6rem; align-items: center; font-size: 2rem; background:#0d6efd; color: #fff; display: flex; justify-content: center;">{{ ucfirst(substr($user->first_name, 0, 1)) }}</div>        
                                            @endif
                                        </div>
                                        <div class="ms-4">
                                            <h4>{{$user->first_name}} {{$user->last_name}}</h4>
                                            <p class="text-muted mb-2">{{$user->email}}</p>
                                            <a href="#" class="btn btn-primary btn-sm">{{$user->gender}}</a>
                                            <a href="#" class="btn btn-secondary btn-sm">{{$user->phone_number}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="wideget-user-tab">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li><a href="#profileMain" class="active show" data-bs-toggle="tab">Profile</a></li>
                                            <li><a href="#accountSettings" data-bs-toggle="tab">Account Settings</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="profileMain">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="border-top"></div>
                                    <div class="table-responsive p-5">
                                        <h3 class="card-title">Personal Info</h3>
                                        <table class="table row table-borderless">
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                                <tr>
                                                    <td><strong>First Name :</strong> {{$user->first_name}} </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Last Name :</strong> {{$user->last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email :</strong> {{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone Number :</strong> {{$user->phone_number}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Gender :</strong> {{$user->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Country :</strong> {{$user->country}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="accountSettings">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal" method="POST" action="{{ route('user.account.upload.photo',  Crypt::encrypt($user->id))}}" enctype="multipart/form-data">
                                            @csrf
                                                <div class="mb-4 main-content-label">Upload New Photo</div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="photo" class="form-label">Photo</label>
                                                            <input type="file" class="form-control" id="photo" placeholder="Photo" name="photo" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group float-end">
                                                    <div class="row row-sm">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-info my-1" type="submit">Upload New Photo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal" method="POST" action="{{ route('user.account.update.password',  Crypt::encrypt($user->id))}}">
                                            @csrf
                                                <div class="mb-4 main-content-label">Reset Your Password</div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="npassword" class="form-label">New Password</label>
                                                            <input type="password" class="form-control" id="npassword" name="new_password" placeholder="New Password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="cnpassword" class="form-label">Confirm New Password</label>
                                                            <input type="password" class="form-control" id="cnpassword" name="new_password_confirmation" placeholder="Confirm New  Password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group float-end">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-info my-1" type="submit">Update Password</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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