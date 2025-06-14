<?php
// Fetch projects from the database
try {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
    $projects = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching projects: " . $e->getMessage());
}

// Limit projects to 3 if not on projects.php
$page = basename($_SERVER['PHP_SELF']);
if ($page !== 'projects.php') {
    $projects = array_slice($projects, 0, 3);
}
?>

<!-- Portfolio Section -->
<section class="bg-dark-light py-16 px-4">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Projects</span>
        </h2>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            Explore some of the innovative and impactful projects we've successfully delivered for businesses and individuals.
        </p>
    </div>

    <!-- Portfolio Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php if (!empty($projects)): ?>
            <?php foreach ($projects as $project): ?>
                <div class="group relative overflow-hidden rounded-2xl shadow-md border border-gray-800 bg-gray-900 hover:shadow-xl transition-all duration-500">
                    <div class="h-64 bg-gray-800 overflow-hidden">
                        <?php if (!empty($project['image_url'])): ?>
                            <img src="<?php echo htmlspecialchars($project['image_url']); ?>" 
                                 alt="<?php echo htmlspecialchars($project['title']); ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center text-gray-500 text-lg">
                                No Image Available
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-semibold text-white mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="text-gray-300 mb-4"><?php echo htmlspecialchars($project['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($project['project_link']); ?>" target="_blank"
                               class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium transition-colors duration-300">
                                View Project
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-span-full text-center text-gray-400 text-xl py-10">
                No projects available at the moment.
            </div>
        <?php endif; ?>
    </div>
       <?php
if (basename($_SERVER['PHP_SELF']) != 'projects.php') {
?>
    <!-- CTA -->
    <div class="text-center mt-16">
        <a href="projects.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark">
            Explore All Projects
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
<?php
}
?>
</section>