@extends('dashboard')

@section('body')
<div class="ud">
  <div class="eg">
    @if(count($items) > 0)
      <table class="cl" data-sort="table">
        <thead>
          <tr>
            <th class="header headerSortDown">Key</th>
            <th class="header">Data</th>
            <th class="header">Updated At</th>
          </tr>
        </thead>
        <tbody>
          @foreach($items as $item)
            <tr>
              <td>{{ $item->key }}</td>
              <td>{{ $item->data }}</td>
              <td>{{ $item->updated_at }}</td>
          </tr>
          @endforeach
      </tbody>
      </table>
    @else
      <div class="ph">
          <label class="l-label">No data has been upload.</label>
      </div>
    @endif
  </div>
</div>
@endsection
