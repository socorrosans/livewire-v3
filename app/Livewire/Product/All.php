<?php

namespace App\Livewire\Product;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class All extends Component
{
    public function render(): View
    {
        return view('livewire.product.all');
    }
}
