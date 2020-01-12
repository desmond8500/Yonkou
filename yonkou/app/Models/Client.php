<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version January 12, 2020, 2:36 pm UTC
 *
 * @property string titre
 * @property string prenom
 * @property string nom
 * @property string local
 * @property string prix
 * @property string ci
 * @property string delivre
 * @property string tel
 * @property string caution
 * @property string contrat
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
        'prix',
        'ci',
        'delivre',
        'tel',
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
        'prix' => 'string',
        'ci' => 'string',
        'delivre' => 'string',
        'tel' => 'string',
        'caution' => 'string',
        'contrat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
