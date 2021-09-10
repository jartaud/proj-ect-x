<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 5</title>
    <style>
        #container {
            width: 100%;
            min-height: 100%;
        }

        #container .horizontal-centered {
            flex-wrap: wrap;
            display: flex;
            flex-direction: row;
            margin: 0;
            justify-content: center;
        }

    </style>
</head>

<body>
    <div id="container">
        <div class="horizontal-centered">
            <form method="POST" onsubmit="return false">
                <label for="">new button text</label>
                <input type="text" name="new_button_text" id="new_button_text">
                <button type="button"
                    onclick="var inputValue = document.querySelector('#new_button_text').value.trim(); if(inputValue) this.innerHTML=inputValue">
                    Click Me
                </button>
            </form>
        </div>
    </div>
</body>

</html>
