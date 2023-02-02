@extends('layouts.main-layout')

@section('content')
    
    <div class="bio">
        <h1>
            Saint {{ $saint -> name }} from {{ $saint -> birth_place }}
        </h1>

        <h4>
            Sainthood Date: {{ $saint -> sainthood_date }}
        </h4>

        <h4>
            known Miracles: {{ $saint -> miracles }}
        </h4>
    </div>
@endsection