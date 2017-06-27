<?php namespace Enguerrand\Boards;

use Backend;
use System\Classes\PluginBase;
use Enguerrand\Boards\Models\Posts;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Boards',
            'description' => 'Gestion de document',
            'author'      => 'Enguerrand Meheut',
            'icon'        => 'icon-hand-spock-o'
        ];
    }
    
    public function registerNavigation()
    {
        return [
            'boards' => [
                'label'       => 'Boards',
                'url'         => Backend::url('enguerrand/boards/listDocument'),
                'icon'        => 'icon-hand-spock-o',
                'permissions' => ['enguerrand.boards.*'],
                'order'       => 500,
                
                'sideMenu' => [
                    'listDocument' => [
                        'label' => 'List Document',
                        'url' => Backend::url('enguerrand/boards/listDocument'),
                        'icon' => 'icon-columns',
                        'permissions' => ['enguerrand.boards.manage_listDocument']
                    ],
                    'gestionTag' => [
                        'label' => 'Gestion Tag',
                        'url' => Backend::url('enguerrand/boards/gestionTag'),
                        'icon' => 'icon-cogs',
                        'permissions' => ['enguerrand.boards.manage_gestionTag']
                    ]
                ]
            ]
        ];
    }
    
    public function registerComponents()
    {   
        return [
            'Enguerrand\Boards\Components\ListDocument' => 'newBoards'
        ];
    }
    
    public function registerPermissions()
    { 
        return [
            'enguerrand.boards.listDocument' => [
                'tab' => 'Boards',
                'label' => 'manage_listDocument'
            ],
            'enguerrand.boards.gestionTag' => [
                'tab' => 'Boards',
                'label' => 'manage_gestionTag'
            ]
        ];
    }
    public function registerPageSnippets(){
        return [
            'Enguerrand\Boards\Components\ListDocument' => 'newBoards'
        ];
    }
     /**
     * Register method, called when the plugin is first registered.
     * @return void
     */
    public function register(){}
    /**
     * Boot method, called right before the request route.
     * @return array
     */
    public function boot(){}
}
