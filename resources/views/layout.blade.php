<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Blog Frameworks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-200">
    @section('sidebar')
    <h2>Sidebar do Layout</h2>
    @show

    <main>
        @yield('conteudo')
    </main>

    
</body>
</html>