<?php

namespace App\Livewire\PullRequest;

use App\Jobs\PullRequestDataSync;
use App\Models\PullRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public array $headers = [
        ['key' => 'api_pr_id', 'label' => 'ID'],
        ['key' => 'api_pr_title', 'label' => 'Title'],
        ['key' => 'api_pr_state', 'label' => 'State']
    ];

    public function render(): View
    {
        return view('livewire.pull-request.all', [
            'pullRequests' => PullRequest::paginate(10)
        ]);
    }
}
