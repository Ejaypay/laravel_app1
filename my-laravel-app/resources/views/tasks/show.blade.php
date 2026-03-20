<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>
</head>
<body>
    <h1>Task Details</h1>

    <p><a href="{{ route('tasks.index') }}">Back to Tasks</a></p>

    <p><strong>ID:</strong> {{ $task->id }}</p>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Completed:</strong> {{ $task->is_completed ? 'Yes' : 'No' }}</p>

    <p><a href="{{ route('tasks.edit', $task) }}">Edit Task</a></p>
</body>
</html>