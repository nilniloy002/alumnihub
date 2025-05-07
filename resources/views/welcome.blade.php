<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HFB Alumni Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('admin/favicon/fav.png') }}" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2e7d32',
            secondary: '#388e3c',
            light: '#e8f5e9',
            dark: '#1b5e20',
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
  </style>
</head>
<body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">

  <!-- Header -->
  <header class="flex justify-between items-center px-6 py-4 bg-primary shadow-lg">
    <h1 class="text-2xl font-bold text-white">HFB Alumni Management System</h1>
    <nav class="space-x-4">
      <a href="#" class="text-white hover:underline font-medium">Alumni Registration</a>
      <a href="{{ route('login') }}" class="text-white hover:underline font-medium">Login Portal</a>
    </nav>
  </header>

  <!-- Interactive Hero Section -->
  <section class="relative bg-white py-16 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
      <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-secondary animate-pulse"></div>
      <div class="absolute bottom-10 right-10 w-40 h-40 rounded-full bg-primary animate-pulse animation-delay-2000"></div>
      <div class="absolute top-1/3 right-1/4 w-24 h-24 rounded-full bg-secondary animate-pulse animation-delay-1000"></div>
    </div>
    
    <!-- Graduation Cap Floating Animation -->
    <div class="absolute top-10 right-10 floating-cap">
      <i class="fas fa-graduation-cap text-4xl text-secondary opacity-70"></i>
    </div>
    
    <!-- Diploma Floating Animation -->
    <div class="absolute top-20 left-20 floating-diploma">
      <i class="fas fa-scroll text-4xl text-primary opacity-70"></i>
    </div>
    
    <!-- Confetti Elements (will be animated with GSAP) -->
    <div id="confetti-container" class="absolute top-0 left-0 w-full h-full pointer-events-none"></div>
    
    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-dark mb-4 animate-fade-in">Welcome to HFB Alumni Management System!</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto animate-fade-in animate-delay-200">Connecting alumni across generations and geographies</p>
        
        <!-- Animated Button -->
        <div class="mt-8 animate-bounce animate-infinite animate-duration-2000">
          <button id="celebrate-btn" class="bg-secondary hover:bg-dark text-white font-bold py-3 px-8 rounded-full shadow-lg transform hover:scale-105 transition duration-300 flex items-center mx-auto">
            <i class="fas fa-graduation-cap mr-2"></i> Our Leadership Team
          </button>
        </div>
      </div>

      <!-- Leadership Cards -->
      <div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-16">
        <!-- MD Card -->
        <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
          <div class="relative mb-4">
            <img src="{{ asset('images/team/1.png') }}" alt="Managing Director" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
            <!-- <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white px-4 py-1 rounded-full text-sm font-bold">CEO</div> -->
          </div>
          <h3 class="text-sm font-semibold text-primary">Dr. Hakim Md. Yousuf Harun Bhuiyan</h3>
          <p class="text-gray-600 text-sm">Managing Director, Chief Mutawali </p>
          <p class="text-gray-600 text-sm">Hamdard Laboratories (Waqf) Bangladesh</p>
          <!-- <p class="text-gray-500 text-sm mt-2">Hamdard Laboratories (Waqf) Bangladesh</p> -->
        </div>

        <!-- Chief Advisor Card -->
        <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
          <div class="relative mb-4">
            <img src="{{ asset('images/team/2.png') }}" alt="Chief Advisor" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
          </div>
          <h3 class="text-sm font-semibold text-primary">Prof. Kamrun Nahar Paulin</h3>
          <p class="text-gray-600 text-sm">Senior Director, Planning & Development </p>
          <p class="text-gray-600 text-sm">Director, Marketing & Sales (Add. Resp.) </p>
         <!-- <p class="text-gray-500 text-sm mt-2">Hamdard University Bangladesh</p> -->
        </div>

        <!-- Director Card -->
        <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
          <div class="relative mb-4">
            <img src="{{ asset('images/team/3.png') }}" alt="Director" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
          </div>
          <h3 class="text-sm font-semibold text-primary">Brig Gen (retd.) Engr Mahbub Anowar</h3>
          <p class="text-gray-600 text-sm">Director</p>
          <p class="text-gray-600 text-sm">Hamdard Foundation</p>
          <!-- <p class="text-gray-500 text-sm mt-2">Hamdard Foundation Bangladesh</p> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Institution Logos -->
  <section class="py-12 bg-green-50">
    <h2 class="text-center text-2xl font-bold text-dark mb-8">Our Institutions</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 px-6">
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="{{ asset('images/institute/4.png') }}" alt="HUB" class="w-24 h-24 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Hamdard University Bangladesh</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="{{ asset('images/institute/5.png') }}" alt="Hakim Said Eastern Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Hakim Said Eastern Medical College & Hospital</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="{{ asset('images/institute/6.png') }}" alt="Hamdard Unani Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Hamdard Unani Medical College & Hospital</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="{{ asset('images/institute/7.png') }}" alt="Rawshan Jahan Eastern Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Rawshan Jahan Eastern Medical College & Hospital</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="{{ asset('images/institute/8.png') }}" alt="Hamdard Institute of Unani & Ayurvedic Medicine" class="w-24 h-24 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Hamdard Institute of Unani & Ayurvedic Medicine</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="{{ asset('images/institute/9.png') }}" alt="Hamdard Public College" class="w-24 h-24 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Hamdard Public College</p>
      </div>
    </div>
  </section>

  <!-- Campus Memories Masonry Gallery -->
  <section class="py-12 bg-white px-6">
    <div class="container mx-auto">
      <h2 class="text-center text-3xl font-bold text-dark mb-8">Campus Memories</h2>
      <div class="masonry-grid">
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/1.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Graduation Ceremony">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/2.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Students Studying">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/3.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Campus Building">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/4.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Sports Event">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/5.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Library">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/6.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Alumni Reunion">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/7.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Lecture Hall">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/8.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Campus Grounds">
        </div>
        <div class="masonry-item">
          <img src="{{ asset('images/gallery/9.jpg') }}" 
               class="rounded-lg shadow-md w-full h-auto" alt="Campus Grounds">
        </div>
      </div>
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
        <h3 class="text-xl font-bold text-green-300 mb-2">Alumni Connect</h3>
        <p class="text-green-100">Department of Computer Science & Engineering</p>
        <p class="text-green-100 text-sm">Hamdard University Bangladesh</p>
      </div>
      <div class="space-y-2">
        <p class="text-green-100"><i class="fas fa-envelope mr-2"></i> alumni@university.edu</p>
        <p class="text-green-100"><i class="fas fa-phone mr-2"></i> +1 (555) 123-4567</p>
        <div class="flex space-x-4 mt-2">
          <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="border-t border-green-800 mt-4 pt-4 text-center text-sm text-green-200">
      &copy; 2025 HFB Alumni Management System | Department of CSE - HUB | All rights reserved.
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