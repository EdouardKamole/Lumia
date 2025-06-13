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
  <?php include"/includes/nav.php"; ?>
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
<script>
  // Pricing configuration (loaded from JSON)
const pricingConfig = <?php echo json_encode($pricingConfig); ?>;

// Current estimate data
let estimateData = {
    project_type: null,
    project_details: {},
    features: [],
    contact_info: {},
    calculated_total: 0
};

// Step navigation
function nextStep(step) {
    document.querySelector(`#step-${step-1}`).classList.add('hidden');
    document.querySelector(`#step-${step-1}`).classList.remove('active');
    document.querySelector(`#step-${step}`).classList.remove('hidden');
    document.querySelector(`#step-${step}`).classList.add('active');
    
    // Update progress bar
    document.getElementById('progress-bar').style.width = `${step * 25}%`;
    
    // Load dynamic content for this step
    if (step === 2) loadProjectDetails();
    if (step === 3) loadFeatures();
    if (step === 4) generateEstimateSummary();
}

// Load project details based on selected type
function loadProjectDetails() {
    const projectType = document.querySelector('input[name="project_type"]:checked').value;
    estimateData.project_type = projectType;
    
    let html = '';
    
    if (projectType === 'website') {
        html = `
            <h2 class="text-2xl font-semibold text-white mb-6">Website Details</h2>
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Website Type</label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        ${pricingConfig.website.types.map(type => `
                            <div class="project-detail-option">
                                <input type="radio" name="website_type" id="wt-${type.value}" value="${type.value}" 
                                       data-price="${type.price}" class="hidden peer" required
                                       onchange="updateEstimateData()">
                                <label for="wt-${type.value}" class="block p-4 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-secondary-light peer-checked:bg-gray-700/30 hover:border-gray-600 transition-all text-center">
                                    <h3 class="text-md font-medium text-white">${type.label}</h3>
                                    <p class="text-gray-400 text-sm mt-1">${type.description}</p>
                                    <p class="text-primary-light text-sm mt-2">+$${type.price}</p>
                                </label>
                            </div>
                        `).join('')}
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Number of Pages</label>
                    <select name="page_count" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary-light focus:border-transparent text-white"
                            onchange="updateEstimateData()">
                        ${[1, 2, 3, 4, 5, 6, 7, 8, 9, 10].map(count => `
                            <option value="${count}" data-base-price="${count * 100}" 
                                    data-additional="${count > 5 ? (count - 5) * 80 : 0}">
                                ${count} ${count === 1 ? 'page' : 'pages'} 
                                ($${count * 100}${count > 5 ? ` + $${(count - 5) * 80}` : ''})
                            </option>
                        `).join('')}
                        <option value="10+" data-base-price="1000" data-additional="0">10+ pages (Custom Quote)</option>
                    </select>
                </div>
            </div>
        `;
    } 
    else if (projectType === 'mobile-app') {
        html = `
            <h2 class="text-2xl font-semibold text-white mb-6">Mobile App Details</h2>
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Platform</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        ${pricingConfig['mobile-app'].platforms.map(platform => `
                            <div class="project-detail-option">
                                <input type="radio" name="platform" id="plat-${platform.value}" 
                                       value="${platform.value}" data-price="${platform.price}"
                                       class="hidden peer" required onchange="updateEstimateData()">
                                <label for="plat-${platform.value}" class="block p-4 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-secondary-light peer-checked:bg-gray-700/30 hover:border-gray-600 transition-all text-center">
                                    <h3 class="text-md font-medium text-white">${platform.label}</h3>
                                    <p class="text-gray-400 text-sm mt-1">${platform.description}</p>
                                    <p class="text-primary-light text-sm mt-2">+$${platform.price}</p>
                                </label>
                            </div>
                        `).join('')}
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Main Features</label>
                    <div class="space-y-3">
                        ${pricingConfig['mobile-app'].core_features.map(feature => `
                            <div class="flex items-center">
                                <input type="checkbox" name="core_features[]" id="cf-${feature.value}" 
                                       value="${feature.value}" data-price="${feature.price}"
                                       class="w-4 h-4 text-primary-light bg-gray-700 border-gray-600 rounded focus:ring-primary-light focus:ring-2"
                                       onchange="updateEstimateData()">
                                <label for="cf-${feature.value}" class="ml-2 text-sm text-gray-300">
                                    ${feature.label} <span class="text-primary-light text-xs">(+$${feature.price})</span>
                                </label>
                            </div>
                        `).join('')}
                    </div>
                </div>
            </div>
        `;
    }
    
    document.getElementById('dynamic-step-content').innerHTML = html;
    updateEstimateData();
}

// Load features based on project type
function loadFeatures() {
    const projectType = estimateData.project_type;
    let html = '';
    
    if (projectType === 'website') {
        html = `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                ${pricingConfig.website.features.map(feature => `
                    <div class="flex items-start p-4 border border-gray-700 rounded-lg hover:border-secondary-light transition-all">
                        <input type="checkbox" name="features[]" id="feat-${feature.value}" 
                               value="${feature.value}" data-price="${feature.price}"
                               class="mt-1 w-4 h-4 text-primary-light bg-gray-700 border-gray-600 rounded focus:ring-primary-light focus:ring-2"
                               onchange="updateEstimateData()">
                        <div class="ml-3">
                            <label for="feat-${feature.value}" class="block text-white font-medium">${feature.label}</label>
                            <p class="text-gray-400 text-sm mt-1">${feature.description}</p>
                            <p class="text-primary-light text-sm mt-2">+$${feature.price}</p>
                        </div>
                    </div>
                `).join('')}
            </div>
        `;
    } 
    else if (projectType === 'mobile-app') {
        html = `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                ${pricingConfig['mobile-app'].features.map(feature => `
                    <div class="flex items-start p-4 border border-gray-700 rounded-lg hover:border-secondary-light transition-all">
                        <input type="checkbox" name="features[]" id="feat-${feature.value}" 
                               value="${feature.value}" data-price="${feature.price}"
                               class="mt-1 w-4 h-4 text-primary-light bg-gray-700 border-gray-600 rounded focus:ring-primary-light focus:ring-2"
                               onchange="updateEstimateData()">
                        <div class="ml-3">
                            <label for="feat-${feature.value}" class="block text-white font-medium">${feature.label}</label>
                            <p class="text-gray-400 text-sm mt-1">${feature.description}</p>
                            <p class="text-primary-light text-sm mt-2">+$${feature.price}</p>
                        </div>
                    </div>
                `).join('')}
            </div>
        `;
    }
    
    document.getElementById('features-container').innerHTML = html;
    updateEstimateData();
}

// Update estimate data as user makes selections
function updateEstimateData() {
    const projectType = estimateData.project_type;
    if (!projectType) return;
    
    // Reset calculated total
    estimateData.calculated_total = 0;
    estimateData.project_details = {};
    estimateData.features = [];
    
    // Get base price
    const basePrice = pricingConfig[projectType].base;
    estimateData.calculated_total += basePrice;
    estimateData.project_details.base_price = basePrice;
    
    // Get project type specific details
    if (projectType === 'website') {
        // Website type
        const websiteType = document.querySelector('input[name="website_type"]:checked');
        if (websiteType) {
            const typePrice = parseFloat(websiteType.dataset.price) || 0;
            estimateData.calculated_total += typePrice;
            estimateData.project_details.website_type = {
                value: websiteType.value,
                price: typePrice
            };
        }
        
        // Page count
        const pageCount = document.querySelector('select[name="page_count"]');
        if (pageCount) {
            const selectedOption = pageCount.options[pageCount.selectedIndex];
            const basePagePrice = parseFloat(selectedOption.dataset.basePrice) || 0;
            const additionalPrice = parseFloat(selectedOption.dataset.additional) || 0;
            
            estimateData.calculated_total += basePagePrice + additionalPrice;
            estimateData.project_details.page_count = {
                value: pageCount.value,
                base_price: basePagePrice,
                additional_price: additionalPrice
            };
        }
    } 
    else if (projectType === 'mobile-app') {
        // Platform
        const platform = document.querySelector('input[name="platform"]:checked');
        if (platform) {
            const platformPrice = parseFloat(platform.dataset.price) || 0;
            estimateData.calculated_total += platformPrice;
            estimateData.project_details.platform = {
                value: platform.value,
                price: platformPrice
            };
        }
        
        // Core features
        const coreFeatures = document.querySelectorAll('input[name="core_features[]"]:checked');
        estimateData.project_details.core_features = [];
        
        coreFeatures.forEach(feature => {
            const featurePrice = parseFloat(feature.dataset.price) || 0;
            estimateData.calculated_total += featurePrice;
            estimateData.project_details.core_features.push({
                value: feature.value,
                price: featurePrice
            });
        });
    }
    
    // Additional features
    const features = document.querySelectorAll('input[name="features[]"]:checked');
    estimateData.features = [];
    
    features.forEach(feature => {
        const featurePrice = parseFloat(feature.dataset.price) || 0;
        estimateData.calculated_total += featurePrice;
        estimateData.features.push({
            value: feature.value,
            price: featurePrice
        });
    });
    
    // Update the estimate total display if we're on the summary step
    if (document.getElementById('step-4').classList.contains('active')) {
        document.getElementById('estimate-total').textContent = `$${estimateData.calculated_total.toLocaleString()}`;
    }
}

// Generate the estimate summary
function generateEstimateSummary() {
    updateEstimateData(); // Ensure we have latest data
    
    // Format currency
    const formatCurrency = amount => `$${parseFloat(amount).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    
    let summaryHtml = '';
    const projectType = estimateData.project_type;
    
    // Base Price
    summaryHtml += `
        <div class="flex justify-between py-3 border-b border-gray-700">
            <span class="text-gray-400">Base ${projectType === 'website' ? 'Website' : 'Mobile App'} Development</span>
            <span class="text-white">${formatCurrency(pricingConfig[projectType].base)}</span>
        </div>
    `;
    
    // Project Type Specific Costs
    if (projectType === 'website') {
        // Website Type
        if (estimateData.project_details.website_type) {
            summaryHtml += `
                <div class="flex justify-between py-3 border-b border-gray-700">
                    <span class="text-gray-400">${estimateData.project_details.website_type.value.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase())} Website</span>
                    <span class="text-white">+${formatCurrency(estimateData.project_details.website_type.price)}</span>
                </div>
            `;
        }
        
        // Page Count
        if (estimateData.project_details.page_count) {
            summaryHtml += `
                <div class="flex justify-between py-3 border-b border-gray-700">
                    <span class="text-gray-400">${estimateData.project_details.page_count.value} Pages</span>
                    <span class="text-white">${formatCurrency(estimateData.project_details.page_count.base_price + estimateData.project_details.page_count.additional_price)}</span>
                </div>
            `;
        }
    } 
    else if (projectType === 'mobile-app') {
        // Platform
        if (estimateData.project_details.platform) {
            summaryHtml += `
                <div class="flex justify-between py-3 border-b border-gray-700">
                    <span class="text-gray-400">${estimateData.project_details.platform.value.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase())} Platform</span>
                    <span class="text-white">+${formatCurrency(estimateData.project_details.platform.price)}</span>
                </div>
            `;
        }
        
        // Core Features
        if (estimateData.project_details.core_features && estimateData.project_details.core_features.length > 0) {
            summaryHtml += `<div class="py-3 border-b border-gray-700"><span class="text-gray-400">Core Features:</span></div>`;
            
            estimateData.project_details.core_features.forEach(feature => {
                summaryHtml += `
                    <div class="flex justify-between py-2 pl-4">
                        <span class="text-gray-400">• ${feature.value.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase())}</span>
                        <span class="text-white">+${formatCurrency(feature.price)}</span>
                    </div>
                `;
            });
        }
    }
    
    // Additional Features
    if (estimateData.features.length > 0) {
        summaryHtml += `<div class="py-3 border-b border-gray-700"><span class="text-gray-400">Additional Features:</span></div>`;
        
        estimateData.features.forEach(feature => {
            summaryHtml += `
                <div class="flex justify-between py-2 pl-4">
                    <span class="text-gray-400">• ${feature.value.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase())}</span>
                    <span class="text-white">+${formatCurrency(feature.price)}</span>
                </div>
            `;
        });
    }
    
    // Total
    summaryHtml += `
        <div class="flex justify-between items-center py-4 mt-4 border-t border-gray-700">
            <span class="font-medium text-white">Estimated Total:</span>
            <span id="estimate-total" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-light to-secondary-light">
                ${formatCurrency(estimateData.calculated_total)}
            </span>
        </div>
    `;
    
    document.getElementById('estimate-summary').innerHTML = summaryHtml;
}

// Form submission handler
document.getElementById('estimate-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Get form elements
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnSpinner = document.getElementById('btn-spinner');
    const formStatus = document.getElementById('form-status');
    
    // Show loading state
    submitBtn.disabled = true;
    btnText.textContent = 'Sending...';
    btnSpinner.classList.remove('hidden');
    formStatus.classList.add('hidden');
    
    try {
        // Collect all form data
        const formData = new FormData(this);
        estimateData.contact_info = Object.fromEntries(formData.entries());
        
        // Add metadata
        estimateData.timestamp = new Date().toISOString();
        estimateData.estimate_id = 'LUM-' + Math.random().toString(36).substr(2, 9).toUpperCase();
        
        // Submit via AJAX
        const response = await fetch(this.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(estimateData)
        });
        
        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Server responded with an error');
        }
        
        if (data.success) {
            // Success - redirect to thank you page
            window.location.href = `thank-you.html?estimate_id=${estimateData.estimate_id}`;
        } else {
            // Show error message from server
            showFormStatus(data.message || 'Submission failed. Please try again.', 'bg-red-500/20 text-red-400 border-red-400/30');
        }
    } catch (error) {
        console.error('Submission error:', error);
        showFormStatus(error.message || 'Network error occurred. Please check your connection and try again.', 'bg-red-500/20 text-red-400 border-red-400/30');
    } finally {
        // Reset button state
        submitBtn.disabled = false;
        btnText.textContent = 'Send Message';
        btnSpinner.classList.add('hidden');
    }
});

function showFormStatus(message, classes) {
    const formStatus = document.getElementById('form-status');
    formStatus.textContent = message;
    formStatus.className = `block mb-6 p-4 rounded-md border ${classes}`;
    formStatus.classList.remove('hidden');
    formStatus.scrollIntoView({ behavior: 'smooth', block: 'center' });
}
</script>
  <?php include"/includes/footer.php"; ?>
    </body>
    </html>