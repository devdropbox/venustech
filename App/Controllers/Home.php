<?php

namespace App\Controllers;
use \Core\View;
class Home extends \Core\Controller {
	public function indexAction(){
		//echo "show Home router from controller home";
		//View::render("Home/index.php",['name' => 'Dave','colours' => ['red','green','blue','pink']]);
		View::renderTemplate("Home/index.html",['name' => 'DevTourism','colours' => ['Shimla','ladhak','delhi','bhopal']]);


	}


	protected function before(){
       // echo "(before)";
    }

    protected function after(){
       // echo "(after)";
    }
}