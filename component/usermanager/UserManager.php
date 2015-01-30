<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 30/01/15
 * Time: 17:36
 */

namespace component\usermanager;


use application\AbstractComponent;
use application\AbstractComponentInjector;

class UserManager extends AbstractComponent{
    /**
     * Loads a component based on current version
     */
    protected function loadComponent()
    {
        switch($this->currentVersion)
        {
            case "1.0":
                self::$instance = new version1AdvertTransformer();
                break;
            default:
                self::$instance = $this;
                break;
        }
    }

    /**
     * Returns an instance of the component
     * @param AbstractComponentInjector $componentInjector
     * @return null|$this
     */
    public function getInstance(AbstractComponentInjector $componentInjector)
    {
        $this->loadComponent();
        $componentInjector->inject(self::$instance);
        return self::$instance;
    }
} 