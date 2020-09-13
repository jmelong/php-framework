<?php

namespace app\controllers;

use jamielong\phpmvc\Application;
use jamielong\phpmvc\Controller;
use jamielong\phpmvc\Request;
use jamielong\phpmvc\Response;
use app\models\ContactForm;

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
    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}