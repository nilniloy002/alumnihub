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
                  <p class="text-xs text-green-100">Unified Educational Intelligence</p>
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
            <img src="{{ asset('images/institute/RJEMCH.jpg') }}" 
                alt="College Campus" 
                class="w-full h-full object-cover">
        </div>
        <!-- Content Container -->
        <div class="container mx-auto px-4 py-20 md:py-32 text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Rawshan Jahan Eastern Medical College</h1>
            <p class="text-xl md:text-2xl mb-8">"A sound mind lies in a sound body"</p>
            <a href="#programs" class="bg-white text-green-800 px-6 py-3 rounded-lg font-semibold hover:bg-green-100 transition inline-block">Explore Programs</a>
        </div>
        <!-- Gradient Overlay Bottom -->
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
    </header>

    <!-- Founding Vision Section -->
    <section id="about" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Founding Vision</h2>
            <!-- Motto Highlight -->
            <div class="text-center mb-12 max-w-4xl mx-auto">
                <blockquote class="text-2xl italic text-green-700 mb-6">
                    "A sound mind lies in a sound body"
                </blockquote>
                <p class="text-lg text-gray-700">
                    Established in 2008 in Laxmipur, Rawshan Jahan Eastern Medical College and Hospital continues its mission to advance education in the Eastern System of Medicine, with particular focus on Unani traditions.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <!-- Founder's Story -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-user-md text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-green-700">The Visionary Founder</h3>
                    </div>
                    <div class="space-y-4">
                        <p class="text-gray-700">
                            Dr. Hakim Md. Yousuf Harun Bhuiyan established this institution with a profound humanitarian vision for the people of Laxmipur, located in southern Bangladesh along the Meghna river.
                        </p>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2 text-green-700">The Challenge</h4>
                            <p class="text-gray-700">
                                The region faced significant challenges including poverty, superstition, illiteracy, and inadequate healthcare access. Modern medical services were beyond reach for most residents.
                            </p>
                        </div>
                        <p class="text-gray-700">
                            Recognizing these challenges, Dr. Bhuiyan envisioned transforming healthcare through integrated medical education combining Allopathic, Unani, and Ayurvedic systems.
                        </p>
                    </div>
                </div>
                <!-- Establishment Details -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-landmark text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-green-700">Establishment</h3>
                    </div>
                    <div class="space-y-4">
                        <p class="text-gray-700">
                            Dr. Bhuiyan personally purchased land and initiated construction with the dual goals of:
                        </p>
                        <ul class="space-y-3 pl-5">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Promoting awareness of Unani Medical Science</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Providing affordable treatment options</span>
                            </li>
                        </ul>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2 text-green-700">Key Milestone</h4>
                            <p class="text-gray-700">
                                The College and Hospital buildings were inaugurated on February 20, 2008 by the Deputy Commissioner and Police Super of Laxmipur, marking the beginning of this important institution.
                            </p>
                        </div>
                        <p class="text-gray-700">
                            Following the Private Unani & Ayurvedic Medical College Settlement Rule-2012, the hospital includes 30 beds with ongoing construction to expand facilities.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Founding Principles -->
            <div class="mt-12 bg-green-800 text-white p-8 rounded-lg">
                <h3 class="text-2xl font-semibold mb-6">Our Core Principles</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex items-start">
                        <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                            <i class="fas fa-heartbeat text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium mb-2">Integrated Medicine</h4>
                            <p>Combining Allopathic, Unani, and Ayurvedic approaches for comprehensive care</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                            <i class="fas fa-hand-holding-heart text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium mb-2">Accessible Care</h4>
                            <p>Making quality treatment affordable for all community members</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-green-600 p-2 rounded-full mr-4 mt-1">
                            <i class="fas fa-graduation-cap text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium mb-2">Education First</h4>
                            <p>Training the next generation of Unani medical practitioners</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Journey Section -->
    <section id="academic-journey" class="py-16 bg-green-50">
        <div class="container mx-auto px-4 pb-1px">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Our Academic Journey</h2>
            <h3 class="text-2xl font-semibold mb-4 text-green-700">College Highlights</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="text-green-600 mb-2">
                        <i class="fas fa-map-marker-alt text-2xl"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Location</h4>
                    <p class="text-gray-600">South Maguri village, Dattapara, Laxmipur</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="text-green-600 mb-2">
                        <i class="fas fa-calendar-alt text-2xl"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Established</h4>
                    <p class="text-gray-600">2008</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="text-green-600 mb-2">
                        <i class="fas fa-university text-2xl"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Affiliation</h4>
                    <p class="text-gray-600">Chittagong Medical University (CMU)</p>
                </div>
            </div>
            <!-- Timeline -->
            <div class="mt-12 relative">
                <!-- Timeline Line -->
                <div class="hidden lg:block absolute left-1/2 h-full w-1 bg-green-200 transform -translate-x-1/2"></div>
                <!-- 2008 DUMS Start -->
                <div class="relative lg:flex mb-8">
                    <div class="lg:w-1/2 lg:pr-8 lg:text-right mb-4 lg:mb-0">
                        <div class="inline-block bg-white p-4 rounded-lg shadow-md">
                            <h4 class="font-bold text-green-700">October 14, 2008</h4>
                            <p>Received government permission to start DUMS program under Societies Registration Act 1860</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pl-8">
                        <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                </div>
                <!-- 2008-2009 Session -->
                <div class="relative lg:flex mb-8">
                    <div class="lg:w-1/2 lg:pr-8"></div>
                    <div class="lg:w-1/2 lg:pl-8">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h4 class="font-bold text-green-700">2008-2009 Session</h4>
                            <p>Began academic journey with Diploma in Unani Medicine & Surgery (DUMS) program with 115 students, recognized by Board of Unani and Ayurvedic Systems of Medicine under 1983 Ordinance</p>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <!-- 2016 BUMS Approval -->
                <div class="relative lg:flex mb-8">
                    <div class="lg:w-1/2 lg:pr-8 lg:text-right mb-4 lg:mb-0">
                        <div class="inline-block bg-white p-4 rounded-lg shadow-md">
                            <h4 class="font-bold text-green-700">December 22, 2016</h4>
                            <p>Ministry of Health and Family Welfare approved BUMS program - first private institution in Bangladesh to offer this</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pl-8">
                        <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                </div>
                <!-- 2017-2018 BUMS Start -->
                <div class="relative lg:flex">
                    <div class="lg:w-1/2 lg:pr-8"></div>
                    <div class="lg:w-1/2 lg:pl-8">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h4 class="font-bold text-green-700">2017-2018 Session</h4>
                            <p>Launched BUMS program initially affiliated with University of Chittagong, later transferred to newly established Chittagong Medical University (CMU) in 2018</p>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center items-center absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2 w-8 h-8 rounded-full bg-green-600 text-white">
                        <i class="fas fa-university"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs & Curriculum Section -->
    <section id="programs" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-800">Programs & Curriculum</h2>
            <div class="text-center mb-12 max-w-3xl mx-auto">
                <p class="text-lg text-gray-700">
                    Rawshan Jahan Eastern Medical College and Hospital (Unani) currently offers two comprehensive programs in Unani Medicine:
                </p>
            </div>
            <!-- Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- DUMS Program Card -->
                <div class="border border-green-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="bg-green-700 text-white px-6 py-4">
                        <h3 class="text-2xl font-bold">Diploma in Unani Medicine & Surgery (DUMS)</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-calendar-alt text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Duration</h4>
                                <p>4.5 years (4 academic years + 6 months internship)</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-book text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Curriculum</h4>
                                <p>18 courses across 9 departments following Board of Unani and Ayurvedic Systems of Medicine syllabus</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-user-graduate text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Eligibility</h4>
                                <p>SSC in Science (HSC in Science students given priority)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-language text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Medium</h4>
                                <p>Instruction in both Bengali and English</p>
                            </div>
                        </div>
                        <div class="mt-6 pt-4 border-t border-green-100">
                            <p class="text-sm text-gray-600">
                                <i class="fas fa-calendar-day mr-2"></i> Session begins: July (as per Unani and Ayurvedic Board schedule)
                            </p>
                        </div>
                    </div>
                </div>
                <!-- BUMS Program Card -->
                <div class="border border-green-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="bg-green-700 text-white px-6 py-4">
                        <h3 class="text-2xl font-bold">Bachelor of Unani Medicine & Surgery (BUMS)</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-calendar-alt text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Duration</h4>
                                <p>6 years (5 academic years + 1 year internship), equivalent to MBBS structure</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-university text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Affiliation</h4>
                                <p>Chittagong Medical University (CMU), with syllabus approved by UGC</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-trophy text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Admission</h4>
                                <p>Through DGHS-administered admission test (similar to MBBS process)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-history text-green-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">History</h4>
                                <p>First private institution in Bangladesh to offer BUMS program</p>
                            </div>
                        </div>
                        <div class="mt-6 pt-4 border-t border-green-100">
                            <p class="text-sm text-gray-600">
                                <i class="fas fa-star mr-2"></i> Started in 2017-2018 session after receiving Ministry of Health approval in 2016
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comparative Table -->
            <div class="bg-green-50 rounded-lg p-6 shadow-sm">
                <h3 class="text-2xl font-semibold text-center mb-6 text-green-800">Program Comparison</h3>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-green-700 text-white">
                                <th class="py-3 px-4 text-left">Feature</th>
                                <th class="py-3 px-4 text-left">DUMS</th>
                                <th class="py-3 px-4 text-left">BUMS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-green-200">
                            <tr class="hover:bg-green-100">
                                <td class="py-3 px-4 font-medium">Degree Level</td>
                                <td class="py-3 px-4">Diploma</td>
                                <td class="py-3 px-4">Bachelor's</td>
                            </tr>
                            <tr class="hover:bg-green-100">
                                <td class="py-3 px-4 font-medium">Total Duration</td>
                                <td class="py-3 px-4">4.5 years</td>
                                <td class="py-3 px-4">6 years</td>
                            </tr>
                            <tr class="hover:bg-green-100">
                                <td class="py-3 px-4 font-medium">Internship Period</td>
                                <td class="py-3 px-4">6 months</td>
                                <td class="py-3 px-4">1 year</td>
                            </tr>
                            <tr class="hover:bg-green-100">
                                <td class="py-3 px-4 font-medium">Governing Body</td>
                                <td class="py-3 px-4">Board of Unani and Ayurvedic Systems</td>
                                <td class="py-3 px-4">Chittagong Medical University</td>
                            </tr>
                            <tr class="hover:bg-green-100">
                                <td class="py-3 px-4 font-medium">Admission Process</td>
                                <td class="py-3 px-4">Direct application</td>
                                <td class="py-3 px-4">DGHS merit-based admission test</td>
                            </tr>
                        </tbody>
                    </table>
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
                    <h3 class="text-2xl font-semibold mb-4 text-green-700">Our Campus</h3>
                    <p class="text-gray-700 mb-6">
                        The college occupies a spacious 30 bigha campus dedicated to academic excellence and student development. Our four-storied main academic building spans 41,125 square feet of modern learning space.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-green-50 p-4 rounded-lg">
                            <div class="text-green-600 mb-2 text-2xl">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h4 class="font-semibold">Classrooms</h4>
                            <p class="text-gray-700">containing 45 rooms, 12 well-equipped classrooms</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <div class="text-green-600 mb-2 text-2xl">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h4 class="font-semibold">Laboratories</h4>
                            <p class="text-gray-700">8 specialized labs</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <div class="text-green-600 mb-2 text-2xl">
                                <i class="fas fa-book"></i>
                            </div>
                            <h4 class="font-semibold">Library</h4>
                            <p class="text-gray-700">Comprehensive collection</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <div class="text-green-600 mb-2 text-2xl">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="font-semibold">Common Rooms</h4>
                            <p class="text-gray-700">Separate for boys & girls</p>
                        </div>
                    </div>
                </div>
                <div class="h-64 lg:h-full rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('images/institute/RJEMCHg.jpg') }}" 
                        alt="College Campus" 
                        class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Student Life -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Clubs and Activities -->
                <div class="bg-green-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">Student Clubs & Activities</h3>
                    <p class="mb-4">We encourage holistic development through various student organizations:</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-language mr-3 text-green-300"></i>
                            <span>Language Club</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-comments mr-3 text-green-300"></i>
                            <span>Debating Club</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-spa mr-3 text-green-300"></i>
                            <span>Meditation Club</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-music mr-3 text-green-300"></i>
                            <span>Cultural Club</span>
                        </div>
                    </div>
                </div>
                <!-- Events and Trips -->
                <div class="border border-green-200 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4 text-green-700">Events & Excursions</h3>
                    <p class="text-gray-700 mb-4">Our campus celebrates national pride and organizes educational trips:</p>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="bg-green-100 p-1 rounded-full mr-3 mt-1">
                                <i class="fas fa-flag text-green-700 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">National Celebrations</h4>
                                <p class="text-sm text-gray-600">Independence Day, Victory Day, International Mother Language Day</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-1 rounded-full mr-3 mt-1">
                                <i class="fas fa-bus text-green-700 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Annual Excursions</h4>
                                <p class="text-sm text-gray-600">Study tours and educational trips organized yearly</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection