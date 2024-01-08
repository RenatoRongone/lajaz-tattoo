<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <title>Tattoo-Studio</title>
    <link rel="shortcut icon" href="/media/favicon.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    {{$slot}}
    <x-footer/>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>