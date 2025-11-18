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
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Menu" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Tortas</a>
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
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hamburguesa Doble con Papas</h3>
                    <p class="text-gray-600 mb-4">Doble carne casera (260) gr, doble queso americano, Oaxaca gratinado, tomate, cebolla asada, lechuga, pepinillos , aderezos de la casa y papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$260.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hamburguesa de Pollo Crispy Chicken con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa crispy Chicken tender de pollo empanizado, queso amarillo, queso Oaxaca gratinado, aderezo de la casa, cebolla asada, tomate y lechuga más papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$230.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hamburguesa Hawaiana con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa carne casera 130gr con cebolla y piña asada, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$230.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hamburguesa Campirana con Papas</h3>
                    <p class="text-gray-600 mb-4">Carne casera, queso americano, champiñones con cebolla asada, queso Oaxaca gratinado, tomate, lechuga, pepinillos , aderezos de la casa y papas a la francesa</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$205.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hamburguesa Norteña con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa carne casera 130gr con cebolla y Chistorra asada, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$245.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Cheese Burguer con Papas</h3>
                    <p class="text-gray-600 mb-4">Carne casera 130 gr con queso americano y Oaxaca gratinado, pepinillos y cebolla asada, aderezo de la casa. acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$145.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hotdog.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hamburgesa Clasica con Papas</h3>
                    <p class="text-gray-600 mb-4">Hamburguesa carne casera 130gr, queso americano y Oaxaca gratinado, verduras lechuga, tomate, pepinillos, cebolla asada, aderezo de la casa, acompañada de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$175.00</span>
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
                <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dog Clásico Hawaiano con Papas</h3>
                    <p class="text-gray-600 mb-4">Salchicha de pavo premium enrrollada en tocino con piña asada y queso Oaxaca gratinado, aderezo de la casa, aderezo verde, con tomate y cebolla asada, acomodado de papas a la francesa.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">MX$115.00</span>
                        <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dogs Norteño con Papas</h3>
                        <p class="text-gray-600 mb-4">Salchicha de pavo premium enrrollada en tocino y queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y chistorra asada. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$120.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 3-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dogs Clásico con Papas</h3>
                        <p class="text-gray-600 mb-4">Hot Dogs Clásico salchicha de pavo premium enrrollada en tocino y queso gratinado, aderezo de la casa, con tomate y cebolla asada, aderezo verdea, acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$75.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 4-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dogs Clasico Campirano con Papas</h3>
                        <p class="text-gray-600 mb-4">Salchicha de pavo premium enrrollada en tocino y queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y champiñones condimentados asados. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$105.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 5-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dog Jumbo de Res Clasico con Papas</h3>
                        <p class="text-gray-600 mb-4">Pan casero salchicha jumbo de res asada con queso Oaxaca gratinado, tomate cebollas asada, aderezo de la casa, tomate, cebolla asada y aderezo verde. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$145.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 6-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dog Jumbo Campirano con Papas</h3>
                        <p class="text-gray-600 mb-4">Salchicha de res y queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y champiñones condimentados asados. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$175.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 7-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dog Jumbo Norteño con Papas</h3>
                        <p class="text-gray-600 mb-4">Salchicha de res asada y queso Oaxaca gratinado, aderezo de la casa, tomate cebolla asada, aderezo verde y chistorra asada. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$195.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 8-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dog Jumbo de Res Americano con Papas</h3>
                        <p class="text-gray-600 mb-4">Pan artesanal, salchicha de res asada, queso Oaxaca gratinado, aderezo de la casa, tomate y cebolla asada, aderezo verde y tocino crujiente. acompañado de papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$175.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 9-->
            <div class="flex gap-6 flex-wrap justify-center" data-aos="fade-down">
                <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:bg-yellow-100 hover:scale-102">
                    <div class="h-48 bg-cover bg-center hover:brightness-105 transition duration-300" style="background-image: url('{{ asset('images/Hamburguesa_Fondo.jpg') }}')"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-yellow-800 transition-colors">Hot Dog Jumbo Hawaiano más Papas</h3>
                        <p class="text-gray-600 mb-4">Doble carne casera (260) gr, doble queso americano, Oaxaca gratinado, tomate, cebolla asada, lechuga, pepinillos , aderezos de la casa y papas a la francesa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-red-600">MX$260.00</span>
                            <button class="bg-red-600 hover:bg-yellow-500 hover:scale-110 text-white px-4 py-2 rounded-lg transition-all duration-300">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
