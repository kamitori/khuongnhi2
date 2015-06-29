<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\MProduct;
use App\Product;
use App\ProductStock;
use App\Purchaseorder;
use App\Saleorder;
use App\SellPrice;
class MProductsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		$key=1;
        		foreach(range(1, 30) as $po)
		{
			foreach(range(3, 10) as $index){
				$module_type = 'App\Purchaseorder';
				$module_id = $po;
				$product_id = $faker->numberBetween(1,50);
				$p_order= Purchaseorder::find($module_id);
				$company_id = $p_order->company_id;
				$oum_id = $faker->numberBetween(1,12);
				$origin_price = $faker->numberBetween(10,300)*1000;
				$specification  = $faker->numberBetween(1,20);
				$quantity = $faker->numberBetween(2,20)*10;
				$invest = $origin_price * $quantity * $specification;

				MProduct::create([
							"module_type"		=>	$module_type,
							"module_id"		=>	$module_id,
							"product_id"		=>	$product_id,
							"company_id"		=>	$company_id,
							"oum_id"		=>	$oum_id,
							"origin_price"		=>	$origin_price,
							"specification"		=>	$specification,
							"quantity"		=>	$quantity,
							"invest"			=>	$invest,
						]);
				
					$product = new ProductStock;
					if($p_order->status){
						$product->in_stock = $quantity*$specification;
					}
					$product->product_id = $product_id;
					$product->m_product_id = $key;
					$product->save();
				$key++;
			}
		}
	}

}
