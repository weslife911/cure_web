<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="icon" href="{{asset('/images/logo/logo.png')}}">
</head>
<body>

    <strong>
        {{session("status")}}
    </strong>

    <h1>
        User
    </h1>
    <form action="{{route('update.user', $user->id)}}" method="post">
        @csrf

        <div>
        <input type="number" value="{{$user->amount}}" name="amount">
        <input type="submit" value="Update">
        </div>

        <a href="{{route('delete.user', $user->id)}}">
            Delete
        </a>
        <a href="{{route('admin.results', $user->id)}}">
            Add Results
        </a>

    </form>
</body>
</html>