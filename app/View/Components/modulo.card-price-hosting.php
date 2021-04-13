<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modulo.card-price-hosting extends Component
{
    public $type;
    public $subtype;
    public $price;
    public $info;

    public $domain;
    public $db;
    public $banda;
    public $space;
    public $mail;
    public $ftp;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $subtype, $price, $info, $domain, $db, $banda, $space, $mail, $ftp)
    {
        $this->type = $type;
        $this->subtype = $subtype;
        $this->price = $price;
        $this->info = $info;
        $this->domain =  $domain;
        $this->db =  $db;
        $this->banda =  $banda;
        $this->space =  $space;
        $this->mail =  $mail;
        $this->ftp =  $ftp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modulo.card-price-hosting');
    }
}
