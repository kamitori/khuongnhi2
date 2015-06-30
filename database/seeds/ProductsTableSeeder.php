<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
class ProductsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
        		foreach(range(1, 50) as $index)
		{
			$sku = '';
			for($i=0; $i< $faker->numberBetween(2,4); $i++){
				$sku.= $faker->randomLetter;
			}
			for($i=0; $i< $faker->numberBetween(2,4); $i++){
				$sku.= $faker->numberBetween(0,9);
			}
			$name = $faker->name;
			$oum_id = $faker->numberBetween(1,12);
			$product_type = $faker->numberBetween(1,2);
			$specification = $faker->numberBetween(1,20);
			$in_stock = $faker->numberBetween(0,0);
			$origin_price = $faker->numberBetween(10,500)*1000;
			$invest = $in_stock*$origin_price*$specification;
			$status = 1;
			$check_in_stock = 0;
			Product::create([
				'sku'=>strtoupper($sku),
				'name'=>$name,
				'product_type'=>$product_type,
				'check_in_stock'=>$check_in_stock,
				'status'=>$status
			]);
		}
	}

}
