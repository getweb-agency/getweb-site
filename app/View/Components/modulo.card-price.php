<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modulo.card-price extends Component
{
    public $type;
    public $subtype;
    public $price;
    public $info;
    public $list;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $subtype, $price, $info, $list)
    {
        $this->type = $type;
        $this->subtype = $subtype;
        $this->price = $price;
        $this->info = $info;
        $this->list = $list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modulo.card-price');
    }
}
