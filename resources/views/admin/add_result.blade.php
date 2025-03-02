<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://iili.io/32fZHiu.png">
    <title>Results</title>
</head>
<body>
    <form action="{{route('admin.results', $user->id)}}" method="post">
        @csrf
        <input type="text" name="score" placeholder="Score">
        <input type="text" name="subject" placeholder="Subject ID">
        <input type="submit" value="Submit">
    </form>

    <div>
        @forelse ($subjects as $subject)
            <p>
                {{$subject->id}} - {{$subject->subject}}
            </p>
        @empty
            <p>
                There are no subjects available
            </p>
        @endforelse
    </div>
</body>
</html>