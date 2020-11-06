<?php

namespace MeedleCookies\Hook;

use Thelia\Core\Event\Hook\HookRenderBlockEvent;
use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;
use Thelia\Tools\URL;

class MeedleCookiesHook extends BaseHook {

	public function onMainStylesheet(HookRenderEvent $event){
        $event->add($this->addCSS("/assets/tarteaucitron/css/tarteaucitron.css"));
    }

    public function onMainHeadBottom(HookRenderEvent $event){
		$event->add($this->addJS("/assets/tarteaucitron/tarteaucitron.js"));
		$event->add($this->render("main.head-bottom.html"));
    }
    public function onAfterJavascriptInclude(HookRenderEvent $event){
		$event->add($this->render("main.after-javascript-include.html"));	
    }
	
}
?>