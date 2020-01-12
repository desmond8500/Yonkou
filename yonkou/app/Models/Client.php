<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version January 12, 2020, 2:01 pm UTC
 *
 * @property string titre
 * @property string prenom
 * @property string nom
 * @property string local
 * @property integer ci
 * @property integer delivre
 * @property integer tel
 * @property integer prix
 * @property integer caution
 * @property integer contrat
 */
class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titre',
        'prenom',
        'nom',
        'local',
        'ci',
        'delivre',
        'tel',
        'prix',
        'caution',
        'contrat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titre' => 'string',
        'prenom' => 'string',
        'nom' => 'string',
        'local' => 'string',
        'ci' => 'integer',
        'delivre' => 'integer',
        'tel' => 'integer',
        'prix' => 'integer',
        'caution' => 'integer',
        'contrat' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
