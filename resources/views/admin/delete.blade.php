<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="icon" href="https://iili.io/32fZHiu.png">
</head>
<body>
    <form action="{{route('delete.user', $user->id)}}" method="post">
        @csrf
        @method("DELETE")
        <p>
            Are you sure you want to delete {{$user->email}}
        </p>
        <input type="submit" value="Delete">
    </form>
</body>
</html>