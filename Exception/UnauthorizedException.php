<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

use RuntimeException;

abstract class UnauthorizedException extends RuntimeException implements HttpException
{
    public function getStatusCode(): int
    {
        return 401;
    }
}
