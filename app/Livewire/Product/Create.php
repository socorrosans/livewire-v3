<?php

namespace App\Livewire\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public ProductForm $form;

    public function save(): void
    {
        $this->validate();

        Product::create(
            $this->form->all()
        );

        session()->flash('success', 'Product created successfully!');

        $this->form->reset();
    }

    public function clearSession(): void
    {
        session()->forget('success');
    }

    public function render(): View
    {
        return view('livewire.product.create');
    }
}
