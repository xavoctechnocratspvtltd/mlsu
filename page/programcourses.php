<?php

namespace xepan\mlsu;

/**
* 
*/
class page_programcourses extends \xepan\base\Page{

	public $title="Programs / Faculties / Courses";
	
	function init(){
		parent::init ();

		$tabs= $this->add('Tabs');
		$c_t = $tabs->addTab('Courses');
		$f_t = $tabs->addTab('Faculties');
		$p_t = $tabs->addTab('Programs');

		$c_c = $c_t->add('xepan\hr\CRUD');
		$c_c->setModel('xepan\mlsu\Course');
		$c_c->grid->addPaginator(50);

		$f_c = $f_t->add('xepan\hr\CRUD');
		$f_c->setModel('xepan\mlsu\Faculty');
		$f_c->grid->addPaginator(50);

		$p_c = $p_t->add('xepan\hr\CRUD');
		$p_c->setModel('xepan\mlsu\Program');
		$p_c->grid->addPaginator(50);

	}
}