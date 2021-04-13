<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modulo.card extends Component
{
    public $rute;
    public $image;
    public $category;
    public $service;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rute, $image, $category, $service)
    {
        $this->rute = $rute;
        $this->image = $image;
        $this->category = $category;
        $this->category = $service;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modulo.card');
    }
}
