<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Validate('required|min:8')]
    public string $name = '';

    #[Validate('required|min:20|max:255')]
    public string $description = '';

    #[Validate('required|numeric|min:0.01')]
    public float $price = 0;

    public function store(): void
    {
        $this->validate();

        Product::create(
            $this->all()
        );

        session()->flash('success', 'Product created successfully!');
    }
}
