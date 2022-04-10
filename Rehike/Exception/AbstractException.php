<?php
namespace Rehike\Exception;

/**
 * Rehike: Abstract Exception
 * 
 * Exceptions can pretty much be made simply by extending
 * this class with no body required.
 * 
 * @author Taniko Yamamoto <kirasicecreamm@gmail.com>
 * @license CC0
 */
abstract class AbstractException extends \Exception
{
    // PHP is really annoying ugh...
    // - protected $file
    // - protected $line
    // Crash PHP 8, saying they must be typed
    // - protected string $file
    // - protected int $line
    // Crash PHP 7, saying they must be untyped
    // Fix: Remove the redefinition here and just
    // inherit from Exception.
    public $message = "Unknown exception";
    private $string;
    protected $code = 0;
    private $trace;
    public $exceptionName;

    public function __construct($message = null, $code = 0)
    {
        $this->exceptionName = get_class($this);

        if (!$message)
        {
            $this->message = "Unknown {$this->exceptionName}";
        }

        parent::__construct($message, $code);
    }
}