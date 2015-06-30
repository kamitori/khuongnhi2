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
		$arr_mproduct_po = array();
        		foreach(range(1, 30) as $po)
		{
			foreach(range(3, 6) as $index){
				$module_type = 'App\Purchaseorder';
				$module_id = $po;
				$product_id = $faker->numberBetween(1,50);
				$m_product_id = 0;
				$p_order= Purchaseorder::find($module_id);
				$company_id = $p_order->company_id;
				$oum_id = $faker->numberBetween(1,12);
				$origin_price = $faker->numberBetween(10,300)*1000;
				$specification  = $faker->numberBetween(1,20);
				$quantity = $faker->numberBetween(4,20)*10;
				$invest = $origin_price * $quantity * $specification;

				MProduct::create([
							"module_type"	=>	$module_type,
							"module_id"		=>	$module_id,
							"product_id"		=>	$product_id,
							"m_product_id"	=>	$m_product_id,
							"company_id"		=>	$company_id,
							"oum_id"		=>	$oum_id,
							"origin_price"		=>	$origin_price,
							"specification"		=>	$specification,
							"quantity"		=>	$quantity,
							"invest"		=>	$invest,
						]);
				
					$product_stock = new ProductStock;
					if($p_order->status){
						$product_stock->in_stock = $quantity*$specification;
					}
					$product_stock->product_id = $product_id;
					$product_stock->m_product_id = $key;
					$product_stock->save();
					$product = Product::find($product_id);
					$product->check_in_stock = 1;
					$product->save();
				$arr_mproduct_po[] = $key;
				$key++;
			}
		}

		foreach(range(1, 30) as $po)
		{
			foreach(range(3, 6) as $index){
				$module_type = 'App\Saleorder';
				$module_id = $po;
				$product_id = $faker->numberBetween(1,50);
				$m_product_id = $faker->randomElement($array = $arr_mproduct_po);
				$p_order= Saleorder::find($module_id);
				$company_id = $p_order->company_id;
				$oum_id = $faker->numberBetween(1,12);
				$sell_price = $faker->numberBetween(10,300)*1000*20/100;
				$specification  = $faker->numberBetween(1,10);
				$quantity = $faker->numberBetween(1,3)*10;
				$amount = $sell_price * $quantity * $specification;

				MProduct::create([
							"module_type"	=>	$module_type,
							"module_id"		=>	$module_id,
							"product_id"		=>	$product_id,
							"m_product_id"	=>	$m_product_id,
							"company_id"		=>	$company_id,
							"oum_id"		=>	$oum_id,
							"sell_price"		=>	$sell_price,
							"specification"		=>	$specification,
							"quantity"		=>	$quantity,
							"amount"		=>	$amount,
						]);
				
					$product_stock = ProductStock::where('m_product_id','=',$m_product_id)->get()->first();
					if($p_order->status){
						$product_stock->in_stock -= $quantity*$specification;
					}
					$product_stock->save();
				$arr_mproduct_so[] = $key;
				$key++;
			}
		}
	}

}
