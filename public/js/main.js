// 1. Sembunyikan Preloader saat halaman selesai dimuat
window.addEventListener('load', () => {
  const preloader = document.getElementById('preloader');
  if (preloader) {
    preloader.style.opacity = '0';
    preloader.style.visibility = 'hidden';
    setTimeout(() => {
      preloader.style.display = 'none';
    }, 800);
  }
});

// 2. Inisialisasi Lucide Icons
lucide.createIcons();

// 3. Smooth Scrolling
function scrollToId(id) {
  const el = document.getElementById(id);
  if (el) {
    el.scrollIntoView({ behavior: 'smooth' });
  }
  const mobileMenu = document.getElementById('mobile-menu');
  if (mobileMenu) {
    mobileMenu.style.display = 'none';
  }
}

// 4. Navbar Scroll Effect
window.addEventListener('scroll', () => {
  const navbar = document.getElementById('navbar');
  if (navbar) {
    if (window.scrollY > 48) {
      navbar.style.background = 'rgba(8,8,8,0.96)';
      navbar.style.backdropFilter = 'blur(12px)';
      navbar.style.borderBottomColor = 'rgba(196,160,98,0.18)';
    } else {
      navbar.style.background = 'transparent';
      navbar.style.backdropFilter = 'none';
      navbar.style.borderBottomColor = 'transparent';
    }
  }
});

// 5. Mobile Menu Toggle
let menuOpen = false;
const mobileToggle = document.getElementById('mobile-toggle');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileToggle && mobileMenu) {
  mobileToggle.addEventListener('click', () => {
    menuOpen = !menuOpen;
    mobileMenu.style.display = menuOpen ? 'block' : 'none';
  });
}

// 6. Toggle Detail Spesifikasi Jam Tangan
function toggleWatchDetails(detailsId, iconId) {
  const detailsEl = document.getElementById(detailsId);
  const iconEl = document.getElementById(iconId);
  
  if (!detailsEl || !iconEl) return;

  const isOpen = detailsEl.classList.contains('active');

  // Tutup semua yang terbuka
  document.querySelectorAll('.watch-details').forEach(el => el.classList.remove('active'));
  document.querySelectorAll('.chevron-icon').forEach(el => el.classList.remove('rotate'));

  // Buka jika belum terbuka
  if (!isOpen) {
    detailsEl.classList.add('active');
    iconEl.classList.add('rotate');
  }
}

// 7. Form Newsletter
function handleSubscribe() {
  const emailInput = document.getElementById('newsletter-email');
  if (emailInput && emailInput.value) {
    const container = document.getElementById('newsletter-container');
    if (container) {
      container.innerHTML = `
        <div style="font-size: 13px; color: var(--gold); border: 1px solid var(--gold); padding: 12px 24px; letter-spacing: 0.1em;">
          Thank you for joining ✦
        </div>
      `;
    }
  }
}