<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <th>
            <tr>
                <td>email</td>
            </tr>
        </th>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
