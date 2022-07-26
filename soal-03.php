<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input</label>
        <input type="text" name="input">
        <input type="submit" value="Kirim" name="kirim">
    </form>
    <?php

    if (isset($_POST['kirim'])) {
        $input = $_POST['input'];

        if ($input == "{}" || $input == "()" || $input == "[]") {
            echo "<b>Yes</b>";
        }
        elseif ($input == "{()}" || $input == "([])" || $input == "[{}]") {
            echo "<b>Yes</b>";
        }
        elseif ($input == "({})" || $input == "[()]" || $input == "{[]}") {
            echo "<b>Yes</b>";
        }
        elseif ($input == "[{()}]" || $input == "[({})]" || $input == "{[()]}") {
            echo "<b>Yes</b>";
        }
        elseif ($input == "([{}])" || $input == "{([])}" || $input == "[{[]}]") {
            echo "<b>Yes</b>";
        }

        else{
            echo "<b>No</b>";
        }
    }

    ?>
</body>
</html>