<?php
use CyberRoot0\EasyMVC\Controller\Main;
use CyberRoot0\EasyMVC\Aspect\EventController;
$kernel->addProxy(Main::class, EventController::class);