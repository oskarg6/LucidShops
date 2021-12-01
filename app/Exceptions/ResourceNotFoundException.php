<?php

namespace App\Exceptions;

use Throwable;

class ResourceNotFoundException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Resource not found', 404);
    }
}
