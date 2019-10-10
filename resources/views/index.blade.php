<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
    <div>
        @foreach ($users as $user)
            <div>{{ $user->name }}</div>
        @endforeach
    </div>

    @feature('my-feature')
    <div>
        <a href="/users/create">Create User</a>
    </div>
    @endfeature

</body>
</html>
