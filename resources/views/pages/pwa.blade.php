{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Aplicacion web, Desarrollo de PWA, Progressive web apps')
@section ('seoDescription', 'SErvicio de desarrollo de aplicaciones web progressive web app - PWA.')
@section ('seoKeywords','aplicaciones, app, pwa, Progressive web apps, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')
{{-- HEADING --}}
<x-banner.page 
imgRute="{{asset('images/banners/banner-pwa.jpg')}}"
text1="Aplicaciones web - PWA"
text2="Progressive web apps - Aplicaciones web progresivas"
text3="Lo mejor de las Apps Nativas y de la Tecnología Web al servicio de tus usuarios. Difunda su contenido sobre diferentes los dispositivos."
/>

{{-- PAGE-CONTENT --}}
<div class="bg-blue-400 py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros precios"
  style1="text-white"
  text2="APLICACIONES WEB PROGRESIVAS"
  style2="text-white"
  text3="Desarrollo de aplicaciones PWA "
  style3="text-white"
  />
</div>

{{-- PRICES --}}
<div class="overflow-visible bg-gradient-to-b from-blue-400 via-white to-white pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <x-modulo.card-price 
    type="PWA"
    subtype="Aplicaciones web"
    price="3'500.000"
    info="Una aplicación que funciona en cualquier plataforma que use un navegador compatible con los estándares. La funcionalidad incluye trabajar sin conexión, notificaciones push y acceso al hardware del dispositivo, lo que permite crear experiencias de usuario similares a las aplicaciones nativas en dispositivos móviles y de escritorio."
    list="Comuniquese con nosotros para evaluar las necesidades de su proyecto."
    />
    <div class="bg-white w-full rounded flex flex-row">
      <div class="p-8 w-full lg:w-3/5">
        <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="text-base font-semibold text-c-rojo">Las aplicaciones web progresivas tienen como objetivo proporcionar a los usuarios una experiencia completa del sitio web con características optimizadas y el diseño de interfaz de una aplicación nativa.</span></p>
        <p class="text-lg leading-6 font-medium text-gray-900 py-4">Características de las aplicaciones web progresivas</p>
        <div class="text-gray-600 text-sm">
          <ul class="list-disc list-inside pb-3">
            <li>Responsive: se adapta a cualquier dispositivo.</li>
            <li>Más rápido después de la carga inicial: una vez finalizada la carga inicial, no es necesario volver a descargar el mismo contenido y elementos de página cada vez.</li>
            <li>Conectividad independiente o sin conexion: Permiten usos fuera de línea o en redes de baja calidad.</li>
            <li>Se siente como una aplicación para el usuario con interacciones y navegación de estilo de aplicación.</li>
            <li>Actualizado: siempre actualizado debido al proceso de actualización siempre y se disponga de una conexion a internet.</li>
            <li>Seguro: se sirve a través de HTTPS para evitar espiar y garantizar que el contenido no haya sido manipulado.</li>
            <li>Detectable: identificable como una "aplicación" y por los motores de búsqueda.</li>
            <li>Posee la capacidad de utilizar notificaciones push para mantener la experiencia de usuario.</li>
            <li>Instalable: proporciona iconos de la pantalla de inicio sin el uso de una tienda de aplicaciones.</li>
            <li>Vinculable: se puede compartir fácilmente a través de una URL y no requiere una instalación compleja.</li>
          </ul>
          <p>Ademas de estas caracteristicas las PWA son desarrollos menos costosos que desarrollar una APP convencional ahorrando costos adicionales en el desarrollo de versiones, stores y tipos.
          </p>
        </div>
      </div>
      <div class="bg-cover bg-right max-h-ful w-2/5 rounded-r hidden lg:block" style="background-image: url({{asset('images/banners/banner-pwa.jpg')}})"></div>
    </div>
  </div>
</div>

{{-- STEPS --}}
<div class="py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros proceso"
  style1="text-black"
  text2="¿Cómo funciona el servicio?"
  style2="text-c-rojo"
  text3="El proceso se enfocan en 4 diferentes etapas en todos nuestros desarrollos"
  style3="text-gray-500"
  />
</div>

<div class="py-4 px-8">
  <div class="flex sm:flex-row flex-col justify-center border border-gray-300 rounded sm:divide-x divide-y divide-gray-200">
   <x-modulo.step-price 
   step="1"
   style="bg-pink-400"
   text1="Llámenos o escribanos"
   text2="Hacemos una breve entrevista telefónica con preguntas sobre tu proyecto o negocio, para captar la idea."
   />
   <x-modulo.step-price 
   step="2"
   style="bg-pink-600"
   text1="Envias la información"
   text2="Firma de contrato y pago por el producto, envias la información solicitada del proyecto (fotos y textos)."
   />
   <x-modulo.step-price 
   step="3"
   style="bg-pink-700"
   text1="Propuesta gráfica"
   text2="Enviamos la propuesta grafica del proyecto para tu aprobación en base a la información e ideas de la entrevista."
   />
   <x-modulo.step-price 
   step="4"
   style="bg-pink-900"
   text1="Desarrollo y entrega"
   text2="Realizamos el trabajo en el tiempo que requiera el proyecto y nos contactamos contigo para hacer la entrega del producto."
   />
 </div>
</div>

{{-- CTA --}}
<x-cta.main />

{{-- SERVICE_INFO --}}
<div class="py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestro servicio"
  style1="text-black"
  text2="¿POR QUE PREFERIR LOS SERVICIOS DE GETWEB?"
  style2="text-c-rojo"
  text3="Somos desarrolladores y diseñadores de páginas web profesionales con experiencia de más de 8 años en el mercado"
  style3="text-gray-500"
  />
</div>
<div class="pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <div class="w-full sm:w-1/2 border border-gray-300 p-6 rounded">
      <h4 class="text-lg leading-6 font-medium text-gray-900">Tecnología avanzada</h4>
      <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="block text-md font-bold my-3 text-c-rojo">Desarrollamos tu página web más poderosa más rápida y eficiente con las ultimas tecnologias vigentes. Somos diseñadores de paginas web con experiencia de más de 8 años y sabemos que la creación de una páginas web profesional va un poco más allá.</span> En Getweb mostramos tu contenido de una forma profesional, agregamos funcionalidades a tu página web y usamos tecnologías que hagan tu sitio web realmente diferente y eficiente.</p>
    </div>
    <div class="w-full sm:w-1/2 border border-gray-300 p-6 rounded">
      <h4 class="text-lg leading-6 font-medium text-gray-900">Garantía de cumplimiento</h4>
      <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="block text-md font-bold my-3 text-c-rojo">Hemos entregado cientos de proyectos en los cuales nuestros clientes actualmente nos recomiendan y dan fe del profesionalismo y empeño en nuestro trabajo.</span> Somos desarrolladores y diseñadores de páginas web, profesionales en diferentes ramas de la ingeniería, el diseño y la publicidad. Con Personal 100% nuestro, 0% Freelance y personal externo.</p>
    </div>
  </div>
</div>
@stop