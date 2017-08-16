<?php
namespace Tzsk\Crypt\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class StrCrypt
 * @package Tzsk\Crypt\Facade
 * @see \Tzsk\Crypt\Crypter
 */
class StrCrypt extends Facade
{
    /**
     * Get the Facade Accessor Key.
     */
    protected static function getFacadeAccessor()
    {
        return 'tzsk-crypt';
    }
}