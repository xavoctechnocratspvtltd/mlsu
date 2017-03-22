<?php

namespace xepan\mlsu;


/**
* 
*/
class Model_Menu extends \xepan\base\Model_Table{
	
	public $table = "mlsu_menu";
	public $status=['Active','InActive'];

	public $actions=[
		'Active'=>['view','edit','delete','deactivate'],
		'InActive'=>['view','edit','delete','activate']
	];

	public $acl_type='MLSU_Menu';

	function init(){
		parent::init();

		$this->hasOne('xepan\hr\Employee','created_by_id')->defaultValue($this->app->employee->id);

		$this->hasOne('xepan\mlsu\Menu','parent_menu_id');

		$this->addField('name');
		$this->addField('status')->enum(['Active','InActive'])->defaultValue('Active');
		$this->addField('created_at')->type('datetime')->defaultValue($this->app->now);

		$this->addField('page');
		$this->addField('is_document_page')->type('boolean')->defaultValue(false);
		$this->addField('show_catgory_tool')->type('boolean')->defaultValue(false);
		$this->addField('show_programs')->type('boolean')->defaultValue(false);
		$this->addField('show_faculty')->type('boolean')->defaultValue(false);
		$this->addField('show_course')->type('boolean')->defaultValue(false);

		$this->hasMany('xepan\mlsu\Menu','parent_menu_id');

	}
}