<?php

namespace xepan\mlsu;

/**
* 
*/
class page_menus extends \xepan\base\Page{

	public $title="Menus";
	
	function init(){
		parent::init ();

		$c = $this->add('xepan\hr\CRUD');
		$c->setModel('xepan\mlsu\Menu');
		$c->grid->addPaginator(50);

	}
}