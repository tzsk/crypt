<?php
namespace Tzsk\Crypt\Exceptions;

class IvLengthException extends \Exception
{
    /**
     * @var string
     */
    protected $message = "IV should be 16 characters long";
}
