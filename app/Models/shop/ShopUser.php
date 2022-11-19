<?php

namespace App\Models;
class ShopUser  {
	public 
		$user_name, 
		$balance,
		$items_bought,
		$items_cart;

	public $creation_date;
	
	function __construct($name = "Guest", $balance = 500) {
		$this->user_name 	= $name;
		$this->balance 	= $balance;
	}
}
