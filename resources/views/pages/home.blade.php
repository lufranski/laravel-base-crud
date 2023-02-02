@extends('layouts.main-layout')

@section('content')
    <div id="contit">

        <h1 id="tit">
            <span id="blue">
                U    
            </span>
    
            <span id="white">
                S   
            </span>
            Aints 
        </h1>
    </div>
    
    <div id="data">

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