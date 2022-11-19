<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\NotImplementedException;
use SplFileObject;

class Item {
	static private $ALL_ITEMS = [];
	static private $ID = 0;
	public 
		$title, 
		$cost,
		$description,
		$big_description,
		$developers,
		$img_path,
		$id;
	function __construct(
		string|int  $id, 
		string 		$title,
		string|int 	$cost,
		string $description, 
		string $big_description,
		string $developers, 
		string $img_path) 
	{
		$this->title 				= $title;
		$this->cost 				= (int)$cost;
		$this->description 		= $description;
		$this->big_description 	= $big_description;
		$this->img_path 			= $img_path;
		$this->developers 		= $developers;
		$this->id					= intval($id);
		// Item::$ID += 1;
	}

	function html(ShopUser $user){
		return new NotImplementedException;
	}
	static function item_with($id) {
		
		if(empty(Item::$ALL_ITEMS)){
			Item::all();
		}

		foreach (Item::$ALL_ITEMS as $item) {

			if ($item->id == $id){
				return $item;
			}
		}
	}

	static function all() {
		if (!empty(Item::$ALL_ITEMS)) {
			return Item::$ALL_ITEMS;
		}

		$items = array();
		
		//psv -> pipe separeted values
		//ID|Title|Cost|Description|BigDescription|Developers|ImgPath
		$psv_file = './shop/csv/items.csv';
		$psv = new SplFileObject($psv_file);
		$psv->setFlags(SplFileObject::READ_CSV);
		$psv->setCsvControl('|');
		$firstline = true;
		foreach ($psv as $values) {
			if ($firstline) {
				$firstline = false;
				continue;
			}
			if (count($values) < 7) {
				dd($values);	
			}

			array_push($items, new Item(...$values));
		}
		
		Item::$ALL_ITEMS = $items;
		return $items;
	}
}
