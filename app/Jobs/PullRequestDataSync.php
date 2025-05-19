<?php

namespace App\Jobs;

use App\Models\PullRequest;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;

class PullRequestDataSync implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected string $apiGithubPullRequest = 'https://api.github.com/repos/laravel/laravel/pulls'
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $response = Http::get($this->apiGithubPullRequest, [
            'state' => 'all',
            'per_page' => 100,
        ]);

        if($response->successful()) {
            foreach($response->json() as $pull) {
                PullRequest::updateOrCreate([
                    'api_pr_id' => $pull['id']
                ],
                    [
                        'api_pr_title' => $pull['title'],
                        'api_pr_state' => $pull['state'],
                        'api_pr_body' => $pull['body'],
                        'api_pr_created_at' => Carbon::parse($pull['created_at'])->format('Y-m-d H:i:s'),
                        'api_pr_merged_at' => Carbon::parse($pull['merged_at'])->format('Y-m-d H:i:s'),
                        'api_pr_closed_at' => Carbon::parse($pull['closed_at'])->format('Y-m-d H:i:s'),
                        'api_pr_draft' => $pull['draft'],
                    ]);
            }
        }
    }
}
