<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumia - Tech Solutions for Web & Mobile</title>
    <meta name="description" content="Lumia creates cutting-edge web and mobile applications with innovative technology solutions">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Configuration (optional) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#6366f1',  // indigo-500
                            DEFAULT: '#4f46e5',  // indigo-600
                            dark: '#4338ca',  // indigo-700
                        },
                        secondary: {
                            light: '#8b5cf6',  // violet-500
                            DEFAULT: '#7c3aed',  // violet-600
                            dark: '#6d28d9',  // violet-700
                        },
                        dark: {
                            DEFAULT: '#1e1b4b',  // indigo-950
                            light: '#312e81',  // indigo-900
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS (optional) -->
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        /* Custom glow effect */
        .glow {
            text-shadow: 0 0 10px rgba(124, 58, 237, 0.7);
        }
    </style>
</head>
<body class="bg-dark-DEFAULT text-gray-100 min-h-screen">
<?php include './includes/nav.php';?>
<!--Hero section-->
<?php include './includes/hero.php';?>
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

        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="#contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark">
                Explore All Services
                <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>
</body>
</html>