<!-- Footer -->
   <footer class="bg-dark text-white py-6 px-6">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <!-- Left Section -->
        <div class="mb-4 md:mb-0 text-center md:text-left">
            <h3 class="text-xl font-bold text-green-300 mb-2">Hamdard Foundation Bangladesh</h3>
            <p class="text-green-100 max-w-md">
                A charitable organization dedicated to serving humanity through healthcare, education, and social welfare across Bangladesh since 1989.
            </p>
        </div>

        <!-- Right Section -->
        <div class="space-y-2 text-center md:text-right">
            <p class="text-green-100"><i class="fas fa-envelope mr-2"></i> hamdardfoundation@gmail.com</p>
            <p class="text-green-100"><i class="fas fa-phone mr-2"></i> +880 1712-345678</p>
            <div class="flex justify-center md:justify-end space-x-4 mt-2">
                <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="border-t border-green-800 mt-4 pt-4 text-center text-sm text-green-200">
        &copy; {{ date('Y') }} Hamdard Foundation Bangladesh | All rights reserved.
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

        // Animate leadership messages on scroll
        document.addEventListener('DOMContentLoaded', function() {
        const messageCards = document.querySelectorAll('#leadership-messages .bg-white');
        
        messageCards.forEach((card, index) => {
            gsap.from(card, {
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: index * 0.2,
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            }
            });
        });
        });
    </script>