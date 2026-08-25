<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Portal Login - SOVEREIGN</title>
    
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
            /* BACKGROUND GAMBAR BACK.PNG DENGAN OVERLAY GELAP */
            background: linear-gradient(rgba(8, 8, 8, 0.75), rgba(8, 8, 8, 0.85)), 
                        url("{{ asset('images/back.png') }}") center/cover no-repeat fixed !important;
            color: #e5e5e5;
            font-family: 'Jost', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 440px;
            padding: 24px;
            box-sizing: border-box;
            position: relative;
            z-index: 2;
        }

        .login-card {
            background: rgba(17, 17, 17, 0.88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(196, 160, 98, 0.35);
            padding: 40px 36px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9);
            position: relative;
        }

        .input-dark {
            width: 100%;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.7);
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

    <div class="login-wrapper">
        
        <!-- LOGO BRAND -->
        <div style="text-align: center; margin-bottom: 32px;">
            <a href="{{ url('/') }}" style="text-decoration: none; display: inline-flex; flex-direction: column; align-items: center;">
                <div style="font-family: 'Cormorant', serif; font-size: 30px; letter-spacing: 0.45em; color: var(--gold, #c4a062); font-weight: 300; line-height: 1; text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
                    SOVEREIGN
                </div>
                <div style="font-size: 8px; letter-spacing: 0.3em; color: #aaaaaa; text-transform: uppercase; margin-top: 6px;">
                    Horlogerie de Prestige
                </div>
            </a>
        </div>

        <!-- CARD LOGIN -->
        <div class="login-card">
            
            <div style="text-align: center; margin-bottom: 28px;">
                <span style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold, #c4a062); color: var(--gold, #c4a062); font-size: 9px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 12px; margin-bottom: 10px;">
                    CLIENT PORTAL
                </span>
                <h2 style="font-family: 'Cormorant', serif; font-size: 26px; color: #ffffff; font-weight: 300; margin: 0;">
                    Sign In to Your Account
                </h2>
            </div>

            <!-- Session Status Alert -->
            @if (session('status'))
                <div style="background: rgba(196,160,98,0.15); border: 1px solid var(--gold, #c4a062); color: var(--gold, #c4a062); padding: 10px; font-size: 12px; text-align: center; margin-bottom: 20px;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div style="margin-bottom: 20px;">
                    <label for="email" style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">
                        Email Address
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                        class="input-dark" placeholder="name@example.com">
                    @error('email')
                        <span style="color: #ff6b6b; font-size: 11px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div style="margin-bottom: 20px;">
                    <label for="password" style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">
                        Password
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" 
                        class="input-dark" placeholder="••••••••">
                    @error('password')
                        <span style="color: #ff6b6b; font-size: 11px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; font-size: 11px;">
                    <label style="display: flex; align-items: center; gap: 6px; color: #888888; cursor: pointer;">
                        <input type="checkbox" name="remember" style="accent-color: var(--gold, #c4a062);">
                        <span>Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="color: var(--gold, #c4a062); text-decoration: none;">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-gold-fill">
                    LOG IN
                </button>
            </form>

            <!-- Return Home -->
            <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid rgba(196,160,98,0.15); text-align: center;">
                <a href="{{ url('/') }}" style="color: #888888; font-size: 11px; text-decoration: none; letter-spacing: 0.1em; transition: color 0.3s;">
                    &larr; Return to Homepage
                </a>
            </div>

        </div>
    </div>

</body>
</html>