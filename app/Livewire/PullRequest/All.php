<?php

namespace App\Livewire\PullRequest;

use App\Jobs\PullRequestDataSync;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class All extends Component
{
    public function render(): View
    {
        return view('livewire.pull-request.all');
    }
}
