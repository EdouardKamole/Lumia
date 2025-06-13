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
    </body>
    </html>