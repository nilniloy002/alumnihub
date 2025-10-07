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
      <img src="{{ asset('images/institute/HPC.jpg') }}" 
         alt="HUMCH Campus" 
         class="w-full h-full object-cover object-bottom">
   </div>
   <!-- Content Container -->
   <div class="container mx-auto px-4 py-20 md:py-32 text-center relative z-10">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Hamdard Public College </h1>
      <p class="text-xl md:text-2xl mb-8">"The ground where man stumbles, there he remains stable"</p>
      <a href="https://hamdardpubliccollege.edu.bd/" target="_blank" class="bg-white text-green-800 px-6 py-3 rounded-lg font-semibold hover:bg-green-100 transition inline-block">Explore Our Programs</a>
   </div>
   <!-- Gradient Overlay Bottom -->
   <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
</header>
<!-- Founding Vision Section -->
<section id="about" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Magical Beginning</h2>
      <!-- Origin Story -->
      <div class="text-center mb-12 max-w-4xl mx-auto">
         <blockquote class="text-2xl italic text-green-700 mb-6">
            "The ground where man stumbles, there he remains stable"
         </blockquote>
         <p class="text-lg text-gray-700">
            Hamdard Public College was born from a moment of inspiration when our Founder slipped on mossy ground in May 2010 - transforming that stumble into an educational institution that opened its doors on June 13, 2010.
         </p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
         <!-- The Magical Birth -->
         <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
               <div class="bg-green-100 p-3 rounded-full mr-4">
                  <i class="fas fa-seedling text-green-600 text-xl"></i>
               </div>
               <h3 class="text-2xl font-semibold text-green-700">A Serendipitous Beginning</h3>
            </div>
            <div class="space-y-4">
               <p class="text-gray-700">
                  What began as a routine building inspection for Hamdard University Bangladesh became destiny when Dr. Harun slipped on the mossy yard. His immediate declaration to establish an institution on that very spot marked HPC's magical origin.
               </p>
               <div class="bg-green-50 p-4 rounded-lg">
                  <h4 class="font-semibold mb-2 text-green-700">From Obstacle to Opportunity</h4>
                  <p class="text-gray-700">
                     When UGC restrictions prevented a university in Dhaka, Dr. Harun pivoted to create Hamdard Public College - proving that true visionaries transform setbacks into successes.
                  </p>
               </div>
            </div>
         </div>
         <!-- Founder's Vision -->
         <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
               <div class="bg-green-100 p-3 rounded-full mr-4">
                  <i class="fas fa-lightbulb text-green-600 text-xl"></i>
               </div>
               <h3 class="text-2xl font-semibold text-green-700">The Founder's Mission</h3>
            </div>
            <div class="space-y-4">
               <p class="text-gray-700">
                  Dr. Harun recognized Bangladesh's paradox - thousands of graduates yet a scarcity of skilled, ethical professionals. HPC was conceived to develop capable citizens beyond just academic credentials.
               </p>
               <ul class="space-y-3 pl-5">
                  <li class="flex items-start">
                     <i class="fas fa-hand-holding-heart text-green-500 mt-1 mr-2"></i>
                     <span>Breaking the private tuition cycle for needy families</span>
                  </li>
                  <li class="flex items-start">
                     <i class="fas fa-search-dollar text-green-500 mt-1 mr-2"></i>
                     <span>Actively recruiting bright but underprivileged students</span>
                  </li>
                  <li class="flex items-start">
                     <i class="fas fa-award text-green-500 mt-1 mr-2"></i>
                     <span>Merit-based scholarships to nurture potential</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Core Values -->
      <div class="mt-12 bg-green-800 text-white p-8 rounded-lg">
         <h3 class="text-2xl font-semibold mb-6">Our Educational Philosophy</h3>
         <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-start">
               <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                  <i class="fas fa-heart text-white"></i>
               </div>
               <div>
                  <h4 class="text-xl font-medium mb-2">Human Values</h4>
                  <p>Teaching humanity, equality and social justice as core principles</p>
               </div>
            </div>
            <div class="flex items-start">
               <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                  <i class="fas fa-flag text-white"></i>
               </div>
               <div>
                  <h4 class="text-xl font-medium mb-2">Liberation Spirit</h4>
                  <p>Fostering conscience of our Liberation War heritage</p>
               </div>
            </div>
            <div class="flex items-start">
               <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                  <i class="fas fa-graduation-cap text-white"></i>
               </div>
               <div>
                  <h4 class="text-xl font-medium mb-2">Holistic Education</h4>
                  <p>Developing character beyond academic certificates</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Founder's Quote -->
      <div class="mt-8 bg-white border-l-4 border-green-600 p-6 rounded-r-lg shadow-sm">
         <div class="flex items-start">
            <div class="bg-green-100 p-3 rounded-full mr-4">
               <i class="fas fa-quote-left text-green-600"></i>
            </div>
            <div>
               <p class="italic text-gray-700 mb-2">
                  "Education should liberate young minds from poverty of thought and circumstance. At HPC, we don't just create graduates - we nurture citizens who will uphold our nation's values."
               </p>
               <p class="font-semibold text-green-700">- Dr. Hakim Md. Yousuf Harun Bhuiyan</p>
            </div>
         </div>
      </div>
      <!-- Growth Milestone -->
      <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-lg">
         <div class="flex items-center">
            <div class="bg-yellow-100 p-3 rounded-full mr-4">
               <i class="fas fa-rocket text-yellow-600"></i>
            </div>
            <div>
               <h4 class="font-semibold text-yellow-800">A Decade of Transformation</h4>
               <p class="text-gray-700">
                  Through the Founder's vision and Hamdard Laboratories (Waqf) Bangladesh's support, HPC has grown from that fateful stumble into a premier institution in just ten years.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Academic Journey Section -->
<section id="academic-journey" class="py-16 bg-green-50">
   <div class="container mx-auto px-4 pb-1px">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our College Campus</h2>
      <!-- Location Highlights -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
         <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="text-green-600 mb-2">
               <i class="fas fa-map-marker-alt text-2xl"></i>
            </div>
            <h4 class="font-semibold mb-2">Prime Location</h4>
            <p class="text-gray-600">Green Road, Panthapath, Dhaka</p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="text-green-600 mb-2">
               <i class="fas fa-building text-2xl"></i>
            </div>
            <h4 class="font-semibold mb-2">Spacious Infrastructure</h4>
            <p class="text-gray-600">8-storied modern building</p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="text-green-600 mb-2">
               <i class="fas fa-subway text-2xl"></i>
            </div>
            <h4 class="font-semibold mb-2">Easy Accessibility</h4>
            <p class="text-gray-600">Central Dhaka location for all students</p>
         </div>
      </div>
      <!-- Campus Features Timeline -->
      <div class="mt-12 relative">
         <!-- Timeline Line -->
         <div class="hidden lg:block absolute left-1/2 h-full w-1 bg-green-200 transform -translate-x-1/2"></div>
         <!-- Building Structure -->
         <div class="relative lg:flex mb-8">
            <div class="lg:w-1/2 lg:pr-8 lg:text-right mb-4 lg:mb-0">
               <div class="inline-block bg-white p-4 rounded-lg shadow-md">
                  <h4 class="font-bold text-green-700">Modern Infrastructure</h4>
                  <p>8-storied building with 21 well-equipped classrooms</p>
               </div>
            </div>
            <div class="lg:w-1/2 lg:pl-8">
               <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                  <i class="fas fa-school"></i>
               </div>
            </div>
         </div>
         <!-- Academic Facilities -->
         <div class="relative lg:flex mb-8">
            <div class="lg:w-1/2 lg:pr-8"></div>
            <div class="lg:w-1/2 lg:pl-8">
               <div class="bg-white p-4 rounded-lg shadow-md">
                  <h4 class="font-bold text-green-700">Learning Resources</h4>
                  <p>4 advanced laboratories + comprehensive library</p>
               </div>
            </div>
            <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
               <i class="fas fa-flask"></i>
            </div>
         </div>
         <!-- Student Amenities -->
         <div class="relative lg:flex">
            <div class="lg:w-1/2 lg:pr-8 lg:text-right mb-4 lg:mb-0">
               <div class="inline-block bg-white p-4 rounded-lg shadow-md">
                  <h4 class="font-bold text-green-700">Student Facilities</h4>
                  <p>Common rooms, teacher lounge, and rooftop dining area</p>
               </div>
            </div>
            <div class="lg:w-1/2 lg:pl-8">
               <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                  <i class="fas fa-utensils"></i>
               </div>
            </div>
         </div>
      </div>
      <!-- Administrative Setup -->
      <div class="mt-12 bg-white p-6 rounded-lg shadow-lg border-l-4 border-green-600">
         <h3 class="text-2xl font-semibold mb-4 text-green-700">Administrative Infrastructure</h3>
         <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="flex items-center">
               <i class="fas fa-door-open text-green-600 mr-3"></i>
               <span>6 dedicated admin rooms</span>
            </div>
            <div class="flex items-center">
               <i class="fas fa-chalkboard-teacher text-green-600 mr-3"></i>
               <span>Spacious teacher lounge</span>
            </div>
            <div class="flex items-center">
               <i class="fas fa-restroom text-green-600 mr-3"></i>
               <span>Separate common rooms</span>
            </div>
         </div>
      </div>
      <!-- Campus Image -->
      <div class="mt-8 rounded-lg overflow-hidden shadow-xl">
         <img src="{{ asset('images/institute/HPCg.jpg') }}" 
            alt="HPC Campus at Green Road" 
            class="w-full h-auto object-cover">
         <div class="bg-green-800 text-white p-4 text-center">
            <p>Our central Dhaka location provides easy access for students across the city</p>
         </div>
      </div>
   </div>
</section>
<!-- Academic Facilities Section -->
<section id="facilities" class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Academic Ecosystem</h2>
      <!-- Faculty Excellence -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12 items-center">
         <div class="order-2 lg:order-1">
            <h3 class="text-2xl font-semibold mb-4 text-green-700">Dedicated Faculty Team</h3>
            <p class="text-gray-700 mb-6">
               Our college thrives under the leadership of a compassionate Principal, guiding 39 expert teachers committed to international education standards. From humble beginnings with 14 teachers, we've grown alongside our student community.
            </p>
            <div class="grid grid-cols-2 gap-4">
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-chalkboard-teacher"></i>
                  </div>
                  <h4 class="font-semibold">Innovative Teaching</h4>
                  <p class="text-gray-700">Interactive classroom methodologies</p>
               </div>
               <div class="bg-green-50 p-4 rounded-lg">
                  <div class="text-green-600 mb-2 text-2xl">
                     <i class="fas fa-hands-helping"></i>
                  </div>
                  <h4 class="font-semibold">Student Support</h4>
                  <p class="text-gray-700">Special care for weaker students</p>
               </div>
            </div>
         </div>
         <div class="h-64 lg:h-full rounded-lg overflow-hidden shadow-lg order-1 lg:order-2">
            <img src="{{ asset('images/institute/HPCgg.jpg') }}" 
               alt="HPC Faculty Team" 
               class="w-full h-full object-cover">
         </div>
      </div>
      <!-- Academic Support Programs -->
      <div class="bg-green-100 rounded-lg p-6 mb-12">
         <h3 class="text-2xl font-semibold mb-4 text-green-800">Comprehensive Learning Support</h3>
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-3 rounded-lg">
               <div class="text-green-600 mb-2">
                  <i class="fas fa-clock text-xl"></i>
               </div>
               <h4 class="font-medium">After Class Program</h4>
               <p class="text-sm text-gray-600">Extended learning sessions</p>
            </div>
            <div class="bg-white p-3 rounded-lg">
               <div class="text-green-600 mb-2">
                  <i class="fas fa-moon text-xl"></i>
               </div>
               <h4 class="font-medium">Night Studies</h4>
               <p class="text-sm text-gray-600">Evening learning facilities</p>
            </div>
            <div class="bg-white p-3 rounded-lg">
               <div class="text-green-600 mb-2">
                  <i class="fas fa-tasks text-xl"></i>
               </div>
               <h4 class="font-medium">Continuous Assessment</h4>
               <p class="text-sm text-gray-600">Regular progress tracking</p>
            </div>
            <div class="bg-white p-3 rounded-lg">
               <div class="text-green-600 mb-2">
                  <i class="fas fa-book-reader text-xl"></i>
               </div>
               <h4 class="font-medium">Tuition Alternative</h4>
               <p class="text-sm text-gray-600">Extra classes replacing private tuition</p>
            </div>
         </div>
      </div>
      <!-- Student Growth -->
      <div class="bg-green-800 text-white p-6 rounded-lg mb-12">
         <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 text-center mb-4 md:mb-0">
               <div class="text-4xl font-bold mb-2">817</div>
               <div class="text-lg">Students</div>
               <div class="text-green-300 text-sm mt-1">From 14 pioneering students</div>
            </div>
            <div class="md:w-1/3 text-center mb-4 md:mb-0">
               <div class="text-4xl font-bold mb-2">39</div>
               <div class="text-lg">Teachers</div>
               <div class="text-green-300 text-sm mt-1">From initial 14 faculty members</div>
            </div>
            <div class="md:w-1/3 text-center">
               <div class="text-4xl font-bold mb-2">6+</div>
               <div class="text-lg">Specialized Clubs</div>
               <div class="text-green-300 text-sm mt-1">For holistic development</div>
            </div>
         </div>
      </div>
      <!-- Student Life -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
         <!-- Clubs and Activities -->
         <div class="bg-green-800 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">Student Development Clubs</h3>
            <div class="grid grid-cols-2 gap-4">
               <div class="flex items-center">
                  <i class="fas fa-atom mr-3 text-green-300"></i>
                  <span>Science Club</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-language mr-3 text-green-300"></i>
                  <span>Language Club</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-comments mr-3 text-green-300"></i>
                  <span>Debating Club</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-chart-line mr-3 text-green-300"></i>
                  <span>Business Club</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-spa mr-3 text-green-300"></i>
                  <span>Meditation Club</span>
               </div>
               <div class="flex items-center">
                  <i class="fas fa-paint-brush mr-3 text-green-300"></i>
                  <span>Cultural Club</span>
               </div>
            </div>
         </div>
         <!-- National Celebrations -->
         <div class="border border-green-200 p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4 text-green-700">National Pride Events</h3>
            <div class="space-y-4">
               <div class="flex items-center bg-red-50 p-3 rounded-lg">
                  <div class="bg-red-100 p-2 rounded-full mr-3">
                     <i class="fas fa-flag text-red-600"></i>
                  </div>
                  <div>
                     <h4 class="font-medium">Independence Day</h4>
                     <p class="text-sm text-gray-600">March 26 celebrations</p>
                  </div>
               </div>
               <div class="flex items-center bg-blue-50 p-3 rounded-lg">
                  <div class="bg-blue-100 p-2 rounded-full mr-3">
                     <i class="fas fa-medal text-blue-600"></i>
                  </div>
                  <div>
                     <h4 class="font-medium">Victory Day</h4>
                     <p class="text-sm text-gray-600">December 16 commemorations</p>
                  </div>
               </div>
               <div class="flex items-center bg-green-50 p-3 rounded-lg">
                  <div class="bg-green-100 p-2 rounded-full mr-3">
                     <i class="fas fa-language text-green-600"></i>
                  </div>
                  <div>
                     <h4 class="font-medium">Mother Language Day</h4>
                     <p class="text-sm text-gray-600">February 21 observances</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
    <!-- Footer -->
       @include('partials.footer')
</body>
</html>