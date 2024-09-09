<?php

namespace App\Interfaces;

/**
 * Interface DtoInterface.
 *
 * @package App\Interfaces
 */
interface DtoInterface
{
    /**
     * Convert DTO to array.
     *
     * @return array
     */
    public function toArray(): array;
}
