<?php
use Faker\Factory as Faker;
use App\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
        		foreach(range(1, 20) as $index)
		{
			$address = $faker->streetAddress;
			$zip_postcode = $faker->postcode;
			$town_city = $faker->city;
			$country_id=$faker->numberBetween(1,2);
			if($country_id==1){
				$province_id = $faker->numberBetween(1,63);
			}
			if($country_id==2){
				$province_id = $faker->numberBetween(64,76);
			}
			$module_id = $index;
			$module_type = 'App\Company';
			Address::create([
				'address'		=>	$address,
				'zip_postcode'		=>	$zip_postcode,
				'town_city'		=>	$town_city,
				'country_id'		=>	$country_id,
				'province_id'		=>	$province_id,
				'module_id'		=>	$module_id,
				'module_type'	=>	$module_type,
			]);
		}
        		

        		foreach(range(1, 30) as $index)
		{
			$address = $faker->streetAddress;
			$zip_postcode = $faker->postcode;
			$town_city = $faker->city;
			$country_id=$faker->numberBetween(1,2);
			if($country_id==1){
				$province_id = $faker->numberBetween(1,63);
			}
			if($country_id==2){
				$province_id = $faker->numberBetween(64,76);
			}
			$module_id = $index;
			$module_type = 'App\Purchaseorder';
			Address::create([
				'address'		=>	$address,
				'zip_postcode'		=>	$zip_postcode,
				'town_city'		=>	$town_city,
				'country_id'		=>	$country_id,
				'province_id'		=>	$province_id,
				'module_id'		=>	$module_id,
				'module_type'	=>	$module_type,
			]);
		}

		foreach(range(1, 30) as $index)
		{
			$address = $faker->streetAddress;
			$zip_postcode = $faker->postcode;
			$town_city = $faker->city;
			$country_id=$faker->numberBetween(1,2);
			if($country_id==1){
				$province_id = $faker->numberBetween(1,63);
			}
			if($country_id==2){
				$province_id = $faker->numberBetween(64,76);
			}
			$module_id = $index;
			$module_type = 'App\Saleorder';
			Address::create([
				'address'		=>	$address,
				'zip_postcode'		=>	$zip_postcode,
				'town_city'		=>	$town_city,
				'country_id'		=>	$country_id,
				'province_id'		=>	$province_id,
				'module_id'		=>	$module_id,
				'module_type'	=>	$module_type,
			]);
		}
	}

}
