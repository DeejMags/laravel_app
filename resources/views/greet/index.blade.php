@extends('layouts.app')

@section('content')
    <h2>Greet Form</h2>
    <form method="POST" action="{{ route('greet.submit') }}">
        @csrf
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Greet Me!</button>
    </form>
@endsection 