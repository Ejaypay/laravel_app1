@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl rounded-xl bg-white p-8 shadow">
        <h2 class="text-3xl font-bold">Create Task</h2>

        @if($errors->any())
            <ul class="mt-4 list-disc pl-5 text-red-600">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST" class="mt-6 space-y-4">
            @csrf

            <div>
                <label class="mb-2 block font-medium">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded border px-4 py-2">
            </div>

            <div>
                <label class="mb-2 block font-medium">Description</label>
                <textarea name="description" class="w-full rounded border px-4 py-2">{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="inline-flex items-center gap-2">
                    <input type="checkbox" name="is_completed" value="1" {{ old('is_completed') ? 'checked' : '' }}>
                    <span>Completed</span>
                </label>
            </div>

            <button type="submit" class="rounded bg-blue-600 px-4 py-2 text-white">Save Task</button>
        </form>
    </div>
@endsection