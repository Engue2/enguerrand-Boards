<?php namespace Enguerrand\Boards\Models;

use Model;

/**
 * gestion_boards Model
 */
class GestionBoards extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'Etags_Edocuments';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
