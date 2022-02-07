<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    Public $products;

    public function render()
    {   
        $this->products = Products::all();
        return view('livewire.Products');
    }
}
