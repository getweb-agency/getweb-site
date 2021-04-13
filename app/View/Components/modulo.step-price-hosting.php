<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modulo.step-price-hosting extends Component
{
    public $step;
    public $style;
    public $text1;
    public $text2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($step, $style, $text1, $text2)
    {
        $this->step = $step;
        $this->style = $style;
        $this->text1 = $text1;
        $this->text2 = $text2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modulo.step-price-hosting');
    }
}
