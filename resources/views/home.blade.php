<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOVEREIGN - Horlogerie de Prestige</title>
  
  <!-- FAVICON CUSTOM -->
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}?v={{ time() }}">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
  
  <!-- External CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    /* Hover effect untuk kartu sertifikat yang bisa diklik */
    .cert-card-clickable {
      transition: all 0.3s ease;
      cursor: pointer;
    }
    .cert-card-clickable:hover {
      background: rgba(196,160,98,0.08);
      border-left-color: var(--gold) !important;
      transform: translateY(-2px);
    }

    /* Style CSS untuk Google Maps agar selaras dengan tema gelap */
    .dark-google-map iframe {
      filter: grayscale(100%) invert(92%) contrast(120%);
      transition: filter 0.4s ease;
    }
    .dark-google-map:hover iframe {
      filter: grayscale(20%) invert(0%) contrast(100%);
    }

    /* Team Card Hover Effect */
    .team-card {
      background: var(--bg-card);
      border: 1px solid var(--border-gold);
      transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .team-card:hover {
      transform: translateY(-4px);
      border-color: var(--gold);
    }

    /* Article Card Hover Effect */
    .article-card {
      transition: transform 0.3s ease;
    }
    .article-card:hover {
      transform: translateY(-4px);
    }

    /* CSS untuk Toggle Detail Spesifikasi Jam */
    .watch-details {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-out, padding 0.5s ease-out;
      opacity: 0;
    }
    .watch-details.active {
      max-height: 1000px;
      opacity: 1;
      padding-top: 20px;
      padding-bottom: 10px;
      border-top: 1px solid rgba(196,160,98,0.15);
      margin-top: 20px;
    }
    .chevron-icon {
      transition: transform 0.3s ease;
    }
    .chevron-icon.rotate {
      transform: rotate(180deg);
    }

    /* ===================================================
       RESPONSIVE IPAD PRO & TABLET (769px - 1024px)
       =================================================== */
    @media (min-width: 769px) and (max-width: 1024px) {
      .container {
        padding-left: 32px !important;
        padding-right: 32px !important;
      }

      header .container {
        padding: 0 32px !important;
      }

      #home {
        padding-top: 160px !important;
        min-height: auto !important;
        padding-bottom: 80px !important;
      }

      #home h1 {
        font-size: 54px !important;
        line-height: 1.1 !important;
      }

      .value-strip-grid {
        grid-template-columns: repeat(3, 1fr) !important;
      }

      .value-strip-item {
        padding: 24px 16px !important;
      }

      .about-grid,
      .team-grid {
        grid-template-columns: 1fr !important;
        gap: 48px !important;
      }

      .collections-grid,
      .why-grid,
      .cert-grid,
      .blog-grid,
      .showroom-grid,
      .footer-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 24px !important;
      }
    }

    /* ===================================================
       RESPONSIVE MOBILE / HP (≤ 768px)
       =================================================== */
    @media (max-width: 768px) {
      .container {
        padding-left: 20px !important;
        padding-right: 20px !important;
      }

      header .container {
        padding: 0 20px !important;
      }

      #home {
        padding-top: 140px !important;
        padding-bottom: 60px !important;
      }

      #home h1 {
        font-size: 38px !important;
        line-height: 1.15 !important;
        margin-bottom: 20px !important;
      }

      #home div[style*="display: flex; gap: 16px;"] {
        flex-direction: column !important;
        gap: 12px !important;
        width: 100% !important;
      }

      #home button {
        width: 100% !important;
        text-align: center !important;
      }

      #home div[style*="position: absolute; right: 32px; bottom: 40px;"] {
        display: none !important;
      }

      .value-strip-grid {
        grid-template-columns: repeat(2, 1fr) !important;
      }

      .value-strip-item {
        border-right: none !important;
        border-bottom: 1px solid rgba(196,160,98,0.12) !important;
        padding: 20px 8px !important;
      }

      .about-grid,
      .team-grid,
      .collections-grid,
      .why-grid,
      .cert-grid,
      .blog-grid,
      .showroom-grid,
      .footer-grid,
      .form-grid {
        grid-template-columns: 1fr !important;
        gap: 24px !important;
      }

      .contact-form-pad {
        padding: 28px 20px !important;
      }

      .dark-google-map {
        height: 280px !important;
      }
    }
  </style>
</head>
<body>

  <!-- PRELOADER -->
  <div id="preloader">
    <div class="loader-content">
      <div class="loader-brand">SOVEREIGN</div>
      <div class="loader-sub">Horlogerie de Prestige</div>
      <div class="loader-bar-container">
        <div class="loader-bar"></div>
      </div>
    </div>
  </div>

  <!-- NAVBAR MELAYANG (LEBIH TIPIS / COMPACT) -->
<header id="navbar" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background: rgba(8, 8, 8, 0.92); backdrop-filter: blur(8px); border-bottom: 1px solid rgba(196,160,98,0.15); padding: 10px 0;">
  <div class="container" style="display: flex; align-items: center; justify-content: space-between; padding: 0 48px;">
    
    <!-- LOGO KIRI (UKURAN DIPERKECIL) -->
    <a href="{{ url('/') }}" style="text-decoration: none; display: flex; flex-direction: column; align-items: flex-start;">
      <div style="font-family: 'Cormorant', serif; font-size: 20px; letter-spacing: 0.4em; color: var(--gold); font-weight: 300; line-height: 1;">
        SOVEREIGN
      </div>
      <div style="font-size: 7px; letter-spacing: 0.25em; color: var(--text-dim); text-transform: uppercase; margin-top: 3px;">
        Horlogerie de Prestige
      </div>
    </a>

   <!-- MENU NAVIGASI KANAN -->
    <nav class="hidden-mobile" style="display: flex; align-items: center; gap: 20px;">
      <button class="nav-btn" onclick="scrollToId('home')" style="font-size: 11px;">HOME</button>
      <button class="nav-btn" onclick="scrollToId('about')" style="font-size: 11px;">ABOUT</button>
      <button class="nav-btn" onclick="scrollToId('collections')" style="font-size: 11px;">COLLECTIONS</button>
      <button class="nav-btn" onclick="scrollToId('why-us')" style="font-size: 11px;">WHY US</button>
      <button class="nav-btn" onclick="scrollToId('contact')" style="font-size: 11px;">CONTACT</button>

      <!-- Dynamic Auth Area -->
      @auth
        <div style="display: flex; align-items: center; gap: 10px; background: rgba(196,160,98,0.06); border: 1px solid rgba(196,160,98,0.25); padding: 3px 10px; border-radius: 2px;">
          @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" style="color: var(--gold); font-size: 10px; letter-spacing: 0.12em; text-decoration: none; font-weight: 500; text-transform: uppercase;">
              ADMIN DASHBOARD
            </a>
          @else
            <a href="{{ url('/dashboard') }}" style="color: var(--text-main); font-size: 10px; letter-spacing: 0.12em; text-decoration: none; font-weight: 500; text-transform: uppercase;">
              DASHBOARD
            </a>
          @endif

          <span style="color: rgba(196,160,98,0.3); font-size: 11px;">|</span>

          <form method="POST" action="{{ route('logout') }}" style="display: inline; margin: 0;">
            @csrf
            <button type="submit" style="background: none; border: none; color: #888; font-size: 10px; letter-spacing: 0.12em; cursor: pointer; text-transform: uppercase; padding: 0; font-family: inherit;">
              LOGOUT
            </button>
          </form>
        </div>
      @else
        <a href="{{ route('login') }}" class="nav-btn" style="text-decoration: none; font-size: 11px;">
          LOGIN
        </a>
      @endauth

      <button onclick="openAppointmentModal('General Showroom Visit')" class="btn-gold-outline" style="padding: 6px 14px; font-size: 10px; letter-spacing: 0.12em; border-color: var(--gold); cursor: pointer;">
        APPOINTMENT
      </button>
    </nav>

    <button id="mobile-toggle" class="mobile-menu-btn" style="background: none; border: none; cursor: pointer; color: var(--text-main);">
      <i data-lucide="menu" id="menu-icon"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" style="display: none; background: rgba(8,8,8,0.98); border-top: 1px solid var(--border-gold); padding: 20px;">
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('home')">HOME</button>
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('about')">ABOUT</button>
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('team')">LEADERSHIP</button>
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('collections')">COLLECTIONS</button>
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('why-us')">WHY US</button>
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('blog')">TESTIMONIALS</button>
    <button class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0;" onclick="scrollToId('contact')">CONTACT</button>

    @auth
      @if(auth()->user()->role === 'admin')
        <a href="{{ route('admin.dashboard') }}" class="btn-gold-outline" style="display: block; width: 100%; text-align: center; margin-top: 10px; padding: 8px 0; text-decoration: none;">
          ADMIN DASHBOARD
        </a>
      @else
        <a href="{{ url('/dashboard') }}" class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0; text-decoration: none;">
          DASHBOARD
        </a>
      @endif

      <form method="POST" action="{{ route('logout') }}" style="margin-top: 10px;">
        @csrf
        <button type="submit" class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0; background: none; border: none;">
          LOGOUT
        </button>
      </form>
    @else
      <a href="{{ route('login') }}" class="nav-btn" style="display: block; width: 100%; text-align: left; padding: 8px 0; text-decoration: none;">
        LOGIN
      </a>
    @endauth

    <button onclick="openAppointmentModal('General Showroom Visit')" class="btn-gold-outline" style="display: block; width: 100%; text-align: center; margin-top: 10px; padding: 8px 0;">APPOINTMENT</button>
  </div>
</header>

  <!-- HERO SECTION -->
  <section id="home" style="position: relative; min-height: 100vh; display: flex; align-items: center; overflow: hidden; padding-top: 180px; padding-bottom: 60px;">
    <div style="position: absolute; inset: 0;">
      <img src="{{ asset('images/hero.png') }}" alt="Sovereign luxury watch" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.45;">
      <div style="position: absolute; inset: 0; background: linear-gradient(to right, #080808 20%, rgba(8,8,8,0.6) 60%, transparent 100%);"></div>
    </div>

    <div class="container" style="position: relative; z-index: 2; width: 100%; padding-left: 48px;">
      
      @if(session('success'))
        <div id="flash-success-alert" style="position: relative; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); padding: 16px 40px 16px 16px; margin-bottom: 24px; max-width: 500px; font-size: 13px; line-height: 1.6; transition: opacity 0.5s ease;">
          <span>{{ session('success') }}</span>
          <button onclick="dismissSuccessAlert()" style="position: absolute; top: 12px; right: 12px; background: none; border: none; color: var(--gold); font-size: 18px; cursor: pointer; line-height: 1;">&times;</button>
        </div>

        <script>
          function dismissSuccessAlert() {
            const alertBox = document.getElementById('flash-success-alert');
            if (alertBox) {
              alertBox.style.opacity = '0';
              setTimeout(() => { alertBox.style.display = 'none'; }, 500);
            }
          }

          setTimeout(() => {
            dismissSuccessAlert();
          }, 5000);
        </script>
      @endif

      @if(session('error'))
        <div id="flash-error-alert" style="position: relative; background: rgba(220,53,69,0.15); border: 1px solid #dc3545; color: #dc3545; padding: 16px 40px 16px 16px; margin-bottom: 24px; max-width: 500px; font-size: 13px; line-height: 1.6; transition: opacity 0.5s ease;">
          <span>{{ session('error') }}</span>
          <button onclick="this.parentElement.style.display='none'" style="position: absolute; top: 12px; right: 12px; background: none; border: none; color: #dc3545; font-size: 18px; cursor: pointer; line-height: 1;">&times;</button>
        </div>
      @endif

      <p style="color: var(--gold); font-size: 10px; letter-spacing: 0.45em; text-transform: uppercase; margin-bottom: 24px; opacity: 0.85;">
        EST. 2008 · Bandung, INDONESIA
      </p>
      <h1 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(52px, 7vw, 92px); line-height: 1.05; color: var(--text-main); margin: 0 0 28px;">
        Timeless<br>
        <em style="color: var(--gold); font-style: italic;">Elegance</em><br>
        in Every<br>
        Second.
      </h1>
      <p style="color: var(--text-muted); font-size: 13px; font-weight: 300; line-height: 1.8; max-width: 400px; margin-bottom: 40px; letter-spacing: 0.02em;">
        Luxury timepieces encapsulating precision, artistry, and heritage — crafted for those who value life's every moment.
      </p>
      <div style="display: flex; gap: 16px;">
        <button onclick="scrollToId('collections')" class="btn-gold-fill" style="padding: 14px 32px; font-size: 11px; cursor: pointer;">VIEW COLLECTIONS</button>
        <button onclick="openAppointmentModal('General Showroom Visit')" class="btn-dark-outline" style="padding: 14px 32px; font-size: 11px; cursor: pointer;">REQUEST APPOINTMENT</button>
      </div>
    </div>

    <div style="position: absolute; right: 32px; bottom: 40px; display: flex; flex-direction: column; align-items: center; gap: 8px; opacity: 0.4;">
      <span style="font-size: 9px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--text-muted); writing-mode: vertical-rl;">Scroll</span>
      <div style="width: 1px; height: 48px; background: linear-gradient(to bottom, var(--gold), transparent);"></div>
    </div>
  </section>

  <!-- VALUE STRIP (TELAH DITAMBAHKAN STATISTIK JUMLAH KARYAWAN) -->
  <div style="border-top: 1px solid var(--border-gold); border-bottom: 1px solid var(--border-gold); background: var(--bg-card);">
    <div class="container value-strip-grid" style="display: grid; grid-template-columns: repeat(5, 1fr);">
      <div class="value-strip-item" style="text-align: center; padding: 28px 12px; border-right: 1px solid rgba(196,160,98,0.12);">
        <div style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300;">17 Years</div>
        <div style="font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-top: 6px;">Craftsmanship & Heritage</div>
      </div>
      <div class="value-strip-item" style="text-align: center; padding: 28px 12px; border-right: 1px solid rgba(196,160,98,0.12);">
        <div style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300;">150+</div>
        <div style="font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-top: 6px;">Master Craftsmen & Staff</div>
      </div>
      <div class="value-strip-item" style="text-align: center; padding: 28px 12px; border-right: 1px solid rgba(196,160,98,0.12);">
        <div style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300;">12,000+</div>
        <div style="font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-top: 6px;">Satisfied Clients</div>
      </div>
      <div class="value-strip-item" style="text-align: center; padding: 28px 12px; border-right: 1px solid rgba(196,160,98,0.12);">
        <div style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300;">3 Cities</div>
        <div style="font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-top: 6px;">Premium Showrooms</div>
      </div>
      <div class="value-strip-item" style="text-align: center; padding: 28px 12px;">
        <div style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300;">5 Years</div>
        <div style="font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-top: 6px;">Official Warranty</div>
      </div>
    </div>
  </div>

  <!-- ABOUT -->
  <section id="about" style="padding: 120px 24px;">
    <div class="container">
      <div class="about-grid">
        <div>
          <p style="color: var(--gold); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 20px;">About Us</p>
          <h2 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 4vw, 52px); line-height: 1.15; color: var(--text-main); margin: 0 0 32px;">
            A Legacy of Artistry<br>
            <em style="color: var(--gold); font-style: italic;">Since 2008</em>
          </h2>
          <div style="display: flex; flex-direction: column; gap: 18px; color: var(--text-muted); font-size: 14px; line-height: 1.85; font-weight: 300;">
            <p>Sovereign was born from a single conviction: that Indonesia deserves a world-class luxury watch brand standing shoulder-to-shoulder with legendary Swiss and Japanese watchmakers. Founded in 2008 by CEO and Master Horloger <strong>M Fabiah Khusyaeri</strong>, the company began its journey in a flagship atelier in Dago, Bandung.</p>
            <p>Over 17 years, under the visionary leadership of M Fabiah Khusyaeri, we have built an unshakeable reputation — supported by over 150 dedicated horlogers, master craftsmen, and brand specialists — handcrafting every timepiece by uniting certified Swiss and Japanese movements with aesthetics inspired by the rich cultural heritage of the Indonesian archipelago.</p>
            <p>Every Sovereign timepiece is a manifesto: true luxury is not about oversized logos, but about unseen precision, meticulously chosen materials, and the time spent perfecting something crafted to endure for generations.</p>
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-top: 40px;">
            <div style="border-top: 1px solid rgba(196,160,98,0.25); padding-top: 20px;">
              <div style="font-family: 'Cormorant', serif; font-size: 18px; color: var(--gold); margin-bottom: 8px;">Vision</div>
              <p style="font-size: 12px; color: var(--text-dim); line-height: 1.7; font-weight: 300;">To become Indonesia's globally recognized and respected luxury timepiece brand.</p>
            </div>
            <div style="border-top: 1px solid rgba(196,160,98,0.25); padding-top: 20px;">
              <div style="font-family: 'Cormorant', serif; font-size: 18px; color: var(--gold); margin-bottom: 8px;">Mission</div>
              <p style="font-size: 12px; color: var(--text-dim); line-height: 1.7; font-weight: 300;">To create timepieces of the highest standard that harmonize technical precision with artistic elegance.</p>
            </div>
          </div>
        </div>

        <div style="position: relative;">
          <div style="aspect-ratio: 3/4; overflow: hidden; background: #111;">
            <img src="{{ asset('images/aboutus.png') }}" alt="Sovereign watchmaker" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(8,8,8,0.5) 0%, transparent 60%);"></div>
          </div>
          <div style="position: absolute; bottom: -32px; left: -32px; background: #111111; border: 1px solid rgba(196,160,98,0.25); padding: 28px 32px;">
            <div style="font-family: 'Cormorant', serif; font-size: 48px; color: var(--gold); font-weight: 300; line-height: 1;">17+</div>
            <div style="font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-top: 6px;">Years Dedicated<br>to Excellence</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION TIM DAN ANGGOTA PERUSAHAAN (KEY EXECUTIVES & WORKFORCE) -->
  <section id="team" style="background: var(--bg-dark); padding: 100px 24px; border-top: 1px solid var(--border-gold);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <p style="color: var(--gold); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 16px;">The Craftsmen & Leadership</p>
        <h2 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 4vw, 52px); color: var(--text-main); margin: 0;">
          Pillars of <em style="color: var(--gold); font-style: italic;">Sovereign</em>
        </h2>
        <p style="font-size: 13px; color: var(--text-muted); font-weight: 300; max-width: 560px; margin: 16px auto 0; line-height: 1.8;">
         A team of executives and leading experts who dedicate a vision of precision and high aesthetics to every Sovereign masterpiece.
        </p>

        <!-- INFORMASI JUMLAH TOTAL KARYAWAN -->
        <div style="display: inline-flex; align-items: center; gap: 12px; border: 1px solid rgba(196,160,98,0.25); background: rgba(196,160,98,0.05); padding: 8px 20px; margin-top: 24px;">
          <i data-lucide="users" style="width: 14px; height: 14px; color: var(--gold);"></i>
          <span style="font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--gold); font-weight: 500;">
            Total Workforce: 150+ Certified Horlogers & Master Craftsmen
          </span>
        </div>
      </div>

      <div class="team-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;">
        <!-- CEO / Founder -->
        <div class="team-card" style="padding: 32px; text-align: center;">
          <div style="width: 130px; height: 130px; border-radius: 50%; overflow: hidden; margin: 0 auto 24px; border: 2px solid var(--gold); background: #111;">
            <img src="{{ asset('images/fa.png') }}" alt="M Fabiah Khusyaeri" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 24px; color: var(--text-main); margin-bottom: 4px; font-weight: 400;">M Fabiah Khusyaeri</h3>
          <p style="font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--gold); margin-bottom: 16px;">CEO & Master Horloger</p>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.7; font-weight: 300;">
            Founder of Sovereign leading the strategic vision of the company and the development of mechanical timepiece innovations to international standards.
          </p>
        </div>

        <!-- Head of Design -->
        <div class="team-card" style="padding: 32px; text-align: center;">
          <div style="width: 130px; height: 130px; border-radius: 50%; overflow: hidden; margin: 0 auto 24px; border: 2px solid var(--border-gold); background: #111;">
            <img src="{{ asset('images/Fikri Fadilah.png') }}" alt="Fikri Fadilah" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 24px; color: var(--text-main); margin-bottom: 4px; font-weight: 400;">Fikri Fadilah</h3>
          <p style="font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--gold); margin-bottom: 16px;">Head of Aesthetics & Dial Design</p>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.7; font-weight: 300;">
            Head of aesthetics responsible for designing visual elements, case proportions, and luxurious details for every watch dial collection.
          </p>
        </div>

        <!-- Chief Quality Officer -->
        <div class="team-card" style="padding: 32px; text-align: center;">
          <div style="width: 130px; height: 130px; border-radius: 50%; overflow: hidden; margin: 0 auto 24px; border: 2px solid var(--border-gold); background: #111;">
            <img src="{{ asset('images/Ahmad Jaelani.png') }}" alt="Ahmad Jaelani" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 24px; color: var(--text-main); margin-bottom: 4px; font-weight: 400;">Ahmad Jaelani</h3>
          <p style="font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--gold); margin-bottom: 16px;">Chief Technical & Quality Director</p>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.7; font-weight: 300;">
            Technical quality control director ensuring movement accuracy calibration and compliance with COSC and JIS B 7023 certification standards.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- COLLECTIONS -->
  <section id="collections" style="background: var(--bg-dark); padding: 120px 24px;">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 64px; flex-wrap: wrap; gap: 24px;">
        <div>
          <p style="color: var(--gold); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 20px;">Our Collections</p>
          <h2 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 4vw, 52px); line-height: 1.15; color: var(--text-main); margin: 0;">
            Every Timepiece,<br>
            <em style="color: var(--gold); font-style: italic;">A Masterpiece</em>
          </h2>
        </div>
        <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; max-width: 300px; font-weight: 300;">
          From timeless classics to rare limited editions — discover the timepiece that reflects your distinct character.
        </p>
      </div>

      <!-- Watch Cards Grid -->
      <div class="collections-grid">
        
        <!-- Watch 1 -->
        <div class="card-collection" style="background: var(--bg-card); border: 1px solid var(--border-gold);">
          <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
            <img src="{{ asset('images/imperialclassic.png') }}" alt="Imperial Classic" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: var(--gold); color: var(--bg-dark); font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; padding: 6px 12px;">Bestseller</div>
          </div>
          <div style="padding: 24px;">
            <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 6px;">Classic Series</p>
            <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main); margin-bottom: 4px;">Imperial Classic</h3>
            <p style="font-size: 14px; color: var(--gold); letter-spacing: 0.04em; margin-bottom: 12px;">Rp 48,500,000</p>
            
            <button onclick="toggleWatchDetails('details-imperial', 'icon-imperial')" style="display: flex; justify-content: space-between; align-items: center; width: 100%; background: none; border: none; border-top: 1px solid rgba(196,160,98,0.15); color: var(--text-muted); font-size: 11px; letter-spacing: 0.1em; padding: 12px 0; cursor: pointer;">
              VIEW SPECIFICATIONS
              <i data-lucide="chevron-down" id="icon-imperial" class="chevron-icon" style="width: 14px; height: 14px; color: var(--gold);"></i>
            </button>
            <div id="details-imperial" class="watch-details">
              <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: var(--text-dim); line-height: 1.9; font-weight: 300;">
                <li><strong style="color: var(--text-muted);">Caliber:</strong> Sovereign S-01 Automatic (COSC)</li>
                <li><strong style="color: var(--text-muted);">Case:</strong> 316L Stainless Steel, 39mm</li>
                <li><strong style="color: var(--text-muted);">Glass:</strong> Sapphire Crystal (Anti-Reflective)</li>
                <li><strong style="color: var(--text-muted);">Dial:</strong> Opaline Silver, Dauphine Hands</li>
                <li><strong style="color: var(--text-muted);">Water Resistance:</strong> 5 ATM (50 Meters)</li>
              </ul>
            </div>

            <button onclick="openPreorderModal('Imperial Classic')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer; margin-top: 12px;">PRE-ORDER / BOOK APPOINTMENT</button>
            <button onclick="openCertificateModal('Imperial Classic')" style="background: none; border: none; color: var(--gold); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
              View Included Certificate
            </button>
          </div>
        </div>

        <!-- Watch 2 -->
        <div class="card-collection" style="background: var(--bg-card); border: 1px solid var(--border-gold);">
          <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
            <img src="{{ asset('images/sovereignnoir.png') }}" alt="Sovereign Noir" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: var(--gold); color: var(--bg-dark); font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; padding: 6px 12px;">New</div>
          </div>
          <div style="padding: 24px;">
            <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 6px;">Classic Series</p>
            <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main); margin-bottom: 4px;">Sovereign Noir</h3>
            <p style="font-size: 14px; color: var(--gold); letter-spacing: 0.04em; margin-bottom: 12px;">Rp 62,000,000</p>
            
            <button onclick="toggleWatchDetails('details-noir', 'icon-noir')" style="display: flex; justify-content: space-between; align-items: center; width: 100%; background: none; border: none; border-top: 1px solid rgba(196,160,98,0.15); color: var(--text-muted); font-size: 11px; letter-spacing: 0.1em; padding: 12px 0; cursor: pointer;">
              VIEW SPECIFICATIONS
              <i data-lucide="chevron-down" id="icon-noir" class="chevron-icon" style="width: 14px; height: 14px; color: var(--gold);"></i>
            </button>
            <div id="details-noir" class="watch-details">
              <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: var(--text-dim); line-height: 1.9; font-weight: 300;">
                <li><strong style="color: var(--text-muted);">Caliber:</strong> Sovereign S-02 High-Beat Automatic</li>
                <li><strong style="color: var(--text-muted);">Case:</strong> DLC Black Coated Steel, 40mm</li>
                <li><strong style="color: var(--text-muted);">Glass:</strong> Sapphire Crystal (Smoke Tint)</li>
                <li><strong style="color: var(--text-muted);">Dial:</strong> Matte Black, Gold Accents</li>
                <li><strong style="color: var(--text-muted);">Water Resistance:</strong> 10 ATM (100 Meters)</li>
              </ul>
            </div>

            <button onclick="openPreorderModal('Sovereign Noir')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer; margin-top: 12px;">PRE-ORDER / BOOK APPOINTMENT</button>
            <button onclick="openCertificateModal('Sovereign Noir')" style="background: none; border: none; color: var(--gold); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
              View Included Certificate
            </button>
          </div>
        </div>

        <!-- Watch 3 -->
        <div class="card-collection" style="background: var(--bg-card); border: 1px solid var(--border-gold);">
          <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
            <img src="{{ asset('images/Meridian Gold (Limited).png') }}" alt="Meridian Gold" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: var(--gold); color: var(--bg-dark); font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; padding: 6px 12px;">Limited</div>
          </div>
          <div style="padding: 24px;">
            <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 6px;">Limited Edition</p>
            <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main); margin-bottom: 4px;">Meridian Gold</h3>
            <p style="font-size: 14px; color: var(--gold); letter-spacing: 0.04em; margin-bottom: 12px;">Rp 128,000,000</p>
            
            <button onclick="toggleWatchDetails('details-meridian', 'icon-meridian')" style="display: flex; justify-content: space-between; align-items: center; width: 100%; background: none; border: none; border-top: 1px solid rgba(196,160,98,0.15); color: var(--text-muted); font-size: 11px; letter-spacing: 0.1em; padding: 12px 0; cursor: pointer;">
              VIEW SPECIFICATIONS
              <i data-lucide="chevron-down" id="icon-meridian" class="chevron-icon" style="width: 14px; height: 14px; color: var(--gold);"></i>
            </button>
            <div id="details-meridian" class="watch-details">
              <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: var(--text-dim); line-height: 1.9; font-weight: 300;">
                <li><strong style="color: var(--text-muted);">Caliber:</strong> Sovereign S-03 In-House Manual</li>
                <li><strong style="color: var(--text-muted);">Case:</strong> 18K Rose Gold, 38mm</li>
                <li><strong style="color: var(--text-muted);">Glass:</strong> Box Sapphire Crystal</li>
                <li><strong style="color: var(--text-muted);">Dial:</strong> Guilloché Main, Limited 1/50</li>
                <li><strong style="color: var(--text-muted);">Water Resistance:</strong> 3 ATM (30 Meters)</li>
              </ul>
            </div>

            <button onclick="openPreorderModal('Meridian Gold')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer; margin-top: 12px;">PRE-ORDER / BOOK APPOINTMENT</button>
            <button onclick="openCertificateModal('Meridian Gold')" style="background: none; border: none; color: var(--gold); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
              View Included Certificate
            </button>
          </div>
        </div>

        <!-- Watch 4 -->
        <div class="card-collection" style="background: var(--bg-card); border: 1px solid var(--border-gold);">
          <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
            <img src="{{ asset('images/Chronos Prestige (Sport).png') }}" alt="Chronos Prestige" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: var(--gold); color: var(--bg-dark); font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; padding: 6px 12px;">Sport</div>
          </div>
          <div style="padding: 24px;">
            <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 6px;">Chronograph Series</p>
            <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main); margin-bottom: 4px;">Chronos Prestige</h3>
            <p style="font-size: 14px; color: var(--gold); letter-spacing: 0.04em; margin-bottom: 12px;">Rp 85,000,000</p>
            
            <button onclick="toggleWatchDetails('details-chronos', 'icon-chronos')" style="display: flex; justify-content: space-between; align-items: center; width: 100%; background: none; border: none; border-top: 1px solid rgba(196,160,98,0.15); color: var(--text-muted); font-size: 11px; letter-spacing: 0.1em; padding: 12px 0; cursor: pointer;">
              VIEW SPECIFICATIONS
              <i data-lucide="chevron-down" id="icon-chronos" class="chevron-icon" style="width: 14px; height: 14px; color: var(--gold);"></i>
            </button>
            <div id="details-chronos" class="watch-details">
              <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: var(--text-dim); line-height: 1.9; font-weight: 300;">
                <li><strong style="color: var(--text-muted);">Caliber:</strong> Sovereign C-01 Column-Wheel Automatic</li>
                <li><strong style="color: var(--text-muted);">Case:</strong> Grade 5 Titanium, 42mm</li>
                <li><strong style="color: var(--text-muted);">Glass:</strong> Flat Sapphire, AR Coating</li>
                <li><strong style="color: var(--text-muted);">Dial:</strong> Panda Layout, Tachymeter Scale</li>
                <li><strong style="color: var(--text-muted);">Water Resistance:</strong> 10 ATM (100 Meters)</li>
              </ul>
            </div>

            <button onclick="openPreorderModal('Chronos Prestige')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer; margin-top: 12px;">PRE-ORDER / BOOK APPOINTMENT</button>
            <button onclick="openCertificateModal('Chronos Prestige')" style="background: none; border: none; color: var(--gold); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
              View Included Certificate
            </button>
          </div>
        </div>

        <!-- Watch 5 -->
        <div class="card-collection" style="background: var(--bg-card); border: 1px solid var(--border-gold);">
          <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
            <img src="{{ asset('images/Aurelius Perpetuel (Exclusive).png') }}" alt="Aurelius Perpetuel" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: var(--gold); color: var(--bg-dark); font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; padding: 6px 12px;">Exclusive</div>
          </div>
          <div style="padding: 24px;">
            <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 6px;">Limited Edition</p>
            <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main); margin-bottom: 4px;">Aurelius Perpetuel</h3>
            <p style="font-size: 14px; color: var(--gold); letter-spacing: 0.04em; margin-bottom: 12px;">Rp 245,000,000</p>
            
            <button onclick="toggleWatchDetails('details-aurelius', 'icon-aurelius')" style="display: flex; justify-content: space-between; align-items: center; width: 100%; background: none; border: none; border-top: 1px solid rgba(196,160,98,0.15); color: var(--text-muted); font-size: 11px; letter-spacing: 0.1em; padding: 12px 0; cursor: pointer;">
              VIEW SPECIFICATIONS
              <i data-lucide="chevron-down" id="icon-aurelius" class="chevron-icon" style="width: 14px; height: 14px; color: var(--gold);"></i>
            </button>
            <div id="details-aurelius" class="watch-details">
              <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: var(--text-dim); line-height: 1.9; font-weight: 300;">
                <li><strong style="color: var(--text-muted);">Caliber:</strong> Sovereign G-01 Tourbillon Manual</li>
                <li><strong style="color: var(--text-muted);">Case:</strong> Platinum 950, 41mm</li>
                <li><strong style="color: var(--text-muted);">Glass:</strong> Box Sapphire Front & Back</li>
                <li><strong style="color: var(--text-muted);">Dial:</strong> Open-Heart Tourbillon at 6</li>
                <li><strong style="color: var(--text-muted);">Water Resistance:</strong> 3 ATM (30 Meters)</li>
              </ul>
            </div>

            <button onclick="openPreorderModal('Aurelius Perpetuel')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer; margin-top: 12px;">PRE-ORDER / BOOK APPOINTMENT</button>
            <button onclick="openCertificateModal('Aurelius Perpetuel')" style="background: none; border: none; color: var(--gold); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
              View Included Certificate
            </button>
          </div>
        </div>

        <!-- Watch 6 -->
        <div class="card-collection" style="background: var(--bg-card); border: 1px solid var(--border-gold);">
          <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
            <img src="{{ asset('images/Tempus Slate (Classic).png') }}" alt="Tempus Slate" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: var(--gold); color: var(--bg-dark); font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; padding: 6px 12px;">Classic</div>
          </div>
          <div style="padding: 24px;">
            <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 6px;">Classic Series</p>
            <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main); margin-bottom: 4px;">Tempus Slate</h3>
            <p style="font-size: 14px; color: var(--gold); letter-spacing: 0.04em; margin-bottom: 12px;">Rp 38,000,000</p>
            
            <button onclick="toggleWatchDetails('details-tempus', 'icon-tempus')" style="display: flex; justify-content: space-between; align-items: center; width: 100%; background: none; border: none; border-top: 1px solid rgba(196,160,98,0.15); color: var(--text-muted); font-size: 11px; letter-spacing: 0.1em; padding: 12px 0; cursor: pointer;">
              VIEW SPECIFICATIONS
              <i data-lucide="chevron-down" id="icon-tempus" class="chevron-icon" style="width: 14px; height: 14px; color: var(--gold);"></i>
            </button>
            <div id="details-tempus" class="watch-details">
              <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: var(--text-dim); line-height: 1.9; font-weight: 300;">
                <li><strong style="color: var(--text-muted);">Caliber:</strong> Sovereign S-01 Automatic (COSC)</li>
                <li><strong style="color: var(--text-muted);">Case:</strong> 316L Stainless Steel, 39mm</li>
                <li><strong style="color: var(--text-muted);">Glass:</strong> Sapphire Crystal (Anti-Reflective)</li>
                <li><strong style="color: var(--text-muted);">Dial:</strong> Slate Grey, Sunray Finish</li>
                <li><strong style="color: var(--text-muted);">Water Resistance:</strong> 5 ATM (50 Meters)</li>
              </ul>
            </div>

            <button onclick="openPreorderModal('Tempus Slate')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer; margin-top: 12px;">PRE-ORDER / BOOK APPOINTMENT</button>
            <button onclick="openCertificateModal('Tempus Slate')" style="background: none; border: none; color: var(--gold); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
              View Included Certificate
            </button>
          </div>
        </div>

      </div>

      <!-- TOMBOL MENGARAH KE KATALOG SHOP (/shop) -->
      <div style="text-align: center; margin-top: 56px;">
        <a href="{{ url('/shop') }}" class="btn-gold-outline" style="padding: 16px 48px; text-decoration: none; display: inline-block;">View All Collections</a>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section id="why-us" style="position: relative; padding: 120px 24px; overflow: hidden; background: var(--bg-card);">
    <div style="position: absolute; inset: 0;">
      <img src="{{ asset('images/Section Why Choose Us.png') }}" alt="Watch detail" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.08;">
      <div style="position: absolute; inset: 0; background: rgba(8,8,8,0.88);"></div>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
      <div style="text-align: center; margin-bottom: 64px;">
        <p style="color: var(--gold); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 20px;">Why Choose Us</p>
        <h2 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 4vw, 52px); color: var(--text-main); margin: 0;">
          Why Choose<br>
          <em style="color: var(--gold); font-style: italic;">Sovereign?</em>
        </h2>
      </div>

      <div class="why-grid">
        <div style="background: rgba(17,17,17,0.6); border: 1px solid var(--border-gold); padding: 36px; text-align: center; backdrop-filter: blur(8px);">
          <div style="display: inline-flex; align-items: center; justify-content: center; width: 52px; height: 52px; border: 1px solid rgba(196,160,98,0.4); color: var(--gold); margin-bottom: 24px;">
            <i data-lucide="gem" style="width: 20px; height: 20px;"></i>
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--text-main); margin-bottom: 12px; font-weight: 400;">Exquisite Materials</h3>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.8; font-weight: 300;">Every component is sourced from the finest origins worldwide. Anti-reflective sapphire glass, certified alligator leather, and Swiss-standard precious metals.</p>
        </div>

        <!-- Global Certification Badge -->
        <div onclick="openAwardModal('COSC', 'Swiss Chronometer Certification', 'Official certification granted by Contrôle Officiel Suisse des Chronomètres verifying precision, accuracy, and temperature stability under extreme conditions.')" class="cert-card-clickable" style="background: rgba(17,17,17,0.6); border: 1px solid var(--border-gold); padding: 36px; text-align: center; backdrop-filter: blur(8px);">
          <div style="margin-bottom: 16px;">
            <img src="{{ asset('images/cert-badge.png') }}" alt="Global Certification Seal" style="width: 64px; height: 64px; object-fit: contain; filter: drop-shadow(0 0 8px rgba(196, 160, 98, 0.3));">
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--text-main); margin-bottom: 12px; font-weight: 400;">Global Certification</h3>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.8; font-weight: 300;">Our movements carry COSC certification and comply with Japanese JIS B 7023 precision standards.<br><span style="color: var(--gold); font-size: 11px; text-decoration: underline; margin-top: 6px; display: inline-block;">Click to View Certificate</span></p>
        </div>

        <div style="background: rgba(17,17,17,0.6); border: 1px solid var(--border-gold); padding: 36px; text-align: center; backdrop-filter: blur(8px);">
          <div style="display: inline-flex; align-items: center; justify-content: center; width: 52px; height: 52px; border: 1px solid rgba(196,160,98,0.4); color: var(--gold); margin-bottom: 24px;">
            <i data-lucide="shield" style="width: 20px; height: 20px;"></i>
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--text-main); margin-bottom: 12px; font-weight: 400;">5-Year Guarantee</h3>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.8; font-weight: 300;">A comprehensive 5-year official warranty covering servicing, movement calibration, and component replacement for every Sovereign timepiece.</p>
        </div>

        <div style="background: rgba(17,17,17,0.6); border: 1px solid var(--border-gold); padding: 36px; text-align: center; backdrop-filter: blur(8px);">
          <div style="display: inline-flex; align-items: center; justify-content: center; width: 52px; height: 52px; border: 1px solid rgba(196,160,98,0.4); color: var(--gold); margin-bottom: 24px;">
            <i data-lucide="clock" style="width: 20px; height: 20px;"></i>
          </div>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--text-main); margin-bottom: 12px; font-weight: 400;">After-Sales Service</h3>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.8; font-weight: 300;">Certified service centers in Bandung, Jakarta, and Surabaya. Our technicians are trained directly in Switzerland and Japan.</p>
        </div>
      </div>

      <!-- Certifications -->
      <div style="background: rgba(17,17,17,0.6); border: 1px solid var(--border-gold); padding: 48px 56px; backdrop-filter: blur(8px); margin-top: 48px;">
        <h3 style="font-family: 'Cormorant', serif; font-size: 24px; color: var(--text-main); text-align: center; margin-bottom: 8px; font-weight: 300;">
          International Standards & Certifications
        </h3>
        <p style="text-align: center; font-size: 12px; color: var(--text-dim); margin-bottom: 36px;">Klik salah satu sertifikasi di bawah untuk melihat dokumen resmi secara utuh:</p>

        <div class="cert-grid">
          <!-- COSC -->
          <div onclick="openAwardModal('COSC', 'Contrôle Officiel Suisse des Chronomètres', 'Swiss official chronometer certification verifying mechanical accuracy, rate stability, and thermal calibration across 5 positions.')" class="cert-card-clickable" style="border-left: 2px solid var(--gold); padding: 16px 20px; background: rgba(255,255,255,0.02);">
            <div style="font-family: 'Cormorant', serif; font-size: 26px; color: var(--gold); font-weight: 400; margin-bottom: 4px;">COSC</div>
            <div style="font-size: 11px; letter-spacing: 0.18em; color: var(--text-dim); text-transform: uppercase;">Swiss Chronometer Cert. &rarr;</div>
          </div>

          <!-- JIS B 7023 -->
          <div onclick="openAwardModal('JIS B 7023', 'Japanese Industrial Standards - JIS B 7023', 'Official compliance certification issued by Japanese Industrial Standards Committee for precision timekeeping and shock resistance.')" class="cert-card-clickable" style="border-left: 2px solid var(--gold); padding: 16px 20px; background: rgba(255,255,255,0.02);">
            <div style="font-family: 'Cormorant', serif; font-size: 26px; color: var(--gold); font-weight: 400; margin-bottom: 4px;">JIS B 7023</div>
            <div style="font-size: 11px; letter-spacing: 0.18em; color: var(--text-dim); text-transform: uppercase;">Japan Industrial Standard &rarr;</div>
          </div>

          <!-- ISO 22810 -->
          <div onclick="openAwardModal('ISO 22810', 'International Water Resistance Standard', 'Global ISO standard verifying 100M water resistance, pressure tightness, and thermal shock resistance for luxury watches.')" class="cert-card-clickable" style="border-left: 2px solid var(--gold); padding: 16px 20px; background: rgba(255,255,255,0.02);">
            <div style="font-family: 'Cormorant', serif; font-size: 26px; color: var(--gold); font-weight: 400; margin-bottom: 4px;">ISO 22810</div>
            <div style="font-size: 11px; letter-spacing: 0.18em; color: var(--text-dim); text-transform: uppercase;">Water Resistance Standard &rarr;</div>
          </div>

          <!-- SGS -->
          <div onclick="openAwardModal('SGS', 'SGS Material & Authenticity Verification', 'Certified material inspection verifying 316L Stainless Steel purity, anti-reflective Sapphire Crystal quality, and genuine precious metal accents.')" class="cert-card-clickable" style="border-left: 2px solid var(--gold); padding: 16px 20px; background: rgba(255,255,255,0.02);">
            <div style="font-family: 'Cormorant', serif; font-size: 26px; color: var(--gold); font-weight: 400; margin-bottom: 4px;">SGS</div>
            <div style="font-size: 11px; letter-spacing: 0.18em; color: var(--text-dim); text-transform: uppercase;">Material Quality Verified &rarr;</div>
          </div>
        </div>
      </div>
      <!-- AKHIR KOTAK SERTIFIKAT -->

      <!-- TOMBOL PERSIS DI BAWAH KOTAK SERTIFIKAT -->
      <div style="text-align: center; margin-top: 48px;">
        <a href="{{ url('/information') }}" class="btn-gold-fill" style="padding: 16px 48px; text-decoration: none; display: inline-block; font-size: 11px; letter-spacing: 0.18em;">
          VIEW FULL INFORMATION & BLUEPRINT &rarr;
        </a>
      </div>

    </div>
  </section>

  <!-- BLOG / JOURNAL & TESTIMONIALS -->
  <section id="blog" style="background: var(--bg-card); padding: 120px 24px;">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 64px; flex-wrap: wrap; gap: 24px;">
        <div>
          <p style="color: var(--gold); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 20px;">Journal & Testimonials</p>
          <h2 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 4vw, 52px); line-height: 1.15; color: var(--text-main); margin: 0;">
            From the Atelier<br>
            <em style="color: var(--gold); font-style: italic;">Sovereign</em>
          </h2>
        </div>
        <a href="{{ url('/articles-and-reviews') }}" style="color: var(--gold, #c4a062); font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
  ALL ARTICLES &rarr;
</a>
      </div>

      <!-- ARTIKEL GRID -->
      <div class="blog-grid" style="margin-bottom: 80px;">
        <!-- Artikel 1 -->
        <article class="article-card" onclick="openArticleModal('art1')" style="cursor: pointer;">
          <div style="aspect-ratio: 16/10; overflow: hidden; background: #111; margin-bottom: 24px; position: relative;">
            <img src="{{ asset('images/Artikel1.png') }}" alt="Watch Care" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: rgba(8,8,8,0.88); color: var(--gold); font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; padding: 6px 12px; backdrop-filter: blur(4px);">Maintenance</div>
          </div>
          <p style="font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 12px;">July 12, 2025</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; font-weight: 400; color: var(--text-main); line-height: 1.4; margin-bottom: 12px;">
            5 Essential Tips to Maintain Your Luxury Timepiece for Generations
          </h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; margin-bottom: 20px;">
            A luxury watch is a lifelong investment. With proper care, a high-caliber timepiece can be passed down seamlessly from generation to generation.
          </p>
          <button style="display: flex; align-items: center; gap: 6px; background: none; border: none; cursor: pointer; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--gold); font-family: 'Jost', sans-serif;">
            Read More <i data-lucide="arrow-right" style="width: 11px; height: 11px;"></i>
          </button>
        </article>

        <!-- Artikel 2 -->
        <article class="article-card" onclick="openArticleModal('art2')" style="cursor: pointer;">
          <div style="aspect-ratio: 16/10; overflow: hidden; background: #111; margin-bottom: 24px; position: relative;">
            <img src="{{ asset('images/Artikel2.png') }}" alt="Vintage Watches" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: rgba(8,8,8,0.88); color: var(--gold); font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; padding: 6px 12px; backdrop-filter: blur(4px);">Trends</div>
          </div>
          <p style="font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 12px;">June 3, 2025</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; font-weight: 400; color: var(--text-main); line-height: 1.4; margin-bottom: 12px;">
            The Resurgence of Vintage Watches: Why Classic Designs Are Back
          </h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; margin-bottom: 20px;">
            The horological world is witnessing a powerful revival of vintage aesthetics. Young collectors seek classic dial design paired with modern movement technology.
          </p>
          <button style="display: flex; align-items: center; gap: 6px; background: none; border: none; cursor: pointer; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--gold); font-family: 'Jost', sans-serif;">
            Read More <i data-lucide="arrow-right" style="width: 11px; height: 11px;"></i>
          </button>
        </article>

        <!-- Artikel 3 -->
        <article class="article-card" onclick="openArticleModal('art3')" style="cursor: pointer;">
          <div style="aspect-ratio: 16/10; overflow: hidden; background: #111; margin-bottom: 24px; position: relative;">
            <img src="{{ asset('images/Artikel3.png') }}" alt="Movements" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 16px; left: 16px; background: rgba(8,8,8,0.88); color: var(--gold); font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; padding: 6px 12px; backdrop-filter: blur(4px);">Guide</div>
          </div>
          <p style="font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 12px;">May 18, 2025</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 20px; font-weight: 400; color: var(--text-main); line-height: 1.4; margin-bottom: 12px;">
            Understanding Movements: Swiss vs Japanese vs In-House Automatic
          </h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; margin-bottom: 20px;">
            The movement choice is the soul of a watch. We break down the technical and philosophical differences across three world-renowned watchmaking traditions.
          </p>
          <button style="display: flex; align-items: center; gap: 6px; background: none; border: none; cursor: pointer; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--gold); font-family: 'Jost', sans-serif;">
            Read More <i data-lucide="arrow-right" style="width: 11px; height: 11px;"></i>
          </button>
        </article>
      </div>

      <!-- TESTIMONIALS SECTION -->
      <div style="border-top: 1px solid var(--border-gold); padding-top: 64px;">
        <div style="text-align: center; margin-bottom: 48px;">
          <p style="color: var(--gold); font-size: 10px; letter-spacing: 0.4em; text-transform: uppercase; margin-bottom: 12px;">Client Experiences</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 32px; font-weight: 300; color: var(--text-main); margin: 0;">
            Words from Our <em style="color: var(--gold); font-style: italic;">Patrons</em>
          </h3>
        </div>

        <div class="team-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;">
          <!-- Testimonial 1 -->
          <div style="background: var(--bg-dark); border: 1px solid var(--border-gold); padding: 32px; position: relative;">
            <div style="color: var(--gold); font-size: 14px; margin-bottom: 16px;">★★★★★</div>
            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; font-style: italic; margin-bottom: 24px;">
              "Finishing pada Imperial Classic sangat luar biasa. Detail dial dan presisi pergerakan mesennya benar-benar membuktikan standar tinggi horologi Sovereign."
            </p>
            <div style="border-top: 1px solid rgba(196,160,98,0.15); padding-top: 16px;">
              <p style="font-family: 'Cormorant', serif; font-size: 18px; color: var(--text-main); margin: 0; font-weight: 400;">Rian Kusuma</p>
              <p style="font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-top: 4px;">Watch Collector · Jakarta</p>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div style="background: var(--bg-dark); border: 1px solid var(--border-gold); padding: 32px; position: relative;">
            <div style="color: var(--gold); font-size: 14px; margin-bottom: 16px;">★★★★★</div>
            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; font-style: italic; margin-bottom: 24px;">
              "Layanan concierge saat janji temu di Showroom Bandung sangat profesional. Penjelasan detail sertifikasi COSC memberi kepercayaan penuh saat mengambil Meridian Gold."
            </p>
            <div style="border-top: 1px solid rgba(196,160,98,0.15); padding-top: 16px;">
              <p style="font-family: 'Cormorant', serif; font-size: 18px; color: var(--text-main); margin: 0; font-weight: 400;">Hendra Wijaya</p>
              <p style="font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-top: 4px;">Entrepreneur · Bandung</p>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div style="background: var(--bg-dark); border: 1px solid var(--border-gold); padding: 32px; position: relative;">
            <div style="color: var(--gold); font-size: 14px; margin-bottom: 16px;">★★★★★</div>
            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; font-style: italic; margin-bottom: 24px;">
              "Sovereign Noir adalah perpaduan sempurna antara ketahanan DLC black coating dan desain stealth yang sangat elegan. Sangat memuaskan untuk pemakaian sehari-hari."
            </p>
            <div style="border-top: 1px solid rgba(196,160,98,0.15); padding-top: 16px;">
              <p style="font-family: 'Cormorant', serif; font-size: 18px; color: var(--text-main); margin: 0; font-weight: 400;">Budi Santoso</p>
              <p style="font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-top: 4px;">Executive · Surabaya</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- CONTACT & SHOWROOM LOCATIONS -->
  <section id="contact" style="background: var(--bg-dark); padding: 120px 24px;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 64px;">
        <p style="color: var(--gold); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 20px;">Contact Us</p>
        <h2 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 4vw, 52px); color: var(--text-main); margin: 0;">
          Visit Our Showroom<br>
          <em style="color: var(--gold); font-style: italic;">Locations</em>
        </h2>
      </div>

      <div class="showroom-grid" style="margin-bottom: 48px;">
        <!-- BANDUNG HEAD OFFICE -->
        <div style="background: var(--bg-card); border: 1px solid var(--border-gold); padding: 36px;">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px;">
            <i data-lucide="map-pin" style="width: 14px; height: 14px; color: var(--gold);"></i>
            <span style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--gold);">Bandung (Headquarters)</span>
          </div>
          <div style="display: flex; flex-direction: column; gap: 14px; font-size: 13px; font-weight: 300;">
            <p style="color: var(--text-muted); line-height: 1.7;">Jl. Ir. H. Juanda No. 128, Dago, Bandung 40135</p>
            <div style="display: flex; align-items: center; gap: 8px; color: var(--text-main);">
              <i data-lucide="phone" style="width: 12px; height: 12px; color: var(--gold);"></i> +62 22 4200 8800
            </div>
            <div style="display: flex; align-items: center; gap: 8px; color: var(--text-main);">
              <i data-lucide="mail" style="width: 12px; height: 12px; color: var(--gold);"></i> bandung@sovereign.id
            </div>
            <div style="border-top: 1px solid var(--border-gold); padding-top: 16px;">
              <p style="color: var(--text-dim); font-size: 12px; line-height: 1.8;">Monday – Saturday: 09:00 – 20:00<br>Sunday: 10:00 – 18:00</p>
            </div>
          </div>
        </div>

        <!-- JAKARTA -->
        <div style="background: var(--bg-card); border: 1px solid var(--border-gold); padding: 36px;">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px;">
            <i data-lucide="map-pin" style="width: 14px; height: 14px; color: var(--gold);"></i>
            <span style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--gold);">Jakarta</span>
          </div>
          <div style="display: flex; flex-direction: column; gap: 14px; font-size: 13px; font-weight: 300;">
            <p style="color: var(--text-muted); line-height: 1.7;">Jl. Sudirman Kav. 52, Senayan, Jakarta Pusat 10270</p>
            <div style="display: flex; align-items: center; gap: 8px; color: var(--text-main);">
              <i data-lucide="phone" style="width: 12px; height: 12px; color: var(--gold);"></i> +62 21 5790 8800
            </div>
            <div style="display: flex; align-items: center; gap: 8px; color: var(--text-main);">
              <i data-lucide="mail" style="width: 12px; height: 12px; color: var(--gold);"></i> jakarta@sovereign.id
            </div>
            <div style="border-top: 1px solid var(--border-gold); padding-top: 16px;">
              <p style="color: var(--text-dim); font-size: 12px; line-height: 1.8;">Monday – Saturday: 10:00 – 20:00<br>Sunday: 11:00 – 18:00</p>
            </div>
          </div>
        </div>

        <!-- SURABAYA -->
        <div style="background: var(--bg-card); border: 1px solid var(--border-gold); padding: 36px;">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px;">
            <i data-lucide="map-pin" style="width: 14px; height: 14px; color: var(--gold);"></i>
            <span style="font-family: 'Cormorant', serif; font-size: 20px; color: var(--gold);">Surabaya</span>
          </div>
          <div style="display: flex; flex-direction: column; gap: 14px; font-size: 13px; font-weight: 300;">
            <p style="color: var(--text-muted); line-height: 1.7;">Pakuwon Mall L3, Jl. Puncak Indah Lontar, Surabaya 60214</p>
            <div style="display: flex; align-items: center; gap: 8px; color: var(--text-main);">
              <i data-lucide="phone" style="width: 12px; height: 12px; color: var(--gold);"></i> +62 31 7400 2200
            </div>
            <div style="display: flex; align-items: center; gap: 8px; color: var(--text-main);">
              <i data-lucide="mail" style="width: 12px; height: 12px; color: var(--gold);"></i> surabaya@sovereign.id
            </div>
            <div style="border-top: 1px solid var(--border-gold); padding-top: 16px;">
              <p style="color: var(--text-dim); font-size: 12px; line-height: 1.8;">Monday – Saturday: 10:00 – 21:00<br>Sunday: 11:00 – 19:00</p>
            </div>
          </div>
        </div>
      </div>

      <!-- GOOGLE MAPS INTERAKTIF TEMA GELAP -->
      <div class="dark-google-map" style="margin-bottom: 64px; border: 1px solid var(--border-gold); overflow: hidden; height: 400px; position: relative; background: #000;">
        <div style="position: absolute; top: 16px; left: 16px; background: rgba(8,8,8,0.85); border: 1px solid var(--gold); padding: 6px 14px; z-index: 10; pointer-events: none;">
          <span style="font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold);">FLAGSHIP SHOWROOM LOCATION</span>
        </div>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.988081696417!2d107.6111113!3d-6.8891667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65787d55555%3A0x6b4317f2231f28b7!2sJl.%20Ir.%20H.%20Juanda%20No.128%2C%20Lebakgede%2C%20Kecamatan%20Coblong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040132!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <!-- Contact Form -->
      <div style="max-width: 720px; margin: 0 auto;">
        <div class="contact-form-pad" style="background: var(--bg-card); border: 1px solid var(--border-gold); padding: 56px 56px;">
          <h3 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: 28px; color: var(--text-main); text-align: center; margin-bottom: 40px;">Send a Message</h3>
          
          <form onsubmit="event.preventDefault(); alert('Your message has been sent successfully!');">
            <div class="form-grid" style="margin-bottom: 20px;">
              <div>
                <label style="display: block; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 8px;">Full Name</label>
                <input type="text" placeholder="Your full name" class="input-field" required style="width: 100%; box-sizing: border-box;">
              </div>
              <div>
                <label style="display: block; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 8px;">Email Address</label>
                <input type="email" placeholder="name@example.com" class="input-field" required style="width: 100%; box-sizing: border-box;">
              </div>
            </div>
            <div style="margin-bottom: 20px;">
              <label style="display: block; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 8px;">Subject</label>
              <input type="text" placeholder="Subject of your inquiry" class="input-field" style="width: 100%; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 32px;">
              <label style="display: block; font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 8px;">Message</label>
              <textarea rows="4" placeholder="Write your inquiry here..." class="input-field" style="width: 100%; box-sizing: border-box; resize: none;"></textarea>
            </div>
            <button type="submit" class="btn-gold-fill" style="width: 100%; padding: 16px; cursor: pointer;">Send Message</button>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer style="background: var(--bg-dark); border-top: 1px solid var(--border-gold);">
    <!-- Newsletter -->
    <div style="border-bottom: 1px solid var(--border-gold);">
      <div class="container" style="padding: 56px 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 32px;">
        <div>
          <h3 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: 26px; color: var(--text-main); margin-bottom: 8px;">
            Join the <em style="color: var(--gold); font-style: italic;">Sovereign Circle</em>
          </h3>
          <p style="font-size: 13px; color: var(--text-muted); font-weight: 300;">Receive exclusive invitations, new collection previews, and private stories from our atelier.</p>
        </div>

        <div id="newsletter-container" style="display: flex;">
          <input type="email" id="newsletter-email" placeholder="Your email address" class="input-field" style="width: 280px; border-right: none;">
          <button onclick="handleSubscribe()" class="btn-gold-fill" style="padding: 12px 24px; white-space: nowrap; cursor: pointer;">Subscribe</button>
        </div>
      </div>
    </div>

    <!-- Links Grid -->
    <div class="container" style="padding: 64px 24px 40px;">
      <div class="footer-grid">
        <div>
          <div style="font-family: 'Cormorant', serif; font-size: 20px; letter-spacing: 0.42em; color: var(--gold); font-weight: 300; margin-bottom: 4px;">SOVEREIGN</div>
          <div style="font-size: 9px; letter-spacing: 0.28em; color: var(--text-dim); text-transform: uppercase; margin-bottom: 20px;">Horlogerie de Prestige</div>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; margin-bottom: 24px;">
            Encapsulating time in beauty and precision since 2008. Every Sovereign is a promise of timelessness.
          </p>
          
          <!-- Official Social Media Links -->
          <div style="display: flex; gap: 10px; align-items: center; margin-top: 16px;">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-btn" title="Instagram" style="display: inline-flex; align-items: center; justify-content: center; text-decoration: none;">
              <i data-lucide="instagram" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-btn" title="Facebook" style="display: inline-flex; align-items: center; justify-content: center; text-decoration: none;">
              <i data-lucide="facebook" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social-btn" title="Twitter / X" style="display: inline-flex; align-items: center; justify-content: center; text-decoration: none;">
              <i data-lucide="twitter" style="width: 14px; height: 14px;"></i>
            </a>
            
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-btn" title="LinkedIn" style="display: inline-flex; align-items: center; justify-content: center; text-decoration: none;">
              <i data-lucide="linkedin" style="width: 14px; height: 14px;"></i>
            </a>
          </div>
        </div>

        <div>
          <h4 style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--text-main); margin-bottom: 24px;">Collections</h4>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px; padding: 0; margin: 0;">
            <li><a href="{{ url('/shop') }}" class="nav-btn" style="padding:0; text-decoration:none; display:inline-block;">Classic Series</a></li>
            <li><a href="{{ url('/shop') }}" class="nav-btn" style="padding:0; text-decoration:none; display:inline-block;">Chronograph Series</a></li>
            <li><a href="{{ url('/shop') }}" class="nav-btn" style="padding:0; text-decoration:none; display:inline-block;">Limited Edition</a></li>
            <li><a href="{{ url('/shop') }}" class="nav-btn" style="padding:0; text-decoration:none; display:inline-block;">Corporate Gifting</a></li>
          </ul>
        </div>

        <div>
          <h4 style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--text-main); margin-bottom: 24px;">Company</h4>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px; padding: 0; margin: 0;">
            <li><button class="nav-btn" style="padding:0;" onclick="scrollToId('about')">About Us</button></li>
            <li><button class="nav-btn" style="padding:0;">Media & Press</button></li>
            <li><button class="nav-btn" style="padding:0;">Retail Partners</button></li>
          </ul>
        </div>

        <div>
          <h4 style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--text-main); margin-bottom: 24px;">Services</h4>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px; padding: 0; margin: 0;">
            <li><button class="nav-btn" style="padding:0; background:none; border:none; cursor:pointer;" onclick="openServiceModal('warranty')">Warranty & Service</button></li>
            <li><button class="nav-btn" style="padding:0; background:none; border:none; cursor:pointer;" onclick="openServiceModal('authentication')">Authentication</button></li>
            <li><button class="nav-btn" style="padding:0; background:none; border:none; cursor:pointer;" onclick="openServiceModal('shipping')">Shipping & Delivery</button></li>
            <li><button class="nav-btn" style="padding:0; background:none; border:none; cursor:pointer;" onclick="openServiceModal('privacy')">Privacy Policy</button></li>
            <li><button class="nav-btn" style="padding:0; background:none; border:none; cursor:pointer;" onclick="openServiceModal('terms')">Terms & Conditions</button></li>
          </ul>
        </div>
      </div>

      <div style="border-top: 1px solid rgba(196,160,98,0.12); padding-top: 32px; margin-top: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; font-size: 12px; color: var(--text-dim);">
        <p>© 2025 Sovereign Horlogerie. All rights reserved.</p>
        <p>Reg. No / NIB: 9120008471092 · License: W-8821/2008</p>
        <p>Crafted with dedication in Bandung, Indonesia · info@sovereign.id</p>
      </div>
    </div>
  </footer>

  <!-- ===================================================
       MODAL POP-UPS
       =================================================== -->

  <!-- MODAL SERVICES FOOTER -->
  <div id="service-info-modal" style="display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.92); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold); max-width: 650px; width: 100%; max-height: 85vh; overflow-y: auto; padding: 36px; position: relative; text-align: left;">
      <button onclick="closeServiceModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold); font-size: 24px; cursor: pointer;">&times;</button>
      <span id="service_modal_tag" style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 14px; margin-bottom: 12px;">SERVICES</span>
      <h3 id="service_modal_title" style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--text-main); font-weight: 300; margin-bottom: 16px;"></h3>
      <div id="service_modal_content" style="font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; margin-bottom: 28px; display: flex; flex-direction: column; gap: 14px;"></div>
      <div style="border-top: 1px solid rgba(196,160,98,0.2); padding-top: 16px; text-align: right;">
        <button onclick="closeServiceModal()" class="btn-gold-fill" style="padding: 10px 28px; font-size: 11px; cursor: pointer;">CLOSE PREVIEW</button>
      </div>
    </div>
  </div>

  <!-- MODAL BACA ARTIKEL & FORM TANGGAPAN -->
  <div id="article-modal" style="display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.92); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold); max-width: 720px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 40px; position: relative;">
      
      <button onclick="closeArticleModal()" style="position: absolute; top: 20px; right: 20px; background: none; border: none; color: var(--gold); font-size: 26px; cursor: pointer;">&times;</button>

      <span id="art_category" style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 14px; margin-bottom: 12px;"></span>
      <p id="art_date" style="font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 8px;"></p>
      
      <h2 id="art_title" style="font-family: 'Cormorant', serif; font-size: 30px; color: var(--text-main); font-weight: 300; line-height: 1.25; margin-bottom: 24px;"></h2>

      <div style="border: 1px solid rgba(196,160,98,0.2); overflow: hidden; background: #000; margin-bottom: 24px; max-height: 320px;">
        <img id="art_img" src="" alt="Article Banner" style="width: 100%; height: 100%; object-fit: cover; display: block;">
      </div>

      <div id="art_body" style="font-size: 13px; color: var(--text-muted); line-height: 1.85; font-weight: 300; margin-bottom: 36px; display: flex; flex-direction: column; gap: 16px;"></div>

      <div style="border-top: 1px solid var(--border-gold); padding-top: 28px; background: rgba(255,255,255,0.01); border-radius: 4px;">
        <h3 style="font-family: 'Cormorant', serif; font-size: 22px; color: var(--gold); margin-bottom: 8px; font-weight: 400;">Leave a Response / Inquiry</h3>
        <p style="font-size: 11px; color: var(--text-dim); margin-bottom: 20px;">Punya pertanyaan atau tanggapan seputar artikel ini? Tuliskan respon Anda di bawah:</p>

        <form onsubmit="event.preventDefault(); alert('Terima kasih atas tanggapan Anda! Komentar Anda sedang ditinjau.'); closeArticleModal();">
          <input type="hidden" id="art_hidden_title" name="article_title">
          
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div>
              <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Your name</label>
              <input type="text" class="input-field" placeholder="Full Name" required style="width: 100%; box-sizing: border-box;">
            </div>
            <div>
              <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Email</label>
              <input type="email" class="input-field" placeholder="name@email.com" required style="width: 100%; box-sizing: border-box;">
            </div>
          </div>

          <div style="margin-bottom: 20px;">
            <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Response / Comment</label>
            <textarea rows="3" class="input-field" placeholder="Write your idea or question about this article..." required style="width: 100%; box-sizing: border-box; resize: none;"></textarea>
          </div>

          <button type="submit" class="btn-gold-fill" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">SUBMIT ARTICLE FEEDBACK</button>
        </form>
      </div>

    </div>
  </div>
  
  <!-- MODAL JANJI TEMU SHOWROOM (APPOINTMENT) -->
  <div id="appointment-modal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold); max-width: 550px; width: 100%; padding: 40px; position: relative;">
      
      <button onclick="closeAppointmentModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold); font-size: 20px; cursor: pointer;">&times;</button>

      <div style="text-align: center; margin-bottom: 28px;">
        <span style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 14px; margin-bottom: 12px;">SHOWROOM APPOINTMENT</span>
        <h3 style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300; margin-bottom: 8px;">Book an In-Person Visit</h3>
        <p style="font-size: 12px; color: var(--text-muted); line-height: 1.6;">Schedule a private viewing session at our luxury showroom. Our concierge team will prepare your visit.</p>
      </div>

      <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 16px;">
          <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Watch Model / Inquiry Topic</label>
          <input type="text" id="modal_watch_model" name="watch_model" class="input-field" readonly style="width: 100%; box-sizing: border-box; background: rgba(255,255,255,0.05); color: var(--gold); font-weight: bold;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Full Name</label>
            <input type="text" name="full_name" class="input-field" required placeholder="Your Name" value="{{ auth()->check() ? auth()->user()->name : '' }}" style="width: 100%; box-sizing: border-box;">
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">WhatsApp Number</label>
            <input type="text" name="phone" class="input-field" required placeholder="08xxxxxxxxxx" style="width: 100%; box-sizing: border-box;">
          </div>
        </div>

        <div style="margin-bottom: 16px;">
          <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Email</label>
          <input type="email" name="email" class="input-field" required placeholder="name@email.com" value="{{ auth()->check() ? auth()->user()->email : '' }}" style="width: 100%; box-sizing: border-box;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; margin-bottom: 24px;">
  <div>
    <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Showroom</label>
    <select name="showroom_location" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff; padding: 8px 10px; height: auto; min-height: 42px; line-height: 1.4;">
      <option value="Bandung">Bandung</option>
      <option value="Jakarta">Jakarta</option>
      <option value="Surabaya">Surabaya</option>
    </select>
  </div>
  <div>
    <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Date</label>
    <input type="date" name="appointment_date" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff; padding: 8px 10px; height: auto; min-height: 42px; line-height: 1.4;">
  </div>
  <div>
    <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Time</label>
    <select name="appointment_time" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff; padding: 8px 10px; height: auto; min-height: 42px; line-height: 1.4;">
      <option value="11:00 WIB">11:00 WIB</option>
      <option value="14:00 WIB">14:00 WIB</option>
      <option value="17:00 WIB">17:00 WIB</option>
      <option value="19:00 WIB">19:00 WIB</option>
    </select>
  </div>
</div>

        <button type="submit" class="btn-gold-fill" style="width: 100%; padding: 14px; font-size: 11px; cursor: pointer;">CONFIRM APPOINTMENT VISIT</button>
      </form>
    </div>
  </div>

  <!-- MODAL KHUSUS PRE-ORDER JAM TANGAN -->
  <div id="preorder-modal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold); max-width: 550px; width: 100%; padding: 40px; position: relative;">
      
      <button onclick="closePreorderModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold); font-size: 20px; cursor: pointer;">&times;</button>

      <div style="text-align: center; margin-bottom: 28px;">
        <span style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 14px; margin-bottom: 12px;">PRE-ORDER RESERVATION</span>
        <h3 style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold); font-weight: 300; margin-bottom: 8px;">Pre-Order Timepiece</h3>
        <p style="font-size: 12px; color: var(--text-muted); line-height: 1.6;">Reserve your allocation for this exclusive timepiece. Our private concierge will review availability and contact you shortly.</p>
      </div>

      <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 16px;">
          <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Watch Model</label>
          <input type="text" id="preorder_watch_model" name="watch_model" class="input-field" readonly style="width: 100%; box-sizing: border-box; background: rgba(255,255,255,0.05); color: var(--gold); font-weight: bold;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Full Name</label>
            <input type="text" name="full_name" class="input-field" required placeholder="Your Name" value="{{ auth()->check() ? auth()->user()->name : '' }}" style="width: 100%; box-sizing: border-box;">
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">WhatsApp Number</label>
            <input type="text" name="phone" class="input-field" required placeholder="08xxxxxxxxxx" style="width: 100%; box-sizing: border-box;">
          </div>
        </div>

        <div style="margin-bottom: 16px;">
          <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Email</label>
          <input type="email" name="email" class="input-field" required placeholder="name@email.com" value="{{ auth()->check() ? auth()->user()->email : '' }}" style="width: 100%; box-sizing: border-box;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; margin-bottom: 24px;">
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Pickup Showroom</label>
            <select name="showroom_location" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff; height: 38px;">
              <option value="Bandung">Bandung</option>
              <option value="Jakarta">Jakarta</option>
              <option value="Surabaya">Surabaya</option>
            </select>
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Target Date</label>
            <input type="date" name="appointment_date" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff; height: 38px;">
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Preferred Time</label>
            <select name="appointment_time" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff; height: 38px;">
              <option value="11:00 WIB">11:00 WIB</option>
              <option value="14:00 WIB">14:00 WIB</option>
              <option value="17:00 WIB">17:00 WIB</option>
              <option value="19:00 WIB">19:00 WIB</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn-gold-fill" style="width: 100%; padding: 14px; font-size: 11px; cursor: pointer;">SUBMIT PRE-ORDER REQUEST</button>
      </form>
    </div>
  </div>

  <!-- MODAL SERTIFIKAT PEMBELI PER ITEM JAM -->
  <div id="certificate-modal" style="display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.9); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold); max-width: 680px; width: 100%; padding: 32px; position: relative; text-align: center;">
      
      <button onclick="closeCertificateModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold); font-size: 24px; cursor: pointer;">&times;</button>

      <h3 style="font-family: 'Cormorant', serif; font-size: 26px; color: var(--gold); font-weight: 300; margin-bottom: 4px;">Certificate of Authenticity</h3>
      <p id="cert_watch_title" style="font-size: 13px; color: var(--text-main); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 16px; font-weight: 500;"></p>

      <div style="border: 1px solid rgba(196,160,98,0.3); overflow: hidden; background: #000; margin-bottom: 20px;">
        <img src="{{ asset('images/sertifikatjam.png') }}" alt="SOVEREIGN Official Certificate" style="width: 100%; height: auto; max-height: 420px; object-fit: contain; display: block; margin: 0 auto;">
      </div>

      <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(196,160,98,0.2); padding-top: 16px; margin-bottom: 20px; text-align: left;">
        <div>
          <p style="font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); margin-bottom: 2px;">Warranty Coverage</p>
          <p style="font-size: 12px; color: var(--text-dim);">5-Year Official International Guarantee</p>
        </div>
        <div style="text-align: right;">
          <p style="font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); margin-bottom: 2px;">Authorized Executive Signature</p>
          <p style="font-family: 'Cormorant', serif; font-size: 16px; color: var(--text-main); font-weight: 400;">M Fabiah Khusyaeri</p>
          <p style="font-size: 9px; color: var(--text-dim); text-transform: uppercase;">Chief Executive Officer & Founder</p>
        </div>
      </div>

      <button onclick="closeCertificateModal()" class="btn-gold-fill" style="padding: 10px 28px; font-size: 11px; cursor: pointer;">CLOSE PREVIEW</button>
    </div>
  </div>

  <!-- MODAL PENGHARGAAN (COSC, JIS, ISO, SGS) -->
  <div id="award-modal" style="display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.92); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold); max-width: 720px; width: 100%; padding: 36px; position: relative; text-align: center;">
      
      <button onclick="closeAwardModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold); font-size: 24px; cursor: pointer;">&times;</button>

      <span id="award_badge_code" style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 14px; margin-bottom: 12px;"></span>
      <h3 id="award_modal_title" style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--text-main); font-weight: 300; margin-bottom: 8px;"></h3>
      <p id="award_modal_desc" style="font-size: 13px; color: var(--text-muted); line-height: 1.6; max-width: 580px; margin: 0 auto 24px; font-weight: 300;"></p>

      <div style="border: 1px solid rgba(196,160,98,0.3); overflow: hidden; background: #000; margin-bottom: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.8);">
        <img src="{{ asset('images/penghargaan.png') }}" alt="Award Certificate High Resolution" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; display: block; margin: 0 auto;">
      </div> 

      <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(196,160,98,0.2); padding-top: 16px; text-align: left;">
        <span style="font-size: 11px; color: var(--text-dim); letter-spacing: 0.05em;">Verified Official Document · Sovereign Horlogerie</span>
        <button onclick="closeAwardModal()" class="btn-gold-fill" style="padding: 10px 28px; font-size: 11px; cursor: pointer;">CLOSE DOCUMENT</button>
      </div>

    </div>
  </div>

  <!-- MAIN PROJECT JAVASCRIPT -->
  <script src="{{ asset('js/main.js') }}"></script>

  <!-- MODAL SPECIFIC JAVASCRIPT -->
  <script>
    // Complete Article Data (English)
    const articlesData = {
      art1: {
        category: "MAINTENANCE",
        date: "July 12, 2025",
        title: "5 Essential Tips to Maintain Your Luxury Timepiece for Generations",
        img: "{{ asset('images/Artikel1.png') }}",
        body: `
          <p>Owning a luxury timepiece is not merely a financial investment; it is an enduring heirloom meant to be passed down through generations. To keep your watch as precise and lustrous as the day it was crafted, follow these 5 essential maintenance steps:</p>
          <p><strong>1. Avoid High Magnetic Fields:</strong> Mechanical movements are exceptionally sensitive to magnets in laptops, speakers, or electronic devices. Magnetization can cause your timepiece to run significantly fast or slow.</p>
          <p><strong>2. Schedule Periodic Service:</strong> Perform routine servicing every 3 to 5 years at an authorized Sovereign service center to replace internal lubricants and preserve water resistance seals.</p>
          <p><strong>3. Clean Gently:</strong> Use a soft microfiber cloth to wipe down the sapphire crystal and watch case, removing dust or perspiration after daily wear.</p>
          <p><strong>4. Keep Away from Harsh Chemicals:</strong> Exposure to perfumes, alcohol, or cleaning agents can degrade water-resistant gaskets and discolor genuine Alligator leather straps.</p>
          <p><strong>5. Store in a Dedicated Box or Watch Winder:</strong> When not in use, store your automatic watch in a protective box or watch winder to prevent internal lubricants from settling.</p>
        `
      },
      art2: {
        category: "TRENDS",
        date: "June 3, 2025",
        title: "The Resurgence of Vintage Watches: Why Classic Designs Are Back",
        img: "{{ asset('images/Artikel2.png') }}",
        body: `
          <p>The global horological world is witnessing a major resurgence of 20th-century classic watch aesthetics. Young collectors are shifting away from purely futuristic designs, returning to embrace historical value, balanced wrist proportions, and timeless elegance.</p>
          <p><strong>Key Reasons Behind the Vintage Revival:</strong></p>
          <ul style="padding-left: 20px; margin: 0;">
            <li><strong>Versatile & Refined Proportions:</strong> Case diameters between 38mm and 40mm offer superior comfort and a clean, sophisticated look for both formal and casual settings.</li>
            <li><strong>Classic Artistic Details:</strong> Elements such as Dauphine hands, gold-plated indices, and sunray dials possess an artistic charm that mass-produced modern designs struggle to match.</li>
            <li><strong>Fusing Heritage with Modern Tech:</strong> Collections like Sovereign's <em>Imperial Classic</em> merge past visual elegance with durable anti-reflective sapphire glass and modern COSC-certified automatic movements.</li>
          </ul>
        `
      },
      art3: {
        category: "GUIDE",
        date: "May 18, 2025",
        title: "Understanding Movements: Swiss vs Japanese vs In-House Automatic",
        img: "{{ asset('images/Artikel3.png') }}",
        body: `
          <p>The movement or caliber is the beating heart of any mechanical watch. Understanding the craftsmanship traditions behind different movements will help you choose the perfect timepiece for your lifestyle:</p>
          <p><strong>Swiss Movements:</strong> Internationally renowned for centuries of horological heritage, exquisite component decoration, and stringent chronometer accuracy standards (such as COSC certification).</p>
          <p><strong>Japanese Movements:</strong> Highly respected for technical reliability, efficient power reserve usage, and robust shock resistance built for daily wear.</p>
          <p><strong>Sovereign In-House Automatic:</strong> We combine the precision engineering of Swiss & Japanese movements with custom calibration at the Sovereign atelier in Bandung, ensuring unwavering accuracy and a 5-year official warranty.</p>
        `
      }
    };

    // Open Article Modal Function
    function openArticleModal(id) {
      const art = articlesData[id];
      if (art) {
        document.getElementById('art_category').innerText = art.category;
        document.getElementById('art_date').innerText = art.date;
        document.getElementById('art_title').innerText = art.title;
        document.getElementById('art_hidden_title').value = art.title;
        document.getElementById('art_img').src = art.img;
        document.getElementById('art_body').innerHTML = art.body;
        
        const modal = document.getElementById('article-modal');
        if (modal) modal.style.display = 'flex';
      }
    }

    function closeArticleModal() {
      const modal = document.getElementById('article-modal');
      if (modal) modal.style.display = 'none';
    }

    // Showroom Appointment Modal
    function openAppointmentModal(watchModel) {
      const modelInput = document.getElementById('modal_watch_model');
      if (modelInput) {
        modelInput.value = watchModel || 'General Showroom Visit';
      }
      const modal = document.getElementById('appointment-modal');
      if (modal) modal.style.display = 'flex';
    }

    function closeAppointmentModal() {
      const modal = document.getElementById('appointment-modal');
      if (modal) modal.style.display = 'none';
    }

    // Pre-Order Modal
    function openPreorderModal(watchModel) {
      const modelInput = document.getElementById('preorder_watch_model');
      if (modelInput) {
        modelInput.value = watchModel || 'General Pre-Order';
      }
      const modal = document.getElementById('preorder-modal');
      if (modal) modal.style.display = 'flex';
    }

    function closePreorderModal() {
      const modal = document.getElementById('preorder-modal');
      if (modal) modal.style.display = 'none';
    }

    // Watch Certificate Modal
    function openCertificateModal(watchModel) {
      const title = document.getElementById('cert_watch_title');
      if (title) title.innerText = 'Included with ' + watchModel;
      const modal = document.getElementById('certificate-modal');
      if (modal) modal.style.display = 'flex';
    }

    function closeCertificateModal() {
      const modal = document.getElementById('certificate-modal');
      if (modal) modal.style.display = 'none';
    }

    // Certification Award Modal (COSC, JIS, ISO, SGS)
    function openAwardModal(code, title, desc) {
      const badge = document.getElementById('award_badge_code');
      const titleEl = document.getElementById('award_modal_title');
      const descEl = document.getElementById('award_modal_desc');

      if (badge) badge.innerText = code + ' CERTIFIED';
      if (titleEl) titleEl.innerText = title;
      if (descEl) descEl.innerText = desc;

      const modal = document.getElementById('award-modal');
      if (modal) modal.style.display = 'flex';
    }

    function closeAwardModal() {
      const modal = document.getElementById('award-modal');
      if (modal) modal.style.display = 'none';
    }

    // Close Modal on Background Click
    window.addEventListener('click', function(event) {
      const modals = ['appointment-modal', 'preorder-modal', 'certificate-modal', 'award-modal', 'service-info-modal', 'article-modal'];
      modals.forEach(id => {
        const modal = document.getElementById(id);
        if (modal && event.target === modal) {
          modal.style.display = 'none'; 
        }
      });
    });
  </script>
</body>
</html>