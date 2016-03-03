<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	protected $table = 'fresco.people';			
	protected $primaryKey = 'individuals_id';
	protected $fillable = [];

	// only expose these attributes
	protected $visible = ['appt_year', 'degrees'];

	public function degrees() {
		return $this->hasMany('App\Models\Degree', 'individuals_id');
	}
}