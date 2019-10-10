<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <form action="/users" method="POST">
        @csrf
        <div>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <button type="submit">Create User</button>
        </div>
    </form>
</body>
</html>
