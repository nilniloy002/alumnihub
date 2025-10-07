<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamdard Foundation Bangladesh</title>
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
        
        /* Navigation Styles */
        .nav-container {
            position: relative;
        }
        .nav-menu {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .nav-item {
            position: relative;
        }
        .nav-link {
            color: white;
            font-weight: 400;
            padding: 2px ;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 14px;
        }
        .nav-link:hover {
            /* background-color: rgba(255, 255, 255, 0.1); */
        }
        .nav-link.active {
            /* background-color: rgba(255, 255, 255, 0.2); */
        }
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 220px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 50;
            font-size:12px;

        }
        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown-item {
            color: #1f2937;
            padding: 0.75rem 1rem;
            display: block;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f3f4f6;
        }
        .dropdown-item:last-child {
            border-bottom: none;
        }
        .dropdown-item:hover {
            background-color: #f9fafb;
            color: #2e7d32;
        }
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        @media (max-width: 1024px) {
            .mobile-menu-btn {
                display: block;
            }
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                max-width: 300px;
                background-color: #2e7d32;
                flex-direction: column;
                align-items: flex-start;
                padding: 2rem;
                transition: right 0.3s ease;
                z-index: 100;
                overflow-y: auto;
            }
            .nav-menu.active {
                right: 0;
            }
            .nav-item {
                width: 100%;
            }
            .nav-link {
                padding: 1rem 0;
                width: 100%;
                justify-content: flex-start;
            }
            .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background-color: rgba(255, 255, 255, 0.1);
                margin-top: 0.5rem;
                margin-left: 1rem;
                width: calc(100% - 2rem);
            }
            .dropdown-item {
                color: white;
                border-bottom-color: rgba(255, 255, 255, 0.1);
            }
            .dropdown-item:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: white;
            }
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 99;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }
            .overlay.active {
                opacity: 1;
                visibility: visible;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">
    <!-- Header -->
 <!-- Header -->
    <header class="flex items-center justify-between px-6 py-3 bg-primary shadow-lg sticky top-0 z-50">
        <!-- Logo and Branding -->
        <div class="flex items-center space-x-3">
            <a href="/" class="flex items-center">
                <!-- Logo Image -->
                <img src="{{ asset('admin/favicon/logo-01.png') }}" 
                    alt="HFB Logo" 
                    class="h-20 w-auto">
                <!-- Text Logo/Brand Name - Hidden on mobile, shown on larger screens -->
                <span class="hidden md:block">
                    <h1 class="text-base font-bold text-white leading-tight">Hamdard Foundation Bangladesh</h1>
                    <!-- <p class="text-sm text-green-100">Unified Educational Intelligence</p> -->
                </span>
            </a>
        </div>
        
        <!-- Navigation -->
        <div class="nav-container">
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" id="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Navigation Menu -->
            <nav class="nav-menu" id="nav-menu">
                <!-- Close Button for Mobile -->
                <button class="mobile-menu-btn self-end md:hidden" id="mobile-menu-close">
                    <i class="fas fa-times"></i>
                </button>
                
                <!-- Navigation Items -->
                <div class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link active">
                        <!-- <i class="fas fa-home"></i> -->
                        <span>Home</span>
                    </a>
                </div>
                
                <div class="nav-item">
                    <a href="{{ url('about-hamdard-foundation') }}" class="nav-link">
                        <!-- <i class="fas fa-info-circle"></i> -->
                        <span>About Hamdard Foundation</span>
                    </a>
                </div>
                
                <div class="nav-item">
                    <a href="{{ url('institutions') }}" class="nav-link dropdown-toggle">
                        <!-- <i class="fas fa-university"></i> -->
                        <span>Institutions</span>
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ url('hub') }}" class="dropdown-item">
                            <!-- <i class="fas fa-graduation-cap mr-2"></i> -->
                            Hamdard University Bangladesh
                        </a>
                        <a href="{{ url('hiuam') }}" class="dropdown-item">
                            <!-- <i class="fas fa-school mr-2"></i> -->
                           Hamdard Institute of Unani & Ayurvedic Medicine
                        </a>
                        <a href="{{ url('rjemch') }}" class="dropdown-item">
                            <!-- <i class="fas fa-school mr-2"></i> -->
                            Rawshan Jahan Eastern Medical College & Hospital
                        </a>
                        <a href="{{ url('humch') }}" class="dropdown-item">
                            <!-- <i class="fas fa-school mr-2"></i> -->
                           Hamdard Unani Medical College & Hospital
                        </a>
                        <a href="{{ url('hsemch') }}" class="dropdown-item">
                            <!-- <i class="fas fa-school mr-2"></i> -->
                            Hakim Said Eastern Medical College & Hospital
                        </a>
                        <a href="{{ url('hpc') }}" class="dropdown-item">
                            <!-- <i class="fas fa-school mr-2"></i> -->
                            Hamdard Public College
                        </a>
                    </div>
                </div>
                
                <div class="nav-item">
                    <a href="{{ url('health') }}" class="nav-link">
                        <!-- <i class="fas fa-heartbeat"></i> -->
                        <span>Healthcare</span>
                    </a>
                </div>
                
                <div class="nav-item">
                    <a href="{{ url('philanthropic') }}" class="nav-link">
                        <!-- <i class="fas fa-hands-helping"></i> -->
                        <span>Philanthropic Activities</span>
                    </a>
                </div>
            
                
                <!-- Existing buttons -->
                <div class="flex flex-col gap-2 mt-4 md:hidden">
                    <!-- <a href="#" 
                       class="text-white hover:text-green-200 font-medium px-3 py-2 rounded-md transition-colors duration-300
                       {{ request()->is('register') ? 'bg-green-700' : '' }} text-center">
                    <i class="fas fa-user-plus mr-1"></i>
                    <span>Alumni Registration</span>
                    </a> -->
                    <a href="{{ route('login') }}" 
                       class="bg-secondary hover:bg-green-700 text-white font-medium px-4 py-2 rounded-md transition-colors duration-300
                       flex items-center justify-center">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    <span>Login Portal</span>
                    </a>
                </div>
            </nav>
            
            <!-- Overlay for mobile menu -->
            <div class="overlay" id="overlay"></div>
        </div>
        
        <!-- Desktop buttons -->
        <nav class="hidden md:flex items-center space-x-4">
            <!-- <a href="#" 
               class="text-white hover:text-green-200 font-medium px-3 py-2 rounded-md transition-colors duration-300
               {{ request()->is('register') ? 'bg-green-700' : '' }}">
            <i class="fas fa-user-plus mr-1"></i>
            <span class="hidden sm:inline">Alumni Registration</span>
            </a> -->
            <a href="{{ route('login') }}" 
               class="bg-secondary hover:bg-green-700 text-white font-medium px-4 py-2 rounded-md transition-colors duration-300
               flex items-center">
            <i class="fas fa-sign-in-alt mr-2"></i>
            <span class="hidden sm:inline">Login Portal</span>
            <span class="sm:hidden">Login</span>
            </a>
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
                <h2 class="text-4xl font-bold text-dark mb-4 animate-fade-in">One Platform. All Institutions. Infinite Insights.</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto animate-fade-in animate-delay-200">Hamdard Insights is a centralized digital platform designed to showcase and manage all Hamdard Bangladesh educational institutions.</p>
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
                        <img src="{{ asset('images/team/mdsir.jpg') }}" alt="Managing Director" 
                            class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
                        <!-- <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white px-4 py-1 rounded-full text-sm font-bold">CEO</div> -->
                    </div>
                    <h3 class="text-sm font-semibold text-primary">Dr. Hakim Md. Yousuf Harun Bhuiyan</h3>
                    <p class="text-gray-600 text-sm">Chief Mutawalli & Managing Director, Hamdard Laboratories (Waqf) Bangladesh &  </p>
                    <p class="text-gray-600 text-sm">Secretary General, Hamdard Foundation Bangladesh</p>
                    <!-- <p class="text-gray-500 text-sm mt-2">Hamdard Laboratories (Waqf) Bangladesh</p> -->
                </div>
                <!-- Chief Advisor Card -->
                <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
                    <div class="relative mb-4">
                        <img src="{{ asset('images/team/sd.jpg') }}" alt="Chief Advisor" 
                            class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
                    </div>
                    <h3 class="text-sm font-semibold text-primary">Prof. Kamrun Nahar Paulin</h3>
                    <p class="text-gray-600 text-sm">Senior Director</p>
                    <p class="text-gray-600 text-sm">Marketing & Sales</p>
                    <p class="text-gray-600 text-sm">Planning & Development </p>
                    <p class="text-gray-600 text-sm">Advisor, Hamdard University Bangladesh </p>
                    </br>
                    </br>
                    <!-- <p class="text-gray-500 text-sm mt-2">Hamdard University Bangladesh</p> -->
                </div>
                <!-- Director Card -->
                <div class="leader-card bg-white rounded-xl p-6 w-full md:w-80 text-center transform hover:scale-105 transition duration-300">
                    <div class="relative mb-4">
                        <img src="{{ asset('images/team/dssir.jpg') }}" alt="Director" 
                            class="w-32 h-32 mx-auto rounded-full border-4 border-secondary object-cover">
                    </div>
                    <h3 class="text-sm font-semibold text-primary">Brig Gen (Retd) Engr Mahbub Anowar</h3>
                    <!-- <p class="text-gray-600 text-xs">SUP, psc, B.Sc & M.Sc Engg, MDS, GOBE, EMBA, FIEB</p> -->
                    <p class="text-gray-600 text-sm">SUP, PSC</p>
                    <!-- <p class="text-gray-600 text-sm">Director</p> -->
                    <p class="text-gray-600 text-sm">Director, Hamdard Foundation Bangladesh</p>
                    </br>
                    </br>
                    <!-- <p class="text-gray-500 text-sm mt-2">Hamdard Foundation Bangladesh</p> -->
                </div>
            </div>
        </div>
    </section>
    
    <!-- Hamdard Foundation Section -->
    <section id="about" class="relative py-16 bg-primary text-white overflow-hidden">
        <div class="wave-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Hamdard Foundation Bangladesh</h2>
                <p class="text-xl text-green-100 max-w-4xl mx-auto">A beacon of hope and service since 1989, dedicated to education, healthcare, and humanitarian services</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Education Card -->
                <div class="foundation-card h-96">
                    <div class="foundation-inner h-full rounded-xl shadow-xl">
                        <div class="foundation-front bg-white text-dark rounded-xl p-8 flex flex-col items-center justify-center">
                            <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-graduation-cap text-white text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Education</h3>
                            <p class="text-center text-gray-600">Transforming lives through quality education and research</p>
                            <div class="mt-6 animate-pulse">
                                <i class="fas fa-arrow-down text-accent text-xl"></i>
                            </div>
                        </div>
                        <div class="foundation-back bg-gradient-to-br from-primary to-dark rounded-xl p-8 flex flex-col items-center justify-center">
                            <h3 class="text-2xl font-bold mb-4 text-white">Our Educational Vision</h3>
                            <p class="text-center text-green-100">Establishing premier institutions that nurture talent, promote research, and create responsible global citizens through holistic education.</p>
                            <a href="{{ url('institutions') }}" class="mt-6 px-6 py-2 bg-white text-primary rounded-full font-medium hover:bg-green-100 transition duration-300">Explore Institutions</a>
                        </div>
                    </div>
                </div>
                <!-- Health & Medicare Card -->
                <div class="foundation-card h-96">
                    <div class="foundation-inner h-full rounded-xl shadow-xl">
                        <div class="foundation-front bg-white text-dark rounded-xl p-8 flex flex-col items-center justify-center">
                            <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-heartbeat text-white text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Health & Medicare</h3>
                            <p class="text-center text-gray-600">Healing communities through comprehensive healthcare</p>
                            <div class="mt-6 animate-pulse">
                                <i class="fas fa-arrow-down text-accent text-xl"></i>
                            </div>
                        </div>
                        <div class="foundation-back bg-gradient-to-br from-primary to-dark rounded-xl p-8 flex flex-col items-center justify-center">
                            <h3 class="text-2xl font-bold mb-4 text-white">Our Healthcare Mission</h3>
                            <p class="text-center text-green-100">Providing accessible, affordable, and quality healthcare through hospitals, medical colleges, and community health programs.</p>
                            <a href="{{ url('health') }}" class="mt-6 px-6 py-2 bg-white text-primary rounded-full font-medium hover:bg-green-100 transition duration-300">View Services</a>
                        </div>
                    </div>
                </div>
                <!-- Philanthropic Card -->
                <div class="foundation-card h-96">
                    <div class="foundation-inner h-full rounded-xl shadow-xl">
                        <div class="foundation-front bg-white text-dark rounded-xl p-8 flex flex-col items-center justify-center">
                            <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-hands-helping text-white text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Philanthropic</h3>
                            <p class="text-center text-gray-600">Serving humanity with compassion and dedication</p>
                            <div class="mt-6 animate-pulse">
                                <i class="fas fa-arrow-down text-accent text-xl"></i>
                            </div>
                        </div>
                        <div class="foundation-back bg-gradient-to-br from-primary to-dark rounded-xl p-8 flex flex-col items-center justify-center">
                            <h3 class="text-2xl font-bold mb-4 text-white">Our Humanitarian Work</h3>
                            <p class="text-center text-green-100">Extending support to the underprivileged through disaster relief, scholarships, and community development initiatives.</p>
                            <a href="{{ url('philanthropic') }}" class="mt-6 px-6 py-2 bg-white text-primary rounded-full font-medium hover:bg-green-100 transition duration-300">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Foundation -->
            <!-- About Foundation with Read More -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-8 mb-12">
                <h3 class="text-2xl font-bold mb-6 text-center">About Hamdard Foundation</h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <p class="mb-4 text-green-100">To increase and spread the activities of Hamdard Bangladesh, Dr. Hakim Mohammad Yousuf Harun Bhuiyan established Hamdard Foundation Bangladesh in 1989. He decided to establish the organization with the discussion of Shaheed Hakim Mohammed Said and the Board of Trustees of Hamdard Laboratories (Waqf) Bangladesh.</p>
                        <p class="text-green-100">This Foundation has been running by the earning of Hamdard Laboratories (Waqf) Bangladesh. The Foundation, being a charitable organization, has been promoting human welfare activities through its educational and philanthropic endeavors.</p>
                    </div>
                    <div>
                        <p class="mb-4 text-green-100">Hamdard Foundation Bangladesh is a voluntary, non-profitable, non-communal, and non-political public service oriented organization. Bangladesh is the country with a large population. The country is afflicted with various problems like illiteracy, superstition, ignorance, illness, poverty, natural calamities, etc.</p>
                        <p class="text-green-100">It is not possible to create a strong socio-economic condition with this huge population within a short span of time. Hence, in December 1989, Hamdard Foundation was established with the aim of providing good health, medical care, and proper education to all sorts of people of the country.</p>
                    </div>
                </div>
                
                <!-- Additional content that will be revealed with Read More -->
                <div class="read-more-content mt-6" id="readMoreContent">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-xl font-bold mb-4 text-green-200">Our Vision</h4>
                            <p class="mb-4 text-green-100">To create a society where every individual has access to quality education, healthcare, and opportunities for holistic development, fostering a culture of compassion, innovation, and sustainable progress.</p>
                            <p class="text-green-100">We envision a Bangladesh where knowledge, health, and humanitarian values are the cornerstones of community development and national prosperity.</p>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-4 text-green-200">Our Mission</h4>
                            <p class="mb-4 text-green-100">To serve humanity through educational excellence, comprehensive healthcare, and philanthropic initiatives that address the fundamental needs of society while preserving and promoting traditional healing systems.</p>
                            <p class="text-green-100">We are committed to building institutions that nurture talent, promote research, and create responsible global citizens who contribute positively to society.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="text-xl font-bold mb-4 text-green-200 text-center">Our Core Values</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <i class="fas fa-heart text-white text-2xl"></i>
                                </div>
                                <h5 class="text-lg font-bold text-green-200 mb-2">Compassion</h5>
                                <p class="text-green-100 text-sm">We serve with empathy and understanding, putting the needs of others first.</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                                </div>
                                <h5 class="text-lg font-bold text-green-200 mb-2">Integrity</h5>
                                <p class="text-green-100 text-sm">We uphold the highest standards of honesty and ethical conduct in all our endeavors.</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <i class="fas fa-handshake text-white text-2xl"></i>
                                </div>
                                <h5 class="text-lg font-bold text-green-200 mb-2">Excellence</h5>
                                <p class="text-green-100 text-sm">We strive for the highest quality in education, healthcare, and community service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Read More Button -->
                <div class="text-center mt-8">
                    <button id="readMoreBtn" class="read-more-btn bg-secondary hover:bg-green-700 text-white font-medium py-3 px-8 rounded-full shadow-lg transition duration-300 flex items-center mx-auto">
                        <span>Read More</span>
                        <i class="fas fa-chevron-down ml-2 transition-transform duration-300"></i>
                    </button>
                </div>
            </div>
                   
                </div>
            </div>
            <!-- Goals and Objectives -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold mb-6 text-center text-dark">Our Goals and Objectives</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-green-50 rounded-lg p-6 hover:bg-green-100 transition duration-300">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-leaf text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-center mb-4 text-dark">Preserve Eastern Medicine</h4>
                        <p class="text-sm text-center text-gray-700">Develop and implement the interests of Eastern System of Medicine (Unani, Ayurvedic, and Herbal)</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-6 hover:bg-green-100 transition duration-300">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-university text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-center mb-4 text-dark">Promote Education</h4>
                        <p class="text-sm text-center text-gray-700">Establish educational institutions to promote science, education, health, and culture</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-6 hover:bg-green-100 transition duration-300">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-heart text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-center mb-4 text-dark">Healthcare Services</h4>
                        <p class="text-sm text-center text-gray-700">Provide health and medical service through free prescriptions and medicine distribution</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-6 hover:bg-green-100 transition duration-300">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-flask text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-center mb-4 text-dark">Medical Research</h4>
                        <p class="text-sm text-center text-gray-700">Conduct research on therapeutics and drugs of holistic medicine</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-6 hover:bg-green-100 transition duration-300">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-hand-holding-heart text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-center mb-4 text-dark">Disaster Relief</h4>
                        <p class="text-sm text-center text-gray-700">Help and assist distressed people during natural disasters</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-6 hover:bg-green-100 transition duration-300">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-book text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-center mb-4 text-dark">Health Awareness</h4>
                        <p class="text-sm text-center text-gray-700">Create health awareness through literature, books, and journals</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Healthcare Section -->
    <section id="healthcare" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-dark mb-8">Healthcare Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-green-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-primary mb-4">Medical Facilities</h3>
                    <p class="text-gray-700 mb-4">Hamdard Foundation Bangladesh operates several healthcare facilities providing quality medical services to communities across the country.</p>
                    <ul class="list-disc pl-5 text-gray-700 space-y-2">
                        <li>Hamdard General Hospital</li>
                        <li>Community Health Centers</li>
                        <li>Mobile Medical Units</li>
                        <li>Specialized Clinics</li>
                    </ul>
                </div>
                <div class="bg-green-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-primary mb-4">Health Initiatives</h3>
                    <p class="text-gray-700 mb-4">Our health programs focus on preventive care, health education, and accessible treatment for all.</p>
                    <ul class="list-disc pl-5 text-gray-700 space-y-2">
                        <li>Free Medical Camps</li>
                        <li>Health Awareness Campaigns</li>
                        <li>Vaccination Drives</li>
                        <li>Maternal and Child Health Programs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Philanthropic Activities Section -->
    <section id="philanthropic" class="py-16 bg-light">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-dark mb-8">Philanthropic Activities</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-hand-holding-usd text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Scholarships</h3>
                    <p class="text-center text-gray-700">Providing educational scholarships to meritorious and underprivileged students across all levels of education.</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-umbrella text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Disaster Relief</h3>
                    <p class="text-center text-gray-700">Extending support during natural calamities through emergency aid, shelter, and rehabilitation programs.</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Community Development</h3>
                    <p class="text-center text-gray-700">Implementing programs for sustainable community development, skill training, and poverty alleviation.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-dark mb-8">Contact Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-primary mb-4">Get In Touch</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-primary mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold">Head Office</h4>
                                <p class="text-gray-700">Hamdard Foundation Bangladesh<br>Hamdard Center, 96, Bir Uttam C.R. Datta Road<br>Dhaka-1205, Bangladesh</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-phone text-primary mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold">Phone</h4>
                                <p class="text-gray-700">+880 2 9670211-4</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-primary mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-700">info@hamdardfoundation.org</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-primary mb-4">Send Us a Message</h3>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-1">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit" class="bg-primary hover:bg-dark text-white font-medium py-2 px-6 rounded-md transition duration-300">Send Message</button>
                    </form>
                </div>
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
                    <img src="{{ asset('images/gallery/11.jpg') }}" 
                        class="rounded-lg shadow-md w-full h-auto" alt="Library">
                </div>
                <div class="masonry-item">
                    <img src="{{ asset('images/gallery/10.jpg') }}" 
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
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const navMenu = document.getElementById('nav-menu');
            const overlay = document.getElementById('overlay');
            
            // Toggle mobile menu
            mobileMenuToggle.addEventListener('click', function() {
                navMenu.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
            
            // Close mobile menu
            function closeMobileMenu() {
                navMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
            
            mobileMenuClose.addEventListener('click', closeMobileMenu);
            overlay.addEventListener('click', closeMobileMenu);
            
            // Dropdown functionality for desktop
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth >= 1024) {
                        e.preventDefault();
                        const dropdown = this.nextElementSibling;
                        const isOpen = dropdown.classList.contains('show');
                        
                        // Close all dropdowns
                        document.querySelectorAll('.dropdown-menu').forEach(menu => {
                            menu.classList.remove('show');
                        });
                        
                        // Toggle current dropdown
                        if (!isOpen) {
                            dropdown.classList.add('show');
                        }
                    }
                });
            });
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (window.innerWidth >= 1024) {
                    if (!e.target.closest('.nav-item')) {
                        document.querySelectorAll('.dropdown-menu').forEach(menu => {
                            menu.classList.remove('show');
                        });
                    }
                }
            });
            
            // Active navigation link based on scroll position
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            function updateActiveNavLink() {
                let current = '';
                const scrollY = window.pageYOffset;
                
                sections.forEach(section => {
                    const sectionHeight = section.offsetHeight;
                    const sectionTop = section.offsetTop - 100;
                    
                    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            }
            
            window.addEventListener('scroll', updateActiveNavLink);
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu after clicking a link
                        if (window.innerWidth < 1024) {
                            closeMobileMenu();
                        }
                    }
                });
            });
        });
        
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