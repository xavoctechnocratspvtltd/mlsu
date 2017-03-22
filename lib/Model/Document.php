<?php


namespace xepan\mlsu;

/**
* 
*/
class Model_Document extends \xepan\base\Model_Table{

	public $table = "mlsu_document";

	public $status=['Active','InActive'];

	public $actions=[
		'Active'=>['view','edit','delete','deactivate'],
		'InActive'=>['view','edit','delete','activate']
	];

	public $acl_type="Document";

	function init(){
		parent::init();

		$this->hasOne('xepan\hr\Employee','created_by_id')->defaultValue($this->app->employee->id);
		$this->hasOne('xepan\mlsu\Course','course_id');
		$this->addField('name');
		$this->addField('status')->enum(['Active','InActive'])->defaultValue('Active');
		$this->addField('url');
		$this->add('xepan/filestore/Field_Image',['name'=>'image_id','deref_field'=>'thumb_url']);
		$this->add('xepan/filestore/Field_Image',['name'=>'doc_file_id','deref_field'=>'thumb_url']);
		$this->addField('expires_on')->type('datetime');
		$this->addField('description')->type('text');
		
		$this->hasMany('xepan\mlsu\DocumentCategoryAssociation','document_id');

	}
}