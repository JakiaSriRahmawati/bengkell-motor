<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satoshi:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body>

<div class="container">
    @for ($i = 0; $i < 6; $i++)
    <img src="{{ is_array($data['images']) ? $data['images'][0] : $data['images'] }}" class="" alt="Image">
    @endfor
</div>

</body>
</html>

 