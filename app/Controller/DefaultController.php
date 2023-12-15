<?php

namespace App\Controller;

use App\Model\PostsModel;
use App\Model\AuthorsModel;
use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
    
        $message = 'Bienvenue sur le framework MVC';
        $authors = new AuthorsModel;
        $postsList = PostsModel::all();
        $count = PostsModel::count();
        $this->render('app.default.frontpage', array(
            'message' => $message,
            "postsList" => $postsList,
            "authors" => $authors,
            "count" => $count
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
