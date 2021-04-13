<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modulo.section-title extends Component
{

    public $text1;
    public $text2;
    public $text3;
    public $style1;
    public $style2;
    public $style3;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text1, $text2, $text3, $style1, $style2, $style3)
    {
        $this->text1 = $text1;
        $this->text2 = $text2;
        $this->text3 = $text3;
        $this->style1 = $style1;
        $this->style2 = $style2;
        $this->style3 = $style3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modulo.section-title');
    }
}
