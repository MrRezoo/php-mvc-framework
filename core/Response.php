<?php


namespace app\core;

/**
 * Class Response
 * @package app\core
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}