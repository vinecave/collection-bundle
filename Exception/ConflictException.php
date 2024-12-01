<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

use RuntimeException;

abstract class ConflictException extends RuntimeException implements HttpException
{
    public function getStatusCode(): int
    {
        return 409;
    }
}
