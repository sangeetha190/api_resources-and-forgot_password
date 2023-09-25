<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Reset Password Forgot Password</h2>
    @if (Session::has('message'))
        <div>
            {{ Session::get('message') }}
        </div>
    @endif
    <form action="{{ route('forgot.password.post') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email" />

        @if ($errors->has('email'))
            <span>{{ $errors->first('email') }}</span>
        @endif

        <button type="submit">Send Password Reset Link</button>

    </form>
</body>

</html>
