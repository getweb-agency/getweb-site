<div>
  {{-- CALCULAR SUB-TOTALES --}}
  <div class="bg-white mt-6">
    <div class="px-4 py-2 border-t border-gray-300 flex justify-between">
      <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Subtotal</p>
      <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $subt, 0 ,'.', ',') }}</p>
    </div>
    <div class="px-4 py-2 border-t border-gray-300 flex justify-between">
      <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">IVA .@if($c1 and empty($this->c2) and empty($this->c3) and empty($this->c4)) 0% @else 19% @endif</p>
      <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $iva, 0 ,'.', ',') }}</p>
    </div>
    <div class="px-4 py-2 border-t border-gray-300 border-dashed flex justify-between text-gray-600 font-bold uppercase text-sm">
      <p class="mt-1">Total</p>
      <p class="mt-1">${{ number_format( $total, 0 ,'.', ',') }}</p>
    </div>
  </div>
  <div class="pt-4 text-sm bg-white mt-5 p-5 border-l-2 border-solid border-green-500">
    <p>Gracias por realizar su cotizacion en linea, esta cotizacion fue enviada a el email "{{ $email }}" por favor revise su bandeja de entrada o spam si no visualiza el correo. Continue realizando cotizaciones adicionales sobre nuestros servicios.</p>
  </div>
  <button wire:click="restart" class="flex items-center justify-center mt-6 px-4 py-2 text-sm rounded-md text-white bg-blue-500 hover:bg-blue-600">
    <svg wire:loading wire:target="restart" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    Realizar otra cotizacion
  </button>
</div>