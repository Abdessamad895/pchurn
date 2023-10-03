<?php namespace Pchurn\Pchurn\Models;

use Model;

/**
 * Model
 */
class Prediction extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pchurn_pchurn_prediction';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
