<?php

namespace xepan\mlsu;


/**
* 
*/
class Model_Category extends \xepan\base\Model_Table{
	public $table = "mlsu_category";
	public $status=['Active','InActive'];

	public $actions=[
		'Active'=>['view','edit','delete','deactivate','communication'],
		'InActive'=>['view','edit','delete','activate','communication']
	];

	function init(){
		parent::init();

		$this->hasOne('xepan\hr\Employee','created_by_id')->defaultValue($this->app->employee->id);
		$this->addField('name')->Caption('Category Name');
		$this->addField('status')->enum('Active','InActive');
		$this->addField('type');
		$this->addCondition('type','MLSUCategories');
		$this->addField('created_at')->type('datetime');

		$this->hasMany('xepan\mlsu\MlsuDocumentCategoryAssociation','category_id');
	}
}