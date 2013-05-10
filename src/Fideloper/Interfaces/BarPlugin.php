<?php namespace Fideloper\Interfaces;

class BarPlugin implements PluginInterface {

    public function install()
    {
        return 'installing Bar';
    }

    public function uninstall()
    {
        return 'uninstalling Bar';
    }

    public function doSomethingElseUseful()
    {
        return 'THIS IS ALSO USEFUL';
    }

}