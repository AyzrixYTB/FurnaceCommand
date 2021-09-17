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

namespace Ayzrix\Furnace\Utils;

use Ayzrix\Furnace\Main;
use pocketmine\item\Item;

class Utils {

    /**
     * @var string[]
     *
     * Furnaces recipes from https://minecraft.fandom.com/wiki/Smelting
     */
    public static $furnaces = [
        Item::POTATO . ":0" => Item::BAKED_POTATO . ":0",
        Item::RAW_BEEF . ":0" => Item::COOKED_BEEF . ":0",
        Item::RAW_SALMON . ":0" => Item::COOKED_SALMON . ":0",
        Item::RAW_PORKCHOP . ":0" => Item::COOKED_PORKCHOP . ":0",
        Item::RAW_CHICKEN . ":0" => Item::COOKED_CHICKEN . ":0",
        Item::RAW_FISH . ":0" => Item::COOKED_FISH . ":0",
        Item::RAW_MUTTON . ":0" => Item::COOKED_MUTTON . ":0",
        Item::RAW_RABBIT . ":0" => Item::COOKED_RABBIT . ":0",
        Item::EMERALD_ORE . ":0" => Item::EMERALD . ":0",
        Item::DIAMOND_ORE . ":0" => Item::DIAMOND . ":0",
        Item::GOLD_ORE . ":0" => Item::GOLD_INGOT . ":0",
        Item::QUARTZ_ORE . ":0" => Item::QUARTZ . ":0",
        Item::IRON_ORE . ":0" => Item::IRON_INGOT . ":0",
        Item::LAPIS_ORE . ":0" => Item::DYE . ":4",
        Item::REDSTONE_ORE . ":0" => Item::REDSTONE . ":0",
        Item::GLOWING_REDSTONE_ORE . ":0" => Item::REDSTONE . ":0",
        Item::COAL_ORE . ":0" => Item::COAL . ":0",
        Item::COBBLESTONE . ":0" => Item::STONE . ":0",
        Item::SAND . ":0" => Item::GLASS . ":0",
        Item::NETHERRACK . ":0" => Item::NETHERBRICK . ":0",
        Item::CLAY_BALL . ":0" => Item::BRICK . ":0",
        Item::LOG . ":0" => Item::COAL . ":0",
        Item::LOG2 . ":0" => Item::COAL . ":0",
        Item::CLAY_BLOCK . ":0" => Item::HARDENED_CLAY . ":0",
        Item::STAINED_CLAY . ":0" => "220:0",
        Item::STAINED_CLAY . ":1" => "221:0",
        Item::STAINED_CLAY . ":2" => "222:0",
        Item::STAINED_CLAY . ":3" => "223:0",
        Item::STAINED_CLAY . ":4" => "224:0",
        Item::STAINED_CLAY . ":5" => "225:0",
        Item::STAINED_CLAY . ":6" => "226:0",
        Item::STAINED_CLAY . ":7" => "227:0",
        Item::STAINED_CLAY . ":8" => "228:0",
        Item::STAINED_CLAY . ":9" => "229:0",
        Item::STAINED_CLAY . ":10" => "230:0",
        Item::STAINED_CLAY . ":11" => "231:0",
        Item::STAINED_CLAY . ":12" => "232:0",
        Item::STAINED_CLAY . ":13" => "233:0",
        Item::STAINED_CLAY . ":14" => "234:0",
        Item::STAINED_CLAY . ":15" => "235:0",
        Item::GOLD_HELMET . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_CHESTPLATE . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_LEGGINGS . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_BOOTS . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_SWORD . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_PICKAXE . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_AXE . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_SHOVEL . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_HOE . ":0" => Item::GOLD_NUGGET . ":0",
        Item::GOLD_HORSE_ARMOR . ":0" => Item::GOLD_NUGGET . ":0",
        Item::IRON_HELMET . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_CHESTPLATE . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_LEGGINGS . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_BOOTS . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_SWORD . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_PICKAXE . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_AXE . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_SHOVEL . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_HOE . ":0" => Item::IRON_NUGGET . ":0",
        Item::IRON_HORSE_ARMOR . ":0" => Item::IRON_NUGGET . ":0",
        Item::CHAIN_HELMET . ":0" => Item::IRON_NUGGET . ':0',
        Item::CHAIN_CHESTPLATE . ":0" => Item::IRON_NUGGET . ':0',
        Item::CHAIN_LEGGINGS . ":0" => Item::IRON_NUGGET . ':0',
        Item::CHAIN_BOOTS . ":0" => Item::IRON_NUGGET . ':0',
        Item::CACTUS . ":0" => Item::DYE . ":2",
        Item::KELP . ":0" => Item::DRIED_KELP . ":0",
        Item::CHORUS_FRUIT . ":0" => Item::CHORUS_FRUIT_POPPED . ":0",
        Item::STONE_BRICK . ":0" => "98:0"
    ];


    /**
     * @return string
     */
    public static function getPrefix(): string {
        return self::getIntoConfig("prefix");
    }

    /**
     * @param string $text
     * @return array|string
     */
    public static function getConfigMessage(string $text) {
        return str_replace('{prefix}', self::getPrefix(), Main::getInstance()->getConfig()->get($text));
    }

    /**
     * @param string $value
     * @return string|array
     */
    public static function getIntoConfig(string $value) {
        return Main::getInstance()->getConfig()->get($value);
    }
}