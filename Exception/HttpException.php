<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

interface HttpException extends LegibleException
{
    public function getStatusCode(): int;
}
