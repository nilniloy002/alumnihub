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