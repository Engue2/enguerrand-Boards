<?php namespace Enguerrand\Boards\Models;

use Model;
use Enguerrand\Boards\Models\GestionTag as TagModel;
use Enguerrand\Boards\Models\ListDocument as DocumentModel;

/**
 * ListDocument Model
 */
class ListDocument extends Model
{
    public $table = 'Edocuments';
    
    protected $guarded = ['*'];
    
    protected $fillable = [];
    
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
         'Etags' => [ 'Enguerrand\Boards\Models\GestionTag', 
            'table' => 'Etags_Edocuments',
            'key' => 'Edocuments_id',
            'otherKey' => 'Etags_id'
            ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}