<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
   	{
		Model::unguard();

        // Add calls to Seeders here
	        	$this->call('UsersTableSeeder');
	    	$this->call('MenusTableSeeder');
		$this->call('OumsTableSeeder');
		$this->call('CompanyTypesTableSeeder');
		$this->call('CountriesTableSeeder');
		$this->call('ProvincesTableSeeder');
		$this->call('CompaniesTableSeeder');
		$this->call('ProductTypesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('AddressesTableSeeder');
		// $this->call('SaleordersTableSeeder');
		$this->call('PurchaseordersTableSeeder');
		$this->call('MProductsTableSeeder');
		$this->call('SellPricesTableSeeder');
	}

}
