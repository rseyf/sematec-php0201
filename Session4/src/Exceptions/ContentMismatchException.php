<?php
namespace App\Exceptions;

use Exception;
use Throwable;

class ContentMismatchException extends Exception {
    // Redefine the exception so message isn't optional
    public function __construct($message = "File Content Mismatch Happened", $code = 10200, Throwable $previous = null) {
        // some code
    
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}