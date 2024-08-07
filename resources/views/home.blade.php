<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Películas y Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-800">Gestión de Películas y Categorías</h1>
        <div class="flex justify-center space-x-4 mb-6">
            <a href="{{ route('peliculas.index') }}" class="bg-black text-white px-4 py-2 rounded shadow hover:bg-gray-800">Ver Películas</a>
            <a href="{{ route('categorias.index') }}" class="bg-black text-white px-4 py-2 rounded shadow hover:bg-gray-800">Ver Categorías</a>
        </div>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('peliculas.create') }}" class="bg-black text-white px-4 py-2 rounded shadow hover:bg-gray-800">Agregar Película</a>
            <a href="{{ route('categorias.create') }}" class="bg-black text-white px-4 py-2 rounded shadow hover:bg-gray-800">Agregar Categoría</a>
        </div>
    </div>
</body>
</html>
