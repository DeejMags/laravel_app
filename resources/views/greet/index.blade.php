@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('greet') }}">
        @csrf
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Greet Me!</button>
    </form>
@endsection 