<?php

namespace App\Dto;

use App\Interfaces\DtoInterface;

/**
 * Base DTO class.
 *
 * @package App\Dto
 */
class Dto implements DtoInterface
{
    /**
     * Implementation of toArray DTO method.
     *
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
