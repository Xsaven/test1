<?php

namespace App\Dto;

/**
 * General submission DTO
 */
final class SubmissionDto extends Dto
{
    /**
     * Create a new instance of SubmissionDto.
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $message
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $message,
    ) {}
}
