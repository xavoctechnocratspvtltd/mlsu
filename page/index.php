<?php

namespace xepan\mlsu;

/**
* 
*/
class page_index extends \xepan\base\Page{
	
	function init(){
		parent::init ();

		$c = $this->add('CRUD');
		$c->setModel('xepan\mlsu\MContact');
		$c->grid->addPaginator(50);
	}
}