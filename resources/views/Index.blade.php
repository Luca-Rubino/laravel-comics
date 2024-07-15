<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    <title>laravel-comics-Home</title>
</head>

<body>
<h1>Home</h1>

@include('component.header')
@include('component.main')
@include('component.footer')


</body>

</html>