<?php /* app/Model/CommentModel.php */
namespace App\Model;
class PostsModel extends \App\Weblitzer\Model 
{
    protected static $table = 'post';
    protected $id;
    protected $title;
    protected $content;
}