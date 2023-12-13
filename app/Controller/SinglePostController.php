<?php

namespace App\Controller;

use App\Model\PostsModel;
use App\Weblitzer\Controller;

/**
 *
 */
class SinglePostController extends Controller
{

    public function index()
    {
        /* $id = $_POST["p"]; */
        $this->debug($_POST);
        $post = new PostsModel;
        $single = $post->findById();
        $this->render('app.default.about',array(
            
           /* "id" => $id */
            
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
