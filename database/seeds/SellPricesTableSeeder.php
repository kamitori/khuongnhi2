<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Http\Controllers\Controller;
use App\Product;
use App\MProduct;
use App\ProductStock;
use App\Company;
use App\Oum;
use App\SellPrice;
use App\ProductType;
use App\Purchaseorder;
use App\ReturnPurchaseorder;
use App\ReturnSaleorder;
use Illuminate\Http\Request;


class SellPricesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		$count_mproduct = MProduct::where('module_type','=','App\Purchaseorder')->count();
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

		DB::unprepared("
			
				UPDATE `khuongnhi`.`purchaseorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`invest`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\Purchaseorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.status = 1;
			
				UPDATE `khuongnhi`.`return_purchaseorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`invest`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\ReturnPurchaseorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.status = 1;
			
				UPDATE `khuongnhi`.`saleorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`amount`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\Saleorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.status = 1;
			
			
				UPDATE `khuongnhi`.`return_saleorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`amount`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\ReturnSaleorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.status = 1;
			
		");
        
	}

}
