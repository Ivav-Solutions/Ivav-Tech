@if ($errors->any())
    <div class="remove-margin-left">
        <ul style="list-style: none; margin-left: -2rem;">
            @foreach ($errors->all() as $error)
                <div class="remove-list">
                    <li>
                        <div class="alert-timeout application-alert-danger">{{ $error }}<div>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success_report'))
    <div class="application-alert-success alert-timeout">
        <!-- <a class="close" data-dismiss="alert" href="#">×</a> -->
        <h5 class="alert-heading">Success!</h5>
        {{ session()->get('success_report') }}
    </div>
    <br />
@endif


@if (session()->has('failure_report'))
    <div class="application-alert-danger alert-timeout">
        <!-- <a class="close" data-dismiss="alert" href="#">×</a> -->
        <h5 class="alert-heading">Error!</h5>
        {{ session()->get('failure_report') }}
    </div>
    <br />
@endif
