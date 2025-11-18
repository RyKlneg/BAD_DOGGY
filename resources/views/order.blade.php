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
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
            duration: 1000, // Duración de la animación en milisegundos
            once: false, // Ejecutar la animación solo una vez
            mirror:true
            });
        });
    </script>
    <section x-data="{atTop: true}">
        <div class="fixed z-50 w-full px-8 py-4 transition-all duration-1000 rounded-full mt-4 max-w-2xl inset-x-0 mx-auto ease-in-out transform" :class="{'bg-black bg-opacity-90 backdrop-blur-xl max-w-4xl ': !atTop, 'max-w-2xl': atTop}" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)">
            <div x-data="{open:false}" class="flex flex-col w-full p-2 mx-auto md:items-center md:justify-between md:flex-row">
                <div class="flex flex-row items-center justify-between">
                    <img src="{{ asset('images/Logo_BAD_DOGGY.jpg') }}" alt="logo" class="h-14 mr-3 sm:h-16 rounded-4xl"/>
                    <button class="md:hidden focus:outline-none">

                    </button>
                </div>
                <nav :class="{'flex':open,'hidden': !open}" class="flex-col flex-grow gap-8 hidden pb-4 md:flex md:flex-row lg:ml-auto justify-end">
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Promos" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Hamburguesas</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Nosotros" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Hotdogs</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Contactanos" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Alitas</a>
                </nav>
            </div>
        </div>
    </section>
    <section style="background-image:url('{{ asset('images/Contactanos.png') }}')" role="img" aria-label="Menu" class="w-full min-h-screen bg-cover bg-center bg-no-repeat bg-fixed lg:bg-local">
        <!--Hamburguesas-->
        <div class="text-center mb-12 pt-32" data-aos="fade-down">
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
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Doble.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hamburguesa Doble con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Doble carne casera (260) gr, doble queso americano, Oaxaca gratinado, tomate, cebolla asada, lechuga, pepinillos , aderezos de la casa y papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$260.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Chicken.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hamburguesa de Pollo Crispy Chicken con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Hamburguesa crispy Chicken tender de pollo empanizado, queso amarillo, queso Oaxaca gratinado, aderezo de la casa, cebolla asada, tomate y lechuga más papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$230.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Hawaiiana.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hamburguesa Hawaiana con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Hamburguesa carne casera 130gr con cebolla y piña asada, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$230.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Camparera.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hamburguesa Campirana con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Carne casera, queso americano, champiñones con cebolla asada, queso Oaxaca gratinado, tomate, lechuga, pepinillos , aderezos de la casa y papas a la francesa</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$205.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Nortena.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hamburguesa Norteña con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Hamburguesa carne casera 130gr con cebolla y Chistorra asada, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$245.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Ch.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Cheese Burguer con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Carne casera 130 gr con queso americano y Oaxaca gratinado, pepinillos y cebolla asada, aderezo de la casa. acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$145.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesas/H_Cheese.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hamburgesa Clasica con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Hamburguesa carne casera 130gr, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, cebolla asada, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$175.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Hot Dogs-->
        <div class="text-center mb-12 pt-10" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4"
                style="font-family: 'Lobster', sans-serif;">
                Nuestos Hotdogs
            </h2>
            <p class="text-xl text-white max-w-2xl mx-auto leading-relaxed" style="font-family: 'Lobster', sans-serif;">
                Sazón callejero, actitud salvaje.
            </p>
        </div>
        <!--Card 1-->
        <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_Ch_Hawaiiano.jpg') }}')"></div>                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dog Clásico Hawaiano con Papas</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Salchicha de pavo premium enrrollada en tocino con piña asada y queso Oaxaca gratinado, aderezo de la casa, aderezo verde, con tomate y cebolla asada, acomodado de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$115.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_Nort.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dogs Norteño con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Salchicha de pavo premium enrrollada en tocino y queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y chistorra asada. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$120.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 3-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_Clasico.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dogs Clásico con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Hot Dogs Clásico salchicha de pavo premium enrrollada en tocino y queso gratinado, aderezo de la casa, con tomate y cebolla asada, aderezo verdea, acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$75.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 4-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_Campirano.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dogs Clasico Campirano con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Salchicha de pavo premium enrrollada en tocino y queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y champiñones condimentados asados. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$105.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 5-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_J_Res.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dog Jumbo de Res Clasico con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Pan casero salchicha jumbo de res asada con queso Oaxaca gratinado, tomate cebollas asada, aderezo de la casa, tomate, cebolla asada y aderezo verde. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$145.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 6-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_Campirano.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dog Jumbo Campirano con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Salchicha de res y queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y champiñones condimentados asados. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$175.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 7-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_J_Nort.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dog Jumbo Norteño con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Salchicha de res asada y queso Oaxaca gratinado, aderezo de la casa, tomate cebolla asada, aderezo verde y chistorra asada. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$195.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 8-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_J_Res.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dog Jumbo de Res Americano con Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Pan artesanal, salchicha de res asada, queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y tocino crujiente. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$175.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 9-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/HotDogs/Hot_Hawaiiano.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Hot Dog Jumbo Hawaiano más Papas</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">Doble carne casera (260) gr, doble queso americano, Oaxaca gratinado, tomate, cebolla asada, lechuga, pepinillos , aderezos de la casa y papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$260.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Alitas-->
        <div class="text-center mb-12 pt-10" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4"
                style="font-family: 'Lobster', sans-serif;">
                Nuestas Alitas
            </h2>
            <p class="text-xl text-white max-w-2xl mx-auto leading-relaxed" style="font-family: 'Lobster', sans-serif;">
                Alitas tan buenas… que te hacen volar.
            </p>
        </div>
        <!--Card 1-->
        <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Alitas/Boneless_Light.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Boneles 1 Kg + Papa</h3>
                    <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">1 kg de crujientes boneles, puedes elegir hasta 3 salsas. Acompañada de aderezo ranch y 200gr de papa a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$505.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Alitas/Boneless.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">1/4 de Boneles y Papas Frita</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">1/4 Boneles acompañada de una salsa y aderezo ranchs. Acompañadas de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$140.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 3-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Alitas/Boneless_Potato.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors" style="font-family: 'Lobster', sans-serif;">Boneles 1/2 Kg</h3>
                        <p class="text-gray-600 mb-4" style="font-family: 'Lobster', sans-serif;">1/2 kg de crujientes boneles, puedes elegir hasta 2 salsas. Acompañada de aderezo ranch y 100gr de papa a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600" style="font-family: 'Lobster', sans-serif;">MX$265.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-black text-white px-6 md:px-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center md:items-start justify-between gap-10 " data-aos="fade-right">
            <!-- Logo -->
            <div class="flex flex-col items-center md:items-start w-full md:w-1/3">
            <img src="{{ asset('images/Logo_BAD_DOGGY.jpg') }}" alt="Logo Bad Doggy" class="w-40 h-auto mb-4 rounded-full shadow-lg rounded-4xl">
            <p class="text-gray-400 text-sm text-center md:text-left" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">© 2025 Bad Doggy. Todos los derechos reservados.</p>
            </div>
            <!-- Información -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm w-full md:w-2/3">
            <!-- Columna 1 -->
            <div>
                <h3 class="text-lg font-semibold mb-2 text-amber-500" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Dirección</h3>
                <p class="text-gray-300 mb-3" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                Blvd. Bicentenario #1711<br>
                Frente a la nave 3 del parque Tabasco<br>
                A un costado de Go Restaurante<br>
                Villahermosa, México, 86287
                </p>
                <h3 class="text-lg font-semibold mb-2 text-amber-500" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Área de servicio</h3>
                <p class="text-gray-300" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">Villahermosa, México</p>
            </div>
            <!-- Columna 2 -->
            <div>
                <h3 class="text-lg font-semibold mb-2 text-amber-500" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Contacto</h3>
                <p class="text-gray-300 mb-2" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;"><span class="font-semibold" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">Celular:</span> 993 176 6107</p>
                <p class="text-gray-300 mb-2" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;"><span class="font-semibold" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">WhatsApp:</span> +52 1 993 259 2783</p>
                <p class="text-gray-300 mb-2" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;"><span class="font-semibold" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">Correo:</span> bad-doggyoficial@hotmail.com</p>
                <h3 class="text-lg font-semibold mt-4 mb-2 text-amber-500" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Redes Sociales</h3>
                <div class="flex space-x-4 mt-2">
                <!-- WhatsApp -->
                <a href="https://wa.me/c/5219931766107" target="_blank" aria-label="WhatsApp" class="hover:text-amber-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                    <path d="M20.52 3.48A11.79 11.79 0 0012 .2a11.81 11.81 0 00-10.4 17.84L.2 23.8l5.96-1.56A11.81 11.81 0 0012 23.8a11.79 11.79 0 008.52-20.32zM12 21.3a9.35 9.35 0 01-4.77-1.32l-.34-.2-3.54.93.95-3.45-.22-.36A9.36 9.36 0 1121.3 12 9.32 9.32 0 0112 21.3zm5.09-6.96c-.28-.14-1.63-.8-1.88-.9s-.44-.14-.63.14-.72.9-.89 1.08-.33.21-.61.07a7.65 7.65 0 01-2.25-1.39 8.4 8.4 0 01-1.55-1.93c-.16-.27 0-.42.12-.56.13-.13.27-.33.4-.49s.18-.28.27-.47a.51.51 0 000-.49c-.08-.14-.63-1.51-.86-2.08s-.46-.48-.63-.49h-.54a1 1 0 00-.72.34 3 3 0 00-.94 2.25 5.23 5.23 0 001.08 2.78 11.93 11.93 0 004.84 4.37c.68.3 1.22.48 1.63.61a3.9 3.9 0 001.79.11 2.88 2.88 0 001.91-1.35 2.37 2.37 0 00.16-1.35c-.06-.12-.25-.19-.53-.33z"/>
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/bad_doggyy" target="_blank" aria-label="Instagram" class="hover:text-amber-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                    <path d="M12 2.2c3.18 0 3.56 0 4.82.07 1.17.06 1.96.24 2.43.4a4.9 4.9 0 011.77 1.16 4.9 4.9 0 011.16 1.77c.16.47.34 1.26.4 2.43.07 1.26.07 1.64.07 4.82s0 3.56-.07 4.82c-.06 1.17-.24 1.96-.4 2.43a4.9 4.9 0 01-1.16 1.77 4.9 4.9 0 01-1.77 1.16c-.47.16-1.26.34-2.43.4-1.26.07-1.64.07-4.82.07s-3.56 0-4.82-.07c-1.17-.06-1.96-.24-2.43-.4a4.9 4.9 0 01-1.77-1.16 4.9 4.9 0 01-1.16-1.77c-.16-.47-.34-1.26-.4-2.43C2.2 15.56 2.2 15.18 2.2 12s0-3.56.07-4.82c.06-1.17.24-1.96.4-2.43a4.9 4.9 0 011.16-1.77A4.9 4.9 0 015.5 2.67c.47-.16 1.26-.34 2.43-.4C8.18 2.2 8.56 2.2 12 2.2zm0-2.2C8.52 0 8.11 0 6.83.07 5.53.13 4.45.33 3.6.63 2.69.94 1.87 1.43 1.1 2.2.33 2.97-.17 3.79.14 4.7c.3.85.5 1.93.56 3.23.07 1.28.07 1.69.07 5.07s0 3.79-.07 5.07c-.06 1.3-.26 2.38-.56 3.23-.31.91.19 1.73.96 2.5.77.77 1.59 1.27 2.5.96.85-.3 1.93-.5 3.23-.56 1.28-.07 1.69-.07 5.07-.07s3.79 0 5.07.07c1.3.06 2.38.26 3.23.56.91.31 1.73-.19 2.5-.96.77-.77 1.27-1.59.96-2.5-.3-.85-.5-1.93-.56-3.23-.07-1.28-.07-1.69-.07-5.07s0-3.79.07-5.07c.06-1.3.26-2.38.56-3.23.31-.91-.19-1.73-.96-2.5-.77-.77-1.59-1.27-2.5-.96-.85.3-1.93.5-3.23.56C15.79.07 15.38.07 12 .07z"/>
                    <path d="M12 5.8A6.2 6.2 0 1018.2 12 6.21 6.21 0 0012 5.8zm0 10.2A4 4 0 1116 12a4 4 0 01-4 4zm6.4-10.86a1.44 1.44 0 11-1.44-1.44 1.44 1.44 0 011.44 1.44z"/>
                    </svg>
                </a>
                </div>
            </div>
            </div>
        </div>
    </footer>
</body>
</html>
