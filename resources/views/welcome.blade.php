<!DOCTYPE html>
<html class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fascinate&display=swap');
    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <section x-data="{atTop: true}">
        <div class="fixed z-50 w-full px-8 py-4 transition-all duration-1000 rounded-full mt-4 max-w-2xl inset-x-0 mx-auto ease-in-out transform" :class="{'bg-black bg-opacity-90 backdrop-blur-xl max-w-4xl ': !atTop, 'max-w-2xl': atTop}" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)">
            <div x-data="{open:false}" class="flex flex-col w-full p-2 mx-auto md:items-center md:justify-between md:flex-row">
                <div class="flex flex-row items-center justify-between">
                    <img src="{{ asset('images/Logo_BAD_DOGGY.jpg') }}" alt="logo" class="h-14 mr-3 sm:h-16 rounded-4xl"/>
                    <button class="md:hidden focus:outline-none">

                    </button>
                </div>
                <nav :class="{'flex':open,'hidden': !open}" class="flex-col flex-grow gap-8 hidden pb-4 md:flex md:flex-row lg:ml-auto justify-end">
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Promos" class="font-bold text-xl hover:text-amber-300">Promos</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Nosotros" class="font-bold text-xl hover:text-amber-300">Nosotros</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Contactanos" class="font-bold text-xl hover:text-amber-300">Menu</a>
                    <a :class="{'text-white': atTop, 'text-amber-300':!atTop}" href="#Menu" class="font-bold text-xl hover:text-amber-300">Contactanos</a>
                </nav>
            </div>
        </div>
    </section>
    <section
        id="Promos"
        x-data="{
            images: [
            '{{ asset('images/Banner.png') }}',
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
            :style="`transform: translateX(${translateX}%);`"
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
            <div class="w-full md:w-1/2 flex justify-center">
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
            <div class="w-full md:w-1/2 mt-6 md:mt-0 md:ml-8 bg-white bg-opacity-40 p-6 rounded-lg shadow-lg border-4 border-black border-dashed">
                <h2 class="text-6xl text-center font-bold text-gray-800 mb-4" style="font-family: 'Fascinate', system-ui;font-weight: 400;font-style: normal;">Nuestra Manada</h2>
                <p class="text-black text-2xl text-justify">
                    Dicen que portarse mal no está bien... pero en
                    <span class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-amber-500">
                        <span class="relative text-white dark:text-black">Bad Doggy</span>
                    </span>, ¡es delicioso!
                    Somos fanáticos del sabor extremo y de romper la rutina con cada mordida.
                    Aquí todo se trata de amigos, risas y comida que no se olvida.
                    Ven, suéltate, y sé parte de la manada.
                </p>
            </div>
        </div>
    </section>
    <section id="Contactanos" style="background-image:url('{{ asset('images/Contactanos.png') }}')" class="bg-cover bg-center w-full bg-black h-48 sm:h-64 md:h-96 lg:h-screen"></section>
    <section id="Menu" style="background-image:url('{{ asset('images/Menu.png') }}')" class="bg-cover bg-center w-full bg-black h-48 sm:h-64 md:h-96 lg:h-screen"></section>
  </body>
</html>
