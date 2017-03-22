<?php


namespace xepan\mlsu;

/**
* 
*/
class Model_MLSUDocument extends \xepan\hr\Model_Document{
	public $table="mlsu_document";
	function init(){
		parent::init();

		// $this->hasOne('xepan\mlsu\Courses','course_id');
		$this->addField('name');
		$this->addField('url');
		$this->add('xepan/filestore/Field_Image',['name'=>'image_id','deref_field'=>'thumb_url'])->allowHTML(true);
		$this->add('xepan/filestore/Field_Image',['name'=>'doc_id','deref_field'=>'thumb_url'])->allowHTML(true);
		$this->addField('expire_on')->type('datetime');
		$this->addField('description')->type('text');
		$this->hasMany('xepan\mlsu\MlsuDocumentCategoryAssociation','mlsu_document_id');
	}
}