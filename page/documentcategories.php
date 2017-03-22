<?php

namespace xepan\mlsu;

/**
* 
*/
class page_documentcategories extends \xepan\base\Page{
	
	public $title="Documents Categories";

	function init(){
		parent::init ();

		$c = $this->add('xepan\hr\CRUD');
		$c->setModel('xepan\mlsu\Category');
		$c->grid->addPaginator(50);
	}
}