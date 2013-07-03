<?php

class posts {
	function index(){
		global $request;
        $posts = GET_ALL("SELECT * FROM post");
        require 'views/master_view.php';
	}



function view(){
	  global $request;
	  $id=$request->params[0];
	  $post = get_all(" SELECT * FROM post WHERE id= '$id' ");
	  $post = $post[0];
      require 'views/master_view.php';
 }

}


?>