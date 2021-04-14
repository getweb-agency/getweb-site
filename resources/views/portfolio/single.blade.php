{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Portafolio de proyectos')
@section ('seoDescription', 'Portafolio de proyectos de la empresa especializada en hosting, diseño y desarrollo de paginas web profesionales y marketing digital.')
@section ('seoKeywords','portafolio, paginas web bogota, hosting, marketing digital')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')

<div class="flex flex-col space-y-4 space-x-0 sm:space-y-0 sm:flex-row sm:space-x-6 py-5 px-8">
  {{-- col-1 --}}
  <div class="sm:w-3/4 w-full">

    <a href="/portafolio/proyectos" class="pb-3 border-b flex flex-row items-center">
      <svg class="h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
      </svg>
      <p>Regresar al portafolio</p>
    </a> 
    <div class="pt-5">
      @foreach($wimages as $wi)
      <img class="w-full" src="{{asset('/images/portfolio/'.$wi->work_image)}}" alt="Getweb">
      @endforeach
    </div>
  </div>
  {{-- col-2 --}}
  <div class="sm:w-1/4 w-full bg-gray-100 p-4">
    <h1 class="text-base font-bold tracking-wide leading-5">{{ $work->title }}</h1>
    <p class="text-sm leading-tight mt-1 mb-6 text-c-rojo">Proyecto No.{{ $work->id }}</p>
    <div class="text-gray-600 text-sm">
      {{ $work->body }}
    </div>
  </div>
</div>

@stop