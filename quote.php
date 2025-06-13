<?php

$pricingConfig = json_decode(file_get_contents('pricing-config.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <title>Project Cost Estimator | Lumia</title>
</head>
<body class="bg-black text-gray-100">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-2">Project Cost Estimator</h1>
        <p class="text-lg text-gray-400 text-center mb-12 max-w-2xl mx-auto">
            Get an instant estimate for your project. Answer a few questions and we'll calculate the cost.
        </p>

        <form id="estimate-form" action="save-quote.php" method="POST" class="max-w-3xl mx-auto bg-gray-800/50 rounded-xl p-6 md:p-8 border border-gray-700">
            <!-- Progress tracker -->
            <div class="mb-8">
                <div class="flex justify-between mb-2 text-sm text-gray-400">
                    <span>Project Type</span>
                    <span>Details</span>
                    <span>Features</span>
                    <span>Contact</span>
                </div>
                <div class="w-full bg-gray-700 rounded-full h-2.5">
                    <div id="progress-bar" class="bg-gradient-to-r from-primary-light to-secondary-light h-2.5 rounded-full" style="width: 25%"></div>
                </div>
            </div>

            <!-- Step 1: Project Type -->
            <div id="step-1" class="estimate-step active">
                <h2 class="text-2xl font-semibold text-white mb-6">What type of project do you need?</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="project-type-option">
                        <input type="radio" name="project_type" id="website" value="website" class="hidden peer" required>
                        <label for="website" class="block p-6 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-secondary-light peer-checked:bg-gray-700/30 hover:border-gray-600 transition-all">
                            <div class="flex items-center">
                                <svg class="w-8 h-8 text-primary-light mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-medium text-white">Website</h3>
                                    <p class="text-gray-400 text-sm">From $<?= $pricingConfig['website']['base'] ?>+</p>
                                </div>
                            </div>
                        </label>
                    </div>
                    
                    <div class="project-type-option">
                        <input type="radio" name="project_type" id="mobile-app" value="mobile-app" class="hidden peer" required>
                        <label for="mobile-app" class="block p-6 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-secondary-light peer-checked:bg-gray-700/30 hover:border-gray-600 transition-all">
                            <div class="flex items-center">
                                <svg class="w-8 h-8 text-primary-light mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-medium text-white">Mobile App</h3>
                                    <p class="text-gray-400 text-sm">From $<?= $pricingConfig['mobile-app']['base'] ?>+</p>
                                </div>
                            </div>
                        </label>
                    </div>
                    
                    <!-- Add more project types as needed -->
                </div>
                
                <div class="flex justify-end mt-8">
                    <button type="button" onclick="nextStep(2)" class="px-6 py-3 bg-gradient-to-r from-primary-light to-secondary-light text-white font-medium rounded-lg hover:from-primary-dark hover:to-secondary-dark transition-all">
                        Next: Project Details
                    </button>
                </div>
            </div>

            <!-- Step 2: Project Details (Dynamic based on project type) -->
            <div id="step-2" class="estimate-step hidden">
                <!-- This will be populated by JavaScript based on project type -->
                <div id="dynamic-step-content"></div>
                
                <div class="flex justify-between mt-8">
                    <button type="button" onclick="prevStep(1)" class="px-6 py-3 border border-gray-600 text-white font-medium rounded-lg hover:bg-gray-700/30 transition-all">
                        Back
                    </button>
                    <button type="button" onclick="nextStep(3)" class="px-6 py-3 bg-gradient-to-r from-primary-light to-secondary-light text-white font-medium rounded-lg hover:from-primary-dark hover:to-secondary-dark transition-all">
                        Next: Features
                    </button>
                </div>
            </div>

            <!-- Step 3: Additional Features -->
            <div id="step-3" class="estimate-step hidden">
                <h2 class="text-2xl font-semibold text-white mb-6">Select additional features</h2>
                
                <div id="features-container" class="space-y-4">
                    <!-- Features will be loaded dynamically based on project type -->
                </div>
                
                <div class="flex justify-between mt-8">
                    <button type="button" onclick="prevStep(2)" class="px-6 py-3 border border-gray-600 text-white font-medium rounded-lg hover:bg-gray-700/30 transition-all">
                        Back
                    </button>
                    <button type="button" onclick="nextStep(4)" class="px-6 py-3 bg-gradient-to-r from-primary-light to-secondary-light text-white font-medium rounded-lg hover:from-primary-dark hover:to-secondary-dark transition-all">
                        Next: Contact Info
                    </button>
                </div>
            </div>

            <!-- Step 4: Contact Information & Estimate Summary -->
            <div id="step-4" class="estimate-step hidden">
                <h2 class="text-2xl font-semibold text-white mb-6">Your Project Estimate</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Estimate Summary -->
                    <div class="bg-gray-800/30 border border-gray-700 rounded-lg p-6">
                        <h3 class="text-lg font-medium text-white mb-4">Estimate Summary</h3>
                        <div id="estimate-summary" class="space-y-4">
                            <!-- Will be populated by JavaScript -->
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-700">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-white">Estimated Total:</span>
                                <span id="estimate-total" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-light to-secondary-light">$0</span>
                            </div>
                            <p class="text-gray-400 text-sm mt-2">This is an estimate. Final price may vary based on project requirements.</p>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div>
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Full Name *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary-light focus:border-transparent text-white placeholder-gray-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary-light focus:border-transparent text-white placeholder-gray-500">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary-light focus:border-transparent text-white placeholder-gray-500">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Additional Notes</label>
                                <textarea id="message" name="message" rows="3" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary-light focus:border-transparent text-white placeholder-gray-500"></textarea>
                            </div>
                        </div>
                        
                        <div class="flex justify-between mt-8">
                            <button type="button" onclick="prevStep(3)" class="px-6 py-3 border border-gray-600 text-white font-medium rounded-lg hover:bg-gray-700/30 transition-all">
                                Back
                            </button>
                            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-primary-light to-secondary-light text-white font-medium rounded-lg hover:from-primary-dark hover:to-secondary-dark transition-all flex items-center">
                                <span>Submit & Get Quote</span>
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </body>
    </html>