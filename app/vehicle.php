<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vehicle extends Model
{
	/**
	*The table associated with the model
	*
	*@var string
	*/
	protected $table ='vehicles';

	protected $fillable = ['first_name','last_name','contact_number','email', 'manufacturer', 'type', 'year', 'colour', 'mileage'];


	//enables soft deleting
	use SoftDeletes;
	protected $dates = ['deleted_at'];

}
