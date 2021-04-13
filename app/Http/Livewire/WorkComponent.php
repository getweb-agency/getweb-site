<?php

namespace App\Http\Livewire;

use App\Models\Work;
use Livewire\Component;

use Livewire\WithPagination;

class WorkComponent extends Component
{

  use WithPagination;

  public function render()
  {
    return view('livewire.work-component', [
      'works' => Work::paginate(9),
    ]);
    /*$works = Work::all();
    return view('livewire.work-component', compact('works'));*/
  }
}