<!DOCTYPE html>
<html>
<head>
    <title>Agregar Película</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Agregar Película</h1>
        <form action="{{ route('peliculas.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-4">
                <label for="año" class="block text-gray-700">Año:</label>
                <input type="number" name="año" id="año" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-4">
                <label for="estudio" class="block text-gray-700">Estudio:</label>
                <input type="text" name="estudio" id="estudio" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-6">
                <label for="categoria_id" class="block text-gray-700">Categoría:</label>
                <select name="categoria_id" id="categoria_id" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition duration-300">Agregar</button>
        </form>
    </div>
</body>
</html>
