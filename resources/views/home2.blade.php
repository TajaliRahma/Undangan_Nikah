<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pernikahan Tajali & Rahma - 8.12.25</title>

  <!-- ✅ Font Awesome (versi stabil) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


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
  </style>
</head>

<body class="text-gray-800 overflow-x-hidden bg-gradient-to-b from-pink-50 via-pink-50 to-white">
<div id="mainContent">
  <!-- Hero -->
  <section class="relative h-screen bg-cover bg-center" style="background-image: url('/images/bg1.jpeg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center text-white">
      <h1 class="text-4xl md:text-5xl font-semibold mb-2 tracking-wide fade-in">Pernikahan</h1>
      <h2 class="text-5xl md:text-6xl font-bold mb-4 fade-in">Tajali & Rahma</h2>
      <p class="text-lg md:text-xl fade-in">8 Desember 2025</p>
    </div>
  </section>

  <!-- Semua section berikut dalam satu gradasi -->
<section class="bg-gradient-to-b from-pink-50 via-pink-100 to-white py-24">

  <!-- PROFIL MEMPELAI -->
  <div class="flex flex-col md:flex-row items-center justify-center gap-16 px-6 mb-24">
    <!-- 👦 Mempelai Pria -->
    <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl p-10 text-center w-full max-w-sm md:max-w-md transition-all transform hover:-translate-y-2 hover:shadow-pink-200">
      <img src="https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?auto=format&fit=crop&w=400&q=60"
           alt="Tajali"
           class="w-40 h-40 object-cover rounded-full mx-auto mb-6 shadow-lg border-4 border-pink-100">
      <h3 class="text-3xl font-bold text-gray-800 mb-2">Tajali</h3>
      <div class="border-t-2 border-pink-200 my-4 w-24 mx-auto"></div>
      <p class="text-base text-gray-600 leading-relaxed">
        <span class="font-medium">Ahmad Tajali</span><br>
        Putra dari Bapak <span class="font-semibold">Muhammad Sani</span><br>
        & Ibu <span class="font-semibold">Haniah</span>
      </p>
      <a href="https://instagram.com/tajali10_" target="_blank"
         class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-pink-500 text-white p-4 rounded-full shadow-lg hover:bg-pink-600 transition">
        <i class="fab fa-instagram text-2xl"></i>
      </a>
    </div>

    <!-- 👰 Mempelai Wanita -->
    <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl p-10 text-center w-full max-w-sm md:max-w-md transition-all transform hover:-translate-y-2 hover:shadow-pink-200">
      <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?auto=format&fit=crop&w=400&q=60"
           alt="Rahma"
           class="w-40 h-40 object-cover rounded-full mx-auto mb-6 shadow-lg border-4 border-pink-100">
      <h3 class="text-3xl font-bold text-gray-800 mb-2">Rahma</h3>
      <div class="border-t-2 border-pink-200 my-4 w-24 mx-auto"></div>
      <p class="text-base text-gray-600 leading-relaxed">
        <span class="font-medium">Rahmayanti</span><br>
        Putri dari Bapak <span class="font-semibold">Fahrul Rahman</span><br>
        & Ibu <span class="font-semibold">Hermi</span>
      </p>
      <a href="https://instagram.com/rhmaayntiiii_" target="_blank"
         class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-pink-500 text-white p-4 rounded-full shadow-lg hover:bg-pink-600 transition">
        <i class="fab fa-instagram text-2xl"></i>
      </a>
    </div>
  </div>

  <!-- TENTANG KAMI -->
  <div class="text-center mb-10 px-6">
    <h2 class="text-3xl font-semibold text-gray-700 mb-10 tracking-wide">Tentang Kami</h2>
  </div>
<!-- GALERI -->
<div class="relative px-4 mb-24">
  <div class="flex overflow-x-auto space-x-4 scrollbar-hide snap-x snap-mandatory justify-start md:justify-center">

    <img src="https://images.unsplash.com/photo-1529634895632-67fef83f08ab?auto=format&fit=crop&w=600&q=60"
         class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg hover:scale-105 transform transition cursor-pointer snap-center">

    <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=600&q=60"
         class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg hover:scale-105 transform transition cursor-pointer snap-center">

    <img src="https://images.unsplash.com/photo-1530023367847-a683933f4172?auto=format&fit=crop&w=600&q=60"
         class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg hover:scale-105 transform transition cursor-pointer snap-center">

    <img src="https://images.unsplash.com/photo-1521540216272-a50305cd4421?auto=format&fit=crop&w=600&q=60"
         class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg hover:scale-105 transform transition cursor-pointer snap-center">

    <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?auto=format&fit=crop&w=600&q=60"
         class="gallery-img w-64 h-64 object-cover rounded-2xl shadow-lg hover:scale-105 transform transition cursor-pointer snap-center">

  </div>
</div>

<!-- LIGHTBOX -->
<div id="lightbox"
     class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50">

  <button id="closeLightbox"
          class="absolute top-5 right-5 text-white text-3xl font-bold">&times;</button>

  <button id="prevBtn"
          class="absolute left-4 text-white text-4xl font-bold px-4">&#10094;</button>

  <img id="lightboxImg" class="max-h-[80vh] max-w-[90vw] rounded-xl shadow-lg">

  <button id="nextBtn"
          class="absolute right-4 text-white text-4xl font-bold px-4">&#10095;</button>
</div>


  <!-- MENUJU HARI BAHAGIA -->
  <div class="bg-white/80 backdrop-blur-sm shadow-2xl rounded-3xl p-10 max-w-3xl mx-auto text-center relative overflow-hidden mb-24">
    <div class="absolute inset-0 bg-gradient-to-b from-pink-100/60 via-pink-50/60 to-white/60 rounded-3xl"></div>
    <div class="relative z-10">
      <h2 class="text-3xl font-bold text-gray-800 mb-2 tracking-wide">Menuju Hari Bahagia</h2>
      <p class="text-gray-500 text-base mb-6">7 Desember 2025 • Pulau Pinang Utara, Kec. Binuang</p>
      <div id="countdown" class="text-3xl font-extrabold text-pink-600 mb-10 animate-pulse"></div>
      <div class="bg-gradient-to-br from-pink-50 via-white to-pink-100 rounded-2xl shadow-lg p-8 flex flex-col md:flex-row items-center justify-center gap-8 transition-transform transform hover:-translate-y-1 hover:shadow-pink-200">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=400&q=60"
             alt="Resepsi"
             class="w-36 h-36 md:w-44 md:h-44 object-cover rounded-full border-4 border-white shadow-md">
        <div class="text-left">
          <h3 class="text-2xl font-semibold text-gray-800 mb-2">Resepsi Pernikahan</h3>
          <p class="text-gray-600 text-base mb-1"><i class="far fa-calendar-alt text-pink-500 mr-1"></i> 8 Desember 2025 • 08:00 WITA</p>
          <p class="text-gray-600 text-base mb-5"><i class="fas fa-home text-pink-500 mr-1"></i> Rumah Mempelai Wanita</p>
          <a href="https://maps.app.goo.gl/mfUTayPWjsV4PYbK7" target="_blank"
             class="inline-block bg-pink-500 text-white px-6 py-2.5 rounded-full text-sm font-medium hover:bg-pink-600 transition-all duration-300 shadow-md hover:shadow-pink-200">
            <i class="fas fa-map-marker-alt mr-2"></i> Lihat Lokasi
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Love Story Section -->
  <section id="love-story" class="relative py-16 bg-gradient-to-b from-red-900 to-pink-900 text-white">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-4xl font-semibold text-center mb-12 font-serif italic">Love Story</h2>
      <div class="relative border-l-4 border-pink-300 pl-8 space-y-10">
        
        <!-- Phase 1 -->
        <div class="relative">
          <div class="absolute -left-5 top-2 bg-pink-400 text-white rounded-full w-6 h-6 flex items-center justify-center">
            <i class="fas fa-heart text-xs"></i>
          </div>
          <div class="bg-white text-gray-800 rounded-2xl p-6 shadow-md">
            <h3 class="text-lg font-semibold mb-2">First Phase</h3>
            <p>Dalam riuhnya dunia dan melalui jahitan kata, semesta menautkan dua hati yang belum pernah bersua.</p>
          </div>
        </div>

        <!-- Phase 2 -->
        <div class="relative">
          <div class="absolute -left-5 top-2 bg-pink-400 text-white rounded-full w-6 h-6 flex items-center justify-center">
            <i class="fas fa-heart text-xs"></i>
          </div>
          <div class="bg-white text-gray-800 rounded-2xl p-6 shadow-md">
            <h3 class="text-lg font-semibold mb-2">Second Phase</h3>
            <p>Tatap pertama menyimpan banyak tanya, namun hati lebih dulu ikut bicara.</p>
          </div>
        </div>

        <!-- Phase 3 -->
        <div class="relative">
          <div class="absolute -left-5 top-2 bg-pink-400 text-white rounded-full w-6 h-6 flex items-center justify-center">
            <i class="fas fa-heart text-xs"></i>
          </div>
          <div class="bg-white text-gray-800 rounded-2xl p-6 shadow-md">
            <h3 class="text-lg font-semibold mb-2">Third Phase</h3>
            <p>Kami sempat kalah oleh jarak, nyaris menyerah pada ego, namun rindu selalu jadi suara paling lantang untuk menggenggam lebih erat.</p>
          </div>
        </div>

        <!-- Phase 4 -->
        <div class="relative">
          <div class="absolute -left-5 top-2 bg-pink-400 text-white rounded-full w-6 h-6 flex items-center justify-center">
            <i class="fas fa-heart text-xs"></i>
          </div>
          <div class="bg-white text-gray-800 rounded-2xl p-6 shadow-md">
            <h3 class="text-lg font-semibold mb-2">Fourth Phase</h3>
            <p>Tidak ada lagi pencarian, sebab langkah ini sudah berhenti di pelukan yang benar, Tidak ada lagi keraguan, sebab hati sudah tahu dimana rumahnya berada.</p>
          </div>
        </div>

        <!-- Final Phase -->
        <div class="relative">
          <div class="absolute -left-5 top-2 bg-pink-400 text-white rounded-full w-6 h-6 flex items-center justify-center">
            <i class="fas fa-heart text-xs"></i>
          </div>
          <div class="bg-white text-gray-800 rounded-2xl p-6 shadow-md">
            <h3 class="text-lg font-semibold mb-2">Final Phase</h3>
            <p>Dalam akad, kami tidak menemukan titik, melainkan koma yang menjadi tanda bahwa kisah ini akan terus berlanjut tanpa usai.</p>
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
    <section class="relative py-16 bg-gradient-to-b from-red-900 to-pink-900 text-white mb-16">
      <div class="max-w-xl mx-auto px-6">
        <h2 class="text-4xl font-semibold text-center mb-10 font-serif italic">Kirim Ucapan & Kehadiran</h2>

        <form id="wishForm" action="{{ route('wish.store') }}" method="POST" novalidate class="bg-white/15 backdrop-blur-xl border border-red-200/30 shadow-2xl rounded-2xl p-6 text-white space-y-4">
          @csrf

          <input id="nameInput" name="name" type="text" placeholder="Nama Anda" class="w-full border border-red-300/40 bg-white/20 text-red-900 placeholder-red-900 rounded-lg p-3 focus:ring-2 focus:ring-red-300">

          <div class="flex justify-between gap-4">
            <button type="button" class="att-btn w-full bg-white/10 border border-red-300/40 text-red-200 py-2 rounded-lg" data-value="Hadir">Hadir</button>
            <button type="button" class="att-btn w-full bg-white/10 border border-red-300/40 text-red-200 py-2 rounded-lg" data-value="Tidak Hadir">Tidak Hadir</button>
          </div>

          <input type="hidden" name="attendance" id="attendanceInput">

          <textarea id="messageInput" name="message" rows="3" placeholder="Tulis ucapan Anda..." class="w-full border border-red-300/40 bg-white/20 text-red-900 placeholder-red-900 rounded-lg p-3 focus:ring-2 focus:ring-red-300"></textarea>

          <button id="submitBtn" type="submit" class="w-full bg-white/20 border border-red-200 text-red-100 py-2 rounded-full font-semibold hover:bg-white/30 transition">Kirim</button>
        </form>

        <p id="loadingText" class="text-center mt-4 hidden">Mengirim...</p>
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

        <!-- LIST UCAPAN DARI GOOGLE SHEETS -->
        <div id="wishContainer" class="space-y-4">

            @forelse ($values as $wish)
                <div class="p-4 bg-white rounded-xl shadow border border-pink-100">

                    <h4 class="font-semibold text-pink-700">
                        {{ $wish[0] ?? 'Anonim' }} • 
                        <span class="text-sm text-gray-500">{{ $wish[1] ?? '-' }}</span>
                    </h4>

                    <p class="text-gray-700 mt-1">
                        {{ $wish[2] ?? '' }}
                    </p>

                </div>
            @empty
                <p class="text-center text-gray-500">Belum ada ucapan 😇</p>
            @endforelse

        </div>

    </div>
</section>


 <!-- Background Music -->
  <audio id="bg-music" loop preload="auto">
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

  /* ---------- MUSIC BUTTON ---------- */
  const music = $("bg-music"), musicBtn = $("music-btn"), musicIcon = $("music-icon");
  let isPlaying = false;
  function toggleMusic() {
    if (!music) return;
    if (isPlaying) {
      music.pause();
      musicIcon?.classList.replace("fa-volume-up","fa-volume-mute");
      isPlaying = false;
    } else {
      music.play().then(()=>{ musicIcon?.classList.replace("fa-volume-mute","fa-volume-up"); isPlaying = true; }).catch(()=>{/* autoplay blocked until interaction */});
    }
  }
  musicBtn?.addEventListener("click", toggleMusic);

  /* ---------- LIGHTBOX ---------- */
  const images = document.querySelectorAll('.gallery-img');
  const lightbox = $("lightbox"), lightboxImg = $("lightboxImg"), closeLightbox = $("closeLightbox"), prevBtn = $("prevBtn"), nextBtn = $("nextBtn");
  let currentIndex = 0;
  if (images.length && lightbox && lightboxImg) {
    images.forEach((img, idx) => img.addEventListener('click', () => { currentIndex = idx; lightboxImg.src = images[currentIndex].src; lightbox.classList.remove('hidden'); }));
    closeLightbox?.addEventListener('click', ()=> lightbox.classList.add('hidden'));
    prevBtn?.addEventListener('click', ()=> { currentIndex = (currentIndex - 1 + images.length) % images.length; lightboxImg.src = images[currentIndex].src; });
    nextBtn?.addEventListener('click', ()=> { currentIndex = (currentIndex + 1) % images.length; lightboxImg.src = images[currentIndex].src; });
    lightbox?.addEventListener('click', (e)=> { if (e.target === lightbox) lightbox.classList.add('hidden'); });
    // touch swipe
    let startX = 0;
    lightboxImg.addEventListener("touchstart", e => startX = e.touches[0].clientX);
    lightboxImg.addEventListener("touchend", e => { let endX = e.changedTouches[0].clientX; let diff = startX - endX; if (diff > 50) nextBtn?.click(); if (diff < -50) prevBtn?.click(); });
  }

  /* ---------- HADIAH ---------- */
  $("toggleGift")?.addEventListener("click", () => {
    const giftCard = $("giftCard");
    if (!giftCard) return;
    giftCard.classList.toggle("hidden");
    $("toggleGift").textContent = giftCard.classList.contains("hidden") ? "Tampilkan" : "Sembunyikan";
  });
  window.copyAccount = function(){ const acc = $("accountNumber")?.textContent; if(!acc) return; navigator.clipboard.writeText(acc); showPopup("Nomor rekening disalin!", "Sukses"); };

  /* ---------- COUNTDOWN ---------- */
  (function(){
    const countdown = $("countdown");
    if (!countdown) return;
    const target = new Date("2025-12-08T00:00:00").getTime();
    setInterval(()=>{ const now = Date.now(); const dist = target - now; if (dist < 0) { countdown.innerText = "Hari Bahagia Telah Tiba!"; return; } const days = Math.floor(dist / (1000*60*60*24)); const hours = Math.floor((dist % (1000*60*60*24)) / (1000*60*60)); countdown.innerText = `${days} Hari ${hours} Jam Lagi`; }, 1000);
  })();

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

}); // DOMContentLoaded
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
</body>
</html>
