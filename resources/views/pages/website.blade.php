{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Paginas Web Administrables, Wordpress y blogs en Bogota')
@section ('seoDescription', 'Diseñamos Páginas web administrables, Wordpress y Blogs. Creamos páginas web administables con diseños y desarrollos 100% exclusivos.')
@section ('seoKeywords','paginas web bogota, hosting, marketing digital, Paginas Web Administrables, Wordpress, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')
{{-- HEADING --}}
<x-banner.page 
imgRute="{{asset('images/banners/banner-website.jpg')}}"
text1="Páginas web a tu medida"
text2="PÁGINAS WEB ADMINISTRABLES, WORDPRESS Y BLOGS"
text3="En Getweb encontrarás toda la experiencia, calidad y seguridad en que crearemos tu landing page, página web, blog, catálogo en linea con todo lo que necesitas para que tu negocio tenga la presencia online que merece."
/>
{{-- PAGE-CONTENT --}}

<div class="bg-c-rojo py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros precios"
  style1="text-white"
  text2="Tipos de páginas web y productos"
  style2="text-white"
  text3="Nuestros servicios se enfocan en 3 difirentes tipos de diseño y programación de páginas web"
  style3="text-white"
  />
</div>
{{-- PRICES --}}
<div class="overflow-visible bg-gradient-to-b from-c-rojo via-white to-white pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <x-modulo.card-price 
    type="Landing Page"
    subtype="Página web desde"
    price="600.000"
    info="Una landing page, o página de aterrizaje, es una página web diseñada específicamente para convertir visitantes en leads que consta de 1 seccion y navegacion vertical."
    list="
    Página web administrable hasta 1 seccion y 30 imagenes. (Incluye Hosting por 1 año). Lista en 5 dias habiles desde el acuerdo de diseño"
    />
    <x-modulo.card-price 
    type="Web de contenido"
    subtype="Página web desde"
    price="1´200.000"
    info="Un sitio web, es una página web diseñada específicamente para informar que consta de 6 secciones y navegacion entre las secciones generales del sitio web."
    list="Página web administrable, hasta 6 seccion y 10 imagenes. (Incluye Hosting por 1 año). Lista en 10 dias habiles desde el acuerdo de diseño"
    />
    <x-modulo.card-price 
    type="Catálogo en linea"
    subtype="Página web desde"
    price="1´600.000"
    info="Un catalogo en linea es una página web diseñada específicamente para mostrar productos y sus caracteristicas que consta de 10 secciones generales y navegacion entre las secciones del sitio web."
    list="Página web administrable, hasta 10 seccion y 50 imagenes. (Incluye Hosting por 1 año). Lista en 15 dias habiles desde el acuerdo de diseño"
    />
  </div>
</div>
{{-- STEPS --}}
<div class="py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros proceso"
  style1="text-black"
  text2="¿Cómo funciona el servicio?"
  style2="text-c-rojo"
  text3="El proceso se enfocan en 4 difirentes etapas en todos nuestros desarrollos"
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
   text2="Realizamos el trabajo de 5 a 15 días hábiles y nos contactamos contigo para hacer la entrega del producto."
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