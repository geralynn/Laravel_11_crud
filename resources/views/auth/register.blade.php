<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
    <a href="{{ route('login') }}">Already have an account? Login</a>
</body>
</html>
