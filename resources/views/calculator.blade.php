<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="sum" method="post">
        @csrf
        <label>A</label>
        <input type="text" name="a">
        <br>
        <label>B</label>
        <input type="text" name="b">
        <br>
        <button type="submit">Somar</button>
    </form>
</body>
</html>

