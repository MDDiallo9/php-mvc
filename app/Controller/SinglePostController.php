<?php

namespace App\Controller;

use App\Model\AuthorsModel;
use App\Model\PostsModel;
use App\Weblitzer\Controller;

/**
 *
 */
class SinglePostController extends Controller
{

    public function index()
    {
        $authors = new AuthorsModel;
        $single = PostsModel::findById($_GET["p"]);
        $this->render('app.default.single',array(
            "single" => $single,
            "authors" => $authors,
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
