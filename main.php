<?php

namespace simonetasyobatu;

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
		if($text[0] == "oppai"){
			$event->setLine(0,"下ネタはやめなさい。");
		}
	}
}
