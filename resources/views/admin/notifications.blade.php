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
                    <h1 class="page-title">Notifications</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Notifications</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-6">
                            <div class="inbox-body">
                                <div class="mail-option">
                                    <div class="chk-all">
                                        <div class="btn-group">
                                            <a data-bs-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-inbox table-hover text-nowrap mb-0">
                                        @if($allNotifications->isEmpty())
                                        <tbody>
                                            <tr>
                                                <td class="align-enter text-dark font-15">No Notification.</td>
                                            </tr>
                                        </tbody>
                                        @else
                                        @foreach($allNotifications as $key => $notification)
                                        <tbody>
                                            @if($notification->status == 'Unread')
                                                <tr class="unread">
                                                    <td class="view-message dont-show fw-bold"><a href="{{route('admin.notification.read', Crypt::encrypt($notification->id))}}" style="color: #000;">{{$notification->first_name}} {{$notification->last_name}}</a></td>
                                                    <td class="view-message dont-show fw-bold"><a href="{{route('admin.notification.read', Crypt::encrypt($notification->id))}}" style="color: #000;">{{$notification->subject}}</a></td>
                                                    <td class="view-message fw-bold"><a href="{{route('admin.notification.read', Crypt::encrypt($notification->id))}}" style="color: #000;">{{$notification->description}}</a></td>
                                                    <td class="view-message text-end fw-bold"><a href="{{route('admin.notification.read', Crypt::encrypt($notification->id))}}" style="color: #000;">{{$notification->created_at->toDateString()}}</a></td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td class="view-message dont-show">{{$notification->first_name}} {{$notification->last_name}}</td>
                                                    <td class="view-message dont-show">{{$notification->subject}}</td>
                                                    <td class="view-message ">{{$notification->description}}</td>
                                                    <td class="view-message  text-end">{{$notification->created_at->toDateString()}}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                        @endforeach
                                        @endif
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection