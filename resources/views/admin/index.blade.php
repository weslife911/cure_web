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
    <h1>
        Users
    </h1>

    <div style="display: flex; flex-direction: column;">
        <table>
            <thead>
                <th>
                    #
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Field
                </th>
                <th>
                    Phone Number
                </th>
                <th>
                    Amount
                </th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            <a href="{{route('get.user', $user->id)}}">
                                {{$user->email}}
                            </a>
                        </td>
                        <td>
                            {{$user->field_of_study}}
                        </td>
                        <td>
                            {{$user->country_code}} {{$user->phone}}
                        </td>
                        <td>
                            {{$user->amount}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
            
    </div>
</body>
</html>