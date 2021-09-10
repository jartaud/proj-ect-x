<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 6</title>
    <link rel="stylesheet" href="css/question-6.css">
</head>
<body>
    <form action="" method="get" id="frm_click_me">
        <label for="new_button_text" class="form-label">new button text</label>
        <input type="text" name="new_button_text" id="new_button_text" class="form-input"
            onblur="if(!this.value.trim()) document.querySelector('#btn_click_me').innerHTML='Click Me'"
        >
        <button id="btn_click_me" type="button" onclick="var inputValue = document.querySelector('#new_button_text').value.trim(); if(inputValue) this.innerHTML=inputValue" class="corporate-button">
        Click Me
    </div>
</form>
</body>
</html>