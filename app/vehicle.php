<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
	/**
	*The table associated with the model
	*
	*@var string
	*/
	protected $table ='vehicles';

	protected $fillable = ['first_name','last_name','contact_number','email', 'manufacturer', 'type', 'year', 'colour', 'mileage'];

}
