<?php

/*
 * This plugin has been continued by Klaus - ArchonTeam
 * Copyright 2018 by Archon Klaus
 */
namespace UltimateParticles\task;

use pocketmine\math\Vector3;
use pocketmine\Player;
use UltimateParticles\UltimateParticles;
use UltimateParticles\base\BaseTask;

class SpiralTask extends BaseTask
{

    public function onRun($tick)
    {
        $t = $this->getPlugin()->getData()->getAll();
        //PARTICLE EJECTOR PART (The ticks between each ejection is as same but with spiral effect.
        $ej = $this->plugin->data->getAll();
        foreach (array_keys($ej) as $name){
            $x = $ej[$name]["pos"]["x"];
            $y = $ej[$name]["pos"]["y"];
            $z = $ej[$name]["pos"]["z"];
            $level = $this->getPlugin()->getServer()->getLevelByName($ej[$name]["pos"]["world"]);
            for($i=0;$i<$ej[$name]["amplifier"];$i++){
                foreach($ej[$name]["particle"] as $parti){
                    $level->addParticle($this->getPlugin()->getParticles()->getTheParticle($parti, new Vector3($x, $y, $z)));
                }
            }
        }
    }
}

?>
