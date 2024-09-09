<?php

namespace App\Jobs;

use App\Dto\SubmissionDto;
use App\Events\SubmissionSaved;
use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessSubmissionJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected SubmissionDto $dto
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Save submission to the database
        $submission = Submission::query()->create(
            $this->dto->toArray()
        );

        // Call event to notify other parts of the application
        event(new SubmissionSaved($submission));
    }
}
