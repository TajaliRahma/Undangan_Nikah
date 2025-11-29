<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undangan Pernikahan</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Premium Wedding Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Great+Vibes&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Playfair Display', serif;
    }

    /* Fade Animation */
    .fade-in {
      opacity: 0;
      animation: fadeIn 1.8s ease forwards;
    }
    @keyframes fadeIn {
      to { opacity: 1; }
    }
    /* Petal Blossom Transition */
    .petal-transition {
      position: fixed;
      inset: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      pointer-events: none;
      z-index: 9999;
      opacity: 0;
      transform: scale(0.3);
      transition: all 1.3s ease-out;
    }

    .petal-transition.active {
      opacity: 1;
      transform: scale(6);
    }

  </style>
</head>

<body 
  class="min-h-screen flex items-center justify-center bg-cover bg-center relative
         bg-[url('/images/welcome/BG_Mobile_Web.jpg')] 
         md:bg-[url('/images/welcome/BG_PC_Web2.jpg')]">
  <!-- Soft Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-pink-100/60 via-white/50 to-pink-200/60"></div>

  <!-- Main Card -->
  <div 
    class="relative z-20 fade-in max-w-lg mx-4 p-8 rounded-3xl backdrop-blur-xl shadow-xl 
           bg-white/60 border border-white/30 text-center">

    <p class="text-lg tracking-wide text-gray-700 mb-3">
      The Wedding Of
    </p>

    <!-- Nama Mempelai -->
    <h1 
      class="text-5xl md:text-6xl font-bold text-pink-700 drop-shadow-sm mb-2"
      style="font-family: 'Great Vibes', cursive;">
      Tajali & Rahma
    </h1>

    <p class="text-gray-700 mt-4 leading-relaxed">
      Dengan penuh rasa syukur dan kebahagiaan, kami mengundang Bapak/Ibu/Saudara/i  
      untuk hadir dan memberikan doa restu pada hari istimewa kami.
    </p>

    <!-- Wedding Date -->
    <div class="mt-6 mb-6">
      <p class="text-gray-600 tracking-wide">Hari Bahagia</p>
      <p class="text-2xl font-semibold text-pink-600 mt-1">
        07 Desember 2025
      </p>
    </div>

    <!-- Button -->
    <a 
      href="/home" 
      class="inline-block bg-pink-600 hover:bg-pink-700 text-white 
             px-8 py-3 rounded-full shadow-lg transition transform hover:scale-105">
      Buka Undangan
    </a>
  </div>

</body>
</html>
