<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <h1>Task List</h1>

    <p>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/greet') }}">Greet Page</a> |
        <a href="{{ route('tasks.create') }}">Create New Task</a>
    </p>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($tasks->count())
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->is_completed ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task) }}">View</a>
                            <a href="{{ route('tasks.edit', $task) }}">Edit</a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No tasks found.</p>
    @endif
</body>
</html>