<?php

namespace Rehike\Modules\Logger;

class Log
{
    public $message = '';
    public $code = 0;

    public function __construct($message, $code = 0)
    {
        $this->message = $message;
        $this->code = $code;
    }
}