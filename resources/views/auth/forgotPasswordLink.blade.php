<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Reset Password</h2>
    <form action="{{ route('reset.password.post') }}" method="POST">
        @csrf
        {{-- Sending the Token --}}
        <input type="hidden" name="token" value="{{ $token }}" />

        {{-- Email --}}
        <input type="text" name="email" placeholder="Email" />
        @if ($errors->has('email'))
            <span>{{ $errors->first('email') }}</span>
        @endif

        {{-- Password --}}
        <input type="password" name="password" placeholder="password" />
        @if ($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif

        {{-- Password  Confirmation --}}
        <input type="password" name="password_confirmation" placeholder="password" />
        @if ($errors->has('password_confirmation'))
            <span>{{ $errors->first('password_confirmation') }}</span>
        @endif

        <button type="submit">Reset Password</button>
    </form>
</body>

</html>
