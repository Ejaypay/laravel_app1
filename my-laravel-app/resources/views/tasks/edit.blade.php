<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <p><a href="{{ route('tasks.index') }}">Back to Tasks</a></p>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="{{ old('title', $task->title) }}">
        </div>

        <div>
            <label>Description:</label><br>
            <textarea name="description">{{ old('description', $task->description) }}</textarea>
        </div>

        <div>
            <label>
                <input type="checkbox" name="is_completed" value="1" {{ old('is_completed', $task->is_completed) ? 'checked' : '' }}>
                Completed
            </label>
        </div>

        <button type="submit">Update Task</button>
    </form>
</body>
</html>