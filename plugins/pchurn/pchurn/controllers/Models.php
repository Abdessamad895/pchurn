<?php namespace Pchurn\Pchurn\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Models extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pchurn.Pchurn', 'Model');
    }
}
