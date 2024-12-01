<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

use RuntimeException;

abstract class NotFoundException extends RuntimeException implements HttpException
{
    public function getStatusCode(): int
    {
        return 404;
    }
}
