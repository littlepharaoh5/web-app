<?php
require_once(dirname(__FILE__).'/class.MySQL.php');
class Product extends MySQL
{
    private  $SKU;
    private  $Name;
    private  $Price;
    private  $Type;
    private  $Attribute;

    public function __construct()
    {
        parent::__construct();
    }
	function setSKU($SKU) { 
        $this->SKU = $SKU; 
	}
    function getSKU() {
        return $this->SKU; 
    }
	function setName($Name) { 
        $this->Name = $Name; 
	}
    function getName() {
        return $this->Name; 
    }
	function setPrice($Price) { 
        $this->Price = $Price; 
	}
    function getPrice() {
        return $this->Price; 
    }
	function setType($Type) { 
        $this->Type = $Type; 
	}
    function getType() {
        return $this->Type; 
    }
	function setAttribute($Attribute) { 
        $this->Attribute = $Attribute; 
	}
    function getAttribute() {
        return $this->Attribute; 
    }
	function getProducts()
    {
		//,array("WHERE SOME FIELD"=>$value),"SORT FIELD NAME","SORT ORDER",$this->CLAUSE_OR
        $select       = $this->Select($this->TBL_Products);
        //echo json_encode($select);
		return $select;
    }
	function add()
    {
        $execute  = $this->Insert($this->TBL_Products,array(
		"SKU"=>$this->getSKU(),
		"Name"=>$this->getName(),
		"Price"=>$this->getPrice(),
		"Type"=>$this->getType(),
		"Attribute"=>$this->getAttribute()
		));

    }
	public function isvalidSku(){
        return !$this->isValid($this->Select($this->TBL_Products,array("SKU"=>$this->SKU)));		
    }
	public function deleteProduct(){
        return $this->Delete($this->TBL_Products,array("SKU"=>$this->SKU),'');
    }	
}
