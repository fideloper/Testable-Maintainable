<?php namespace Fideloper\Interfaces;

class PluginManager {

    protected $plugins = array();

    /**
        THIS IS IMPORTANT - Type Hinting
    */
    public function add(PluginInterface $plugin)
    {
        $this->plugins[] = $plugin;

        return $this;
    }

    public function installAll()
    {
        $output = '';

        foreach( $this->plugins as $plugin )
        {
            $output .= $plugin->install();
        }

        return $output;
    }

    public function uninstallAll()
    {
        $output = '';

        foreach( $this->plugins as $plugin )
        {
            $output .= $plugin->uninstall();
        }

        return $output;
    }

}