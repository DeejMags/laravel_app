@extends('layouts.app')

@section('content')
    <h2>Task Details</h2>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
    <p><strong>Created at:</strong> {{ $task->created_at }}</p>
    <p><strong>Updated at:</strong> {{ $task->updated_at }}</p>

    <a href="{{ route('task.edit', $task) }}">Edit</a>
    <a href="{{ route('task.index') }}">Back to List</a>
    <form action="{{ route('task.destroy', $task) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection 