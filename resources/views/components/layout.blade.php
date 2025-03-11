<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Parisienne&display=swap" rel="stylesheet">
    @vite('resources/css/styles.css')
    <title>Document</title>
</head>
<body>

@if (session('status'))
    <div class="alert">{{ session('status') }}</div>
@endif

{{ $slot }}
    
</body>
</html>