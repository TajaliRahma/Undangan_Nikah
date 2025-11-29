<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pernikahan Tajali & Rahma - 8.12.25</title>

  <!-- ✅ Font Awesome (versi stabil) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Cormorant+Garamond:wght@400;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">


  <!-- Tailwind CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet"
  />

  <style>
    html { scroll-behavior: smooth; }
    .fade-in { animation: fadeIn 1s ease-in-out; }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Hide scrollbars for gallery */
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    .blur-bg {
    filter: blur(5px);
    transition: 0.3s ease;
}

/* Popup container */
#customPopup {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.45);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

/* Popup card */
.popup-card {
    background: white;
    padding: 25px;
    border-radius: 16px;
    width: 300px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    border: 2px solid #7f1d1d;
}
/* BACKDROP */
#customPopup {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  backdrop-filter: blur(3px);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

/* Saat aktif → SHOW */
#customPopup.active {
  display: flex;
}

/* CARD POPUP */
.popup-card {
  background: white;
  padding: 20px;
  width: 90%;
  max-width: 380px;
  border-radius: 16px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.3);
  animation: popupFadeIn 0.25s ease-out;
}

@keyframes popupFadeIn {
  from { transform: scale(0.85); opacity: 0; }
  to   { transform: scale(1); opacity: 1; }
}

/* BLUR background */
.blur-sm {
  filter: blur(4px);
}
/* Desktop – tetap center seperti desain awal */
.hero-content {
  justify-content: center;
}

/* Fonts */
.wedding-subtitle {
  font-family: 'Great Vibes', cursive;
  font-size: 3rem;
  margin-bottom: 0.3rem;
}

.wedding-names {
  font-family: 'Cormorant Garamond', serif;
  font-size: 4.2rem;
  font-weight: 700;
  line-height: 1.1;
}

.wedding-date {
  font-family: 'Playfair Display', serif;
  font-size: 1.3rem;
  margin-top: 0.6rem;
}

/* MOBILE ADJUSTMENTS */
@media (max-width: 768px) {

  .hero-content {
    justify-content: flex-start;
    padding-top: 80px; /* naik sedikit, TIDAK mentok atas */
  }

  .wedding-subtitle {
    font-size: 2.2rem;  /* lebih kecil */
  }

  .wedding-names {
    font-size: 2.9rem;  /* lebih kecil agar tidak memakan frame foto */
    line-height: 1.05;
  }

  .wedding-date {
    font-size: 1.05rem;
  }
}
@media (max-width: 480px) {
  h2 { font-size: 26px !important; }
  #countdown { font-size: 20px !important; }
  p { font-size: 13px !important; line-height: 1.4 !important; }
  a { padding: 10px 18px !important; font-size: 13px !important; }
}

  /* === PREMIUM WEDDING CARD === */
  .wedding-card {
    max-width: 750px;
    margin: 80px auto;
    padding: 50px 40px;
    border-radius: 28px;
    background: rgba(255, 255, 255, 0.55);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.12);
    border: 1px solid rgba(255, 255, 255, 0.35);
    text-align: center;
  }

  .wedding-title {
    font-family: "Playfair Display", serif;
    font-size: 38px;
    font-weight: 700;
    color: #7a003c;
    letter-spacing: 1px;
  }

  .wedding-sub {
    font-family: "Inter", sans-serif;
    font-size: 16px;
    color: #6b4b5a;
    margin-top: 6px;
  }

  .countdown-premium {
    font-family: "Playfair Display", serif;
    font-size: 34px;
    font-weight: 700;
    color: #6a002e;
    margin: 32px 0;
  }

  .btn-premium {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #b40a4a, #db1970);
    color: white;
    padding: 12px 26px;
    border-radius: 35px;
    font-size: 15px;
    font-weight: 600;
    box-shadow: 0 8px 20px rgba(219, 18, 94, 0.28);
    transition: 0.2s;
  }
  .btn-premium:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(219, 18, 94, 0.38);
  }

  </style>
</head>

<body class="text-gray-800 overflow-x-hidden bg-gradient-to-b from-pink-50 via-pink-50 to-white">
<div id="mainContent">
  <!-- Hero -->
  <!-- HERO SECTION -->
<!-- HERO SECTION -->
<section class="relative h-screen bg-cover bg-center hero-bg"
         style="background-image: url('/images/hero/1.jpg');">

  <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center 
              text-center text-white px-6 hero-content">

    <h1 class="wedding-subtitle fade-in">
      The Wedding Of
    </h1>

    <h2 class="wedding-names fade-in">
      Tajali & Rahma
    </h2>

    <p class="wedding-date fade-in">
      7 Desember 2025
    </p>

  </div>
</section>




  <!-- Semua section berikut dalam satu gradasi -->
<section class="bg-gradient-to-b from-pink-50 via-pink-100 to-white py-24">

  <!-- PROFIL MEMPELAI -->
<div class="flex flex-col md:flex-row items-center justify-center gap-16 px-4 md:px-6 mb-24">

  <!-- 👦 Mempelai Pria -->
  <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl 
              p-7 md:p-10 text-center w-full max-w-xs md:max-w-sm lg:max-w-md 
              transition-all transform hover:-translate-y-2 hover:shadow-pink-200">

      <img src="/images/hero/jali.jpg"
           alt="Tajali"
           class="w-28 h-28 md:w-40 md:h-40 object-cover rounded-full mx-auto mb-5 md:mb-6 shadow-lg border-4 border-pink-100">

      <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Tajali</h3>

      <div class="border-t-2 border-pink-200 my-3 md:my-4 w-20 md:w-24 mx-auto"></div>

      <p class="text-sm md:text-base text-gray-600 leading-relaxed">
        <span class="font-medium">Ahmad Tajali</span><br>
        Putra dari Bapak <span class="font-semibold">Muhammad Sani</span><br>
        & Ibu <span class="font-semibold">Haniah</span>
      </p>

      <a href="https://instagram.com/tajali10_" target="_blank"
         class="absolute -bottom-7 md:-bottom-8 left-1/2 transform -translate-x-1/2 
                bg-pink-500 text-white p-3 md:p-4 rounded-full shadow-lg hover:bg-pink-600 transition">
        <i class="fab fa-instagram text-xl md:text-2xl"></i>
      </a>
  </div>

  <!-- 👰 Mempelai Wanita -->
  <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl 
              p-7 md:p-10 text-center w-full max-w-xs md:max-w-sm lg:max-w-md 
              transition-all transform hover:-translate-y-2 hover:shadow-pink-200">

      <img src="/images/hero/Rahma.jpg"
           alt="Rahma"
           class="w-28 h-28 md:w-40 md:h-40 object-cover rounded-full mx-auto mb-5 md:mb-6 shadow-lg border-4 border-pink-100">

      <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Rahma</h3>

      <div class="border-t-2 border-pink-200 my-3 md:my-4 w-20 md:w-24 mx-auto"></div>

      <p class="text-sm md:text-base text-gray-600 leading-relaxed">
        <span class="font-medium">Rahmayanti</span><br>
        Putri dari Bapak <span class="font-semibold">Fahrul Rahman</span><br>
        & Ibu <span class="font-semibold">Hermi</span>
      </p>

      <a href="https://instagram.com/rhmaayntiiii_" target="_blank"
         class="absolute -bottom-7 md:-bottom-8 left-1/2 transform -translate-x-1/2 
                bg-pink-500 text-white p-3 md:p-4 rounded-full shadow-lg hover:bg-pink-600 transition">
        <i class="fab fa-instagram text-xl md:text-2xl"></i>
      </a>
  </div>

</div>


  <!-- TENTANG KAMI -->
  <div class="text-center mb-10 px-6">
    <h2 class="text-3xl font-semibold text-gray-700 mb-10 tracking-wide">Tentang Kami</h2>
  </div>
<!-- GALERI -->
<div class="relative px-4 mb-24">

  <!-- Mobile: Horizontal Scroll -->
  <div class="flex md:hidden overflow-x-auto space-x-4 scrollbar-hide snap-x snap-mandatory">
    <img src="/images/Gallery/1.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/2.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/3.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/4.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/5.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/6.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/7.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
    <img src="/images/Gallery/8.jpg" class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg snap-center cursor-pointer">
  </div>
<div class="hidden md:block mb-24 px-6">
  <div class="max-w-5xl mx-auto grid grid-cols-4 gap-6">
    
    <img src="/images/Gallery/1.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">
    <img src="/images/Gallery/2.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">
    <img src="/images/Gallery/3.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">
    <img src="/images/Gallery/4.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">

    <img src="/images/Gallery/5.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">
    <img src="/images/Gallery/6.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">
    <img src="/images/Gallery/7.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">
    <img src="/images/Gallery/8.jpg" class="gallery-img w-full h-auto max-h-[350px] object-contain rounded-2xl shadow-lg bg-black/5 cursor-pointer">

  </div>
</div>
</div>

<!-- LIGHTBOX -->
<div id="lightbox"
     class="hidden fixed inset-0 backdrop-blur-sm 
            flex items-center justify-center z-50">

  <button id="closeLightbox"
          class="absolute top-5 right-5 text-red-300 text-4xl font-bold 
                 hover:text-purple-300 transition drop-shadow-lg">
    &times;
  </button>

  <!-- Prev Button -->
  <button id="prevBtn"
          class="absolute left-4 text-red-300 text-5xl font-bold px-4 
                 hover:text-purple-300 transition drop-shadow-lg">
    &#10094;
  </button>

  <!-- Image -->
  <img id="lightboxImg"
     class="rounded-2xl shadow-2xl p-1 max-w-[80vw] max-h-[70vh] md:max-w-[50vw] md:max-h-[80vh] object-contain transition-all duration-300">
  <button id="nextBtn"
          class="absolute right-4 text-red-300 text-5xl font-bold px-4 
                 hover:text-purple-300 transition drop-shadow-lg">
    &#10095;
  </button>
</div>
<div class="wedding-card">

  <h1 class="wedding-title">Menuju Hari Bahagia</h1>

  <p class="wedding-sub">
    7 Desember 2025 • 08:00 WITA <br>
    Pulau Pinang Utara, Kec. Binuang
  </p>

  <div class="countdown-premium" id="countdown">
    Loading...
  </div>

  <div class="mt-6 flex justify-center gap-4">
    <!-- OPEN GOOGLE MAPS APP / TAB -->
    <a 
      href="https://maps.app.goo.gl/UMEmP4bsXd85zuD47"
      target="_blank"
      class="btn-premium"
    >
      📍 Lihat Lokasi
    </a>

    <!-- FIXED BUTTON -->
    <a 
      id="save-date"
      class="btn-premium cursor-pointer"
    >
      📅 Simpan Tanggal
    </a>
  </div>

</div>

  </div>
  <!-- Love Story Section -->
<section id="love-story" class="relative py-14 md:py-20 bg-gradient-to-b from-red-900 to-pink-900 text-white">

  <div class="max-w-4xl mx-auto px-5 md:px-6">

    <!-- Title -->
    <h2 class="text-3xl md:text-4xl font-semibold text-center mb-10 md:mb-12 font-serif italic">
      Love Story
    </h2>

    <div class="relative border-l-4 border-pink-300 pl-6 md:pl-8 space-y-8 md:space-y-10">

      <!-- Phase Template (dipakai untuk semua card) -->
      <!-- Phase 1 -->
      <div class="relative">
        <div class="absolute -left-4 md:-left-5 top-2 bg-pink-400 text-white rounded-full 
                    w-5 h-5 md:w-6 md:h-6 flex items-center justify-center shadow-md">
          <i class="fas fa-heart text-[8px] md:text-xs"></i>
        </div>

        <div class="bg-white text-gray-800 rounded-2xl p-5 md:p-6 shadow-lg md:shadow-md">
          <h3 class="text-base md:text-lg font-semibold mb-2">First Phase</h3>
          <p class="text-sm md:text-base leading-relaxed">
            Dalam riuhnya dunia dan melalui jahitan kata, semesta menautkan dua hati yang belum pernah bersua.
          </p>
        </div>
      </div>

      <!-- Phase 2 -->
      <div class="relative">
        <div class="absolute -left-4 md:-left-5 top-2 bg-pink-400 text-white rounded-full 
                    w-5 h-5 md:w-6 md:h-6 flex items-center justify-center shadow-md">
          <i class="fas fa-heart text-[8px] md:text-xs"></i>
        </div>

        <div class="bg-white text-gray-800 rounded-2xl p-5 md:p-6 shadow-lg md:shadow-md">
          <h3 class="text-base md:text-lg font-semibold mb-2">Second Phase</h3>
          <p class="text-sm md:text-base leading-relaxed">
            Tatap pertama menyimpan banyak tanya, namun hati lebih dulu ikut bicara.
          </p>
        </div>
      </div>

      <!-- Phase 3 -->
      <div class="relative">
        <div class="absolute -left-4 md:-left-5 top-2 bg-pink-400 text-white rounded-full 
                    w-5 h-5 md:w-6 md:h-6 flex items-center justify-center shadow-md">
          <i class="fas fa-heart text-[8px] md:text-xs"></i>
        </div>

        <div class="bg-white text-gray-800 rounded-2xl p-5 md:p-6 shadow-lg md:shadow-md">
          <h3 class="text-base md:text-lg font-semibold mb-2">Third Phase</h3>
          <p class="text-sm md:text-base leading-relaxed">
            Kami sempat kalah oleh jarak, nyaris menyerah pada ego, namun rindu selalu jadi suara paling lantang untuk menggenggam lebih erat.
          </p>
        </div>
      </div>

      <!-- Phase 4 -->
      <div class="relative">
        <div class="absolute -left-4 md:-left-5 top-2 bg-pink-400 text-white rounded-full 
                    w-5 h-5 md:w-6 md:h-6 flex items-center justify-center shadow-md">
          <i class="fas fa-heart text-[8px] md:text-xs"></i>
        </div>

        <div class="bg-white text-gray-800 rounded-2xl p-5 md:p-6 shadow-lg md:shadow-md">
          <h3 class="text-base md:text-lg font-semibold mb-2">Fourth Phase</h3>
          <p class="text-sm md:text-base leading-relaxed">
            Tidak ada lagi pencarian, sebab langkah ini sudah berhenti di pelukan yang benar, Tidak ada lagi keraguan, sebab hati sudah tahu dimana rumahnya berada.
          </p>
        </div>
      </div>

      <!-- Final Phase -->
      <div class="relative">
        <div class="absolute -left-4 md:-left-5 top-2 bg-pink-400 text-white rounded-full 
                    w-5 h-5 md:w-6 md:h-6 flex items-center justify-center shadow-md">
          <i class="fas fa-heart text-[8px] md:text-xs"></i>
        </div>

        <div class="bg-white text-gray-800 rounded-2xl p-5 md:p-6 shadow-lg md:shadow-md">
          <h3 class="text-base md:text-lg font-semibold mb-2">Final Phase</h3>
          <p class="text-sm md:text-base leading-relaxed">
            Dalam akad, kami tidak menemukan titik, melainkan koma yang menjadi tanda bahwa kisah ini akan terus berlanjut tanpa usai.
          </p>
        </div>
      </div>

    </div>
  </div>

</section>


    <!-- Hadiah -->
    <section class="bg-gradient-to-b from-pink-50 via-pink-100 to-white py-24">
  <div class="text-center px-6 fade-in">
    
    <h2 class="text-3xl font-semibold mb-4 text-gray-800">Hadiah</h2>
    <p class="text-gray-600 mb-6">
      Kehadiran & doa Anda adalah hadiah terindah untuk kami.<br>
      Namun jika Anda ingin memberi lebih, silakan klik di bawah.
    </p>

    <!-- Tombol Toggle -->
    <button id="toggleGift"
            class="bg-pink-500 text-white px-6 py-2 rounded-full shadow hover:bg-pink-600 transition">
      Tampilkan
    </button>

    <!-- Card Rekening -->
    <div id="giftCard"
         class="hidden mt-6 max-w-sm mx-auto bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-pink-100 transition-all duration-500">
      
      <h3 class="font-semibold text-lg text-gray-800">AHMAD TAJALI</h3>
      <p class="text-gray-600">Bank Mandiri</p>

      <!-- Nomor Rekening + Salin -->
      <div class="flex justify-between items-center bg-pink-50 rounded-lg p-3 mt-3">
        <span id="accountNumber" class="font-mono text-gray-800">310014653607</span>
        <button onclick="copyAccount()" class="text-sm font-semibold text-pink-600">
          Salin
        </button>
      </div>
    </div>

  </div>
</section>
  </section>
<!-- FORM UCAPAN -->
<!-- FORM UCAPAN -->
<section class="relative py-14 md:py-20 bg-gradient-to-b from-red-900 to-pink-900 text-white mb-16">
  <div class="max-w-xl mx-auto px-5 md:px-6">

    <!-- Title "Wishes" - PALING BESAR -->
    <h2 class="text-center mb-3 text-5xl md:text-6xl font-normal"
        style="font-family: 'Great Vibes', cursive;">
      Wishes
    </h2>

    <!-- Subtitle - LEBIH KECIL -->
    <h4 class="text-lg md:text-2xl font-semibold text-center mb-8 md:mb-10 font-serif italic leading-snug opacity-90">
      Berikan doa dan ucapan terbaik untuk kami
    </h4>

    <!-- FORM -->
    <form id="wishForm" action="{{ route('wish.store') }}" method="POST" novalidate
          class="bg-white/15 backdrop-blur-xl border border-red-200/30 shadow-2xl rounded-2xl 
                 p-5 md:p-6 text-white space-y-4 md:space-y-5">
      @csrf

      <input id="nameInput" name="name" type="text" placeholder="Nama Anda"
             class="w-full border border-red-300/40 bg-white/20 text-red-900 placeholder-red-900 
                    rounded-lg p-3 md:p-4 text-sm md:text-base focus:ring-2 focus:ring-red-300">

      <div class="flex justify-between gap-3 md:gap-4">
        <button type="button" class="att-btn w-full bg-white/10 border border-red-300/40 text-red-200 
                       py-2 md:py-3 rounded-lg text-sm md:text-base"
                data-value="Hadir">Hadir</button>

        <button type="button" class="att-btn w-full bg-white/10 border border-red-300/40 text-red-200 
                       py-2 md:py-3 rounded-lg text-sm md:text-base"
                data-value="Tidak Hadir">Tidak Hadir</button>
      </div>

      <input type="hidden" name="attendance" id="attendanceInput">

      <textarea id="messageInput" name="message" rows="3" placeholder="Tulis ucapan Anda..."
                class="w-full border border-red-300/40 bg-white/20 text-red-900 placeholder-red-900 
                       rounded-lg p-3 md:p-4 text-sm md:text-base focus:ring-2 focus:ring-red-300"></textarea>

      <button id="submitBtn" type="submit"
              class="w-full bg-white/20 border border-red-200 text-red-100 
                     py-2 md:py-3 rounded-full font-semibold text-sm md:text-base 
                     hover:bg-white/30 transition">
        Kirim
      </button>
    </form>

    <p id="loadingText" class="text-center mt-4 hidden text-sm md:text-base">Mengirim...</p>
  </div>
</section>

<!-- =============================================== -->
<!-- SECTION — LIST UCAPAN MASUK -->
<!-- =============================================== -->
<section id="wish-list" class="py-16 bg-gradient-to-b from-white via-pink-50 to-pink-100">
    <div class="max-w-2xl mx-auto px-6">

        <h2 class="text-3xl font-semibold text-center mb-10 font-serif italic text-pink-700">
            Ucapan yang Masuk
        </h2>

        <!-- LIST UCAPAN -->
        <div id="wishContainer" class="space-y-4"></div>

        <!-- PAGINATION BUTTONS -->
        <div id="wishPagination" class="flex justify-center gap-2 mt-6"></div>

    </div>
</section>

 <!-- Background Music -->
  <audio id="bg-music" loop preload="auto" muted>
    <source src="/audio/sewindu.mp3" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>

  <!-- Floating Music Button -->
  <button id="music-btn" class="fixed bottom-6 right-6 bg-pink-500 hover:bg-pink-600 text-white p-4 rounded-full shadow-lg transition z-50">
    <i id="music-icon" class="fas fa-volume-mute"></i>
  </button>
</div>
<!-- CUSTOM POPUP -->
<div id="customPopup" class="">
  <div class="popup-card">
    <h2 id="popupTitle" class="text-xl font-bold mb-2"></h2>
    <p id="popupMessage" class="text-sm mb-4"></p>
    <button id="closePopup" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold">Tutup</button>
  </div>
</div>
<!-- SCRIPTS (single unified script) -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // short getters
  const $ = id => document.getElementById(id);
  const mainContent = $("mainContent");
  const customPopup = $("customPopup");
  const popupTitle = $("popupTitle");
  const popupMessage = $("popupMessage");
  const closePopup = $("closePopup");
  const wishForm = $("wishForm");
  const submitBtn = $("submitBtn");
  const attendanceInput = $("attendanceInput");
  const wishContainer = $("wishContainer");
  const loadingText = $("loadingText");

  /* ---------- POPUP HELPERS ---------- */
  function showPopup(message, title = "Pemberitahuan") {
    if (popupTitle) popupTitle.textContent = title;
    if (popupMessage) popupMessage.textContent = message;
    if (customPopup) {
      customPopup.classList.add("active");
      if (mainContent) mainContent.classList.add("blur-sm");
    } else {
      alert(title + "\n\n" + message);
    }
  }
  function hidePopup() {
    if (customPopup) customPopup.classList.remove("active");
    if (mainContent) mainContent.classList.remove("blur-sm");
  }
  if (closePopup) {
    closePopup.addEventListener("click", hidePopup);
  }
  if (customPopup) {
    customPopup.addEventListener("click", (e) => { if (e.target === customPopup) hidePopup(); });
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") hidePopup(); });
  }
/* ---------- MUSIC BUTTON + AUTOPLAY FIX ---------- */
  const music = $("bg-music"),
        musicBtn = $("music-btn"),
        musicIcon = $("music-icon");

  let isPlaying = false;

  // === AUTOPLAY HACK (AMAN TANPA GANGGU SCRIPT LAIN) ===
  if (music) {
    music.muted = true;
    music.volume = 0;

    music.play().then(() => {
      // setelah autoplay diizinkan → unmute perlahan
      setTimeout(() => {
        music.muted = false;
        music.volume = 1;
        isPlaying = true;
        musicIcon?.classList.replace("fa-volume-mute","fa-volume-up");
      }, 800);
    }).catch(err => {
      console.log("Autoplay blocked:", err);
    });
  }

  function toggleMusic() {
    if (!music) return;

    if (isPlaying) {
      music.pause();
      musicIcon?.classList.replace("fa-volume-up","fa-volume-mute");
      isPlaying = false;
    } else {
      music.play().then(() => {
        musicIcon?.classList.replace("fa-volume-mute","fa-volume-up");
        isPlaying = true;
      });
    }
  }

  musicBtn?.addEventListener("click", toggleMusic);
  /* ---------- HADIAH ---------- */
  $("toggleGift")?.addEventListener("click", () => {
    const giftCard = $("giftCard");
    if (!giftCard) return;
    giftCard.classList.toggle("hidden");
    $("toggleGift").textContent = giftCard.classList.contains("hidden") ? "Tampilkan" : "Sembunyikan";
  });
  window.copyAccount = function(){ const acc = $("accountNumber")?.textContent; if(!acc) return; navigator.clipboard.writeText(acc); showPopup("Nomor rekening disalin!", "Sukses"); };


  /* ---------- ATTENDANCE BUTTONS ---------- */
  const attBtns = document.querySelectorAll(".att-btn");
  if (attBtns && attendanceInput) {
    attBtns.forEach(b => b.addEventListener("click", (e) => {
      e.preventDefault();
      attendanceInput.value = b.dataset.value || "";
      attBtns.forEach(x => x.classList.remove("bg-red-600","text-white","ring-2","ring-red-400"));
      b.classList.add("bg-red-600","text-white","ring-2","ring-red-400");
    }));
  }

  /* ---------- FORM SUBMIT (AJAX) ---------- */
  if (!wishForm) {
    console.warn("wishForm not found, skipping AJAX binding.");
    return;
  }
  wishForm.addEventListener("submit", function (e) {
    e.preventDefault();
    // collect
    const name = ($("nameInput")?.value || "").trim();
    const message = ($("messageInput")?.value || "").trim();
    const attendance = (attendanceInput?.value || "").trim();

    // visual reset
    wishForm.querySelectorAll("input, textarea").forEach(el => el.classList.remove("border-red-900"));

    // front-end validation
    if (!name) { showPopup("Mohon isi nama Anda.", "Form belum lengkap"); $("nameInput")?.classList.add("border-red-900"); $("nameInput")?.focus(); return; }
    if (!message) { showPopup("Mohon tulis ucapan Anda.", "Form belum lengkap"); $("messageInput")?.classList.add("border-red-900"); $("messageInput")?.focus(); return; }
    if (!attendance) { showPopup("Mohon pilih Kehadiran: Hadir / Tidak Hadir.", "Form belum lengkap"); return; }

    // disable
    submitBtn.disabled = true; submitBtn.classList.add("opacity-50","cursor-not-allowed");
    loadingText?.classList.remove("hidden");

    // prepare body
    const formData = new FormData(wishForm);

    fetch(wishForm.action || "{{ route('wish.store') }}", {
      method: "POST",
      body: formData,
      headers: { "X-Requested-With": "XMLHttpRequest" }
    })
    .then(async res => {
      const text = await res.text();
      try { return JSON.parse(text); } 
      catch(err) {
        console.error("Server returned non-JSON:", text);
        return { success:false, __raw:text, message:"Respons server tidak valid" };
      }
    })
    .then(json => {
      // enable again
      submitBtn.disabled = false; submitBtn.classList.remove("opacity-50","cursor-not-allowed");
      loadingText?.classList.add("hidden");

      // controller may return either top-level fields or nested under `data`
      const payload = json.data ? json.data : json;
      if (!json || json.success !== true || !payload) {
        showPopup(json.message || json.error || "Gagal mengirim ucapan.", "Error");
        console.warn("Server response:", json);
        return;
      }

      // success
      showPopup("Ucapan berhasil dikirim! Terima kasih.", "Berhasil");

      // append to list (escape)
      if (wishContainer) {
        const el = document.createElement("div");
        el.className = "p-4 bg-white rounded-xl shadow border border-pink-100 fade-in";
        const nameEsc = escapeHtml(payload.name || "");
        const attEsc = escapeHtml(payload.attendance || "");
        const msgEsc = escapeHtml(payload.message || "");
        const created = escapeHtml(payload.created_at || new Date().toLocaleString());
        el.innerHTML = `<h4 class="font-semibold text-pink-700">${nameEsc} • <span class="text-sm text-gray-500">${attEsc}</span></h4><p class="text-gray-700 mt-1">${msgEsc}</p><p class="text-xs text-gray-400 mt-2">${created}</p>`;
        wishContainer.prepend(el);
      }

      // reset UI
      wishForm.reset();
      attendanceInput.value = "";
      attBtns.forEach(x => x.classList.remove("bg-red-600","text-white","ring-2","ring-red-400"));
      // hide popup automatically after short delay
      setTimeout(hidePopup, 1500);
    })
    .catch(err => {
      console.error("Fetch error:", err);
      submitBtn.disabled = false; submitBtn.classList.remove("opacity-50","cursor-not-allowed");
      loadingText?.classList.add("hidden");
      showPopup("Terjadi kesalahan jaringan atau server.", "Error");
    });

  });

  // helper escape
  function escapeHtml(str) {
    return String(str).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#039;");
  }
  
console.log("Popup element:", customPopup);
console.log("Popup title:", popupTitle);
console.log("Popup message:", popupMessage);
console.log("Close button:", closePopup);
console.log("Main content:", mainContent);
console.log("Popup element:", document.getElementById("customPopup"));
img.addEventListener('click', () => alert("WORKING"));
}); // DOMContentLoaded
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

  const images = document.querySelectorAll('.gallery-img');
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightboxImg");
  const closeBtn = document.getElementById("closeLightbox");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  let currentIndex = 0;

  // OPEN LIGHTBOX
  images.forEach((img, index) => {
    img.addEventListener("click", () => {
      currentIndex = index;
      showImage();
      lightbox.classList.remove("hidden");
    });
  });

  // SHOW CURRENT IMAGE WITH RESPONSIVE SIZING
  function showImage() {
    const isMobile = window.innerWidth < 768;

    if (isMobile) {
      lightboxImg.style.maxWidth = "85vw";
      lightboxImg.style.maxHeight = "70vh";
    } else {
      lightboxImg.style.maxWidth = "55vw";
      lightboxImg.style.maxHeight = "70vh";
    }

    lightboxImg.src = images[currentIndex].src;
  }

  // CLOSE
  closeBtn.addEventListener("click", () => {
    lightbox.classList.add("hidden");
  });

  // NAVIGATION
  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage();
  });

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % images.length;
    showImage();
  });

  // CLICK OUTSIDE TO CLOSE
  lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) {
      lightbox.classList.add("hidden");
    }
  });

  // TOUCH SWIPE
  let startX = 0;

  lightboxImg.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  lightboxImg.addEventListener("touchend", (e) => {
    let endX = e.changedTouches[0].clientX;
    let diff = startX - endX;
    if (diff > 40) nextBtn.click();      // swipe left → next
    if (diff < -40) prevBtn.click();     // swipe right → prev
  });

});

// COUNTDOWN --------------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
    const target = new Date("2025-12-07T08:00:00").getTime();

  function updateCountdown() {
    const now = new Date().getTime();
    const diff = target - now;

    let d = Math.floor(diff / (1000*60*60*24));
    let h = Math.floor((diff % (1000*60*60*24)) / (1000*60*60));
    let m = Math.floor((diff % (1000*60*60)) / (1000*60));
    let s = Math.floor((diff % (1000*60)) / 1000);

    document.getElementById("countdown").innerHTML =
      `${d} Hari ${h} Jam ${m} Menit`;
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);
});


// ADD TO GOOGLE CALENDAR -------------------------------------
// ADD TO GOOGLE CALENDAR
document.getElementById("save-date").addEventListener("click", () => {

  const title = encodeURIComponent("The Wedding Of Tajali & Rahma");
  const start = "20251207T000000Z";  // 08:00 WITA = 00:00 UTC
  const end   = "20251207T020000Z";  // Durasi 2 jam
  const details = encodeURIComponent("Acara pernikahan Tajali & Rahma");
  const location = encodeURIComponent("Pulau Pinang Utara, Kecamatan Binuang");

  const link =
    `https://www.google.com/calendar/render?action=TEMPLATE&text=${title}&dates=${start}/${end}&details=${details}&location=${location}`;

  window.open(link, "_blank");
});

</script>

<style>
/* Fade-in animasi untuk ucapan baru */
.fade-in {
    animation: fadeIn 0.6s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("wishContainer");
    const pagination = document.getElementById("wishPagination");

    let currentPage = 1;
    const perPage = 5;

    function renderWishes() {
        container.innerHTML = "";

        let start = (currentPage - 1) * perPage;
        let end = start + perPage;

        let pageItems = wishes.slice(start, end);

        if (pageItems.length === 0) {
            container.innerHTML = `<p class="text-center text-gray-500">Belum ada ucapan 😇</p>`;
            return;
        }

        pageItems.forEach(wish => {
            let html = `
                <div class="p-4 bg-white rounded-xl shadow border border-pink-100">
                    <h4 class="font-semibold text-pink-700">
                        ${wish[0] ?? "Anonim"} • 
                        <span class="text-sm text-gray-500">${wish[1] ?? "-"}</span>
                    </h4>
                    <p class="text-gray-700 mt-1">${wish[2] ?? ""}</p>
                </div>
            `;
            container.innerHTML += html;
        });
    }

    function renderPagination() {
        pagination.innerHTML = "";
        let totalPages = Math.ceil(wishes.length / perPage);

        if (totalPages <= 1) return;

        pagination.innerHTML += `
            <button class="px-3 py-1 rounded bg-pink-200 text-pink-800 disabled:opacity-40"
                    ${currentPage === 1 ? "disabled" : ""}
                    onclick="goToPage(${currentPage - 1})">Prev</button>
        `;

        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `
                <button class="px-3 py-1 rounded 
                               ${i === currentPage ? "bg-pink-600 text-white" : "bg-pink-200 text-pink-800"}"
                        onclick="goToPage(${i})">
                    ${i}
                </button>
            `;
        }

        pagination.innerHTML += `
            <button class="px-3 py-1 rounded bg-pink-200 text-pink-800 disabled:opacity-40"
                    ${currentPage === totalPages ? "disabled" : ""}
                    onclick="goToPage(${currentPage + 1})">Next</button>
        `;
    }

    window.goToPage = function (page) {
        currentPage = page;
        renderWishes();
        renderPagination();
    };

    renderWishes();
    renderPagination();

});
</script>
<script id="wishData" type="application/json">
    {!! json_encode($values, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>
<script>
    let wishes = JSON.parse(document.getElementById("wishData").textContent);
</script>


</body>
</html>
