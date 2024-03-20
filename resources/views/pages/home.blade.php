@extends('layouts.app')

@section('title', 'home')

@section('main-content')
  <h1 class="mb-5">Trains departed/departing today: {{ date('Y-m-d') }}</h1>
  <div class="row g-3 mt-2">
    @forelse ($today_trains as $train)
      <div class="col-6">
        <div @class([
          'card',
          'h-100',
          "text-decoration-line-through" => $train->deleted
        ])>

          <div class="card-body">
            <h5 class="card-title">
              From {{ $train->departure_station }} to {{ $train->arrival_station }}
            </h5>
            <ul class="list-group list-group-flush m-0 p-0">
              <li class="list-group-item">Departure at {{ $train->departure_time }} - Arrival at {{ $train->arrival_time }}</li>
              <li class="list-group-item">Train n: {{ $train->train_code }}</li>
              <li class="list-group-item">{{ $train->coaches }} coaches</li>
              @if(!$train->on_time)
              <li class="list-group-item">Delay</li>
              @endif
            </ul>
          
          </div>
        
        </div>
      </div>
    @empty
        <li>Sorry, no trains are departing today</li>
    @endforelse
    </div>
@endsection
