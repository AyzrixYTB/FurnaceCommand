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

namespace Ayzrix\Furnace\Commands;

use Ayzrix\Furnace\Main;
use Ayzrix\Furnace\Utils\Utils;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\item\Item;
use pocketmine\Player;

class Furnace extends PluginCommand {

    public function __construct(Main $plugin) {
        parent::__construct(Utils::getIntoConfig("command_name"), $plugin);
        $this->setDescription(Utils::getIntoConfig("command_description"));
        $this->setPermission(Utils::getIntoConfig("command_permission"));
        $this->setAliases(Utils::getIntoConfig("command_aliases"));
    }

    public function execute(CommandSender $player, string $commandLabel, array $args) {
        if ($player instanceof Player) {
            if ($this->testPermission($player)) {
                $item = $player->getInventory()->getItemInHand();
                if (isset(Utils::$furnaces[$item->getId() . ":" . $item->getDamage()])) {
                    $values = Utils::$furnaces[$item->getId() . ":" . $item->getDamage()];
                    $values = explode(":", $values);
                    $player->getInventory()->setItemInHand(Item::get((int)$values[0], (int)$values[1], $item->getCount()));
                    $player->sendMessage(Utils::getConfigMessage("furnace_success"));
                } else $player->sendMessage(Utils::getConfigMessage("cannot_furnace"));
            } else $player->sendMessage(Utils::getConfigMessage("not_permission"));
        } else $player->sendMessage(Utils::getConfigMessage("not_player"));
    }
}