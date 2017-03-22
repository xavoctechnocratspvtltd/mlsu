<?php

namespace xepan\mlsu;


/**
* 
*/
class Model_Faculty extends \xepan\base\Model_Table{
	
	public $table = "mlsu_faculty";
	public $status=['Active','InActive'];

	public $actions=[
		'Active'=>['view','edit','delete','deactivate'],
		'InActive'=>['view','edit','delete','activate']
	];

	public $acl_type='Faculty';

	function init(){
		parent::init();

		$this->hasOne('xepan\mlsu\Program','program_id');
		$this->hasOne('xepan\hr\Employee','created_by_id')->defaultValue($this->app->employee->id);
		$this->addField('name')->Caption('Category Name');
		$this->addField('status')->enum(['Active','InActive'])->defaultValue('Active');
		$this->addField('created_at')->type('datetime')->defaultValue($this->app->now);

		$this->hasMany('xepan\mlsu\Course','faculty_id');
	}
}