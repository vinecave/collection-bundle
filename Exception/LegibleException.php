<?php

namespace Vinecave\Bundle\CollectionBundle\Exception;

use Throwable;

interface LegibleException extends Throwable
{
    public function getErrorCode(): string;
}
