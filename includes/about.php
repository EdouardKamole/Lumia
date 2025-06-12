<!-- === ABOUT US SECTION === -->
<section class="py-20 bg-black">
    <div class="container mx-auto px-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column (Image) -->
            <div class="order-2 lg:order-1">
                <div class="relative rounded-xl overflow-hidden border border-gray-700">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Lumia Team" 
                         class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-light/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <div class="flex items-center">
                            <div class="flex -space-x-2">
                                <?php for ($i = 1; $i <= 4; $i++): ?>
                                    <img src="https://randomuser.me/api/portraits/<?= rand(0,1) ? 'men' : 'women' ?>/<?= rand(1,99) ?>.jpg" 
                                         alt="Team member" 
                                         class="w-10 h-10 rounded-full border-2 border-gray-800">
                                <?php endfor; ?>
                            </div>
                            <div class="ml-4">
                                <div class="text-white font-medium">Our Team</div>
                                <div class="text-gray-300 text-sm">4+ years working together</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column (Content) -->
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Lumia</span>
                </h2>
                
                <div class="space-y-6">
                    <p class="text-gray-300">
                        Founded in 2022, Lumia is a passionate team of developers, designers, and problem-solvers dedicated to building exceptional digital experiences.
                    </p>
                    
                    <p class="text-gray-300">
                        We specialize in creating custom web and mobile applications that drive business growth, using modern technologies like PHP, JavaScript, and Tailwind CSS.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <!-- Stat 1 -->
                        <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700">
                            <div class="text-3xl font-bold text-white mb-1">50+</div>
                            <div class="text-gray-400 text-sm">Projects Completed</div>
                        </div>
                        
                        <!-- Stat 2 -->
                        <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700">
                            <div class="text-3xl font-bold text-white mb-1">100%</div>
                            <div class="text-gray-400 text-sm">Client Satisfaction</div>
                        </div>
                    </div>
                    
                    <!-- Values List -->
                    <div class="mt-8">
                        <h4 class="text-white font-medium mb-4">Our Core Values</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary-light mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-300">Quality code that stands the test of time</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary-light mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-300">Transparent communication</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary-light mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-300">Continuous learning and improvement</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- CTA -->
                    <div class="mt-8">
                        <a href="/contact.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark">
                            Get a Quote Now
                            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>