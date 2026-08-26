<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Journal, Reviews & Testimonials - SOVEREIGN</title>
  
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
      background-color: var(--bg-dark, #080808);
      color: var(--text-main, #e5e5e5);
      font-family: 'Jost', sans-serif;
      margin: 0;
      padding: 0;
    }

    .card-dark {
      background: #111111;
      border: 1px solid rgba(196, 160, 98, 0.25);
      padding: 32px;
      transition: all 0.3s ease;
    }
    .card-dark:hover {
      border-color: var(--gold, #c4a062);
    }

    .input-dark {
      width: 100%;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(196, 160, 98, 0.3);
      color: #ffffff;
      padding: 10px 14px;
      font-size: 12px;
      outline: none;
      font-family: 'Jost', sans-serif;
    }
    .input-dark:focus {
      border-color: #c4a062;
      box-shadow: 0 0 8px rgba(196, 160, 98, 0.3);
    }

    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
      color: #c4a062 !important;
      text-shadow: 0 0 8px rgba(196, 160, 98, 0.5);
    }

    @media (max-width: 992px) {
      .grid-layout, .testimonial-grid {
        grid-template-columns: 1fr !important;
      }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <header style="background: rgba(8,8,8,0.95); border-bottom: 1px solid rgba(196, 160, 98, 0.2); padding: 18px 0; sticky: top; z-index: 100;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; padding: 0 48px;">
      <a href="{{ url('/') }}" style="text-decoration: none; display: flex; flex-direction: column;">
        <div style="font-family: 'Cormorant', serif; font-size: 24px; letter-spacing: 0.45em; color: #c4a062; font-weight: 300; line-height: 1;">
          SOVEREIGN
        </div>
        <div style="font-size: 8px; letter-spacing: 0.28em; color: #888888; text-transform: uppercase; margin-top: 5px;">
          Horlogerie de Prestige
        </div>
      </a>

      <a href="{{ url('/') }}" class="btn-gold-outline" style="padding: 8px 20px; font-size: 11px; text-decoration: none; border: 1px solid #c4a062; color: #c4a062;">
        &larr; BACK TO HOME
      </a>
    </div>
  </header>

  <!-- HERO HEADER -->
  <section style="padding: 70px 24px 40px; text-align: center; background: linear-gradient(to bottom, #080808, #111111);">
    <div class="container">
      <p style="color: #c4a062; font-size: 10px; letter-spacing: 0.45em; text-transform: uppercase; margin-bottom: 16px;">
        INSIGHTS & PATRON TESTIMONIALS
      </p>
      <h1 style="font-family: 'Cormorant', serif; font-weight: 300; font-size: clamp(32px, 5vw, 56px); color: #ffffff; margin: 0 0 16px;">
        Articles, Ratings & <em style="color: #c4a062; font-style: italic;">Testimonials</em>
      </h1>
      <p style="color: #888888; font-size: 13px; max-width: 600px; margin: 0 auto; line-height: 1.8; font-weight: 300;">
        Jelajahi wawasan dunia pembuat jam tangan mewah, baca testimonial para kolektor, dan berikan ulasan pengalaman Anda bersama Sovereign.
      </p>
    </div>
  </section>

  <!-- SECTION 1: ARTIKEL & FORM ULASAN -->
  <section style="padding: 60px 24px; border-top: 1px solid rgba(196, 160, 98, 0.2);">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
      <div class="grid-layout" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: start;">
        
        <!-- KOLOM KIRI: DAFTAR ARTIKEL -->
        <div>
          <div style="margin-bottom: 24px;">
            <span style="color: #c4a062; font-size: 10px; letter-spacing: 0.3em; text-transform: uppercase;">HORLOGERIE JOURNAL</span>
            <h2 style="font-family: 'Cormorant', serif; font-size: 30px; font-weight: 300; color: #fff; margin: 4px 0 0;">All Featured Articles</h2>
          </div>

          <div style="display: flex; flex-direction: column; gap: 24px;">
            
            <article class="card-dark" style="display: flex; gap: 20px; align-items: center;">
              <img src="https://omniluxe.id/cdn/shop/files/ROLEXDAYTONAPANDA-1.jpg?v=1787565534&width=700" alt="Article 1" style="width: 140px; height: 110px; object-fit: cover; filter: brightness(0.85);">
              <div>
                <span style="font-size: 9px; color: #c4a062; letter-spacing: 0.2em; text-transform: uppercase;">Craftsmanship — May 2026</span>
                <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: #fff; margin: 6px 0; font-weight: 400;">The Art of Hand-Finished Tourbillon Calibers</h3>
                <p style="font-size: 12px; color: #888; line-height: 1.6; margin: 0 0 10px;">Proses presisi merakit ratusan komponen mikro pada gerakan tourbillon khas Sovereign.</p>
                <a href="#" style="font-size: 10px; color: #c4a062; letter-spacing: 0.15em; text-decoration: none; text-transform: uppercase;">READ ARTICLE &rarr;</a>
              </div>
            </article>

            <article class="card-dark" style="display: flex; gap: 20px; align-items: center;">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=400&auto=format&fit=crop" alt="Article 2" style="width: 140px; height: 110px; object-fit: cover; filter: brightness(0.85);">
              <div>
                <span style="font-size: 9px; color: #c4a062; letter-spacing: 0.2em; text-transform: uppercase;">Materials — April 2026</span>
                <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: #fff; margin: 6px 0; font-weight: 400;">18K Rose Gold & Meteorite Dial Finishes</h3>
                <p style="font-size: 12px; color: #888; line-height: 1.6; margin: 0 0 10px;">Eksplorasi paduan material langka dari batu meteorit asli dan emas murni 18 karat.</p>
                <a href="#" style="font-size: 10px; color: #c4a062; letter-spacing: 0.15em; text-decoration: none; text-transform: uppercase;">READ ARTICLE &rarr;</a>
              </div>
            </article>

            <article class="card-dark" style="display: flex; gap: 20px; align-items: center;">
              <img src="https://omniluxe.id/cdn/shop/files/ap-royal-oak-offshore-chrono-_6.jpg?v=1787138881&width=700" alt="Article 3" style="width: 140px; height: 110px; object-fit: cover; filter: brightness(0.85);">
              <div>
                <span style="font-size: 9px; color: #c4a062; letter-spacing: 0.2em; text-transform: uppercase;">Heritage — March 2026</span>
                <h3 style="font-family: 'Cormorant', serif; font-size: 20px; color: #fff; margin: 6px 0; font-weight: 400;">Understanding COSC Accuracy & Testing</h3>
                <p style="font-size: 12px; color: #888; line-height: 1.6; margin: 0 0 10px;">Mengapa standar pengujian COSC menjadi garansi mutlak akurasi tiap jam Sovereign.</p>
                <a href="#" style="font-size: 10px; color: #c4a062; letter-spacing: 0.15em; text-decoration: none; text-transform: uppercase;">READ ARTICLE &rarr;</a>
              </div>
            </article>

          </div>
        </div>

        <!-- KOLOM KANAN: FORM SUBMIT ULASAN -->
        <div>
          <div class="card-dark">
            <div style="text-align: center; margin-bottom: 24px;">
              <span style="display: inline-block; background: rgba(196,160,98,0.15); border: 1px solid #c4a062; color: #c4a062; font-size: 9px; letter-spacing: 0.25em; text-transform: uppercase; padding: 4px 12px; margin-bottom: 10px;">
                PATRON FEEDBACK
              </span>
              <h3 style="font-family: 'Cormorant', serif; font-size: 24px; color: #ffffff; font-weight: 300; margin: 0;">
                Submit Rating & Review
              </h3>
            </div>

            @if(session('success'))
              <div style="background: rgba(196,160,98,0.15); border: 1px solid #c4a062; color: #c4a062; padding: 10px; font-size: 11px; text-align: center; margin-bottom: 20px;">
                {{ session('success') }}
              </div>
            @endif

            <form action="{{ route('reviews.store') }}" method="POST">
              @csrf

              <div style="margin-bottom: 18px;">
                <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">Watch Model / Topic</label>
                <select name="watch_model" class="input-dark" required style="height: auto; min-height: 42px;">
                  <option value="" disabled selected>Select Watch Model</option>
                  <option value="Imperial Classic">Imperial Classic</option>
                  <option value="Sovereign Noir">Sovereign Noir</option>
                  <option value="Tourbillon Noir">Tourbillon Noir</option>
                  <option value="Skeleton Rose">Skeleton Rose</option>
                  <option value="Astro Moonphase">Astro Moonphase</option>
                  <option value="General Service">Concierge Service</option>
                </select>
              </div>

              <div style="margin-bottom: 20px; text-align: center;">
                <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: #c4a062; margin-bottom: 8px;">Select Rating</label>
                <div class="star-rating" style="display: flex; flex-direction: row-reverse; justify-content: center; gap: 6px;">
                  <input type="radio" id="st5" name="rating" value="5" required style="display: none;" />
                  <label for="st5" title="5 Stars" style="font-size: 26px; color: #333; cursor: pointer;">★</label>

                  <input type="radio" id="st4" name="rating" value="4" style="display: none;" />
                  <label for="st4" title="4 Stars" style="font-size: 26px; color: #333; cursor: pointer;">★</label>

                  <input type="radio" id="st3" name="rating" value="3" style="display: none;" />
                  <label for="st3" title="3 Stars" style="font-size: 26px; color: #333; cursor: pointer;">★</label>

                  <input type="radio" id="st2" name="rating" value="2" style="display: none;" />
                  <label for="st2" title="2 Stars" style="font-size: 26px; color: #333; cursor: pointer;">★</label>

                  <input type="radio" id="st1" name="rating" value="1" style="display: none;" />
                  <label for="st1" title="1 Star" style="font-size: 26px; color: #333; cursor: pointer;">★</label>
                </div>
              </div>

              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 18px;">
                <div>
                  <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">Name</label>
                  <input type="text" name="user_name" class="input-dark" required placeholder="Name" value="{{ auth()->check() ? auth()->user()->name : '' }}">
                </div>
                <div>
                  <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">City</label>
                  <input type="text" name="city" class="input-dark" required placeholder="City">
                </div>
              </div>

              <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 10px; letter-spacing: 0.18em; text-transform: uppercase; color: #888888; margin-bottom: 6px;">Review / Feedback</label>
                <textarea name="review_text" rows="3" class="input-dark" required placeholder="Write your experience with Sovereign..." style="resize: none; line-height: 1.5;"></textarea>
              </div>

              <button type="submit" style="width: 100%; padding: 12px; background: linear-gradient(135deg, #c4a062, #9a7b41); color: #080808; border: none; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; cursor: pointer;">
                SUBMIT RATING & REVIEW
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: DAFTAR TESTIMONIALS (100 PATRON REVIEWS) -->
  <section style="padding: 80px 24px; background: #0c0c0c; border-top: 1px solid rgba(196, 160, 98, 0.2);">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
      
      <div style="text-align: center; margin-bottom: 50px;">
        <span style="color: #c4a062; font-size: 10px; letter-spacing: 0.35em; text-transform: uppercase;">PATRON TESTIMONIALS ARCHIVE</span>
        <h2 style="font-family: 'Cormorant', serif; font-size: 36px; font-weight: 300; color: #fff; margin: 8px 0 0;">100 Collector & Client Reviews</h2>
        <p style="font-size: 12px; color: #888; max-width: 500px; margin: 10px auto 0;">Kumpulan 100 ulasan terverifikasi dari para kolektor jam tangan mewah Sovereign di seluruh dunia.</p>
      </div>

      @php
        // ARRAY DUMMY 100 TESTIMONIAL DINAMIS
        $names = ['Alexander Wright', 'Dr. Aris Thorne', 'Jonathan Vance', 'M. Fabian Khusyaeri', 'David Miller', 'Richard Sterling', 'Hendra Wijaya', 'Budi Santoso', 'Michael Chen', 'Marcus Vance', 'Gabriel Santos', 'Robert Langdon'];
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Medan', 'Bali', 'Singapore', 'Tokyo', 'London', 'Geneva', 'New York'];
        $models = ['Imperial Classic', 'Sovereign Noir', 'Tourbillon Noir', 'Skeleton Rose', 'Astro Moonphase', 'Grand Regulator', 'Marine Chronometer', 'Platinum Perpetual'];
        $comments = [
            "Finishing pada case Rose Gold Sovereign sungguh luar biasa. Detail gerakan tourbillon-nya sangat halus dan presisi.",
            "Astro Moonphase dengan dial batu meteorit asli adalah salah satu jam terbaik di koleksi saya. Presisi COSC terbukti akurat.",
            "Pengalaman privat tour di Cleanroom Atelier lantai 2 memberi wawasan mendalam tentang dedikasi Sovereign.",
            "Pelayanan VIP Concierge di showroom Dago Bandung sangat memuaskan. Pengiriman sangat aman sampai ke tangan.",
            "Desain skeleton yang luar biasa indah. Kualitas sebanding dengan brand jam independen Swiss papan atas.",
            "Material sapphire glass dan bezel keramiknya tahan gores dengan sangat baik. Sangat direkomendasikan untuk kolektor.",
            "Jam tangan ini menjadi masterpiece dalam koleksi pribadi saya. Presisi waktunya tidak pernah meleset.",
            "Sangat mengagumi pengerjaan manual engraver pada case emas 18k ini. Benar-benar karya seni sejati."
        ];
      @endphp

      <!-- CONTAINER SCROLLABLE DENGAN MAX HEIGHT -->
      <div style="max-height: 800px; overflow-y: auto; padding-right: 12px; border: 1px solid rgba(196,160,98,0.15); padding: 24px; background: rgba(0,0,0,0.4);">
        <div class="testimonial-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
          
          @for ($i = 1; $i <= 100; $i++)
            @php
              $name = $names[array_rand($names)];
              $city = $cities[array_rand($cities)];
              $model = $models[array_rand($models)];
              $comment = $comments[array_rand($comments)];
              $rating = rand(4, 5); // Rating 4 atau 5 Bintang
            @endphp

            <div class="card-dark" style="position: relative; background: #111111; border: 1px solid rgba(196, 160, 98, 0.2); padding: 24px;">
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <div style="color: #c4a062; font-size: 14px;">
                  @for ($r = 0; $r < $rating; $r++) ★ @endfor
                </div>
                <span style="font-size: 8px; color: #888; letter-spacing: 0.1em;">#REVIEW-{{ sprintf('%03d', $i) }}</span>
              </div>

              <div style="font-size: 10px; color: #c4a062; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 8px;">
                {{ $model }}
              </div>

              <p style="font-size: 12px; color: #bbb; line-height: 1.6; font-style: italic; margin-bottom: 18px;">
                "{{ $comment }}"
              </p>

              <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid rgba(196,160,98,0.15); padding-top: 12px;">
                <div>
                  <div style="font-family: 'Cormorant', serif; font-size: 16px; color: #fff;">{{ $name }}</div>
                  <div style="font-size: 9px; color: #777; text-transform: uppercase; letter-spacing: 0.1em;">{{ $city }} — Patron</div>
                </div>
                <span style="font-size: 8px; color: #c4a062; border: 1px solid rgba(196,160,98,0.3); padding: 2px 6px;">VERIFIED</span>
              </div>
            </div>
          @endfor

        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer style="background: #000; border-top: 1px solid rgba(196, 160, 98, 0.2); padding: 32px 24px; text-align: center; font-size: 11px; color: #666;">
    <p>© 2026 Sovereign Horlogerie. Journal, Reviews & Testimonials Experience.</p>
  </footer>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>