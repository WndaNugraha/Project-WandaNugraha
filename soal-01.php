<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input : </label>
        <input type="number" name="input[]">
        <br>
        <input type="submit" value="Submit" name="kirim">
    </form>


<?php
if (isset($_POST['kirim'])) {
    $input = $_POST['input'];

    $data_input = [1];

    // echo $data[0]."<br>".$data[1];

    foreach ($data_input as $data){
        echo $input=[$data];
    }

}




?>

