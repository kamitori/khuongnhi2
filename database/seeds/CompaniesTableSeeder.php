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
			Company::create([
				'name' => $name,
				'company_type_id' => $company_type_id,
				'phone' => $phone,
				'fax' => $fax,
				'email' => $email,
				'web' => $web,
				'is_distribute' => 1
			]);
		}
	}

}
