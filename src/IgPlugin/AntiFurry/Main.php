<?php

declare(strict_types=1);

namespace IgPlugin\AntiFurry;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

	protected function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public static function isCursedWords(string $string): bool {
		$cursedwords = ["UwU", "OwO", "furry"];
		foreach ($cursedwords as $cursedword) {
			if (str_contains($string, $cursedword)) {
				return true;
			}
		}
		return false;
	}

	public function onChat(PlayerChatEvent $event): void {
		$player = $event->getPlayer();
		$msg = $event->getMessage();
		if (self::isCursedWords($msg)) {
			$player->kick("Ew, Go Away");
		}
	}

	public function onJoin(PlayerJoinEvent $event): void {
		$player = $event->getPlayer();
		$playerName = $player->getName();
		if (self::isCursedWords($playerName)) {
			$player->kick("Ew, get outta here");
		}
	}
}
