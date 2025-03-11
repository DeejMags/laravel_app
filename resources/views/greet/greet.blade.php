@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Hello, {{ $name }}!</h3>
        <a href="{{ route('greet.form') }}" 
            class="inline-block bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
            Back to Form
        </a>
    </div>
@endsection 