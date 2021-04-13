<?php

namespace App\View\Components;

use Illuminate\View\Component;

class banner.page extends Component
{
    public $imgRute;
    public $text1;
    public $text2;
    public $text3;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imgRute, $text1, $text2, $text3)
    {
        $this->class = $imgRute;
        $this->class = $text1;
        $this->class = $text2;
        $this->class = $text3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.banner.page');
    }
}
