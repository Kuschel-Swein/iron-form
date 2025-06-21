<?php
$message = $_GET['message'] ?? 'Unknown error';
?>

<h1>Error</h1>

<p><?= htmlspecialchars($message) ?></p>