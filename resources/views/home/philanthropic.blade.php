<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philanthropic Activities - Hamdard Foundation Bangladesh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #f7fdf7, #e8f5e9);
        }
        
        .philanthropy-card {
            transition: all 0.4s ease;
            overflow: hidden;
            position: relative;
        }
        
        .philanthropy-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: linear-gradient(to bottom, rgba(46, 125, 50, 0.1), rgba(46, 125, 50, 0.2));
            transition: height 0.4s ease;
            z-index: 0;
        }
        
        .philanthropy-card:hover::before {
            height: 100%;
        }
        
        .philanthropy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .philanthropy-icon {
            transition: all 0.4s ease;
        }
        
        .philanthropy-card:hover .philanthropy-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .timeline {
            position: relative;
            padding-left: 3rem;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            height: 100%;
            width: 2px;
            background: #2e7d32;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -3rem;
            top: 0.5rem;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #2e7d32;
            border: 4px solid #e8f5e9;
        }
        
        .stats-number {
            transition: all 1s ease;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .section-divider {
            position: relative;
            height: 80px;
            overflow: hidden;
        }
        
        .section-divider svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .flip-card {
            perspective: 1000px;
        }
        
        .flip-card-inner {
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }
        
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        
        .flip-card-front, .flip-card-back {
            backface-visibility: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .flip-card-back {
            transform: rotateY(180deg);
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

    <!-- Hero Section -->
    <section class="relative py-16 bg-gradient-to-r from-green-800 to-green-900 text-white overflow-hidden">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Philanthropic Activities</h1>
            <p class="text-xl max-w-3xl mx-auto">Extending support to humanity through healthcare, education, and disaster relief initiatives</p>
        </div>
  
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Our Impact in Numbers</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2 stats-number" data-target="250000">0</div>
                    <p class="text-green-700">Patients Treated at Bishwa Ijtema</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2 stats-number" data-target="40000">0</div>
                    <p class="text-green-700">Hajj Pilgrims Served</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2 stats-number" data-target="200000">0</div>
                    <p class="text-green-700">Ifter Packets Distributed</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2 stats-number" data-target="22">0</div>
                    <p class="text-green-700">Years of Polio Vaccination</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Camps Section -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Medical Camps & Health Initiatives</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Bishwa Ijtema -->
                <div class="philanthropy-card bg-white rounded-xl p-8">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-6 philanthropy-icon">
                        <i class="fas fa-mosque text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-800">Bishwa Ijtema Medical Camp</h3>
                    <p class="text-gray-700 mb-4">For four decades, Hamdard Bangladesh has been providing free medical camps at Bishwa Ijtema, Tongi - the second largest gathering of Muslim Ummah.</p>
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h4 class="font-bold text-green-700 mb-2">Key Facts:</h4>
                        <ul class="list-disc list-inside text-green-800">
                            <li>60 practitioners from 3 Unani Medical Colleges & Hospitals</li>
                            <li>Service from 7 AM to 11 PM during Ijtema</li>
                            <li>Treated approximately 250,000 people in 2023</li>
                            <li>Pioneered in 1983 by Dr. Hakim Md. Yousuf Harun Bhuiyan</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Hajji Camp -->
                <div class="philanthropy-card bg-white rounded-xl p-8">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-6 philanthropy-icon">
                        <i class="fas fa-kaaba text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-800">Hajji Camp Medical Service</h3>
                    <p class="text-gray-700 mb-4">Since 2011, Hamdard has provided month-long free medical camps at Government Hajj Camp, Ashkona, serving pilgrims before their departure to Mecca.</p>
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h4 class="font-bold text-green-700 mb-2">Services Provided:</h4>
                        <ul class="list-disc list-inside text-green-800">
                            <li>12-hour daily service (8 AM to 8 PM)</li>
                            <li>Medicine package with 6-8 essential items for each pilgrim</li>
                            <li>Guide book for Hajj rituals and health precautions</li>
                            <li>Served nearly 40,000 pilgrims in 2023</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Interfaith Medical Camps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Durga Puja -->
                <div class="philanthropy-card bg-white rounded-xl p-8">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-6 philanthropy-icon">
                        <i class="fas fa-om text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-800">Durga Puja Medical Camp</h3>
                    <p class="text-gray-700 mb-4">Since 2014, Hamdard has extended health support during Hindu religious festivals, providing medical camps and free Rooh Afza.</p>
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h4 class="font-bold text-green-700 mb-2">Locations Served:</h4>
                        <ul class="list-disc list-inside text-green-800">
                            <li>Paikpara Puja Mandap, Mirpur-1 (2014-2018)</li>
                            <li>Ramna Kali Mandir, University of Dhaka Campus (2019)</li>
                            <li>3,500-4,000 worshippers served annually</li>
                            <li>12,000 worshippers served at Ramna Kali Mandir in 2019</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Kathin Chibar Dan -->
                <div class="philanthropy-card bg-white rounded-xl p-8">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-6 philanthropy-icon">
                        <i class="fas fa-dharmachakra text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-800">Kathin Chibar Dan Festival</h3>
                    <p class="text-gray-700 mb-4">Hamdard pioneered free medical camps during Buddhist festivals, providing health services and free Rooh Afza to worshippers.</p>
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h4 class="font-bold text-green-700 mb-2">Locations Served:</h4>
                        <ul class="list-disc list-inside text-green-800">
                            <li>Sobujbag Dharmarajik Bouddha Mohabihar</li>
                            <li>Mirpur Shakkomuni Bouddha Bihar</li>
                            <li>Free blood grouping services</li>
                            <li>Nearly 3,000 worshippers served</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ramadan Initiatives -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Ramadan Initiatives</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Ifter Distribution -->
                <div class="flip-card h-96">
                    <div class="flip-card-inner h-full rounded-xl shadow-lg">
                        <div class="flip-card-front bg-green-800 text-white rounded-xl p-8 flex flex-col items-center justify-center">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-utensils text-green-800 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-center">Distribution of Free Ifter</h3>
                            <p class="text-center text-green-100">Reaching those stuck in traffic during Ramadan</p>
                        </div>
                        <div class="flip-card-back bg-gradient-to-br from-green-700 to-green-900 text-white rounded-xl p-8 flex flex-col items-center justify-center">
                            <h3 class="text-2xl font-bold mb-4 text-center">Distribution of Free Ifter</h3>
                            <p class="text-center mb-4">Hamdard distributes over 200,000 ifter packets and Rooh Afza drinks during Ramadan to people stuck in traffic across Dhaka city.</p>
                            <p class="text-center">Students from Hamdard Public College participate in this noble initiative, learning the importance of serving humanity.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Rooh Afza Distribution -->
                <div class="flip-card h-96">
                    <div class="flip-card-inner h-full rounded-xl shadow-lg">
                        <div class="flip-card-front bg-green-800 text-white rounded-xl p-8 flex flex-col items-center justify-center">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-glass-whiskey text-green-800 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-center">Free Rooh Afza Distribution</h3>
                            <p class="text-center text-green-100">The "Heavenly Elixir" for everyone</p>
                        </div>
                        <div class="flip-card-back bg-gradient-to-br from-green-700 to-green-900 text-white rounded-xl p-8 flex flex-col items-center justify-center">
                            <h3 class="text-2xl font-bold mb-4 text-center">Free Rooh Afza Distribution</h3>
                            <p class="text-center mb-4">Hamdard distributes millions of servings of Rooh Afza to orphanages, mosques, old homes, madrasahs, and charitable organizations during Ramadan.</p>
                            <p class="text-center">This tradition was started by Dr. Hakim Md. Yousuf Harun Bhuiyan and continues to grow each year.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Initiatives -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Other Philanthropic Initiatives</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Polio Vaccine -->
                <div class="philanthropy-card bg-white rounded-xl p-6 text-center">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-4 mx-auto philanthropy-icon">
                        <i class="fas fa-syringe text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-green-800">Polio Vaccine Program</h3>
                    <p class="text-gray-700">Since 1999, Hamdard has supported the government's polio eradication efforts through vaccination camps at hospitals and outlets.</p>
                </div>
                
                <!-- Stipend & Scholarship -->
                <div class="philanthropy-card bg-white rounded-xl p-6 text-center">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-4 mx-auto philanthropy-icon">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-green-800">Stipend & Scholarship</h3>
                    <p class="text-gray-700">Hamdard provides scholarships and stipends to needy but meritorious students across its educational institutions.</p>
                </div>
                
                <!-- Disaster Relief -->
                <div class="philanthropy-card bg-white rounded-xl p-6 text-center">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-4 mx-auto philanthropy-icon">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-green-800">Disaster Relief</h3>
                    <p class="text-gray-700">Hamdard provides aid during natural disasters like floods, cyclones, and cold waves with food, medicine, and shelter support.</p>
                </div>
            </div>
            
            <!-- National Days & Special Events -->
            <div class="mt-12 bg-white rounded-xl p-8">
                <h3 class="text-2xl font-bold text-green-800 mb-6 text-center">Observance of National Days & Special Events</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-xl font-semibold text-green-700 mb-4">National Days</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>International Mother Language Day</li>
                            <li>Independence Day</li>
                            <li>Victory Day</li>
                            <li>Birth Anniversary of Bangabandhu Sheikh Mujibur Rahman (March 17)</li>
                            <li>National Mourning Day (August 15)</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-semibold text-green-700 mb-4">Special Days of Hamdard</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Founding Day (August 1) - since 1906</li>
                            <li>Birth and death anniversaries of Hamdard pioneers</li>
                            <li>Dua Mahfil and reminiscent programs</li>
                        </ul>
                    </div>
                </div>
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
        // Animate stats counter
        function animateValue(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerHTML = Math.floor(progress * (end - start) + start).toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Initialize animation when stats are in viewport
        document.addEventListener('DOMContentLoaded', function() {
            const statsSection = document.querySelector('.bg-white');
            const statElements = document.querySelectorAll('.stats-number');
            let animated = false;

            function checkIfInView() {
                const position = statsSection.getBoundingClientRect();
                
                // Checking whether completely visible
                if (position.top >= 0 && position.bottom <= window.innerHeight && !animated) {
                    animated = true;
                    statElements.forEach(el => {
                        const target = parseInt(el.getAttribute('data-target'));
                        animateValue(el, 0, target, 2000);
                    });
                }
            }

            window.addEventListener('scroll', checkIfInView);
            checkIfInView(); // Check on load

            // Fade in animation when scrolling
            const fadeElements = document.querySelectorAll('.fade-in');
            
            function checkFade() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            }
            
            window.addEventListener('scroll', checkFade);
            checkFade(); // Check on load
        });
    </script>
</body>
</html>