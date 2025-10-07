<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

<body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">
    <!-- Header -->
    @include('partials.header')
<!-- Hero Section with Background Image -->
<header class="relative bg-green-700 text-white">
   <!-- Background Image with Overlay -->
   <div class="absolute inset-0 bg-black opacity-40 z-0">
      <img src="{{ asset('images/institute/HUB.jpg') }}" 
         alt="HUB Campus" 
         class="w-full h-full object-cover object-center">
   </div>
   <!-- Content Container -->
   <div class="container mx-auto px-4 py-20 md:py-32 text-center relative z-10">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">Hamdard University Bangladesh</h1>
      <p class="text-xl md:text-2xl mb-8">"Quality education at minimum cost to build a nation of simple and classic minds"</p>
      <a href="https://www.hamdarduniversity.edu.bd/" target="_blank"class="bg-white text-green-800 px-6 py-3 rounded-lg font-semibold hover:bg-green-100 transition inline-block">Explore Our Website</a>
   </div>
   <!-- Gradient Overlay Bottom -->
   <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
</header>
<!-- Founding Vision Section -->
<section id="about" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">From Dream to Reality</h2>
      <!-- Vision Statement -->
      <div class="text-center mb-12 max-w-4xl mx-auto">
         <blockquote class="text-2xl italic text-green-700 mb-6">
            "Quality education at minimum cost to build a nation of simple and classic minds"
         </blockquote>
         <p class="text-lg text-gray-700">
            Hamdard University Bangladesh embodies the lifelong dream of Dr. Hakim Md. Yousuf Harun Bhuiyan to create an institution that makes excellence in education accessible to all.
         </p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
         <!-- Founder's Philosophy -->
         <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
               <div class="bg-green-100 p-3 rounded-full mr-4">
                  <i class="fas fa-lightbulb text-green-600 text-xl"></i>
               </div>
               <h3 class="text-2xl font-semibold text-green-700">The Founder's Vision</h3>
            </div>
            <div class="space-y-4">
               <p class="text-gray-700">
                  For decades, Dr. Harun nurtured the dream of establishing a university that would combine academic excellence with affordability, creating enlightened citizens who value simplicity and classical wisdom.
               </p>
               <div class="bg-green-50 p-4 rounded-lg">
                  <h4 class="font-semibold mb-2 text-green-700">A Collective Dream</h4>
                  <p class="text-gray-700">
                     The vision became a collective mission, with Hamdard employees working tirelessly alongside Dr. Harun to transform this educational dream into reality.
                  </p>
               </div>
            </div>
         </div>
         <!-- Establishment Journey -->
         <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
               <div class="bg-green-100 p-3 rounded-full mr-4">
                  <i class="fas fa-road text-green-600 text-xl"></i>
               </div>
               <h3 class="text-2xl font-semibold text-green-700">The Path to Reality</h3>
            </div>
            <div class="space-y-4">
               <ul class="space-y-3 pl-5">
                  <li class="flex items-start">
                     <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                     <span>Approved by UGC and Government on 14 March 2012</span>
                  </li>
                  <li class="flex items-start">
                     <i class="fas fa-university text-green-500 mt-1 mr-2"></i>
                     <span>Launched first semester on 29 November 2012 in Newtown, Narayanganj</span>
                  </li>
                  <li class="flex items-start">
                     <i class="fas fa-building text-green-500 mt-1 mr-2"></i>
                     <span>Moved to permanent 50,000 sq ft campus in Gazaria, Munshiganj in 2015</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Support Network -->
      <div class="mt-12 bg-green-800 text-white p-8 rounded-lg">
         <h3 class="text-2xl font-semibold mb-6">Nationwide Support System</h3>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
               <h4 class="text-xl font-medium mb-3">Government Partners</h4>
               <ul class="space-y-2">
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     University Grants Commission (UGC)
                  </li>
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Ministry of Education
                  </li>
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Ministry of Religious Affairs
                  </li>
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Prime Minister's Secretariat
                  </li>
               </ul>
            </div>
            <div>
               <h4 class="text-xl font-medium mb-3">Hamdard Family</h4>
               <ul class="space-y-2">
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Board of Trustees
                  </li>
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Executive Committee
                  </li>
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Directors & Employees
                  </li>
                  <li class="flex items-center">
                     <i class="fas fa-angle-right text-green-300 mr-2"></i>
                     Waqf Administration
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Campus Evolution -->
      <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
         <div class="bg-white border border-green-200 p-6 rounded-lg">
            <h4 class="font-semibold text-lg mb-3 text-green-700 flex items-center">
               <i class="fas fa-map-marked-alt text-green-600 mr-2"></i>
               Initial Campus (2012-2015)
            </h4>
            <p class="text-gray-700">
               Located in Newtown, Sonargaon beside Meghna Bridge, our temporary campus welcomed the first batches of students, laying the foundation for Hamdard's educational legacy.
            </p>
         </div>
         <div class="bg-white border border-green-200 p-6 rounded-lg">
            <h4 class="font-semibold text-lg mb-3 text-green-700 flex items-center">
               <i class="fas fa-home text-green-600 mr-2"></i>
               Permanent Campus (2015-Present)
            </h4>
            <p class="text-gray-700">
               Our 50,000 square foot metal-structured campus in Gazaria, Munshiganj was established to accommodate growing numbers of students while maintaining our educational standards.
            </p>
         </div>
      </div>
      <!-- Founder's Reflection -->
      <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-lg">
         <div class="flex">
            <div class="flex-shrink-0 mr-4">
               <i class="fas fa-quote-right text-yellow-500 text-2xl"></i>
            </div>
            <div>
               <p class="text-gray-700 italic">
                  "What began as a dream in my heart has become a thriving reality through the collective effort of countless believers in quality education. Hamdard University stands as proof that visionary ideals can take institutional form when nurtured with dedication."
               </p>
               <p class="font-semibold text-yellow-700 mt-2">
                  - Dr. Hakim Md. Yousuf Harun Bhuiyan
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- The Permanent Campus Section -->
<section id="campus" class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Permanent Campus</h2>
      <!-- Campus Overview -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12 items-center">
         <div>
            <h3 class="text-2xl font-semibold mb-4 text-green-700">A Thriving Academic Hub</h3>
            <p class="text-gray-700 mb-6">
               Since December 2015, our permanent campus has grown into a vibrant educational ecosystem, currently serving over 1,500 students across 10 departments under 5 faculties.
            </p>
            <div class="grid grid-cols-2 gap-4">
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-graduation-cap"></i>
                  </div>
                  <h4 class="font-semibold">Academic Structure</h4>
                  <p class="text-gray-700">5 faculties with 10 departments</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-users"></i>
                  </div>
                  <h4 class="font-semibold">Student Body</h4>
                  <p class="text-gray-700">1,500+ continuing students</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-calendar-alt"></i>
                  </div>
                  <h4 class="font-semibold">Admission Cycle</h4>
                  <p class="text-gray-700">Bi-semester system (twice yearly)</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-university"></i>
                  </div>
                  <h4 class="font-semibold">Campus Size</h4>
                  <p class="text-gray-700">Largest among private universities</p>
               </div>
            </div>
         </div>
         <div class="h-64 lg:h-full rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('images/institute/HUBg.jpg') }}" 
               alt="Hamdard University Permanent Campus" 
               class="w-full h-full object-cover">
         </div>
      </div>
      <!-- Campus Facilities -->
      <div class="mb-12">
         <h3 class="text-2xl font-semibold mb-6 text-center text-green-700">Campus Facilities</h3>
         <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Main Academic Building -->
            <div class="border border-green-200 rounded-lg p-6">
               <div class="text-green-600 mb-3 text-3xl">
                  <i class="fas fa-building"></i>
               </div>
               <h4 class="font-semibold text-lg mb-2">Main Academic Complex</h4>
               <p class="text-gray-700">
                  Two-storied building with eastern and western wings housing 4 faculties: Arts & Social Sciences, Business Administration, Science/Engineering/Technology, and Health Sciences.
               </p>
            </div>
            <!-- FUAM Building -->
            <div class="border border-green-200 rounded-lg p-6">
               <div class="text-green-600 mb-3 text-3xl">
                  <i class="fas fa-hospital-alt"></i>
               </div>
               <h4 class="font-semibold text-lg mb-2">Unani & Ayurvedic Facilities</h4>
               <p class="text-gray-700">
                  3-storied prefabricated structure (40,000 sq ft) with:
               <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-700">
                  <li>60-bed combined hospital (ground floor)</li>
                  <li>Academic zone and Scholar House (1st floor)</li>
                  <li>Girls' Hostel (2nd floor)</li>
               </ul>
               </p>
            </div>
            <!-- Support Facilities -->
            <div class="border border-green-200 rounded-lg p-6">
               <div class="text-green-600 mb-3 text-3xl">
                  <i class="fas fa-utensils"></i>
               </div>
               <h4 class="font-semibold text-lg mb-2">Student Amenities</h4>
               <p class="text-gray-700">
               <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-700">
                  <li>4,000 sq ft cafeteria</li>
                  <li>Ongoing expansion per master plan</li>
                  <li>Future world-class research facilities</li>
               </ul>
               </p>
            </div>
         </div>
      </div>
      <!-- FUAM Transition -->
      <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mb-12">
         <h3 class="text-2xl font-semibold mb-3 text-blue-800">New Status: Hamdard Institute of Unani and Ayurvedic Medicine</h3>
         <p class="text-gray-700 mb-3">
            Following Ministry of Health directives, our Faculty of Unani and Ayurvedic Medicine (FUAM) has been reformed as an institute under Dhaka University, now operating as:
         </p>
         <div class="flex items-center bg-white p-3 rounded-lg">
            <div class="bg-blue-100 p-2 rounded-full mr-3">
               <i class="fas fa-star text-blue-600"></i>
            </div>
            <div>
               <h4 class="font-medium">Hamdard Institute of Unani and Ayurvedic Medicine</h4>
               <p class="text-sm text-gray-600">An institute of Dhaka University</p>
            </div>
         </div>
      </div>
      <!-- Future Vision -->
      <div class="bg-green-800 text-white p-8 rounded-lg">
         <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/4 mb-6 md:mb-0 flex justify-center">
               <div class="bg-white text-green-700 p-4 rounded-full">
                  <i class="fas fa-binoculars text-3xl"></i>
               </div>
            </div>
            <div class="md:w-3/4">
               <h3 class="text-2xl font-semibold mb-3">Future Development Plans</h3>
               <p class="mb-4">
                  Hamdard University is embarking on phase-wise construction to realize its master plan, creating a world-class institution with advanced research facilities that truly embodies our motto:
               </p>
               <div class="text-xl font-medium italic">"In Pursuit of Knowledge"</div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Vision Mission and Objectives Section -->
<section id="vision-mission" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Guiding Principles</h2>
      <!-- Vision Card -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12 border-l-4 border-green-600">
         <div class="bg-green-700 text-white px-6 py-4 flex items-center">
            <div class="bg-white text-green-700 p-3 rounded-full mr-4">
               <i class="fas fa-eye text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold">Vision</h3>
         </div>
         <div class="p-6">
            <p class="text-lg text-gray-700">
               Hamdard University Bangladesh envisions fostering national development by establishing an excellent higher education institution responsive to society's needs, actively contributing to knowledge, and developing capable leaders to face the challenges of the Twenty-first Century.
            </p>
         </div>
      </div>
      <!-- Mission Card -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12 border-l-4 border-blue-600">
         <div class="bg-blue-700 text-white px-6 py-4 flex items-center">
            <div class="bg-white text-blue-700 p-3 rounded-full mr-4">
               <i class="fas fa-bullseye text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold">Mission</h3>
         </div>
         <div class="p-6">
            <ol class="space-y-4 list-decimal list-inside">
               <li class="text-gray-700">
                  <span class="font-medium">Develop enlightened professionals:</span> Equip students with knowledge and skills to become sound professionals and entrepreneurs contributing to human welfare at local and global levels.
               </li>
               <li class="text-gray-700">
                  <span class="font-medium">Advance knowledge:</span> Promote teaching, research, and innovation in modern science and natural medicine for national and global benefit.
               </li>
               <li class="text-gray-700">
                  <span class="font-medium">Cultural integration:</span> Blend Bangladesh's cultural values with other cultures to foster world peace and harmony.
               </li>
            </ol>
         </div>
      </div>
      <!-- Objectives Card -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden border-l-4 border-purple-600">
         <div class="bg-purple-700 text-white px-6 py-4 flex items-center">
            <div class="bg-white text-purple-700 p-3 rounded-full mr-4">
               <i class="fas fa-flag-checkered text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold">Objectives</h3>
         </div>
         <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
               <!-- Column 1 -->
               <div class="space-y-4">
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Provide quality education creating moral, enlightened graduates prepared for employment or entrepreneurship.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Create opportunities for poor meritorious students from rural areas.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Employ and retain capable, competent faculty devoted to teaching and research.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Use traditional and modern instructional techniques to enhance student achievement.</p>
                     </div>
                  </div>
               </div>
               <!-- Column 2 -->
               <div class="space-y-4">
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Encourage faculty and students to create new knowledge through rigorous research.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Acquire accreditation from internationally recognized bodies.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Contribute to the socio-economic development of Bangladesh.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-purple-100 p-1 rounded-full mr-3 mt-1">
                        <i class="fas fa-check text-purple-700 text-sm"></i>
                     </div>
                     <div>
                        <p class="text-gray-700">Assure quality in all academic and administrative affairs.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Call to Action -->
      <div class="mt-12 text-center">
         <a href="#contact" class="inline-block bg-green-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-800 transition">
         Join Us in This Mission
         </a>
      </div>
   </div>
</section>
<!-- Academic Journey: Scope of the University Section -->
<section id="university-scope" class="py-16 bg-green-50">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Academic Scope & Offerings</h2>
      <!-- University Status -->
      <div class="bg-white p-6 rounded-lg shadow-md mb-12 border-l-4 border-blue-500">
         <div class="flex items-center mb-4">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
               <i class="fas fa-university text-blue-600 text-xl"></i>
            </div>
            <h3 class="text-2xl font-semibold text-blue-700">Institutional Framework</h3>
         </div>
         <div class="space-y-3 pl-16">
            <p class="text-gray-700">
               <i class="fas fa-check-circle text-blue-500 mr-2"></i>
               Non-political, non-profit private university under Private University Act 2010
            </p>
            <p class="text-gray-700">
               <i class="fas fa-check-circle text-blue-500 mr-2"></i>
               Authority to confer degrees, diplomas, and certificates across multiple disciplines
            </p>
            <p class="text-gray-700">
               <i class="fas fa-check-circle text-blue-500 mr-2"></i>
               Committed to expanding research facilities for all academic members
            </p>
         </div>
      </div>
      <!-- Current Programs -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
         <!-- Undergraduate Programs -->
         <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-600">
            <h3 class="text-2xl font-semibold mb-4 text-green-700 flex items-center">
               <i class="fas fa-user-graduate text-green-600 mr-3"></i>
               Undergraduate Programs
            </h3>
            <ul class="space-y-3 pl-5">
               <li class="flex items-start">
                  <i class="fas fa-book text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Arts (Honors) in English</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-book text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Arts (Honors) in Islamic Studies</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-chart-line text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Social Science (Honors) in Economics</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-briefcase text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Business Administration</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-square-root-alt text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Science (Honors) in Mathematics</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-laptop-code text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Science in Computer Science and Engineering</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-bolt text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Science in Electrical and Electronic Engineering</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-prescription-bottle-alt text-green-500 mt-1 mr-2"></i>
                  <span>Bachelor of Pharmacy (B.Pharm)</span>
               </li>
            </ul>
         </div>
         <!-- Graduate Programs -->
         <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-purple-600">
            <h3 class="text-2xl font-semibold mb-4 text-purple-700 flex items-center">
               <i class="fas fa-user-tie text-purple-600 mr-3"></i>
               Graduate Programs
            </h3>
            <ul class="space-y-3 pl-5">
               <li class="flex items-start">
                  <i class="fas fa-language text-purple-500 mt-1 mr-2"></i>
                  <span>Master of Arts in English Language Teaching (MA in ELT)</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-business-time text-purple-500 mt-1 mr-2"></i>
                  <span>Master of Business Administration (MBA)</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-briefcase text-purple-500 mt-1 mr-2"></i>
                  <span>Executive Master of Business Administration (EMBA)</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-square-root-alt text-purple-500 mt-1 mr-2"></i>
                  <span>Master of Science in Mathematics (MSc in Math)</span>
               </li>
               <li class="flex items-start">
                  <i class="fas fa-hospital-user text-purple-500 mt-1 mr-2"></i>
                  <span>Master in Public Health (MPH)</span>
               </li>
            </ul>
         </div>
      </div>
      <!-- Future Expansion -->
      <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-r-lg mb-12">
         <h3 class="text-2xl font-semibold mb-4 text-yellow-800">Future Academic Expansion</h3>
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex items-start bg-white p-3 rounded-lg">
               <i class="fas fa-prescription-bottle text-yellow-600 mt-1 mr-2"></i>
               <span>MSc in Pharmacy</span>
            </div>
            <div class="flex items-start bg-white p-3 rounded-lg">
               <i class="fas fa-hard-hat text-yellow-600 mt-1 mr-2"></i>
               <span>BSc in Civil Engineering</span>
            </div>
            <div class="flex items-start bg-white p-3 rounded-lg">
               <i class="fas fa-hands-helping text-yellow-600 mt-1 mr-2"></i>
               <span>BSS in Sociology and Social Work</span>
            </div>
            <div class="flex items-start bg-white p-3 rounded-lg">
               <i class="fas fa-graduation-cap text-yellow-600 mt-1 mr-2"></i>
               <span>BA/MA in Education</span>
            </div>
            <div class="flex items-start bg-white p-3 rounded-lg">
               <i class="fas fa-chart-pie text-yellow-600 mt-1 mr-2"></i>
               <span>MSS in Economics and Development Studies</span>
            </div>
            <div class="flex items-start bg-white p-3 rounded-lg">
               <i class="fas fa-gavel text-yellow-600 mt-1 mr-2"></i>
               <span>LLB and LLM programs</span>
            </div>
         </div>
      </div>
      <!-- Research & Advanced Studies -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
         <h3 class="text-2xl font-semibold mb-4 text-green-800">Advanced Academic Vision</h3>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="border border-green-200 p-5 rounded-lg">
               <h4 class="font-semibold text-lg mb-3 text-green-700 flex items-center">
                  <i class="fas fa-microscope text-green-600 mr-2"></i>
                  Research Expansion
               </h4>
               <p class="text-gray-700">
                  Committed to extending research facilities across all disciplines for students, fellows, and faculty members, fostering an environment of innovation and discovery.
               </p>
            </div>
            <div class="border border-blue-200 p-5 rounded-lg">
               <h4 class="font-semibold text-lg mb-3 text-blue-700 flex items-center">
                  <i class="fas fa-atom text-blue-600 mr-2"></i>
                  Postgraduate Development
               </h4>
               <p class="text-gray-700">
                  Planning to introduce advanced degrees including MPhil, PhD, EdD, DBA, DPharm, and Post-Doc programs to create a complete academic ecosystem.
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