<?php namespace Conprefor\Musicgroupbackend\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Members extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'conprefor.musicgroupbackend.manage_music_group' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Conprefor.Musicgroupbackend', 'music-group-backend', 'manage-members');
    }
}
