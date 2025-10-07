<!DOCTYPE html>
<html lang="en">
        @include('partials.head')
   <body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">
      <!-- Header -->
            @include('partials.header')
      <!-- Mission Section -->
    <section class="relative py-16 bg-gradient-to-r from-green-800 to-green-900 text-white overflow-hidden">
        
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Holding the Hands of Humanity</h2>
                <p class="text-xl max-w-3xl mx-auto">Hamdard Foundation Bangladesh has been working tirelessly for Education, Health, and Humanity since its inception.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="fade-in">
                    <p class="mb-4 text-green-100">Starting with health charity programs, the Foundation's visionary leader, Dr. Hakim Md. Yousuf Harun Bhuiyan, recognized the crucial need for educational development in Bangladesh. He believed that progress is not solely the government's responsibility but a collective duty of all citizens.</p>
                    <p class="text-green-100">Dr. Harun dedicated himself to advancing both traditional Eastern medicine systems (Unani and Ayurvedic) and general education to build a brighter future for Bangladesh.</p>
                </div>
                <div class="fade-in">
                    <p class="mb-4 text-green-100">The Foundation provides educational aid and stipends to needy but brilliant students while establishing numerous institutions including medical colleges, general colleges, and ultimately Hamdard University Bangladesh.</p>
                    <p class="text-green-100">Looking toward the future, Dr. Harun has envisioned an ambitious project: the Hamdard City of Science, Education and Culture (HCSEC) at Gazaria, Munshigonj - a pioneering initiative bringing urban educational facilities to a semi-urban locality.</p>
                </div>
            </div>
        </div>
    </section>
    
      <!-- Institution Logos -->
      <section class="py-12 bg-green-50">
         <h2 class="text-center text-2xl font-bold text-dark mb-8">Our Institutions</h2>
         <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 px-6">
            <!-- Hamdard University Bangladesh -->
            <a href="{{ url('hub') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/4.png') }}" alt="HUB" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard University Bangladesh</p>
            </a>
            <!-- Hamdard Institute of Unani & Ayurvedic Medicine -->
            <a href="{{ url('hiuam') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/8.png') }}" alt="Hamdard Institute of Unani & Ayurvedic Medicine" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard Institute of Unani & Ayurvedic Medicine</p>
            </a>
            <!-- Rawshan Jahan Eastern Medical College & Hospital -->
            <a href="{{ url('rjemch') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/7.png') }}" alt="Rawshan Jahan Eastern Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Rawshan Jahan Eastern Medical College & Hospital</p>
            </a>
            <!-- Hamdard Unani Medical College & Hospital -->
            <a href="{{ url('humch') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/6.png') }}" alt="Hamdard Unani Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard Unani Medical College & Hospital</p>
            </a>
            <!-- Hakim Said Eastern Medical College & Hospital -->
            <a href="{{ url('hsemch') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/5.png') }}" alt="Hakim Said Eastern Medical College & Hospital" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hakim Said Eastern Medical College & Hospital</p>
            </a>
            <!-- Hamdard Public College -->
            <a href="{{ url('hpc') }}" class="bg-white shadow-md p-4 rounded-lg text-center hover:shadow-xl transition duration-300 block">
               <img src="{{ asset('images/institute/9.png') }}" alt="Hamdard Public College" class="w-24 h-24 mx-auto mb-2">
               <p class="text-sm font-medium text-gray-700">Hamdard Public College</p>
            </a>
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
            @include('partials.footer')

   </body>
</html>