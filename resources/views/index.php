<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token;?>>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/../js/index.js" type="module"></script>
    <link rel="stylesheet" href="/../css/stilus.css">
    <title>Xu Jiyu</title>
</head>
<body>
    <header><h1>Tesztkérdések</h1></header>
    <nav><a href="/">tesztek</a></nav>
    <article><select name="kategoriak" id="kategoria"></select></article>

</body>
</html>