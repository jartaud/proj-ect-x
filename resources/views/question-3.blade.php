<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question 3</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div id="container">
        <div class="horizontal-centered">
            <h3>
                Using raw query (stdClass)
                <span>
                    <a href="http://sqlfiddle.com/#!17/f6c27/2/1" target="_blank" rel="noopener noreferrer">SQLFiddle</a>
                </span>
            </h3>
        </div>

        <div class="horizontal-centered">
            <table>
                <thead>
                    <th>number of users</th>
                    <th>client name</th>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->total }}</td>
                            <td>{{ $d->name }}</td>
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
                    <th>number of users</th>
                    <th>client name</th>
                </thead>

                <tbody>
                    @foreach ($shiningData as $sd)
                        <tr>
                            <td>{{ $sd->users_count }}</td>
                            <td>{{ $sd->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
