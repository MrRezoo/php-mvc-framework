<?php

namespace app\controllers;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController
{

    public function contact()
    {
        return "show contact form";
    }

    public function handleContact()
    {
        return "handling Submitted data";
    }

}