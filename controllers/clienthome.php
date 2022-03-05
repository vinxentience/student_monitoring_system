<?php

class Clienthome extends Controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		Session::init();
		$userId = Session::get("userId");
		$this->view->getAllReports = $this->model->getAllReports();
		$this->view->render('clienthome/index');
		// $this->view->userDetails = $this->model->userDetails($userId);
		// $this->view->getPizza = $this->model->getPizza();
		// $this->view->getIngredients = $this->model->getIngredients();
	}

	// function addNewCheckout(){
	// 	if($_POST){

	// 		$pizza_name = strip_tags($_POST['pizza_name']);
	// 		$client_user_id = strip_tags($_POST['client_user_id']);
	// 		$client_buy_pizzaid = strip_tags($_POST['client_buy_pizzaid']);
			

	// 		$order_lgprice = strip_tags($_POST['order_lgprice']);
	// 		$order_lgprice_qty = strip_tags($_POST['order_lgprice_qty']);

	// 		$order_mdprice = strip_tags($_POST['order_mdprice']);
	// 		$order_mdprice_qty = strip_tags($_POST['order_mdprice_qty']);

	// 		$order_smprice = strip_tags($_POST['order_smprice']);
	// 		$order_smprice_qty = strip_tags($_POST['order_smprice_qty']);

	// 		$ingredients = strip_tags($_POST['ingredients']);


	// 		$data = array();
	// 		$data['pizza_name'] = $pizza_name;
	// 		$data['client_user_id'] = $client_user_id;
	// 		$data['client_buy_pizzaid'] = $client_buy_pizzaid;
			

	// 		$data['order_lgprice'] = $order_lgprice;
	// 		$data['order_lgprice_qty'] = $order_lgprice_qty;

	// 		$data['order_mdprice'] = $order_mdprice;
	// 		$data['order_mdprice_qty'] = $order_mdprice_qty;

	// 		$data['order_smprice'] = $order_smprice;
	// 		$data['order_smprice_qty'] = $order_smprice_qty;

	// 		$data['ingredients'] = $ingredients;

	// 		$this->model->insertNewCheckout($data);
	// 	}
	// }

}

?>

