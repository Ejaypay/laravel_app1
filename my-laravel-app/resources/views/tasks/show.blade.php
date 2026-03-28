@extends('layouts.app')

@section('content')
    <div class="rounded-xl bg-white p-8 shadow">
        <h2 class="text-3xl font-bold">Task Details</h2>

        <div class="mt-6 space-y-3">
            <p><strong>Title:</strong> {{ $task->title }}</p>
            <p><strong>Description:</strong> {{ $task->description ?: 'No description' }}</p>
            <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
        </div>

        <div class="mt-6 flex gap-2">
            <a href="{{ route('tasks.edit', $task) }}" class="rounded bg-indigo-600 px-4 py-2 text-white">Edit</a>
            <a href="{{ route('tasks.index') }}" class="rounded bg-slate-200 px-4 py-2">Back</a>
        </div>
    </div>
@endsection