<!-- === CLEAN & RESPONSIVE HERO SECTION === -->
<section class="relative bg-dark-DEFAULT overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 lg:py-36">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column (Text Content) -->
            <div class="order-2 lg:order-1 text-center lg:text-left">
                <!-- Headline -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    <span class="text-white">We Build</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light"> Scalable Tech</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-lg mx-auto lg:mx-0">
                    Lumia crafts high-performance web & mobile applications with clean code and modern architecture.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#contact" class="px-6 py-3 bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark text-white font-medium rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                        Start a Project
                    </a>
                    <a href="#work" class="px-6 py-3 border border-gray-600 hover:border-secondary-light text-white font-medium rounded-lg transition-all duration-300 hover:bg-gray-800/30">
                        View Our Work
                    </a>
                </div>
                
                <!-- Tech Stack Badges -->
                <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-3">
                    <span class="px-3 py-1 bg-gray-800/50 text-gray-300 rounded-full text-sm flex items-center">
                        <span class="w-2 h-2 rounded-full bg-blue-500 mr-2"></span>
                        PHP
                    </span>
                    <span class="px-3 py-1 bg-gray-800/50 text-gray-300 rounded-full text-sm flex items-center">
                        <span class="w-2 h-2 rounded-full bg-yellow-500 mr-2"></span>
                        JavaScript
                    </span>
                    <span class="px-3 py-1 bg-gray-800/50 text-gray-300 rounded-full text-sm flex items-center">
                        <span class="w-2 h-2 rounded-full bg-purple-500 mr-2"></span>
                        Tailwind CSS
                    </span>
                    <span class="px-3 py-1 bg-gray-800/50 text-gray-300 rounded-full text-sm flex items-center">
                        <span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>
                        MySQL
                    </span>
                </div>
            </div>
            
            <!-- Right Column (Illustration/Image) -->
            <div class="order-1 lg:order-2">
                <!-- SVG Code Illustration (Replace with your own image if needed) -->
                <div class="relative max-w-lg mx-auto lg:mx-0">
                    <div class="relative bg-gray-800/50 rounded-xl p-6 border border-gray-700 shadow-lg">
                        <!-- Code snippet -->
                        <div class="font-mono text-sm md:text-base">
                            <div class="text-blue-400 mb-4">// Secure API Endpoint</div>
                            <div class="text-purple-400">router</div><div class="text-gray-300">.</div><div class="text-yellow-400">post</div><div class="text-gray-300">(</div><div class="text-green-400">'/auth/login'</div><div class="text-gray-300">, (</div><div class="text-blue-400">req</div><div class="text-gray-300">, </div><div class="text-blue-400">res</div><div class="text-gray-300">) => {</div>
                            <div class="text-gray-300 ml-4"><div class="text-purple-400">const</div> { <div class="text-blue-400">email</div>, <div class="text-blue-400">password</div> } = <div class="text-blue-400">req</div>.<div class="text-yellow-400">body</div>;</div>
                            <div class="text-gray-300 ml-4"><div class="text-purple-400">const</div> <div class="text-blue-400">user</div> = <div class="text-purple-400">await</div> <div class="text-blue-400">User</div>.<div class="text-yellow-400">findOne</div>({ <div class="text-blue-400">email</div> });</div>
                            <div class="text-gray-300 ml-4"><div class="text-purple-400">if</div> (<div class="text-gray-300">!</div><div class="text-blue-400">user</div>) <div class="text-purple-400">return</div> <div class="text-yellow-400">res</div>.<div class="text-yellow-400">status</div>(<div class="text-red-400">401</div>).<div class="text-yellow-400">json</div>({ <div class="text-blue-400">error</div>: <div class="text-green-400">'Invalid credentials'</div> });</div>
                            <div class="text-gray-300">});</div>
                        </div>
                    </div>
                    
                    <!-- Floating elements (optional) -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-primary-light/10 rounded-full backdrop-blur-sm border border-primary-light/20"></div>
                    <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-secondary-light/10 rounded-full backdrop-blur-sm border border-secondary-light/20"></div>
                </div>
            </div>
        </div>
    </div>
</section>