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
                <a href="/application/id-{{ $app->app_id }}"><label class="l-label">{{ $app->app_name }}</label></a>
                <label class="fr l-label">{{ $app->app_id }}</label>
            </div>
            @endforeach
            <div class="ph width-100p">
                <a href="/application/create" class="ce apn ame width-100p">Create Application</a>
            </div>
        </div>
    </div>
</div>
@endsection
