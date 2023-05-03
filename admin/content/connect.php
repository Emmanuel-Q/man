<?php
require_once 'config.php';

// Define database table names
define('TABLE_PAGES', 'pages');
define('TABLE_CHANGES', 'logs');

// Retrieve page content from database
$pageId = 1; 
$sql = "SELECT * FROM " . TABLE_PAGES . " WHERE id = $pageId";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $pageData = $result->fetch_assoc();
} else {
    die("Page not found");
}

?>








