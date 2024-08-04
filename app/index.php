<?php
require_once(dirname(__FILE__).'/class.Controller.php');
require_once(dirname(__FILE__).'/class.add_product.php');
require_once(dirname(__FILE__).'/class.Product.php');
//
//

$Controller = new Controller();
$Product = new Product();
$url = explode('/', $_SERVER['REQUEST_URI']);

if($url[1] == ''){
	//var_dump($Product->getProducts());
	$Controller->render('index', ['Products' => $Product->getProducts()]);
}elseif($url[1] == 'add-product'){
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'){
		var_dump($_POST);
	$Product->setSKU($_POST['sku']);
	$Product->setName($_POST['name']);
	$Product->setPrice($_POST['price']);
	$Product->setType($_POST['type']);
	$Product->setAttribute($_POST['attribute']);
	$Product->add();
	}else{$Controller->render('add-product');}	
}elseif($url[1] == 'ValidSku'){
	$arr = array('valid' => False);
	if(isset($url[2])){
		$Product->setSKU($url[2]);
		$arr['valid'] = $Product->isvalidSku();
	}
	echo json_encode($arr);	
}elseif($url[1] == 'delete-product'){
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'){
		if(isset($_POST["delete"])){
			$delete_arr = $_POST["delete"];
		foreach($delete_arr as $to_delete){
			$Product->setSKU($to_delete);
			$Product->deleteProduct();
		}
		}
	}
}else{
	echo("404 error");
}

function add_product(){
	echo("add-product");
}

?>
