<?php

namespace app\controllers;

use app\core\Controller;

/**
 * Class SiteController
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Jamie Long",
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact()
    {
        return 'Handling submitted data';
    }
}