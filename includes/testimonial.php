<!-- === TESTIMONIALS SECTION === -->
<section class="py-20 bg-dark-light">
    <div class="container mx-auto px-5">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Clients Say</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Don't just take our word for it - hear from businesses we've transformed.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-medium">Sarah Johnson</h4>
                        <p class="text-gray-400 text-sm">CEO, TechSolutions Inc.</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">
                    "Lumia delivered our e-commerce platform ahead of schedule. Their attention to detail and technical expertise exceeded our expectations."
                </p>
                <div class="flex text-yellow-400">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-medium">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">CTO, FinTech Global</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">
                    "The mobile app Lumia developed increased our user retention by 40%. Their team understands both technology and business outcomes."
                </p>
                <div class="flex text-yellow-400">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Amina Diallo" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-medium">Amina Diallo</h4>
                        <p class="text-gray-400 text-sm">Director, HealthPlus</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">
                    "From concept to launch, Lumia demonstrated professionalism and technical mastery. Our patient portal has revolutionized our services."
                </p>
                <div class="flex text-yellow-400">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 pt-8 border-t border-gray-800">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-white mb-2">50+</div>
                    <div class="text-gray-400">Projects Completed</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-white mb-2">100%</div>
                    <div class="text-gray-400">Client Satisfaction</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-white mb-2">15+</div>
                    <div class="text-gray-400">Industries Served</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-white mb-2">5</div>
                    <div class="text-gray-400">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>