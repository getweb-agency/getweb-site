{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Portafolio de proyectos')
@section ('seoDescription', 'Portafolio de proyectos de la empresa especializada en hosting, diseño y desarrollo de paginas web profesionales y marketing digital.')
@section ('seoKeywords','portafolio, paginas web bogota, hosting, marketing digital')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')

{{-- PAGE-CONTENT --}}
<div class="bg-gradient-to-r from-c-rojo to-c-morado py-2 px-8">
  <x-modulo.section-title 
  text1="Galeria de trabajos"
  style1="text-white"
  text2="Portafolio de proyectos"
  style2="text-white"
  text3="Visualiza algunos de nuestros productos"
  style3="text-white"
  />
</div>
<div class="bg-gray-100">
  @livewire('work-component')
</div>
@stop