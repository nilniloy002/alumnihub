<!DOCTYPE html>
<html lang="en">
   @include('partials.head')

   <body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">
      <!-- Header -->
      @include('partials.header')


 <!-- Hamdard General Hospital Section -->
      <section class="py-12 bg-white">
         <div class="container mx-auto px-6">
            <div class="text-center mb-12">
               <h2 class="text-3xl font-bold text-primary mb-2">Hamdard General Hospital</h2>
               <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
               <h3 class="text-2xl font-semibold text-dark mb-4">A Pioneer in Integrated Healthcare</h3>
               <p class="text-gray-700 max-w-3xl mx-auto">
                  Hamdard General Hospital is a dignified step forward in the solemn journey of Health and Medicare. 
                  As Bangladesh's first hospital to integrate <span class="font-semibold text-secondary">Unani, Ayurvedic, and Allopathic</span> 
                  systems under one roof, we provide comprehensive treatment options tailored to each patient's needs.
               </p>
            </div>
            <!-- Hospital Image and Key Features -->
            <div class="flex flex-col lg:flex-row gap-8 mb-12">
               <!-- Hospital Image -->
               <div class="lg:w-1/2">
                  <img src="{{ asset('images/institute/Hospital.jpg') }}" 
                     alt="Hamdard General Hospital" 
                     class="w-full h-auto rounded-lg shadow-xl">
               </div>
               <!-- Key Features -->
               <div class="lg:w-1/2 grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">60+</div>
                     <h4 class="font-semibold text-dark mb-1">Bed Facility</h4>
                     <p class="text-sm text-gray-600">Approved by DGHS (2018)</p>
                  </div>
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">19+</div>
                     <h4 class="font-semibold text-dark mb-1">Specialists</h4>
                     <p class="text-sm text-gray-600">Hakims, Kabirajes & Allopathic Doctors</p>
                  </div>
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">500+</div>
                     <h4 class="font-semibold text-dark mb-1">Diagnostic Tests</h4>
                     <p class="text-sm text-gray-600">Pathology, X-Ray, USG, ECG</p>
                  </div>
                  <div class="bg-green-50 p-6 rounded-lg border-l-4 border-primary">
                     <div class="text-4xl font-bold text-primary mb-2">24/7</div>
                     <h4 class="font-semibold text-dark mb-1">Emergency</h4>
                     <p class="text-sm text-gray-600">Two dedicated ambulances</p>
                  </div>
               </div>
            </div>
            <!-- Treatment Systems -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">
               <!-- Allopathic Medicine -->
               <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500">
                  <h4 class="text-xl font-bold text-blue-600 mb-4 flex items-center">
                     <i class="fas fa-stethoscope mr-3"></i> Allopathic Medicine
                  </h4>
                  <p class="text-gray-700 mb-4">Our modern Allopathic division provides quick lifesaving interventions with specialists in:</p>
                  <ul class="space-y-2">
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>General Medicine</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Gynecology & Obstetrics</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Pediatrics</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Surgery & Orthopedics</span>
                     </li>
                  </ul>
               </div>
               <!-- Unani Medicine -->
               <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-500">
                  <h4 class="text-xl font-bold text-green-600 mb-4 flex items-center">
                     <i class="fas fa-leaf mr-3"></i> Unani Medicine
                  </h4>
                  <p class="text-gray-700 mb-4">Our Unani department offers holistic treatments including:</p>
                  <ul class="space-y-2">
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Regimental Therapy (Ilaj-bit-Tadbeer)</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Pharmacotherapy (Ilaj-bit-Dawa)</span>
                     </li>
                  </ul>
               </div>
               <!-- Ayurvedic Medicine -->
               <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-500">
                  <h4 class="text-xl font-bold text-yellow-600 mb-4 flex items-center">
                     <i class="fas fa-spa mr-3"></i> Ayurvedic Medicine
                  </h4>
                  <p class="text-gray-700 mb-4">Our Ayurvedic center specializes in:</p>
                  <ul class="space-y-2">
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Panchakarma Therapies</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Herbal Formulations</span>
                     </li>
                     <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Yoga & Lifestyle Counseling</span>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Additional Info and CTA -->
            <div class="bg-primary bg-opacity-10 p-8 rounded-lg flex flex-col md:flex-row justify-between items-center">
               <div class="mb-4 md:mb-0">
                  <div class="flex items-center text-lg font-medium text-dark mb-2">
                     <i class="fas fa-tag text-primary mr-2"></i> OPD Entry Fee: 50৳ only
                  </div>
                  <div class="flex items-center text-lg font-medium text-dark">
                     <i class="fas fa-clock text-primary mr-2"></i> Open 24/7 including holidays
                  </div>
               </div>
               <a href="https://www.facebook.com/hamdardgeneralhospital/" 
                  class="bg-secondary hover:bg-dark text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 inline-flex items-center">
               <i class="fas fa-directions mr-2"></i> Visit Hospital
               </a>
            </div>
            <!-- Future Vision -->
            <div class="mt-12 bg-gradient-to-r from-primary to-secondary p-8 rounded-lg text-white">
               <h4 class="text-2xl font-bold mb-4 flex items-center">
                  <i class="fas fa-bullseye mr-3"></i> Future Vision
               </h4>
               <p class="text-lg">
                  Hamdard General Hospital is on its way to becoming a <span class="font-bold">500-bed tertiary care facility</span>, 
                  continuing our mission to provide integrated, affordable healthcare while serving as a teaching 
                  hospital for Hamdard Institute of Unani and Ayurvedic Medicine.
               </p>
            </div>
         </div>
      </section>
      <!-- Footer -->
      @include('partials.footer')

   </body>
</html>