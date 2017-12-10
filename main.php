<?php

namespace simonetasyobatu;

use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener{

	public function onEnable(){
    	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onSignChange(SignChangeEvent $event){
		$lines = $event->getLines();
		switch($lines[0]){
			//下のcaseは気分が悪くなる恐れがありますのでご注意ください
			//以下の単語はgamesukimanIRSさんによって書かれました
			case 'oppai':
			case 'おっぱい':
			case 'sex':
			case 'セックス':
			case 'tinko':
			case 'ちんこ':
			case 'manko':
			case 'まんこ':
			case 'sikosiko':
			case 'しこしこ':
			case 'シコシコ':
			case '4545':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$event->getPlayer()->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
		}
	}

}