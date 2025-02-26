<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CA Results for {{Auth::user()->name}}</title>
    <link rel="stylesheet" href="{{public_path('/css/bootstrap.min.css')}}">
</head>
<body>
    
    <div class="container mt-5">
        <div class="d-flex flex-row">
            <div class="p-2">
                <p>
                    THE CURE FOUNDATION
                </p>
                <p>
                    NAME: {{strtoupper(Auth::user()->name)}}
                </p>
            </div>
            <div class="p-2">
                
                <p>
                    FIELD: {{Auth::user()->field_of_study}}
                </p>
                <p>
                    Printed Date: {{date("d M, Y")}}
                </p>
            </div>
        </div>

        <h2 class="mb-4">CA Results</h2>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Subject</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
    
                @if ($result->user_id == Auth::user()->id)
                <tr>
                    <td>
                        {{$result->subject->subject}}
                    </td>
                    <td>
                        {{$result->score}}
                    </td>
                </tr>
                @endif
    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>