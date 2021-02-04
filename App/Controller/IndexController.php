<?php

	namespace App\Controller;

	use Suport\Controller\Action;

	class IndexController extends Action{

		public function index(){
			$clientes = array(
				[
					"id" => 91029,
					"nome" => "Alberto Fonseca",
					"morada" => "Centro da Cidade"
				],
				[
					"id" => 91029,
					"nome" => "Alberto Fonseca",
					"morada" => "Centro da Cidade"
				],
			);

			
			$this->view->dados = $clientes;
			$this->view->page = "index";
			$this->render("layout1");
		}

		public function about(){
			$this->view->page = "about";
			$this->render("layout1");
		}
	}

?>