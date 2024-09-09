<?php

namespace App\Http\Controllers;

use App\Dto\SubmissionDto;
use App\Http\Requests\SubmissionCreateRequest;
use App\Jobs\ProcessSubmissionJob;

class SubmissionController extends Controller
{
    public function store(SubmissionCreateRequest $request)
    {
        $dto = new SubmissionDto(
            ...$request->validated()
        );

        ProcessSubmissionJob::dispatch($dto);

        return response()->json([
            'message' => trans('submission.store.message'),
        ]);
    }
}
