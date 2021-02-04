<?php
    namespace Suport\Init;

    abstract class Bootstrap{
        protected $routes = array();

		public function __construct(){
			$this->initRoutes();
			$this->run($this->getUrl());
        }
        
        abstract public function initRoutes();

		public function setRoutes($routes = array()){
			$this->routes = $routes;
		}

		public function getRoutes(): array{
			return $this->routes;
        }
        
        protected function getUrl(){
			return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
		}

		protected function run($url){
			$routes = $this->getRoutes();
			foreach($routes as $key => $route){
				if($url == $route["uri"]){
					$controllerDir = str_replace("Controller", "Controllers", $route["controller"]);
					$classToInstant = "App\\Controller\\" . $controllerDir . "\\" . $route["controller"];
					$controller = new $classToInstant();
					$action = $route["action"];
					$controller->$action();
				}
			}
		}
    }

?>