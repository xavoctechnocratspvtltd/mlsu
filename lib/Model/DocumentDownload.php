<?php


namespace xepan\mlsu;

/**
* 
*/
class Model_DocumentDownload extends \xepan\base\Model_Table{

	public $table='mlsu_document_download';

	public $status=['Active','InActive'];
	public $actions=[
		'Active'=>['view','edit','delete','deactivate'],
		'InActive'=>['view','edit','delete','activate']
	];

	function init(){
		parent::init();

		$this->hasOne('xepan\mlsu\Document','document_id');
		$this->addField('ip');
		
		// $this->addField('other_fields');

		$this->addField('downloaded_at')->type('datetime')->defaultValue($this->app->now);


	}
}