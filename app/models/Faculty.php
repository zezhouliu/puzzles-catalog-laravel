<?php
class Faculty extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'faculty';


	/**
	 * Return the persons full name 
	 */
	public function getFullAttribute()
	{
		return $this->first . ' ' . $this->middle . ' ' . $this->last . ' ' . $this->suffix;
	}

}


