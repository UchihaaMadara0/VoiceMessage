<?php




namespace VoiceMessage;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\PluginBase;
use pocketmine\Listner;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\utils\TextFormat as C;
use VoiceMessage\Main;

class Main extends PluginBase implements Listner{

    public function onEnable(){
        $this->getLogger()->info(C::Red."plugin made by Madara");
       $this->getServer()->getPluginManager()->registerEvents($this, $this);
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $this->getResource("config.yml");
    }
    public function onJoin(PlayerJoinEvent  $event){
        $player = $event->getPlayer();
        $player->sendTranslation($this->getconfig()->get("voicemessage"));
        }
    }
}
