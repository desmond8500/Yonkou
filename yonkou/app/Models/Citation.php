<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Citation",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="citation",
 *          description="citation",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="auteur",
 *          description="auteur",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="traduction",
 *          description="traduction",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      )
 * )
 */
class Citation extends Model
{
    use SoftDeletes;

    public $table = 'citations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'citation',
        'auteur',
        'traduction',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'citation' => 'string',
        'auteur' => 'string',
        'traduction' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
