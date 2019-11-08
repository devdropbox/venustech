<?php

namespace App\Controllers;
use App\Models\Post;
use Core\View;
/**
 * Posts controller
 *
 * PHP version 5.4
 */
class Posts extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        //echo 'Hello from the index action in the Posts controller!';
       // echo '<p>Query string parameters: <pre>' .
            // htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
        $post = POST::getAll();
        View::renderTemplate('Posts/index.html',['posts'=>$post]);
    }


    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function editAction(){
        
 //This is ok because it's public

       echo "<pre>";
       print_r($this->route_params);
        
        
    }

    


}



