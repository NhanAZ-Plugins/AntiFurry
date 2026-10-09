<?php

declare(strict_types=1);

namespace pocketmine\event {
	interface Listener {}
}

namespace pocketmine\plugin {
	abstract class PluginBase {}
}

namespace {
	require_once __DIR__ . "/../src/IgPlugin/AntiFurry/Main.php";

	use IgPlugin\AntiFurry\Main;

	$cases = [
		["UwU", true],
		["OwO", true],
		["furry", true],
		["ordinary chat", false],
		["Furry", false],
	];

	foreach ($cases as [$message, $expected]) {
		if (Main::isCursedWords($message) !== $expected) {
			throw new RuntimeException("Unexpected word match for {$message}");
		}
	}

	echo "PASS: " . count($cases) . " word filter cases\n";
}
