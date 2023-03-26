@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Book Consultation</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Book A Session</li>
            </ul>
        </div>
    </div>
</div>
<div class="signup-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="signup-form">
                    <div class="section-tittle text-center">
                        <h2>Book a Consultation</h2>
                        <p>Choose a Service and Book a Session with Us Today</p>
                    </div>
                    @includeIf('layouts.error_template')
                    <form action="{{route('user.book.consultation')}}" method="post">
                        @csrf
                        @honeypot
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control" name="sex" required>
                                        <option value="">-- Select sex --</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control" name="service" required>
                                        <option value="">-- Select a service --</option>
                                        <option value="IT Career Consultation">IT Career Consultation</option>
                                        <option value="Business Development Consultation">Business Development Consultation</option>
                                        <option value="Digital Marketing Consultation">Digital Marketing Consultation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control" name="platform" required>
                                        <option value="">-- What platform would you prefer for the consultation? --</option>
                                        <option value="Zoom">Zoom</option>
                                        <option value="Google Meet">Google Meet</option>
                                        <option value="Whatsapp Call">Whatsapp Call</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label style="font-weight: 700;">Enter Time and Date</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="time" class="form-control" name="time" placeholder="Time" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date" placeholder="Date" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <span class="text-danger">*</span> <b>The Charge for Each Consulting Session is One Hundred Thousand (#100,000)</b>
                                <br>
                                <br>
                                <span class="text-danger">*</span> <b>If you choose WhatsApp as the mode of response. Please ensure that the Phone Number attached is WhatsApp Enabled.</b>
                            </div>
                            <div class="col-12 text-center mt-5">
                                <button type="submit" class="box-btn signup-btn">Book Consultation</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection