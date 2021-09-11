<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question 2</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div id="container">
        <div class="horizontal-centered">
            <h3>Using raw query (stdClass)

                <span>
                    <a href="http://sqlfiddle.com/#!17/f6c27/2/0" target="_blank" rel="noopener noreferrer">SQLFiddle</a>
                </span>
            </h3>
        </div>
        
        <div class="horizontal-centered">
            <table>
                <thead>
                    <th>user’s name</th>
                    <th>user’s id</th>
                    <th>user’s client name</th>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->user_name }}</td>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->client_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="horizontal-centered">
            <h3>Using collecction</h3>
        </div>

        <div class="horizontal-centered">
            <table>
                <thead>
                    <th>user’s name</th>
                    <th>user’s id</th>
                    <th>user’s client name</th>
                </thead>

                <tbody>
                    @foreach ($shiningData as $sd)
                        <tr>
                            <td>{{ $sd->name }}</td>
                            <td>{{ $sd->id }}</td>
                            <td>{{ $sd->client->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
