<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="main">

        <p>Hello,</p>

        <p>You have received a new message from the contact form:{{ $mailData['name'] }}</p>
        <p>Email: {{ $mailData['email'] }}</p>
        <p>Room Name: {{ $mailData['room'] }}</p>
        <p>Message: {{ $mailData['message'] }}</p>

        <p>Regards,</p>
        <p>Your Website</p>
    </div>
</body>

</html>
