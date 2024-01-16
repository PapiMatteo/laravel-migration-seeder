@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($trains as $train)
            <li>
                <h3>Treno numero {{ $train->train_code }}</h3>
                <p>{{ $train->date }}</p>
                <p>In partenza da {{ $train->departure_station }} delle {{ $train->departure_time }}</p>
                <p>Diretto a {{ $train->arrive_station }}</p>
            </li>
        @endforeach
    </ul>
@endsection