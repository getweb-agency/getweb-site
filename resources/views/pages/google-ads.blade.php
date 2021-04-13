{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Marketing Digital Publicidad con Google Ads en Bogota')
@section ('seoDescription', 'Anuncia tu pagina web en las primeras posiciones con Google Ads, posiciona tu pagina Web a través de Google Ads en Bogota.')
@section ('seoKeywords','paginas web bogota, hosting, marketing digital, google ads, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')
{{-- HEADING --}}
<x-banner.page 
imgRute="{{asset('images/banners/banner-ads.jpg')}}"
text1="Publicidad con Google Adwords"
text2="Publicidad de TUS SERVICIOS O NEGOCIO con GOOGLE ADS"
text3="¡Posicionamiento web tan efectivo y rápido que no podrás creerlo. Una de las mejores cosas que tiene el posicionamiento a través de Google Adwords es que más te demoras en tomar la decisión que en empezar a recibir clientes. En tan solo 24 horas tendrás tu campaña al aire y funcionando."
/>


{{-- PAGE-CONTENT --}}
<div class="bg-c-morado py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros precios"
  style1="text-white"
  text2="Publicidad y marketing digital de tus servicios"
  style2="text-white"
  text3="Empiece a pautar sus servicios y productos"
  style3="text-white"
  />
</div>

{{-- PRICES --}}
<div class="overflow-visible bg-gradient-to-b from-c-morado via-white to-white pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <x-modulo.card-price 
    type="Pauta mensual"
    subtype=""
    price="180.000"
    info="El servicio de publicidad con Google Ads te permite mostrar tus servicios o productos y llegar a los clientes que buscan lo que ofreces cuando lo buscan."
    list="Este servicio mensual tiene un costo de $180.000 de administración mensual por campaña mas el presupuesto destinado a Google + IVA."
    />
    <div class="bg-white w-full rounded flex flex-row">
      <div class="p-8 w-full lg:w-3/5">
        <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="text-base font-semibold text-c-rojo">Nuestra pautas de publicidad en Google Ads incluyen</span></p>
        <p class="text-lg leading-6 font-medium text-gray-900 py-4">Un servicio de primera que contempla todo lo necesario para que tu campaña sea un éxito TOTAL</p>
        <div class="text-gray-600 text-sm">
          <ul class="list-disc list-inside pb-3">
            <li>Publicidad en red de Búsqueda</li>
            <li>Publicidad para móviles</li>
            <li>Publicidad en Display y Remarketing</li>
            <li>Publicidad en Youtube</li>
            <li>Publicidad en campañas de Shopping</li>
            <li>Especialista certificado asignado a la cuenta</li>
            <li>Pruebas de conversión</li>
            <li>Consultoría avanzada en marketing digital</li>
            <li>Análisis y estudio de mercadeo</li>
            <li>Optimizaciones semanales</li>
            <li>Estudio inicial y diagnóstico de sitio web</li>
            <li>Informes rápidos de rendimiento a mitad de periodo</li>
            <li>Campañas, anuncios y palabras claves ilimitadas</li>
            <li>Informes de rendimiento mensuales</li>
            <li>Seguimiento permanente a la cuenta</li>
            <li>Asesoría telefónica con personal capacitado</li>
          </ul>
          <p>En tan solo 24 horas tendrás tu campaña al aire y funcionando, toma la decisión de empezar a recibir clientes desde el primer momento con este servicio.
          </p>
        </div>
      </div>
      <div class="bg-cover bg-center max-h-ful w-2/5 rounded-r hidden lg:block" style="background-image: url({{asset('images/banners/banner-ads.jpg')}})"></div>
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
   text2="Hacemos una breve entrevista telefónica con preguntas sobre tu anuncio y definimos el presupuesto de la campaña. Realizas el pago por el servicio."
   />
   <x-modulo.step-price 
   step="2"
   style="bg-pink-600"
   text1="Creamos el anuncio"
   text2="Creamos tu campaña enfocada en el análisis de mercados, estudio de palabras claves y necesidades de tus clientes potenciales."
   />
   <x-modulo.step-price 
   step="3"
   style="bg-pink-700"
   text1="Publicamos tu anuncio"
   text2="Activamos y ponemos en marcha tu anuncio en menos de 24 horas y preparate estarás recibiendo tráfico en tu página y llamadas."
   />
   <x-modulo.step-price 
   step="4"
   style="bg-pink-900"
   text1="Informes mensuales"
   text2="Nos encargamos de administrar el anuncio y optimizar la campaña. Accede a las estadísticas de rendimiento de tu campaña."
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