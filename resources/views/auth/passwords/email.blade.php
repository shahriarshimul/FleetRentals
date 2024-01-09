<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <!-- Add your CSS styles or include external stylesheets here if needed -->
</head>
<body>
    <div>
        <h2>Password Reset Request</h2>

        @if(session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <p>Dear user,</p>

        <p>You are receiving this email because we received a password reset request for your account.</p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

            @error('email')
                <div>{{ $message }}</div>
            @enderror

            <button type="submit">Send Password Reset Link</button>
        </form>

        <p>If you did not request a password reset, no further action is required.</p>
        <p>This password reset link is valid for the next {{ config('auth.passwords.' . config('auth.defaults.passwords') . '.expire') }} minutes.</p>

        <p>Thank you,</p>
        <p>Your Application Team</p>

        <p><strong>Note:</strong> If you don't see this email in your inbox, please check your spam or junk folder.</p>
    </div>
</body>
</html>
