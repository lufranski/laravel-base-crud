@extends('layouts.main-layout')

@section('content')
    <h1> USaints: </h1>
    <div>

        <ul>
            @foreach ($saints as $saint)
                
                <li>
                    <a href="/saint/{{ $saint -> id }}">

                        <h4>
        
                            St. {{$saint -> name}} 
                        </h4>
                        <h6>
        
                            known Miracles: {{$saint -> miracles}}
                        </h6>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection