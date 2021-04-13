<?php

namespace App\View\Components;

use Illuminate\View\Component;

class singleMenuItem extends Component
{
    public $rute;
    public $icon;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rute, $icon, $name)
    {
        $this->rute = $rute;
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.single-menu-item');
    }
}
