<?php

namespace xepan\mlsu;

/**
* 
*/
class page_documents extends \xepan\base\Page{

	public $title="Documents";
	
	function init(){
		parent::init ();

		$c = $this->add('xepan\hr\CRUD');
		$c->setModel('xepan\mlsu\Document');
		$c->grid->addPaginator(50);

	}
}