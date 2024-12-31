<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unidad de Gestion de Riesgos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom"> </script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,
            ::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}
            html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}
            body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}
            h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}
            b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}
            small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}
            button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}
            :-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}
            .dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}
            @media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            .dividido1{display: grid; grid-template-columns:repeat(3,1fr);height: 190px; }
        .degrade{background-image:linear-gradient(#3c69b1,#0097a7);
            color: white;border-radius: 20px;display: grid; grid-template-columns:repeat(3,1fr);padding: 40px;}
            .degrade1{background-image:linear-gradient(#3c69b1,#0097a7);color: white;border-radius: 20px;grid-template-columns:repeat(3,1fr); padding: 40px;}
            .degrade2{background-image:linear-gradient(#3c69b1,#0097a7);color: white; padding: 40px; height: 160px;}
            .degrade3{background-image:linear-gradient(#3c69b1,#0097a7);color: white; padding: 40px; height: 300px; }
            .bgNav2{ background-color:rgb(13, 71, 161) !important; width: 100%;}
            .bgBorder1{height: 70px;}
            
            .bgBorder{height: 22px;}
            .centro{padding-left:50px;padding-top: 20px; }.dividido{width: 100%;}
            .textTitulo{text-align: center;}
            .si{text-align: center; overflow: hidden; border-radius:10px }.pri{padding: 20px;}
            .spantitle{font-size: 30px; text-align: center; padding-top: 60px}
            .colorWhite{color:white;}
            .titulo1{font-size: 20px;}.tam1{height: none   ;}@media(min-width:700px){.tam1{height: 200px;}}
            .ima{height: 70px;}
            .mta-16{margin-top: 180px}
            .text2{color:black; font-size: 35px; text-align: center;  margin-bottom: 26px;margin-top: -35px;}
            .img2{max-width: 100%;height: auto; padding-top: 20px;}
            .mta-3,.col-12{margin-top: 1rem; max-width: 100%;}
            .banner{position: relative;}
            .banner-in{position: relative;width: 100%;overflow: hidden;}
            .banner-item{position: relative; display: none; align-items: center; width: 100%;}
            .banner-item.active{display: block;}
            .grid1{display: grid; grid-template-columns:repeat(3,1fr);gap: 20px; }
            .card{display: flex; flex-direction: column;justify-content: space-between;background: #0097a7;border-radius: 8px; box-shadow: 0 2px 5px #0000001a;width: 360px;height: auto; padding: 0;overflow: hidden;}
            @media(min-width:700px){.img2{max-width: 100%;height: auto;}}
            @media(max-width:700px){.titulo,.titulo1,.spantitle{font-size: 12px; text-align: center; padding-top: 0}}
            @media(max-width:700px){.centro{padding-left:0; }}
            @media(max-width:700px){.degrade{padding: 0;height: 100px;}}
            @media(max-width:700px){.degrade3{padding: 0;height: 100px;}}
            @media(max-width:700px){.bgBorder{height: 10;}}
            @media(max-width:700px){.h3{margin:0;}}
            @media(max-width:700px){.dividido{height: 100%;}}
            @media(max-width:700px){.dividido1{height: 100%;}}
            @media(max-width:700px){.textTitulo{top:20%; position: relative;}}
            @media(max-width:700px){.mta-16{margin-top: 90px;}}
            @media(max-width:700px){.bgBorder1{height: 0px;}}
            @media(max-width:700px){.col{min-height: 100px;}}
            
            
            .card1 { border: none; transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1); overflow: hidden; border-radius: 20px; min-height: 450px; box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);}
            @media (max-width: 1200px) {.card1 { min-height: 140px; } }
            .card1-has-bg { transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1); 
                background-size: 120%; background-repeat: no-repeat; background-position: center center; }
            .card1-has-bg:before { content: ''; position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: inherit;
             -webkit-filter: grayscale(1); -moz-filter: grayscale(100%); -ms-filter: grayscale(100%); -o-filter: grayscale(100%); filter: grayscale(100%); }
            .card1-has-bg:hover { transform: scale(0.98); box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3); background-size: 130%; transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1); }
            .card1-has-bg:hover .card1-img-overlay { transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1); background: rgb(13, 71, 161); background: linear-gradient(0deg, rgba(13, 71, 161) 0%, rgba(13, 71, 161) 100%); }
            .card1-footer { background: none; border-top: none; }
            .card1-footer .media img { border: solid 3px rgba(255, 255, 255, 0.3); } 
            .card1-title { font-weight: 800;padding-left: 10px; }
            .card1-meta { text-transform: uppercase; font-weight: 500; letter-spacing: 2px;padding-left: 10px; }
            .card1-body { transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1); }
            .card1:hover .card1-body { margin-top: 30px; transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1); }
            .card1:hover { cursor: pointer; transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1); }
            .card1-img-overlay { transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1); background: #0A91A8; background: linear-gradient(0deg, #0A91A8 0%, #3c69b1 100%); } 
            .media1{padding-top:20px;padding-block-end: 60px; background: white;}
            .smallleft{padding-left: 10px}
            .configImg{width: 200px; height: 150px; object-fit: cover}
            .dis4{font-size: 2.5rem}
            @media(max-width:700px){.dis4{font-size: 20px;}}
            .card12{padding: 20px;}
            @media(max-width:700px){.lead{font-size: 15px;}}
            .tam2{min-height: 400px;}
            #map { height: 600px;    border: 1px solid #ccc;}


        </style>
    </head>
    <nav class="bgNav2"></nav>
    <body class="antialiased">
        
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter white:bg-white-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="bgNav2 sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
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
            <div class="mx-auto">
                <div class="bgBorder1"></div>
                
                    <div class="degrade3 dividido1">
                        <a class="scale-100 p-6  ">
                            <img class="img2 centro" src="{{ asset('img/MarcaDepFi.png') }}">
                        </a>
                        <a>
                            <span class="textTitulo">
                                <h3 class="spantitle" > CENTRO DE MONITOREO E INFORMACIÓN</h3>
                                <h5 class="titulo1">PARA LA GESTIÓN DE RIESGOS Y DESASTRES</h5>
                            </span>
                        </a>
                        <a class="scale-100 p-6 ">
                            <img class="img1 centro" src="{{ asset('img/MarcaGestion1.png') }}">
                        </a>
                    </div>
                <div class="bgBorder"></div>
                <div class="card12">
                <div class="card1">
                    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img class="d-block w-100 " src="{{asset('img/face1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " src="{{asset('img/face1.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/face1.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
                
                
                <div class="hero ">
                    <a  class="noticia ">
                        <div class="grid-container tam100" >
                            <div class=" tam j104">
                               
                            </div>
                        </div>
                    </a>
                        
                       
                    </a>
                </div>
                <div>
                    <h1 id="map-title"> </h1>
                    <div id="map"> </div>
                    <script>
                        fetch('map.js')
                        .then(response=>.json())
                        .then(data=>{
                            const mapTitle = document.getElementById('map-title');
                             mapTitle.innerHTML = data.main_settings.width;
                            const mapDiv = document.getElementById('map');
        // Aquí puedes crear el mapa utilizando una biblioteca como Leaflet o Google Maps
        // y utilizar los datos del objeto JSON para configurar el mapa
        const location = data.locations["1"];
        const locationImage = document.createElement("img");
        locationImage.src = location_image_source;
        locationImage.alt = location.name;
        mapDiv.appendChild(locationImage);
      })
      .catch(error => console.error('Error:', error));
                    </script>
                </div>
                <!--div class="bgBorder1"></!--div>
                

                  
                <div id="map"></div>

                
                <script>
                    var map = L.map('map').setView([-17.3991823, -66.1593076], 13); // Coordenadas de inicio (New York)
            
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
            
                    // Agrega un marcador
                    var marker = L.marker([-17.3991823, -66.1593076]).addTo(map);
                    marker.bindPopup("<b>¡Hola!</b><br>Estoy en New York.").openPopup();
                </script>
<div>

    <img src="{{asset('img/bo.svg')}}">
</!--div-->

    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between degrade2">
        <div class="text-center text-sm sm:text-left">
            &nbsp;
        </div>
        <div class="text-center colorWhite text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            <div class="dividido1">
                <a>
                    <span class="textTitulo">
                        <h3 class="spantitle" > TELEFONOS</h3>
                        <h5 class="titulo1">4259671 – 4251565</h5>
                    </span>
                </a>
                <a>
                    <span class="textTitulo">
                        <h3 class="spantitle" > Teléfono de Emergencia:</h3>
                        <h5 class="titulo1">129</h5>
                    </span>
                </a>
                <a>
                    <span class="textTitulo">
                        <h3 class="spantitle" >DIRECCION DE LA OFICINA</h3>
                        <h5 class="titulo1">Av. Aroma N° 0327 acera sud frente a la Plaza San Sebastián,
                            Cochabamba, Bolivia</h5>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</html>
