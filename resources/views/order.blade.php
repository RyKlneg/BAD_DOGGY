<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fascinate&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
            duration: 1000, // Duración de la animación en milisegundos
            once: false, // Ejecutar la animación solo una vez
            mirror:true
            });
        });
    </script>
    <section style="background-image:url('{{ asset('images/Contactanos.png') }}')" role="img" aria-label="Menu" class="w-full min-h-screen bg-cover bg-center bg-no-repeat bg-fixed lg:bg-local">
        <!--Hamburguesas-->
        <div class="text-center mb-12 pt-10" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4"
                style="font-family: 'Lobster', sans-serif;">
                Nuestras Hamburguesas
            </h2>
            <p class="text-xl text-white max-w-2xl mx-auto leading-relaxed" style="font-family: 'Lobster', sans-serif;">
                Si no deja huella en tu antojo, no es una Bad Doggy Burger!
            </p>
        </div>
        <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
            <!-- Card 1 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hamburguesa Doble con Papas</h3>
                    <p class="text-gray-600 mb-4">Doble carne casera (260) gr, doble queso americano, Oaxaca gratinado, tomate, cebolla asada, lechuga, pepinillos , aderezos de la casa y papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$260.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hamburguesa de Pollo Crispy Chicken con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa crispy Chicken tender de pollo empanizado, queso amarillo, queso Oaxaca gratinado, aderezo de la casa, cebolla asada, tomate y lechuga más papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$230.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hamburguesa Hawaiana con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa carne casera 130gr con cebolla y piña asada, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$230.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hamburguesa Campirana con Papas</h3>
                    <p class="text-gray-600 mb-4">Carne casera, queso americano, champiñones con cebolla asada, queso Oaxaca gratinado, tomate, lechuga, pepinillos , aderezos de la casa y papas a la francesa</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$205.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hamburguesa Norteña con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa carne casera 130gr con cebolla y Chistorra asada, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$245.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Cheese Burguer con Papas</h3>
                    <p class="text-gray-600 mb-4">Carne casera 130 gr con queso americano y Oaxaca gratinado, pepinillos y cebolla asada, aderezo de la casa. acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$145.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hamburgesa Clasica con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa carne casera 130gr, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, cebolla asada, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$175.00</span>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Ordenar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
