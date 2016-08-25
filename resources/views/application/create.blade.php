@extends('dashboard')

@section('body')
<div class="fu">
    <div class="width-100p ali">
        <div class="by">
            <h4 class="ty">
                Create Application
                @if(isset($msg))
                    <label class="alert-info">{{ $msg }}</label>
                @endif
            </h4>
            <form method="post" action='create'>
              {{ csrf_field() }}
              <div class="ph" href="#">
                  <input type="text" name="app_name" class="form-control" placeholder="Application Name.">
              </div>
              <div class="ph width-100p">
                  <button type="submit" class="ce apn ame width-100p">Save Application</a>
              </div>
            <form>
        </div>
    </div>
</div>
@endsection
