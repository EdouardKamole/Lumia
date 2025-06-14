<!-- === SERVICES SECTION === -->
<section class="bg-dark-light py-20">
    <div class="container mx-auto px-5">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Expertise</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                We deliver tailored solutions that drive business growth and digital transformation.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gradient-to-br from-primary-light/20 to-secondary-light/20 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Web Development</h3>
                <p class="text-gray-300">
                    Custom websites and web applications built for performance, scalability, and user experience.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gradient-to-br from-primary-light/20 to-secondary-light/20 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Mobile Apps</h3>
                <p class="text-gray-300">
                    Cross-platform mobile applications that deliver seamless experiences on all devices.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gradient-to-br from-primary-light/20 to-secondary-light/20 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">API Development</h3>
                <p class="text-gray-300">
                    Robust RESTful APIs that power your applications and enable seamless integrations.
                </p>
            </div>
        </div>
<?php
// Check if the current page is 'services.php'
if (basename($_SERVER['PHP_SELF']) == 'services.php') {
    // Define six services
    $services = [
        [
            'title' => 'UI/UX Design',
            'description' => 'User-centered designs that provide intuitive and engaging user experiences.',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />'
        ],
        [
            'title' => 'E-commerce Solutions',
            'description' => 'Robust and scalable e-commerce platforms to grow your online business.',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 00.9 1.3H19M7 13L5.4 7M17 17a1 1 0 11-2 0 1 1 0 012 0zm-8 0a1 1 0 11-2 0 1 1 0 012 0z" />'
        ],
        [
            'title' => 'SEO Optimization',
            'description' => 'Boost your search engine rankings with tailored SEO strategies.',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 12h2m-2 4h2m-6-4h.01M6 16h.01M6 12h.01M17 12h.01M17 16h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />'
        ],
        [
            'title' => 'Cybersecurity',
            'description' => 'Protect your systems and data with industry-grade security solutions.',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l4 4H8l4-4zm6 8v8a2 2 0 01-2 2H8a2 2 0 01-2-2v-8m12 0H6" />'
        ],
        [
            'title' => 'Cloud Deployment',
            'description' => 'Deploy and manage applications efficiently on cloud platforms.',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h10a4 4 0 100-8 4.01 4.01 0 00-7.9-1H7a4 4 0 00-4 4z" />'
        ],
        [
            'title' => 'System Integration',
            'description' => 'Seamlessly integrate multiple systems and services into one unified solution.',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h2M7 7h.01M17 17h.01M7 17h.01M17 7h.01" />'
        ]
    ];
    ?>

    <!-- Additional Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
        <?php foreach ($services as $service) : ?>
            <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 hover:border-secondary-light transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gradient-to-br from-primary-light/20 to-secondary-light/20 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <?= $service['icon'] ?>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3"><?= $service['title'] ?></h3>
                <p class="text-gray-300"><?= $service['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

<?php
}
?>
   <?php
if (basename($_SERVER['PHP_SELF']) != 'services.php') {
?>
    <!-- CTA -->
    <div class="text-center mt-16">
        <a href="services.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark">
            Explore All Services
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