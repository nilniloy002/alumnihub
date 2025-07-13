@extends('home.layouts.app')
@section('content')
<!-- Navigation -->
<nav class="bg-green-800 text-white shadow-lg">
   <div class="container mx-auto px-4 py-3 flex justify-between items-center">
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
      <div class="hidden md:flex space-x-6">
         <a href="#about" class="hover:text-green-200 transition">About</a>
         <a href="#academic-journey" class="hover:text-green-200 transition">Journey</a>
         <a href="#programs" class="hover:text-green-200 transition">Programs</a>
         <a href="#facilities" class="hover:text-green-200 transition">Facilities</a>
      </div>
      <button class="md:hidden focus:outline-none" id="menu-toggle">
      <i class="fas fa-bars text-2xl"></i>
      </button>
   </div>
   <!-- Mobile Menu -->
   <div class="md:hidden hidden px-4 pb-4" id="mobile-menu">
      <a href="#about" class="block py-2 hover:text-green-200">About</a>
      <a href="#programs" class="block py-2 hover:text-green-200">Programs</a>
      <a href="#facilities" class="block py-2 hover:text-green-200">Facilities</a>
      <a href="#contact" class="block py-2 hover:text-green-200">Contact</a>
   </div>
</nav>
<!-- Hero Section with Background Image -->
<header class="relative bg-green-700 text-white">
   <!-- Background Image with Overlay -->
   <div class="absolute inset-0 bg-black opacity-40 z-0">
      <img src="{{ asset('images/institute/HSEMCH.jpg') }}" 
         alt="HUMCH Campus" 
         class="w-full h-full object-cover object-bottom">
   </div>
   <!-- Content Container -->
   <div class="container mx-auto px-4 py-20 md:py-32 text-center relative z-10">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Hakim Said Eastern Medical College & Hospital </h1>
      <p class="text-xl md:text-2xl mb-8">"Making Unani Medicine Accessible to All"</p>
      <a href="#programs" class="bg-white text-green-800 px-6 py-3 rounded-lg font-semibold hover:bg-green-100 transition inline-block">Explore Our Programs</a>
   </div>
   <!-- Gradient Overlay Bottom -->
   <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
</header>
<!-- Founding Vision Section -->
<section id="about" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Founding Vision</h2>
      <!-- Mission Highlight -->
      <div class="text-center mb-12 max-w-4xl mx-auto">
         <blockquote class="text-2xl italic text-green-700 mb-6">
            "Making Unani Medicine Accessible to All"
         </blockquote>
         <p class="text-lg text-gray-700">
            Established in 2008 in Dhaka, Hakim Said Eastern Medical College & Hospital continues its mission to advance Unani medical education and make traditional healing accessible to every citizen of Bangladesh.
         </p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
         <!-- Founder's Commitment -->
         <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
               <div class="bg-green-100 p-3 rounded-full mr-4">
                  <i class="fas fa-heartbeat text-green-600 text-xl"></i>
               </div>
               <h3 class="text-2xl font-semibold text-green-700">A Lifetime Commitment</h3>
            </div>
            <div class="space-y-4">
               <p class="text-gray-700">
                  Dr. Hakim Md. Yousuf Harun Bhuiyan envisioned democratizing healthcare by developing the Unani medicine sector to serve all Bangladeshis regardless of their social, cultural, or religious backgrounds.
               </p>
               <div class="bg-green-50 p-4 rounded-lg">
                  <h4 class="font-semibold mb-2 text-green-700">The Inspiration</h4>
                  <p class="text-gray-700">
                     Recognizing Bangladesh's shortage of Unani institutions compared to neighboring countries, Dr. Harun committed to producing skilled Unani physicians to bridge this gap.
                  </p>
               </div>
            </div>
         </div>
         <!-- Establishment Details -->
         <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
               <div class="bg-green-100 p-3 rounded-full mr-4">
                  <i class="fas fa-history text-green-600 text-xl"></i>
               </div>
               <h3 class="text-2xl font-semibold text-green-700">Institutional Legacy</h3>
            </div>
            <div class="space-y-4">
               <p class="text-gray-700">
                  Named after Shaheed Hakim Mohammad Said, the renowned Unani scientist and researcher, this institution honors his contributions to Unani medical science development.
               </p>
               <ul class="space-y-3 pl-5">
                  <li class="flex items-start">
                     <i class="fas fa-map-marker-alt text-green-500 mt-1 mr-2"></i>
                     <span>Originally planned for Rupnagar, Mirpur</span>
                  </li>
                  <li class="flex items-start">
                     <i class="fas fa-building text-green-500 mt-1 mr-2"></i>
                     <span>Commenced operations in 2008 from Nimtoli, Dhaka</span>
                  </li>
                  <li class="flex items-start">
                     <i class="fas fa-graduation-cap text-green-500 mt-1 mr-2"></i>
                     <span>Affordable Unani medical education for Dhaka residents</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Founding Principles -->
      <div class="mt-12 bg-green-800 text-white p-8 rounded-lg">
         <h3 class="text-2xl font-semibold mb-6">Our Guiding Principles</h3>
         <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-start">
               <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                  <i class="fas fa-hand-holding-medical text-white"></i>
               </div>
               <div>
                  <h4 class="text-xl font-medium mb-2">Universal Healthcare</h4>
                  <p>Ensuring all citizens have access to quality Unani treatment</p>
               </div>
            </div>
            <div class="flex items-start">
               <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                  <i class="fas fa-user-graduate text-white"></i>
               </div>
               <div>
                  <h4 class="text-xl font-medium mb-2">Physician Development</h4>
                  <p>Producing competent Unani medical professionals</p>
               </div>
            </div>
            <div class="flex items-start">
               <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                  <i class="fas fa-book-medical text-white"></i>
               </div>
               <div>
                  <h4 class="text-xl font-medium mb-2">Traditional Knowledge</h4>
                  <p>Preserving and advancing Unani medical science</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Founder's Tribute -->
      <div class="mt-8 bg-white border-l-4 border-green-600 p-6 rounded-r-lg shadow-sm">
         <div class="flex items-start">
            <div class="bg-green-100 p-3 rounded-full mr-4">
               <i class="fas fa-quote-left text-green-600"></i>
            </div>
            <div>
               <p class="italic text-gray-700 mb-2">
                  "This institution stands as a tribute to Shaheed Hakim Mohammad Said's legacy, continuing his mission to develop Unani medical science while making it accessible to the common people of Bangladesh."
               </p>
               <p class="font-semibold text-green-700">- Dr. Hakim Md. Yousuf Harun Bhuiyan</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Academic Journey Section -->
<section id="academic-journey" class="py-16 bg-green-50">
   <div class="container mx-auto px-4 pb-1px">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Academic Journey</h2>
      <!-- Location Highlights -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
         <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="text-green-600 mb-2">
               <i class="fas fa-map-marked-alt text-2xl"></i>
            </div>
            <h4 class="font-semibold mb-2">Prime Location</h4>
            <p class="text-gray-600">99, Bir Uttam CR Datta Road, Dhaka</p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="text-green-600 mb-2">
               <i class="fas fa-location-arrow text-2xl"></i>
            </div>
            <h4 class="font-semibold mb-2">City Center</h4>
            <p class="text-gray-600">400 yards from Hotel Sonargaon</p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="text-green-600 mb-2">
               <i class="fas fa-bus text-2xl"></i>
            </div>
            <h4 class="font-semibold mb-2">Easy Access</h4>
            <p class="text-gray-600">Conveniently reachable from across Dhaka</p>
         </div>
      </div>
      <!-- Timeline -->
      <div class="mt-12 relative">
         <!-- Timeline Line -->
         <div class="hidden lg:block absolute left-1/2 h-full w-1 bg-green-200 transform -translate-x-1/2"></div>
         <!-- 2007 Government Permission -->
         <div class="relative lg:flex mb-8">
            <div class="lg:w-1/2 lg:pr-8 lg:text-right mb-4 lg:mb-0">
               <div class="inline-block bg-white p-4 rounded-lg shadow-md">
                  <h4 class="font-bold text-green-700">15 August 2007</h4>
                  <p>Received government permission under Societies Registration Act 1860</p>
               </div>
            </div>
            <div class="lg:w-1/2 lg:pl-8">
               <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                  <i class="fas fa-file-signature"></i>
               </div>
            </div>
         </div>
         <!-- 2008-2009 Session Start -->
         <div class="relative lg:flex mb-8">
            <div class="lg:w-1/2 lg:pr-8"></div>
            <div class="lg:w-1/2 lg:pl-8">
               <div class="bg-white p-4 rounded-lg shadow-md">
                  <h4 class="font-bold text-green-700">2008-2009 Session</h4>
                  <p>Commenced academic activities with 50 students under Board of Unani and Ayurvedic Systems</p>
               </div>
            </div>
            <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
               <i class="fas fa-user-graduate"></i>
            </div>
         </div>
         <!-- Current Campus -->
         <div class="relative lg:flex">
            <div class="lg:w-1/2 lg:pr-8 lg:text-right mb-4 lg:mb-0">
               <div class="inline-block bg-white p-4 rounded-lg shadow-md">
                  <h4 class="font-bold text-green-700">Present Campus</h4>
                  <p>Strategically located in Dhaka's city center for student convenience</p>
               </div>
            </div>
            <div class="lg:w-1/2 lg:pl-8">
               <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                  <i class="fas fa-university"></i>
               </div>
            </div>
         </div>
      </div>
      <!-- Recognition Box -->
      <div class="mt-12 bg-white p-6 rounded-lg shadow-lg border-l-4 border-green-600">
         <h3 class="text-2xl font-semibold mb-4 text-green-700">Official Recognition</h3>
         <div class="space-y-4">
            <div class="flex items-start">
               <div class="bg-green-100 p-1 rounded-full mr-3 mt-1">
                  <i class="fas fa-gavel text-green-700"></i>
               </div>
               <div>
                  <p class="text-gray-700">Authorized under Unani and Ayurvedic Practitioners Ordinance 1983</p>
               </div>
            </div>
            <div class="flex items-start">
               <div class="bg-green-100 p-1 rounded-full mr-3 mt-1">
                  <i class="fas fa-certificate text-green-700"></i>
               </div>
               <div>
                  <p class="text-gray-700">Recognized by Board of Unani and Ayurvedic Systems of Medicine</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Programs & Curriculum Section -->
<section id="programs" class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Programs & Curriculum</h2>
      <!-- Program Highlight -->
      <div class="text-center mb-12 max-w-3xl mx-auto">
         <p class="text-lg text-gray-700">
            Hakim Said Eastern Medical College and Hospital specializes in the Diploma in Unani Medicine & Surgery (DUMS) program, following the approved curriculum of the Board of Unani and Ayurvedic Systems of Medicine.
         </p>
      </div>
      <!-- DUMS Program Card -->
      <div class="max-w-2xl mx-auto border border-green-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
         <div class="bg-green-700 text-white px-6 py-4">
            <h3 class="text-2xl font-bold">Diploma in Unani Medicine & Surgery (DUMS)</h3>
         </div>
         <div class="p-6">
            <!-- Duration -->
            <div class="flex items-start mb-4">
               <div class="bg-green-100 p-2 rounded-full mr-4">
                  <i class="fas fa-calendar-alt text-green-700"></i>
               </div>
               <div>
                  <h4 class="font-semibold">Program Duration</h4>
                  <p>4.5 years total (4 academic years + 6 months internship)</p>
               </div>
            </div>
            <!-- Curriculum Structure -->
            <div class="flex items-start mb-4">
               <div class="bg-green-100 p-2 rounded-full mr-4">
                  <i class="fas fa-book-open text-green-700"></i>
               </div>
               <div>
                  <h4 class="font-semibold">Curriculum Structure</h4>
                  <p>18 comprehensive courses across 8 specialized departments</p>
               </div>
            </div>
            <!-- Eligibility -->
            <div class="flex items-start mb-4">
               <div class="bg-green-100 p-2 rounded-full mr-4">
                  <i class="fas fa-user-graduate text-green-700"></i>
               </div>
               <div>
                  <h4 class="font-semibold">Eligibility Requirements</h4>
                  <ul class="list-disc pl-5 mt-2 space-y-1">
                     <li>SSC in Science (minimum qualification)</li>
                     <li>HSC in Science students receive priority</li>
                  </ul>
               </div>
            </div>
            <!-- Session Info -->
            <div class="flex items-start mb-4">
               <div class="bg-green-100 p-2 rounded-full mr-4">
                  <i class="fas fa-calendar-day text-green-700"></i>
               </div>
               <div>
                  <h4 class="font-semibold">Academic Session</h4>
                  <p>Begins each July as per Bangladesh Board of Unani and Ayurvedic Medicine schedule</p>
               </div>
            </div>
            <!-- Language -->
            <div class="flex items-start">
               <div class="bg-green-100 p-2 rounded-full mr-4">
                  <i class="fas fa-language text-green-700"></i>
               </div>
               <div>
                  <h4 class="font-semibold">Medium of Instruction</h4>
                  <p>Bilingual (Bengali and English)</p>
               </div>
            </div>
            <!-- Accreditation -->
            <div class="mt-6 pt-4 border-t border-green-100">
               <div class="flex items-center">
                  <i class="fas fa-certificate text-green-600 mr-2"></i>
                  <span class="text-sm text-gray-600">
                  Fully accredited by the Board of Unani and Ayurvedic Systems of Medicine
                  </span>
               </div>
            </div>
         </div>
      </div>
      <!-- Department Highlights -->
      <div class="mt-12 bg-green-50 rounded-lg p-6 shadow-sm">
         <h3 class="text-2xl font-semibold text-center mb-6 text-green-800">DUMS Program Departments</h3>
         <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white p-3 rounded-lg text-center">
               <i class="fas fa-herbal text-green-600 text-2xl mb-2"></i>
               <h4 class="font-medium">Unani Pharmacy</h4>
            </div>
            <div class="bg-white p-3 rounded-lg text-center">
               <i class="fas fa-stethoscope text-green-600 text-2xl mb-2"></i>
               <h4 class="font-medium">Tahaffuzi wa Samaji Tib</h4>
            </div>
            <div class="bg-white p-3 rounded-lg text-center">
               <i class="fas fa-mortar-pestle text-green-600 text-2xl mb-2"></i>
               <h4 class="font-medium">Ilmul Advia</h4>
            </div>
            <div class="bg-white p-3 rounded-lg text-center">
               <i class="fas fa-procedures text-green-600 text-2xl mb-2"></i>
               <h4 class="font-medium">Moalajat</h4>
            </div>
         </div>
      </div>
      <!-- Program Features -->
      <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
         <div class="bg-white p-5 rounded-lg border border-green-200">
            <h4 class="font-semibold text-lg mb-3 text-green-700 flex items-center">
               <i class="fas fa-clipboard-check text-green-600 mr-2"></i>
               Curriculum Highlights
            </h4>
            <ul class="space-y-2 pl-5">
               <li class="flex items-start">
                  <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                  <span>Balanced theoretical and practical training</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                  <span>Traditional Unani principles with modern applications</span>
               </li>
            </ul>
         </div>
         <div class="bg-white p-5 rounded-lg border border-green-200">
            <h4 class="font-semibold text-lg mb-3 text-green-700 flex items-center">
               <i class="fas fa-briefcase-medical text-green-600 mr-2"></i>
               Internship Program
            </h4>
            <ul class="space-y-2 pl-5">
               <li class="flex items-start">
                  <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                  <span>6 months hands-on clinical training</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                  <span>Hospital-based practical experience</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- Academic Facilities Section -->
<section id="facilities" class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Academic Facilities</h2>
      <!-- Campus Overview -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12 items-center">
         <div>
            <h3 class="text-2xl font-semibold mb-4 text-green-700">Our Five-Story Campus</h3>
            <p class="text-gray-700 mb-6">
               Our academic building spans approximately 16,500 square feet across five floors, housing comprehensive facilities for quality Unani medical education.
            </p>
            <div class="grid grid-cols-2 gap-4">
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-chalkboard"></i>
                  </div>
                  <h4 class="font-semibold">Classrooms</h4>
                  <p class="text-gray-700">12 well-designed learning spaces</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-flask"></i>
                  </div>
                  <h4 class="font-semibold">Laboratories</h4>
                  <p class="text-gray-700">8 fully-equipped research labs</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-book-open"></i>
                  </div>
                  <h4 class="font-semibold">Library</h4>
                  <p class="text-gray-700">Extensive collection of Unani resources</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-users"></i>
                  </div>
                  <h4 class="font-semibold">Common Rooms</h4>
                  <p class="text-gray-700">Separate spaces for boys & girls</p>
               </div>
            </div>
         </div>
         <div class="h-64 lg:h-full rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('images/institute/HSEMCHg.jpg') }}" 
               alt="HSEMCH Academic Building" 
               class="w-full h-full object-cover">
         </div>
      </div>
      <!-- Leadership Highlight -->
      <div class="bg-green-100 rounded-lg p-6 mb-12">
         <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/4 mb-4 md:mb-0 flex justify-center">
               <div class="bg-green-700 text-white p-4 rounded-full">
                  <i class="fas fa-user-tie text-4xl"></i>
               </div>
            </div>
            <div class="md:w-3/4">
               <h3 class="text-2xl font-semibold mb-2 text-green-800">Dynamic Leadership</h3>
               <p class="text-gray-700">
                  Our college is guided by a team of dedicated teachers and administrators under the leadership of our smart, dynamic Principal, fostering an environment of academic excellence in Unani medicine.
               </p>
            </div>
         </div>
      </div>
      <!-- Campus Life -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
         <!-- National Celebrations -->
         <div class="bg-green-800 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">National Pride Celebrations</h3>
            <p class="mb-4">We honor Bangladesh's heritage through:</p>
            <div class="grid grid-cols-2 gap-4">
               <div class="flex items-center">
                  <i class="fas fa-flag mr-3 text-green-300"></i>
                  <span>Independence Day</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-medal mr-3 text-green-300"></i>
                  <span>Victory Day</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-language mr-3 text-green-300"></i>
                  <span>Mother Language Day</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-landmark mr-3 text-green-300"></i>
                  <span>National Memorial Day</span>
               </div>
            </div>
         </div>
         <!-- Academic Activities -->
         <div class="border border-green-200 p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4 text-green-700">Academic Enrichment</h3>
            <div class="space-y-4">
               <div class="flex items-start">
                  <div class="bg-green-100 p-1 rounded-full mr-3 mt-1">
                     <i class="fas fa-bus text-green-700"></i>
                  </div>
                  <div>
                     <h4 class="font-medium">Annual Study Tours</h4>
                     <p class="text-sm text-gray-600">Educational excursions to enhance practical learning</p>
                  </div>
               </div>
               <div class="flex items-start">
                  <div class="bg-green-100 p-1 rounded-full mr-3 mt-1">
                     <i class="fas fa-microscope text-green-700"></i>
                  </div>
                  <div>
                     <h4 class="font-medium">Research Opportunities</h4>
                     <p class="text-sm text-gray-600">Hands-on experience in our 8 laboratories</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Administrative Facilities -->
      <div class="mt-12 bg-white border border-green-200 rounded-lg p-6">
         <h3 class="text-2xl font-semibold mb-4 text-green-700">Administrative Infrastructure</h3>
         <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <div class="flex flex-col items-center text-center">
               <div class="bg-green-100 p-3 rounded-full mb-2">
                  <i class="fas fa-desktop text-green-600"></i>
               </div>
               <span>Administrative Offices</span>
            </div>
            <div class="flex flex-col items-center text-center">
               <div class="bg-green-100 p-3 rounded-full mb-2">
                  <i class="fas fa-archive text-green-600"></i>
               </div>
               <span>Records Department</span>
            </div>
            <div class="flex flex-col items-center text-center">
               <div class="bg-green-100 p-3 rounded-full mb-2">
                  <i class="fas fa-user-shield text-green-600"></i>
               </div>
               <span>Principal's Office</span>
            </div>
            <div class="flex flex-col items-center text-center">
               <div class="bg-green-100 p-3 rounded-full mb-2">
                  <i class="fas fa-handshake text-green-600"></i>
               </div>
               <span>Conference Room</span>
            </div>
            <div class="flex flex-col items-center text-center">
               <div class="bg-green-100 p-3 rounded-full mb-2">
                  <i class="fas fa-print text-green-600"></i>
               </div>
               <span>Support Services</span>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection