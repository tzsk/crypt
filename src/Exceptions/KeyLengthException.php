<?php
namespace Tzsk\Crypt\Exceptions;

class KeyLengthException extends \Exception
{
    /**
     * @var string
     */
    protected $message = "Key length should be 32 characters long";
}