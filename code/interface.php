<?php

/**
* Set up autoloading
*/
require_once(dirname(__FILE__).'/../vendor/autoload.php');

/**
* What classes we'll be calling here
*/
use Fideloper\Interfaces\PluginManager;
use Fideloper\Interfaces\FooPlugin;
use Fideloper\Interfaces\BarPlugin;

/**
* "Install" plugins with plugin manager
*/
$manager = new PluginManager();

$manager->add( new FooPlugin() )
        ->add( new BarPlugin() );

$installOutput = $manager->installAll();

$uninstallOutput = $manager->uninstallAll();

/**
* Our output
*/
echo $installOutput;
echo "\n";
echo $uninstallOutput;