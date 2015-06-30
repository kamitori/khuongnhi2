<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Company;
class CompaniesTableSeeder extends Seeder {

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
			$name = $faker->name;
			$company_type_id = $faker->numberBetween(1,4);
			$phone = $faker->phoneNumber;
			$fax = $faker->phoneNumber;
			$email = $faker->freeEmail;
			$web = $faker->domainName;
			$check = $faker->numberBetween(1,3);
			$is_distribute = 0;
			$is_customer = 0;
			if($check==1){
				$is_distribute =1;
			}
			if($check==3){
				$is_customer =1;
			}
			if($check==2){
				$is_customer =1;
				$is_distribute =1;
			}
			Company::create([
				'name' => $name,
				'company_type_id' => $company_type_id,
				'phone' => $phone,
				'fax' => $fax,
				'address_id' => $index,
				'email' => $email,
				'web' => $web,
				'is_customer' => $is_customer,
				'is_distribute' => $is_distribute
			]);
		}
	}

}
