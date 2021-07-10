<?php


namespace app\core\exceptions;


/**
 * Class NotFoundException
 *
 * @author Mr.Rezoo <rezam578@gmail.com>
 * @package app\core\exceptions
 */
class NotFoundException extends \Exception
{

    protected $message = 'Page Not Found';
    protected $code = 404;
}