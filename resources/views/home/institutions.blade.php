<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hamdard Foundation Bangladesh – Educational Information System of Hamdard Bangladesh</title>
      <meta name="description" content="Hamdard Foundation Bangladesh is a centralized digital platform showcasing all educational institutions under Hamdard Bangladesh, including departments, courses, students, faculty, staff, and a media gallery.">
      <meta name="keywords" content="Hamdard Bangladesh, Hamdard Education, Hamdard Foundation Bangladesh, Educational Management, Academic Portal, Departments, Courses, Students, Teachers, Staff, Institutional Data">
      <meta name="author" content="Hamdard Bangladesh">
      <meta property="og:title" content="Hamdard Foundation Bangladesh – Educational Information System">
      <meta property="og:description" content="Explore all of Hamdard Bangladesh's educational institutions in one place – from departments and courses to student and faculty details.">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://hamdardinsight.com/">
      <meta property="og:image" content="">
      <meta name="robots" content="index, follow">
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="icon" href="{{ asset('admin/favicon/fav.png') }}" type="image/png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
      <script>
         tailwind.config = {
           theme: {
             extend: {
               colors: {
                 primary: '#2e7d32',
                 secondary: '#388e3c',
                 light: '#e8f5e9',
                 dark: '#1b5e20',
                 accent: '#4caf50',
               }
             }
           }
         }
      </script>
      <style>
         .masonry-grid {
         column-count: 3;
         column-gap: 1rem;
         }
         .masonry-item {
         break-inside: avoid;
         margin-bottom: 1rem;
         transition: all 0.3s ease;
         }
         .masonry-item:hover {
         transform: scale(1.02);
         }
         @media (max-width: 768px) {
         .masonry-grid {
         column-count: 2;
         }
         }
         @media (max-width: 480px) {
         .masonry-grid {
         column-count: 1;
         }
         }
         .leader-card {
         transition: all 0.3s ease;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         }
         .leader-card:hover {
         transform: translateY(-5px);
         box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
         }
         .floating-cap {
         animation: float 3s ease-in-out infinite;
         }
         .floating-diploma {
         animation: float 4s ease-in-out infinite 1s;
         }
         @keyframes float {
         0%, 100% { transform: translateY(0); }
         50% { transform: translateY(-15px); }
         }
         .confetti {
         position: absolute;
         width: 10px;
         height: 10px;
         opacity: 0;
         }
         .foundation-card {
         perspective: 1000px;
         }
         .foundation-inner {
         transition: transform 0.8s;
         transform-style: preserve-3d;
         position: relative;
         }
         .foundation-card:hover .foundation-inner {
         transform: rotateY(180deg);
         }
         .foundation-front, .foundation-back {
         backface-visibility: hidden;
         position: absolute;
         width: 100%;
         height: 100%;
         }
         .foundation-back {
         transform: rotateY(180deg);
         }
         .wave-shape {
         position: absolute;
         bottom: 0;
         left: 0;
         width: 100%;
         overflow: hidden;
         line-height: 0;
         transform: rotate(180deg);
         }
         .wave-shape svg {
         position: relative;
         display: block;
         width: calc(100% + 1.3px);
         height: 150px;
         }
         .wave-shape .shape-fill {
         fill: #e8f5e9;
         }
         .parallax-bg {
         background-attachment: fixed;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
      </style>
   </head>
   <body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">
      <!-- Header -->
      <header class="flex items-center justify-between px-6 py-3 bg-primary shadow-lg sticky top-0 z-50">
         <!-- Logo and Branding -->
         <div class="flex items-center space-x-3">
            <a href="/" class="flex items-center">
               <!-- Logo Image -->
               <img src="{{ asset('admin/favicon/logo-01.png') }}" 
                  alt="HFB Logo" 
                  class="h-20 w-auto">  <!-- Adjust height as needed -->
               <!-- Text Logo/Brand Name - Hidden on mobile, shown on larger screens -->
               <span class="hidden md:block">
                  <h1 class="text-xl font-bold text-white leading-tight">Hamdard Foundation Bangladesh</h1>
                  <p class="text-lg text-green-100">Unified Educational Intelligence</p>
               </span>
            </a>
         </div>
         <!-- Navigation -->
         <nav class="flex items-center space-x-4">
            <a href="#" 
               class="text-white hover:text-green-200 font-medium px-3 py-2 rounded-md transition-colors duration-300
               {{ request()->is('register') ? 'bg-green-700' : '' }}">
            <i class="fas fa-user-plus mr-1"></i>
            <span class="hidden sm:inline">Alumni Registration</span>
            </a>
            <a href="{{ route('login') }}" 
               class="bg-secondary hover:bg-green-700 text-white font-medium px-4 py-2 rounded-md transition-colors duration-300
               flex items-center">
            <i class="fas fa-sign-in-alt mr-2"></i>
            <span class="hidden sm:inline">Login Portal</span>
            <span class="sm:hidden">Login</span>
            </a>
         </nav>
      </header>

      <!-- Mission Section -->
    <section class="relative py-16 bg-gradient-to-r from-green-800 to-green-900 text-white overflow-hidden">
        
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Holding the Hands of Humanity</h2>
                <p class="text-xl max-w-3xl mx-auto">Hamdard Foundation Bangladesh has been working tirelessly for Education, Health, and Humanity since its inception.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="fade-in">
                    <p class="mb-4 text-green-100">Starting with health charity programs, the Foundation's visionary leader, Dr. Hakim Md. Yousuf Harun Bhuiyan, recognized the crucial need for educational development in Bangladesh. He believed that progress is not solely the government's responsibility but a collective duty of all citizens.</p>
                    <p class="text-green-100">Dr. Harun dedicated himself to advancing both traditional Eastern medicine systems (Unani and Ayurvedic) and general education to build a brighter future for Bangladesh.</p>
                </div>
                <div class="fade-in">
                    <p class="mb-4 text-green-100">The Foundation provides educational aid and stipends to needy but brilliant students while establishing numerous institutions including medical colleges, general colleges, and ultimately Hamdard University Bangladesh.</p>
                    <p class="text-green-100">Looking toward the future, Dr. Harun has envisioned an ambitious project: the Hamdard City of Science, Education and Culture (HCSEC) at Gazaria, Munshigonj - a pioneering initiative bringing urban educational facilities to a semi-urban locality.</p>
                </div>
            </div>
        </div>
    </section>
    
      <!-- Institution Logos -->
      <section class="py-12 bg-green-50">
         <h2 class="text-center text-2xl font-bold text-dark mb-8">Our Institutions</h2>
         <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 px-6">
            <!-- Hamdard University Bangladesh -->
            <a href="{{ url('hub') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/4.png') }}" alt="HUB" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard University Bangladesh</p>
            </a>
            <!-- Hamdard Institute of Unani & Ayurvedic Medicine -->
            <a href="{{ url('hiuam') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/8.png') }}" alt="Hamdard Institute of Unani & Ayurvedic Medicine" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard Institute of Unani & Ayurvedic Medicine</p>
            </a>
            <!-- Rawshan Jahan Eastern Medical College & Hospital -->
            <a href="{{ url('rjemch') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/7.png') }}" alt="Rawshan Jahan Eastern Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Rawshan Jahan Eastern Medical College & Hospital</p>
            </a>
            <!-- Hamdard Unani Medical College & Hospital -->
            <a href="{{ url('humch') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/6.png') }}" alt="Hamdard Unani Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard Unani Medical College & Hospital</p>
            </a>
            <!-- Hakim Said Eastern Medical College & Hospital -->
            <a href="{{ url('hsemch') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/5.png') }}" alt="Hakim Said Eastern Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hakim Said Eastern Medical College & Hospital</p>
            </a>
            <!-- Hamdard Public College -->
            <a href="{{ url('hpc') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/9.png') }}" alt="Hamdard Public College" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard Public College</p>
            </a>
         </div>
      </section>

      <!-- Stats Section -->
      <section class="py-12 bg-green-700 text-white">
         <div class="container mx-auto px-6">
            <h2 class="text-center text-2xl font-bold mb-8">Alumni Network</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
               <div>
                  <div class="text-4xl font-bold mb-2">10,000+</div>
                  <p class="text-green-100">Alumni Worldwide</p>
               </div>
               <div>
                  <div class="text-4xl font-bold mb-2">120+</div>
                  <p class="text-green-100">Countries Represented</p>
               </div>
               <div>
                  <div class="text-4xl font-bold mb-2">85%</div>
                  <p class="text-green-100">Career Satisfaction</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="bg-dark text-white py-6 px-6">
         <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
               <h3 class="text-xl font-bold text-green-300 mb-2">Hamdard Foundation Bangladesh</h3>
               <p class="text-green-100">Hamdard Foundation Bangladesh is a unified platform for managing all educational data of Hamdard Bangladesh institutions.</p>
            </div>
            <div class="space-y-2">
               <p class="text-green-100"><i class="fas fa-envelope mr-2"></i> hamdardFoundation Bangladesh@gmail.com</p>
               <p class="text-green-100"><i class="fas fa-phone mr-2"></i> +1 (555) 123-4567</p>
               <div class="flex space-x-4 mt-2">
                  <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
               </div>
            </div>
         </div>
         <div class="border-t border-green-800 mt-4 pt-4 text-center text-sm text-green-200">
            &copy; 2025 Hamdard Foundation Bangladesh | All rights reserved.
         </div>
      </footer>
      <script>
         // Confetti animation
         document.getElementById('celebrate-btn').addEventListener('click', function() {
           const colors = ['#2e7d32', '#388e3c', '#4caf50', '#81c784', '#a5d6a7'];
           const container = document.getElementById('confetti-container');
           
           // Clear previous confetti
           container.innerHTML = '';
           
           // Create 50 confetti pieces
           for (let i = 0; i < 50; i++) {
             const confetti = document.createElement('div');
             confetti.className = 'confetti';
             confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
             confetti.style.left = Math.random() * 100 + 'vw';
             confetti.style.top = '-10px';
             confetti.style.borderRadius = Math.random() > 0.5 ? '50%' : '0';
             confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
             container.appendChild(confetti);
             
             // Animate each confetti piece
             gsap.to(confetti, {
               y: window.innerHeight + 10,
               x: (Math.random() - 0.5) * 200,
               opacity: 1,
               duration: 2 + Math.random() * 3,
               ease: 'power1.out',
               onComplete: () => {
                 confetti.remove();
               }
             });
           }
           
           // Bounce animation for the button
           gsap.to(this, {
             y: -10,
             duration: 0.2,
             yoyo: true,
             repeat: 1,
             ease: 'power1.inOut'
           });
         });
         
         // Animate leadership cards on scroll
         document.addEventListener('DOMContentLoaded', function() {
           const cards = document.querySelectorAll('.leader-card');
           
           cards.forEach((card, index) => {
             gsap.from(card, {
               y: 50,
               opacity: 0,
               duration: 0.8,
               delay: index * 0.2,
               ease: 'back.out(1.7)'
             });
           });
           
           // Animate foundation cards on scroll
           const foundationCards = document.querySelectorAll('.foundation-card');
           
           foundationCards.forEach((card, index) => {
             gsap.from(card, {
               x: index % 2 === 0 ? -50 : 50,
               opacity: 0,
               duration: 0.8,
               delay: index * 0.3,
               ease: 'power2.out'
             });
           });
           
           // Floating elements animation
           gsap.to('.floating-cap', {
             rotation: 360,
             duration: 20,
             repeat: -1,
             ease: 'none'
           });
           
           gsap.to('.floating-diploma', {
             rotation: -360,
             duration: 25,
             repeat: -1,
             ease: 'none'
           });
         });
      </script>
   </body>
</html>