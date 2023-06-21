<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Artikel;
class CardArtikel extends Component
{
   protected $listeners = [
        'cardArtikel'
   ];
    public function render()
    {
       $art = Artikel::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.card-artikel', ['art' => $art]);
    }

    public function cardArtikel($artikel)
    {
        //dd($artikel);
    }

    
}
