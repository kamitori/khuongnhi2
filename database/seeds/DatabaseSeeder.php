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
		$this->call('ProductTypesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('CompaniesTableSeeder');
		$this->call('AddressesTableSeeder');
		// $this->call('PurchaseordersTableSeeder');
		// $this->call('SaleordersTableSeeder');
		// $this->call('ReturnPurchaseordersTableSeeder');
		// $this->call('ReturnSaleordersTableSeeder');
		$this->call('MProductsTableSeeder');
		$this->call('SellPricesTableSeeder');
		//$this->call('PaidsTableSeeder');
		
		$this->call('PdfTemplatesTableSeeder');
	}

}
