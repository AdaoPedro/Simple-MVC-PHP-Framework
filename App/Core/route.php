<?php

	namespace App\Core;

	use Suport\Init\Bootstrap;

	class Route extends Bootstrap{

		public function initRoutes(){
			$routes["home"] = array(
				"uri" => "/",
				"controller" => "IndexController",
				"action" => "index",
			);
			$routes["about"] = array(
				"uri" => "/about",
				"controller" => "IndexController",
				"action" => "about",
			);
			$this->setRoutes($routes);
		}
	}

	

?>