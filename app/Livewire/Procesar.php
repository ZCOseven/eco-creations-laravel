<?php

namespace App\Livewire;

use Livewire\Component;

class Procesar extends Component
{
    public $cart;

    public function mount(){
        $cart = session('cartsession',[]);
        if(!empty($cart)){
            $this->cart = $cart;
        }
    }
    public function render()
    {
        return view('livewire.procesar');
    }
}
