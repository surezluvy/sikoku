<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('daftar') }}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="text" name="role">
        <input type="password" name="password">
        <button type="submit" name="daftar">Register</button>
    </form>
</body>
</html>
