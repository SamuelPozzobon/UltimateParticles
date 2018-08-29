<?php

/*
 * This plugin has been continued by Klaus - ArchonTeam
 * Copyright 2018 by Archon Klaus
 */
namespace UltimateParticles\base;

use pocketmine\command\PluginCommand;
use pocketmine\plugin\Plugin;
use pocketmine\command\CommandExecutor;
use UltimateParticles\UltimateParticles;

abstract class BaseCommand extends PluginCommand implements CommandExecutor{

	/**
	 *
	 * @var $plugin
	 */
	protected $plugin;

	public function __construct (UltimateParticles $plugin){
		$this->plugin = $plugin;
	}

    public final function getPlugin(): Plugin{
        return $this->plugin;
    }

	public final function getConfig(){
		return $this->plugin->getConfig();
	}
}
