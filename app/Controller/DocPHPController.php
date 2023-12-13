<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DocPHPController extends Controller
{

    public function index()
    {

        $this->redirect("https://www.php.net/manual/");
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
