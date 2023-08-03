<!DOCTYPE html>
<html lang="{{__('language')['lang']}}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Stay</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta name="description" content="{{__('language')['description']}}">
    <meta name="keywords" content="{{__('language')['keywords']}}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="{{__('language')['fullname']}}">
    <meta name="title" content="Stay">
    <meta name="author" content="M&P">

    <link rel="alternate" href="https://stay.com.ar/es" hreflang="es" />
    <link rel="alternate" href="https://stay.com.ar/en" hreflang="en" />
    <link rel="alternate" href="https://stay.com.ar/it" hreflang="it" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://stay.com.ar/{{__('language')['lang']}}" />
    <meta property="og:title" content="Stay" />
    <meta property="og:description" content="{{__('language')['description']}}" />
    <meta property="og:image" content="/assets/images/coderdocs-logo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://stay.com.ar/{{__('language')['lang']}}" />
    <meta property="twitter:title" content="Stay" />
    <meta property="twitter:description" content="{{__('language')['description']}}" />
    <meta property="twitter:image" content="/assets/images/coderdocs-logo.png" />

    <script src="https://kit.fontawesome.com/29afb26063.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="notification.css"></link>
    <script src="notification.var.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

    <script>
        $(document).on("scroll", function() {
            var pageTop = $(document).scrollTop();
            var pageBottom = pageTop + $(window).height();
            var tags = $(".tag");

            for (var i = 0; i < tags.length; i++) {
                var tag = tags[i];

                $(tag).on("animationend", function() {
                    $(tag).removeClass("tag animate__animated animate__zoomIn");
                });

                if ($(tag).position().top < pageBottom) {
                    $(tag).addClass("animate__animated animate__zoomIn");
                    $(tag).removeClass("hidden");
                } else {
                    console.log('no');
                    $(tag).addClass("hidden");
                    $(tag).removeClass("animate__animated animate__zoomIn");
                }
            }
        });

        async function contactpush(data) {
            if (data == 'success') {
                switch (document.documentElement.lang) {
                    case 'es':
                        new AWN().success('Consulta registrada correctamente', {
                            labels: {
                                success: 'Éxito'
                            }
                        })
                        break;
                    case 'en':
                        new AWN().success('Inquiry registered correctly')
                        break;
                    case 'it':
                        new AWN().success('Query registrata correttamente', {
                            labels: {
                                success: 'Successo'
                            }
                        })
                        break;

                    default:
                        new AWN().success('Inquiry registered correctly')
                        break;
                }
            } else {
                switch (document.documentElement.lang) {
                    case 'es':
                        new AWN().warning(data, {
                            labels: {
                                warning: 'Error'
                            }
                        })
                        break;
                    case 'en':
                        new AWN().warning(data)
                        break;
                    case 'it':
                        new AWN().warning(data, {
                            labels: {
                                warning: 'Avvertimento'
                            }
                        })
                        break;

                    default:
                        new AWN().warning(data)
                        break;
                }
            }
        }
    </script>

</head>

<body class="text-gray-800 antialiased transition-all">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <img height="40px" width="54px" src="assets/images/coderdocs-logo.png" alt="logo">
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center hover:scale-110 transition-all">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="/{{ __('language')['lang'] }}/docs"><i
                                class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                            Docs</a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center hover:scale-125 transition-all">
                        <div class="container flex justify-center mx-auto">
                            <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                                <!-- Dropdown toggle button -->
                                <button @mouseover="open = true" class="flex items-center block rounded-md ">
                                    <span><span class='fi fi-{{__('language')['name']}}'></span></span>
                                    <svg class="w-6 h-6 text-white text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div x-show="open"
                                x-transition:enter.duration.500ms
                                x-transition:leave.duration.800ms
                                class="absolute right-0 rounded-md shadow-xl">
                                    <a href="{{ __('language')['selector']['first']['url'] }}"
                                        class="hover:text-white">
                                        <span class='fi fi-{{ __('language')['selector']['first']['name'] }}'></span>
                                    </a>
                                    <a href="{{ __('language')['selector']['second']['url'] }}"
                                        class="hover:text-white">
                                        <span class='fi fi-{{ __('language')['selector']['second']['name'] }}'></span>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li class="flex items-center hover:scale-125 transition-all">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.threads.net/@stay_attendance"><i
                                class="lg:text-gray-300 text-gray-500 text-lg fa-solid fa-at leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Threads</span></a>
                    </li>
                    <li class="flex items-center hover:scale-125 transition-all">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.instagram.com/stay_attendance"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg "></i><span
                                class="lg:hidden inline-block ml-2">Instagram</span></a>
                    </li>
                    <li class="flex items-center hover:scale-125 transition-all">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://github.com/MaximoBrandi/stay"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "></i><span
                                class="lg:hidden inline-block ml-2">Repository</span></a>
                    </li>
                    <li class="flex items-center hover:scale-110 transition-all">
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="button"
                            onclick="window.location.href='https://github.com/MaximoBrandi/stay/releases/tag/Release'"
                            style="transition: all 0.15s ease 0s;">
                            <i class="fas fa-arrow-alt-circle-down"></i> {{ __('header')['download'] }}
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("https://i.ibb.co/0VbKRvK/351852516955856336.webp");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="lg:pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                {{ __('hero')['title'] }}
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                {{ __('hero')['subtitle'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">{{ __('hero')['items'][0]['title'] }}</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    {{ __('hero')['items'][0]['subtitle'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <h6 class="text-xl font-semibold">{{ __('hero')['items'][1]['title'] }}</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    {{ __('hero')['items'][1]['subtitle'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-triangle-exclamation"></i>
                                </div>
                                <h6 class="text-xl font-semibold">{{ __('hero')['items'][2]['title'] }}</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    {{ __('hero')['items'][2]['subtitle'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            {{ __('item-1')['title'] }}
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                            {{ __('item-1')['subtitle-1'] }}
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            {{ __('item-1')['subtitle-2'] }}
                        </p>
                        {{-- <a href="about:blank"
                            class="font-bold text-gray-800 mt-8">Aprende mas sobre como funciona Stay</a> --}}
                    </div>
                    <div class="tag hidden w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div class="w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="https://i.ibb.co/7v2YBQB/351843669310640812.webp"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    {{ __('item-1')['article-title'] }}
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    {{ __('item-1')['article-subtitle'] }}
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="tag hidden w-full md:w-4/12 mb-4 lg:mb-0 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://i.ibb.co/qFG7pRS/351852237745231833.webp" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">{{ __('item-2')['title'] }}</h3>
                            <p style="white-space: pre-line;" class="mt-4 text-lg leading-relaxed text-gray-600">
                                {{ __('item-2')['subtitle'] }}</p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                {{ __('item-2')['point-1'] }}
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">{{ __('item-2')['point-2'] }}</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">{{ __('item-2')['point-3'] }}</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Colaboradores</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                            Estos son los actuales mas importantes colaboradores en el proyecto,
                            Ayudando en nuestro repositorio de GitHub puedes tambien terminar aqui!
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center text-center">
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="https://media.licdn.com/dms/image/D4D03AQFBhJWmW0dupw/profile-displayphoto-shrink_800_800/0/1690676194583?e=1696464000&v=beta&t=gyx9bgovb6NIuT4yVhMFDI7D9FrdEuPeKKs63REBm2s"
                                class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Máximo Prandi</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Software developer
                                </p>
                                <div class="mt-6">
                                    <button
                                    class="hover:scale-110 hover:bg-pink-400 transition-all bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fa-solid fa-globe"></i></button><button
                                    class="hover:scale-110 hover:bg-blue-500 transition-all bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-linkedin"></i></button><button
                                    class="hover:scale-110 hover:bg-red-500 transition-all bg-red-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-instagram"></i></button><button
                                    class="hover:scale-110 hover:bg-dark transition-all bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-at"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="lg:pb-20 pb-32 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full mt-4 lg:mt-0 lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">{{ __('contact')['title'] }}</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            {{ __('contact')['subtitle'] }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                    <div class="w-full lg:w-6/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                            <div class="flex-auto p-5 lg:p-10">
                                <form action="/contact" method="post">
                                    @csrf
                                    <h4 class="text-2xl font-semibold">{{ __('contact')['form']['title'] }}</h4>
                                    <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                        {{ __('contact')['form']['subtitle'] }}
                                    </p>
                                    <div class="relative w-full mb-3 mt-8">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="full-name">{{ __('contact')['form']['full-name'] }}</label><input
                                            type="text" name="name"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="{{ __('contact')['form']['full-name'] }}"
                                            style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="email">Email</label><input type="email" name="email"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="message">{{ __('contact')['form']['message-title'] }}</label>
                                        <textarea rows="4" cols="80" name="message"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="{{ __('contact')['form']['message-placeholder'] }}"></textarea>
                                    </div>
                                    @foreach ($errors->all() as $error)
                                        <script>
                                            contactpush('{{ $error }}')
                                        </script>
                                    @endforeach
                                    <div class="scale-75 md:scale-100">
                                        {!! HCaptcha::display() !!}
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                            type="submit" style="transition: all 0.15s ease 0s;">
                                            {{ __('contact')['form']['send'] }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">{{ __('footer')['title'] }}</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        {{ __('footer')['subtitle'] }}
                    </h5>
                    <div class="mt-6">
                        <button onclick="window.location.href='https://www.threads.net/@stay_attendance'"
                            class="hover:scale-125 transition-all bg-white text-black shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fas fa-at"></i></button><button
                            onclick="window.location.href='https://www.instagram.com/stay_attendance'"
                            class="hover:scale-125 transition-all bg-white text-black shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-instagram"></i></button><button
                            onclick="window.location.href='https://github.com/MaximoBrandi/stay'"
                            class="hover:scale-125 transition-all bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-github"></i>
                        </button>
                    </div>
                </div>
                {{-- <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Mas informacion</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation">Sobre nosotros</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free">Productos</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Otros</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms">Terminos &amp; Condiciones</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 transition-all hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy">Politica de privacidad</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        2023 Stay by
                        <a href="https://maximoprandi.tech" class="text-gray-600 hover:text-gray-900">
                            M&amp;P</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    {!! HCaptcha::script() !!}
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>
