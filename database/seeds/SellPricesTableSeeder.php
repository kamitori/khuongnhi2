<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\SellPrice;
use App\Product;
use App\MProduct;
class SellPricesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		$count_mproduct = MProduct::count();
        		foreach(range(1, $count_mproduct) as $index)
		{
			for($i=0; $i< $faker->numberBetween(3,6); $i++){
				$mproduct = MProduct::find($index);
				$name = $faker->name.' '.$i;
				$price = $mproduct->origin_price + ($mproduct->origin_price*$faker->numberBetween(5,50)/100);
				SellPrice::create([
					'name'=>$name,
					'price'=>$price,
					'product_id'=>$mproduct->product_id,
					'm_product_id'=>$mproduct->id
				]);
			}

		}
        
	}

}
