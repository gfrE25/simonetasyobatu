<?php

namespace simonetasyobatu;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\tile;
use pocketmine\tile\Sign;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener{

/*
|~~~~~~~~|  |\     /|   /~~~~~\  ~~~~~  |~~~~\    /~~~~~\
|           | \   / |  /      |    |    |     |  /      |
|    ~~~~|  |  \_/  |  |______     |    |____/   |_______
|        |  |       |         |    |    |\__            |
|________|  |       |  \______|  __|__  |   \    \______|
(c)gamesukimanIRS

注意
コードは基本汚いです。関数とかもあったもの使ってるだけです
*/

	public function onEnable(){
		//ここを改造するのはやめてください。
		$this->getlogger()->notice("死んでみようか(＾ω＾)ﾆｺﾆｺ");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onSignChange(SignChangeEvent $event){
		$text = $event->getLines();
		switch ($text[0]) {
			//下のcaseは気分が悪くなる恐れがありますのでご注意ください
			case 'oppai':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'おっぱい':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'sex':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'セックス':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'tinko':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'ちんこ':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'manko':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;
			case 'まんこ':
				$event->setLine(0,"§6下ネタはやめて下さい");
				$player = $event->getPlayer()->getName();
				$player->kick("§cあなたの書いた看板を下ネタと判断しました", false);
				break;

		}
		$player = $event->getPlayer();
		if($player->isOp()){
			if($text[0] == "bukken"){
				$todaym = date("m");
				$todayd = date("d");
				$name = $event->getPlayer()->getName();
				$event->setLine(0,"§l§6⚠§r§c警告:違法物件§l§6⚠");
				$event->setLine(3,"§l§b".$name."");
				switch ($text[1]) {
					/*見本※これをテンプレに【】を書き換えてくれれば動くと思います。下のコードも参考に(参考にならないかもだけど
					case '【ここを二段目に入力する文字】':
						$todayd = $todayd + 【警告から何日後に撤去するか※数字】;
						if($todaym == 1 and $todayd >= 31){
							$todaym = 2;
							$todayd = 1;
						}elseif($todaym == 2 and $todayd >= 28){
							$todaym = 3;
							$todayd = 1;
						}elseif($todaym == 3 and $todayd >= 31){
							$todaym = 4;
							$todayd = 1;
						}elseif($todaym == 4 and $todayd >= 30){
							$todaym = 5;
							$todayd = 1;
						}elseif($todaym == 5 and $todayd >= 31){
							$todaym = 6;
							$todayd = 1;
						}elseif($todaym == 6 and $todayd >= 30){
							$todaym = 7;
							$todayd = 1;
						}elseif($todaym == 7 and $todayd >= 31){
							$todaym = 8;
							$todayd = 1;
						}elseif($todaym == 8 and $todayd >= 31){
							$todaym = 9;
							$todayd = 1;
						}elseif($todaym == 9 and $todayd >= 30){
							$todaym = 10;
							$todayd = 1;
						}elseif($todaym == 10 and $todayd >= 31){
							$todaym = 11;
							$todayd = 1;
						}elseif($todaym == 11 and $todayd >= 30){
							$todaym = 12;
							$todayd = 1;
						}elseif($todaym == 12 and $todayd >= 31){
							$todaym = 1;
							$todayd = 1;
						}
						$today = "§d".$todaym."/".$todayd."";
						$event->setLine(1,"【どういう警告にするか。二段目に表示されるメッセージ。】");
						$event->setLine(2,"§c撤去日 ".$today."");
						break;

					改造場所(改造許可場所)は以上です。改造するところもないのでそれ以外は基本触らないようにお願いします。
					*/
					case 'miti':
						$todayd = $todayd + 10;
						if($todaym == 1 and $todayd >= 31){
							$todaym = 2;
							$todayd = 1;
						}elseif($todaym == 2 and $todayd >= 28){
							$todaym = 3;
							$todayd = 1;
						}elseif($todaym == 3 and $todayd >= 31){
							$todaym = 4;
							$todayd = 1;
						}elseif($todaym == 4 and $todayd >= 30){
							$todaym = 5;
							$todayd = 1;
						}elseif($todaym == 5 and $todayd >= 31){
							$todaym = 6;
							$todayd = 1;
						}elseif($todaym == 6 and $todayd >= 30){
							$todaym = 7;
							$todayd = 1;
						}elseif($todaym == 7 and $todayd >= 31){
							$todaym = 8;
							$todayd = 1;
						}elseif($todaym == 8 and $todayd >= 31){
							$todaym = 9;
							$todayd = 1;
						}elseif($todaym == 9 and $todayd >= 30){
							$todaym = 10;
							$todayd = 1;
						}elseif($todaym == 10 and $todayd >= 31){
							$todaym = 11;
							$todayd = 1;
						}elseif($todaym == 11 and $todayd >= 30){
							$todaym = 12;
							$todayd = 1;
						}elseif($todaym == 12 and $todayd >= 31){
							$todaym = 1;
							$todayd = 1;
						}
						$today = "§d".$todaym."/".$todayd."";
						$event->setLine(1,"§a道から最低1マス離して下さい");
						$event->setLine(2,"§c撤去日 ".$today."");
						break;
					case 'hochi':
						$todayd = $todayd + 30;
						if($todaym == 1 and $todayd >= 31){
							$todaym = 2;
							$todayd = 1;
						}elseif($todaym == 2 and $todayd >= 28){
							$todaym = 3;
							$todayd = 1;
						}elseif($todaym == 3 and $todayd >= 31){
							$todaym = 4;
							$todayd = 1;
						}elseif($todaym == 4 and $todayd >= 30){
							$todaym = 5;
							$todayd = 1;
						}elseif($todaym == 5 and $todayd >= 31){
							$todaym = 6;
							$todayd = 1;
						}elseif($todaym == 6 and $todayd >= 30){
							$todaym = 7;
							$todayd = 1;
						}elseif($todaym == 7 and $todayd >= 31){
							$todaym = 8;
							$todayd = 1;
						}elseif($todaym == 8 and $todayd >= 31){
							$todaym = 9;
							$todayd = 1;
						}elseif($todaym == 9 and $todayd >= 30){
							$todaym = 10;
							$todayd = 1;
						}elseif($todaym == 10 and $todayd >= 31){
							$todaym = 11;
							$todayd = 1;
						}elseif($todaym == 11 and $todayd >= 30){
							$todaym = 12;
							$todayd = 1;
						}elseif($todaym == 12 and $todayd >= 31){
							$todaym = 1;
							$todayd = 1;
						}
						$today = "§d".$todaym."/".$todayd."";
						$event->setLine(0,"§l§6⚠§r§c警告:放置物件§l§6⚠");
						$event->setLine(1,"§a30日以内に持ち主のログインがない場合撤去");
						$event->setLine(2,"§c撤去日 ".$today."");
						break;

					case 'tonari-tatemono':
						$todayd = $todayd + 10;
						if($todaym == 1 and $todayd >= 31){
							$todaym = 2;
							$todayd = 1;
						}elseif($todaym == 2 and $todayd >= 28){
							$todaym = 3;
							$todayd = 1;
						}elseif($todaym == 3 and $todayd >= 31){
							$todaym = 4;
							$todayd = 1;
						}elseif($todaym == 4 and $todayd >= 30){
							$todaym = 5;
							$todayd = 1;
						}elseif($todaym == 5 and $todayd >= 31){
							$todaym = 6;
							$todayd = 1;
						}elseif($todaym == 6 and $todayd >= 30){
							$todaym = 7;
							$todayd = 1;
						}elseif($todaym == 7 and $todayd >= 31){
							$todaym = 8;
							$todayd = 1;
						}elseif($todaym == 8 and $todayd >= 31){
							$todaym = 9;
							$todayd = 1;
						}elseif($todaym == 9 and $todayd >= 30){
							$todaym = 10;
							$todayd = 1;
						}elseif($todaym == 10 and $todayd >= 31){
							$todaym = 11;
							$todayd = 1;
						}elseif($todaym == 11 and $todayd >= 30){
							$todaym = 12;
							$todayd = 1;
						}elseif($todaym == 12 and $todayd >= 31){
							$todaym = 1;
							$todayd = 1;
						}
						$today = "§d".$todaym."/".$todayd."";
						$event->setLine(1,"§a隣の建物から最低1マス離してください");
						$event->setLine(2,"§c撤去日 ".$today."");
						break;

					case 'tonari-hogo':
						$todayd = $todayd + 10;
						if($todaym == 1 and $todayd >= 31){
							$todaym = 2;
							$todayd = 1;
						}elseif($todaym == 2 and $todayd >= 28){
							$todaym = 3;
							$todayd = 1;
						}elseif($todaym == 3 and $todayd >= 31){
							$todaym = 4;
							$todayd = 1;
						}elseif($todaym == 4 and $todayd >= 30){
							$todaym = 5;
							$todayd = 1;
						}elseif($todaym == 5 and $todayd >= 31){
							$todaym = 6;
							$todayd = 1;
						}elseif($todaym == 6 and $todayd >= 30){
							$todaym = 7;
							$todayd = 1;
						}elseif($todaym == 7 and $todayd >= 31){
							$todaym = 8;
							$todayd = 1;
						}elseif($todaym == 8 and $todayd >= 31){
							$todaym = 9;
							$todayd = 1;
						}elseif($todaym == 9 and $todayd >= 30){
							$todaym = 10;
							$todayd = 1;
						}elseif($todaym == 10 and $todayd >= 31){
							$todaym = 11;
							$todayd = 1;
						}elseif($todaym == 11 and $todayd >= 30){
							$todaym = 12;
							$todayd = 1;
						}elseif($todaym == 12 and $todayd >= 31){
							$todaym = 1;
							$todayd = 1;
						}
						$today = "§d".$todaym."/".$todayd."";
						$event->setLine(1,"§a隣の土地保護から最低1マス離してください");
						$event->setLine(2,"§c撤去日 ".$today."");
						break;

					case 'arasi':
						$todayd = $todayd + 15;
						if($todaym == 1 and $todayd >= 31){
							$todaym = 2;
							$todayd = 1;
						}elseif($todaym == 2 and $todayd >= 28){
							$todaym = 3;
							$todayd = 1;
						}elseif($todaym == 3 and $todayd >= 31){
							$todaym = 4;
							$todayd = 1;
						}elseif($todaym == 4 and $todayd >= 30){
							$todaym = 5;
							$todayd = 1;
						}elseif($todaym == 5 and $todayd >= 31){
							$todaym = 6;
							$todayd = 1;
						}elseif($todaym == 6 and $todayd >= 30){
							$todaym = 7;
							$todayd = 1;
						}elseif($todaym == 7 and $todayd >= 31){
							$todaym = 8;
							$todayd = 1;
						}elseif($todaym == 8 and $todayd >= 31){
							$todaym = 9;
							$todayd = 1;
						}elseif($todaym == 9 and $todayd >= 30){
							$todaym = 10;
							$todayd = 1;
						}elseif($todaym == 10 and $todayd >= 31){
							$todaym = 11;
							$todayd = 1;
						}elseif($todaym == 11 and $todayd >= 30){
							$todaym = 12;
							$todayd = 1;
						}elseif($todaym == 12 and $todayd >= 31){
							$todaym = 1;
							$todayd = 1;
						}
						$today = "§d".$todaym."/".$todayd."";
						$event->setLine(0,"§b§lⓘ§r§6注意:荒らし物件§l§bⓘ");
						$event->setLine(1,"§a申告があれば修復します");
						$event->setLine(2,"§c撤去日 ".$today."");
						break;

					default:
						$event->setLine(0,"§c正しい形式でやり直してください");
						$event->setLine(1,"");
						$event->setLine(2,"");
						$event->setLine(3,"");
						break;

				}
			}
		}else{
			$player->sendTip("§cあなたには看板を立てる権限がありません");
			return true;
		}
	}
}
