<?php
// Database connection using PDO
$host = '0.0.0.0:3360'; // or 'localhost'
$db = 'lumia';
$user = 'root';
$pass = 'root'; // use your password if applicable
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create PDO connection
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch projects from the database
try {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
    $projects = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching projects: " . $e->getMessage());
}
?>

<!-- Portfolio Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($projects as $project): ?>
        <div class="group relative overflow-hidden rounded-xl">
            <div class="h-64 bg-gray-800 overflow-hidden">
                <img src="<?php echo htmlspecialchars($project['image']); ?>" 
                     alt="<?php echo htmlspecialchars($project['title']); ?>" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-dark-light to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                <div>
                    <h3 class="text-xl font-semibold text-white mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
                    <p class="text-gray-300 mb-4"><?php echo htmlspecialchars($project['description']); ?></p>
                    <a href="<?php echo htmlspecialchars($project['link']); ?>" class="text-secondary-light hover:text-secondary-dark font-medium flex items-center">
                        View Project
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>