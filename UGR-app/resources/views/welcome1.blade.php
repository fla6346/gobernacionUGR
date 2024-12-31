<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unidad de Gestion de Riesgos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}
            blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}
            fieldset{margin:0;padding:0}
            legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}
            textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}
            audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}
            img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;
                --tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-white-500{stroke:#ffffff}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem;}.px-6{padding-left:1.5rem;padding-right:1.5rem}
                .p-4{padding:1rem; padding-left: 10px}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(96 163 219 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(60 105 177 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(60 105 177 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(96 163 219 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}
                .white\:bg-white-900{--tw-text-opacity:1;color:#ffffff / var(--tw-text-opacity)}
                @media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(96 163 219 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(96 163 219 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{
                background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{font:icon;font-size: x-small; --tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
                .img1{padding-left: 70px}
                #hero{width: 100%; height: 50vh;background-image: ; background-size: cover;position: relative; z-index: 9;}#hero .hero-cont{position: absolute;top: 0;left:0; right:0;display: flex;justify-content: center;align-items: center;text-align: center;padding: 0 15px;height: 500px;}
                @media(max-width:700px){#hero{height: 10vh;}}
                @media(max-width:700px){#hero .hero-cont{height: 150px;}}
                .dividido{display: grid;  grid-template-columns: repeat(3,1fr);gap:0rem;margin-bottom: 20px}.dividido1{display: grid;  grid-template-columns: repeat(2,1fr);gap:0rem;margin-bottom: 20px;background-color: #0272BC;border-radius: 10rem;height: 270px;}.gap-10{gap: 50rem;}.spantitle{font-size: 30px;color: black; text-align: center;}.logo-escudo{display: block;margin: 0 auto;}.bgNav2{height: 80px;color: #ef4444;background: linear-gradient(180deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 57%, rgba(0,0,0,0) 100%);box-shadow: none;padding-top: 25px}.bgNav10{z-index: 1100; position: fixed}.bgNav8{color: #555;width: 100%;border: 0;display: flex;padding: 0.625rem 0;z-index: unset; position: relative;flex-flow: row nowrap;transition: all 150ms ease 0s; align-items: center; border-radius: 3px;margin-bottom: 20px;justify-content: flex-start;background-color: #0272BC; }
                .bgBorder{background-color: white;height: 20px;}.fontT1{font-size: 20px;text-align: center}
                .tamMedia{}.dividido2{grid-template-columns:repeat(2,1fr);margin-bottom: 10px; } @media(max-width:768px){.dividido{flex-direction: column;}}@media(max-width:768px){.dividido1{flex-direction: column;height: 100px;}}@media(max-width:700px){.spantitle{font-size: 5px;}}@media(max-width:700px){.p-6{padding-left: 20px;}}@media(max-width:700px){.titulo1{font-size: 5px;}}@media(max-width:700px){.img1{height: 60px;padding-left: unset;}}
                .noticia{padding: 5px 0;text-align: center;width: 100%;margin-left: auto;margin-right: auto;padding-left: 15px;padding-right: 20px}.grid-container{width: 100%; display: flex;flex-wrap: wrap;box-sizing: border-box;}
                .tam100{width: auto;margin-right: -15px}.j104{color: #4b5563;cursor: pointer;margin-top: 30px;min-height:32px;text-align: left;font-family: 'Times New Roman', Times, serif;font-weight: 700;margin-bottom: 1rem;text-decoration: none;}
                .tam101{width: 100%;position: relative; flex-basis: auto;min-height: 1px;padding-left: 15px;padding-right: 15px;}
                .tam211{height: 0; background-size: 100% 100%}
                .j106{display: flex;}.vh2{font-size: 2.25rem;line-height: 1.5rem;}
                .card{margin: 0;position: relative;overflow: hidden;}
                .media{display: block;background-size: cover;background-repeat: no-repeat;background-position: center;}
                .figure{display: block;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 40px;margin-inline-end: 40px;unicode-bidi: isolate}
                .Grid-grid-xs-12{flex-grow: 0;max-width: 100%;flex-basis: 100%;}
                .custom{position: absolute;text-align: right;left: 0;top: 0; width: 100%;}
                @media(max-width:700px){.img2{height: 65px;}}.img2{padding-left: 60px;}.imgFace{width: 765px;max-width: none;}
                @media(max-width:700px){.centro{padding-left: 36px;}}
                @media(max-width:900px){.imgFace{padding-left: 36px;width: 610px}}
                @media(max-width:700px){.grid-cols-1{grid-template-columns:repeat(2,minmax(0,1fr)) }}
                @media(max-width:700px){.letter1{font-size: 5px;text-align: center;}}@media(max-width:700px){.tamMedia{height: 100px;}}@media(max-width:700px){.iconslarge{height: 20px;}}
                @media(max-width:700px){.responsive-img1{height: 10px;padding-right: 50px;}}.responsive-img{border-radius: 50px} @media(max-width:700px){.responsiveImg{height: 10px;}}@media(max-width:700px){.tam{height: 10px;}}
                @media(max-width:700px){.taman{height: 10px;}}
                @media(max-width:700px){.fontT1{font-size: 7px;}}
                @media(max-width:700px){.mt-6{margin-top: 0rem;}}
                @media(max-width:700px){.vh2{font-size: 6px}}
                @media(max-width:600px){.Grid-grid-sm-12{flex-grow: 0;max-width: 66.666%;flex-basis: 66.6667%}}
                @media(max-width:960px){.Grid-grid-md-8{flex-grow:0;max-width: 66.666%;flex-basis: 66.6667%}}
        </style>


        </style>
    </head>
    <nav class="bgNav2 bgNav10 bgNav8"></nav>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter white:bg-white-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">quienes somos</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center dividido dividido1">
                    <a class="scale-100 p-6  ">
                       <img class="img2 centro" src="{{ asset('img/MarcaDepFi.png') }}">
                    </a>
                    
                    <a class="scale-100 p-6 ">
                        <img class="img1" src="{{ asset('img/MarcaGestionFi.png') }}">
                    </a>
                </div>
                <div class="bgBorder">
                    <h1>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">Bien
                    </h1>
                </div>
                <div id="hero">
                    <div class="hero-cont">
                        <a class="scale-100 p-6">
                        <img class="responsive-img  dividido2 imgFace" src="{{asset('img/face1.jpg')}}">
                        </a>
                        <a class="scale-100 p-4 ">
                            <h3 class="spantitle" > CENTRO DE MONITOREO E INFORMACIÓN</h3>
                            <h5 class="titulo1">PARA LA GESTIÓN DE RIESGOS Y DESASTRES</h5>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center hero-cont  bgBorder">
                </div>
                <div class="hero ">
                    <a  class="noticia ">
                        <div class="grid-container tam100" >
                            <div class=" tam j104">
                                <h2 class="vh2">
                                <span class="j106">
                                    ULTIMAS NOTICIAS
                                </span>
                                </h2>
                            </div>
                        </div>
                    </a>
                        <div class="grid-Container tam100" >
                            <div class=" grid-Container grid-Item tam101 Grid-grid-xs-12 Grid-grid-sm-12 Grid-grid-md-8">
                                <figure class="card tam211">
                                    <img class="media" src="{{asset('img/face1.jpg')}}">
                                       
                                    </img>
                                    <figurecaption class="custom">

                                    </figurecaption>
                                    <figurecaption class="custom">

                                    </figurecaption>
                                </figure>
                            </div>
                            <div>
                                <div class="grid-Container grid-Item tam101 Grid-grid-xs-12 Grid-grid">
                                    <figure class="card">
                                        <div class="media">
                                        <img src="{{asset('img/face1.jpg')}}">
                                            <a class="scale-100 p-4 ">
                                                <h3 class="spantitle" > CENTRO DE MONITOREO E INFORMACIÓN</h3>
                                                <h5 class="titulo1">PARA LA GESTIÓN DE RIESGOS Y DESASTRES</h5>
                                            </a>
                                        </img>
                                        <figurecaption class="custom">
                                            <button>
                                                <a href="#">VER MAS</a>
                                            </button>
                                            <button>
                                                <a href="#">VER MAS</a>
                                            </button>
                                            <button>
                                                <a href="#">VER MAS</a>
                                            </button>
    
                                        </figurecaption>
                                        <figurecaption class="custom">
    
                                        </figurecaption>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                       
                    </a>
                </div>

                <!--div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="tamMedia scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="taman" >
                                <div class=" h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full tam">
                                    <i class="icons large">
                                        <img class="responsive-img ima responsive-img1" src="{{asset('img/icons/dat.png')}}">
                                       </i>
                                </div>

                                <h2 class="fontT1 mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sistema de administración de datos</h2>

                                <p class="letter1">
                                    Base de datos de eventos adversos, afectaciones y daños. Los datos provienen de la evaluación de daños y análisis de necesidades. 
                                </p>
                            </div>
                            <i class="bi bi-arrow-right">

                            </i>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-white-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class=" tamMedia scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="taman">
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full tam">
                                    <i class="icons large">
                                        <img class="responsive-img ima responsive-img1" src="{{asset('img/icons/alert.png')}}">
                                    </i>
                                </div>

                                <h2 class="fontT1 mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sistema de alerta temprana departamental</h2>

                                <p class="letter1">
                                    Vigilancia y monitoreo de amenazas probables frente a condiciones de vulnerabilidades existentes.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-white-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                    </div>
                </!--div-->
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="tamMedia scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="taman" >
                                <div class=" h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full tam">
                                    <i class="icons large">
                                        <img class="responsive-img ima responsive-img1" src="{{asset('img/icons/dat.png')}}">
                                       </i>
                                </div>

                                <h2 class="fontT1 mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sistema de administración de datos</h2>

                                <p class="letter1">
                                    Base de datos de eventos adversos, afectaciones y daños. Los datos provienen de la evaluación de daños y análisis de necesidades. 
                                </p>
                            </div>
                            <i class="bi bi-arrow-right">

                            </i>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-white-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class=" tamMedia scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="taman">
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full tam">
                                    <i class="icons large">
                                        <img class="responsive-img ima responsive-img1" src="{{asset('img/icons/alert.png')}}">
                                    </i>
                                </div>

                                <h2 class="fontT1 mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sistema de alerta temprana departamental</h2>

                                <p class="letter1">
                                    Vigilancia y monitoreo de amenazas probables frente a condiciones de vulnerabilidades existentes.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-white-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="tamMedia scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="taman">
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full tam">
                                    <i class="icons large">
                                        <img class="responsive-img ima responsive-img1" src="{{asset('img/icons/cono.png')}}">
                                       </i>
                                </div>

                                <h2 class="fontT1 mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sistema de gestión del conocimiento</h2>

                                <p class="letter1">
                                    Transferencia de conocimientos y experiencias para contribuir a la resiliencia e instaurar una cultura de prevención.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-white-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                        <a href="https://laravel-news.com" class="tamMedia scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="taman">
                                <div class="fontT1 h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full tam">
                                    <i class="icons large">
                                        <img class="responsive-img ima responsive-img1" src="{{asset('img/icons/cono.png')}}">
                                       </i>
                                </div>

                                <h2 class="fontT1 mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sistema de coordinación de respuesta</h2>

                                <p class="letter1">
                                    Articulación de acciones para las operaciones, logística e información para una respuesta coordinada ante eventos adversos
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-white-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
