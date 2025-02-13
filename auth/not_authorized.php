<?php
require __DIR__ . '/../config/env.php';
include  __DIR__ . '/../includes/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Authorized</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-2xl font-bold text-red-600 mb-4">Not Authorized</h1>
        <p class="text-gray-700 mb-6">You do not have permission to access this page.</p>
        <a href="<?php echo BASE_URL ?>" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
            Back to Home
        </a>
    </div>
</body>
</html>