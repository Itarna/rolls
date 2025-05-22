<?php

declare(strict_types=1);

$autoload = __DIR__ . '/vendor-bin/cs-fixer/vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}

use Nextcloud\CodingStandard\Config;

$config = new Config();
$config
	->getFinder()
	->notPath('build')
	->notPath('l10n')
	->notPath('node_modules')
	->notPath('src')
	->notPath('vendor')
	->in(__DIR__);

return $config;
