<!DOCTYPE html>
<html>
<head>
    <title>Mike Fletes</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>

    <p>Correo electronico:{{ $mailData['email'] }}</p>

    <p>Asunto:{{ $mailData['subject'] }}</p>

    <p>{{ $mailData['body'] }}</p>
</body>
</html>