<!-- === PORTFOLIO SECTION === -->
<section class="py-20 bg-black">
    <div class="container mx-auto px-5">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Works</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                See how we've helped businesses transform through technology.
            </p>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group relative overflow-hidden rounded-xl">
                <div class="h-64 bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Project 1" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark-light to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">E-Commerce Platform</h3>
                        <p class="text-gray-300 mb-4">Custom online store with payment integration</p>
                        <a href="#" class="text-secondary-light hover:text-secondary-dark font-medium flex items-center">
                            View Project
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group relative overflow-hidden rounded-xl">
                <div class="h-64 bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Project 2" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark-light to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">Mobile Banking App</h3>
                        <p class="text-gray-300 mb-4">Secure financial application with biometric auth</p>
                        <a href="#" class="text-secondary-light hover:text-secondary-dark font-medium flex items-center">
                            View Project
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group relative overflow-hidden rounded-xl">
                <div class="h-64 bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Project 3" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark-light to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">SaaS Dashboard</h3>
                        <p class="text-gray-300 mb-4">Analytics platform with real-time data</p>
                        <a href="#" class="text-secondary-light hover:text-secondary-dark font-medium flex items-center">
                            View Project
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

   <?php
// Show this CTA only if the current page is NOT services.php
if (basename($_SERVER['PHP_SELF']) != 'projects.php') {
?>
    <!-- CTA -->
    <div class="text-center mt-16">
        <a href="services.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark">
            View all Projects
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
<?php
}
?>
    </div>
</section>