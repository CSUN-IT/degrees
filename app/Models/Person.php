<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    /**
     * Specify the table we want this model to reference
     * as opposed to the default
     *
     * @var string
     */
    protected $table = 'fresco.people';

    /**
     * Specify the primary key instead of the default
     *
     * @var string
     */
	protected $primaryKey = 'individuals_id';

	/**
     * Turn off the auto-incrementing feature of the
     * primary key
     *
     * @var bool
     */
	public $incrementing = false;

    /**
     * The only attributes we want to see
     *
     * @var array
     */
	protected $visible = ['appt_year', 'degrees'];

    /**
     * The degree relationship to a person
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function degrees()
    {
		return $this->hasMany('App\Models\Degree', 'individuals_id');
	}
}