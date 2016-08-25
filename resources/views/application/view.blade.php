@extends('dashboard')

@section('body')
<div class="fu">
    <div class="width-100p ali">
        <div class="by">
            <h4 class="ty">
                Application
            </h4>
            @if(count($items) > 0)
              @foreach($items as $item)
                <div class="ph" href="#">
                    <label class="fr l-label">{{ $item->key }}</label>
                </div>
              @endforeach
            @else
              <div class="ph" href="#">
                  <label class="fr l-label">No data has been upload.</label>
              </div>
            @endif

        </div>
    </div>
</div>
@endsection
