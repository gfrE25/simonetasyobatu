<?php

//皆さんでお花を摘みに行きましょう


namespace simonetayobou;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener
{
  
	public function onEnable()
        {
    	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onSignChange(SignChangeEvent $event)
	{
           $lines = $event->getLines();
	   $words = array("おsex", "おtinko","おmanko","おsikosiko","Oh~sikosiko");
           foreach($words as $search){
              if($lines[0] === $search){
	         $event->getPlayer()->kick("§cあなたの書いた看板を下ネタと判断しました", false);
	      }
	   }
        }
}
