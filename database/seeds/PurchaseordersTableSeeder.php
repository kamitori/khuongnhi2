<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Purchaseorder;
class PurchaseordersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
        		foreach(range(1, 30) as $index)
		{
			$company_id = $faker->numberBetween(1,20);
			$date = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
			$address_id = $index+20;
			$company_phone = $faker->phoneNumber;
			$company_email = $faker->companyEmail;
			Purchaseorder::create([
							'company_id'		=> $company_id,
							'date'			=> $date,
							'address_id'		=> $address_id,
							'company_phone'	=> $company_phone,
							'company_email'	=> $company_email,
							'status'			=> 1
						]);
		}
	}

}
