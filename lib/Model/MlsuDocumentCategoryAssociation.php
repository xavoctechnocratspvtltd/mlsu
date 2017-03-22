<?php


namespace xepan\mlsu;

/**
* 
*/
class Model_MlsuDocumentCategoryAssociation extends \xepan\base\Model_Table{
	public $table="mlsu_document_category_asso";
	function init(){
		parent::init();

		$this->hasOne('xepan\mlsu\MLSUDocument','mlsu_document_id');
		$this->hasOne('xepan\mlsu\Category','category_id');
	}
}