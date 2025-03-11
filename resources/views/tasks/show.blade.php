@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Task Details</h2>
        <div class="space-y-4">
            <div>
                <h3 class="text-lg font-medium text-gray-700">Title</h3>
                <p class="mt-1 text-gray-600">{{ $task->title }}</p>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-700">Description</h3>
                <p class="mt-1 text-gray-600">{{ $task->description }}</p>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-700">Status</h3>
                <span class="mt-1 px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                    {{ $task->is_completed ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $task->is_completed ? 'Completed' : 'Pending' }}
                </span>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-700">Created at</h3>
                <p class="mt-1 text-gray-600">{{ $task->created_at }}</p>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-700">Updated at</h3>
                <p class="mt-1 text-gray-600">{{ $task->updated_at }}</p>
            </div>
        </div>
        <div class="mt-8 flex space-x-4">
            <a href="{{ route('task.edit', $task) }}" 
                class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Edit
            </a>
            <a href="{{ route('task.index') }}" 
                class="bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                Back to List
            </a>
            <form action="{{ route('task.destroy', $task) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection 