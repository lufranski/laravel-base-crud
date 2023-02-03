@extends('layouts.main-layout')

@section('content')
    <h1 style="color:whitesmoke">Create new Saint</h1>

    <form method="POST" action="{{ route('saint.store') }}" >
      @csrf  
        <label for="name">Name</label>
        <input type="text" name="name">
        
        <label for="birth_place">Birth place</label>
        <input type="text" name="birth_place">
        
        <label for="sainthood_date">Sainthood Date</label>
        <input type="date" name="sainthood_date">
        
        <label for="miracles">Known Miracles</label>
        <input type="number" name="miracles">

        <input type="submit" value="CREATE">
    </form>
@endsection