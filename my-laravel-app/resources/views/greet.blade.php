<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
</head>
<body>
    <h1>Welcome to Laravel!</h1>
    <p>This page is returned by GreetController using a Blade view.</p>
    <p><a href="{{ route('tasks.index') }}">Go to Tasks CRUD</a></p>
</body>
</html>