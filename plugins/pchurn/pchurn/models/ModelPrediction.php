<?php namespace Pchurn\Pchurn\Models;

use Model;

/**
 * Model
 */
class ModelPrediction extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pchurn_pchurn_model';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
