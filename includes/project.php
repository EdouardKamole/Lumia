<?php
// Fetch projects from the database
try {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
    $projects = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching projects: " . $e->getMessage());
}

// Limit to 3 if not on projects.php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage !== 'projects.php') {
    $projects = array_slice($projects, 0, 3);
}
?>

