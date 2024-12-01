<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

use RuntimeException;

abstract class InternalServerErrorException extends RuntimeException implements HttpException
{
    public function getStatusCode(): int
    {
        return 500;
    }
}
