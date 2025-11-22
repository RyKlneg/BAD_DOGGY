<!DOCTYPE html>
<html class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fascinate&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-scroll {
            display: flex;
            width: max-content;
            animation: scroll 25s linear infinite;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Promos" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Promos</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Nosotros" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Nosotros</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Contactanos" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Menu</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Menu" class="font-bold text-xl hover:text-amber-300" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Vistanos</a>
                </nav>
            </div>
        </div>
    </section>
    <section
        id="Promos"
        x-data="{
            images: [
            '{{ asset('images/Banner.jpg') }}',
            '{{ asset('images/Banner2.png') }}',
            '{{ asset('images/Banner3.png') }}'
            ],
            currentIndex: 0,
            translateX: 0,
            interval: null,

            // Cambia a la siguiente imagen (movimiento a la derecha)
            changeImage() {
            this.translateX = 100; // mueve el slider a la derecha
            setTimeout(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.translateX = 0; // regresa al centro
            }, 1000); // coincide con la duración de la animación
            },

            startCarousel() {
            this.interval = setInterval(() => this.changeImage(), 20000);
            }
        }"
        x-init="startCarousel"
        class="relative w-full h-48 sm:h-64 md:h-96 lg:h-screen overflow-hidden bg-black"
        >
        <!-- Contenedor de ambas imágenes -->
        <div
            class="absolute inset-0 flex transition-transform duration-1000 ease-in-out"
            :style="`transform: translateX(${translateX}%);`" data-aos="fade-top"
        >
            <!-- Imagen actual -->
            <div
            class="w-full flex-shrink-0 bg-cover bg-center"
            :style="`background-image: url('${images[currentIndex]}')`"
            ></div>

            <!-- Imagen siguiente (pre-cargada a la izquierda) -->
            <div
            class="w-full flex-shrink-0 bg-cover bg-center"
            :style="`background-image: url('${images[(currentIndex + 1) % images.length]}')`"
            ></div>
        </div>
        <!-- Botón manual -->
        <button
            @click="changeImage()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full hidden md:block hover:bg-amber-300 transition"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </section>
    <section id="Nosotros" style="background-image:url('{{ asset('images/Nosotros.png') }}')" role="img" aria-label="Nosotros" class="bg-cover bg-center w-full bg-black h-64 sm:h-80 md:h-[450px] lg:h-[550px]">
        <div class="container mx-auto pt-[40px] px-4 flex flex-col md:flex-row items-center">
            <!-- Imagen al lado izquierdo -->
            <div class="w-full md:w-1/2 flex justify-center" data-aos="fade-right">
                <img src="{{ asset('images/Logo_BAD_DOGGY.jpg') }}" style="
                mask-image: url('{{ asset('images/Marco.png') }}');
                -webkit-mask-image: url('{{ asset('images/Marco.png') }}');
                mask-size: cover;
                -webkit-mask-size: cover;
                mask-repeat: no-repeat;
                -webkit-mask-repeat: no-repeat;
                mask-position: center;
                -webkit-mask-position: center;
                " alt="Imagen Nosotros" class="w-[500px] h-auto rounded-full shadow-lg opacity-100">
            </div>
            <!-- Card de Nosotros -->
            <div class="w-full md:w-1/2 mt-6 md:mt-0 md:ml-8 bg-white bg-opacity-40 p-6 rounded-lg shadow-lg border-4 border-black border-dashed " data-aos="fade-left">
                <h2 class="text-6xl text-center font-bold text-black mb-4" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">Nuestra Manada</h2>
                <p class="text-black text-2xl text-justify"  style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                    Dicen que portarse mal no está bien... pero en
                    <span class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-amber-500">
                        <span class="relative text-white dark:text-black" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">Bad Doggy</span>
                    </span>, ¡es delicioso!
                    Somos fanáticos del sabor extremo y de romper la rutina con cada mordida.
                    Aquí todo se trata de amigos, risas y comida que no se olvida.
                    Ven, suéltate, y sé parte de la manada.
                </p>
            </div>
        </div>
    </section>
    <section id="Contactanos" style="background-image:url('{{ asset('images/Contactanos.png') }}')" class="bg-cover bg-center w-full bg-black min-h-screen flex flex-col justify-center py-12">
        <div class="pt-16 text-center pb-12" data-aos="fade-top">
            <h2 class="text-5xl md:text-6xl text-amber-300 drop-shadow-lg" style="font-family: 'Permanent Marker', cursive; font-weight: 400; font-style: normal;">
                ¿Listo para probar la maldad más deliciosa?
            </h2>
            <p class="text-white text-2xl pt-10" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                Esto no es comida… es pura maldad deliciosa.
            </p>
        </div>

        <!-- CARDS MÁS GRANDES CON HOVER AMARILLO -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-7xl mx-auto px-6">

            <!-- Card 1 con imagen de hamburguesa -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-500 group hover:bg-amber-50 hover:border-4 hover:border-amber-300 border-4 border-transparent" data-aos="fade-left">
                <div class="h-64 overflow-hidden">
                    <img src="{{ asset('images/Entrega.jpg') }}" alt="Entrega Express"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8 text-center group-hover:bg-amber-50 transition duration-300">
                    <h4 class="text-3xl font-bold text-gray-800 mb-4 group-hover:text-amber-700 transition duration-300" style="font-family: 'Lobster', sans-serif;">
                        Entrega Express
                    </h4>
                    <p class="text-gray-600 text-lg leading-relaxed group-hover:text-gray-700 transition duration-300">
                        En menos de 30 minutos tienes tu maldad favorita en la puerta de tu casa, caliente y lista para disfrutar.
                    </p>
                </div>
            </div>

            <!-- Card 2 con imagen de hot dog -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-500 group hover:bg-amber-50 hover:border-4 hover:border-amber-300 border-4 border-transparent" data-aos="fade-left" data-aos-delay="100">
                <div class="h-64 overflow-hidden">
                    <img src="{{ asset('images/Ingredientes.jpg') }}" alt="Ingredientes Premium"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8 text-center group-hover:bg-amber-50 transition duration-300">
                    <h4 class="text-3xl font-bold text-gray-800 mb-4 group-hover:text-amber-700 transition duration-300" style="font-family: 'Lobster', sans-serif;">
                        Ingredientes Top
                    </h4>
                    <p class="text-gray-600 text-lg leading-relaxed group-hover:text-gray-700 transition duration-300">
                        Calidad premium en cada ingrediente para una experiencia única que tu paladar notará al instante.
                    </p>
                </div>
            </div>

            <!-- Card 3 con imagen de boneless -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-500 group hover:bg-amber-50 hover:border-4 hover:border-amber-300 border-4 border-transparent" data-aos="fade-left" data-aos-delay="200">
                <div class="h-64 overflow-hidden">
                    <img src="{{ asset('images/Pasion.jpg') }}" alt="Hecho con Amor"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8 text-center group-hover:bg-amber-50 transition duration-300">
                    <h4 class="text-3xl font-bold text-gray-800 mb-4 group-hover:text-amber-700 transition duration-300" style="font-family: 'Lobster', sans-serif;">
                        Hecho con Pasión
                    </h4>
                    <p class="text-gray-600 text-lg leading-relaxed group-hover:text-gray-700 transition duration-300">
                        Cada plato preparado con dedicación y nuestro toque especial que hace la diferencia.
                    </p>
                </div>
            </div>

        </div>
        <!-- Botón -->
        <div class="pt-20 text-center" data-aos="fade-left">
            <a href="{{ route('pruebas') }}"
                class="bg-red-600 hover:bg-red-700 text-white font-semibold py-5 px-16 rounded-full text-2xl shadow-2xl transition-all transform hover:scale-110 hover:shadow-2xl duration-300"
                style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                ¡Ordena Ya!
            </a>
        </div>
    </section>
    <section id="Menu" style="background-image:url('{{ asset('images/Banner_Visitanos.png') }}')" class="bg-cover bg-center w-full bg-black h-48 sm:h-64 md:h-96 lg:h-screen ">
        <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 pt-26" data-aos="fade-top">
            <!-- Lado izquierdo - Imagen -->
            <div class="w-full lg:w-1/2">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300">
                    <img
                        src="{{ asset('images/Visitanos.jpg') }}"
                        alt="Productos artesanales Bad Doggy - Delicias para tu mascota"
                        class="w-full h-auto object-cover"
                    />
                    <!-- Efecto decorativo -->
                    <div class="absolute inset-0 bg-gradient-to-r from-amber-500/10 to-transparent"></div>
                </div>
            </div>

            <!-- Lado derecho - Contenido -->
            <div class="w-full lg:w-1/2 text-black">
                <!-- Título principal -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight" >
                    <span class="text-3xl sm:text-4xl lg:text-5xl" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">Donde los buenos perros<br>se portan <span class="text-amber-400">"MAL"</span></span>
                </h1>

                <!-- Información carismática -->
                <div class="space-y-4 mb-8">
                    <p class="text-xl sm:text-2xl text-black leading-relaxed text-justify">
                        <strong class="text-amber-400" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">Hecho con amor, devorado con pasión</strong>
                    </p>

                    <p class="text-lg text-black" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                        En Bad Doggy no seguimos recetas, seguimos <strong>corazonazos</strong>. Cada snack, cada galleta, cada delicia que creamos está hecha con ingredientes 100% naturales, cero conservantes y todo el cariño que tu compañero peludo merece.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                        <div class="flex items-center gap-3">
                            <span class="text-amber-400 text-2xl">🥩</span>
                            <span class="text-gray-200">Ingredientes premium</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-amber-400 text-2xl">👨‍🍳</span>
                            <span class="text-gray-200">Elaboración artesanal</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-amber-400 text-2xl">❤️</span>
                            <span class="text-gray-200">Hecho con amor</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-amber-400 text-2xl">🚫</span>
                            <span class="text-gray-200">Sin conservantes</span>
                        </div>
                    </div>
                </div>

                <!-- Llamada a la acción -->
                <div class="flex flex-col sm:flex-row gap-4 mt-8">
                    <button class="bg-amber-500 hover:bg-amber-600 text-black font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                        Descubre Nuestros Sabores
                    </button>
                    <button class="border-2 border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-black font-bold py-3 px-8 rounded-full transition-all duration-300" style="font-family: 'Lobster', sans-serif; font-weight: 400; font-style: normal;">
                        Visita Nuestra Tienda
                    </button>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section style="background-image:url('{{ asset('images/Menu.png') }}')" class="bg-cover bg-center w-full bg-black h-48 sm:h-64 md:h-96 lg:h-screen">
    </section>
    <footer class="bg-black text-white py-10 px-6 md:px-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center md:items-start justify-between gap-10 " data-aos="fade-right">
            <!-- Logo -->
            <div class="flex flex-col items-center md:items-start w-full md:w-1/3">
            <img src="{{ asset('images/Logo_BAD_DOGGY.jpg') }}" alt="Logo Bad Doggy" class="w-40 h-auto mb-4 rounded-full shadow-lg">
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
