<?php namespace Enguerrand\Boards\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Gestion Tag Back-end Controller
 */
class GestionTag extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Enguerrand.Boards', 'boards', 'gestiontag');
    }
}
