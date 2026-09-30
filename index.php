<?php
echo "<h1>Hello from PHP on Kubernetes!</h1>";
echo "<p>Running on hostname: " . gethostname() . "</p>";
echo "<p>Server IP: " . $_SERVER['SERVER_ADDR'] ?? 'Local' . "</p>";
?>