<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - SOVEREIGN</title>
    
    <!-- FAVICON CUSTOM -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}?v={{ time() }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            background-color: #080808 !important;
            color: #e5e5e5;
            font-family: 'Jost', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 440px;
            padding: 24px;
            box-sizing: border-box;
        }

        .auth-card {
            background: #111111;
            border: 1px solid rgba(196, 160, 98, 0.3);
            padding: 40px 36px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.9);
            position: relative;
        }

        .input-dark {
            width: 100%;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(196, 160, 98, 0.25);
            color: #ffffff;
            padding: 12px 14px;
            font-size: 13px;
            font-family: 'Jost', sans-serif;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input-dark:focus {
            border-color: var(--gold, #c4a062);
            box-shadow: 0 0 8px rgba(196, 160, 98, 0.3);
        }

        .btn-gold-fill {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #c4a062, #9a7b41);
            color: #080808;
            border: none;
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-gold-fill:hover {
            background: linear-gradient(135deg, #d4b072, #aa8b51);
            box-shadow: 0 0 12px rgba(196, 160, 98, 0.4);
        }
    </style>
</head>
<body>

    <div class="auth-wrapper">
        
        <!-- LOGO BRAND -->
        <div style="text-align: center; margin-bottom: 32px;">
            <a href="{{ url('/') }}" style="text-decoration: none; display: inline-flex; flex-direction: column; align-items: center;">
                <div style="font-family: 'Cormorant', serif; font-size: 30px; letter-spacing: 0.45em; color: var(--gold, #c4a062); font-weight: 300; line-height: 1;">
                    SOVEREIGN
                </div>
                <div style="font-size: 8px; letter-spacing: 0.3em; color: #888888; text-transform: uppercase; margin-top: 6px;">
                    Horlogerie de Prestige
                </div>
            </a>
        </div>

        <!-- CARD REGISTER -->
        <div class="auth-card">
            
            <div style="text-align: center; margin-bottom: 28px;">
                <span style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold, #c4a062); color: var(--gold, #c4a062); font-size: 9px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 12px; margin-bottom: 10px;">
                    NEW PATRON REGISTRATION
                </span>
                <h2 style="font-family: 'Cormorant', serif; font-size: 26px; color: #ffffff; font-weight: 300; margin: 0;">
                    Create Your Account
                </h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div style="margin-bottom: 18px;">
                    <label for="name" style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">
                        Full Name
                    </label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" 
                        class="input-dark" placeholder="e.g. M. Fabian">
                    @error('name')
                        <span style="color: #ff6b6b; font-size: 11px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div style="margin-bottom: 18px;">
                    <label for="email" style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">
                        Email Address
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" 
                        class="input-dark" placeholder="name@example.com">
                    @error('email')
                        <span style="color: #ff6b6b; font-size: 11px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div style="margin-bottom: 18px;">
                    <label for="password" style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">
                        Password
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" 
                        class="input-dark" placeholder="••••••••">
                    @error('password')
                        <span style="color: #ff6b6b; font-size: 11px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div style="margin-bottom: 24px;">
                    <label for="password_confirmation" style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">
                        Confirm Password
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" 
                        class="input-dark" placeholder="••••••••">
                    @error('password_confirmation')
                        <span style="color: #ff6b6b; font-size: 11px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-gold-fill">
                    REGISTER ACCOUNT
                </button>
            </form>

            <!-- Links -->
            <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid rgba(196,160,98,0.15); display: flex; justify-content: space-between; align-items: center; font-size: 11px;">
                <a href="{{ route('login') }}" style="color: var(--gold, #c4a062); text-decoration: none;">
                    Already registered? Log in
                </a>
                <a href="{{ url('/') }}" style="color: #666666; text-decoration: none;">
                    Home &rarr;
                </a>
            </div>

        </div>
    </div>

</body>
</html>