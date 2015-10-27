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

	protected $hidden = ['degrees_id', 'individuals_id', 'created_at', 'updated_at'];
}