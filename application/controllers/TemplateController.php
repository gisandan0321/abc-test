<?php

use App\Core\CoreController;
use App\Core\Loader;

class TemplateController extends CoreController {
    
    /**
     * Template Controller Constructor
     */
    public function __construct() {
        parent:: __construct();
    }
    

    public function index() {
    	Loader::view("index");
    }
}
