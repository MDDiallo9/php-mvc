<?php

namespace App\Controller;

use App\Model\PostsModel;
use App\Model\AuthorsModel;
use App\Weblitzer\Controller;

/**
 *
 */
class DeleteController extends Controller
{
    public function isValidPost($id){
            if (PostsModel::findById($_GET["id"])){
                return PostsModel::findById($_GET["id"]);
            } else {
                $this->Abort404();
            }
        }
    public function index()
    {
        PostsModel::delete($this->isValidPost($_GET["d"]));
        $this->redirect("/public/home");
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }
    
}