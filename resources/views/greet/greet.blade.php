@extends('layouts.app')

@section('content')
    <h3>Hello, {{ $name }}!</h3>
    <a href="{{ url('/') }}">Back to Form</a>
@endsection 