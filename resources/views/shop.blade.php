<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOVEREIGN - Catalog & Timepiece Gallery</title>
  
  <!-- FAVICON CUSTOM -->
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
  
  <!-- External CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    body {
      background-color: var(--bg-dark, #080808);
      color: var(--text-main, #ffffff);
      font-family: 'Jost', sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 48px;
    }

    .shop-header {
      border-bottom: 1px solid var(--border-gold, rgba(196,160,98,0.2));
      padding: 32px 0;
      background: #080808;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .shop-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
      padding: 60px 0 100px;
    }

    .card-collection {
      background: var(--bg-card, #111111);
      border: 1px solid var(--border-gold, rgba(196,160,98,0.25));
      transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .card-collection:hover {
      transform: translateY(-6px);
      border-color: var(--gold, #c4a062);
    }

    .badge-tag {
      position: absolute;
      top: 16px;
      left: 16px;
      background: var(--gold, #c4a062);
      color: #080808;
      font-size: 10px;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      padding: 6px 12px;
      font-weight: 500;
    }

    /* Responsive adjustment */
    @media (min-width: 769px) and (max-width: 1024px) {
      .shop-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 24px !important;
      }
      .container {
        padding: 0 32px !important;
      }
    }

    @media (max-width: 768px) {
      .shop-grid {
        grid-template-columns: 1fr !important;
        gap: 24px !important;
      }
      .container {
        padding: 0 20px !important;
      }
    }
  </style>
</head>
<body>

  <!-- HEADER SHOP -->
  <header class="shop-header">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
      
      <!-- LOGO SOVEREIGN -->
      <a href="{{ url('/') }}" style="text-decoration: none; display: flex; flex-direction: column;">
        <div style="font-family: 'Cormorant', serif; font-size: 24px; letter-spacing: 0.45em; color: var(--gold, #c4a062); font-weight: 300; line-height: 1;">
          SOVEREIGN
        </div>
        <div style="font-size: 8px; letter-spacing: 0.28em; color: var(--text-dim, #888888); text-transform: uppercase; margin-top: 5px;">
          Horlogerie de Prestige
        </div>
      </a>

      <!-- NAVIGASI KEMBALI KE HOME -->
      <div>
        <a href="{{ url('/') }}" class="nav-btn" style="text-decoration: none; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: var(--gold, #c4a062); display: flex; align-items: center; gap: 8px;">
          &larr; BACK TO HOME
        </a>
      </div>

    </div>
  </header>

  <!-- TITLE SECTION -->
  <section style="padding-top: 60px; text-align: center; border-bottom: 1px solid rgba(196,160,98,0.12);">
    <div class="container">
      <p style="color: var(--gold, #c4a062); font-size: 11px; letter-spacing: 0.42em; text-transform: uppercase; margin-bottom: 12px;">Official Timepiece Catalog</p>
      <h1 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 5vw, 56px); color: var(--text-main, #ffffff); margin: 0 0 16px;">
        Complete Company <em style="color: var(--gold, #c4a062); font-style: italic;">Collections</em>
      </h1>
      <p style="font-size: 13px; color: var(--text-muted, #aaaaaa); font-weight: 300; max-width: 580px; margin: 0 auto 40px; line-height: 1.8;">
        Jelajahi seluruh daftar jam tangan mewah buatan Sovereign. Setiap unit diproduksi dengan sertifikasi presisi internasional serta jaminan garansi 5 tahun.
      </p>
    </div>
  </section>

  <!-- KATALOG GRID PRODUK -->
  <main class="container">
    <div class="shop-grid">
      
      <!-- Watch 1 -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/imperialclassic.png') }}" alt="Imperial Classic" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Bestseller</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Classic Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Imperial Classic</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 48,500,000</p>
          <button onclick="openAppointmentModal('Imperial Classic')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Imperial Classic')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 2 -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/sovereignnoir.png') }}" alt="Sovereign Noir" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">New</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Classic Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Sovereign Noir</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 62,000,000</p>
          <button onclick="openAppointmentModal('Sovereign Noir')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Sovereign Noir')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 3 -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Meridian Gold (Limited).png') }}" alt="Meridian Gold" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Limited</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Limited Edition</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Meridian Gold</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 128,000,000</p>
          <button onclick="openAppointmentModal('Meridian Gold')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Meridian Gold')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 4 -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Chronos Prestige (Sport).png') }}" alt="Chronos Prestige" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Sport</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Chronograph Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Chronos Prestige</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 85,000,000</p>
          <button onclick="openAppointmentModal('Chronos Prestige')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Chronos Prestige')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 5 -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Aurelius Perpetuel (Exclusive).png') }}" alt="Aurelius Perpetuel" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Exclusive</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Limited Edition</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Aurelius Perpetuel</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 245,000,000</p>
          <button onclick="openAppointmentModal('Aurelius Perpetuel')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Aurelius Perpetuel')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 6 -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Tempus Slate (Classic).png') }}" alt="Tempus Slate" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Classic</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Classic Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Tempus Slate</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 38,000,000</p>
          <button onclick="openAppointmentModal('Tempus Slate')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Tempus Slate')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 7 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/grandtourbillon.png') }}" alt="Grand Tourbillon Royal" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Haute Horlogerie</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Tourbillon Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Grand Tourbillon Royal</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 310,000,000</p>
          <button onclick="openAppointmentModal('Grand Tourbillon Royal')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Grand Tourbillon Royal')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 8 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/celestialmoonphase.png') }}" alt="Celestial Moonphase" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Complication</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Moonphase Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Celestial Moonphase</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 95,000,000</p>
          <button onclick="openAppointmentModal('Celestial Moonphase')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Celestial Moonphase')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 9 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/heritageskeleton.png') }}" alt="Heritage Skeleton Rose" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Skeleton</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Artisan Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Heritage Skeleton Rose</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 115,000,000</p>
          <button onclick="openAppointmentModal('Heritage Skeleton Rose')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Heritage Skeleton Rose')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 10 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/aerochronotitanium.png') }}" alt="Aero Chrono Titanium" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Titanium</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Sport Chrono</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Aero Chrono Titanium</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 78,000,000</p>
          <button onclick="openAppointmentModal('Aero Chrono Titanium')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Aero Chrono Titanium')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 11 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/sovereignnavymaster.png') }}" alt="Sovereign Navy Master" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Diver 300M</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Nautical Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Sovereign Navy Master</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 54,000,000</p>
          <button onclick="openAppointmentModal('Sovereign Navy Master')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Sovereign Navy Master')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 12 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/aethelgardperpetual.png') }}" alt="Aethelgard Perpetual Calendar" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Masterpiece</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Grand Complication</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Aethelgard Perpetual</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 280,000,000</p>
          <button onclick="openAppointmentModal('Aethelgard Perpetual')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Aethelgard Perpetual')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 13 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/vanguardbronze.png') }}" alt="Vanguard Bronze Heritage" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Patina Bronze</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Heritage Series</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Vanguard Bronze Heritage</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 42,000,000</p>
          <button onclick="openAppointmentModal('Vanguard Bronze Heritage')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Vanguard Bronze Heritage')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

      <!-- Watch 14 (Gambar Baru) -->
      <div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/opalineultraslim.png') }}" alt="Opaline Ultra Slim" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Ultra Thin</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Opaline Ultra Slim</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Opaline Ultra Slim')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Opaline Ultra Slim')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

<div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Tourbillon Noir.png') }}" alt="Tourbillon Noir" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Tourbillon Noir</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Tourbillon Noir</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Tourbillon Noir')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Tourbillon Noir')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

<!-- ITEM 16: Sovereign Skeleton Rose -->
<div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Skeleton Rose.png') }}" alt="Skeleton Rose" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">USkeleton Rose</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Skeleton Rose</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Skeleton Rose')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Skeleton Rose')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

<!-- ITEM 17: Sovereign Grand Regulator -->
<div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Grand Regulator.png') }}" alt="Grand Regulator" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Grand Regulator</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Grand Regulator</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Grand Regulator')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Grand Regulator')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

<!-- ITEM 18: Sovereign Marine Chronometer -->
<div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Marine Chronometer.png') }}" alt="Marine Chronometer" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Marine Chronometer</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Marine Chronometer</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Marine Chronometer')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Marine Chronometer')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

<!-- ITEM 19: Sovereign Platinum Perpetual -->
<div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Platinum Perpetual.png') }}" alt="Platinum Perpetual" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Platinum Perpetual</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Platinum Perpetual</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Platinum Perpetual')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Platinum Perpetual')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

<!-- ITEM 20: Sovereign Astro Moonphase -->
<div class="card-collection">
        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #111;">
          <img src="{{ asset('images/Astro Moonphase.png') }}" alt="Astro Moonphase" style="width: 100%; height: 100%; object-fit: cover;">
          <div class="badge-tag">Astro Moonphase</div>
        </div>
        <div style="padding: 24px;">
          <p style="font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 6px;">Dress Watch</p>
          <h3 style="font-family: 'Cormorant', serif; font-size: 22px; font-weight: 400; color: var(--text-main, #fff); margin-bottom: 4px;">Astro Moonphase</h3>
          <p style="font-size: 14px; color: var(--gold, #c4a062); letter-spacing: 0.04em; margin-bottom: 16px;">Rp 58,000,000</p>
          <button onclick="openAppointmentModal('Astro Moonphase')" class="btn-gold-outline" style="width: 100%; padding: 12px; font-size: 11px; cursor: pointer;">PRE-ORDER / BOOK APPOINTMENT</button>
          <button onclick="openCertificateModal('Astro Moonphase')" style="background: none; border: none; color: var(--gold, #c4a062); font-size: 11px; cursor: pointer; text-decoration: underline; margin-top: 10px; display: block; width: 100%; text-align: center;">
            View Included Certificate
          </button>
        </div>
      </div>

    </div>
  </main>

  <!-- MODAL JANJI TEMU PRE-ORDER -->
  <div id="appointment-modal" style="display: none; position: fixed; inset: 0; z-index: 999; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold, #c4a062); max-width: 550px; width: 100%; padding: 40px; position: relative;">
      
      <button onclick="closeAppointmentModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold, #c4a062); font-size: 20px; cursor: pointer;">&times;</button>

      <div style="text-align: center; margin-bottom: 28px;">
        <h3 style="font-family: 'Cormorant', serif; font-size: 28px; color: var(--gold, #c4a062); font-weight: 300; margin-bottom: 8px;">Pre-Order & Appointment</h3>
        <p style="font-size: 12px; color: var(--text-muted, #aaa); line-height: 1.6;">Silakan isi formulir di bawah ini. Concierge kami akan meninjau ketersediaan alokasi unit dan menghubungi Anda untuk konfirmasi janji temu offline.</p>
      </div>

      <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 16px;">
          <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Model Jam Tangan</label>
          <input type="text" id="modal_watch_model" name="watch_model" class="input-field" readonly style="background: rgba(255,255,255,0.05); color: var(--gold, #c4a062); font-weight: bold;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Nama Lengkap</label>
            <input type="text" name="full_name" class="input-field" required placeholder="Nama Anda">
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Nomor WhatsApp</label>
            <input type="text" name="phone" class="input-field" required placeholder="08xxxxxxxxxx">
          </div>
        </div>

        <div style="margin-bottom: 16px;">
          <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Email</label>
          <input type="email" name="email" class="input-field" required placeholder="nama@email.com">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; margin-bottom: 24px;">
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Showroom</label>
            <select name="showroom_location" class="input-field" required style="background: #111; color: #fff;">
              <option value="Bandung">Bandung</option>
              <option value="Jakarta">Jakarta</option>
              <option value="Surabaya">Surabaya</option>
            </select>
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Tanggal</label>
            <input type="date" name="appointment_date" class="input-field" required style="background: #111; color: #fff;">
          </div>
          <div>
            <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-dim, #888); margin-bottom: 6px;">Waktu</label>
            <select name="appointment_time" class="input-field" required style="background: #111; color: #fff;">
              <option value="11:00 WIB">11:00 WIB</option>
              <option value="14:00 WIB">14:00 WIB</option>
              <option value="17:00 WIB">17:00 WIB</option>
              <option value="19:00 WIB">19:00 WIB</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn-gold-fill" style="width: 100%; padding: 14px; font-size: 11px; cursor: pointer;">KIRIM PERMOHONAN PRE-ORDER</button>
      </form>
    </div>
  </div>

  <!-- MODAL SERTIFIKAT PEMBELI PER ITEM JAM -->
  <div id="certificate-modal" style="display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.9); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #111111; border: 1px solid var(--border-gold, #c4a062); max-width: 680px; width: 100%; padding: 32px; position: relative; text-align: center;">
      
      <button onclick="closeCertificateModal()" style="position: absolute; top: 16px; right: 16px; background: none; border: none; color: var(--gold, #c4a062); font-size: 24px; cursor: pointer;">&times;</button>

      <h3 style="font-family: 'Cormorant', serif; font-size: 26px; color: var(--gold, #c4a062); font-weight: 300; margin-bottom: 4px;">Certificate of Authenticity</h3>
      <p id="cert_watch_title" style="font-size: 13px; color: var(--text-main, #fff); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 16px; font-weight: 500;"></p>

      <div style="border: 1px solid rgba(196,160,98,0.3); overflow: hidden; background: #000; margin-bottom: 20px;">
        <img src="{{ asset('images/sertifikatjam.png') }}" alt="SOVEREIGN Official Certificate" style="width: 100%; height: auto; max-height: 420px; object-fit: contain; display: block; margin: 0 auto;">
      </div>

      <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(196,160,98,0.2); padding-top: 16px; margin-bottom: 20px; text-align: left;">
        <div>
          <p style="font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 2px;">Warranty Coverage</p>
          <p style="font-size: 12px; color: var(--text-dim, #888);">5-Year Official International Guarantee</p>
        </div>
        <div style="text-align: right;">
          <p style="font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold, #c4a062); margin-bottom: 2px;">Authorized Executive Signature</p>
          <p style="font-family: 'Cormorant', serif; font-size: 16px; color: var(--text-main, #fff); font-weight: 400;">M Fabiah Khusyaeri</p>
          <p style="font-size: 9px; color: var(--text-dim, #888); text-transform: uppercase;">Chief Executive Officer & Founder</p>
        </div>
      </div>

      <button onclick="closeCertificateModal()" class="btn-gold-fill" style="padding: 10px 28px; font-size: 11px; cursor: pointer;">CLOSE PREVIEW</button>
    </div>
  </div>

  <script>
    function openAppointmentModal(watchModel) {
      document.getElementById('modal_watch_model').value = watchModel;
      document.getElementById('appointment-modal').style.display = 'flex';
    }

    function closeAppointmentModal() {
      document.getElementById('appointment-modal').style.display = 'none';
    }

    function openCertificateModal(watchModel) {
      document.getElementById('cert_watch_title').innerText = 'Included with ' + watchModel;
      document.getElementById('certificate-modal').style.display = 'flex';
    }

    function closeCertificateModal() {
      document.getElementById('certificate-modal').style.display = 'none';
    }
  </script>
</body>
</html>