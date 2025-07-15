<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventori</title>
    @vite('resources/css/app.css')
</head>

<body class="relative min-h-screen overflow-hidden">
    <!-- Background gradient diagonal -->
    <div class="absolute inset-0 transform -skew-y-12 origin-top-left bg-gradient-to-r from-blue-700 to-purple-400"></div>

    <!-- Optional overlay for softer look -->
    <div class="absolute inset-0 bg-white opacity-20"></div>

    <!-- Content -->
    <div class="relative flex items-center justify-center min-h-screen px-4">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
