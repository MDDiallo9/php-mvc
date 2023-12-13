<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function index()
    {
        $message = 'Bienvenue sur la page contact';
        $person = [
            "name" => 'Mohamed',
            "age" => 26,

        ];

        $this->render('app.default.contact',array(
            'message' => $message,
            "person" => $person,
        ));
        /* $this->render('app.default.contact'); */
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
