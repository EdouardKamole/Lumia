<!-- === TECH STACK SECTION === -->
<section class="py-20 bg-black">
    <div class="container mx-auto px-5">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Technology Stack</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                We use modern, proven technologies to build robust and scalable solutions.
            </p>
        </div>

        <!-- Tech Stack Tabs -->
        <div class="max-w-4xl mx-auto">
            <!-- Tab Navigation -->
            <div class="flex flex-wrap justify-center gap-2 mb-10">
                <button class="tech-tab-btn active px-4 py-2 rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light" data-tab="frontend">
                    Frontend
                </button>
                <button class="tech-tab-btn px-4 py-2 rounded-md text-gray-300 hover:text-white bg-gray-800 hover:bg-gray-700" data-tab="backend">
                    Backend
                </button>
                <button class="tech-tab-btn px-4 py-2 rounded-md text-gray-300 hover:text-white bg-gray-800 hover:bg-gray-700" data-tab="database">
                    Database
                </button>
                <button class="tech-tab-btn px-4 py-2 rounded-md text-gray-300 hover:text-white bg-gray-800 hover:bg-gray-700" data-tab="devops">
                    DevOps
                </button>
            </div>

            <!-- Tab Content -->
            <div class="bg-gray-800/50 rounded-xl p-6 md:p-8 border border-gray-700">
                <!-- Frontend Content (Default Visible) -->
                <div class="tech-tab-content active" id="frontend">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        <!-- Tech Item 1 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">React</span>
                        </div>
                        
                        <!-- Tech Item 2 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">Vue.js</span>
                        </div>
                        
                        <!-- Tech Item 3 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0QwwF1IzPG_q-9lkX8hQUjBXVfu1B_4RqsnAfUscUKpexaup6T6BwkVU&s" alt="Tailwind" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">Tailwind CSS</span>
                        </div>
                        
                        <!-- Tech Item 4 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://api.iconify.design/logos:typescript-icon.svg" alt="TypeScript" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">TypeScript</span>
                        </div>
                    </div>
                </div>

                <!-- Backend Content (Hidden by Default) -->
                <div class="tech-tab-content hidden" id="backend">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        <!-- Tech Item 1 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">PHP</span>
                        </div>
                        
                        <!-- Tech Item 2 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">Node.js</span>
                        </div>
                        
                        <!-- Tech Item 3 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Laravel" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">Laravel</span>
                        </div>
                        
                        <!-- Tech Item 4 -->
                        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" alt="Express" class="w-full h-full">
                            </div>
                            <span class="text-white font-medium">Express</span>
                        </div>
                    </div>
                </div>

<!-- Database Content -->
<div class="tech-tab-content hidden" id="database">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        <!-- MySQL -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-full h-full">
            </div>
            <span class="text-white font-medium">MySQL</span>
        </div>
        
        <!-- PostgreSQL -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="w-full h-full">
            </div>
            <span class="text-white font-medium">PostgreSQL</span>
        </div>
        
        <!-- MongoDB -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="w-full h-full">
            </div>
            <span class="text-white font-medium">MongoDB</span>
        </div>
        
        <!-- Redis -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/redis/redis-original.svg" alt="Redis" class="w-full h-full">
            </div>
            <span class="text-white font-medium">Redis</span>
        </div>
        
        <!-- SQLite -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" alt="SQLite" class="w-full h-full">
            </div>
            <span class="text-white font-medium">SQLite</span>
        </div>
        
        <!-- Firebase -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" alt="Firebase" class="w-full h-full">
            </div>
            <span class="text-white font-medium">Firebase</span>
        </div>
    </div>
</div>

<!-- DevOps Content -->
<div class="tech-tab-content hidden" id="devops">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        <!-- Docker -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="w-full h-full">
            </div>
            <span class="text-white font-medium">Docker</span>
        </div>
        
        <!-- Kubernetes -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg" alt="Kubernetes" class="w-full h-full">
            </div>
            <span class="text-white font-medium">Kubernetes</span>
        </div>
        
        <!-- AWS -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg" alt="AWS" class="w-full h-full">
            </div>
            <span class="text-white font-medium">AWS</span>
        </div>
        
        <!-- Nginx -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nginx/nginx-original.svg" alt="Nginx" class="w-full h-full">
            </div>
            <span class="text-white font-medium">Nginx</span>
        </div>
        
        <!-- GitHub Actions -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub Actions" class="w-full h-full">
            </div>
            <span class="text-white font-medium">GitHub Actions</span>
        </div>
        
        <!-- Terraform -->
        <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
            <div class="w-16 h-16 mb-3 flex items-center justify-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/terraform/terraform-original.svg" alt="Terraform" class="w-full h-full">
            </div>
            <span class="text-white font-medium">Terraform</span>
        </div>
    </div>
</div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="#contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark">
                Discuss Your Tech Needs
                <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    // Tab functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tech-tab-btn');
        const tabContents = document.querySelectorAll('.tech-tab-content');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabButtons.forEach(btn => btn.classList.remove('active', 'bg-gradient-to-r', 'from-primary-light', 'to-secondary-light'));
                tabButtons.forEach(btn => btn.classList.add('text-gray-300', 'bg-gray-800', 'hover:bg-gray-700', 'hover:text-white'));
                tabContents.forEach(content => content.classList.add('hidden'));
                
                // Add active class to clicked button
                button.classList.add('active', 'bg-gradient-to-r', 'from-primary-light', 'to-secondary-light');
                button.classList.remove('text-gray-300', 'bg-gray-800', 'hover:bg-gray-700', 'hover:text-white');
                
                // Show corresponding content
                const tabId = button.getAttribute('data-tab');
                document.getElementById(tabId).classList.remove('hidden');
            });
        });
    });
</script>