<?php

	namespace App\Controller;

	use Suport\Controller\Action;
	use Suport\Model\Container;
	use App\Model\Produto;

	class IndexController extends Action{

		public function index(){
			
			$produto = Container::getModel("Produto");
			$arrProdutos = $produto->getProdutos();

			$this->view->dados = $arrProdutos;
			$this->view->page = "index";
			$this->render("layout1");
		}

		public function about(){
			$this->view->page = "about";
			$this->render("layout1");
		}
	}

?>