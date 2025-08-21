<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hamdard Insights – Educational Information System of Hamdard Bangladesh</title>
      <meta name="description" content="Hamdard Insights is a centralized digital platform showcasing all educational institutions under Hamdard Bangladesh, including departments, courses, students, faculty, staff, and a media gallery.">
      <meta name="keywords" content="Hamdard Bangladesh, Hamdard Education, Hamdard Insights, Educational Management, Academic Portal, Departments, Courses, Students, Teachers, Staff, Institutional Data">
      <meta name="author" content="Hamdard Bangladesh">
      <meta property="og:title" content="Hamdard Insights – Educational Information System">
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
                  <h1 class="text-xl font-bold text-white leading-tight">Hamdard Insights</h1>
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

 <!-- Hamdard General Hospital Section -->
      <section class="py-12 bg-white">
         <div class="container mx-auto px-6">
            <div class="text-center mb-12">
               <h2 class="text-3xl font-bold text-primary mb-2">Hamdard General Hospital</h2>
               <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
               <h3 class="text-2xl font-semibold text-dark mb-4">A Pioneer in Integrated Healthcare</h3>
               <p class="text-gray-700 max-w-3xl mx-auto">
                  Hamdard General Hospital is a dignified step forward in the solemn journey of Health and Medicare. 
                  As Bangladesh's first hospital to integrate <span class="font-semibold text-secondary">Unani, Ayurvedic, and Allopathic</span> 
                  systems under one roof, we provide comprehensive treatment options tailored to each patient's needs.
               </p>
            </div>
            <!-- Hospital Image and Key Features -->
            <div class="flex flex-col lg:flex-row gap-8 mb-12">
               <!-- Hospital Image -->
               <div class="lg:w-1/2">
                  <img src="{{ asset('images/institute/Hospital.jpg') }}" 
                     alt="Hamdard General Hospital" 
                     class="w-full h-auto rounded-lg shadow-xl">
               </div>
               <!-- Key Features -->
               <div class="lg:w-1/2 grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">60+</div>
                     <h4 class="font-semibold text-dark mb-1">Bed Facility</h4>
                     <p class="text-sm text-gray-600">Approved by DGHS (2018)</p>
                  </div>
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">19+</div>
                     <h4 class="font-semibold text-dark mb-1">Specialists</h4>
                     <p class="text-sm text-gray-600">Hakims, Kabirajes & Allopathic Doctors</p>
                  </div>
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">500+</div>
                     <h4 class="font-semibold text-dark mb-1">Diagnostic Tests</h4>
                     <p class="text-sm text-gray-600">Pathology, X-Ray, USG, ECG</p>
                  </div>
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">24/7</div>
                     <h4 class="font-semibold text-dark mb-1">Emergency</h4>
                     <p class="text-sm text-gray-600">Two dedicated ambulances</p>
                  </div>
               </div>
            </div>
            <!-- Treatment Systems -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">
               <!-- Allopathic Medicine -->
               <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500">
                  <h4 class="text-xl font-bold text-blue-600 mb-4 flex items-center">
                     <i class="fas fa-stethoscope mr-3"></i> Allopathic Medicine
                  </h4>
                  <p class="text-gray-700 mb-4">Our modern Allopathic division provides quick lifesaving interventions with specialists in:</p>
                  <ul class="space-y-2">
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>General Medicine</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Gynecology & Obstetrics</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Pediatrics</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Surgery & Orthopedics</span>
                     </li>
                  </ul>
               </div>
               <!-- Unani Medicine -->
               <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-500">
                  <h4 class="text-xl font-bold text-green-600 mb-4 flex items-center">
                     <i class="fas fa-leaf mr-3"></i> Unani Medicine
                  </h4>
                  <p class="text-gray-700 mb-4">Our Unani department offers holistic treatments including:</p>
                  <ul class="space-y-2">
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Regimental Therapy (Ilaj-bit-Tadbeer)</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Pharmacotherapy (Ilaj-bit-Dawa)</span>
                     </li>
                  </ul>
               </div>
               <!-- Ayurvedic Medicine -->
               <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-500">
                  <h4 class="text-xl font-bold text-yellow-600 mb-4 flex items-center">
                     <i class="fas fa-spa mr-3"></i> Ayurvedic Medicine
                  </h4>
                  <p class="text-gray-700 mb-4">Our Ayurvedic center specializes in:</p>
                  <ul class="space-y-2">
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Panchakarma Therapies</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Herbal Formulations</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Yoga & Lifestyle Counseling</span>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Additional Info and CTA -->
            <div class="bg-primary bg-opacity-10 p-8 rounded-lg flex flex-col md:flex-row justify-between items-center">
               <div class="mb-4 md:mb-0">
                  <div class="flex items-center text-lg font-medium text-dark mb-2">
                     <i class="fas fa-tag text-primary mr-2"></i> OPD Entry Fee: 50৳ only
                  </div>
                  <div class="flex items-center text-lg font-medium text-dark">
                     <i class="fas fa-clock text-primary mr-2"></i> Open 24/7 including holidays
                  </div>
               </div>
               <a href="https://www.facebook.com/hamdardgeneralhospital/" 
                  class="bg-secondary hover:bg-dark text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 inline-flex items-center">
               <i class="fas fa-directions mr-2"></i> Visit Hospital
               </a>
            </div>
            <!-- Future Vision -->
            <div class="mt-12 bg-gradient-to-r from-primary to-secondary p-8 rounded-lg text-white">
               <h4 class="text-2xl font-bold mb-4 flex items-center">
                  <i class="fas fa-bullseye mr-3"></i> Future Vision
               </h4>
               <p class="text-lg">
                  Hamdard General Hospital is on its way to becoming a <span class="font-bold">500-bed tertiary care facility</span>, 
                  continuing our mission to provide integrated, affordable healthcare while serving as a teaching 
                  hospital for Hamdard Institute of Unani and Ayurvedic Medicine.
               </p>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="bg-dark text-white py-6 px-6">
         <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
               <h3 class="text-xl font-bold text-green-300 mb-2">Hamdard Insights</h3>
               <p class="text-green-100">Hamdard Insights is a unified platform for managing all educational data of Hamdard Bangladesh institutions.</p>
            </div>
            <div class="space-y-2">
               <p class="text-green-100"><i class="fas fa-envelope mr-2"></i> hamdardinsights@gmail.com</p>
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