<?php namespace Enguerrand\Boards\Models;

use Model;

/**
 * GestionTag Model
 */
class GestionTag extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'Etags';
 
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [ 'nametag' ];
    
    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'Edocuments' => [ 'Enguerrand\Boards\Models\ListDocument', 
            'table' => 'Etags_Edocuments',
            'key' => 'Etags_id',
            'otherKey' => 'Edocuments_id'
            ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
