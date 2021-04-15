<?php

namespace App\Http\Livewire;

use App\Mail\QuoteRequest;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class QuoteComponent extends Component
{
  public $name;
  public $tel;
  public $email;
  public $resume;
  public $quote;
  public $c1;
  public $cs1;
  public $cs2;
  public $cs3;
  public $cs4;
  public $c2;
  public $c2s1;
  public $c2s2;
  public $c2s3;
  public $c2s4;
  public $c2s5;
  public $c2s5t;
  public $c3;
  public $c3s1;
  public $c3s2;
  public $c3s2t;
  public $c4;
  public $c4s1;
  public $c4s2;
  /*VALUES*/
  public $subt = 0;
  public $iva = 0;
  public $total = 0;
  public $sum1 = 0;
  public $sum2 = 0;
  public $sum3 = 0;
  public $form = false;
  /*Views*/
  public $view = 'quote-resume';
  /*validacion*/
  protected $rules = [
    'name' => 'required|min:2|max:50',
    'tel' => 'required|min:7|max:10',
    'email' => 'required|email|min:2|max:50',
  ];

  public function store()
  {
    //Validate_fields
    $this->validate();
    //Capture_data
    $dat['cs1'] =  $this->cs1 ? 'Plan basico - Anual / $100,000' : '';
    $dat['cs2'] = $this->cs2 ? 'Plan emprendedor - Anual / $150,000' : '';
    $dat['cs3'] = $this->cs3 ? 'Plan empresario - Anual / $300,000' : '';
    $dat['cs4'] = $this->cs4 ? 'Plan corporativo - Anual / $500,000' : '';
    $dat['c2s1'] = $this->c2s1 ? 'Landing Page / $600,000' : '';
    $dat['c2s2'] = $this->c2s2 ? 'Web de contenidos / $1,200,000' : '';
    $dat['c2s3'] = $this->c2s3 ? 'Catálogo en linea / $1,600,000' : '';
    $dat['c2s4'] = $this->c2s4 ? 'Plan corporativo - Anual / $500,000' : '';
    $dat['c2s5'] = $this->c2s5 ? 'Desarrollos y soluciones especificas / $3,200,000 | ' . $this->c2s5t : '';
    $dat['c3s1'] = $this->c3s1 ? 'PWA (Basica) / $3,500,000' : '';
    $dat['c3s2'] = $this->c3s2 ? 'PWA (Necesidad especifica) / $3,500,000 | ' . $this->c3s2t : '';
    $dat['c4s1'] = $this->c4s1 ? 'Cantidad de pauta(s) / ' . $this->c4s1 ."+". 'Adminstacion de pauta(s) - mes / $' . number_format( $this->sum3, 0 ,'.', ',') : '';
    $dat['c4s2'] = $this->c4s2 ? 'Presupuesto mensual / $' . number_format( $this->c4s2, 0 ,'.', ',') : '';
    $dat['iva'] =  $this->iva ? 'IVA / $' . number_format( $this->iva, 0 ,'.', ',') : '';
    $dat['total'] =  $this->total ? 'Total / $' . number_format( $this->total, 0 ,'.', ',') : '';
    //Block_form
    $this->form = true;
    //Save_info
    $post = Quote::create(['name' => $this->name, 'tel' => $this->tel, 'email' => $this->email, 'quote' => implode("+", $dat) ]);
    //Mail_info
    Mail::to($this->email)
    ->locale('es')
    ->send(new QuoteRequest($post));
    //Show view
    $this->view = 'quote-result';
  }
  public function restart()
  {
    $this->form = false;
    $this->view = 'quote-resume';
  }

  public function render()
  {
    $this->sum1 = $this->cs1 + $this->cs2 + $this->cs3 + $this->cs4;
    $this->sum2 = $this->c2s1 + $this->c2s2 + $this->c2s3 + $this->c2s4 + $this->c2s5 + $this->c3s1 + $this->c3s2 + $this->c4s2;
    $this->sum3 = $this->c4s1 * '150000';
    $this->subt = $this->sum1 + $this->sum2 + $this->sum3;
    if (!empty($this->c1) and empty($this->c2) and empty($this->c3) and empty($this->c4)) {
      $this->iva = (('0' * $this->subt) / '100');
    } elseif (!empty($this->c1 and $this->c3)) {
      $this->iva = (('19' * $this->subt) / '100');
    } else {
      $this->iva = (('19' * $this->subt) / '100');
    }
    $this->total = $this->subt + $this->iva;

    return view('livewire.quote-component');
  }

  public function restC1()
  {
    $this->reset(['cs1','cs2','cs3','cs4']);
  }
  public function restC2()
  {
    /*$this->reset('c1');*/
    $this->reset(['c2s1','c2s2','c2s3','c2s4','c2s5']);
    $this->reset(['cs1','cs2','cs3','cs4']);
  }
  public function restC3()
  {
    $this->reset(['c3s1','c3s2']);
  }
  public function restC4()
  {
    $this->reset(['c4s1','c4s2']);
  }
}
