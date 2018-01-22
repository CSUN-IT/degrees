<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'nemo.degrees';

	/**
	 * Primary key in the table relationship.
	 *
	 * @var string
	 */
	protected $primaryKey = 'degrees_id';

    /**
     * Specify which attributes we want to hide
     *
     * @var array
     */
	protected $hidden = [
	    'degrees_id',
        'individuals_id',
        'is_displayed',
        'longitude',
        'latitude',
        'created_at',
        'updated_at'
    ];
}