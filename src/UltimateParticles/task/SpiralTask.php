<?php

/*
 * This file is a part of UltimateParticles.
 * Copyright (C) 2016 hoyinm14mc
 *
 * UltimateParticles is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * UltimateParticles is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UltimateParticles. If not, see <http://www.gnu.org/licenses/>.
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
        //PARTICLE EJECTOR PART (The ticks between each ejection is as same as the display of spiral effects.
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
