<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	protected $table = 'fresco.people';			
	protected $primaryKey = 'individuals_id';
	protected $fillable = [];

}