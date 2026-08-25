<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard - SOVEREIGN</title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            background-color: #080808;
            color: #e5e5e5;
            font-family: 'Jost', sans-serif;
            margin: 0;
            padding: 0;
        }
        .card-dark {
            background: #111111;
            border: 1px solid rgba(196, 160, 98, 0.25);
            padding: 28px;
        }
    </style>
</head>
<body>

    <!-- NAVBAR DASHBOARD -->
    <header style="background: rgba(8,8,8,0.95); border-bottom: 1px solid rgba(196, 160, 98, 0.2); padding: 16px 0;">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between; padding: 0 48px;">
            <a href="{{ url('/') }}" style="text-decoration: none; display: flex; flex-direction: column;">
                <div style="font-family: 'Cormorant', serif; font-size: 22px; letter-spacing: 0.4em; color: #c4a062; font-weight: 300; line-height: 1;">
                    SOVEREIGN
                </div>
                <div style="font-size: 8px; letter-spacing: 0.25em; color: #888888; text-transform: uppercase; margin-top: 4px;">
                    Client Portal
                </div>
            </a>

            <div style="display: flex; align-items: center; gap: 16px;">
                <span style="font-size: 11px; color: #aaa;">Welcome, <strong style="color: #c4a062;">{{ auth()->user()->name }}</strong></span>
                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-gold-outline" style="padding: 6px 14px; font-size: 10px; cursor: pointer; border: 1px solid #c4a062; color: #c4a062; background: none;">
                        LOGOUT
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- CONTENT DASHBOARD -->
    <section style="padding: 60px 24px;">
        <div class="container" style="max-width: 1000px; margin: 0 auto;">
            
            <div style="margin-bottom: 32px;">
                <span style="color: #c4a062; font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase;">PATRON ACCOUNT</span>
                <h1 style="font-family: 'Cormorant', serif; font-size: 36px; font-weight: 300; color: #fff; margin: 4px 0 0;">
                    Client Dashboard
                </h1>
            </div>

            <div class="card-dark" style="margin-bottom: 24px;">
                <h3 style="font-family: 'Cormorant', serif; font-size: 22px; color: #c4a062; margin-top: 0;">Account Profile</h3>
                <p style="font-size: 13px; color: #aaa; margin: 4px 0;"><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p style="font-size: 13px; color: #aaa; margin: 4px 0;"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p style="font-size: 13px; color: #aaa; margin: 4px 0;"><strong>Role:</strong> {{ ucfirst(auth()->user()->role ?? 'Customer') }}</p>
            </div>

            <div style="display: flex; gap: 16px;">
                <a href="{{ url('/') }}" class="btn-gold-outline" style="padding: 10px 20px; font-size: 11px; text-decoration: none; border: 1px solid #c4a062; color: #c4a062;">
                    &larr; BACK TO HOMEPAGE
                </a>
                <a href="{{ url('/articles-and-reviews') }}" class="btn-gold-outline" style="padding: 10px 20px; font-size: 11px; text-decoration: none; border: 1px solid #c4a062; color: #c4a062;">
                    LEAVE A REVIEW
                </a>
            </div>

        </div>
    </section>

</body>
</html>