<?php
namespace Tzsk\Crypt;

use Tzsk\Crypt\Exceptions\IvLengthException;
use Tzsk\Crypt\Exceptions\KeyLengthException;

class Crypter
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $iv;

    /**
     * @var string
     */
    protected $cipher = 'AES-256-CBC';

    /**
     * Crypter constructor.
     *
     */
    public function __construct()
    {
        $this->key = config('crypt.key');
        $this->iv = config('crypt.iv');

        $this->validateKeyAndIv();
    }

    /**
     * @param $data
     * @return string
     */
    public function encrypt($data)
    {
        return openssl_encrypt($data, $this->cipher, $this->key, 0, $this->iv);
    }

    /**
     * @param $data
     * @return string
     */
    public function decrypt($data)
    {
        return openssl_decrypt($data, $this->cipher, $this->key, 0, $this->iv);
    }

    /**
     * @throws IvLengthException
     * @throws KeyLengthException
     */
    protected function validateKeyAndIv()
    {
        if (strlen($this->key) != 32) {
            throw new KeyLengthException();
        }
        if (strlen($this->iv) != 16) {
            throw new IvLengthException();
        }
    }
}