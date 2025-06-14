<!-- === CONTACT SECTION === -->
<section id="contact" class="py-20 bg-dark-light">
    <div class="container mx-auto px-5">
        <div class="max-w-4xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Touch</span>
                </h2>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Have a project in mind? Reach out and let's build something amazing together.
                </p>
            </div>

            <!-- Contact Form -->
            <form id="contact-form" action="https://formspree.io/f/mwpvegle" method="POST" class="bg-gray-800/50 rounded-xl p-8 border border-gray-700">
                <!-- Form Status Messages -->
                <div id="form-status" class="hidden mb-6 p-4 rounded-md"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary-light focus:border-transparent text-white placeholder-gray-400 transition-all duration-300">
                    </div>
                    
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary-light focus:border-transparent text-white placeholder-gray-400 transition-all duration-300">
                    </div>
                </div>
                
                <!-- Subject Field -->
                <div class="mb-6">
                    <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" required 
                           class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary-light focus:border-transparent text-white placeholder-gray-400 transition-all duration-300">
                </div>
                
                <!-- Message Field -->
                <div class="mb-8">
                    <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="5" required 
                              class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary-light focus:border-transparent text-white placeholder-gray-400 transition-all duration-300"></textarea>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" id="submit-btn" class="w-full px-6 py-4 bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark text-white font-medium rounded-lg transition-all duration-300 flex items-center justify-center">
                    <span id="btn-text">Send Message</span>
                    <svg id="btn-spinner" class="hidden ml-2 h-5 w-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
            
            <!-- Alternative Contact -->
            <div class="mt-12 text-center text-gray-400">
                <p>Or reach us directly at: <a href="mailto:contact@lumiatech.dev" class="text-secondary-light hover:underline">contact@lumiatech.dev</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Form Submission Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const formStatus = document.getElementById('form-status');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnSpinner = document.getElementById('btn-spinner');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        submitBtn.disabled = true;
        btnText.textContent = 'Sending...';
        btnSpinner.classList.remove('hidden');
        formStatus.classList.add('hidden');
        
        // Form data
        const formData = new FormData(form);
        
        // AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                // Success message
                form.reset();
                showFormStatus('Your message has been sent successfully! We\'ll get back to you soon.', 'bg-green-500/20 text-green-400 border-green-400/30');
            } else {
                // Error message
                showFormStatus('Oops! There was a problem sending your message. Please try again later.', 'bg-red-500/20 text-red-400 border-red-400/30');
            }
        })
        .catch(error => {
            // Network error
            showFormStatus('Network error occurred. Please check your connection and try again.', 'bg-red-500/20 text-red-400 border-red-400/30');
        })
        .finally(() => {
            // Reset button state
            submitBtn.disabled = false;
            btnText.textContent = 'Send Message';
            btnSpinner.classList.add('hidden');
        });
    });
    
    function showFormStatus(message, classes) {
        formStatus.textContent = message;
        formStatus.className = `block mb-6 p-4 rounded-md border ${classes}`;
        formStatus.classList.remove('hidden');
        
        // Scroll to status message
        formStatus.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>

<style>
    /* Form focus styles */
    input:focus, textarea:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(124, 58, 237, 0.5);
    }
    
    /* Smooth transitions */
    #form-status {
        transition: all 0.3s ease;
    }
</style>