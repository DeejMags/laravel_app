@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>
    <form action="{{ route('task.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required>
        </p>
        <p>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3">{{ $task->description }}</textarea>
        </p>
        <p>
            <label for="is_completed">Status:</label><br>
            <select id="is_completed" name="is_completed">
                <option value="0" {{ !$task->is_completed ? 'selected' : '' }}>Pending</option>
                <option value="1" {{ $task->is_completed ? 'selected' : '' }}>Completed</option>
            </select>
        </p>
        <button type="submit">Update Task</button>
        <a href="{{ route('task.index') }}">Cancel</a>
    </form>
@endsection 