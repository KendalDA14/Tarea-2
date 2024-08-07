<!DOCTYPE html>
<html>
<head>
    <title>Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-900">Películas</h1>
        <div class="flex justify-center mb-6">
            <a href="{{ route('peliculas.create') }}" class="bg-black text-white font-semibold py-2 px-4 rounded-full hover:bg-gray-800 transition duration-300">Agregar Película</a>
        </div>
        <ul class="divide-y divide-gray-300">
            @foreach($peliculas as $pelicula)
                <li class="py-4">
                    <div class="text-lg font-semibold text-gray-700">{{ $pelicula->nombre }}</div>
                    <div class="text-sm text-gray-600">
                        ({{ $pelicula->año }}) - {{ $pelicula->estudio }} - Categoría: {{ $pelicula->categoria->nombre }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
