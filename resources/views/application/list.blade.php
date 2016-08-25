@extends('dashboard')

@section('body')
<div class="fu">
    <div class="width-100p ali">
        <div class="by">
            <h4 class="ty">
                My Applications
            </h4>
            @foreach($apps as $app)
            <div class="ph" href="#">
                <label class="l-label" style="margin-bottom:0;">{{ $app->name }}</label>
            </div>
            @endforeach
            <div class="ph width-100p">
                <a href="create" class="ce apn ame width-100p">Create Application</a>
            </div>
        </div>
    </div>
</div>
@endsection
