<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Information & Atelier Blueprint - SOVEREIGN</title>
  
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
    body {
      background-color: var(--bg-dark);
      color: var(--text-main);
      font-family: 'Jost', sans-serif;
    }

    .info-card {
      background: var(--bg-card);
      border: 1px solid var(--border-gold);
      padding: 32px;
      transition: border-color 0.3s ease;
    }
    .info-card:hover {
      border-color: var(--gold);
    }

    .blueprint-container {
      border: 1px solid var(--border-gold);
      background: #000;
      position: relative;
      overflow: hidden;
    }

    /* Responsive Grid */
    @media (max-width: 768px) {
      .grid-2, .grid-3, .grid-4, .blueprint-grid {
        grid-template-columns: 1fr !important;
      }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <header style="background: rgba(8,8,8,0.95); border-bottom: 1px solid var(--border-gold); padding: 24px 0; sticky: top; z-index: 100;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; padding: 0 48px;">
      <a href="{{ url('/') }}" style="text-decoration: none; display: flex; flex-direction: column;">
        <div style="font-family: 'Cormorant', serif; font-size: 24px; letter-spacing: 0.45em; color: var(--gold); font-weight: 300; line-height: 1;">
          SOVEREIGN
        </div>
        <div style="font-size: 8px; letter-spacing: 0.28em; color: var(--text-dim); text-transform: uppercase; margin-top: 5px;">
          Horlogerie de Prestige
        </div>
      </a>

      <a href="{{ url('/') }}" class="btn-gold-outline" style="padding: 8px 20px; font-size: 11px; text-decoration: none;">
        &larr; BACK TO HOME
      </a>
    </div>
  </header>

  <!-- HERO TITLE -->
  <section style="padding: 80px 24px 40px; text-align: center; background: linear-gradient(to bottom, #080808, #111111);">
    <div class="container">
      <p style="color: var(--gold); font-size: 10px; letter-spacing: 0.45em; text-transform: uppercase; margin-bottom: 16px;">
        CORPORATE OVERVIEW & ATELIER BLUEPRINT
      </p>
      <h1 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(36px, 5vw, 64px); color: var(--text-main); margin: 0 0 16px;">
        Full Information & Facility <em style="color: var(--gold); font-style: italic;">Layout</em>
      </h1>
      <p style="color: var(--text-muted); font-size: 13px; max-width: 600px; margin: 0 auto; line-height: 1.8; font-weight: 300;">
        Transparency regarding the organizational structure, number of work divisions, and architectural layout of Sovereign Horlogerie’s main workshop in Bandung.
      </p>
    </div>
  </section>

  <!-- SECTION 1: DETAILED WORKFORCE & DIVISION STATS -->
  <section style="padding: 60px 24px; border-top: 1px solid var(--border-gold);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 48px;">
        <p style="color: var(--gold); font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: 8px;">Human Capital Structure</p>
        <h2 style="font-family: 'Cormorant', serif; font-size: 36px; font-weight: 300;">Division Breakdown</h2>
      </div>

      <div class="grid-4" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;">
        <div class="info-card" style="text-align: center;">
          <i data-lucide="wrench" style="width: 28px; height: 28px; color: var(--gold); margin-bottom: 16px;"></i>
          <div style="font-family: 'Cormorant', serif; font-size: 36px; color: var(--gold);">65 Staff</div>
          <div style="font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-main); margin-top: 8px;">Horlogers & Movement Technicians</div>
          <p style="font-size: 12px; color: var(--text-muted); margin-top: 12px; line-height: 1.6;">Responsible for the assembly of mechanical calibers and COSC accuracy calibration.</p>
        </div>

        <div class="info-card" style="text-align: center;">
          <i data-lucide="palette" style="width: 28px; height: 28px; color: var(--gold); margin-bottom: 16px;"></i>
          <div style="font-family: 'Cormorant', serif; font-size: 36px; color: var(--gold);">25 Staff</div>
          <div style="font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-main); margin-top: 8px;">Aesthetics & Case Engravers</div>
          <p style="font-size: 12px; color: var(--text-muted); margin-top: 12px; line-height: 1.6;">Focusing on dial finishing, sapphire glass cutting, and gold engraving.</p>
        </div>

        <div class="info-card" style="text-align: center;">
          <i data-lucide="shield-check" style="width: 28px; height: 28px; color: var(--gold); margin-bottom: 16px;"></i>
          <div style="font-family: 'Cormorant', serif; font-size: 36px; color: var(--gold);">20 Staff</div>
          <div style="font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-main); margin-top: 8px;">Quality Control & Testing</div>
          <p style="font-size: 12px; color: var(--text-muted); margin-top: 12px; line-height: 1.6;">Conducting ISO 22810 water resistance testing and JIS standard impact testing.</p>
        </div>

        <div class="info-card" style="text-align: center;">
          <i data-lucide="building" style="width: 28px; height: 28px; color: var(--gold); margin-bottom: 16px;"></i>
          <div style="font-family: 'Cormorant', serif; font-size: 36px; color: var(--gold);">40 Staff</div>
          <div style="font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-main); margin-top: 8px;">Client Concierge & Executive</div>
          <p style="font-size: 12px; color: var(--text-muted); margin-top: 12px; line-height: 1.6;">Managing VIP private services, after-sales warranty support, and showroom operations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: ARCHITECTURAL BLUEPRINT & DENAH BANGUNAN 2 LANTAI -->
  <section style="padding: 80px 24px; background: var(--bg-card); border-top: 1px solid var(--border-gold);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 48px;">
        <p style="color: var(--gold); font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: 8px;">Architectural Plan</p>
        <h2 style="font-family: 'Cormorant', serif; font-size: 36px; font-weight: 300;">Flagship Atelier & Showroom Blueprint</h2>
        <p style="font-size: 13px; color: var(--text-muted); max-width: 500px; margin: 12px auto 0;">The layout of the 2-story Sovereign Atelier located in Dago, Bandung.</p>
      </div>

      <!-- BLUEPRINT IMAGES GRID (2 LANTAI) -->
      <div class="blueprint-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 1100px; margin: 0 auto 48px;">
        <!-- Denah Lantai 1 -->
        <div class="blueprint-container" style="padding: 20px; text-align: center; border: 1px solid var(--border-gold); background: #000;">
          <div style="position: absolute; top: 12px; left: 12px; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); padding: 4px 10px; font-size: 9px; color: var(--gold); letter-spacing: 0.2em; z-index: 2;">
            1ST FLOOR PLAN (SHOWROOM & OFFICES)
          </div>
          <img src="{{ asset('images/denah.png') }}" alt="Sovereign Atelier Blueprint - Floor 1" style="width: 100%; height: auto; display: block; filter: brightness(0.9) contrast(1.1); margin-top: 24px;">
        </div>

        <!-- Denah Lantai 2 -->
        <div class="blueprint-container" style="padding: 20px; text-align: center; border: 1px solid var(--border-gold); background: #000;">
          <div style="position: absolute; top: 12px; left: 12px; background: rgba(196,160,98,0.15); border: 1px solid var(--gold); padding: 4px 10px; font-size: 9px; color: var(--gold); letter-spacing: 0.2em; z-index: 2;">
            2ND FLOOR PLAN (ATELIER & CLEANROOM)
          </div>
          <img src="{{ asset('images/denah2.png') }}" alt="Sovereign Atelier Blueprint - Floor 2" style="width: 100%; height: auto; display: block; filter: brightness(0.9) contrast(1.1); margin-top: 24px;">
        </div>
      </div>

      <!-- KETERANGAN AREA DENAH 2 LANTAI -->
      <div class="grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; max-width: 1100px; margin: 0 auto;">
        <div style="border-left: 2px solid var(--gold); padding-left: 20px; background: rgba(255,255,255,0.01); padding-top: 16px; padding-bottom: 16px;">
          <h4 style="font-family: 'Cormorant', serif; font-size: 22px; color: var(--gold); margin-bottom: 8px; font-weight: 400;">1st Floor: Public Boutique & VIP Lounge</h4>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.8; font-weight: 300;">
            The ground floor features the main watch gallery, a private VIP viewing lounge, a service concierge desk for warranty claims and repairs, and a coffee bar to welcome horology enthusiasts.
          </p>
        </div>

        <div style="border-left: 2px solid var(--gold); padding-left: 20px; background: rgba(255,255,255,0.01); padding-top: 16px; padding-bottom: 16px;">
          <h4 style="font-family: 'Cormorant', serif; font-size: 22px; color: var(--gold); margin-bottom: 8px; font-weight: 400;">2nd Floor: Master Atelier & Cleanroom Assembly</h4>
          <p style="font-size: 12px; color: var(--text-muted); line-height: 1.8; font-weight: 300;">
            A dust-free laboratory (ISO 7 cleanroom) for automatic movement assembly and COSC testing, a dial design studio, and executive offices for the CEO and directors.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: FORM PENGAJUAN TOUR / INQUIRY DENAH -->
  <section style="padding: 80px 24px; border-top: 1px solid var(--border-gold);">
    <div class="container" style="max-width: 680px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 14px; display: inline-block; margin-bottom: 12px;">FACILITY ACCESS</span>
        <h2 style="font-family: 'Cormorant', serif; font-size: 32px; font-weight: 300;">Request Atelier Facility Tour</h2>
        <p style="font-size: 12px; color: var(--text-muted); line-height: 1.6;">Want to see the Sovereign Atelier layout and watch-making process in Bandung? Submit your private tour request.</p>
      </div>

      <div class="info-card">
        <form onsubmit="event.preventDefault(); alert('Permohonan Tour Facility Anda telah dikirim! Tim Concierge kami akan menghubungi Anda.');">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div>
              <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Full Name</label>
              <input type="text" class="input-field" placeholder="Full Name" required style="width: 100%; box-sizing: border-box;">
            </div>
            <div>
              <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Email</label>
              <input type="email" class="input-field" placeholder="name@email.com" required style="width: 100%; box-sizing: border-box;">
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div>
              <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Company / Institution</label>
              <input type="text" class="input-field" placeholder="Instansi / Personal" style="width: 100%; box-sizing: border-box;">
            </div>
            <div>
              <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Target Visit Date</label>
              <input type="date" class="input-field" required style="width: 100%; box-sizing: border-box; background: #111; color: #fff;">
            </div>
          </div>

          <div style="margin-bottom: 24px;">
  <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: var(--text-dim); margin-bottom: 6px;">Area of Interest</label>
  <select class="input-field" style="width: 100%; box-sizing: border-box; background: #111; color: #fff; padding: 10px 12px; height: auto; min-height: 44px; line-height: 1.4;">
    <option value="cleanroom">Laboratorium Cleanroom Assembly (Lantai 2)</option>
    <option value="lounge">VIP Showroom Lounge (Lantai 1)</option>
  </select>
</div>

          <button type="submit" class="btn-gold-fill" style="width: 100%; padding: 14px; font-size: 11px; cursor: pointer;">SUBMIT FACILITY TOUR REQUEST</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer style="background: #000; border-top: 1px solid var(--border-gold); padding: 32px 24px; text-align: center; font-size: 11px; color: var(--text-dim);">
    <p>© 2026 Sovereign Horlogerie. Facility & Structural Documentation.</p>
  </footer>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>