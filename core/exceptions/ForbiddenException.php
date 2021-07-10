<?php


namespace app\core\exceptions;


/**
 * Class ForbiddenException
 *
 * @author Mr.Rezoo <rezam578@gmail.com>
 * @package app\core\exceptions
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}