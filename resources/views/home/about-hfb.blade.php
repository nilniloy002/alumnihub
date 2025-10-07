<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

<body class="bg-gradient-to-br from-green-50 to-green-100 font-sans">

    <!-- Header (Copied from Homepage) -->
     @include('partials.header')


    <!-- Hero Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-[url('{{ asset('images/banner/foundation-bg.jpg') }}')] bg-cover bg-center opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Hamdard Foundation Bangladesh</h1>
            <p class="max-w-3xl mx-auto text-lg text-green-100 leading-relaxed">
                Founded in 1989 by <strong>Dr. Hakim Md. Yousuf Harun Bhuiyan</strong>, Hamdard Foundation Bangladesh stands as a beacon of compassion, 
                integrating healthcare, education, and social service into one unified vision of national well-being.
            </p>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <img src="{{ asset('images/team/mdsir.jpg') }}" alt="Dr. Hakim Md. Yousuf Harun Bhuiyan" class="rounded-xl shadow-xl w-full object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-primary mb-4">Dr. Hakim Md. Yousuf Harun Bhuiyan</h2>
                <p class="text-gray-700 mb-4">A visionary Unani physician, philanthropist, and institution-builder — Dr. Bhuiyan transformed the Unani system of medicine into a nationwide movement for health, education, and humanity.</p>
                <p class="text-gray-700 mb-4">He founded Hamdard Foundation Bangladesh as a charitable Waqf organization, ensuring that 100% of its profits are dedicated to public welfare and social development.</p>
                <blockquote class="border-l-4 border-secondary pl-4 italic text-secondary mt-6">
                    “Service to humanity is the highest form of worship. Health and knowledge, when freely shared, become the pillars of a just society.”
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Foundation History -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-primary mb-6">A Legacy Rooted in Compassion and Knowledge</h2>
            <p class="max-w-4xl mx-auto text-gray-700 leading-relaxed">
                Inspired by the ideals of Hamdard India (founded in 1906), the Foundation was established in 1989 to localize the vision of social welfare in Bangladesh. 
                Operating under Islamic charitable principles (Waqf), it reinvests every profit earned by Hamdard Laboratories (Waqf) Bangladesh into nationwide education, 
                healthcare, and humanitarian projects.
            </p>
        </div>
    </section>

    <!-- Healthcare Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Healthcare for All</h2>
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <p class="text-gray-700 mb-4">Hamdard Foundation Bangladesh operates Unani and Ayurvedic hospitals, mobile medical units, and free healthcare camps across rural Bangladesh, 
                    bringing quality healthcare to underserved communities.</p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Hamdard Unani Medical College & Hospital, Bogra</li>
                        <li>Hakim Said Eastern Medical College & Hospital, Dhaka</li>
                        <li>Rawshan Jahan Eastern Medical College & Hospital, Laxmipur</li>
                    </ul>
                </div>
                <img src="{{ asset('images/gallery/healthcare.jpg') }}" alt="Healthcare" class="rounded-xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img src="{{ asset('images/gallery/education.jpg') }}" alt="Education" class="rounded-xl shadow-lg order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold text-primary mb-6">Ethical and Scientific Education</h2>
                <p class="text-gray-700 mb-4">Education is the cornerstone of Hamdard Foundation’s mission. From primary schools to universities, 
                the Foundation nurtures intellect and morality side by side.</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Hamdard University Bangladesh</li>
                    <li>Hamdard Public College, Dhaka</li>
                    <li>Hamdard International School</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Humanitarian Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-primary mb-6">Humanitarian & Social Services</h2>
            <p class="max-w-4xl mx-auto text-gray-700 mb-8">From disaster relief to scholarships, the Foundation provides assistance to communities in need, embodying the spirit of empathy and service.</p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-light rounded-xl shadow-md">
                    <i class="fas fa-people-carry text-secondary text-3xl mb-3"></i>
                    <h4 class="font-bold text-lg mb-2">Disaster Relief</h4>
                    <p class="text-gray-600 text-sm">Emergency aid during floods and cyclones, followed by long-term rehabilitation support.</p>
                </div>
                <div class="p-6 bg-light rounded-xl shadow-md">
                    <i class="fas fa-hand-holding-heart text-secondary text-3xl mb-3"></i>
                    <h4 class="font-bold text-lg mb-2">Scholarships & Food Aid</h4>
                    <p class="text-gray-600 text-sm">Stipends for poor students, Ramadan food distribution, and orphan care initiatives.</p>
                </div>
                <div class="p-6 bg-light rounded-xl shadow-md">
                    <i class="fas fa-globe text-secondary text-3xl mb-3"></i>
                    <h4 class="font-bold text-lg mb-2">Support for Palestine</h4>
                    <p class="text-gray-600 text-sm">Financial aid, employment for Palestinian doctors, and collaboration with NGOs for relief work.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interfaith Harmony Section -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-primary mb-6">Interfaith Harmony & Inclusiveness</h2>
            <p class="max-w-4xl mx-auto text-gray-700">
                Though founded on Islamic principles, Hamdard Foundation serves people of all faiths. It supports festivals like Durga Puja, Buddha Purnima, and Christmas alongside Ramadan and Eid,
                reflecting Bangladesh’s spirit of unity and compassion.
            </p>
        </div>
    </section>

    <!-- Future Vision -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-primary mb-6">Vision for the Future</h2>
            <p class="max-w-4xl mx-auto text-gray-700 mb-6">To build a self-reliant Bangladesh where every individual enjoys access to health, education, and opportunity — 
            rooted in ethics, powered by innovation, and guided by compassion.</p>
            <div class="grid md:grid-cols-3 gap-6 mt-10">
                <div class="bg-light p-6 rounded-xl shadow">
                    <i class="fas fa-seedling text-secondary text-3xl mb-4"></i>
                    <h4 class="font-semibold mb-2">Green Herbal Farming</h4>
                    <p class="text-gray-600 text-sm">Promoting eco-friendly cultivation and sustainable healthcare innovation.</p>
                </div>
                <div class="bg-light p-6 rounded-xl shadow">
                    <i class="fas fa-network-wired text-secondary text-3xl mb-4"></i>
                    <h4 class="font-semibold mb-2">Digital Health & Education</h4>
                    <p class="text-gray-600 text-sm">Telemedicine platforms and online learning for rural and marginalized communities.</p>
                </div>
                <div class="bg-light p-6 rounded-xl shadow">
                    <i class="fas fa-hands-helping text-secondary text-3xl mb-4"></i>
                    <h4 class="font-semibold mb-2">Disaster Response Network</h4>
                    <p class="text-gray-600 text-sm">Rapid relief teams and community resilience training for emergency response.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    @include('partials.footer')


</body>
</html>
