{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Paginas Web, Desarrollos Web Personalizados en Bogota')
@section ('seoDescription', 'Creamos desarrollos y paginas web totalmente personalizadas con tus necesidades en Bogota.')
@section ('seoKeywords','paginas web bogota, hosting, marketing digital, desarrollos personalizados, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')
{{-- HEADING --}}
<x-banner.page 
imgRute="{{asset('images/banners/banner-custom.jpg')}}"
text1="Páginas web desarrolladas para tus necesidades"
text2="DESARROLLO DE PROYECTOS Y PÁGINAS WEB PERSONALIZADAS"
text3="Creamos desarrollos totalmente personalizados de acuerdo con tus necesidades. Te brindamos acompañamiento para que tu proyecto supere tus expectativas en diseño y funcionalidad sin importar cual sea tu idea nosotros podemos volverla realidad."
/>
{{-- PAGE-CONTENT --}}
<div class="bg-pink-400 py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros precios"
  style1="text-white"
  text2="DESARROLLO DE PROYECTOS especificos"
  style2="text-white"
  text3="Desarrollos totalmente personalizados de acuerdo con tus necesidades"
  style3="text-white"
  />
</div>

{{-- PRICES --}}
<div class="overflow-visible bg-gradient-to-b from-pink-400 via-white to-white pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <x-modulo.card-price 
    type="Proyectos especificos"
    subtype=""
    price="3'200.000"
    info="Un desarrollo con necesidades y caracteristicas especiales que no puede ser suplida por uno de nuestros servicios generales y debe ser desarrollado y diseñado para funcionar de forma especifica."
    list="Comuniquese con nosotros para evaluar las necesidades de su proyecto."
    />
    <div class="bg-white w-full rounded flex flex-row">
      <div class="p-8 w-full lg:w-3/5">
        <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="text-base font-semibold text-c-rojo">El proceso de creación requiere un amplio compromiso de los clientes. La efectividad del proceso radica en que el cliente tenga su idea clara y definida para que el resultado sea el esperado.</span></p>
        <p class="text-lg leading-6 font-medium text-gray-900 py-4">¿Antes de iniciar que debe tener en cuenta?</p>
        <div class="text-gray-600 text-sm">
          <ul class="list-disc list-inside pb-3">
            <li>Debe tener una idea de lo que necesita o quiere.</li>
            <li>Defina la necesidad que resolvera su proyecto.</li>
            <li>Defina el objetivo de su proyecto.</li>
            <li>Busque un referente.</li>
            <li>Buscar su competencia directa y detalle sus puntos positivos y los negativos.</li>
          </ul>
          <p class="pb-3">Es fundamental para iniciar un proyecto saber cuál es el objetivo final del proyecto, es imposible desarrollarlo sin el, y por lo tanto planificar en consecuencia. Los objetivos no pueden cambiar durante el desarrollo del mismo, por que cambia el enfoque, diseño y desarrollo por completamento del proyecto.</p>
          <p>Estos puntos resuletos le ayudara a crear un proyecto de éxito que podremos ayudarle a desarrollar y a tener una idea clara antes de iniciar el proyeto en mente.
          </p>
        </div>
      </div>
      <div class="bg-cover bg-right max-h-ful w-2/5 rounded-r hidden lg:block" style="background-image: url({{asset('images/banners/banner-custom.jpg')}})"></div>
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