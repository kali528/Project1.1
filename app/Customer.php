<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model

{
	protected $table = 'customers';

	public function address()
	{
		$this->hasMany('App\address');
	} 

    public function getCustomers()
    {
    	$customers = Customer::select('eik', 'bulstad', 'name', 'mol', 'address_id', 'email', 'phone')->get();
    	
    	return $customers;
    }

}
