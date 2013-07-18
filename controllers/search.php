<?php
class search {
	function index() {
		global $request;
		$text=$request->get[0];
		//$text = "d";
		$searchs = GET_ALL("SELECT * FROM post natural join user
		where

		post_text like '%$text%'
		AND post_author = user_id
		order by post_time desc
		");

		require 'views/master_view.php';
	}
}

?>
