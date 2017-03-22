<?php

namespace xepan\mlsu;

class Initiator extends \Controller_Addon {
    
    public $addon_name = 'xepan_mlsu';

    function setup_admin(){
        $this->routePages('xepan_mlsu');
        $this->addLocation(array('template'=>'templates','js'=>'templates/js','css'=>'templates/css'))
        ->setBaseURL('../vendor/xepan/mlsu/');

        $m = $this->app->top_menu->addMenu('MLSU');
        $m->addItem(['Top Menus','icon'=>'fa fa-check-square-o'],'xepan_mlsu_menus');
        $m->addItem(['Program/Faculty/Course','icon'=>'fa fa-check-square-o'],'xepan_mlsu_programcourses');
        $m->addItem(['Document Catgory','icon'=>'fa fa-check-square-o'],'xepan_mlsu_documentcategories');
        $m->addItem(['Documents','icon'=>'fa fa-check-square-o'],'xepan_mlsu_documents');
        return $this;
    }

    function setup_frontend(){
        $this->routePages('xepan_mlsu');
        $this->addLocation(array('template'=>'templates','js'=>'templates/js','css'=>'templates/css'))
        ->setBaseURL('./vendor/xepan/mlsu/');
        return $this;
    }

}
