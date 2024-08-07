<!DOCTYPE html>
<html>
<head>
    <title>Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-900">Categorías</h1>
        <div class="flex justify-center mb-6">
            <a href="{{ route('categorias.create') }}" class="bg-black text-white font-semibold py-2 px-4 rounded-full hover:bg-gray-800 transition duration-300">Agregar Categoría</a>
        </div>
        <ul class="divide-y divide-gray-300">
            @foreach($categorias as $categoria)
                <li class="py-4 text-center text-gray-700 font-medium">{{ $categoria->nombre }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
