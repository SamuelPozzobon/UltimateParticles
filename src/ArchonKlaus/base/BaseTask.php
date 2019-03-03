<?php

/*
 * This plugin has been continued by Klaus - ArchonTeam
 * Copyright 2018 by Archon Klaus
 */
namespace ArchonKlaus\base;

use pocketmine\scheduler\Task;
use ArchonKlaus\UltimateParticles;

abstract class BaseTask extends Task{

    /**
    *
    * @var $plugin
    */
	protected $plugin;

    public function __construct(UltimateParticles $plugin){
        $this->plugin = $plugin;
    }

    public final function getPlugin(){
        return $this->plugin;
    }

    public final function getConfig(){
        return $this->plugin->getConfig();
    }

}
