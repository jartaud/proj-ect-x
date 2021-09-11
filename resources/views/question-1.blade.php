<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Question 1</title>
        <style>
            html, body {
    height: 100%;
}
body {
    margin: 0;
}
.flex-container {
    height: 100%;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.row {
    width: auto;
}
        </style>
    </head>
    <body>
        <div class="flex-container">
            <div id="app" class="row">
                <unordered-list-component />
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
