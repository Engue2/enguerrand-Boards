<?php namespace Enguerrand\Boards\Components;


use Cms\Classes\ComponentBase;
use Enguerrand\Boards\Models\ListDocument as DocumentModel;
use Enguerrand\Boards\Models\GestionBoards as BardModel;
use Enguerrand\Boards\Models\GestionTag as TagModel;

class ListDocument extends ComponentBase
{
    public function componentDetails() 
    {
        return [
            'name'        => 'Boards Documents',
            'description' => ''
        ];
    }
    
    public function defineProperties()
    {
        return [
            'nameboard' => [
                'title' => 'Tags Liste',
                'default' => '',
                'type' => 'string'
            ],
            'pdf' => [
                'title' => 'Info PDF',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'resumer' => [
                'title' => 'Info Resumer',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'duree'  => [
                'title' => 'Info Duree',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'dejarea' => [
                'title' => 'Info DejaRea',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'numnews'  => [
                'title' => 'Info NumeroLetter',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'skills' => [
                'title' => 'Info Competence',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'quest' => [
                'title' => 'Info Mission',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'intitul'  => [
                'title' => 'Info Intituler',
                'default' => 'false',
                'type' => 'checkbox'
            ],
            'expert' => [
                'title' => 'Info Expertise',
                'default' => 'false',
                'type' => 'checkbox'
            ]
        ];
    }
    
    public function getProperty($propertyName) {
        if($propertyName == 'doctitle'){ return 'Nom Du Document'; }
        if($propertyName == 'pdf'){ return 'Lien PDF'; }
        if($propertyName == 'resumer'){ return 'Resumer'; }
        if($propertyName == 'duree'){ return 'Durée'; }
        if($propertyName == 'dejarea'){ return 'Déja Réaliser'; }
        if($propertyName == 'numnews'){ return 'Numero News Letter'; }
        if($propertyName == 'skills'){ return 'Compétence'; }
        if($propertyName == 'quest'){ return 'Missions'; }
        if($propertyName == 'intitul'){ return 'Intituler'; }
        if($propertyName == 'expert'){ return 'Expertise'; }
        
        return $propertyName;
    }
    
    function onRun(){
        $tagsTab = $this->property('nameboard');
        $tagsTab = explode(',',$tagsTab);
        
        $doc = TagModel::whereIn('nametag',$tagsTab)->with('Edocuments')->get();
        $tabs = [];
        foreach($doc as $d){
            foreach($d->Edocuments as $dd){
                if(!isset($tabs[$dd->id])){
                    $tabs[$dd->id] = $dd->attributes;
                }
            }
        }
        asort($tabs);
        
        $allColl = $this->getProperties();
        unset($allColl['nameboard']);
        $v = ['doctitle' => "1"];
        $allColl = array_merge($v,$allColl);
    
        $k = 0;
        $collumns = [];
        foreach($allColl as $e => $sd){
            if($sd == 1){
                $collumns[$k] = $e;
                $k++;
            }
        }
        
        $this->page['docin'] = $tabs;
        $this->page['colin'] = $collumns;
    }   
}
