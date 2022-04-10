<?php

namespace Rehike;

/**
 * Class implementing the base Rehike application
 */
final class Application {
    /**
     * Production mode accessor
     * 
     * This property should be considered READ-ONLY
     * (only use get)
     * 
     * @var bool
     */
    public $isProd;

    /**
     * Module definitions
     */
    public $runtimeInfo;
    public $logger;
    public $router;

    /**
     * Insertion point
     */
    public function main() {
        // include required global constants
        require 'Rehike/constants.php';
        $this -> isProd = REHIKE_PROD; // easy access from application and modules
        
        // include composer packages
        require 'vendor/autoload.php';

        $this -> initModules();
    }

    /**
     * Module initialiser
     */
    protected function initModules() {
        $this -> runtimeInfo = new Modules\RuntimeInfo();
        $this -> logger = new Modules\Logger\LoggerModule();
        $this -> router = new Modules\Router();
    }
}