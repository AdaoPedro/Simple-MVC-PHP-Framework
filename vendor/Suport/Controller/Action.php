<?php
    namespace Suport\Controller;

    abstract class Action{

        protected $view;

		public function __construct(){
			$this->view = new \stdClass();
        }
        
        public function render($layout){
			if(!file_exists("../App/View/layout/" . $layout . ".phtml") || $layout == ""){
				$this->content();
			} else {
				require_once "../App/View/layout/" . $layout . ".phtml";
			}
        }
        
        public function content(){
			$currentClass = get_class($this);
			$currentClass = str_replace("App\\Controller\\", "", $currentClass);
			$currentClass = str_replace("Controller", "", $currentClass);
			$viewDir = lcfirst($currentClass) . "/";
			require_once "../App/View/" . $viewDir . $this->view->page . ".phtml";
		}
    }
?>