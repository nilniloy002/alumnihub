<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    <h1 class="text-2xl font-bold text-white">Alumni Management System</h1>
    <nav class="space-x-4">
      <a href="#" class="text-white hover:underline font-medium">Alumni Registration</a>
      <a href="#" class="text-white hover:underline font-medium">Login Portal</a>
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
        <h2 class="text-4xl font-bold text-dark mb-4 animate-fade-in">Welcome Alumni!</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto animate-fade-in animate-delay-200">Celebrating excellence and lifelong connections</p>
        
        <!-- Animated Button -->
        <div class="mt-8 animate-bounce animate-infinite animate-duration-2000">
          <button id="celebrate-btn" class="bg-secondary hover:bg-dark text-white font-bold py-3 px-8 rounded-full shadow-lg transform hover:scale-105 transition duration-300 flex items-center mx-auto">
            <i class="fas fa-graduation-cap mr-2"></i> Our Management
          </button>
        </div>
      </div>

      <!-- Leadership Cards -->
      <div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-16">
        <!-- CEO Card -->
        <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
          <div class="relative mb-4">
            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="CEO" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white px-4 py-1 rounded-full text-sm font-bold">CEO</div>
          </div>
          <h3 class="text-xl font-semibold text-primary">Michael Johnson</h3>
          <p class="text-gray-600">Chief Executive Officer</p>
          <p class="text-gray-500 text-sm mt-2">Class of 2005</p>
        </div>

        <!-- COO Card -->
        <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
          <div class="relative mb-4">
            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="COO" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white px-4 py-1 rounded-full text-sm font-bold">COO</div>
          </div>
          <h3 class="text-xl font-semibold text-primary">Sarah Williams</h3>
          <p class="text-gray-600">Chief Operating Officer</p>
          <p class="text-gray-500 text-sm mt-2">Class of 2010</p>
        </div>

        <!-- CTO Card -->
        <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
          <div class="relative mb-4">
            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="CTO" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white px-4 py-1 rounded-full text-sm font-bold">CTO</div>
          </div>
          <h3 class="text-xl font-semibold text-primary">David Chen</h3>
          <p class="text-gray-600">Chief Technology Officer</p>
          <p class="text-gray-500 text-sm mt-2">Class of 2008</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Institution Logos -->
  <section class="py-12 bg-green-50">
    <h2 class="text-center text-2xl font-bold text-dark mb-8">Our Institutions</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 px-6">
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="https://logo.clearbit.com/harvard.edu" alt="Institution" class="w-16 h-16 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Harvard University</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="https://logo.clearbit.com/stanford.edu" alt="Institution" class="w-16 h-16 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Stanford University</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="https://logo.clearbit.com/mit.edu" alt="Institution" class="w-16 h-16 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">MIT</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="https://logo.clearbit.com/ox.ac.uk" alt="Institution" class="w-16 h-16 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Oxford University</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="https://logo.clearbit.com/cam.ac.uk" alt="Institution" class="w-16 h-16 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">Cambridge University</p>
      </div>
      <div class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300">
        <img src="https://logo.clearbit.com/berkeley.edu" alt="Institution" class="w-16 h-16 mx-auto mb-2">
        <p class="text-sm font-medium text-gray-700">UC Berkeley</p>
      </div>
    </div>
  </section>

  <!-- Campus Memories Masonry Gallery -->
  <section class="py-12 bg-white px-6">
    <div class="container mx-auto">
      <h2 class="text-center text-3xl font-bold text-dark mb-8">Campus Memories</h2>
      <div class="masonry-grid">
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Graduation Ceremony">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Students Studying">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Campus Building">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Sports Event">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Library">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Alumni Reunion">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
               class="rounded-lg shadow-md w-full h-auto" alt="Lecture Hall">
        </div>
        <div class="masonry-item">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
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
        <p class="text-green-100 text-sm">University of Excellence</p>
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
      &copy; 2025 Alumni Management System | Department of CSE - University Hub | All rights reserved.
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