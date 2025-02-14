@extends('layouts.app')

@section('content')
    <h2>Tasks</h2>
    <a href="{{ route('task.create') }}">Create New Task</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" style="margin-top: 20px;">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->is_completed ? 'Completed' : 'Pending' }}</td>
                <td>
                    <a href="{{ route('task.show', $task) }}">View</a>
                    <a href="{{ route('task.edit', $task) }}">Edit</a>
                    <form action="{{ route('task.destroy', $task) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection 