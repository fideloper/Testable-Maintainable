<?php

use Fideloper\Interfaces\PluginManager;
use Fideloper\Interfaces\FooPlugin;
use Fideloper\Interfaces\BarPlugin;

class InterfaceTest extends PHPUnit_Framework_TestCase {

    public function testFooPluginInstall()
    {
        $manager = new PluginManager();

        $manager->add( new FooPlugin );

        $result = $manager->installAll();

        $this->assertEquals( $result, 'installing Foo', 'Foo plugin installs correctly' );
    }

    public function testFooPluginUninstall()
    {
        $manager = new PluginManager();

        $manager->add( new FooPlugin );

        $result = $manager->uninstallAll();

        $this->assertEquals( $result, 'uninstalling Foo', 'Foo plugin uninstalls correctly' );
    }

    public function testBarPluginInstall()
    {
        $manager = new PluginManager();

        $manager->add( new BarPlugin );

        $result = $manager->installAll();

        $this->assertEquals( $result, 'installing Bar', 'Bar plugin installs correctly' );
    }

    public function testBarPluginUninstall()
    {
        $manager = new PluginManager();

        $manager->add( new BarPlugin );

        $result = $manager->uninstallAll();

        $this->assertEquals( $result, 'uninstalling Bar', 'Bar plugin uninstalls correctly' );
    }

}