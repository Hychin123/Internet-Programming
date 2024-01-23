<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Mail</title>
</head>
<body>
    <p>
        Please click the following link to verify your email:
        <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
    </p>
    <p>
        If you didn't request this verification, you can ignore this email.
    </p>
</body>
</html>