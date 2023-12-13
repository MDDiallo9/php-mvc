<?php

namespace App\Controller;


use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        
        $message = 'Bienvenue sur la page A Propos';

        $this->render('app.default.about',array(
            'message' => $message,
           
            
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
