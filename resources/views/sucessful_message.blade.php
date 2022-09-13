@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Success</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Success Message</li>
            </ul>
        </div>
    </div>
</div>

<div class="choose-area ptb-100">
    <div class="container">
        <div class="free-quote-inner">
            <div class="section-title" style="font-size: 20px; font-weight: 700">
                <h2>Form Submitted Successfully</h2>
                <br>
                <h5 style="color: #000;">Thank you for consulting us today, A message has been sent to your mail!</h5>
                
                <h5 style="color: #000;">Your booking will be confirmed upon receipt of payment. Thanks!</h5>
            </div>
        </div>
    </div>
</div>
@endsection