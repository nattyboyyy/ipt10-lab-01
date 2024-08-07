<?php
$messages = [
    'Welcome to IPT10',
    'Добро пожаловать в IPT10',
    'Bienvenue sur IPT10',
    'Maligayang  Pagsilip sa IPT10',
];

shuffle($messages);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 - Integrative Programming and Technologies</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="h-screen bg-white flex items-center justify-center font-sans text-gray-700" style="font-family: 'Jost', sans-serif">
    <div class="font-medium items-center text-center flex flex-col justify-center h-full">
        <div class="flex flex-col justify-center items-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlbuApWVKyyL6VXeoQne7nxZ-Tm5GH_WJrkA&s" alt="PSB Logo + Text" class="h-32">

            <h1 style="font-size: 2rem;" class="text-gray-700"><?php echo array_pop($messages); ?>

            <p class="mb-6 font-semibold">It looks like you're all set and ready for development.</p>

            <div class="p-2 bg-indigo-800 text-white rounded">🐘 PHP v<?php echo PHP_VERSION; ?></div>
        </div>
    </div>
</div>
</body>
</html>
