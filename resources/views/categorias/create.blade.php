<!DOCTYPE html>
<html>
<head>
    <title>Agregar Categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Agregar Categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <button type="submit" class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition duration-300">Agregar</button>
        </form>
    </div>
</body>
</html>
