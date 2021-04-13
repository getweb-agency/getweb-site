{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Cotiza en línea')
@section ('seoDescription', 'Cotiza los servicios de Getweb en linea, hosting, paginas web, pwa y pautas de google ads.')
@section ('seoKeywords','cotizar, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')

{{-- PAGE-CONTENT --}}
<div class="bg-gray-200 py-2 px-8">
  <x-modulo.section-title 
  text1="cotizador automático en linea"
  style1="text-gray-700"
  text2="Cotiza nuestros servicios"
  style2="text-gray-900"
  text3="Realiza tu cotización formal sobre nuestros productos de forma instantánea"
  style3="text-gray-600"
  />
</div>

@livewire('quote-component')


@stop