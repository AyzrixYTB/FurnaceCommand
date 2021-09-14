<?php

/***
 *      ______
 *     |  ____|
 *     | |__ _   _ _ __ _ __   __ _  ___ ___
 *     |  __| | | | '__| '_ \ / _` |/ __/ _ \
 *     | |  | |_| | |  | | | | (_| | (_|  __/
 *     |_|   \__,_|_|  |_| |_|\__,_|\___\___|
 *
 *
 */

namespace Ayzrix\Furnace;

use Ayzrix\Furnace\Commands\Furnace;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {
    use SingletonTrait;

    public function onLoad() {
        self::setInstance($this);
    }

    public function onEnable() {
        self::$instance = $this;
        $this->saveDefaultConfig();
        $this->getServer()->getCommandMap()->register("furnace", new Furnace());
    }
}