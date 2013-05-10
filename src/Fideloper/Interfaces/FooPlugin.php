<?php namespace Fideloper\Interfaces;

class FooPlugin implements PluginInterface {

    public function install()
    {
        return 'installing Foo';
    }

    public function uninstall()
    {
        return 'uninstalling Foo';
    }

    public function doSomethingUseful()
    {
        return 'THIS IS USEFUL';
    }

}