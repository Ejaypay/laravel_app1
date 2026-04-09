@extends('layouts.app')

@section('content')
    <div class="rounded-xl bg-white p-8 shadow">
        <div class="mb-6 flex items-center justify-between">
            <h2 class="text-3xl font-bold">Task List</h2>
            <a href="{{ route('tasks.create') }}" class="rounded bg-blue-600 px-4 py-2 text-white">
                Create Task
            </a>
        </div>

        @if(session('success'))
            <p class="mb-4 text-green-600">{{ session('success') }}</p>
        @endif

        @if($tasks->count())
            <div class="space-y-3">
                @foreach($tasks as $task)
                    <div class="rounded border p-4">
                        <h3 class="text-lg font-semibold">{{ $task->title }}</h3>
                        <p class="text-slate-600">{{ $task->description ?: 'No description' }}</p>
                        <p class="mt-2 text-sm">
                            Status:
                            <span class="{{ $task->is_completed ? 'text-green-600' : 'text-yellow-600' }}">
                                {{ $task->is_completed ? 'Completed' : 'Pending' }}
                            </span>
                        </p>

                        <div class="mt-4 flex gap-2">
                            <a href="{{ route('tasks.show', $task) }}" class="rounded bg-slate-200 px-3 py-2">View</a>
                            <a href="{{ route('tasks.edit', $task) }}" class="rounded bg-indigo-600 px-3 py-2 text-white">Edit</a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded bg-red-600 px-3 py-2 text-white">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No tasks found.</p>
        @endif
    </div>
@endsection