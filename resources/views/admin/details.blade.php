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

       <div style="display: flex; flex-direction: column; padding: 5px; margin-top: 10px;">
            <a href="{{route('delete.user', $user->id)}}">
                Delete
            </a><br>
            <a href="{{route('admin.results', $user->id)}}">
                Add Results
            </a><br>
       </div>

    </form>
</body>
</html>