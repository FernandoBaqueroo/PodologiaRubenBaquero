<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Podólogo en Carabanchel - Rubén Baquero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM6h8dX7FxA2O1d+RpuZ0en9r1i4QO4ROh3WxK" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('media/photos/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('media/photos/favicon.png') }}" type="image/x-icon">
</head>

<body class="bg-[#f3f3f3] text-slate-800 overflow-y-auto" style="font-family: 'Poppins', sans-serif">

    <!--InfoBar-->
    <header class="bg-[#8b785d] md:hidden h-8 w-full opacity-0 translate-y-4 transition-all duration-700 delay-150"
        id="infobar">
        <div class="container mx-auto text-white">
            <div class="flex justify-center items-center pt-1">
                <i class="fas fa-phone-alt mr-2"></i>
                <span>914 651 911</span>
            </div>
        </div>
    </header>

    <!--Navbar-->
    <nav class="bg-[#f3f3f3] w-full md:w-auto opacity-0 translate-y-4 transition-all duration-700 delay-150 sticky top-0 z-20"
        id="navbar">
        <div class="container pt-6 mx-auto">
            <div class="flex items-center justify-between flex-col md:flex-row">
                <!--Image-Logo-Button-->
                <div class="z-30 pb-4 pl-2 md:pl-0 w-full md:w-auto border-b md:border-none">
                    <a class="flex items-center">
                        <img src="{{ asset('media/photos/logo.svg') }}" class="w-18 h-14 md:w-28 md:h-24">
                        <span class="text-xs md:text-xl xl:text-2xl uppercase md:normal-case"><span
                                class="font-bold text-base md:text-xl xl:text-2xl">Rubén
                                Baquero</span>
                            <br>Biomecánica |
                            <span class="text-[#8b785d]">Podología</span> | Ecografía</span>

                        <!--Botón de despliegue responsive-->
                        <button id="hamburger-btn"
                            class="block z-20 ml-4 cursor-pointer md:hidden transition p-4 rounded">
                            <div
                                class="h-0.5 w-6 bg-[#8b785d] transition-transform transform duration-300 ease-in-out hamburger-bar bar-top">
                            </div>
                            <div
                                class="h-0.5 mt-2.5 w-6 bg-[#8b785d] transition-transform transform duration-300 ease-in-out hamburger-bar bar-bottom">
                            </div>
                        </button>
                    </a>
                </div>

                <!--Menu Links-->
                <div>
                    <!--Links-->
                    <div id="sidebar-menu"
                        class="bg-[#f3f3f3] w-5/6 md:w-full h-screen md:h-auto mt-20 md:mt-0 px-6 pt-6 gap-7 flex flex-col inset-0 translate-x-[-100%] transition-all duration-300 shadow-lg md:shadow-none fixed md:static md:translate-x-0 md:flex-row md:p-0 sm:text-sm md:text-base lg:text-lg">
                        <a href="#hero"
                            class="block transition-colors duration-300 ease-in-out text-slate-800 hover:text-[#8b785d] md:relative md:hover:after:scale-x-100 md:after:content-[''] md:after:absolute md:after:w-full md:after:h-[2px] md:after:bg-[#8b785d] md:after:bottom-0 md:after:left-0 md:after:scale-x-0 md:after:transition-transform md:after:duration-300 ">Inicio</a>
                        <a href="#about_me"
                            class="block transition-colors duration-300 ease-in-out text-slate-800 hover:text-[#8b785d] md:relative md:hover:after:scale-x-100 md:after:content-[''] md:after:absolute md:after:w-full md:after:h-[2px] md:after:bg-[#8b785d] md:after:bottom-0 md:after:left-0 md:after:scale-x-0 md:after:transition-transform md:after:duration-300">Sobre
                            Mí</a>
                        <a href="#services"
                            class="block transition-colors duration-300 ease-in-out text-slate-800 hover:text-[#8b785d] md:relative md:hover:after:scale-x-100 md:after:content-[''] md:after:absolute md:after:w-full md:after:h-[2px] md:after:bg-[#8b785d] md:after:bottom-0 md:after:left-0 md:after:scale-x-0 md:after:transition-transform md:after:duration-300">Servicios</a>
                        <a href="#contact"
                            class="block transition-colors duration-300 ease-in-out text-slate-800 hover:text-[#8b785d] md:relative md:hover:after:scale-x-100 md:after:content-[''] md:after:absolute md:after:w-full md:after:h-[2px] md:after:bg-[#8b785d] md:after:bottom-0 md:after:left-0 md:after:scale-x-0 md:after:transition-transform md:after:duration-300">Ubicación</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Presentation Hero-->
    <section class="text-gray-600 body-font opacity-0 translate-y-4 transition-all duration-700 delay-150"
        id="hero">
        <div class="container mx-auto flex px-5 py-2 md:py-36 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left -mb-4  md:mb-0 items-center text-center">
                <!--Titulo-->
                <h1 class="title-font text-xl md:text-2xl lg:text-4xl pt-2 md:pt-0 mb-4 font-medium text-[#232b2b]">Tu
                    podólogo en Carabanchel.</h1>
                <!--Texto-->
                <p class="mb-8 leading-relaxed text-justify text-gray-800">
                    En la consulta de <span class="font-semibold text-[#8b785d]">Podología y Biomecánica Rubén
                        Baquero</span> diagnosticamos y tratamos problemas comunes del pie, como <span
                        class="text-[#8b785d] font-semibold">durezas</span>, <span
                        class="text-[#8b785d] font-semibold">callos</span>, <span
                        class="text-[#8b785d] font-semibold">uñas encarnadas</span> y <span
                        class="text-[#8b785d] font-semibold">afecciones de la piel</span>. Además, estamos
                    especializados en <span class="text-[#8b785d] font-semibold">estudios de la pisada</span>, <span
                        class="text-[#8b785d] font-semibold">diseño de plantillas a medida</span> y <span
                        class="text-[#8b785d] font-semibold">ecografía del pie y tobillo</span>.
                </p>

                <!--Botón-->
                <div class="flex justify-center">
                    <button
                        onclick="document.getElementById('about_me').scrollIntoView({ behavior: 'smooth' })"
                        class="hidden md:block bg-[#8b785d] text-white border-0 py-2 px-6 focus:outline-none hover:bg-[#635542] hover:text-white rounded text-lg">Saber
                        Más</button>
                </div>
            </div>
            <!--Imágen-->
            <div class="lg:max-w-3xl lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded shadow-2xl" alt="hero"
                    src="{{ asset('media/photos/inicio (2).jpg') }}">
            </div>
            <div class="flex justify-center mt-6">
                <button
                    onclick="document.getElementById('about_me').scrollIntoView({ behavior: 'smooth' })"
                    class="block md:hidden bg-[#8b785d] text-white border-0 py-2 px-6 focus:outline-none hover:bg-[#635542] hover:text-white rounded text-lg">Saber
                    Más</button>
            </div>
        </div>
    </section>

    <!--About me-->
    <section
        class="text-gray-600 body-font opacity-0 translate-y-4 transition-all duration-700 delay-150 md:pt-11 pt-12 mb-4"
        id="about_me">
        <div class="container mx-auto px-8 md:px-5 py-24 flex flex-col">
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
                <div class="w-24 h-full bg-[#8b785d]"></div>
            </div>
            <div class="flex flex-wrap sm:flex-row flex-col py-6">
                <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl md:text-3xl mb-2 sm:mb-0">
                    Sobre mi</h1>
            </div>
        </div>
        <div class="container mx-auto flex flex-col md:flex-row items-center -mt-20 md:-mt-11">
            <div class="lg:max-w-xl lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded shadow-2xl" alt="hero" src="{{ asset('media/photos/about_me.jpg') }}">
            </div>

            <div class="container px-5 py-12 mx-auto flex flex-wrap">
                <div class="flex flex-col items-center md:w-2/3 mx-auto">

                    <!-- Item 1 -->
                    <div class="flex relative pb-20 w-full">
                        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#8b785d] text-white relative z-10 title-font font-medium text-sm">
                            1
                        </div>
                        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row w-full max-w-md">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 text-[#8b785d] rounded-full inline-flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-12 w-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Universidad de Extremadura</h2>
                                <h4 class="font-medium title-font text-gray-700 mb-1 text-lg">2011-2015</h4>
                                <p class="leading-relaxed">Grado en podología</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex relative pb-20 w-full">
                        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#8b785d] text-white relative z-10 title-font font-medium text-sm">
                            2
                        </div>
                        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row w-full max-w-md">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 text-[#8b785d] rounded-full inline-flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-12 w-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Universidad de Extremadura</h2>
                                <h4 class="font-medium title-font text-gray-700 mb-1 text-lg">2015-2016</h4>
                                <p class="leading-relaxed">Especialista en Pie Diabético</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex relative pb-20 w-full">
                        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#8b785d] text-white relative z-10 title-font font-medium text-sm">
                            3
                        </div>
                        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row w-full max-w-md">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 text-[#8b785d] rounded-full inline-flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-12 w-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Universidad Católica de Valencia San Vicente Mártir</h2>
                                <h4 class="font-medium title-font text-gray-700 mb-1 text-lg">2017-2018</h4>
                                <p class="leading-relaxed">Master en Cirugía Minimamente Invasiva del Pie</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="flex relative pb-10 w-full">
                        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#8b785d] text-white relative z-10 title-font font-medium text-sm">
                            4
                        </div>
                        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row w-full max-w-md">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 text-[#8b785d] rounded-full inline-flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-12 w-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">The Podiatry Institute Inc.</h2>
                                <h4 class="font-medium title-font text-gray-700 mb-1 text-lg">2022-2022</h4>
                                <p class="leading-relaxed">Foot & Ankle Surgical Skills Training Program in Atlanta</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="quote" class="w-full opacity-0 translate-y-4 transition-all duration-700 delay-150">
        <div class="container mx-auto px-4 py-8 lg:py-16 lg:px-6">
            <figure class="flex flex-col items-center">
                <!-- Icono -->
                <svg class="h-12 mb-2 text-gray-400" viewBox="0 0 24 27" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                        fill="currentColor" />
                </svg>

                <!-- Cita -->
                <blockquote
                    class="relative w-full md:w-3/ p-6 rounded-sm shadow-none md:shadow-xl text-left md:text-justify border-l-4 border-[#8b785d]">
                    <!-- Texto principal -->
                    <p class="text-lg font-medium text-gray-700 leading-relaxed">
                        Hola, soy <span class="font-semibold text-[#8b785d]">Rubén Baquero</span>, podólogo con más de
                        9 años de experiencia.
                        A lo largo de mi carrera he trabajado en diversas clínicas de Madrid, colaborando con grandes
                        profesionales que me han
                        permitido especializarme en <span class="font-semibold text-[#8b785d]">ecografía del pie y
                            tobillo</span>, <span class="font-semibold text-[#8b785d]">biomecánica</span>, <span
                            class="font-semibold text-[#8b785d]">pie diabético</span> y <span
                            class="font-semibold text-[#8b785d]">cirugía podológica</span>.
                    </p>

                    <!-- Texto oculto para la versión móvil -->
                    <p class="hidden lg:block mt-4 text-lg font-medium text-gray-700 leading-relaxed">
                        La pasión por mi profesión me motivó a realizar un <span
                            class="font-semibold text-[#8b785d]">Experto Universitario en Pie Diabético</span> en 2016
                        y un <span class="font-semibold text-[#8b785d]">máster en Cirugía Mínimamente Invasiva</span>
                        en 2018, además de completar una residencia en <span
                            class="font-semibold text-[#8b785d]">Cirugía del Pie y Tobillo</span> en Barcelona en 2020.
                        También he participado en programas de formación continuada, tanto a nivel nacional como en
                        <span class="font-semibold text-[#8b785d]">Estados Unidos</span>, lo que me ha permitido seguir
                        perfeccionando mis habilidades.<br><br>
                        Mi objetivo es ofrecerte un cuidado cercano y de calidad, utilizando los últimos avances en
                        podología para que tus pies estén siempre en las mejores manos. ¡<span
                            class="font-semibold text-[#8b785d]">Ven a conocernos</span>!
                    </p>

                    <!-- Botón de "Saber más" centrado -->
                    <button type="button"
                        class="lg:hidden mt-6 inline-block px-6 py-2 text-white bg-[#8b785d] hover:bg-[#705e4b] rounded-md shadow-md mx-auto"
                        onclick="this.previousElementSibling.classList.toggle('hidden'); this.innerText = this.innerText === 'Más sobre mí' ? 'Mostrar menos' : 'Más sobre mí';">
                        Más sobre mí
                    </button>
                </blockquote>
            </figure>
        </div>
    </section>

    <!-- Service Section-->
    <section id="services"
        class="text-gray-600 body-font md:mt-24 mt-3 opacity-0 translate-y-4 transition-all duration-700 delay-150">
        <div class="container px-5 py-4 md:py-12 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    <div class="w-24 h-full bg-[#8b785d]"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl md:text-3xl mb-2 sm:mb-0">
                        Servicios
                    </h1>
                </div>
            </div>
            <div class="flex flex-wrap text-normal md:text-justify sm:-m-4 -mx-4 -mb-5 -mt-12">
                <!-- Primera línea de servicios -->
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="{{ asset('media/photos/services/quiropodia.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Quiropodia</h2>
                    <p class="text-base text-justify leading-relaxed mt-2">
                        La quiropodia es un tratamiento podológico que elimina callosidades, durezas, uñas
                        encarnadas y
                        otras afecciones cutáneas en los pies.
                    </p>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="{{ asset('media/photos/services/cirugia_una.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Uñas encarnadas</h2>
                    <p class="text-base text-justify leading-relaxed mt-2">
                        La uña encarnada es una afección dolorosa en la que el borde de la uña crece hacia el
                        tejido blando, provocando inflamación y aumentando el riesgo de infección. Dependiendo de
                        la gravedad, el tratamiento puede ser conservador o quirúrgico.
                    </p>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="{{ asset('media/photos/services/estudio_biomecanica_pisada.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Estudio biomecánico de la pisada
                    </h2>
                    <p class="text-base text-justify leading-relaxed mt-2">
                        Un estudio biomecánico de la pisada nos permite examinar cómo se comporta el pie al
                        caminar para identificar posibles alteraciones y prevenir lesiones. Esto permite crear
                        tratamientos personalizados como plantillas para corregir desequilibrios y mejorar la función
                        del pie.
                    </p>
                </div>
                <!-- Línea extra de servicios (oculta en móviles) -->
                <div id="extra-services" class="hidden md:flex flex-wrap w-full mt-6">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="{{ asset('media/photos/services/plantillas.jpg') }}">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Plantillas Personalizadas
                        </h2>
                        <p class="text-base text-justify leading-relaxed mt-2">
                            Las plantillas personalizadas se diseñan a partir del molde del paciente y de un estudio
                            biomecánico, con el objetivo de ofrecer soporte y corregir problemas específicos del pie,
                            como la fascitis plantar, la metatarsalgia o el neuroma de Morton.
                        </p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="{{ asset('media/photos/services/ortesis_silicona.jpg') }}">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Ortesis de silicona</h2>
                        <p class="text-base text-justify leading-relaxed mt-2">
                            Las ortesis de silicona son dispositivos a medida diseñados para corregir deformidades
                            flexibles o aliviar el dolor en los dedos de los pies. Son cómodas, duraderas y se adaptan
                            perfectamente a la anatomía del paciente, ayudando a reducir la presión y protegiéndolos
                            del roce.
                        </p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="{{ asset('media/photos/services/ecografia.jpg') }}">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Ecografía del pie</h2>
                        <p class="text-base text-justify leading-relaxed mt-2">
                            La ecografía es una técnica de diagnóstico por imagen no invasiva y sin radiación que
                            permite evaluar lesiones, detectar inflamaciones y diagnosticar condiciones como
                            tendinitis,
                            fascitis plantar y bursitis. También es útil para planificar tratamientos ecoguiados,
                            como
                            infiltraciones analgésicas, y para valorar su evolución.
                        </p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="{{ asset('media/photos/services/ecografia.jpg') }}">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Infiltraciones ecoguiadas
                        </h2>
                        <p class="text-base text-justify leading-relaxed mt-2">
                            Procedimiento que utiliza ecografía para dirigir la aguja con precisión al área afectada
                            durante la inyección de medicamentos, mejorando la exactitud y seguridad del
                            tratamiento.
                        </p>
                    </div>
                </div>
                <!-- Botón Ver Más (solo para móviles) -->
                <div class="w-full text-center md:hidden mb-4">
                    <button id="toggleButton" class="text-[#8b785d] font-semibold" onclick="toggleExtraServices()">
                        Ver más
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div id="cabecera"
        class="container px-5 mt-20 -mb-6 mx-auto opacity-0 translate-y-4 transition-all duration-700 delay-150">
        <div class="flex flex-col">
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
                <div class="w-24 h-full bg-[#8b785d]"></div>
            </div>
            <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl md:text-3xl mb-2 sm:mb-0">
                    Contacto
                </h1>
            </div>
        </div>
    </div>

    <!-- Seccion Contacto -->
    <section id="contact"
        class="text-gray-600 body-font relative opacity-0 translate-y-4 transition-all duration-700 delay-150">
        <div class="container px-5 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                    marginheight="0" marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.8446068072626!2d-3.7389467999999995!3d40.390136500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227e2791e2b11%3A0xc44c9508e6c86e40!2sPodolog%C3%ADa%20y%20Biomec%C3%A1nica%20Rub%C3%A9n%20Baquero%20%7C%20Policl%C3%ADnica%20Alondra!5e0!3m2!1ses!2ses!4v1730374745972!5m2!1ses!2ses"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md max-w-full">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">DIRECCIÓN</h2>
                        <p class="mt-1">C. de Tucán, 7 Local, D-1,D-2, Carabanchel, 28025 Madrid</p>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TELÉFONO</h2>
                        <p class="leading-relaxed">914651911</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a
                            class="text-[#8b785d] leading-relaxed break-words hidden md:block">podologocarabanchel@gmail.com</a>
                        <a class="text-[#8b785d] leading-relaxed break-words block md:hidden">podologocarabanchel@</a>
                        <a class="text-[#8b785d] leading-relaxed break-words block md:hidden">gmail.com</a>

                        <div class="pt-0 md:pt-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">WHATSAPP
                            </h2>
                            <a href="https://wa.me/34657351637" target="_blank"
                                class="text-[#1c9e4c] leading-relaxed flex items-center">
                                <svg width="15px" height="15px" viewBox="0 0 48 48" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <title>Whatsapp-color</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs>

                                    </defs>
                                    <g id="Icons" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Color-" transform="translate(-700.000000, -360.000000)"
                                            fill="#67C15E">
                                            <path
                                                d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z"
                                                id="Whatsapp">

                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="text-sm ml-1">Enviar mensaje</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <form id="contact-form" action="{{ route('contact.send') }}" method="POST"
                class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                @csrf
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Formulario de Contacto</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Si tienes dudas, no dudes en escribirnos</p>

                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
                    <input type="text" id="name" name="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-[#8b785d] focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        required>
                </div>

                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Correo Electrónico</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-[#8b785d] focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        required>
                </div>

                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-[#8b785d] focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                        required></textarea>
                </div>

                <button
                    class="text-white bg-[#8b785d] border-0 py-2 px-6 focus:outline-none hover:bg-[#8b785d] rounded text-lg"
                    type="submit">Enviar</button>

                <p class="text-xs text-gray-500 mt-3">Para una mayor rapidez, puede contactar al número de la
                    clínica.
                </p>

                <!-- Mensaje de éxito -->
                <div id="success-message"
                    class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50 backdrop-blur-sm hidden">
                    <div
                        class="bg-green-500 text-white p-6 rounded-lg shadow-lg max-w-sm w-full relative transition-opacity opacity-100">
                        <button id="close-message"
                            class="absolute top-2 right-2 text-white text-xl focus:outline-none">
                            &times;
                        </button>
                        <div id="success-text">
                            <!-- El mensaje de éxito se llenará con JS -->
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </section>

    <!-- Footer -->
    <footer id="footer"
        class="text-gray-600 body-font mt-10 opacity-0 translate-y-4 transition-all duration-700 delay-150">
        <div class="bg-gray-200">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="{{ asset('media/photos/logo.svg') }}" class="w-18 h-14 md:w-28 md:h-24">
                </a>
                <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">
                    Biomecánica | Podología | Ecografía
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <p class="text-sm text-gray-500 font-semibold pt-0.5">
                        Linkedin
                    </p>
                    <a href="https://www.linkedin.com/in/rub%C3%A9n-baquero-zamora-3aa516107/"
                        class="ml-2 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                    <p class="text-sm text-gray-500 font-semibold pt-0.5 ml-4">
                        Doctoralia
                    </p>
                    <a href="https://www.doctoralia.es/ruben-baquero-zamora-2/podologo/madrid"
                        class="ml-1 mt-0.5 text-gray-500">
                        <img src="{{ asset('media/photos/doctoralia.png') }}" class="h-4 w-4">
                    </a>
                </span>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //! Función para manejar la aparición de los elementos
        document.addEventListener('DOMContentLoaded', () => {
            const infobar = document.getElementById('infobar');
            const navbar = document.getElementById('navbar');
            const hero = document.getElementById('hero');
            const about_me = document.getElementById('about_me');
            const services = document.getElementById('services');
            const quote = document.getElementById('quote');
            const contact = document.getElementById('contact');
            const cabecera = document.getElementById('cabecera');
            const footer = document.getElementById('footer');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-4');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            });

            observer.observe(infobar);
            observer.observe(navbar);
            observer.observe(hero);
            observer.observe(about_me);
            observer.observe(quote);
            observer.observe(services);
            observer.observe(contact);
            observer.observe(cabecera);
            observer.observe(footer);
        });

        function toggleExtraServices() {
            const extraServices = document.getElementById('extra-services');
            const toggleButton = document.getElementById('toggleButton');

            if (extraServices.classList.contains('hidden')) {
                extraServices.classList.remove('hidden');
                extraServices.classList.add('animate__animated', 'animate__fadeInUp');
                toggleButton.innerText = 'Ver menos';
            } else {
                extraServices.classList.add('hidden');
                toggleButton.innerText = 'Ver más';
            }
        }

        //! Toggle sidebar menu visibility and animate hamburger button
        document.getElementById('hamburger-btn').addEventListener('click', function() {
            const sidebarMenu = document.getElementById('sidebar-menu');
            const topBar = document.querySelector('.bar-top');
            const bottomBar = document.querySelector('.bar-bottom');

            sidebarMenu.classList.toggle('translate-x-[-100%]');
            sidebarMenu.classList.toggle('translate-x-0');

            // Toggle open classes for hamburger animation
            topBar.classList.toggle('rotate-45');
            topBar.classList.toggle('translate-y-1.5');
            bottomBar.classList.toggle('-rotate-45');
            bottomBar.classList.toggle('-translate-y-1.5');
        });

        //! Funcion para que cuando scrolle, haga una animacion la barra de navegacion
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const isMediumScreen = window.matchMedia('(min-width: 768px)').matches;

            if (isMediumScreen && window.scrollY > 10) {
                navbar.classList.add('shadow-lg', 'py-1', 'md:py-2', 'duration-100');
                navbar.classList.remove('py-4', 'md:py-6');
            } else if (isMediumScreen) {
                navbar.classList.remove('shadow-lg', 'py-1', 'md:py-2', 'duration-100');
                navbar.classList.add('py-4', 'md:py-6');
            }
        });

        //! Funcion para que cuando se haga click en el boton de enviar en el formulario de contacto, se muestre un mensaje de exito
        $(document).ready(function() {
            // Cuando se envíe el formulario
            $('#contact-form').submit(function(e) {
                e.preventDefault(); // Evita la recarga de la página

                // Recolectar los datos del formulario
                let formData = $(this).serialize();

                // Enviar el formulario usando AJAX
                $.ajax({
                    url: $(this).attr('action'), // URL del controlador
                    method: 'POST',
                    data: formData, // Datos del formulario
                    success: function(response) {
                        // Si el correo se envía correctamente, mostrar el mensaje de éxito
                        $('#success-text').text(response
                            .success); // El mensaje de éxito que vino del servidor
                        $('#success-message').removeClass('hidden').fadeIn();

                        // Limpiar el formulario después de un envío exitoso
                        $('#contact-form')[0].reset();

                        // Ocultar el mensaje después de 5 segundos
                        setTimeout(function() {
                            $('#success-message').fadeOut();
                        }, 5000);
                    },
                    error: function() {
                        // Si hubo un error, mostrar el mensaje de error
                        alert('Hubo un error enviando el mensaje. Intenta nuevamente.');
                    }
                });
            });

            // Cerrar el mensaje de éxito cuando se hace clic en la cruz
            $('#close-message').click(function() {
                $('#success-message').fadeOut();
            });
        });
    </script>

</body>

</html>
