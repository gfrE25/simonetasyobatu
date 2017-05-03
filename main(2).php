<?php

namespace simonetasyobatu;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\tile;
use pocketmine\tile\Sign;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getlogger()->error("死んでみようか(＾ω＾)ﾆｺﾆｺ");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onSignChange(SignChangeEvent $event){
		$text = $event->getLines();
		if(不適切な内容のため消させていただきます){
			$player = $event->getPlayer()->getName();
			$event->setLine(0,"§6下ネタはやめて下さい");
			$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
		}
	function onSignChange(SignChangeEvent $event){
		$text = $event->getLines();
		$name = $event->getPlayer()->getName();
		$today = date("m/d");
		if($text[0] == "bukken-koudou"){
			$event->setLine(0,"§l§6⚠§r§c警告:違法物件§l§6⚠");
			$event->setLine(1,"§a公道から最低でも1マス離して下さい");
			$event->setLine(2,"設置日" + $today);
			$event->setLine(3,"§l§b" + $name);
		}
	}
}
