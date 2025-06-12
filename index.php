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
<!-- Lumia Tech Navbar - Enhanced Mobile Version -->
<nav class="bg-dark-light/90 backdrop-blur-md border-b border-secondary-dark/20 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center space-x-3 group">
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary-light to-secondary-light flex items-center justify-center transform group-hover:rotate-12 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-light to-secondary-light tracking-tight">LUMIA</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <?php
                $navItems = [
                    'Home' => 'index.php',
                    'Services' => 'services.php',
                    'Work' => 'portfolio.php',
                    'About' => 'about.php',
                    'Contact' => 'contact.php'
                ];
                
                $currentPage = basename($_SERVER['PHP_SELF']);
                
                foreach ($navItems as $name => $link) {
                    $isActive = ($currentPage === $link) ? 'text-secondary-light font-medium' : 'text-gray-300 hover:text-white';
                    echo "<a href='$link' class='px-3 py-2 rounded-md text-sm $isActive transition-colors duration-300 flex items-center'>
                            <span class='relative'>
                                $name
                                ".($isActive ? "<span class='absolute -bottom-1 left-0 w-full h-0.5 bg-secondary-light animate-pulse'></span>" : "")."
                            </span>
                          </a>";
                }
                ?>
            </div>

            <!-- CTAs and Mobile Menu Button -->
            <div class="flex items-center space-x-3">
                <a href="get-quote.php" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark shadow-lg hover:shadow-secondary-light/30 transition-all duration-300">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                <!-- Enhanced Mobile menu button -->
                <button @click="isOpen = !isOpen" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary-light">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!isOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="isOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Enhanced Mobile Menu with Alpine.js -->
    <div x-data="{ isOpen: false }" 
         x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="md:hidden absolute w-full bg-dark-light shadow-lg rounded-b-lg origin-top-right right-0 left-0 z-40"
         style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <?php
            foreach ($navItems as $name => $link) {
                $isActive = ($currentPage === $link) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                echo "<a href='$link' @click='isOpen = false' class='block px-3 py-3 rounded-md text-base font-medium $isActive transition-colors duration-300 border-b border-gray-800 last:border-b-0'>
                        <div class='flex items-center'>
                            <span class='mr-2'>$name</span>
                            ".($isActive ? "<span class='w-2 h-2 rounded-full bg-secondary-light animate-pulse'></span>" : "")."
                        </div>
                      </a>";
            }
            ?>
            <a href="get-quote.php" @click='isOpen = false' class="block w-full text-center px-3 py-3 rounded-md text-base font-medium text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark mt-2 mb-2">
                Get Started
                <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</nav>

<!-- Alpine.js for enhanced interactivity -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>