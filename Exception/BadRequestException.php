<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

use RuntimeException;

abstract class BadRequestException extends RuntimeException implements HttpException
{
    public function getStatusCode(): int
    {
        return 400;
    }
}