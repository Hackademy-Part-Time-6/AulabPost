<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Aulab Post'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar />
    {{$slot}}
    <x-footer />
    
</body>
</html>