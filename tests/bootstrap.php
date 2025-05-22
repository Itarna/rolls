<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../tests/bootstrap.php';
$autoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}

\OC_App::loadApp(OCA\Rolls\AppInfo\Application::APP_ID);
OC_Hook::clear();
