<?php


namespace xepan\mlsu;

/**
* 
*/
class Model_DocumentCategoryAssociation extends \xepan\base\Model_Table{
	
	public $table="mlsu_document_category_asso";

	public $status=['Active','InActive'];
	public $actions=[
		'Active'=>['view','edit','delete','deactivate'],
		'InActive'=>['view','edit','delete','activate']
	];

	function init(){
		parent::init();

		$this->hasOne('xepan\mlsu\Document','document_id');
		$this->hasOne('xepan\mlsu\Category','category_id');
	}
}