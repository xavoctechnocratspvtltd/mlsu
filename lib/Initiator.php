<?php

namespace xepan\mlsu;

class Initiator extends \Controller_Addon {
    
    public $addon_name = 'xepan_mlsu';

    function setup_admin(){
        $this->routePages('xepan_mlsu');
        $this->addLocation(array('template'=>'templates','js'=>'templates/js','css'=>'templates/css'))
        ->setBaseURL('../vendor/xepan/mlsu/');

        $m = $this->app->top_menu->addMenu('MLSU');
        $m->addItem(['MLSU MENU','icon'=>'fa fa-check-square-o'],'xepan_mlsu_index');
        return $this;
    }

    function setup_frontend(){
        $this->routePages('xepan_mlsu');
        $this->addLocation(array('template'=>'templates','js'=>'templates/js','css'=>'templates/css'))
        ->setBaseURL('./vendor/xepan/mlsu/');
        return $this;
    }

}
