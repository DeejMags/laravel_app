@extends('layouts.app')

@section('content')
    <h2>Create Task</h2>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <p>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required>
        </p>
        <p>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3"></textarea>
        </p>
        <p>
            <label for="is_completed">Status:</label><br>
            <select id="is_completed" name="is_completed">
                <option value="0">Pending</option>
                <option value="1">Completed</option>
            </select>
        </p>
        <button type="submit">Create Task</button>
        <a href="{{ route('task.index') }}">Cancel</a>
    </form>
@endsection 