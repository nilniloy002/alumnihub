<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

<body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">
    <!-- Header -->
    @include('partials.header')
<!-- Hero Section with Background Image -->
<!-- Hero Section with Background Image -->
<header class="relative bg-green-700 text-white">
   <!-- Background Image with Overlay -->
   <div class="absolute inset-0 bg-black opacity-40 z-0">
      <img src="{{ asset('images/institute/HIUAM.jpg') }}" 
         alt="HUMCH Campus" 
         class="w-full h-full object-cover object-top">
   </div>
   <!-- Content Container -->
   <div class="container mx-auto px-4 py-20 md:py-32 text-center relative z-10">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Hamdard Institute of Unani and Ayurvedic Medicine </h1>
      <p class="text-xl md:text-2xl mb-8">"Preserving traditional medicine through academic excellence"</p>
      <a href="https://web.facebook.com/hamdardiuam/" target="_blank" class="bg-white text-green-800 px-6 py-3 rounded-lg font-semibold hover:bg-green-100 transition inline-block">Explore Our Programs</a>
   </div>
   <!-- Gradient Overlay Bottom -->
   <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
</header>
<!-- Founding Vision: HIUAM Section -->
<section id="hiuam" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Hamdard Institute of Unani & Ayurvedic Medicine</h2>
        
        <!-- Establishment Story -->
        <div class="text-center mb-12 max-w-4xl mx-auto">
            <blockquote class="text-2xl italic text-green-700 mb-6">
                "Preserving traditional medicine through academic excellence"
            </blockquote>
            <p class="text-lg text-gray-700">
                Originally established in 2014 under Hamdard University Bangladesh, HIUAM now continues its mission as an institute of Dhaka University, advancing Unani and Ayurvedic medical education.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Historical Journey -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-3 rounded-full mr-4">
                        <i class="fas fa-history text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-green-700">Institutional Evolution</h3>
                </div>
                <div class="space-y-4">
                    <p class="text-gray-700">
                        Began in 2014 as the Faculty of Unani and Ayurvedic Medicine (FUAM) under Hamdard University Bangladesh, offering BUMS and BAMS programs approved by UGC.
                    </p>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h4 class="font-semibold mb-2 text-green-700">Transition to Dhaka University</h4>
                        <p class="text-gray-700">
                            Following Ministry of Health directives, HIUAM was established as an institute under Dhaka University's Medical Faculty in 2022-2023 session.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Current Programs -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-3 rounded-full mr-4">
                        <i class="fas fa-user-md text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-green-700">Academic Programs</h3>
                </div>
                <div class="space-y-4">
                    <ul class="space-y-3 pl-5">
                        <li class="flex items-start">
                            <i class="fas fa-certificate text-green-500 mt-1 mr-2"></i>
                            <span><strong>BUMS</strong> - Bachelor of Unani Medicine & Surgery</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-certificate text-green-500 mt-1 mr-2"></i>
                            <span><strong>BAMS</strong> - Bachelor of Ayurvedic Medicine & Surgery</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-certificate text-green-500 mt-1 mr-2"></i>
                            <span><strong>BHMS</strong> - Now included under Dhaka University's Medical Faculty</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- National Significance -->
        <div class="mt-12 bg-green-800 text-white p-8 rounded-lg">
            <h3 class="text-2xl font-semibold mb-6">National Medical Education Reform</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-start">
                    <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                        <i class="fas fa-balance-scale text-white"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-medium mb-2">Standardization</h4>
                        <p>All Unani/Ayurvedic programs now under public university affiliation</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                        <i class="fas fa-star text-white"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-medium mb-2">Quality Assurance</h4>
                        <p>Dhaka University's Medical Faculty oversight ensures excellence</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                        <i class="fas fa-university text-white"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-medium mb-2">Academic Integration</h4>
                        <p>Traditional medicine incorporated into national medical education</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Official Recognition -->
        <div class="mt-8 bg-white border-l-4 border-green-600 p-6 rounded-r-lg shadow-sm">
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-full mr-4">
                    <i class="fas fa-file-signature text-green-600"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-lg text-green-700">Official Transition</h4>
                    <p class="text-gray-700 mt-2">
                        Approved by the Deans Committee of Dhaka University in 2022-2023 session, HIUAM represents a landmark integration of traditional medicine into Bangladesh's premier public university system.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

   <!-- Footer -->
       @include('partials.footer')
</body>
</html>