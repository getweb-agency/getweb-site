{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Hosting, Paginas Web y Marketing Digital en Bogota')
@section ('seoDescription', 'Empresa Colombiana especializada en hosting, diseño y desarrollo de paginas web profesionales y marketing digital en Bogota, Colombia.')
@section ('seoKeywords','paginas web bogota, hosting, marketing digital')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')

{{-- BANNER --}}
<div class="relative bg-white overflow-hidden -mt-8 sm:-mt-20">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>
      <div class="relative pt-0 sm:pt-20 {{-- pt-6 px-4 sm:px-6 lg:px-8 --}}"></div>
      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="text-center lg:text-left">
          <h1 class="tracking-tight font-bold text-gray-900">
            <span class="block xl:inline text-lg sm:text-2xl pb-2">AGENCIA DE DISEÑO Y DESARROLLO</span>
            <span class="block xl:inline text-c-rojo text-3xl sm:text-5xl md:text-6xl">HOSTING, PÁGINAS WEB Y MARKETING DIGITAL</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-lg lg:mx-0">
            Expertos en <span class="font-bold">Hosting, diseño y desarrollo de Páginas web profesionales y Marketing Digital</span> publicidad con Google Adwords.
          </p>
          <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start pt-6 space-x-0 sm:space-x-4 space-y-4 sm:space-y-0">
            <a href="https://wa.me/573195895064?text=Hola, quiero recibir más información sobre los servicios de Getweb" target="blank" class="inline-flex items-center px-8 py-3 text-white font-semibold bg-gradient-to-br from-green-400 to-green-500 hover:to-green-600 rounded-md shadow-sm shadow">
              <svg class="mr-4 w-8 h-8" aria-hidden="true" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M381 97A222 222 0 0032 365L0 480l118-31a224 224 0 00330-195c0-59-25-115-67-157zM224 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 01287-229c34 35 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-33-17-54-30-75-66-6-10 5-10 16-31 2-3 1-7-1-9l-17-42c-4-10-9-9-12-9h-11c-4 0-10 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-13 37-26 5-13 5-25 4-27-2-2-5-4-11-6z"/>
              </svg>
              <div class="flex flex-col leading-5">
                <span class="block font-normal">Escríbenos a</span>Whatsapp
              </div>
            </a>
            <a href="/cotizar-en-linea" class="inline-flex items-center px-8 py-3 text-white font-semibold bg-gradient-to-br from-indigo-400 to-indigo-500 hover:to-indigo-600 rounded-md shadow-sm shadow">
              <svg class="mr-4 w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
              </svg>
              <div class="flex flex-col leading-5">
                <span class="block font-normal">Empieza a</span>Cotizar en línea
              </div>
            </a>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 {{-- hidden md:block --}}">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('images/banners/banner-home.jpg') }}" alt="">
  </div>
</div>

{{-- SERVICES --}}
<div class="py-12 bg-white bg-gray-1000 bg-gradient-to-tr from-white to-gray-100">
  <div class="py-4 px-5{{-- max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 --}}">
    <div class="text-center">
      <h2 class="text-base text-black font-bold tracking-wide uppercase">Nuestro portafolio de servicios</h2>
      <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-c-rojo sm:text-4xl uppercase">
        Getweb te ofrece todo lo que necesitas
      </p>
      <span class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
        Hosting, Sitios web profesionales y Marketing Digital
      </span>
    </div>

    <div class="mt-20">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">

        <x-modulo.card 
        rute='/paginas-web/wordpress-administrable' 
        image='images/banners/banner-website.jpg' 
        category='de sitios web' 
        service='Páginas web administrables'
        />
        <x-modulo.card 
        rute='/paginas-web/tienda-virtual-ecommerce' 
        image='images/banners/banner-ecommerce.jpg' 
        category='de comercio en linea' 
        service='Tienda online, E-commerce'
        />
        <x-modulo.card 
        rute='/paginas-web/desarrollo-personalizado' 
        image='images/banners/banner-custom.jpg' 
        category='de sitios web' 
        service='Desarrollos y soluciones a necesidades especificas'
        />
        <x-modulo.card 
        rute='hosting/planes-hosting' 
        image='images/banners/banner-hosting.jpg' 
        category='de Hosting' 
        service='Planes de hosting comercial'
        />
        <x-modulo.card 
        rute='marketing-digital/google-ads' 
        image='images/banners/banner-ads.jpg' 
        category='de marketing digital' 
        service='Publicidad con Google Adwords'
        />
        <x-modulo.card 
        rute='/apps/progressive-web-apps' 
        image='images/banners/banner-pwa.jpg' 
        category='de aplicaciones web' 
        service='PWA, Progressive web apps'
        />

      </dl>
    </div>
  </div>
</div>

{{-- CTA --}}
<x-cta.main />

{{-- CLIENTS --}}
<div class="py-12 bg-white">
  <div class="py-0 px-8{{-- max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 --}}">
    <div class="text-center">
      <h2 class="text-base text-black font-bold tracking-wide uppercase">Nuestro clientes</h2>
      <p class="mt-2 leading-8 font-bold tracking-tight text-c-rojo text-3xl sm:text-4xl uppercase">
        Mas de 100 empresas en diversos sectores
      </p>
      <span class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
        Estas son algunas de las empresas que han confiado en nosotros, en nuestros servicios y método de trabajo
      </span>
    </div>

    <div class="mt-16 flex flex-wrap gap-4 items-center justify-center">
      @php 
      $numeros = range(1, 30); shuffle($numeros);
      @endphp
      @foreach ($numeros as $numero) 
      <div class="">
        <img class="h-32" 
        src="{{ asset('images/clients/client-'.$numero.'.png') }}" alt="Man looking at item at a store">
      </div>
      @endforeach
    </div>
  </div>
</div>

{{-- COMPANY --}}
<div class="py-12 bg-gradient-to-tr from-white to-gray-200">
  <div class="py-0 px-8 sm:px-16 ">
    <div class="text-center">
      <h2 class="text-base text-black font-bold tracking-wide uppercase">Nuestra agencia</h2>
      <p class="mt-2 leading-8 font-bold tracking-tight text-c-rojo text-3xl sm:text-4xl uppercase">
        Somos la empresa Web que su negocio necesita
      </p>
      <span class="mt-4 max-w-2xl text-md text-gray-500 lg:mx-auto">
        Ayudamos a empresas y microempresas a aprovechar las nuevas tecnologías para hacer crecer sus negocios mediante el trabajo en equipo de nuestros diseñadores, programadores y marketing. Permitiendo la publicidad y posicionamiento de nuestras páginas web de la forma mas simple para nuestros clientes. Siendo proveedores de gran calidad y reconocidos entre agencias y empresas de desarrollo de sitios web en Bogotá, Colombia.
      </span>
    </div>
  </div>
</div>

@stop