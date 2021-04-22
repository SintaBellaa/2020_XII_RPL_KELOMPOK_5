<?php

namespace App\Libraries;

use Exception;

class EncryptionLibrary
{
    /**
     * Convert plain text to chiper text.
     *
     * @param string $message
     * @return string
     */
    public function encrypt(string $message) : string
    {
        return base64_encode($message);
    }

    /**
     * Convert chiper text to plain text.
     *
     * @param string $secret_message
     * @return string
     */
    public function decrypt(string $secret_message) : string
    {
        return base64_decode($secret_message);
    }
}
