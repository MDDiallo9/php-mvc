<?php

namespace App\Controller;

use App\Model\AuthorsModel;
use App\Service\Form;
use App\Weblitzer\Controller;

/**
 *
 */
class CreateController extends Controller
{
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->debug($_POST);
        }
        $authors = AuthorsModel::all();
        $form = new Form();
        $this->render('app.crud.create',array(
            "form" => $form,
            "authors" => $authors
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
