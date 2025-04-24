<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Avatar extends Component
{
    public User $user;

    public function mount(): void
    {
        $this->user = User::find(1);
    }

    public function render(): string
    {
        return <<<'HTML'
            <x-avatar image="https://unsplash.it/50/50/?random" :title="$user->name" :subtitle="$user->email" class="!w-10" />
        HTML;
    }
}
