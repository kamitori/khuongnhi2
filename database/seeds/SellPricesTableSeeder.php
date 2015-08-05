<?php

use Illuminate\Database\Seeder;

class SellPricesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('sell_prices')->delete();
        
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Giá NPP',
				'price' => 61000,
				'product_id' => 1,
				'm_product_id' => 1,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 2,
				'm_product_id' => 2,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Giá Đại lý',
				'price' => 76000,
				'product_id' => 2,
				'm_product_id' => 2,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 2,
				'm_product_id' => 2,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 3,
				'm_product_id' => 3,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 3,
				'm_product_id' => 3,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Giá Shop',
				'price' => 83000,
				'product_id' => 3,
				'm_product_id' => 3,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 4,
				'm_product_id' => 4,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Giá Đại lý',
				'price' => 73000,
				'product_id' => 4,
				'm_product_id' => 4,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 4,
				'm_product_id' => 4,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'Giá NPP',
				'price' => 72000,
				'product_id' => 5,
				'm_product_id' => 5,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			11 => 
			array (
				'id' => 12,
				'name' => 'Giá Đại lý',
				'price' => 74000,
				'product_id' => 5,
				'm_product_id' => 5,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			12 => 
			array (
				'id' => 13,
				'name' => 'Giá Shop',
				'price' => 76000,
				'product_id' => 5,
				'm_product_id' => 5,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			13 => 
			array (
				'id' => 14,
				'name' => 'Giá NPP',
				'price' => 97000,
				'product_id' => 6,
				'm_product_id' => 6,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			14 => 
			array (
				'id' => 15,
				'name' => 'Giá Đại lý',
				'price' => 102000,
				'product_id' => 6,
				'm_product_id' => 6,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			15 => 
			array (
				'id' => 16,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 7,
				'm_product_id' => 7,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			16 => 
			array (
				'id' => 17,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 7,
				'm_product_id' => 7,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			17 => 
			array (
				'id' => 18,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 7,
				'm_product_id' => 7,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			18 => 
			array (
				'id' => 19,
				'name' => 'Giá NPP',
				'price' => 39000,
				'product_id' => 8,
				'm_product_id' => 8,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			19 => 
			array (
				'id' => 20,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 8,
				'm_product_id' => 8,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			20 => 
			array (
				'id' => 21,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 8,
				'm_product_id' => 8,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			21 => 
			array (
				'id' => 22,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 9,
				'm_product_id' => 9,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			22 => 
			array (
				'id' => 23,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 9,
				'm_product_id' => 9,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			23 => 
			array (
				'id' => 24,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 9,
				'm_product_id' => 9,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			24 => 
			array (
				'id' => 25,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 10,
				'm_product_id' => 10,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			25 => 
			array (
				'id' => 26,
				'name' => 'Giá Đại lý',
				'price' => 26000,
				'product_id' => 10,
				'm_product_id' => 10,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			26 => 
			array (
				'id' => 27,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 10,
				'm_product_id' => 10,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			27 => 
			array (
				'id' => 28,
				'name' => 'Giá NPP',
				'price' => 5500,
				'product_id' => 11,
				'm_product_id' => 11,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			28 => 
			array (
				'id' => 29,
				'name' => 'Giá Đại lý',
				'price' => 6000,
				'product_id' => 11,
				'm_product_id' => 11,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			29 => 
			array (
				'id' => 30,
				'name' => 'Giá Shop',
				'price' => 7000,
				'product_id' => 11,
				'm_product_id' => 11,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			30 => 
			array (
				'id' => 31,
				'name' => 'Giá NPP',
				'price' => 51000,
				'product_id' => 12,
				'm_product_id' => 12,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			31 => 
			array (
				'id' => 32,
				'name' => 'Giá NPP',
				'price' => 36000,
				'product_id' => 13,
				'm_product_id' => 13,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			32 => 
			array (
				'id' => 33,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 14,
				'm_product_id' => 14,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			33 => 
			array (
				'id' => 34,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 14,
				'm_product_id' => 14,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			34 => 
			array (
				'id' => 35,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 14,
				'm_product_id' => 14,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			35 => 
			array (
				'id' => 36,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 15,
				'm_product_id' => 15,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			36 => 
			array (
				'id' => 37,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 15,
				'm_product_id' => 15,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			37 => 
			array (
				'id' => 38,
				'name' => 'Giá Shop',
				'price' => 53000,
				'product_id' => 15,
				'm_product_id' => 15,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			38 => 
			array (
				'id' => 39,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 16,
				'm_product_id' => 16,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			39 => 
			array (
				'id' => 40,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 17,
				'm_product_id' => 17,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			40 => 
			array (
				'id' => 41,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 17,
				'm_product_id' => 17,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			41 => 
			array (
				'id' => 42,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 17,
				'm_product_id' => 17,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			42 => 
			array (
				'id' => 43,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 18,
				'm_product_id' => 18,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			43 => 
			array (
				'id' => 44,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 19,
				'm_product_id' => 19,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			44 => 
			array (
				'id' => 45,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 19,
				'm_product_id' => 19,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			45 => 
			array (
				'id' => 46,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 19,
				'm_product_id' => 19,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			46 => 
			array (
				'id' => 47,
				'name' => 'Giá NPP',
				'price' => 64000,
				'product_id' => 20,
				'm_product_id' => 20,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			47 => 
			array (
				'id' => 48,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 20,
				'm_product_id' => 20,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			48 => 
			array (
				'id' => 49,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 20,
				'm_product_id' => 20,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			49 => 
			array (
				'id' => 50,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 21,
				'm_product_id' => 21,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			50 => 
			array (
				'id' => 51,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 21,
				'm_product_id' => 21,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			51 => 
			array (
				'id' => 52,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 21,
				'm_product_id' => 21,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			52 => 
			array (
				'id' => 53,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 22,
				'm_product_id' => 22,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			53 => 
			array (
				'id' => 54,
				'name' => 'Giá Đại lý',
				'price' => 29000,
				'product_id' => 22,
				'm_product_id' => 22,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			54 => 
			array (
				'id' => 55,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 22,
				'm_product_id' => 22,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			55 => 
			array (
				'id' => 56,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 23,
				'm_product_id' => 23,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			56 => 
			array (
				'id' => 57,
				'name' => 'Giá Đại lý',
				'price' => 28000,
				'product_id' => 23,
				'm_product_id' => 23,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			57 => 
			array (
				'id' => 58,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 23,
				'm_product_id' => 23,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			58 => 
			array (
				'id' => 59,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 24,
				'm_product_id' => 24,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			59 => 
			array (
				'id' => 60,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 24,
				'm_product_id' => 24,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			60 => 
			array (
				'id' => 61,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 24,
				'm_product_id' => 24,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			61 => 
			array (
				'id' => 62,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 25,
				'm_product_id' => 25,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			62 => 
			array (
				'id' => 63,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 25,
				'm_product_id' => 25,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			63 => 
			array (
				'id' => 64,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 25,
				'm_product_id' => 25,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			64 => 
			array (
				'id' => 65,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 25,
				'm_product_id' => 25,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			65 => 
			array (
				'id' => 66,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 26,
				'm_product_id' => 26,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			66 => 
			array (
				'id' => 67,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 26,
				'm_product_id' => 26,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			67 => 
			array (
				'id' => 68,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 26,
				'm_product_id' => 26,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			68 => 
			array (
				'id' => 69,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 26,
				'm_product_id' => 26,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			69 => 
			array (
				'id' => 70,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 27,
				'm_product_id' => 27,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			70 => 
			array (
				'id' => 71,
				'name' => 'Giá Đại lý',
				'price' => 47000,
				'product_id' => 27,
				'm_product_id' => 27,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			71 => 
			array (
				'id' => 72,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 27,
				'm_product_id' => 27,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			72 => 
			array (
				'id' => 73,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 28,
				'm_product_id' => 28,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			73 => 
			array (
				'id' => 74,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 28,
				'm_product_id' => 28,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			74 => 
			array (
				'id' => 75,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 28,
				'm_product_id' => 28,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			75 => 
			array (
				'id' => 76,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 29,
				'm_product_id' => 29,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			76 => 
			array (
				'id' => 77,
				'name' => 'Giá Đại lý',
				'price' => 47000,
				'product_id' => 29,
				'm_product_id' => 29,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			77 => 
			array (
				'id' => 78,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 29,
				'm_product_id' => 29,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			78 => 
			array (
				'id' => 79,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 30,
				'm_product_id' => 30,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			79 => 
			array (
				'id' => 80,
				'name' => 'Giá NPP',
				'price' => 6500,
				'product_id' => 31,
				'm_product_id' => 31,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			80 => 
			array (
				'id' => 81,
				'name' => 'Giá Đại lý',
				'price' => 7000,
				'product_id' => 31,
				'm_product_id' => 31,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			81 => 
			array (
				'id' => 82,
				'name' => 'Giá Shop',
				'price' => 7500,
				'product_id' => 31,
				'm_product_id' => 31,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			82 => 
			array (
				'id' => 83,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 32,
				'm_product_id' => 32,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			83 => 
			array (
				'id' => 84,
				'name' => 'Giá Đại lý',
				'price' => 42000,
				'product_id' => 32,
				'm_product_id' => 32,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			84 => 
			array (
				'id' => 85,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 32,
				'm_product_id' => 32,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			85 => 
			array (
				'id' => 86,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 32,
				'm_product_id' => 32,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			86 => 
			array (
				'id' => 87,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 33,
				'm_product_id' => 33,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			87 => 
			array (
				'id' => 88,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 33,
				'm_product_id' => 33,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			88 => 
			array (
				'id' => 89,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 33,
				'm_product_id' => 33,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			89 => 
			array (
				'id' => 90,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 33,
				'm_product_id' => 33,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			90 => 
			array (
				'id' => 91,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 34,
				'm_product_id' => 34,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			91 => 
			array (
				'id' => 92,
				'name' => 'Giá Đại lý',
				'price' => 54000,
				'product_id' => 34,
				'm_product_id' => 34,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			92 => 
			array (
				'id' => 93,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 34,
				'm_product_id' => 34,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			93 => 
			array (
				'id' => 94,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 34,
				'm_product_id' => 34,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			94 => 
			array (
				'id' => 95,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 35,
				'm_product_id' => 35,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			95 => 
			array (
				'id' => 96,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 35,
				'm_product_id' => 35,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			96 => 
			array (
				'id' => 97,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 35,
				'm_product_id' => 35,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			97 => 
			array (
				'id' => 98,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 35,
				'm_product_id' => 35,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			98 => 
			array (
				'id' => 99,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 36,
				'm_product_id' => 36,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			99 => 
			array (
				'id' => 100,
				'name' => 'Giá Đại lý',
				'price' => 32000,
				'product_id' => 36,
				'm_product_id' => 36,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			100 => 
			array (
				'id' => 101,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 36,
				'm_product_id' => 36,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			101 => 
			array (
				'id' => 102,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 36,
				'm_product_id' => 36,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			102 => 
			array (
				'id' => 103,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 37,
				'm_product_id' => 37,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			103 => 
			array (
				'id' => 104,
				'name' => 'Giá Đại lý',
				'price' => 32000,
				'product_id' => 37,
				'm_product_id' => 37,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			104 => 
			array (
				'id' => 105,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 37,
				'm_product_id' => 37,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			105 => 
			array (
				'id' => 106,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 37,
				'm_product_id' => 37,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			106 => 
			array (
				'id' => 107,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 38,
				'm_product_id' => 38,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			107 => 
			array (
				'id' => 108,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 38,
				'm_product_id' => 38,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			108 => 
			array (
				'id' => 109,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 38,
				'm_product_id' => 38,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			109 => 
			array (
				'id' => 110,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 38,
				'm_product_id' => 38,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			110 => 
			array (
				'id' => 111,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 39,
				'm_product_id' => 39,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			111 => 
			array (
				'id' => 112,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 39,
				'm_product_id' => 39,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			112 => 
			array (
				'id' => 113,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 39,
				'm_product_id' => 39,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			113 => 
			array (
				'id' => 114,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 39,
				'm_product_id' => 39,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			114 => 
			array (
				'id' => 115,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 40,
				'm_product_id' => 40,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			115 => 
			array (
				'id' => 116,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 40,
				'm_product_id' => 40,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			116 => 
			array (
				'id' => 117,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 40,
				'm_product_id' => 40,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			117 => 
			array (
				'id' => 118,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 40,
				'm_product_id' => 40,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			118 => 
			array (
				'id' => 119,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 41,
				'm_product_id' => 41,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			119 => 
			array (
				'id' => 120,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 41,
				'm_product_id' => 41,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			120 => 
			array (
				'id' => 121,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 41,
				'm_product_id' => 41,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			121 => 
			array (
				'id' => 122,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 41,
				'm_product_id' => 41,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			122 => 
			array (
				'id' => 123,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 42,
				'm_product_id' => 42,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			123 => 
			array (
				'id' => 124,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 42,
				'm_product_id' => 42,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			124 => 
			array (
				'id' => 125,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 42,
				'm_product_id' => 42,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			125 => 
			array (
				'id' => 126,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 42,
				'm_product_id' => 42,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			126 => 
			array (
				'id' => 127,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 43,
				'm_product_id' => 43,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			127 => 
			array (
				'id' => 128,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 43,
				'm_product_id' => 43,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			128 => 
			array (
				'id' => 129,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 43,
				'm_product_id' => 43,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			129 => 
			array (
				'id' => 130,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 43,
				'm_product_id' => 43,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			130 => 
			array (
				'id' => 131,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 44,
				'm_product_id' => 44,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			131 => 
			array (
				'id' => 132,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 44,
				'm_product_id' => 44,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			132 => 
			array (
				'id' => 133,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 44,
				'm_product_id' => 44,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			133 => 
			array (
				'id' => 134,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 44,
				'm_product_id' => 44,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			134 => 
			array (
				'id' => 135,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 45,
				'm_product_id' => 45,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			135 => 
			array (
				'id' => 136,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 45,
				'm_product_id' => 45,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			136 => 
			array (
				'id' => 137,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 45,
				'm_product_id' => 45,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			137 => 
			array (
				'id' => 138,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 45,
				'm_product_id' => 45,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			138 => 
			array (
				'id' => 139,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 46,
				'm_product_id' => 46,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			139 => 
			array (
				'id' => 140,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 46,
				'm_product_id' => 46,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			140 => 
			array (
				'id' => 141,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 46,
				'm_product_id' => 46,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			141 => 
			array (
				'id' => 142,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 46,
				'm_product_id' => 46,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			142 => 
			array (
				'id' => 143,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 47,
				'm_product_id' => 47,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			143 => 
			array (
				'id' => 144,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 47,
				'm_product_id' => 47,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			144 => 
			array (
				'id' => 145,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 47,
				'm_product_id' => 47,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			145 => 
			array (
				'id' => 146,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 47,
				'm_product_id' => 47,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			146 => 
			array (
				'id' => 147,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 48,
				'm_product_id' => 48,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			147 => 
			array (
				'id' => 148,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 48,
				'm_product_id' => 48,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			148 => 
			array (
				'id' => 149,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 48,
				'm_product_id' => 48,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			149 => 
			array (
				'id' => 150,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 48,
				'm_product_id' => 48,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			150 => 
			array (
				'id' => 151,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 49,
				'm_product_id' => 49,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			151 => 
			array (
				'id' => 152,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 49,
				'm_product_id' => 49,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			152 => 
			array (
				'id' => 153,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 49,
				'm_product_id' => 49,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			153 => 
			array (
				'id' => 154,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 49,
				'm_product_id' => 49,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			154 => 
			array (
				'id' => 155,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 50,
				'm_product_id' => 50,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			155 => 
			array (
				'id' => 156,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 50,
				'm_product_id' => 50,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			156 => 
			array (
				'id' => 157,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 50,
				'm_product_id' => 50,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			157 => 
			array (
				'id' => 158,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 50,
				'm_product_id' => 50,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			158 => 
			array (
				'id' => 159,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 51,
				'm_product_id' => 51,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			159 => 
			array (
				'id' => 160,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 51,
				'm_product_id' => 51,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			160 => 
			array (
				'id' => 161,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 51,
				'm_product_id' => 51,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			161 => 
			array (
				'id' => 162,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 51,
				'm_product_id' => 51,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			162 => 
			array (
				'id' => 163,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 52,
				'm_product_id' => 52,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			163 => 
			array (
				'id' => 164,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 52,
				'm_product_id' => 52,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			164 => 
			array (
				'id' => 165,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 52,
				'm_product_id' => 52,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			165 => 
			array (
				'id' => 166,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 52,
				'm_product_id' => 52,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			166 => 
			array (
				'id' => 167,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 53,
				'm_product_id' => 53,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			167 => 
			array (
				'id' => 168,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 53,
				'm_product_id' => 53,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			168 => 
			array (
				'id' => 169,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 53,
				'm_product_id' => 53,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			169 => 
			array (
				'id' => 170,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 53,
				'm_product_id' => 53,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			170 => 
			array (
				'id' => 171,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 54,
				'm_product_id' => 54,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			171 => 
			array (
				'id' => 172,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 54,
				'm_product_id' => 54,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			172 => 
			array (
				'id' => 173,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 54,
				'm_product_id' => 54,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			173 => 
			array (
				'id' => 174,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 54,
				'm_product_id' => 54,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			174 => 
			array (
				'id' => 175,
				'name' => 'Giá NPP',
				'price' => 122000,
				'product_id' => 55,
				'm_product_id' => 55,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			175 => 
			array (
				'id' => 176,
				'name' => 'Giá Đại lý',
				'price' => 125000,
				'product_id' => 55,
				'm_product_id' => 55,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			176 => 
			array (
				'id' => 177,
				'name' => 'Giá Shop',
				'price' => 128000,
				'product_id' => 55,
				'm_product_id' => 55,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			177 => 
			array (
				'id' => 178,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 56,
				'm_product_id' => 56,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			178 => 
			array (
				'id' => 179,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 56,
				'm_product_id' => 56,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			179 => 
			array (
				'id' => 180,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 56,
				'm_product_id' => 56,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			180 => 
			array (
				'id' => 181,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 56,
				'm_product_id' => 56,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			181 => 
			array (
				'id' => 182,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 57,
				'm_product_id' => 57,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			182 => 
			array (
				'id' => 183,
				'name' => 'Giá Đại lý',
				'price' => 30500,
				'product_id' => 57,
				'm_product_id' => 57,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			183 => 
			array (
				'id' => 184,
				'name' => 'Giá Shop',
				'price' => 31000,
				'product_id' => 57,
				'm_product_id' => 57,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			184 => 
			array (
				'id' => 185,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 57,
				'm_product_id' => 57,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			185 => 
			array (
				'id' => 186,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 58,
				'm_product_id' => 58,
				'created_at' => '2015-08-05 08:54:32',
				'updated_at' => '2015-08-05 08:54:32',
			),
			186 => 
			array (
				'id' => 187,
				'name' => 'Giá Đại lý',
				'price' => 26500,
				'product_id' => 58,
				'm_product_id' => 58,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			187 => 
			array (
				'id' => 188,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 58,
				'm_product_id' => 58,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			188 => 
			array (
				'id' => 189,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 58,
				'm_product_id' => 58,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			189 => 
			array (
				'id' => 190,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 59,
				'm_product_id' => 59,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			190 => 
			array (
				'id' => 191,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 59,
				'm_product_id' => 59,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			191 => 
			array (
				'id' => 192,
				'name' => 'Giá Shop',
				'price' => 265000,
				'product_id' => 59,
				'm_product_id' => 59,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			192 => 
			array (
				'id' => 193,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 60,
				'm_product_id' => 60,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			193 => 
			array (
				'id' => 194,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 60,
				'm_product_id' => 60,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			194 => 
			array (
				'id' => 195,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 60,
				'm_product_id' => 60,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			195 => 
			array (
				'id' => 196,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 61,
				'm_product_id' => 61,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			196 => 
			array (
				'id' => 197,
				'name' => 'Giá Đại lý',
				'price' => 28000,
				'product_id' => 61,
				'm_product_id' => 61,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			197 => 
			array (
				'id' => 198,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 61,
				'm_product_id' => 61,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			198 => 
			array (
				'id' => 199,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 62,
				'm_product_id' => 62,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			199 => 
			array (
				'id' => 200,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 62,
				'm_product_id' => 62,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			200 => 
			array (
				'id' => 201,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 62,
				'm_product_id' => 62,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			201 => 
			array (
				'id' => 202,
				'name' => 'Giá NPP',
				'price' => 22500,
				'product_id' => 63,
				'm_product_id' => 63,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			202 => 
			array (
				'id' => 203,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 63,
				'm_product_id' => 63,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			203 => 
			array (
				'id' => 204,
				'name' => 'Giá Shop',
				'price' => 23500,
				'product_id' => 63,
				'm_product_id' => 63,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			204 => 
			array (
				'id' => 205,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 63,
				'm_product_id' => 63,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			205 => 
			array (
				'id' => 206,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 64,
				'm_product_id' => 64,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			206 => 
			array (
				'id' => 207,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 64,
				'm_product_id' => 64,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			207 => 
			array (
				'id' => 208,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 64,
				'm_product_id' => 64,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			208 => 
			array (
				'id' => 209,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 64,
				'm_product_id' => 64,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			209 => 
			array (
				'id' => 210,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 65,
				'm_product_id' => 65,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			210 => 
			array (
				'id' => 211,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 65,
				'm_product_id' => 65,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			211 => 
			array (
				'id' => 212,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 65,
				'm_product_id' => 65,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			212 => 
			array (
				'id' => 213,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 65,
				'm_product_id' => 65,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			213 => 
			array (
				'id' => 214,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 66,
				'm_product_id' => 66,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			214 => 
			array (
				'id' => 215,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 66,
				'm_product_id' => 66,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			215 => 
			array (
				'id' => 216,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 66,
				'm_product_id' => 66,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			216 => 
			array (
				'id' => 217,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 66,
				'm_product_id' => 66,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			217 => 
			array (
				'id' => 218,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 67,
				'm_product_id' => 67,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			218 => 
			array (
				'id' => 219,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 67,
				'm_product_id' => 67,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			219 => 
			array (
				'id' => 220,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 67,
				'm_product_id' => 67,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			220 => 
			array (
				'id' => 221,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 67,
				'm_product_id' => 67,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			221 => 
			array (
				'id' => 222,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 68,
				'm_product_id' => 68,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			222 => 
			array (
				'id' => 223,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 68,
				'm_product_id' => 68,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			223 => 
			array (
				'id' => 224,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 68,
				'm_product_id' => 68,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			224 => 
			array (
				'id' => 225,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 68,
				'm_product_id' => 68,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			225 => 
			array (
				'id' => 226,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 69,
				'm_product_id' => 69,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			226 => 
			array (
				'id' => 227,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 69,
				'm_product_id' => 69,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			227 => 
			array (
				'id' => 228,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 69,
				'm_product_id' => 69,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			228 => 
			array (
				'id' => 229,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 69,
				'm_product_id' => 69,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			229 => 
			array (
				'id' => 230,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 70,
				'm_product_id' => 70,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			230 => 
			array (
				'id' => 231,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 70,
				'm_product_id' => 70,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			231 => 
			array (
				'id' => 232,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 70,
				'm_product_id' => 70,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			232 => 
			array (
				'id' => 233,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 70,
				'm_product_id' => 70,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			233 => 
			array (
				'id' => 234,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 71,
				'm_product_id' => 71,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			234 => 
			array (
				'id' => 235,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 71,
				'm_product_id' => 71,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			235 => 
			array (
				'id' => 236,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 71,
				'm_product_id' => 71,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			236 => 
			array (
				'id' => 237,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 71,
				'm_product_id' => 71,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			237 => 
			array (
				'id' => 238,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 72,
				'm_product_id' => 72,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			238 => 
			array (
				'id' => 239,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 72,
				'm_product_id' => 72,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			239 => 
			array (
				'id' => 240,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 72,
				'm_product_id' => 72,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			240 => 
			array (
				'id' => 241,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 72,
				'm_product_id' => 72,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			241 => 
			array (
				'id' => 242,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 73,
				'm_product_id' => 73,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			242 => 
			array (
				'id' => 243,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 73,
				'm_product_id' => 73,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			243 => 
			array (
				'id' => 244,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 73,
				'm_product_id' => 73,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			244 => 
			array (
				'id' => 245,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 73,
				'm_product_id' => 73,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			245 => 
			array (
				'id' => 246,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 74,
				'm_product_id' => 74,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			246 => 
			array (
				'id' => 247,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 74,
				'm_product_id' => 74,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			247 => 
			array (
				'id' => 248,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 74,
				'm_product_id' => 74,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			248 => 
			array (
				'id' => 249,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 74,
				'm_product_id' => 74,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			249 => 
			array (
				'id' => 250,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 75,
				'm_product_id' => 75,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			250 => 
			array (
				'id' => 251,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 75,
				'm_product_id' => 75,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			251 => 
			array (
				'id' => 252,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 75,
				'm_product_id' => 75,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			252 => 
			array (
				'id' => 253,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 75,
				'm_product_id' => 75,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			253 => 
			array (
				'id' => 254,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 76,
				'm_product_id' => 76,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			254 => 
			array (
				'id' => 255,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 76,
				'm_product_id' => 76,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			255 => 
			array (
				'id' => 256,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 76,
				'm_product_id' => 76,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			256 => 
			array (
				'id' => 257,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 76,
				'm_product_id' => 76,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			257 => 
			array (
				'id' => 258,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 77,
				'm_product_id' => 77,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			258 => 
			array (
				'id' => 259,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 77,
				'm_product_id' => 77,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			259 => 
			array (
				'id' => 260,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 77,
				'm_product_id' => 77,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			260 => 
			array (
				'id' => 261,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 77,
				'm_product_id' => 77,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			261 => 
			array (
				'id' => 262,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 78,
				'm_product_id' => 78,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			262 => 
			array (
				'id' => 263,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 78,
				'm_product_id' => 78,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			263 => 
			array (
				'id' => 264,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 78,
				'm_product_id' => 78,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			264 => 
			array (
				'id' => 265,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 78,
				'm_product_id' => 78,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			265 => 
			array (
				'id' => 266,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 79,
				'm_product_id' => 79,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			266 => 
			array (
				'id' => 267,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 79,
				'm_product_id' => 79,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			267 => 
			array (
				'id' => 268,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 79,
				'm_product_id' => 79,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			268 => 
			array (
				'id' => 269,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 79,
				'm_product_id' => 79,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			269 => 
			array (
				'id' => 270,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 80,
				'm_product_id' => 80,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			270 => 
			array (
				'id' => 271,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 80,
				'm_product_id' => 80,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			271 => 
			array (
				'id' => 272,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 80,
				'm_product_id' => 80,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			272 => 
			array (
				'id' => 273,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 80,
				'm_product_id' => 80,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			273 => 
			array (
				'id' => 274,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 81,
				'm_product_id' => 81,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			274 => 
			array (
				'id' => 275,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 81,
				'm_product_id' => 81,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			275 => 
			array (
				'id' => 276,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 81,
				'm_product_id' => 81,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			276 => 
			array (
				'id' => 277,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 81,
				'm_product_id' => 81,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			277 => 
			array (
				'id' => 278,
				'name' => 'Giá NPP',
				'price' => 7000,
				'product_id' => 82,
				'm_product_id' => 82,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			278 => 
			array (
				'id' => 279,
				'name' => 'Giá Đại lý',
				'price' => 7500,
				'product_id' => 82,
				'm_product_id' => 82,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			279 => 
			array (
				'id' => 280,
				'name' => 'Giá Shop',
				'price' => 8000,
				'product_id' => 82,
				'm_product_id' => 82,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			280 => 
			array (
				'id' => 281,
				'name' => 'Giá Bán lẻ',
				'price' => 13000,
				'product_id' => 82,
				'm_product_id' => 82,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			281 => 
			array (
				'id' => 282,
				'name' => 'Giá NPP',
				'price' => 8000,
				'product_id' => 83,
				'm_product_id' => 83,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			282 => 
			array (
				'id' => 283,
				'name' => 'Giá Đại lý',
				'price' => 8500,
				'product_id' => 83,
				'm_product_id' => 83,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			283 => 
			array (
				'id' => 284,
				'name' => 'Giá Shop',
				'price' => 9000,
				'product_id' => 83,
				'm_product_id' => 83,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			284 => 
			array (
				'id' => 285,
				'name' => 'Giá Bán lẻ',
				'price' => 14000,
				'product_id' => 83,
				'm_product_id' => 83,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			285 => 
			array (
				'id' => 286,
				'name' => 'Giá NPP',
				'price' => 9000,
				'product_id' => 84,
				'm_product_id' => 84,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			286 => 
			array (
				'id' => 287,
				'name' => 'Giá Đại lý',
				'price' => 9500,
				'product_id' => 84,
				'm_product_id' => 84,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			287 => 
			array (
				'id' => 288,
				'name' => 'Giá Shop',
				'price' => 10000,
				'product_id' => 84,
				'm_product_id' => 84,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			288 => 
			array (
				'id' => 289,
				'name' => 'Giá Bán lẻ',
				'price' => 15000,
				'product_id' => 84,
				'm_product_id' => 84,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			289 => 
			array (
				'id' => 290,
				'name' => 'Giá NPP',
				'price' => 10000,
				'product_id' => 85,
				'm_product_id' => 85,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			290 => 
			array (
				'id' => 291,
				'name' => 'Giá Đại lý',
				'price' => 10500,
				'product_id' => 85,
				'm_product_id' => 85,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			291 => 
			array (
				'id' => 292,
				'name' => 'Giá Shop',
				'price' => 11000,
				'product_id' => 85,
				'm_product_id' => 85,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			292 => 
			array (
				'id' => 293,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 85,
				'm_product_id' => 85,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			293 => 
			array (
				'id' => 294,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 86,
				'm_product_id' => 86,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			294 => 
			array (
				'id' => 295,
				'name' => 'Giá Đại lý',
				'price' => 11500,
				'product_id' => 86,
				'm_product_id' => 86,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			295 => 
			array (
				'id' => 296,
				'name' => 'Giá Shop',
				'price' => 12000,
				'product_id' => 86,
				'm_product_id' => 86,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			296 => 
			array (
				'id' => 297,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 86,
				'm_product_id' => 86,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			297 => 
			array (
				'id' => 298,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 87,
				'm_product_id' => 87,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			298 => 
			array (
				'id' => 299,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 87,
				'm_product_id' => 87,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			299 => 
			array (
				'id' => 300,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 87,
				'm_product_id' => 87,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			300 => 
			array (
				'id' => 301,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 87,
				'm_product_id' => 87,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			301 => 
			array (
				'id' => 302,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 88,
				'm_product_id' => 88,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			302 => 
			array (
				'id' => 303,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 88,
				'm_product_id' => 88,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			303 => 
			array (
				'id' => 304,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 88,
				'm_product_id' => 88,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			304 => 
			array (
				'id' => 305,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 88,
				'm_product_id' => 88,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			305 => 
			array (
				'id' => 306,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 89,
				'm_product_id' => 89,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			306 => 
			array (
				'id' => 307,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 89,
				'm_product_id' => 89,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			307 => 
			array (
				'id' => 308,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 89,
				'm_product_id' => 89,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			308 => 
			array (
				'id' => 309,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 89,
				'm_product_id' => 89,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			309 => 
			array (
				'id' => 310,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 90,
				'm_product_id' => 90,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			310 => 
			array (
				'id' => 311,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 90,
				'm_product_id' => 90,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			311 => 
			array (
				'id' => 312,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 90,
				'm_product_id' => 90,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			312 => 
			array (
				'id' => 313,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 90,
				'm_product_id' => 90,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			313 => 
			array (
				'id' => 314,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 91,
				'm_product_id' => 91,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			314 => 
			array (
				'id' => 315,
				'name' => 'Giá Đại lý',
				'price' => 26000,
				'product_id' => 91,
				'm_product_id' => 91,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			315 => 
			array (
				'id' => 316,
				'name' => 'Giá Shop',
				'price' => 26500,
				'product_id' => 91,
				'm_product_id' => 91,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			316 => 
			array (
				'id' => 317,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 91,
				'm_product_id' => 91,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			317 => 
			array (
				'id' => 318,
				'name' => 'Giá NPP',
				'price' => 51000,
				'product_id' => 92,
				'm_product_id' => 92,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			318 => 
			array (
				'id' => 319,
				'name' => 'Giá Đại lý',
				'price' => 53000,
				'product_id' => 92,
				'm_product_id' => 92,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			319 => 
			array (
				'id' => 320,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 92,
				'm_product_id' => 92,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			320 => 
			array (
				'id' => 321,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 93,
				'm_product_id' => 93,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			321 => 
			array (
				'id' => 322,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 93,
				'm_product_id' => 93,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			322 => 
			array (
				'id' => 323,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 93,
				'm_product_id' => 93,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			323 => 
			array (
				'id' => 324,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 93,
				'm_product_id' => 93,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			324 => 
			array (
				'id' => 325,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 94,
				'm_product_id' => 94,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			325 => 
			array (
				'id' => 326,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 94,
				'm_product_id' => 94,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			326 => 
			array (
				'id' => 327,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 94,
				'm_product_id' => 94,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			327 => 
			array (
				'id' => 328,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 94,
				'm_product_id' => 94,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			328 => 
			array (
				'id' => 329,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 95,
				'm_product_id' => 95,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			329 => 
			array (
				'id' => 330,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 95,
				'm_product_id' => 95,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			330 => 
			array (
				'id' => 331,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 95,
				'm_product_id' => 95,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			331 => 
			array (
				'id' => 332,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 95,
				'm_product_id' => 95,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			332 => 
			array (
				'id' => 333,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 96,
				'm_product_id' => 96,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			333 => 
			array (
				'id' => 334,
				'name' => 'Giá Đại lý',
				'price' => 73000,
				'product_id' => 96,
				'm_product_id' => 96,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			334 => 
			array (
				'id' => 335,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 96,
				'm_product_id' => 96,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			335 => 
			array (
				'id' => 336,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 97,
				'm_product_id' => 97,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			336 => 
			array (
				'id' => 337,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 97,
				'm_product_id' => 97,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			337 => 
			array (
				'id' => 338,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 97,
				'm_product_id' => 97,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			338 => 
			array (
				'id' => 339,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 97,
				'm_product_id' => 97,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			339 => 
			array (
				'id' => 340,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 98,
				'm_product_id' => 98,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			340 => 
			array (
				'id' => 341,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 98,
				'm_product_id' => 98,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			341 => 
			array (
				'id' => 342,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 98,
				'm_product_id' => 98,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			342 => 
			array (
				'id' => 343,
				'name' => 'Giá Bán lẻ',
				'price' => 31000,
				'product_id' => 98,
				'm_product_id' => 98,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			343 => 
			array (
				'id' => 344,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 99,
				'm_product_id' => 99,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			344 => 
			array (
				'id' => 345,
				'name' => 'Giá NPP',
				'price' => 47000,
				'product_id' => 100,
				'm_product_id' => 100,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			345 => 
			array (
				'id' => 346,
				'name' => 'Giá NPP',
				'price' => 36000,
				'product_id' => 101,
				'm_product_id' => 101,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			346 => 
			array (
				'id' => 347,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 102,
				'm_product_id' => 102,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			347 => 
			array (
				'id' => 348,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 103,
				'm_product_id' => 103,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			348 => 
			array (
				'id' => 349,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 103,
				'm_product_id' => 103,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			349 => 
			array (
				'id' => 350,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 103,
				'm_product_id' => 103,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			350 => 
			array (
				'id' => 351,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 103,
				'm_product_id' => 103,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			351 => 
			array (
				'id' => 352,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 104,
				'm_product_id' => 104,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			352 => 
			array (
				'id' => 353,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 105,
				'm_product_id' => 105,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			353 => 
			array (
				'id' => 354,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 106,
				'm_product_id' => 106,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			354 => 
			array (
				'id' => 355,
				'name' => 'Giá NPP',
				'price' => 23500,
				'product_id' => 107,
				'm_product_id' => 107,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			355 => 
			array (
				'id' => 356,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 107,
				'm_product_id' => 107,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			356 => 
			array (
				'id' => 357,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 107,
				'm_product_id' => 107,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			357 => 
			array (
				'id' => 358,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 107,
				'm_product_id' => 107,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			358 => 
			array (
				'id' => 359,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 108,
				'm_product_id' => 108,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			359 => 
			array (
				'id' => 360,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 109,
				'm_product_id' => 109,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			360 => 
			array (
				'id' => 361,
				'name' => 'Giá NPP',
				'price' => 84000,
				'product_id' => 110,
				'm_product_id' => 110,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			361 => 
			array (
				'id' => 362,
				'name' => 'Giá NPP',
				'price' => 140000,
				'product_id' => 111,
				'm_product_id' => 111,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			362 => 
			array (
				'id' => 363,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 112,
				'm_product_id' => 112,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			363 => 
			array (
				'id' => 364,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 113,
				'm_product_id' => 113,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			364 => 
			array (
				'id' => 365,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 113,
				'm_product_id' => 113,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			365 => 
			array (
				'id' => 366,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 113,
				'm_product_id' => 113,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			366 => 
			array (
				'id' => 367,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 114,
				'm_product_id' => 114,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			367 => 
			array (
				'id' => 368,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 115,
				'm_product_id' => 115,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			368 => 
			array (
				'id' => 369,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 116,
				'm_product_id' => 116,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			369 => 
			array (
				'id' => 370,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 116,
				'm_product_id' => 116,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			370 => 
			array (
				'id' => 371,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 116,
				'm_product_id' => 116,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			371 => 
			array (
				'id' => 372,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 116,
				'm_product_id' => 116,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			372 => 
			array (
				'id' => 373,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 117,
				'm_product_id' => 117,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			373 => 
			array (
				'id' => 374,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 117,
				'm_product_id' => 117,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			374 => 
			array (
				'id' => 375,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 117,
				'm_product_id' => 117,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			375 => 
			array (
				'id' => 376,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 118,
				'm_product_id' => 118,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			376 => 
			array (
				'id' => 377,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 119,
				'm_product_id' => 119,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			377 => 
			array (
				'id' => 378,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 119,
				'm_product_id' => 119,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			378 => 
			array (
				'id' => 379,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 119,
				'm_product_id' => 119,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			379 => 
			array (
				'id' => 380,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 120,
				'm_product_id' => 120,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			380 => 
			array (
				'id' => 381,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 121,
				'm_product_id' => 121,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			381 => 
			array (
				'id' => 382,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 121,
				'm_product_id' => 121,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			382 => 
			array (
				'id' => 383,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 121,
				'm_product_id' => 121,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			383 => 
			array (
				'id' => 384,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 121,
				'm_product_id' => 121,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			384 => 
			array (
				'id' => 385,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 122,
				'm_product_id' => 122,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			385 => 
			array (
				'id' => 386,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 123,
				'm_product_id' => 123,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			386 => 
			array (
				'id' => 387,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 123,
				'm_product_id' => 123,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			387 => 
			array (
				'id' => 388,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 123,
				'm_product_id' => 123,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			388 => 
			array (
				'id' => 389,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 123,
				'm_product_id' => 123,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			389 => 
			array (
				'id' => 390,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 124,
				'm_product_id' => 124,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			390 => 
			array (
				'id' => 391,
				'name' => 'Giá Đại lý',
				'price' => 24000,
				'product_id' => 124,
				'm_product_id' => 124,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			391 => 
			array (
				'id' => 392,
				'name' => 'Giá Shop',
				'price' => 24500,
				'product_id' => 124,
				'm_product_id' => 124,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			392 => 
			array (
				'id' => 393,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 124,
				'm_product_id' => 124,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			393 => 
			array (
				'id' => 394,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 125,
				'm_product_id' => 125,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			394 => 
			array (
				'id' => 395,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 125,
				'm_product_id' => 125,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			395 => 
			array (
				'id' => 396,
				'name' => 'Giá Shop',
				'price' => 22500,
				'product_id' => 125,
				'm_product_id' => 125,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			396 => 
			array (
				'id' => 397,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 125,
				'm_product_id' => 125,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			397 => 
			array (
				'id' => 398,
				'name' => 'Giá NPP',
				'price' => 31500,
				'product_id' => 126,
				'm_product_id' => 126,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			398 => 
			array (
				'id' => 399,
				'name' => 'Giá Đại lý',
				'price' => 32500,
				'product_id' => 126,
				'm_product_id' => 126,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			399 => 
			array (
				'id' => 400,
				'name' => 'Giá Shop',
				'price' => 33000,
				'product_id' => 126,
				'm_product_id' => 126,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			400 => 
			array (
				'id' => 401,
				'name' => 'Giá Bán lẻ',
				'price' => 40000,
				'product_id' => 126,
				'm_product_id' => 126,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			401 => 
			array (
				'id' => 402,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 127,
				'm_product_id' => 127,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			402 => 
			array (
				'id' => 403,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 127,
				'm_product_id' => 127,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			403 => 
			array (
				'id' => 404,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 127,
				'm_product_id' => 127,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			404 => 
			array (
				'id' => 405,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 127,
				'm_product_id' => 127,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			405 => 
			array (
				'id' => 406,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 128,
				'm_product_id' => 128,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			406 => 
			array (
				'id' => 407,
				'name' => 'Giá Đại lý',
				'price' => 98000,
				'product_id' => 128,
				'm_product_id' => 128,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			407 => 
			array (
				'id' => 408,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 129,
				'm_product_id' => 129,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			408 => 
			array (
				'id' => 409,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 129,
				'm_product_id' => 129,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			409 => 
			array (
				'id' => 410,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 129,
				'm_product_id' => 129,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			410 => 
			array (
				'id' => 411,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 129,
				'm_product_id' => 129,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			411 => 
			array (
				'id' => 412,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 130,
				'm_product_id' => 130,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			412 => 
			array (
				'id' => 413,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 130,
				'm_product_id' => 130,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			413 => 
			array (
				'id' => 414,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 130,
				'm_product_id' => 130,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			414 => 
			array (
				'id' => 415,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 130,
				'm_product_id' => 130,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			415 => 
			array (
				'id' => 416,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 131,
				'm_product_id' => 131,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			416 => 
			array (
				'id' => 417,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 132,
				'm_product_id' => 132,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			417 => 
			array (
				'id' => 418,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 133,
				'm_product_id' => 133,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			418 => 
			array (
				'id' => 419,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 133,
				'm_product_id' => 133,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			419 => 
			array (
				'id' => 420,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 133,
				'm_product_id' => 133,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			420 => 
			array (
				'id' => 421,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 134,
				'm_product_id' => 134,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			421 => 
			array (
				'id' => 422,
				'name' => 'Giá NPP',
				'price' => 69000,
				'product_id' => 135,
				'm_product_id' => 135,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			422 => 
			array (
				'id' => 423,
				'name' => 'Giá Đại lý',
				'price' => 71000,
				'product_id' => 135,
				'm_product_id' => 135,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			423 => 
			array (
				'id' => 424,
				'name' => 'Giá Shop',
				'price' => 73000,
				'product_id' => 135,
				'm_product_id' => 135,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			424 => 
			array (
				'id' => 425,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 136,
				'm_product_id' => 136,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			425 => 
			array (
				'id' => 426,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 136,
				'm_product_id' => 136,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			426 => 
			array (
				'id' => 427,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 136,
				'm_product_id' => 136,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			427 => 
			array (
				'id' => 428,
				'name' => 'Giá NPP',
				'price' => 64000,
				'product_id' => 137,
				'm_product_id' => 137,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			428 => 
			array (
				'id' => 429,
				'name' => 'Giá NPP',
				'price' => 59000,
				'product_id' => 138,
				'm_product_id' => 138,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			429 => 
			array (
				'id' => 430,
				'name' => 'Giá Đại lý',
				'price' => 61000,
				'product_id' => 138,
				'm_product_id' => 138,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			430 => 
			array (
				'id' => 431,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 138,
				'm_product_id' => 138,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			431 => 
			array (
				'id' => 432,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 139,
				'm_product_id' => 139,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			432 => 
			array (
				'id' => 433,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 140,
				'm_product_id' => 140,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			433 => 
			array (
				'id' => 434,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 141,
				'm_product_id' => 141,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			434 => 
			array (
				'id' => 435,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 142,
				'm_product_id' => 142,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			435 => 
			array (
				'id' => 436,
				'name' => 'Giá Đại lý',
				'price' => 47000,
				'product_id' => 142,
				'm_product_id' => 142,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			436 => 
			array (
				'id' => 437,
				'name' => 'Giá Shop',
				'price' => 49000,
				'product_id' => 142,
				'm_product_id' => 142,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			437 => 
			array (
				'id' => 438,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 143,
				'm_product_id' => 143,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			438 => 
			array (
				'id' => 439,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 143,
				'm_product_id' => 143,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			439 => 
			array (
				'id' => 440,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 143,
				'm_product_id' => 143,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			440 => 
			array (
				'id' => 441,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 143,
				'm_product_id' => 143,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			441 => 
			array (
				'id' => 442,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 144,
				'm_product_id' => 144,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			442 => 
			array (
				'id' => 443,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 145,
				'm_product_id' => 145,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			443 => 
			array (
				'id' => 444,
				'name' => 'Giá Đại lý',
				'price' => 46000,
				'product_id' => 145,
				'm_product_id' => 145,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			444 => 
			array (
				'id' => 445,
				'name' => 'Giá NPP',
				'price' => 94000,
				'product_id' => 146,
				'm_product_id' => 146,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			445 => 
			array (
				'id' => 446,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 147,
				'm_product_id' => 147,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			446 => 
			array (
				'id' => 447,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 147,
				'm_product_id' => 147,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			447 => 
			array (
				'id' => 448,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 147,
				'm_product_id' => 147,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			448 => 
			array (
				'id' => 449,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 148,
				'm_product_id' => 148,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			449 => 
			array (
				'id' => 450,
				'name' => 'Giá Đại lý',
				'price' => 25500,
				'product_id' => 148,
				'm_product_id' => 148,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			450 => 
			array (
				'id' => 451,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 148,
				'm_product_id' => 148,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			451 => 
			array (
				'id' => 452,
				'name' => 'Giá Bán lẻ',
				'price' => 33000,
				'product_id' => 148,
				'm_product_id' => 148,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			452 => 
			array (
				'id' => 453,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 149,
				'm_product_id' => 149,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			453 => 
			array (
				'id' => 454,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 149,
				'm_product_id' => 149,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			454 => 
			array (
				'id' => 455,
				'name' => 'Giá Shop',
				'price' => 25500,
				'product_id' => 149,
				'm_product_id' => 149,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			455 => 
			array (
				'id' => 456,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 149,
				'm_product_id' => 149,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			456 => 
			array (
				'id' => 457,
				'name' => 'Giá NPP',
				'price' => 10000,
				'product_id' => 150,
				'm_product_id' => 150,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			457 => 
			array (
				'id' => 458,
				'name' => 'Giá Đại lý',
				'price' => 11000,
				'product_id' => 150,
				'm_product_id' => 150,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			458 => 
			array (
				'id' => 459,
				'name' => 'Giá Shop',
				'price' => 11500,
				'product_id' => 150,
				'm_product_id' => 150,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			459 => 
			array (
				'id' => 460,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 150,
				'm_product_id' => 150,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			460 => 
			array (
				'id' => 461,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 151,
				'm_product_id' => 151,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			461 => 
			array (
				'id' => 462,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 152,
				'm_product_id' => 152,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			462 => 
			array (
				'id' => 463,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 153,
				'm_product_id' => 153,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			463 => 
			array (
				'id' => 464,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 154,
				'm_product_id' => 154,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			464 => 
			array (
				'id' => 465,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 154,
				'm_product_id' => 154,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			465 => 
			array (
				'id' => 466,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 154,
				'm_product_id' => 154,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			466 => 
			array (
				'id' => 467,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 154,
				'm_product_id' => 154,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			467 => 
			array (
				'id' => 468,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 155,
				'm_product_id' => 155,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			468 => 
			array (
				'id' => 469,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 155,
				'm_product_id' => 155,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			469 => 
			array (
				'id' => 470,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 155,
				'm_product_id' => 155,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			470 => 
			array (
				'id' => 471,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 156,
				'm_product_id' => 156,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			471 => 
			array (
				'id' => 472,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 156,
				'm_product_id' => 156,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			472 => 
			array (
				'id' => 473,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 156,
				'm_product_id' => 156,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			473 => 
			array (
				'id' => 474,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 156,
				'm_product_id' => 156,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			474 => 
			array (
				'id' => 475,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 157,
				'm_product_id' => 157,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			475 => 
			array (
				'id' => 476,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 158,
				'm_product_id' => 158,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			476 => 
			array (
				'id' => 477,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 159,
				'm_product_id' => 159,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			477 => 
			array (
				'id' => 478,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 160,
				'm_product_id' => 160,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			478 => 
			array (
				'id' => 479,
				'name' => 'Giá Đại lý',
				'price' => 97000,
				'product_id' => 160,
				'm_product_id' => 160,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			479 => 
			array (
				'id' => 480,
				'name' => 'Giá Shop',
				'price' => 100000,
				'product_id' => 160,
				'm_product_id' => 160,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			480 => 
			array (
				'id' => 481,
				'name' => 'Giá NPP',
				'price' => 89000,
				'product_id' => 161,
				'm_product_id' => 161,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			481 => 
			array (
				'id' => 482,
				'name' => 'Giá NPP',
				'price' => 83000,
				'product_id' => 162,
				'm_product_id' => 162,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			482 => 
			array (
				'id' => 483,
				'name' => 'Giá NPP',
				'price' => 91000,
				'product_id' => 163,
				'm_product_id' => 163,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			483 => 
			array (
				'id' => 484,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 164,
				'm_product_id' => 164,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			484 => 
			array (
				'id' => 485,
				'name' => 'Giá Đại lý',
				'price' => 88000,
				'product_id' => 164,
				'm_product_id' => 164,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			485 => 
			array (
				'id' => 486,
				'name' => 'Giá NPP',
				'price' => 91000,
				'product_id' => 165,
				'm_product_id' => 165,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			486 => 
			array (
				'id' => 487,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 166,
				'm_product_id' => 166,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			487 => 
			array (
				'id' => 488,
				'name' => 'Giá NPP',
				'price' => 110000,
				'product_id' => 167,
				'm_product_id' => 167,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			488 => 
			array (
				'id' => 489,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 168,
				'm_product_id' => 168,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			489 => 
			array (
				'id' => 490,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 168,
				'm_product_id' => 168,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			490 => 
			array (
				'id' => 491,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 168,
				'm_product_id' => 168,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			491 => 
			array (
				'id' => 492,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 168,
				'm_product_id' => 168,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			492 => 
			array (
				'id' => 493,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 169,
				'm_product_id' => 169,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			493 => 
			array (
				'id' => 494,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 169,
				'm_product_id' => 169,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			494 => 
			array (
				'id' => 495,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 169,
				'm_product_id' => 169,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			495 => 
			array (
				'id' => 496,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 169,
				'm_product_id' => 169,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			496 => 
			array (
				'id' => 497,
				'name' => 'Giá NPP',
				'price' => 12500,
				'product_id' => 170,
				'm_product_id' => 170,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			497 => 
			array (
				'id' => 498,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 170,
				'm_product_id' => 170,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			498 => 
			array (
				'id' => 499,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 170,
				'm_product_id' => 170,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			499 => 
			array (
				'id' => 500,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 170,
				'm_product_id' => 170,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 501,
				'name' => 'Giá NPP',
				'price' => 27500,
				'product_id' => 171,
				'm_product_id' => 171,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			1 => 
			array (
				'id' => 502,
				'name' => 'Giá Đại lý',
				'price' => 28500,
				'product_id' => 171,
				'm_product_id' => 171,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			2 => 
			array (
				'id' => 503,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 171,
				'm_product_id' => 171,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			3 => 
			array (
				'id' => 504,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 171,
				'm_product_id' => 171,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			4 => 
			array (
				'id' => 505,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 172,
				'm_product_id' => 172,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			5 => 
			array (
				'id' => 506,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 172,
				'm_product_id' => 172,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			6 => 
			array (
				'id' => 507,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 172,
				'm_product_id' => 172,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			7 => 
			array (
				'id' => 508,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 172,
				'm_product_id' => 172,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			8 => 
			array (
				'id' => 509,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 173,
				'm_product_id' => 173,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			9 => 
			array (
				'id' => 510,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 174,
				'm_product_id' => 174,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			10 => 
			array (
				'id' => 511,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 174,
				'm_product_id' => 174,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			11 => 
			array (
				'id' => 512,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 174,
				'm_product_id' => 174,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			12 => 
			array (
				'id' => 513,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 174,
				'm_product_id' => 174,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			13 => 
			array (
				'id' => 514,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 175,
				'm_product_id' => 175,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			14 => 
			array (
				'id' => 515,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 175,
				'm_product_id' => 175,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			15 => 
			array (
				'id' => 516,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 175,
				'm_product_id' => 175,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			16 => 
			array (
				'id' => 517,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 175,
				'm_product_id' => 175,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			17 => 
			array (
				'id' => 518,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 176,
				'm_product_id' => 176,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			18 => 
			array (
				'id' => 519,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 177,
				'm_product_id' => 177,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			19 => 
			array (
				'id' => 520,
				'name' => 'Giá Đại lý',
				'price' => 76000,
				'product_id' => 177,
				'm_product_id' => 177,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			20 => 
			array (
				'id' => 521,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 177,
				'm_product_id' => 177,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			21 => 
			array (
				'id' => 522,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 178,
				'm_product_id' => 178,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			22 => 
			array (
				'id' => 523,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 179,
				'm_product_id' => 179,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			23 => 
			array (
				'id' => 524,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 179,
				'm_product_id' => 179,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			24 => 
			array (
				'id' => 525,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 179,
				'm_product_id' => 179,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			25 => 
			array (
				'id' => 526,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 180,
				'm_product_id' => 180,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			26 => 
			array (
				'id' => 527,
				'name' => 'Giá Đại lý',
				'price' => 26500,
				'product_id' => 180,
				'm_product_id' => 180,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			27 => 
			array (
				'id' => 528,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 180,
				'm_product_id' => 180,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			28 => 
			array (
				'id' => 529,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 180,
				'm_product_id' => 180,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			29 => 
			array (
				'id' => 530,
				'name' => 'Giá NPP',
				'price' => 8500,
				'product_id' => 181,
				'm_product_id' => 181,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			30 => 
			array (
				'id' => 531,
				'name' => 'Giá Đại lý',
				'price' => 8500,
				'product_id' => 181,
				'm_product_id' => 181,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			31 => 
			array (
				'id' => 532,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 182,
				'm_product_id' => 182,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			32 => 
			array (
				'id' => 533,
				'name' => 'Giá NPP',
				'price' => 29500,
				'product_id' => 183,
				'm_product_id' => 183,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			33 => 
			array (
				'id' => 534,
				'name' => 'Giá Đại lý',
				'price' => 30500,
				'product_id' => 183,
				'm_product_id' => 183,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			34 => 
			array (
				'id' => 535,
				'name' => 'Giá Shop',
				'price' => 31000,
				'product_id' => 183,
				'm_product_id' => 183,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			35 => 
			array (
				'id' => 536,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 183,
				'm_product_id' => 183,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			36 => 
			array (
				'id' => 537,
				'name' => 'Giá NPP',
				'price' => 25500,
				'product_id' => 184,
				'm_product_id' => 184,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			37 => 
			array (
				'id' => 538,
				'name' => 'Giá Đại lý',
				'price' => 26500,
				'product_id' => 184,
				'm_product_id' => 184,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			38 => 
			array (
				'id' => 539,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 184,
				'm_product_id' => 184,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			39 => 
			array (
				'id' => 540,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 184,
				'm_product_id' => 184,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			40 => 
			array (
				'id' => 541,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 185,
				'm_product_id' => 185,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			41 => 
			array (
				'id' => 542,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 185,
				'm_product_id' => 185,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			42 => 
			array (
				'id' => 543,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 185,
				'm_product_id' => 185,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			43 => 
			array (
				'id' => 544,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 186,
				'm_product_id' => 186,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			44 => 
			array (
				'id' => 545,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 186,
				'm_product_id' => 186,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			45 => 
			array (
				'id' => 546,
				'name' => 'Giá Shop',
				'price' => 265000,
				'product_id' => 186,
				'm_product_id' => 186,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			46 => 
			array (
				'id' => 547,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 187,
				'm_product_id' => 187,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			47 => 
			array (
				'id' => 548,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 188,
				'm_product_id' => 188,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			48 => 
			array (
				'id' => 549,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 188,
				'm_product_id' => 188,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			49 => 
			array (
				'id' => 550,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 188,
				'm_product_id' => 188,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			50 => 
			array (
				'id' => 551,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 188,
				'm_product_id' => 188,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			51 => 
			array (
				'id' => 552,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 189,
				'm_product_id' => 189,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			52 => 
			array (
				'id' => 553,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 189,
				'm_product_id' => 189,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			53 => 
			array (
				'id' => 554,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 189,
				'm_product_id' => 189,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			54 => 
			array (
				'id' => 555,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 189,
				'm_product_id' => 189,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			55 => 
			array (
				'id' => 556,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 190,
				'm_product_id' => 190,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			56 => 
			array (
				'id' => 557,
				'name' => 'Giá Đại lý',
				'price' => 29000,
				'product_id' => 190,
				'm_product_id' => 190,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			57 => 
			array (
				'id' => 558,
				'name' => 'Giá Shop',
				'price' => 29500,
				'product_id' => 190,
				'm_product_id' => 190,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			58 => 
			array (
				'id' => 559,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 190,
				'm_product_id' => 190,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			59 => 
			array (
				'id' => 560,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 191,
				'm_product_id' => 191,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			60 => 
			array (
				'id' => 561,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 191,
				'm_product_id' => 191,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			61 => 
			array (
				'id' => 562,
				'name' => 'Giá Shop',
				'price' => 265000,
				'product_id' => 191,
				'm_product_id' => 191,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			62 => 
			array (
				'id' => 563,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 192,
				'm_product_id' => 192,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			63 => 
			array (
				'id' => 564,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 192,
				'm_product_id' => 192,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			64 => 
			array (
				'id' => 565,
				'name' => 'Giá Shop',
				'price' => 27500,
				'product_id' => 192,
				'm_product_id' => 192,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			65 => 
			array (
				'id' => 566,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 192,
				'm_product_id' => 192,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			66 => 
			array (
				'id' => 567,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 193,
				'm_product_id' => 193,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			67 => 
			array (
				'id' => 568,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 193,
				'm_product_id' => 193,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			68 => 
			array (
				'id' => 569,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 193,
				'm_product_id' => 193,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			69 => 
			array (
				'id' => 570,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 193,
				'm_product_id' => 193,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			70 => 
			array (
				'id' => 571,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 194,
				'm_product_id' => 194,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			71 => 
			array (
				'id' => 572,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 194,
				'm_product_id' => 194,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			72 => 
			array (
				'id' => 573,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 194,
				'm_product_id' => 194,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			73 => 
			array (
				'id' => 574,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 194,
				'm_product_id' => 194,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			74 => 
			array (
				'id' => 575,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 195,
				'm_product_id' => 195,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			75 => 
			array (
				'id' => 576,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 195,
				'm_product_id' => 195,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			76 => 
			array (
				'id' => 577,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 195,
				'm_product_id' => 195,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			77 => 
			array (
				'id' => 578,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 195,
				'm_product_id' => 195,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			78 => 
			array (
				'id' => 579,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 196,
				'm_product_id' => 196,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			79 => 
			array (
				'id' => 580,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 197,
				'm_product_id' => 197,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			80 => 
			array (
				'id' => 581,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 197,
				'm_product_id' => 197,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			81 => 
			array (
				'id' => 582,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 197,
				'm_product_id' => 197,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			82 => 
			array (
				'id' => 583,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 197,
				'm_product_id' => 197,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			83 => 
			array (
				'id' => 584,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 198,
				'm_product_id' => 198,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			84 => 
			array (
				'id' => 585,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 198,
				'm_product_id' => 198,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			85 => 
			array (
				'id' => 586,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 199,
				'm_product_id' => 199,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			86 => 
			array (
				'id' => 587,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 200,
				'm_product_id' => 200,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			87 => 
			array (
				'id' => 588,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 200,
				'm_product_id' => 200,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			88 => 
			array (
				'id' => 589,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 200,
				'm_product_id' => 200,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			89 => 
			array (
				'id' => 590,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 200,
				'm_product_id' => 200,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			90 => 
			array (
				'id' => 591,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 201,
				'm_product_id' => 201,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			91 => 
			array (
				'id' => 592,
				'name' => 'Giá Đại lý',
				'price' => 13000,
				'product_id' => 201,
				'm_product_id' => 201,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			92 => 
			array (
				'id' => 593,
				'name' => 'Giá Shop',
				'price' => 13500,
				'product_id' => 201,
				'm_product_id' => 201,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			93 => 
			array (
				'id' => 594,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 201,
				'm_product_id' => 201,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			94 => 
			array (
				'id' => 595,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 202,
				'm_product_id' => 202,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			95 => 
			array (
				'id' => 596,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 203,
				'm_product_id' => 203,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			96 => 
			array (
				'id' => 597,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 204,
				'm_product_id' => 204,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			97 => 
			array (
				'id' => 598,
				'name' => 'Giá NPP',
				'price' => 7500,
				'product_id' => 205,
				'm_product_id' => 205,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			98 => 
			array (
				'id' => 599,
				'name' => 'Giá Đại lý',
				'price' => 8000,
				'product_id' => 205,
				'm_product_id' => 205,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			99 => 
			array (
				'id' => 600,
				'name' => 'Giá Shop',
				'price' => 8500,
				'product_id' => 205,
				'm_product_id' => 205,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			100 => 
			array (
				'id' => 601,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 206,
				'm_product_id' => 206,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			101 => 
			array (
				'id' => 602,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 206,
				'm_product_id' => 206,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			102 => 
			array (
				'id' => 603,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 206,
				'm_product_id' => 206,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			103 => 
			array (
				'id' => 604,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 206,
				'm_product_id' => 206,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			104 => 
			array (
				'id' => 605,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 207,
				'm_product_id' => 207,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			105 => 
			array (
				'id' => 606,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 207,
				'm_product_id' => 207,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			106 => 
			array (
				'id' => 607,
				'name' => 'Giá Shop',
				'price' => 265000,
				'product_id' => 207,
				'm_product_id' => 207,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			107 => 
			array (
				'id' => 608,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 208,
				'm_product_id' => 208,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			108 => 
			array (
				'id' => 609,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 208,
				'm_product_id' => 208,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			109 => 
			array (
				'id' => 610,
				'name' => 'Giá Shop',
				'price' => 265000,
				'product_id' => 208,
				'm_product_id' => 208,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			110 => 
			array (
				'id' => 611,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 209,
				'm_product_id' => 209,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			111 => 
			array (
				'id' => 612,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 209,
				'm_product_id' => 209,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			112 => 
			array (
				'id' => 613,
				'name' => 'Giá Shop',
				'price' => 265000,
				'product_id' => 209,
				'm_product_id' => 209,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			113 => 
			array (
				'id' => 614,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 210,
				'm_product_id' => 210,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			114 => 
			array (
				'id' => 615,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 210,
				'm_product_id' => 210,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			115 => 
			array (
				'id' => 616,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 210,
				'm_product_id' => 210,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			116 => 
			array (
				'id' => 617,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 210,
				'm_product_id' => 210,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			117 => 
			array (
				'id' => 618,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 211,
				'm_product_id' => 211,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			118 => 
			array (
				'id' => 619,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 211,
				'm_product_id' => 211,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			119 => 
			array (
				'id' => 620,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 211,
				'm_product_id' => 211,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			120 => 
			array (
				'id' => 621,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 211,
				'm_product_id' => 211,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			121 => 
			array (
				'id' => 622,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 212,
				'm_product_id' => 212,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			122 => 
			array (
				'id' => 623,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 213,
				'm_product_id' => 213,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			123 => 
			array (
				'id' => 624,
				'name' => 'Giá NPP',
				'price' => 91000,
				'product_id' => 214,
				'm_product_id' => 214,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			124 => 
			array (
				'id' => 625,
				'name' => 'Giá Đại lý',
				'price' => 93000,
				'product_id' => 214,
				'm_product_id' => 214,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			125 => 
			array (
				'id' => 626,
				'name' => 'Giá Shop',
				'price' => 95000,
				'product_id' => 214,
				'm_product_id' => 214,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			126 => 
			array (
				'id' => 627,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 214,
				'm_product_id' => 214,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			127 => 
			array (
				'id' => 628,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 215,
				'm_product_id' => 215,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			128 => 
			array (
				'id' => 629,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 215,
				'm_product_id' => 215,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			129 => 
			array (
				'id' => 630,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 215,
				'm_product_id' => 215,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			130 => 
			array (
				'id' => 631,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 215,
				'm_product_id' => 215,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			131 => 
			array (
				'id' => 632,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 216,
				'm_product_id' => 216,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			132 => 
			array (
				'id' => 633,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 216,
				'm_product_id' => 216,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			133 => 
			array (
				'id' => 634,
				'name' => 'Giá Shop',
				'price' => 54000,
				'product_id' => 216,
				'm_product_id' => 216,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			134 => 
			array (
				'id' => 635,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 217,
				'm_product_id' => 217,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			135 => 
			array (
				'id' => 636,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 217,
				'm_product_id' => 217,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			136 => 
			array (
				'id' => 637,
				'name' => 'Giá Shop',
				'price' => 23500,
				'product_id' => 217,
				'm_product_id' => 217,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			137 => 
			array (
				'id' => 638,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 217,
				'm_product_id' => 217,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			138 => 
			array (
				'id' => 639,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 218,
				'm_product_id' => 218,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			139 => 
			array (
				'id' => 640,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 218,
				'm_product_id' => 218,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			140 => 
			array (
				'id' => 641,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 218,
				'm_product_id' => 218,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			141 => 
			array (
				'id' => 642,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 219,
				'm_product_id' => 219,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			142 => 
			array (
				'id' => 643,
				'name' => 'Giá Đại lý',
				'price' => 26000,
				'product_id' => 219,
				'm_product_id' => 219,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			143 => 
			array (
				'id' => 644,
				'name' => 'Giá Shop',
				'price' => 26500,
				'product_id' => 219,
				'm_product_id' => 219,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			144 => 
			array (
				'id' => 645,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 219,
				'm_product_id' => 219,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			145 => 
			array (
				'id' => 646,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 220,
				'm_product_id' => 220,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			146 => 
			array (
				'id' => 647,
				'name' => 'Giá Đại lý',
				'price' => 28000,
				'product_id' => 220,
				'm_product_id' => 220,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			147 => 
			array (
				'id' => 648,
				'name' => 'Giá Shop',
				'price' => 28500,
				'product_id' => 220,
				'm_product_id' => 220,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			148 => 
			array (
				'id' => 649,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 220,
				'm_product_id' => 220,
				'created_at' => '2015-08-05 08:54:33',
				'updated_at' => '2015-08-05 08:54:33',
			),
			149 => 
			array (
				'id' => 650,
				'name' => 'Giá NPP',
				'price' => 29000,
				'product_id' => 221,
				'm_product_id' => 221,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			150 => 
			array (
				'id' => 651,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 221,
				'm_product_id' => 221,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			151 => 
			array (
				'id' => 652,
				'name' => 'Giá Shop',
				'price' => 30500,
				'product_id' => 221,
				'm_product_id' => 221,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			152 => 
			array (
				'id' => 653,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 221,
				'm_product_id' => 221,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			153 => 
			array (
				'id' => 654,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 222,
				'm_product_id' => 222,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			154 => 
			array (
				'id' => 655,
				'name' => 'Giá Đại lý',
				'price' => 32000,
				'product_id' => 222,
				'm_product_id' => 222,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			155 => 
			array (
				'id' => 656,
				'name' => 'Giá Shop',
				'price' => 32500,
				'product_id' => 222,
				'm_product_id' => 222,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			156 => 
			array (
				'id' => 657,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 222,
				'm_product_id' => 222,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			157 => 
			array (
				'id' => 658,
				'name' => 'Giá NPP',
				'price' => 33000,
				'product_id' => 223,
				'm_product_id' => 223,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			158 => 
			array (
				'id' => 659,
				'name' => 'Giá Đại lý',
				'price' => 34000,
				'product_id' => 223,
				'm_product_id' => 223,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			159 => 
			array (
				'id' => 660,
				'name' => 'Giá Shop',
				'price' => 34500,
				'product_id' => 223,
				'm_product_id' => 223,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			160 => 
			array (
				'id' => 661,
				'name' => 'Giá Bán lẻ',
				'price' => 40000,
				'product_id' => 223,
				'm_product_id' => 223,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			161 => 
			array (
				'id' => 662,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 224,
				'm_product_id' => 224,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			162 => 
			array (
				'id' => 663,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 224,
				'm_product_id' => 224,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			163 => 
			array (
				'id' => 664,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 224,
				'm_product_id' => 224,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			164 => 
			array (
				'id' => 665,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 225,
				'm_product_id' => 225,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			165 => 
			array (
				'id' => 666,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 225,
				'm_product_id' => 225,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			166 => 
			array (
				'id' => 667,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 225,
				'm_product_id' => 225,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			167 => 
			array (
				'id' => 668,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 225,
				'm_product_id' => 225,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			168 => 
			array (
				'id' => 669,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 226,
				'm_product_id' => 226,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			169 => 
			array (
				'id' => 670,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 226,
				'm_product_id' => 226,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			170 => 
			array (
				'id' => 671,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 226,
				'm_product_id' => 226,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			171 => 
			array (
				'id' => 672,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 226,
				'm_product_id' => 226,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			172 => 
			array (
				'id' => 673,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 227,
				'm_product_id' => 227,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			173 => 
			array (
				'id' => 674,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 227,
				'm_product_id' => 227,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			174 => 
			array (
				'id' => 675,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 227,
				'm_product_id' => 227,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			175 => 
			array (
				'id' => 676,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 227,
				'm_product_id' => 227,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			176 => 
			array (
				'id' => 677,
				'name' => 'Giá NPP',
				'price' => 27500,
				'product_id' => 228,
				'm_product_id' => 228,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			177 => 
			array (
				'id' => 678,
				'name' => 'Giá Đại lý',
				'price' => 28500,
				'product_id' => 228,
				'm_product_id' => 228,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			178 => 
			array (
				'id' => 679,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 228,
				'm_product_id' => 228,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			179 => 
			array (
				'id' => 680,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 228,
				'm_product_id' => 228,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			180 => 
			array (
				'id' => 681,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 229,
				'm_product_id' => 229,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			181 => 
			array (
				'id' => 682,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 229,
				'm_product_id' => 229,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			182 => 
			array (
				'id' => 683,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 229,
				'm_product_id' => 229,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			183 => 
			array (
				'id' => 684,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 229,
				'm_product_id' => 229,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			184 => 
			array (
				'id' => 685,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 230,
				'm_product_id' => 230,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			185 => 
			array (
				'id' => 686,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 231,
				'm_product_id' => 231,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			186 => 
			array (
				'id' => 687,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 232,
				'm_product_id' => 232,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			187 => 
			array (
				'id' => 688,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 233,
				'm_product_id' => 233,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			188 => 
			array (
				'id' => 689,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 233,
				'm_product_id' => 233,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			189 => 
			array (
				'id' => 690,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 233,
				'm_product_id' => 233,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			190 => 
			array (
				'id' => 691,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 234,
				'm_product_id' => 234,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			191 => 
			array (
				'id' => 692,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 235,
				'm_product_id' => 235,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			192 => 
			array (
				'id' => 693,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 236,
				'm_product_id' => 236,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			193 => 
			array (
				'id' => 694,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 237,
				'm_product_id' => 237,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			194 => 
			array (
				'id' => 695,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 238,
				'm_product_id' => 238,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			195 => 
			array (
				'id' => 696,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 239,
				'm_product_id' => 239,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			196 => 
			array (
				'id' => 697,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 240,
				'm_product_id' => 240,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			197 => 
			array (
				'id' => 698,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 241,
				'm_product_id' => 241,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			198 => 
			array (
				'id' => 699,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 242,
				'm_product_id' => 242,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			199 => 
			array (
				'id' => 700,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 242,
				'm_product_id' => 242,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			200 => 
			array (
				'id' => 701,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 242,
				'm_product_id' => 242,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			201 => 
			array (
				'id' => 702,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 242,
				'm_product_id' => 242,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			202 => 
			array (
				'id' => 703,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 243,
				'm_product_id' => 243,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			203 => 
			array (
				'id' => 704,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 244,
				'm_product_id' => 244,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			204 => 
			array (
				'id' => 705,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 245,
				'm_product_id' => 245,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			205 => 
			array (
				'id' => 706,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 245,
				'm_product_id' => 245,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			206 => 
			array (
				'id' => 707,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 245,
				'm_product_id' => 245,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			207 => 
			array (
				'id' => 708,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 246,
				'm_product_id' => 246,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			208 => 
			array (
				'id' => 709,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 247,
				'm_product_id' => 247,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			209 => 
			array (
				'id' => 710,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 248,
				'm_product_id' => 248,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			210 => 
			array (
				'id' => 711,
				'name' => 'Giá Đại lý',
				'price' => 31000,
				'product_id' => 248,
				'm_product_id' => 248,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			211 => 
			array (
				'id' => 712,
				'name' => 'Giá Shop',
				'price' => 31500,
				'product_id' => 248,
				'm_product_id' => 248,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			212 => 
			array (
				'id' => 713,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 248,
				'm_product_id' => 248,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			213 => 
			array (
				'id' => 714,
				'name' => 'Giá NPP',
				'price' => 180000,
				'product_id' => 249,
				'm_product_id' => 249,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			214 => 
			array (
				'id' => 715,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 250,
				'm_product_id' => 250,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			215 => 
			array (
				'id' => 716,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 250,
				'm_product_id' => 250,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			216 => 
			array (
				'id' => 717,
				'name' => 'Giá Shop',
				'price' => 23500,
				'product_id' => 250,
				'm_product_id' => 250,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			217 => 
			array (
				'id' => 718,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 250,
				'm_product_id' => 250,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			218 => 
			array (
				'id' => 719,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 251,
				'm_product_id' => 251,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			219 => 
			array (
				'id' => 720,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 251,
				'm_product_id' => 251,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			220 => 
			array (
				'id' => 721,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 251,
				'm_product_id' => 251,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			221 => 
			array (
				'id' => 722,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 251,
				'm_product_id' => 251,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			222 => 
			array (
				'id' => 723,
				'name' => 'Giá NPP',
				'price' => 110000,
				'product_id' => 252,
				'm_product_id' => 252,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			223 => 
			array (
				'id' => 724,
				'name' => 'Giá Đại lý',
				'price' => 112000,
				'product_id' => 252,
				'm_product_id' => 252,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			224 => 
			array (
				'id' => 725,
				'name' => 'Giá Shop',
				'price' => 114000,
				'product_id' => 252,
				'm_product_id' => 252,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			225 => 
			array (
				'id' => 726,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 252,
				'm_product_id' => 252,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			226 => 
			array (
				'id' => 727,
				'name' => 'Giá NPP',
				'price' => 21500,
				'product_id' => 253,
				'm_product_id' => 253,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			227 => 
			array (
				'id' => 728,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 253,
				'm_product_id' => 253,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			228 => 
			array (
				'id' => 729,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 253,
				'm_product_id' => 253,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			229 => 
			array (
				'id' => 730,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 253,
				'm_product_id' => 253,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			230 => 
			array (
				'id' => 731,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 254,
				'm_product_id' => 254,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			231 => 
			array (
				'id' => 732,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 254,
				'm_product_id' => 254,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			232 => 
			array (
				'id' => 733,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 254,
				'm_product_id' => 254,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			233 => 
			array (
				'id' => 734,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 254,
				'm_product_id' => 254,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			234 => 
			array (
				'id' => 735,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 255,
				'm_product_id' => 255,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			235 => 
			array (
				'id' => 736,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 255,
				'm_product_id' => 255,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			236 => 
			array (
				'id' => 737,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 255,
				'm_product_id' => 255,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			237 => 
			array (
				'id' => 738,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 255,
				'm_product_id' => 255,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			238 => 
			array (
				'id' => 739,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 256,
				'm_product_id' => 256,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			239 => 
			array (
				'id' => 740,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 256,
				'm_product_id' => 256,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			240 => 
			array (
				'id' => 741,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 256,
				'm_product_id' => 256,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			241 => 
			array (
				'id' => 742,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 256,
				'm_product_id' => 256,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			242 => 
			array (
				'id' => 743,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 257,
				'm_product_id' => 257,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			243 => 
			array (
				'id' => 744,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 257,
				'm_product_id' => 257,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			244 => 
			array (
				'id' => 745,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 257,
				'm_product_id' => 257,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			245 => 
			array (
				'id' => 746,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 257,
				'm_product_id' => 257,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			246 => 
			array (
				'id' => 747,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 258,
				'm_product_id' => 258,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			247 => 
			array (
				'id' => 748,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 258,
				'm_product_id' => 258,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			248 => 
			array (
				'id' => 749,
				'name' => 'Giá Shop',
				'price' => 23500,
				'product_id' => 258,
				'm_product_id' => 258,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			249 => 
			array (
				'id' => 750,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 258,
				'm_product_id' => 258,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			250 => 
			array (
				'id' => 751,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 259,
				'm_product_id' => 259,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			251 => 
			array (
				'id' => 752,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 259,
				'm_product_id' => 259,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			252 => 
			array (
				'id' => 753,
				'name' => 'Giá Shop',
				'price' => 25500,
				'product_id' => 259,
				'm_product_id' => 259,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			253 => 
			array (
				'id' => 754,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 259,
				'm_product_id' => 259,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			254 => 
			array (
				'id' => 755,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 260,
				'm_product_id' => 260,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			255 => 
			array (
				'id' => 756,
				'name' => 'Giá Đại lý',
				'price' => 31000,
				'product_id' => 260,
				'm_product_id' => 260,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			256 => 
			array (
				'id' => 757,
				'name' => 'Giá Shop',
				'price' => 31500,
				'product_id' => 260,
				'm_product_id' => 260,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			257 => 
			array (
				'id' => 758,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 260,
				'm_product_id' => 260,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			258 => 
			array (
				'id' => 759,
				'name' => 'Giá NPP',
				'price' => 29500,
				'product_id' => 261,
				'm_product_id' => 261,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			259 => 
			array (
				'id' => 760,
				'name' => 'Giá Đại lý',
				'price' => 30500,
				'product_id' => 261,
				'm_product_id' => 261,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			260 => 
			array (
				'id' => 761,
				'name' => 'Giá Shop',
				'price' => 31000,
				'product_id' => 261,
				'm_product_id' => 261,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			261 => 
			array (
				'id' => 762,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 261,
				'm_product_id' => 261,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			262 => 
			array (
				'id' => 763,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 262,
				'm_product_id' => 262,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			263 => 
			array (
				'id' => 764,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 262,
				'm_product_id' => 262,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			264 => 
			array (
				'id' => 765,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 262,
				'm_product_id' => 262,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			265 => 
			array (
				'id' => 766,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 262,
				'm_product_id' => 262,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			266 => 
			array (
				'id' => 767,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 263,
				'm_product_id' => 263,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			267 => 
			array (
				'id' => 768,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 263,
				'm_product_id' => 263,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			268 => 
			array (
				'id' => 769,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 263,
				'm_product_id' => 263,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			269 => 
			array (
				'id' => 770,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 263,
				'm_product_id' => 263,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			270 => 
			array (
				'id' => 771,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 264,
				'm_product_id' => 264,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			271 => 
			array (
				'id' => 772,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 264,
				'm_product_id' => 264,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			272 => 
			array (
				'id' => 773,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 264,
				'm_product_id' => 264,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			273 => 
			array (
				'id' => 774,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 264,
				'm_product_id' => 264,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			274 => 
			array (
				'id' => 775,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 265,
				'm_product_id' => 265,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			275 => 
			array (
				'id' => 776,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 265,
				'm_product_id' => 265,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			276 => 
			array (
				'id' => 777,
				'name' => 'Giá Shop',
				'price' => 22500,
				'product_id' => 265,
				'm_product_id' => 265,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			277 => 
			array (
				'id' => 778,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 265,
				'm_product_id' => 265,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			278 => 
			array (
				'id' => 779,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 266,
				'm_product_id' => 266,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			279 => 
			array (
				'id' => 780,
				'name' => 'Giá Đại lý',
				'price' => 24000,
				'product_id' => 266,
				'm_product_id' => 266,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			280 => 
			array (
				'id' => 781,
				'name' => 'Giá Shop',
				'price' => 24500,
				'product_id' => 266,
				'm_product_id' => 266,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			281 => 
			array (
				'id' => 782,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 266,
				'm_product_id' => 266,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			282 => 
			array (
				'id' => 783,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 267,
				'm_product_id' => 267,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			283 => 
			array (
				'id' => 784,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 268,
				'm_product_id' => 268,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			284 => 
			array (
				'id' => 785,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 269,
				'm_product_id' => 269,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			285 => 
			array (
				'id' => 786,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 269,
				'm_product_id' => 269,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			286 => 
			array (
				'id' => 787,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 269,
				'm_product_id' => 269,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			287 => 
			array (
				'id' => 788,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 269,
				'm_product_id' => 269,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			288 => 
			array (
				'id' => 789,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 270,
				'm_product_id' => 270,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			289 => 
			array (
				'id' => 790,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 271,
				'm_product_id' => 271,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			290 => 
			array (
				'id' => 791,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 272,
				'm_product_id' => 272,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			291 => 
			array (
				'id' => 792,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 273,
				'm_product_id' => 273,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			292 => 
			array (
				'id' => 793,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 274,
				'm_product_id' => 274,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			293 => 
			array (
				'id' => 794,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 275,
				'm_product_id' => 275,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			294 => 
			array (
				'id' => 795,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 276,
				'm_product_id' => 276,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			295 => 
			array (
				'id' => 796,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 277,
				'm_product_id' => 277,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			296 => 
			array (
				'id' => 797,
				'name' => 'Giá NPP',
				'price' => 87000,
				'product_id' => 278,
				'm_product_id' => 278,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			297 => 
			array (
				'id' => 798,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 279,
				'm_product_id' => 279,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			298 => 
			array (
				'id' => 799,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 280,
				'm_product_id' => 280,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			299 => 
			array (
				'id' => 800,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 281,
				'm_product_id' => 281,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			300 => 
			array (
				'id' => 801,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 282,
				'm_product_id' => 282,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			301 => 
			array (
				'id' => 802,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 283,
				'm_product_id' => 283,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			302 => 
			array (
				'id' => 803,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 283,
				'm_product_id' => 283,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			303 => 
			array (
				'id' => 804,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 283,
				'm_product_id' => 283,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			304 => 
			array (
				'id' => 805,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 283,
				'm_product_id' => 283,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			305 => 
			array (
				'id' => 806,
				'name' => 'Giá NPP',
				'price' => 21500,
				'product_id' => 284,
				'm_product_id' => 284,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			306 => 
			array (
				'id' => 807,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 284,
				'm_product_id' => 284,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			307 => 
			array (
				'id' => 808,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 284,
				'm_product_id' => 284,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			308 => 
			array (
				'id' => 809,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 284,
				'm_product_id' => 284,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			309 => 
			array (
				'id' => 810,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 285,
				'm_product_id' => 285,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			310 => 
			array (
				'id' => 811,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 285,
				'm_product_id' => 285,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			311 => 
			array (
				'id' => 812,
				'name' => 'Giá Shop',
				'price' => 54000,
				'product_id' => 285,
				'm_product_id' => 285,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			312 => 
			array (
				'id' => 813,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 286,
				'm_product_id' => 286,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			313 => 
			array (
				'id' => 814,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 287,
				'm_product_id' => 287,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			314 => 
			array (
				'id' => 815,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 288,
				'm_product_id' => 288,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			315 => 
			array (
				'id' => 816,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 289,
				'm_product_id' => 289,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			316 => 
			array (
				'id' => 817,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 290,
				'm_product_id' => 290,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			317 => 
			array (
				'id' => 818,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 290,
				'm_product_id' => 290,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			318 => 
			array (
				'id' => 819,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 290,
				'm_product_id' => 290,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			319 => 
			array (
				'id' => 820,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 290,
				'm_product_id' => 290,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			320 => 
			array (
				'id' => 821,
				'name' => 'Giá NPP',
				'price' => 49000,
				'product_id' => 291,
				'm_product_id' => 291,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			321 => 
			array (
				'id' => 822,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 292,
				'm_product_id' => 292,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			322 => 
			array (
				'id' => 823,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 292,
				'm_product_id' => 292,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			323 => 
			array (
				'id' => 824,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 292,
				'm_product_id' => 292,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			324 => 
			array (
				'id' => 825,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 293,
				'm_product_id' => 293,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			325 => 
			array (
				'id' => 826,
				'name' => 'Giá Đại lý',
				'price' => 48000,
				'product_id' => 293,
				'm_product_id' => 293,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			326 => 
			array (
				'id' => 827,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 293,
				'm_product_id' => 293,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			327 => 
			array (
				'id' => 828,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 294,
				'm_product_id' => 294,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			328 => 
			array (
				'id' => 829,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 294,
				'm_product_id' => 294,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			329 => 
			array (
				'id' => 830,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 294,
				'm_product_id' => 294,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			330 => 
			array (
				'id' => 831,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 295,
				'm_product_id' => 295,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			331 => 
			array (
				'id' => 832,
				'name' => 'Giá NPP',
				'price' => 71000,
				'product_id' => 296,
				'm_product_id' => 296,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			332 => 
			array (
				'id' => 833,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 297,
				'm_product_id' => 297,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			333 => 
			array (
				'id' => 834,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 298,
				'm_product_id' => 298,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			334 => 
			array (
				'id' => 835,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 299,
				'm_product_id' => 299,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			335 => 
			array (
				'id' => 836,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 300,
				'm_product_id' => 300,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			336 => 
			array (
				'id' => 837,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 300,
				'm_product_id' => 300,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			337 => 
			array (
				'id' => 838,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 300,
				'm_product_id' => 300,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			338 => 
			array (
				'id' => 839,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 301,
				'm_product_id' => 301,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			339 => 
			array (
				'id' => 840,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 302,
				'm_product_id' => 302,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			340 => 
			array (
				'id' => 841,
				'name' => 'Giá Đại lý',
				'price' => 41000,
				'product_id' => 302,
				'm_product_id' => 302,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			341 => 
			array (
				'id' => 842,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 302,
				'm_product_id' => 302,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			342 => 
			array (
				'id' => 843,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 303,
				'm_product_id' => 303,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			343 => 
			array (
				'id' => 844,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 303,
				'm_product_id' => 303,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			344 => 
			array (
				'id' => 845,
				'name' => 'Giá Shop',
				'price' => 82000,
				'product_id' => 303,
				'm_product_id' => 303,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			345 => 
			array (
				'id' => 846,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 304,
				'm_product_id' => 304,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			346 => 
			array (
				'id' => 847,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 304,
				'm_product_id' => 304,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			347 => 
			array (
				'id' => 848,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 304,
				'm_product_id' => 304,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			348 => 
			array (
				'id' => 849,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 305,
				'm_product_id' => 305,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			349 => 
			array (
				'id' => 850,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 305,
				'm_product_id' => 305,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			350 => 
			array (
				'id' => 851,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 305,
				'm_product_id' => 305,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			351 => 
			array (
				'id' => 852,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 306,
				'm_product_id' => 306,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			352 => 
			array (
				'id' => 853,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 307,
				'm_product_id' => 307,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			353 => 
			array (
				'id' => 854,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 308,
				'm_product_id' => 308,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			354 => 
			array (
				'id' => 855,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 309,
				'm_product_id' => 309,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			355 => 
			array (
				'id' => 856,
				'name' => 'Giá NPP',
				'price' => 64000,
				'product_id' => 310,
				'm_product_id' => 310,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			356 => 
			array (
				'id' => 857,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 311,
				'm_product_id' => 311,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			357 => 
			array (
				'id' => 858,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 312,
				'm_product_id' => 312,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			358 => 
			array (
				'id' => 859,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 313,
				'm_product_id' => 313,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			359 => 
			array (
				'id' => 860,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 313,
				'm_product_id' => 313,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			360 => 
			array (
				'id' => 861,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 313,
				'm_product_id' => 313,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			361 => 
			array (
				'id' => 862,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 314,
				'm_product_id' => 314,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			362 => 
			array (
				'id' => 863,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 314,
				'm_product_id' => 314,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			363 => 
			array (
				'id' => 864,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 314,
				'm_product_id' => 314,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			364 => 
			array (
				'id' => 865,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 314,
				'm_product_id' => 314,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			365 => 
			array (
				'id' => 866,
				'name' => 'Giá NPP',
				'price' => 81000,
				'product_id' => 315,
				'm_product_id' => 315,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			366 => 
			array (
				'id' => 867,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 316,
				'm_product_id' => 316,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			367 => 
			array (
				'id' => 868,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 317,
				'm_product_id' => 317,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			368 => 
			array (
				'id' => 869,
				'name' => 'Giá NPP',
				'price' => 81000,
				'product_id' => 318,
				'm_product_id' => 318,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			369 => 
			array (
				'id' => 870,
				'name' => 'Giá NPP',
				'price' => 91500,
				'product_id' => 319,
				'm_product_id' => 319,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			370 => 
			array (
				'id' => 871,
				'name' => 'Giá NPP',
				'price' => 133000,
				'product_id' => 320,
				'm_product_id' => 320,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			371 => 
			array (
				'id' => 872,
				'name' => 'Giá NPP',
				'price' => 139500,
				'product_id' => 321,
				'm_product_id' => 321,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			372 => 
			array (
				'id' => 873,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 322,
				'm_product_id' => 322,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			373 => 
			array (
				'id' => 874,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 323,
				'm_product_id' => 323,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			374 => 
			array (
				'id' => 875,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 323,
				'm_product_id' => 323,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			375 => 
			array (
				'id' => 876,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 323,
				'm_product_id' => 323,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			376 => 
			array (
				'id' => 877,
				'name' => 'Giá NPP',
				'price' => 47000,
				'product_id' => 324,
				'm_product_id' => 324,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			377 => 
			array (
				'id' => 878,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 325,
				'm_product_id' => 325,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			378 => 
			array (
				'id' => 879,
				'name' => 'Giá Đại lý',
				'price' => 66000,
				'product_id' => 325,
				'm_product_id' => 325,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			379 => 
			array (
				'id' => 880,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 325,
				'm_product_id' => 325,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			380 => 
			array (
				'id' => 881,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 326,
				'm_product_id' => 326,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			381 => 
			array (
				'id' => 882,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 327,
				'm_product_id' => 327,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			382 => 
			array (
				'id' => 883,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 327,
				'm_product_id' => 327,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			383 => 
			array (
				'id' => 884,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 327,
				'm_product_id' => 327,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			384 => 
			array (
				'id' => 885,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 328,
				'm_product_id' => 328,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			385 => 
			array (
				'id' => 886,
				'name' => 'Giá Đại lý',
				'price' => 90000,
				'product_id' => 328,
				'm_product_id' => 328,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			386 => 
			array (
				'id' => 887,
				'name' => 'Giá Shop',
				'price' => 95000,
				'product_id' => 328,
				'm_product_id' => 328,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			387 => 
			array (
				'id' => 888,
				'name' => 'Giá NPP',
				'price' => 84000,
				'product_id' => 329,
				'm_product_id' => 329,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			388 => 
			array (
				'id' => 889,
				'name' => 'Giá Đại lý',
				'price' => 86000,
				'product_id' => 329,
				'm_product_id' => 329,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			389 => 
			array (
				'id' => 890,
				'name' => 'Giá Shop',
				'price' => 88000,
				'product_id' => 329,
				'm_product_id' => 329,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			390 => 
			array (
				'id' => 891,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 330,
				'm_product_id' => 330,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			391 => 
			array (
				'id' => 892,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 330,
				'm_product_id' => 330,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			392 => 
			array (
				'id' => 893,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 330,
				'm_product_id' => 330,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			393 => 
			array (
				'id' => 894,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 331,
				'm_product_id' => 331,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			394 => 
			array (
				'id' => 895,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 331,
				'm_product_id' => 331,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			395 => 
			array (
				'id' => 896,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 331,
				'm_product_id' => 331,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			396 => 
			array (
				'id' => 897,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 332,
				'm_product_id' => 332,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			397 => 
			array (
				'id' => 898,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 332,
				'm_product_id' => 332,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			398 => 
			array (
				'id' => 899,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 332,
				'm_product_id' => 332,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			399 => 
			array (
				'id' => 900,
				'name' => 'Giá NPP',
				'price' => 94000,
				'product_id' => 333,
				'm_product_id' => 333,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			400 => 
			array (
				'id' => 901,
				'name' => 'Giá Đại lý',
				'price' => 95000,
				'product_id' => 333,
				'm_product_id' => 333,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			401 => 
			array (
				'id' => 902,
				'name' => 'Giá Shop',
				'price' => 97000,
				'product_id' => 333,
				'm_product_id' => 333,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			402 => 
			array (
				'id' => 903,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 334,
				'm_product_id' => 334,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			403 => 
			array (
				'id' => 904,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 334,
				'm_product_id' => 334,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			404 => 
			array (
				'id' => 905,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 334,
				'm_product_id' => 334,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			405 => 
			array (
				'id' => 906,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 335,
				'm_product_id' => 335,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			406 => 
			array (
				'id' => 907,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 336,
				'm_product_id' => 336,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			407 => 
			array (
				'id' => 908,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 336,
				'm_product_id' => 336,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			408 => 
			array (
				'id' => 909,
				'name' => 'Giá Shop',
				'price' => 83000,
				'product_id' => 336,
				'm_product_id' => 336,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			409 => 
			array (
				'id' => 910,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 337,
				'm_product_id' => 337,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			410 => 
			array (
				'id' => 911,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 338,
				'm_product_id' => 338,
				'created_at' => '2015-08-05 08:54:34',
				'updated_at' => '2015-08-05 08:54:34',
			),
			411 => 
			array (
				'id' => 912,
				'name' => 'Giá Đại lý',
				'price' => 38000,
				'product_id' => 338,
				'm_product_id' => 338,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			412 => 
			array (
				'id' => 913,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 338,
				'm_product_id' => 338,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			413 => 
			array (
				'id' => 914,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 339,
				'm_product_id' => 339,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			414 => 
			array (
				'id' => 915,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 340,
				'm_product_id' => 340,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			415 => 
			array (
				'id' => 916,
				'name' => 'Giá NPP',
				'price' => 103000,
				'product_id' => 341,
				'm_product_id' => 341,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			416 => 
			array (
				'id' => 917,
				'name' => 'Giá Đại lý',
				'price' => 105000,
				'product_id' => 341,
				'm_product_id' => 341,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			417 => 
			array (
				'id' => 918,
				'name' => 'Giá Shop',
				'price' => 110000,
				'product_id' => 341,
				'm_product_id' => 341,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			418 => 
			array (
				'id' => 919,
				'name' => 'Giá NPP',
				'price' => 79000,
				'product_id' => 342,
				'm_product_id' => 342,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			419 => 
			array (
				'id' => 920,
				'name' => 'Giá Đại lý',
				'price' => 81000,
				'product_id' => 342,
				'm_product_id' => 342,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			420 => 
			array (
				'id' => 921,
				'name' => 'Giá Shop',
				'price' => 83000,
				'product_id' => 342,
				'm_product_id' => 342,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			421 => 
			array (
				'id' => 922,
				'name' => 'Giá NPP',
				'price' => 61000,
				'product_id' => 343,
				'm_product_id' => 343,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			422 => 
			array (
				'id' => 923,
				'name' => 'Giá Đại lý',
				'price' => 63000,
				'product_id' => 343,
				'm_product_id' => 343,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			423 => 
			array (
				'id' => 924,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 343,
				'm_product_id' => 343,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			424 => 
			array (
				'id' => 925,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 344,
				'm_product_id' => 344,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			425 => 
			array (
				'id' => 926,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 344,
				'm_product_id' => 344,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			426 => 
			array (
				'id' => 927,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 344,
				'm_product_id' => 344,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			427 => 
			array (
				'id' => 928,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 345,
				'm_product_id' => 345,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			428 => 
			array (
				'id' => 929,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 346,
				'm_product_id' => 346,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			429 => 
			array (
				'id' => 930,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 346,
				'm_product_id' => 346,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			430 => 
			array (
				'id' => 931,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 346,
				'm_product_id' => 346,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			431 => 
			array (
				'id' => 932,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 347,
				'm_product_id' => 347,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			432 => 
			array (
				'id' => 933,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 347,
				'm_product_id' => 347,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			433 => 
			array (
				'id' => 934,
				'name' => 'Giá Shop',
				'price' => 74000,
				'product_id' => 347,
				'm_product_id' => 347,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			434 => 
			array (
				'id' => 935,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 348,
				'm_product_id' => 348,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			435 => 
			array (
				'id' => 936,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 348,
				'm_product_id' => 348,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			436 => 
			array (
				'id' => 937,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 348,
				'm_product_id' => 348,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			437 => 
			array (
				'id' => 938,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 349,
				'm_product_id' => 349,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			438 => 
			array (
				'id' => 939,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 350,
				'm_product_id' => 350,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			439 => 
			array (
				'id' => 940,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 350,
				'm_product_id' => 350,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			440 => 
			array (
				'id' => 941,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 350,
				'm_product_id' => 350,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			441 => 
			array (
				'id' => 942,
				'name' => 'Giá NPP',
				'price' => 84000,
				'product_id' => 351,
				'm_product_id' => 351,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			442 => 
			array (
				'id' => 943,
				'name' => 'Giá Đại lý',
				'price' => 87000,
				'product_id' => 351,
				'm_product_id' => 351,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			443 => 
			array (
				'id' => 944,
				'name' => 'Giá Shop',
				'price' => 90000,
				'product_id' => 351,
				'm_product_id' => 351,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			444 => 
			array (
				'id' => 945,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 352,
				'm_product_id' => 352,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			445 => 
			array (
				'id' => 946,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 352,
				'm_product_id' => 352,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			446 => 
			array (
				'id' => 947,
				'name' => 'Giá Shop',
				'price' => 84000,
				'product_id' => 352,
				'm_product_id' => 352,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			447 => 
			array (
				'id' => 948,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 353,
				'm_product_id' => 353,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			448 => 
			array (
				'id' => 949,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 354,
				'm_product_id' => 354,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			449 => 
			array (
				'id' => 950,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 355,
				'm_product_id' => 355,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			450 => 
			array (
				'id' => 951,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 356,
				'm_product_id' => 356,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			451 => 
			array (
				'id' => 952,
				'name' => 'Giá NPP',
				'price' => 7500,
				'product_id' => 357,
				'm_product_id' => 357,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			452 => 
			array (
				'id' => 953,
				'name' => 'Giá Đại lý',
				'price' => 8000,
				'product_id' => 357,
				'm_product_id' => 357,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			453 => 
			array (
				'id' => 954,
				'name' => 'Giá Shop',
				'price' => 8000,
				'product_id' => 357,
				'm_product_id' => 357,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			454 => 
			array (
				'id' => 955,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 358,
				'm_product_id' => 358,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			455 => 
			array (
				'id' => 956,
				'name' => 'Giá Đại lý',
				'price' => 46000,
				'product_id' => 358,
				'm_product_id' => 358,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			456 => 
			array (
				'id' => 957,
				'name' => 'Giá Shop',
				'price' => 48000,
				'product_id' => 358,
				'm_product_id' => 358,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			457 => 
			array (
				'id' => 958,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 359,
				'm_product_id' => 359,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			458 => 
			array (
				'id' => 959,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 360,
				'm_product_id' => 360,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			459 => 
			array (
				'id' => 960,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 360,
				'm_product_id' => 360,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			460 => 
			array (
				'id' => 961,
				'name' => 'Giá Shop',
				'price' => 32000,
				'product_id' => 360,
				'm_product_id' => 360,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			461 => 
			array (
				'id' => 962,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 361,
				'm_product_id' => 361,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			462 => 
			array (
				'id' => 963,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 362,
				'm_product_id' => 362,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			463 => 
			array (
				'id' => 964,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 362,
				'm_product_id' => 362,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			464 => 
			array (
				'id' => 965,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 362,
				'm_product_id' => 362,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			465 => 
			array (
				'id' => 966,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 362,
				'm_product_id' => 362,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			466 => 
			array (
				'id' => 967,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 363,
				'm_product_id' => 363,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			467 => 
			array (
				'id' => 968,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 363,
				'm_product_id' => 363,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			468 => 
			array (
				'id' => 969,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 364,
				'm_product_id' => 364,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			469 => 
			array (
				'id' => 970,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 364,
				'm_product_id' => 364,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			470 => 
			array (
				'id' => 971,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 364,
				'm_product_id' => 364,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			471 => 
			array (
				'id' => 972,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 364,
				'm_product_id' => 364,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			472 => 
			array (
				'id' => 973,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 365,
				'm_product_id' => 365,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			473 => 
			array (
				'id' => 974,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 365,
				'm_product_id' => 365,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			474 => 
			array (
				'id' => 975,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 365,
				'm_product_id' => 365,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			475 => 
			array (
				'id' => 976,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 366,
				'm_product_id' => 366,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			476 => 
			array (
				'id' => 977,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 366,
				'm_product_id' => 366,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			477 => 
			array (
				'id' => 978,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 367,
				'm_product_id' => 367,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			478 => 
			array (
				'id' => 979,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 367,
				'm_product_id' => 367,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			479 => 
			array (
				'id' => 980,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 367,
				'm_product_id' => 367,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			480 => 
			array (
				'id' => 981,
				'name' => 'Giá Bán lẻ',
				'price' => 31000,
				'product_id' => 367,
				'm_product_id' => 367,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			481 => 
			array (
				'id' => 982,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 368,
				'm_product_id' => 368,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			482 => 
			array (
				'id' => 983,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 368,
				'm_product_id' => 368,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			483 => 
			array (
				'id' => 984,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 368,
				'm_product_id' => 368,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			484 => 
			array (
				'id' => 985,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 368,
				'm_product_id' => 368,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			485 => 
			array (
				'id' => 986,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 369,
				'm_product_id' => 369,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			486 => 
			array (
				'id' => 987,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 369,
				'm_product_id' => 369,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			487 => 
			array (
				'id' => 988,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 369,
				'm_product_id' => 369,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			488 => 
			array (
				'id' => 989,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 370,
				'm_product_id' => 370,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			489 => 
			array (
				'id' => 990,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 370,
				'm_product_id' => 370,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			490 => 
			array (
				'id' => 991,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 370,
				'm_product_id' => 370,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			491 => 
			array (
				'id' => 992,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 371,
				'm_product_id' => 371,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			492 => 
			array (
				'id' => 993,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 371,
				'm_product_id' => 371,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			493 => 
			array (
				'id' => 994,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 372,
				'm_product_id' => 372,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			494 => 
			array (
				'id' => 995,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 372,
				'm_product_id' => 372,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			495 => 
			array (
				'id' => 996,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 372,
				'm_product_id' => 372,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			496 => 
			array (
				'id' => 997,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 372,
				'm_product_id' => 372,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			497 => 
			array (
				'id' => 998,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 373,
				'm_product_id' => 373,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			498 => 
			array (
				'id' => 999,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 373,
				'm_product_id' => 373,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			499 => 
			array (
				'id' => 1000,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 374,
				'm_product_id' => 374,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 1001,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 374,
				'm_product_id' => 374,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			1 => 
			array (
				'id' => 1002,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 375,
				'm_product_id' => 375,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			2 => 
			array (
				'id' => 1003,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 376,
				'm_product_id' => 376,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			3 => 
			array (
				'id' => 1004,
				'name' => 'Giá NPP',
				'price' => 83000,
				'product_id' => 377,
				'm_product_id' => 377,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			4 => 
			array (
				'id' => 1005,
				'name' => 'Giá NPP',
				'price' => 79000,
				'product_id' => 378,
				'm_product_id' => 378,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			5 => 
			array (
				'id' => 1006,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 379,
				'm_product_id' => 379,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			6 => 
			array (
				'id' => 1007,
				'name' => 'Giá Đại lý',
				'price' => 56000,
				'product_id' => 379,
				'm_product_id' => 379,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			7 => 
			array (
				'id' => 1008,
				'name' => 'Giá Shop',
				'price' => 57000,
				'product_id' => 379,
				'm_product_id' => 379,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			8 => 
			array (
				'id' => 1009,
				'name' => 'Giá NPP',
				'price' => 33000,
				'product_id' => 380,
				'm_product_id' => 380,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			9 => 
			array (
				'id' => 1010,
				'name' => 'Giá Đại lý',
				'price' => 35000,
				'product_id' => 380,
				'm_product_id' => 380,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			10 => 
			array (
				'id' => 1011,
				'name' => 'Giá Shop',
				'price' => 38000,
				'product_id' => 380,
				'm_product_id' => 380,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			11 => 
			array (
				'id' => 1012,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 381,
				'm_product_id' => 381,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			12 => 
			array (
				'id' => 1013,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 381,
				'm_product_id' => 381,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			13 => 
			array (
				'id' => 1014,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 381,
				'm_product_id' => 381,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			14 => 
			array (
				'id' => 1015,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 381,
				'm_product_id' => 381,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			15 => 
			array (
				'id' => 1016,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 382,
				'm_product_id' => 382,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			16 => 
			array (
				'id' => 1017,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 382,
				'm_product_id' => 382,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			17 => 
			array (
				'id' => 1018,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 382,
				'm_product_id' => 382,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			18 => 
			array (
				'id' => 1019,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 382,
				'm_product_id' => 382,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			19 => 
			array (
				'id' => 1020,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 383,
				'm_product_id' => 383,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			20 => 
			array (
				'id' => 1021,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 383,
				'm_product_id' => 383,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			21 => 
			array (
				'id' => 1022,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 383,
				'm_product_id' => 383,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			22 => 
			array (
				'id' => 1023,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 383,
				'm_product_id' => 383,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			23 => 
			array (
				'id' => 1024,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 384,
				'm_product_id' => 384,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			24 => 
			array (
				'id' => 1025,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 384,
				'm_product_id' => 384,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			25 => 
			array (
				'id' => 1026,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 384,
				'm_product_id' => 384,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			26 => 
			array (
				'id' => 1027,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 384,
				'm_product_id' => 384,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			27 => 
			array (
				'id' => 1028,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 385,
				'm_product_id' => 385,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			28 => 
			array (
				'id' => 1029,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 385,
				'm_product_id' => 385,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			29 => 
			array (
				'id' => 1030,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 385,
				'm_product_id' => 385,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			30 => 
			array (
				'id' => 1031,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 386,
				'm_product_id' => 386,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			31 => 
			array (
				'id' => 1032,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 386,
				'm_product_id' => 386,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			32 => 
			array (
				'id' => 1033,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 386,
				'm_product_id' => 386,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			33 => 
			array (
				'id' => 1034,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 387,
				'm_product_id' => 387,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			34 => 
			array (
				'id' => 1035,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 387,
				'm_product_id' => 387,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			35 => 
			array (
				'id' => 1036,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 387,
				'm_product_id' => 387,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			36 => 
			array (
				'id' => 1037,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 388,
				'm_product_id' => 388,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			37 => 
			array (
				'id' => 1038,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 388,
				'm_product_id' => 388,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			38 => 
			array (
				'id' => 1039,
				'name' => 'Giá Shop',
				'price' => 48000,
				'product_id' => 388,
				'm_product_id' => 388,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			39 => 
			array (
				'id' => 1040,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 389,
				'm_product_id' => 389,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			40 => 
			array (
				'id' => 1041,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 389,
				'm_product_id' => 389,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			41 => 
			array (
				'id' => 1042,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 389,
				'm_product_id' => 389,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			42 => 
			array (
				'id' => 1043,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 390,
				'm_product_id' => 390,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			43 => 
			array (
				'id' => 1044,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 390,
				'm_product_id' => 390,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			44 => 
			array (
				'id' => 1045,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 390,
				'm_product_id' => 390,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			45 => 
			array (
				'id' => 1046,
				'name' => 'Giá NPP',
				'price' => 32000,
				'product_id' => 391,
				'm_product_id' => 391,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			46 => 
			array (
				'id' => 1047,
				'name' => 'Giá Đại lý',
				'price' => 35000,
				'product_id' => 391,
				'm_product_id' => 391,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			47 => 
			array (
				'id' => 1048,
				'name' => 'Giá NPP',
				'price' => 360000,
				'product_id' => 392,
				'm_product_id' => 392,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			48 => 
			array (
				'id' => 1049,
				'name' => 'Giá Đại lý',
				'price' => 365000,
				'product_id' => 392,
				'm_product_id' => 392,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			49 => 
			array (
				'id' => 1050,
				'name' => 'Giá Shop',
				'price' => 370000,
				'product_id' => 392,
				'm_product_id' => 392,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			50 => 
			array (
				'id' => 1051,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 393,
				'm_product_id' => 393,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			51 => 
			array (
				'id' => 1052,
				'name' => 'Giá Đại lý',
				'price' => 28500,
				'product_id' => 393,
				'm_product_id' => 393,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			52 => 
			array (
				'id' => 1053,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 393,
				'm_product_id' => 393,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			53 => 
			array (
				'id' => 1054,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 393,
				'm_product_id' => 393,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			54 => 
			array (
				'id' => 1055,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 394,
				'm_product_id' => 394,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			55 => 
			array (
				'id' => 1056,
				'name' => 'Giá Đại lý',
				'price' => 25500,
				'product_id' => 394,
				'm_product_id' => 394,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			56 => 
			array (
				'id' => 1057,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 394,
				'm_product_id' => 394,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			57 => 
			array (
				'id' => 1058,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 394,
				'm_product_id' => 394,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			58 => 
			array (
				'id' => 1059,
				'name' => 'Giá NPP',
				'price' => 54000,
				'product_id' => 395,
				'm_product_id' => 395,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			59 => 
			array (
				'id' => 1060,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 395,
				'm_product_id' => 395,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			60 => 
			array (
				'id' => 1061,
				'name' => 'Giá Shop',
				'price' => 57000,
				'product_id' => 395,
				'm_product_id' => 395,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			61 => 
			array (
				'id' => 1062,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 396,
				'm_product_id' => 396,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			62 => 
			array (
				'id' => 1063,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 397,
				'm_product_id' => 397,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			63 => 
			array (
				'id' => 1064,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 397,
				'm_product_id' => 397,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			64 => 
			array (
				'id' => 1065,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 397,
				'm_product_id' => 397,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			65 => 
			array (
				'id' => 1066,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 397,
				'm_product_id' => 397,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			66 => 
			array (
				'id' => 1067,
				'name' => 'Giá NPP',
				'price' => 41000,
				'product_id' => 398,
				'm_product_id' => 398,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			67 => 
			array (
				'id' => 1068,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 399,
				'm_product_id' => 399,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			68 => 
			array (
				'id' => 1069,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 399,
				'm_product_id' => 399,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			69 => 
			array (
				'id' => 1070,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 399,
				'm_product_id' => 399,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			70 => 
			array (
				'id' => 1071,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 399,
				'm_product_id' => 399,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			71 => 
			array (
				'id' => 1072,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 400,
				'm_product_id' => 400,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			72 => 
			array (
				'id' => 1073,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 400,
				'm_product_id' => 400,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			73 => 
			array (
				'id' => 1074,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 400,
				'm_product_id' => 400,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			74 => 
			array (
				'id' => 1075,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 400,
				'm_product_id' => 400,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			75 => 
			array (
				'id' => 1076,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 401,
				'm_product_id' => 401,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			76 => 
			array (
				'id' => 1077,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 401,
				'm_product_id' => 401,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			77 => 
			array (
				'id' => 1078,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 401,
				'm_product_id' => 401,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			78 => 
			array (
				'id' => 1079,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 401,
				'm_product_id' => 401,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			79 => 
			array (
				'id' => 1080,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 402,
				'm_product_id' => 402,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			80 => 
			array (
				'id' => 1081,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 402,
				'm_product_id' => 402,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			81 => 
			array (
				'id' => 1082,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 402,
				'm_product_id' => 402,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			82 => 
			array (
				'id' => 1083,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 402,
				'm_product_id' => 402,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			83 => 
			array (
				'id' => 1084,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 403,
				'm_product_id' => 403,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			84 => 
			array (
				'id' => 1085,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 403,
				'm_product_id' => 403,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			85 => 
			array (
				'id' => 1086,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 403,
				'm_product_id' => 403,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			86 => 
			array (
				'id' => 1087,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 403,
				'm_product_id' => 403,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			87 => 
			array (
				'id' => 1088,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 404,
				'm_product_id' => 404,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			88 => 
			array (
				'id' => 1089,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 404,
				'm_product_id' => 404,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			89 => 
			array (
				'id' => 1090,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 404,
				'm_product_id' => 404,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			90 => 
			array (
				'id' => 1091,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 404,
				'm_product_id' => 404,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			91 => 
			array (
				'id' => 1092,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 405,
				'm_product_id' => 405,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			92 => 
			array (
				'id' => 1093,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 405,
				'm_product_id' => 405,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			93 => 
			array (
				'id' => 1094,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 405,
				'm_product_id' => 405,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			94 => 
			array (
				'id' => 1095,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 405,
				'm_product_id' => 405,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			95 => 
			array (
				'id' => 1096,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 406,
				'm_product_id' => 406,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			96 => 
			array (
				'id' => 1097,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 406,
				'm_product_id' => 406,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			97 => 
			array (
				'id' => 1098,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 406,
				'm_product_id' => 406,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			98 => 
			array (
				'id' => 1099,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 406,
				'm_product_id' => 406,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			99 => 
			array (
				'id' => 1100,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 407,
				'm_product_id' => 407,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			100 => 
			array (
				'id' => 1101,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 408,
				'm_product_id' => 408,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			101 => 
			array (
				'id' => 1102,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 409,
				'm_product_id' => 409,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			102 => 
			array (
				'id' => 1103,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 409,
				'm_product_id' => 409,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			103 => 
			array (
				'id' => 1104,
				'name' => 'Giá NPP',
				'price' => 69000,
				'product_id' => 410,
				'm_product_id' => 410,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			104 => 
			array (
				'id' => 1105,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 410,
				'm_product_id' => 410,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			105 => 
			array (
				'id' => 1106,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 411,
				'm_product_id' => 411,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			106 => 
			array (
				'id' => 1107,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 411,
				'm_product_id' => 411,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			107 => 
			array (
				'id' => 1108,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 411,
				'm_product_id' => 411,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			108 => 
			array (
				'id' => 1109,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 412,
				'm_product_id' => 412,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			109 => 
			array (
				'id' => 1110,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 412,
				'm_product_id' => 412,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			110 => 
			array (
				'id' => 1111,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 412,
				'm_product_id' => 412,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			111 => 
			array (
				'id' => 1112,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 413,
				'm_product_id' => 413,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			112 => 
			array (
				'id' => 1113,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 413,
				'm_product_id' => 413,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			113 => 
			array (
				'id' => 1114,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 413,
				'm_product_id' => 413,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			114 => 
			array (
				'id' => 1115,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 414,
				'm_product_id' => 414,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			115 => 
			array (
				'id' => 1116,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 414,
				'm_product_id' => 414,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			116 => 
			array (
				'id' => 1117,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 415,
				'm_product_id' => 415,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			117 => 
			array (
				'id' => 1118,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 415,
				'm_product_id' => 415,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			118 => 
			array (
				'id' => 1119,
				'name' => 'Giá Shop',
				'price' => 33000,
				'product_id' => 415,
				'm_product_id' => 415,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			119 => 
			array (
				'id' => 1120,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 416,
				'm_product_id' => 416,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			120 => 
			array (
				'id' => 1121,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 416,
				'm_product_id' => 416,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			121 => 
			array (
				'id' => 1122,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 416,
				'm_product_id' => 416,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			122 => 
			array (
				'id' => 1123,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 417,
				'm_product_id' => 417,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			123 => 
			array (
				'id' => 1124,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 417,
				'm_product_id' => 417,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			124 => 
			array (
				'id' => 1125,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 417,
				'm_product_id' => 417,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			125 => 
			array (
				'id' => 1126,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 418,
				'm_product_id' => 418,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			126 => 
			array (
				'id' => 1127,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 418,
				'm_product_id' => 418,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			127 => 
			array (
				'id' => 1128,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 418,
				'm_product_id' => 418,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			128 => 
			array (
				'id' => 1129,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 419,
				'm_product_id' => 419,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			129 => 
			array (
				'id' => 1130,
				'name' => 'Giá Đại lý',
				'price' => 32000,
				'product_id' => 419,
				'm_product_id' => 419,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			130 => 
			array (
				'id' => 1131,
				'name' => 'Giá Shop',
				'price' => 35000,
				'product_id' => 419,
				'm_product_id' => 419,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			131 => 
			array (
				'id' => 1132,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 420,
				'm_product_id' => 420,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			132 => 
			array (
				'id' => 1133,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 420,
				'm_product_id' => 420,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			133 => 
			array (
				'id' => 1134,
				'name' => 'Giá Shop',
				'price' => 35000,
				'product_id' => 420,
				'm_product_id' => 420,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			134 => 
			array (
				'id' => 1135,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 421,
				'm_product_id' => 421,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			135 => 
			array (
				'id' => 1136,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 421,
				'm_product_id' => 421,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			136 => 
			array (
				'id' => 1137,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 422,
				'm_product_id' => 422,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			137 => 
			array (
				'id' => 1138,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 422,
				'm_product_id' => 422,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			138 => 
			array (
				'id' => 1139,
				'name' => 'Giá Shop',
				'price' => 33000,
				'product_id' => 422,
				'm_product_id' => 422,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			139 => 
			array (
				'id' => 1140,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 423,
				'm_product_id' => 423,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			140 => 
			array (
				'id' => 1141,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 424,
				'm_product_id' => 424,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			141 => 
			array (
				'id' => 1142,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 424,
				'm_product_id' => 424,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			142 => 
			array (
				'id' => 1143,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 425,
				'm_product_id' => 425,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			143 => 
			array (
				'id' => 1144,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 425,
				'm_product_id' => 425,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			144 => 
			array (
				'id' => 1145,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 426,
				'm_product_id' => 426,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			145 => 
			array (
				'id' => 1146,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 426,
				'm_product_id' => 426,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			146 => 
			array (
				'id' => 1147,
				'name' => 'Giá NPP',
				'price' => 32000,
				'product_id' => 427,
				'm_product_id' => 427,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			147 => 
			array (
				'id' => 1148,
				'name' => 'Giá Đại lý',
				'price' => 35000,
				'product_id' => 427,
				'm_product_id' => 427,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			148 => 
			array (
				'id' => 1149,
				'name' => 'Giá NPP',
				'price' => 34000,
				'product_id' => 428,
				'm_product_id' => 428,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			149 => 
			array (
				'id' => 1150,
				'name' => 'Giá Đại lý',
				'price' => 36000,
				'product_id' => 428,
				'm_product_id' => 428,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			150 => 
			array (
				'id' => 1151,
				'name' => 'Giá Shop',
				'price' => 38000,
				'product_id' => 428,
				'm_product_id' => 428,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			151 => 
			array (
				'id' => 1152,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 429,
				'm_product_id' => 429,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			152 => 
			array (
				'id' => 1153,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 430,
				'm_product_id' => 430,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			153 => 
			array (
				'id' => 1154,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 431,
				'm_product_id' => 431,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			154 => 
			array (
				'id' => 1155,
				'name' => 'Giá NPP',
				'price' => 64000,
				'product_id' => 432,
				'm_product_id' => 432,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			155 => 
			array (
				'id' => 1156,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 433,
				'm_product_id' => 433,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			156 => 
			array (
				'id' => 1157,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 434,
				'm_product_id' => 434,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			157 => 
			array (
				'id' => 1158,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 435,
				'm_product_id' => 435,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			158 => 
			array (
				'id' => 1159,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 435,
				'm_product_id' => 435,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			159 => 
			array (
				'id' => 1160,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 435,
				'm_product_id' => 435,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			160 => 
			array (
				'id' => 1161,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 435,
				'm_product_id' => 435,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			161 => 
			array (
				'id' => 1162,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 436,
				'm_product_id' => 436,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			162 => 
			array (
				'id' => 1163,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 436,
				'm_product_id' => 436,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			163 => 
			array (
				'id' => 1164,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 436,
				'm_product_id' => 436,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			164 => 
			array (
				'id' => 1165,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 436,
				'm_product_id' => 436,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			165 => 
			array (
				'id' => 1166,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 437,
				'm_product_id' => 437,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			166 => 
			array (
				'id' => 1167,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 437,
				'm_product_id' => 437,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			167 => 
			array (
				'id' => 1168,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 437,
				'm_product_id' => 437,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			168 => 
			array (
				'id' => 1169,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 437,
				'm_product_id' => 437,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			169 => 
			array (
				'id' => 1170,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 438,
				'm_product_id' => 438,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			170 => 
			array (
				'id' => 1171,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 438,
				'm_product_id' => 438,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			171 => 
			array (
				'id' => 1172,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 438,
				'm_product_id' => 438,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			172 => 
			array (
				'id' => 1173,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 438,
				'm_product_id' => 438,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			173 => 
			array (
				'id' => 1174,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 439,
				'm_product_id' => 439,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			174 => 
			array (
				'id' => 1175,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 439,
				'm_product_id' => 439,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			175 => 
			array (
				'id' => 1176,
				'name' => 'Giá Shop',
				'price' => 27500,
				'product_id' => 439,
				'm_product_id' => 439,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			176 => 
			array (
				'id' => 1177,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 439,
				'm_product_id' => 439,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			177 => 
			array (
				'id' => 1178,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 440,
				'm_product_id' => 440,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			178 => 
			array (
				'id' => 1179,
				'name' => 'Giá Đại lý',
				'price' => 29000,
				'product_id' => 440,
				'm_product_id' => 440,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			179 => 
			array (
				'id' => 1180,
				'name' => 'Giá Shop',
				'price' => 29500,
				'product_id' => 440,
				'm_product_id' => 440,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			180 => 
			array (
				'id' => 1181,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 440,
				'm_product_id' => 440,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			181 => 
			array (
				'id' => 1182,
				'name' => 'Giá NPP',
				'price' => 69000,
				'product_id' => 441,
				'm_product_id' => 441,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			182 => 
			array (
				'id' => 1183,
				'name' => 'Giá Đại lý',
				'price' => 71000,
				'product_id' => 441,
				'm_product_id' => 441,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			183 => 
			array (
				'id' => 1184,
				'name' => 'Giá Shop',
				'price' => 73000,
				'product_id' => 441,
				'm_product_id' => 441,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			184 => 
			array (
				'id' => 1185,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 441,
				'm_product_id' => 441,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			185 => 
			array (
				'id' => 1186,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 442,
				'm_product_id' => 442,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			186 => 
			array (
				'id' => 1187,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 442,
				'm_product_id' => 442,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			187 => 
			array (
				'id' => 1188,
				'name' => 'Giá Shop',
				'price' => 84000,
				'product_id' => 442,
				'm_product_id' => 442,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			188 => 
			array (
				'id' => 1189,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 442,
				'm_product_id' => 442,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			189 => 
			array (
				'id' => 1190,
				'name' => 'Giá NPP',
				'price' => 100000,
				'product_id' => 443,
				'm_product_id' => 443,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			190 => 
			array (
				'id' => 1191,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 443,
				'm_product_id' => 443,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			191 => 
			array (
				'id' => 1192,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 443,
				'm_product_id' => 443,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			192 => 
			array (
				'id' => 1193,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 443,
				'm_product_id' => 443,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			193 => 
			array (
				'id' => 1194,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 444,
				'm_product_id' => 444,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			194 => 
			array (
				'id' => 1195,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 444,
				'm_product_id' => 444,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			195 => 
			array (
				'id' => 1196,
				'name' => 'Giá Shop',
				'price' => 82000,
				'product_id' => 444,
				'm_product_id' => 444,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			196 => 
			array (
				'id' => 1197,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 444,
				'm_product_id' => 444,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			197 => 
			array (
				'id' => 1198,
				'name' => 'Giá NPP',
				'price' => 89000,
				'product_id' => 445,
				'm_product_id' => 445,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			198 => 
			array (
				'id' => 1199,
				'name' => 'Giá Đại lý',
				'price' => 91000,
				'product_id' => 445,
				'm_product_id' => 445,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			199 => 
			array (
				'id' => 1200,
				'name' => 'Giá Shop',
				'price' => 93000,
				'product_id' => 445,
				'm_product_id' => 445,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			200 => 
			array (
				'id' => 1201,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 445,
				'm_product_id' => 445,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			201 => 
			array (
				'id' => 1202,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 446,
				'm_product_id' => 446,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			202 => 
			array (
				'id' => 1203,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 446,
				'm_product_id' => 446,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			203 => 
			array (
				'id' => 1204,
				'name' => 'Giá Shop',
				'price' => 84000,
				'product_id' => 446,
				'm_product_id' => 446,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			204 => 
			array (
				'id' => 1205,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 446,
				'm_product_id' => 446,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			205 => 
			array (
				'id' => 1206,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 447,
				'm_product_id' => 447,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			206 => 
			array (
				'id' => 1207,
				'name' => 'Giá NPP',
				'price' => 54000,
				'product_id' => 448,
				'm_product_id' => 448,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			207 => 
			array (
				'id' => 1208,
				'name' => 'Giá Đại lý',
				'price' => 56000,
				'product_id' => 448,
				'm_product_id' => 448,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			208 => 
			array (
				'id' => 1209,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 448,
				'm_product_id' => 448,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			209 => 
			array (
				'id' => 1210,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 449,
				'm_product_id' => 449,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			210 => 
			array (
				'id' => 1211,
				'name' => 'Giá Đại lý',
				'price' => 42000,
				'product_id' => 449,
				'm_product_id' => 449,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			211 => 
			array (
				'id' => 1212,
				'name' => 'Giá Shop',
				'price' => 43000,
				'product_id' => 449,
				'm_product_id' => 449,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			212 => 
			array (
				'id' => 1213,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 450,
				'm_product_id' => 450,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			213 => 
			array (
				'id' => 1214,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 450,
				'm_product_id' => 450,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			214 => 
			array (
				'id' => 1215,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 450,
				'm_product_id' => 450,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			215 => 
			array (
				'id' => 1216,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 450,
				'm_product_id' => 450,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			216 => 
			array (
				'id' => 1217,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 451,
				'm_product_id' => 451,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			217 => 
			array (
				'id' => 1218,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 451,
				'm_product_id' => 451,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			218 => 
			array (
				'id' => 1219,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 451,
				'm_product_id' => 451,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			219 => 
			array (
				'id' => 1220,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 451,
				'm_product_id' => 451,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			220 => 
			array (
				'id' => 1221,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 452,
				'm_product_id' => 452,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			221 => 
			array (
				'id' => 1222,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 452,
				'm_product_id' => 452,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			222 => 
			array (
				'id' => 1223,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 452,
				'm_product_id' => 452,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			223 => 
			array (
				'id' => 1224,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 452,
				'm_product_id' => 452,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			224 => 
			array (
				'id' => 1225,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 453,
				'm_product_id' => 453,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			225 => 
			array (
				'id' => 1226,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 453,
				'm_product_id' => 453,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			226 => 
			array (
				'id' => 1227,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 453,
				'm_product_id' => 453,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			227 => 
			array (
				'id' => 1228,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 453,
				'm_product_id' => 453,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			228 => 
			array (
				'id' => 1229,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 454,
				'm_product_id' => 454,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			229 => 
			array (
				'id' => 1230,
				'name' => 'Giá Đại lý',
				'price' => 48000,
				'product_id' => 454,
				'm_product_id' => 454,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			230 => 
			array (
				'id' => 1231,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 454,
				'm_product_id' => 454,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			231 => 
			array (
				'id' => 1232,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 454,
				'm_product_id' => 454,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			232 => 
			array (
				'id' => 1233,
				'name' => 'Giá NPP',
				'price' => 39000,
				'product_id' => 455,
				'm_product_id' => 455,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			233 => 
			array (
				'id' => 1234,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 456,
				'm_product_id' => 456,
				'created_at' => '2015-08-05 08:54:35',
				'updated_at' => '2015-08-05 08:54:35',
			),
			234 => 
			array (
				'id' => 1235,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 456,
				'm_product_id' => 456,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			235 => 
			array (
				'id' => 1236,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 456,
				'm_product_id' => 456,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			236 => 
			array (
				'id' => 1237,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 456,
				'm_product_id' => 456,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			237 => 
			array (
				'id' => 1238,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 457,
				'm_product_id' => 457,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			238 => 
			array (
				'id' => 1239,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 457,
				'm_product_id' => 457,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			239 => 
			array (
				'id' => 1240,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 457,
				'm_product_id' => 457,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			240 => 
			array (
				'id' => 1241,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 457,
				'm_product_id' => 457,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			241 => 
			array (
				'id' => 1242,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 458,
				'm_product_id' => 458,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			242 => 
			array (
				'id' => 1243,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 458,
				'm_product_id' => 458,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			243 => 
			array (
				'id' => 1244,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 458,
				'm_product_id' => 458,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			244 => 
			array (
				'id' => 1245,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 458,
				'm_product_id' => 458,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			245 => 
			array (
				'id' => 1246,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 459,
				'm_product_id' => 459,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			246 => 
			array (
				'id' => 1247,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 459,
				'm_product_id' => 459,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			247 => 
			array (
				'id' => 1248,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 459,
				'm_product_id' => 459,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			248 => 
			array (
				'id' => 1249,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 459,
				'm_product_id' => 459,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			249 => 
			array (
				'id' => 1250,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 460,
				'm_product_id' => 460,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			250 => 
			array (
				'id' => 1251,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 460,
				'm_product_id' => 460,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			251 => 
			array (
				'id' => 1252,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 460,
				'm_product_id' => 460,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			252 => 
			array (
				'id' => 1253,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 460,
				'm_product_id' => 460,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			253 => 
			array (
				'id' => 1254,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 461,
				'm_product_id' => 461,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			254 => 
			array (
				'id' => 1255,
				'name' => 'Giá Đại lý',
				'price' => 54000,
				'product_id' => 461,
				'm_product_id' => 461,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			255 => 
			array (
				'id' => 1256,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 461,
				'm_product_id' => 461,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			256 => 
			array (
				'id' => 1257,
				'name' => 'Giá Bán lẻ',
				'price' => 80000,
				'product_id' => 461,
				'm_product_id' => 461,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			257 => 
			array (
				'id' => 1258,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 462,
				'm_product_id' => 462,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			258 => 
			array (
				'id' => 1259,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 462,
				'm_product_id' => 462,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			259 => 
			array (
				'id' => 1260,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 462,
				'm_product_id' => 462,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			260 => 
			array (
				'id' => 1261,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 462,
				'm_product_id' => 462,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			261 => 
			array (
				'id' => 1262,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 463,
				'm_product_id' => 463,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			262 => 
			array (
				'id' => 1263,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 463,
				'm_product_id' => 463,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			263 => 
			array (
				'id' => 1264,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 463,
				'm_product_id' => 463,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			264 => 
			array (
				'id' => 1265,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 463,
				'm_product_id' => 463,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			265 => 
			array (
				'id' => 1266,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 464,
				'm_product_id' => 464,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			266 => 
			array (
				'id' => 1267,
				'name' => 'Giá Đại lý',
				'price' => 37000,
				'product_id' => 464,
				'm_product_id' => 464,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			267 => 
			array (
				'id' => 1268,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 464,
				'm_product_id' => 464,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			268 => 
			array (
				'id' => 1269,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 464,
				'm_product_id' => 464,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			269 => 
			array (
				'id' => 1270,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 465,
				'm_product_id' => 465,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			270 => 
			array (
				'id' => 1271,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 465,
				'm_product_id' => 465,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			271 => 
			array (
				'id' => 1272,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 465,
				'm_product_id' => 465,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			272 => 
			array (
				'id' => 1273,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 465,
				'm_product_id' => 465,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			273 => 
			array (
				'id' => 1274,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 466,
				'm_product_id' => 466,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			274 => 
			array (
				'id' => 1275,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 466,
				'm_product_id' => 466,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			275 => 
			array (
				'id' => 1276,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 466,
				'm_product_id' => 466,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			276 => 
			array (
				'id' => 1277,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 466,
				'm_product_id' => 466,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			277 => 
			array (
				'id' => 1278,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 467,
				'm_product_id' => 467,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			278 => 
			array (
				'id' => 1279,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 468,
				'm_product_id' => 468,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			279 => 
			array (
				'id' => 1280,
				'name' => 'Giá Đại lý',
				'price' => 37000,
				'product_id' => 468,
				'm_product_id' => 468,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			280 => 
			array (
				'id' => 1281,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 468,
				'm_product_id' => 468,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			281 => 
			array (
				'id' => 1282,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 468,
				'm_product_id' => 468,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			282 => 
			array (
				'id' => 1283,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 469,
				'm_product_id' => 469,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			283 => 
			array (
				'id' => 1284,
				'name' => 'Giá Đại lý',
				'price' => 37000,
				'product_id' => 469,
				'm_product_id' => 469,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			284 => 
			array (
				'id' => 1285,
				'name' => 'Giá Shop',
				'price' => 39000,
				'product_id' => 469,
				'm_product_id' => 469,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			285 => 
			array (
				'id' => 1286,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 469,
				'm_product_id' => 469,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			286 => 
			array (
				'id' => 1287,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 470,
				'm_product_id' => 470,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			287 => 
			array (
				'id' => 1288,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 470,
				'm_product_id' => 470,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			288 => 
			array (
				'id' => 1289,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 471,
				'm_product_id' => 471,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			289 => 
			array (
				'id' => 1290,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 471,
				'm_product_id' => 471,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			290 => 
			array (
				'id' => 1291,
				'name' => 'Giá Shop',
				'price' => 46000,
				'product_id' => 471,
				'm_product_id' => 471,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			291 => 
			array (
				'id' => 1292,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 471,
				'm_product_id' => 471,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			292 => 
			array (
				'id' => 1293,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 472,
				'm_product_id' => 472,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			293 => 
			array (
				'id' => 1294,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 472,
				'm_product_id' => 472,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			294 => 
			array (
				'id' => 1295,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 472,
				'm_product_id' => 472,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			295 => 
			array (
				'id' => 1296,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 472,
				'm_product_id' => 472,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			296 => 
			array (
				'id' => 1297,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 473,
				'm_product_id' => 473,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			297 => 
			array (
				'id' => 1298,
				'name' => 'Giá Đại lý',
				'price' => 13000,
				'product_id' => 473,
				'm_product_id' => 473,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			298 => 
			array (
				'id' => 1299,
				'name' => 'Giá Shop',
				'price' => 13500,
				'product_id' => 473,
				'm_product_id' => 473,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			299 => 
			array (
				'id' => 1300,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 473,
				'm_product_id' => 473,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			300 => 
			array (
				'id' => 1301,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 474,
				'm_product_id' => 474,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			301 => 
			array (
				'id' => 1302,
				'name' => 'Giá Đại lý',
				'price' => 28000,
				'product_id' => 474,
				'm_product_id' => 474,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			302 => 
			array (
				'id' => 1303,
				'name' => 'Giá Shop',
				'price' => 28500,
				'product_id' => 474,
				'm_product_id' => 474,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			303 => 
			array (
				'id' => 1304,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 474,
				'm_product_id' => 474,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			304 => 
			array (
				'id' => 1305,
				'name' => 'Giá NPP',
				'price' => 29000,
				'product_id' => 475,
				'm_product_id' => 475,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			305 => 
			array (
				'id' => 1306,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 475,
				'm_product_id' => 475,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			306 => 
			array (
				'id' => 1307,
				'name' => 'Giá Shop',
				'price' => 30500,
				'product_id' => 475,
				'm_product_id' => 475,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			307 => 
			array (
				'id' => 1308,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 475,
				'm_product_id' => 475,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			308 => 
			array (
				'id' => 1309,
				'name' => 'Giá NPP',
				'price' => 12500,
				'product_id' => 476,
				'm_product_id' => 476,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			309 => 
			array (
				'id' => 1310,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 476,
				'm_product_id' => 476,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			310 => 
			array (
				'id' => 1311,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 476,
				'm_product_id' => 476,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			311 => 
			array (
				'id' => 1312,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 476,
				'm_product_id' => 476,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			312 => 
			array (
				'id' => 1313,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 477,
				'm_product_id' => 477,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			313 => 
			array (
				'id' => 1314,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 477,
				'm_product_id' => 477,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			314 => 
			array (
				'id' => 1315,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 477,
				'm_product_id' => 477,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			315 => 
			array (
				'id' => 1316,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 477,
				'm_product_id' => 477,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			316 => 
			array (
				'id' => 1317,
				'name' => 'Giá NPP',
				'price' => 105000,
				'product_id' => 478,
				'm_product_id' => 478,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			317 => 
			array (
				'id' => 1318,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 478,
				'm_product_id' => 478,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			318 => 
			array (
				'id' => 1319,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 478,
				'm_product_id' => 478,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			319 => 
			array (
				'id' => 1320,
				'name' => 'Giá Bán lẻ',
				'price' => 180000,
				'product_id' => 478,
				'm_product_id' => 478,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			320 => 
			array (
				'id' => 1321,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 479,
				'm_product_id' => 479,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			321 => 
			array (
				'id' => 1322,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 479,
				'm_product_id' => 479,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			322 => 
			array (
				'id' => 1323,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 479,
				'm_product_id' => 479,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			323 => 
			array (
				'id' => 1324,
				'name' => 'Giá Bán lẻ',
				'price' => 75000,
				'product_id' => 479,
				'm_product_id' => 479,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			324 => 
			array (
				'id' => 1325,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 480,
				'm_product_id' => 480,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			325 => 
			array (
				'id' => 1326,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 480,
				'm_product_id' => 480,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			326 => 
			array (
				'id' => 1327,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 481,
				'm_product_id' => 481,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			327 => 
			array (
				'id' => 1328,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 481,
				'm_product_id' => 481,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			328 => 
			array (
				'id' => 1329,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 481,
				'm_product_id' => 481,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			329 => 
			array (
				'id' => 1330,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 482,
				'm_product_id' => 482,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			330 => 
			array (
				'id' => 1331,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 483,
				'm_product_id' => 483,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			331 => 
			array (
				'id' => 1332,
				'name' => 'Giá Đại lý',
				'price' => 88000,
				'product_id' => 483,
				'm_product_id' => 483,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			332 => 
			array (
				'id' => 1333,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 484,
				'm_product_id' => 484,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			333 => 
			array (
				'id' => 1334,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 484,
				'm_product_id' => 484,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			334 => 
			array (
				'id' => 1335,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 484,
				'm_product_id' => 484,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			335 => 
			array (
				'id' => 1336,
				'name' => 'Giá NPP',
				'price' => 79000,
				'product_id' => 485,
				'm_product_id' => 485,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			336 => 
			array (
				'id' => 1337,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 485,
				'm_product_id' => 485,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			337 => 
			array (
				'id' => 1338,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 485,
				'm_product_id' => 485,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			338 => 
			array (
				'id' => 1339,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 486,
				'm_product_id' => 486,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			339 => 
			array (
				'id' => 1340,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 486,
				'm_product_id' => 486,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			340 => 
			array (
				'id' => 1341,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 486,
				'm_product_id' => 486,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			341 => 
			array (
				'id' => 1342,
				'name' => 'Giá Bán lẻ',
				'price' => 75000,
				'product_id' => 486,
				'm_product_id' => 486,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			342 => 
			array (
				'id' => 1343,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 487,
				'm_product_id' => 487,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			343 => 
			array (
				'id' => 1344,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 488,
				'm_product_id' => 488,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			344 => 
			array (
				'id' => 1345,
				'name' => 'Giá NPP',
				'price' => 21500,
				'product_id' => 489,
				'm_product_id' => 489,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			345 => 
			array (
				'id' => 1346,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 489,
				'm_product_id' => 489,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			346 => 
			array (
				'id' => 1347,
				'name' => 'Giá Shop',
				'price' => 22500,
				'product_id' => 489,
				'm_product_id' => 489,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			347 => 
			array (
				'id' => 1348,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 489,
				'm_product_id' => 489,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			348 => 
			array (
				'id' => 1349,
				'name' => 'Giá NPP',
				'price' => 22500,
				'product_id' => 490,
				'm_product_id' => 490,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			349 => 
			array (
				'id' => 1350,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 490,
				'm_product_id' => 490,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			350 => 
			array (
				'id' => 1351,
				'name' => 'Giá Shop',
				'price' => 23500,
				'product_id' => 490,
				'm_product_id' => 490,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			351 => 
			array (
				'id' => 1352,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 490,
				'm_product_id' => 490,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			352 => 
			array (
				'id' => 1353,
				'name' => 'Giá NPP',
				'price' => 23500,
				'product_id' => 491,
				'm_product_id' => 491,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			353 => 
			array (
				'id' => 1354,
				'name' => 'Giá Đại lý',
				'price' => 24000,
				'product_id' => 491,
				'm_product_id' => 491,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			354 => 
			array (
				'id' => 1355,
				'name' => 'Giá Shop',
				'price' => 24500,
				'product_id' => 491,
				'm_product_id' => 491,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			355 => 
			array (
				'id' => 1356,
				'name' => 'Giá Bán lẻ',
				'price' => 31000,
				'product_id' => 491,
				'm_product_id' => 491,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			356 => 
			array (
				'id' => 1357,
				'name' => 'Giá NPP',
				'price' => 24500,
				'product_id' => 492,
				'm_product_id' => 492,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			357 => 
			array (
				'id' => 1358,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 492,
				'm_product_id' => 492,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			358 => 
			array (
				'id' => 1359,
				'name' => 'Giá Shop',
				'price' => 25500,
				'product_id' => 492,
				'm_product_id' => 492,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			359 => 
			array (
				'id' => 1360,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 492,
				'm_product_id' => 492,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			360 => 
			array (
				'id' => 1361,
				'name' => 'Giá NPP',
				'price' => 25500,
				'product_id' => 493,
				'm_product_id' => 493,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			361 => 
			array (
				'id' => 1362,
				'name' => 'Giá Đại lý',
				'price' => 26000,
				'product_id' => 493,
				'm_product_id' => 493,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			362 => 
			array (
				'id' => 1363,
				'name' => 'Giá Shop',
				'price' => 26500,
				'product_id' => 493,
				'm_product_id' => 493,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			363 => 
			array (
				'id' => 1364,
				'name' => 'Giá Bán lẻ',
				'price' => 33000,
				'product_id' => 493,
				'm_product_id' => 493,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			364 => 
			array (
				'id' => 1365,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 494,
				'm_product_id' => 494,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			365 => 
			array (
				'id' => 1366,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 494,
				'm_product_id' => 494,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			366 => 
			array (
				'id' => 1367,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 494,
				'm_product_id' => 494,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			367 => 
			array (
				'id' => 1368,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 494,
				'm_product_id' => 494,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			368 => 
			array (
				'id' => 1369,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 495,
				'm_product_id' => 495,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			369 => 
			array (
				'id' => 1370,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 495,
				'm_product_id' => 495,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			370 => 
			array (
				'id' => 1371,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 495,
				'm_product_id' => 495,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			371 => 
			array (
				'id' => 1372,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 495,
				'm_product_id' => 495,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			372 => 
			array (
				'id' => 1373,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 496,
				'm_product_id' => 496,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			373 => 
			array (
				'id' => 1374,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 496,
				'm_product_id' => 496,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			374 => 
			array (
				'id' => 1375,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 496,
				'm_product_id' => 496,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			375 => 
			array (
				'id' => 1376,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 496,
				'm_product_id' => 496,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			376 => 
			array (
				'id' => 1377,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 497,
				'm_product_id' => 497,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			377 => 
			array (
				'id' => 1378,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 497,
				'm_product_id' => 497,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			378 => 
			array (
				'id' => 1379,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 497,
				'm_product_id' => 497,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			379 => 
			array (
				'id' => 1380,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 497,
				'm_product_id' => 497,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			380 => 
			array (
				'id' => 1381,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 498,
				'm_product_id' => 498,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			381 => 
			array (
				'id' => 1382,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 498,
				'm_product_id' => 498,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			382 => 
			array (
				'id' => 1383,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 498,
				'm_product_id' => 498,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			383 => 
			array (
				'id' => 1384,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 498,
				'm_product_id' => 498,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			384 => 
			array (
				'id' => 1385,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 499,
				'm_product_id' => 499,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			385 => 
			array (
				'id' => 1386,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 499,
				'm_product_id' => 499,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			386 => 
			array (
				'id' => 1387,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 499,
				'm_product_id' => 499,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			387 => 
			array (
				'id' => 1388,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 499,
				'm_product_id' => 499,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			388 => 
			array (
				'id' => 1389,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 500,
				'm_product_id' => 500,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			389 => 
			array (
				'id' => 1390,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 500,
				'm_product_id' => 500,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			390 => 
			array (
				'id' => 1391,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 500,
				'm_product_id' => 500,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			391 => 
			array (
				'id' => 1392,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 500,
				'm_product_id' => 500,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			392 => 
			array (
				'id' => 1393,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 501,
				'm_product_id' => 501,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			393 => 
			array (
				'id' => 1394,
				'name' => 'Giá Đại lý',
				'price' => 25500,
				'product_id' => 501,
				'm_product_id' => 501,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			394 => 
			array (
				'id' => 1395,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 501,
				'm_product_id' => 501,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			395 => 
			array (
				'id' => 1396,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 501,
				'm_product_id' => 501,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			396 => 
			array (
				'id' => 1397,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 502,
				'm_product_id' => 502,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			397 => 
			array (
				'id' => 1398,
				'name' => 'Giá Đại lý',
				'price' => 27500,
				'product_id' => 502,
				'm_product_id' => 502,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			398 => 
			array (
				'id' => 1399,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 502,
				'm_product_id' => 502,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			399 => 
			array (
				'id' => 1400,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 502,
				'm_product_id' => 502,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			400 => 
			array (
				'id' => 1401,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 503,
				'm_product_id' => 503,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			401 => 
			array (
				'id' => 1402,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 503,
				'm_product_id' => 503,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			402 => 
			array (
				'id' => 1403,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 503,
				'm_product_id' => 503,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			403 => 
			array (
				'id' => 1404,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 503,
				'm_product_id' => 503,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			404 => 
			array (
				'id' => 1405,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 504,
				'm_product_id' => 504,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			405 => 
			array (
				'id' => 1406,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 504,
				'm_product_id' => 504,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			406 => 
			array (
				'id' => 1407,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 504,
				'm_product_id' => 504,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			407 => 
			array (
				'id' => 1408,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 504,
				'm_product_id' => 504,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			408 => 
			array (
				'id' => 1409,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 505,
				'm_product_id' => 505,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			409 => 
			array (
				'id' => 1410,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 505,
				'm_product_id' => 505,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			410 => 
			array (
				'id' => 1411,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 505,
				'm_product_id' => 505,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			411 => 
			array (
				'id' => 1412,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 505,
				'm_product_id' => 505,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			412 => 
			array (
				'id' => 1413,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 506,
				'm_product_id' => 506,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			413 => 
			array (
				'id' => 1414,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 506,
				'm_product_id' => 506,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			414 => 
			array (
				'id' => 1415,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 506,
				'm_product_id' => 506,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			415 => 
			array (
				'id' => 1416,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 506,
				'm_product_id' => 506,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			416 => 
			array (
				'id' => 1417,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 507,
				'm_product_id' => 507,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			417 => 
			array (
				'id' => 1418,
				'name' => 'Giá Đại lý',
				'price' => 54000,
				'product_id' => 507,
				'm_product_id' => 507,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			418 => 
			array (
				'id' => 1419,
				'name' => 'Giá Shop',
				'price' => 56000,
				'product_id' => 507,
				'm_product_id' => 507,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			419 => 
			array (
				'id' => 1420,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 507,
				'm_product_id' => 507,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			420 => 
			array (
				'id' => 1421,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 508,
				'm_product_id' => 508,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			421 => 
			array (
				'id' => 1422,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 508,
				'm_product_id' => 508,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			422 => 
			array (
				'id' => 1423,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 508,
				'm_product_id' => 508,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			423 => 
			array (
				'id' => 1424,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 508,
				'm_product_id' => 508,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			424 => 
			array (
				'id' => 1425,
				'name' => 'Giá NPP',
				'price' => 66000,
				'product_id' => 509,
				'm_product_id' => 509,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			425 => 
			array (
				'id' => 1426,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 509,
				'm_product_id' => 509,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			426 => 
			array (
				'id' => 1427,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 509,
				'm_product_id' => 509,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			427 => 
			array (
				'id' => 1428,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 509,
				'm_product_id' => 509,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			428 => 
			array (
				'id' => 1429,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 510,
				'm_product_id' => 510,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			429 => 
			array (
				'id' => 1430,
				'name' => 'Giá Đại lý',
				'price' => 26500,
				'product_id' => 510,
				'm_product_id' => 510,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			430 => 
			array (
				'id' => 1431,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 510,
				'm_product_id' => 510,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			431 => 
			array (
				'id' => 1432,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 510,
				'm_product_id' => 510,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			432 => 
			array (
				'id' => 1433,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 511,
				'm_product_id' => 511,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			433 => 
			array (
				'id' => 1434,
				'name' => 'Giá Đại lý',
				'price' => 28500,
				'product_id' => 511,
				'm_product_id' => 511,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			434 => 
			array (
				'id' => 1435,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 511,
				'm_product_id' => 511,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			435 => 
			array (
				'id' => 1436,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 511,
				'm_product_id' => 511,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			436 => 
			array (
				'id' => 1437,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 512,
				'm_product_id' => 512,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			437 => 
			array (
				'id' => 1438,
				'name' => 'Giá Đại lý',
				'price' => 30500,
				'product_id' => 512,
				'm_product_id' => 512,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			438 => 
			array (
				'id' => 1439,
				'name' => 'Giá Shop',
				'price' => 31000,
				'product_id' => 512,
				'm_product_id' => 512,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			439 => 
			array (
				'id' => 1440,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 512,
				'm_product_id' => 512,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			440 => 
			array (
				'id' => 1441,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 513,
				'm_product_id' => 513,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			441 => 
			array (
				'id' => 1442,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 513,
				'm_product_id' => 513,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			442 => 
			array (
				'id' => 1443,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 513,
				'm_product_id' => 513,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			443 => 
			array (
				'id' => 1444,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 513,
				'm_product_id' => 513,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			444 => 
			array (
				'id' => 1445,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 514,
				'm_product_id' => 514,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			445 => 
			array (
				'id' => 1446,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 514,
				'm_product_id' => 514,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			446 => 
			array (
				'id' => 1447,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 514,
				'm_product_id' => 514,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			447 => 
			array (
				'id' => 1448,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 514,
				'm_product_id' => 514,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			448 => 
			array (
				'id' => 1449,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 515,
				'm_product_id' => 515,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			449 => 
			array (
				'id' => 1450,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 515,
				'm_product_id' => 515,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			450 => 
			array (
				'id' => 1451,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 515,
				'm_product_id' => 515,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			451 => 
			array (
				'id' => 1452,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 515,
				'm_product_id' => 515,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			452 => 
			array (
				'id' => 1453,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 516,
				'm_product_id' => 516,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			453 => 
			array (
				'id' => 1454,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 516,
				'm_product_id' => 516,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			454 => 
			array (
				'id' => 1455,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 516,
				'm_product_id' => 516,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			455 => 
			array (
				'id' => 1456,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 516,
				'm_product_id' => 516,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			456 => 
			array (
				'id' => 1457,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 517,
				'm_product_id' => 517,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			457 => 
			array (
				'id' => 1458,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 517,
				'm_product_id' => 517,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			458 => 
			array (
				'id' => 1459,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 517,
				'm_product_id' => 517,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			459 => 
			array (
				'id' => 1460,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 517,
				'm_product_id' => 517,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			460 => 
			array (
				'id' => 1461,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 518,
				'm_product_id' => 518,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			461 => 
			array (
				'id' => 1462,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 518,
				'm_product_id' => 518,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			462 => 
			array (
				'id' => 1463,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 518,
				'm_product_id' => 518,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			463 => 
			array (
				'id' => 1464,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 518,
				'm_product_id' => 518,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			464 => 
			array (
				'id' => 1465,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 519,
				'm_product_id' => 519,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			465 => 
			array (
				'id' => 1466,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 519,
				'm_product_id' => 519,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			466 => 
			array (
				'id' => 1467,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 519,
				'm_product_id' => 519,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			467 => 
			array (
				'id' => 1468,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 519,
				'm_product_id' => 519,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			468 => 
			array (
				'id' => 1469,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 520,
				'm_product_id' => 520,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			469 => 
			array (
				'id' => 1470,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 520,
				'm_product_id' => 520,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			470 => 
			array (
				'id' => 1471,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 520,
				'm_product_id' => 520,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			471 => 
			array (
				'id' => 1472,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 520,
				'm_product_id' => 520,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			472 => 
			array (
				'id' => 1473,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 521,
				'm_product_id' => 521,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			473 => 
			array (
				'id' => 1474,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 521,
				'm_product_id' => 521,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			474 => 
			array (
				'id' => 1475,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 521,
				'm_product_id' => 521,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			475 => 
			array (
				'id' => 1476,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 521,
				'm_product_id' => 521,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			476 => 
			array (
				'id' => 1477,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 522,
				'm_product_id' => 522,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			477 => 
			array (
				'id' => 1478,
				'name' => 'Giá Đại lý',
				'price' => 25500,
				'product_id' => 522,
				'm_product_id' => 522,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			478 => 
			array (
				'id' => 1479,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 522,
				'm_product_id' => 522,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			479 => 
			array (
				'id' => 1480,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 522,
				'm_product_id' => 522,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			480 => 
			array (
				'id' => 1481,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 523,
				'm_product_id' => 523,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			481 => 
			array (
				'id' => 1482,
				'name' => 'Giá Đại lý',
				'price' => 27500,
				'product_id' => 523,
				'm_product_id' => 523,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			482 => 
			array (
				'id' => 1483,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 523,
				'm_product_id' => 523,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			483 => 
			array (
				'id' => 1484,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 523,
				'm_product_id' => 523,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			484 => 
			array (
				'id' => 1485,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 524,
				'm_product_id' => 524,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			485 => 
			array (
				'id' => 1486,
				'name' => 'Giá Đại lý',
				'price' => 31500,
				'product_id' => 524,
				'm_product_id' => 524,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			486 => 
			array (
				'id' => 1487,
				'name' => 'Giá Shop',
				'price' => 32000,
				'product_id' => 524,
				'm_product_id' => 524,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			487 => 
			array (
				'id' => 1488,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 524,
				'm_product_id' => 524,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			488 => 
			array (
				'id' => 1489,
				'name' => 'Giá NPP',
				'price' => 33000,
				'product_id' => 525,
				'm_product_id' => 525,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			489 => 
			array (
				'id' => 1490,
				'name' => 'Giá Đại lý',
				'price' => 33500,
				'product_id' => 525,
				'm_product_id' => 525,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			490 => 
			array (
				'id' => 1491,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 525,
				'm_product_id' => 525,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			491 => 
			array (
				'id' => 1492,
				'name' => 'Giá Bán lẻ',
				'price' => 40000,
				'product_id' => 525,
				'm_product_id' => 525,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			492 => 
			array (
				'id' => 1493,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 526,
				'm_product_id' => 526,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			493 => 
			array (
				'id' => 1494,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 526,
				'm_product_id' => 526,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			494 => 
			array (
				'id' => 1495,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 526,
				'm_product_id' => 526,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			495 => 
			array (
				'id' => 1496,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 526,
				'm_product_id' => 526,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			496 => 
			array (
				'id' => 1497,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 527,
				'm_product_id' => 527,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			497 => 
			array (
				'id' => 1498,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 527,
				'm_product_id' => 527,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			498 => 
			array (
				'id' => 1499,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 527,
				'm_product_id' => 527,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			499 => 
			array (
				'id' => 1500,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 527,
				'm_product_id' => 527,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 1501,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 528,
				'm_product_id' => 528,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			1 => 
			array (
				'id' => 1502,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 528,
				'm_product_id' => 528,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			2 => 
			array (
				'id' => 1503,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 528,
				'm_product_id' => 528,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			3 => 
			array (
				'id' => 1504,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 528,
				'm_product_id' => 528,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			4 => 
			array (
				'id' => 1505,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 529,
				'm_product_id' => 529,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			5 => 
			array (
				'id' => 1506,
				'name' => 'Giá Đại lý',
				'price' => 28500,
				'product_id' => 529,
				'm_product_id' => 529,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			6 => 
			array (
				'id' => 1507,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 529,
				'm_product_id' => 529,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			7 => 
			array (
				'id' => 1508,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 529,
				'm_product_id' => 529,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			8 => 
			array (
				'id' => 1509,
				'name' => 'Giá NPP',
				'price' => 32000,
				'product_id' => 530,
				'm_product_id' => 530,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			9 => 
			array (
				'id' => 1510,
				'name' => 'Giá Đại lý',
				'price' => 32500,
				'product_id' => 530,
				'm_product_id' => 530,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			10 => 
			array (
				'id' => 1511,
				'name' => 'Giá Shop',
				'price' => 33000,
				'product_id' => 530,
				'm_product_id' => 530,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			11 => 
			array (
				'id' => 1512,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 530,
				'm_product_id' => 530,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			12 => 
			array (
				'id' => 1513,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 531,
				'm_product_id' => 531,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			13 => 
			array (
				'id' => 1514,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 531,
				'm_product_id' => 531,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			14 => 
			array (
				'id' => 1515,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 531,
				'm_product_id' => 531,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			15 => 
			array (
				'id' => 1516,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 531,
				'm_product_id' => 531,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			16 => 
			array (
				'id' => 1517,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 532,
				'm_product_id' => 532,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			17 => 
			array (
				'id' => 1518,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 532,
				'm_product_id' => 532,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			18 => 
			array (
				'id' => 1519,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 532,
				'm_product_id' => 532,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			19 => 
			array (
				'id' => 1520,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 532,
				'm_product_id' => 532,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			20 => 
			array (
				'id' => 1521,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 533,
				'm_product_id' => 533,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			21 => 
			array (
				'id' => 1522,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 533,
				'm_product_id' => 533,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			22 => 
			array (
				'id' => 1523,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 533,
				'm_product_id' => 533,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			23 => 
			array (
				'id' => 1524,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 533,
				'm_product_id' => 533,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			24 => 
			array (
				'id' => 1525,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 534,
				'm_product_id' => 534,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			25 => 
			array (
				'id' => 1526,
				'name' => 'Giá Đại lý',
				'price' => 25500,
				'product_id' => 534,
				'm_product_id' => 534,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			26 => 
			array (
				'id' => 1527,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 534,
				'm_product_id' => 534,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			27 => 
			array (
				'id' => 1528,
				'name' => 'Giá Bán lẻ',
				'price' => 31000,
				'product_id' => 534,
				'm_product_id' => 534,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			28 => 
			array (
				'id' => 1529,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 535,
				'm_product_id' => 535,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			29 => 
			array (
				'id' => 1530,
				'name' => 'Giá Đại lý',
				'price' => 26500,
				'product_id' => 535,
				'm_product_id' => 535,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			30 => 
			array (
				'id' => 1531,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 535,
				'm_product_id' => 535,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			31 => 
			array (
				'id' => 1532,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 535,
				'm_product_id' => 535,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			32 => 
			array (
				'id' => 1533,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 536,
				'm_product_id' => 536,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			33 => 
			array (
				'id' => 1534,
				'name' => 'Giá Đại lý',
				'price' => 28500,
				'product_id' => 536,
				'm_product_id' => 536,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			34 => 
			array (
				'id' => 1535,
				'name' => 'Giá Shop',
				'price' => 29000,
				'product_id' => 536,
				'm_product_id' => 536,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			35 => 
			array (
				'id' => 1536,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 536,
				'm_product_id' => 536,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			36 => 
			array (
				'id' => 1537,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 537,
				'm_product_id' => 537,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			37 => 
			array (
				'id' => 1538,
				'name' => 'Giá Đại lý',
				'price' => 30500,
				'product_id' => 537,
				'm_product_id' => 537,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			38 => 
			array (
				'id' => 1539,
				'name' => 'Giá Shop',
				'price' => 31000,
				'product_id' => 537,
				'm_product_id' => 537,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			39 => 
			array (
				'id' => 1540,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 537,
				'm_product_id' => 537,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			40 => 
			array (
				'id' => 1541,
				'name' => 'Giá NPP',
				'price' => 32000,
				'product_id' => 538,
				'm_product_id' => 538,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			41 => 
			array (
				'id' => 1542,
				'name' => 'Giá Đại lý',
				'price' => 32500,
				'product_id' => 538,
				'm_product_id' => 538,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			42 => 
			array (
				'id' => 1543,
				'name' => 'Giá Shop',
				'price' => 33000,
				'product_id' => 538,
				'm_product_id' => 538,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			43 => 
			array (
				'id' => 1544,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 538,
				'm_product_id' => 538,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			44 => 
			array (
				'id' => 1545,
				'name' => 'Giá NPP',
				'price' => 34000,
				'product_id' => 539,
				'm_product_id' => 539,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			45 => 
			array (
				'id' => 1546,
				'name' => 'Giá Đại lý',
				'price' => 34500,
				'product_id' => 539,
				'm_product_id' => 539,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			46 => 
			array (
				'id' => 1547,
				'name' => 'Giá Shop',
				'price' => 35000,
				'product_id' => 539,
				'm_product_id' => 539,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			47 => 
			array (
				'id' => 1548,
				'name' => 'Giá Bán lẻ',
				'price' => 40000,
				'product_id' => 539,
				'm_product_id' => 539,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			48 => 
			array (
				'id' => 1549,
				'name' => 'Giá NPP',
				'price' => 36000,
				'product_id' => 540,
				'm_product_id' => 540,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			49 => 
			array (
				'id' => 1550,
				'name' => 'Giá Đại lý',
				'price' => 36500,
				'product_id' => 540,
				'm_product_id' => 540,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			50 => 
			array (
				'id' => 1551,
				'name' => 'Giá Shop',
				'price' => 37000,
				'product_id' => 540,
				'm_product_id' => 540,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			51 => 
			array (
				'id' => 1552,
				'name' => 'Giá Bán lẻ',
				'price' => 42000,
				'product_id' => 540,
				'm_product_id' => 540,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			52 => 
			array (
				'id' => 1553,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 541,
				'm_product_id' => 541,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			53 => 
			array (
				'id' => 1554,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 541,
				'm_product_id' => 541,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			54 => 
			array (
				'id' => 1555,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 541,
				'm_product_id' => 541,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			55 => 
			array (
				'id' => 1556,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 541,
				'm_product_id' => 541,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			56 => 
			array (
				'id' => 1557,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 542,
				'm_product_id' => 542,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			57 => 
			array (
				'id' => 1558,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 542,
				'm_product_id' => 542,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			58 => 
			array (
				'id' => 1559,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 542,
				'm_product_id' => 542,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			59 => 
			array (
				'id' => 1560,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 542,
				'm_product_id' => 542,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			60 => 
			array (
				'id' => 1561,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 543,
				'm_product_id' => 543,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			61 => 
			array (
				'id' => 1562,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 543,
				'm_product_id' => 543,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			62 => 
			array (
				'id' => 1563,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 543,
				'm_product_id' => 543,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			63 => 
			array (
				'id' => 1564,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 543,
				'm_product_id' => 543,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			64 => 
			array (
				'id' => 1565,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 544,
				'm_product_id' => 544,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			65 => 
			array (
				'id' => 1566,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 544,
				'm_product_id' => 544,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			66 => 
			array (
				'id' => 1567,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 544,
				'm_product_id' => 544,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			67 => 
			array (
				'id' => 1568,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 544,
				'm_product_id' => 544,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			68 => 
			array (
				'id' => 1569,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 545,
				'm_product_id' => 545,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			69 => 
			array (
				'id' => 1570,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 545,
				'm_product_id' => 545,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			70 => 
			array (
				'id' => 1571,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 545,
				'm_product_id' => 545,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			71 => 
			array (
				'id' => 1572,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 545,
				'm_product_id' => 545,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			72 => 
			array (
				'id' => 1573,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 546,
				'm_product_id' => 546,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			73 => 
			array (
				'id' => 1574,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 546,
				'm_product_id' => 546,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			74 => 
			array (
				'id' => 1575,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 546,
				'm_product_id' => 546,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			75 => 
			array (
				'id' => 1576,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 546,
				'm_product_id' => 546,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			76 => 
			array (
				'id' => 1577,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 547,
				'm_product_id' => 547,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			77 => 
			array (
				'id' => 1578,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 547,
				'm_product_id' => 547,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			78 => 
			array (
				'id' => 1579,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 547,
				'm_product_id' => 547,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			79 => 
			array (
				'id' => 1580,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 547,
				'm_product_id' => 547,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			80 => 
			array (
				'id' => 1581,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 548,
				'm_product_id' => 548,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			81 => 
			array (
				'id' => 1582,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 548,
				'm_product_id' => 548,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			82 => 
			array (
				'id' => 1583,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 548,
				'm_product_id' => 548,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			83 => 
			array (
				'id' => 1584,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 548,
				'm_product_id' => 548,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			84 => 
			array (
				'id' => 1585,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 549,
				'm_product_id' => 549,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			85 => 
			array (
				'id' => 1586,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 549,
				'm_product_id' => 549,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			86 => 
			array (
				'id' => 1587,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 549,
				'm_product_id' => 549,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			87 => 
			array (
				'id' => 1588,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 549,
				'm_product_id' => 549,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			88 => 
			array (
				'id' => 1589,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 550,
				'm_product_id' => 550,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			89 => 
			array (
				'id' => 1590,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 550,
				'm_product_id' => 550,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			90 => 
			array (
				'id' => 1591,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 550,
				'm_product_id' => 550,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			91 => 
			array (
				'id' => 1592,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 550,
				'm_product_id' => 550,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			92 => 
			array (
				'id' => 1593,
				'name' => 'Giá NPP',
				'price' => 21500,
				'product_id' => 551,
				'm_product_id' => 551,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			93 => 
			array (
				'id' => 1594,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 551,
				'm_product_id' => 551,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			94 => 
			array (
				'id' => 1595,
				'name' => 'Giá Shop',
				'price' => 22500,
				'product_id' => 551,
				'm_product_id' => 551,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			95 => 
			array (
				'id' => 1596,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 551,
				'm_product_id' => 551,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			96 => 
			array (
				'id' => 1597,
				'name' => 'Giá NPP',
				'price' => 22500,
				'product_id' => 552,
				'm_product_id' => 552,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			97 => 
			array (
				'id' => 1598,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 552,
				'm_product_id' => 552,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			98 => 
			array (
				'id' => 1599,
				'name' => 'Giá Shop',
				'price' => 23500,
				'product_id' => 552,
				'm_product_id' => 552,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			99 => 
			array (
				'id' => 1600,
				'name' => 'Giá Bán lẻ',
				'price' => 31000,
				'product_id' => 552,
				'm_product_id' => 552,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			100 => 
			array (
				'id' => 1601,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 553,
				'm_product_id' => 553,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			101 => 
			array (
				'id' => 1602,
				'name' => 'Giá Đại lý',
				'price' => 13000,
				'product_id' => 553,
				'm_product_id' => 553,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			102 => 
			array (
				'id' => 1603,
				'name' => 'Giá Shop',
				'price' => 13500,
				'product_id' => 553,
				'm_product_id' => 553,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			103 => 
			array (
				'id' => 1604,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 553,
				'm_product_id' => 553,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			104 => 
			array (
				'id' => 1605,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 554,
				'm_product_id' => 554,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			105 => 
			array (
				'id' => 1606,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 554,
				'm_product_id' => 554,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			106 => 
			array (
				'id' => 1607,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 554,
				'm_product_id' => 554,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			107 => 
			array (
				'id' => 1608,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 554,
				'm_product_id' => 554,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			108 => 
			array (
				'id' => 1609,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 555,
				'm_product_id' => 555,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			109 => 
			array (
				'id' => 1610,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 555,
				'm_product_id' => 555,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			110 => 
			array (
				'id' => 1611,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 555,
				'm_product_id' => 555,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			111 => 
			array (
				'id' => 1612,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 555,
				'm_product_id' => 555,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			112 => 
			array (
				'id' => 1613,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 556,
				'm_product_id' => 556,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			113 => 
			array (
				'id' => 1614,
				'name' => 'Giá Đại lý',
				'price' => 30500,
				'product_id' => 556,
				'm_product_id' => 556,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			114 => 
			array (
				'id' => 1615,
				'name' => 'Giá Shop',
				'price' => 31000,
				'product_id' => 556,
				'm_product_id' => 556,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			115 => 
			array (
				'id' => 1616,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 556,
				'm_product_id' => 556,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			116 => 
			array (
				'id' => 1617,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 557,
				'm_product_id' => 557,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			117 => 
			array (
				'id' => 1618,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 557,
				'm_product_id' => 557,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			118 => 
			array (
				'id' => 1619,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 557,
				'm_product_id' => 557,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			119 => 
			array (
				'id' => 1620,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 557,
				'm_product_id' => 557,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			120 => 
			array (
				'id' => 1621,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 558,
				'm_product_id' => 558,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			121 => 
			array (
				'id' => 1622,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 558,
				'm_product_id' => 558,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			122 => 
			array (
				'id' => 1623,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 558,
				'm_product_id' => 558,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			123 => 
			array (
				'id' => 1624,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 558,
				'm_product_id' => 558,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			124 => 
			array (
				'id' => 1625,
				'name' => 'Giá NPP',
				'price' => 29000,
				'product_id' => 559,
				'm_product_id' => 559,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			125 => 
			array (
				'id' => 1626,
				'name' => 'Giá Đại lý',
				'price' => 29500,
				'product_id' => 559,
				'm_product_id' => 559,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			126 => 
			array (
				'id' => 1627,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 559,
				'm_product_id' => 559,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			127 => 
			array (
				'id' => 1628,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 559,
				'm_product_id' => 559,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			128 => 
			array (
				'id' => 1629,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 560,
				'm_product_id' => 560,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			129 => 
			array (
				'id' => 1630,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 560,
				'm_product_id' => 560,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			130 => 
			array (
				'id' => 1631,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 560,
				'm_product_id' => 560,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			131 => 
			array (
				'id' => 1632,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 560,
				'm_product_id' => 560,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			132 => 
			array (
				'id' => 1633,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 561,
				'm_product_id' => 561,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			133 => 
			array (
				'id' => 1634,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 561,
				'm_product_id' => 561,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			134 => 
			array (
				'id' => 1635,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 561,
				'm_product_id' => 561,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			135 => 
			array (
				'id' => 1636,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 561,
				'm_product_id' => 561,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			136 => 
			array (
				'id' => 1637,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 562,
				'm_product_id' => 562,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			137 => 
			array (
				'id' => 1638,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 562,
				'm_product_id' => 562,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			138 => 
			array (
				'id' => 1639,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 562,
				'm_product_id' => 562,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			139 => 
			array (
				'id' => 1640,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 562,
				'm_product_id' => 562,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			140 => 
			array (
				'id' => 1641,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 563,
				'm_product_id' => 563,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			141 => 
			array (
				'id' => 1642,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 563,
				'm_product_id' => 563,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			142 => 
			array (
				'id' => 1643,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 563,
				'm_product_id' => 563,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			143 => 
			array (
				'id' => 1644,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 563,
				'm_product_id' => 563,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			144 => 
			array (
				'id' => 1645,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 564,
				'm_product_id' => 564,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			145 => 
			array (
				'id' => 1646,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 564,
				'm_product_id' => 564,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			146 => 
			array (
				'id' => 1647,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 564,
				'm_product_id' => 564,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			147 => 
			array (
				'id' => 1648,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 564,
				'm_product_id' => 564,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			148 => 
			array (
				'id' => 1649,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 565,
				'm_product_id' => 565,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			149 => 
			array (
				'id' => 1650,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 565,
				'm_product_id' => 565,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			150 => 
			array (
				'id' => 1651,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 565,
				'm_product_id' => 565,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			151 => 
			array (
				'id' => 1652,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 565,
				'm_product_id' => 565,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			152 => 
			array (
				'id' => 1653,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 566,
				'm_product_id' => 566,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			153 => 
			array (
				'id' => 1654,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 566,
				'm_product_id' => 566,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			154 => 
			array (
				'id' => 1655,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 566,
				'm_product_id' => 566,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			155 => 
			array (
				'id' => 1656,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 566,
				'm_product_id' => 566,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			156 => 
			array (
				'id' => 1657,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 567,
				'm_product_id' => 567,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			157 => 
			array (
				'id' => 1658,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 567,
				'm_product_id' => 567,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			158 => 
			array (
				'id' => 1659,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 567,
				'm_product_id' => 567,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			159 => 
			array (
				'id' => 1660,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 567,
				'm_product_id' => 567,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			160 => 
			array (
				'id' => 1661,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 568,
				'm_product_id' => 568,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			161 => 
			array (
				'id' => 1662,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 568,
				'm_product_id' => 568,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			162 => 
			array (
				'id' => 1663,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 568,
				'm_product_id' => 568,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			163 => 
			array (
				'id' => 1664,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 568,
				'm_product_id' => 568,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			164 => 
			array (
				'id' => 1665,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 569,
				'm_product_id' => 569,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			165 => 
			array (
				'id' => 1666,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 569,
				'm_product_id' => 569,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			166 => 
			array (
				'id' => 1667,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 569,
				'm_product_id' => 569,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			167 => 
			array (
				'id' => 1668,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 569,
				'm_product_id' => 569,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			168 => 
			array (
				'id' => 1669,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 570,
				'm_product_id' => 570,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			169 => 
			array (
				'id' => 1670,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 570,
				'm_product_id' => 570,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			170 => 
			array (
				'id' => 1671,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 570,
				'm_product_id' => 570,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			171 => 
			array (
				'id' => 1672,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 570,
				'm_product_id' => 570,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			172 => 
			array (
				'id' => 1673,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 571,
				'm_product_id' => 571,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			173 => 
			array (
				'id' => 1674,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 571,
				'm_product_id' => 571,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			174 => 
			array (
				'id' => 1675,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 571,
				'm_product_id' => 571,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			175 => 
			array (
				'id' => 1676,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 571,
				'm_product_id' => 571,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			176 => 
			array (
				'id' => 1677,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 572,
				'm_product_id' => 572,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			177 => 
			array (
				'id' => 1678,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 572,
				'm_product_id' => 572,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			178 => 
			array (
				'id' => 1679,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 572,
				'm_product_id' => 572,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			179 => 
			array (
				'id' => 1680,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 572,
				'm_product_id' => 572,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			180 => 
			array (
				'id' => 1681,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 573,
				'm_product_id' => 573,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			181 => 
			array (
				'id' => 1682,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 573,
				'm_product_id' => 573,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			182 => 
			array (
				'id' => 1683,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 573,
				'm_product_id' => 573,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			183 => 
			array (
				'id' => 1684,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 573,
				'm_product_id' => 573,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			184 => 
			array (
				'id' => 1685,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 574,
				'm_product_id' => 574,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			185 => 
			array (
				'id' => 1686,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 574,
				'm_product_id' => 574,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			186 => 
			array (
				'id' => 1687,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 574,
				'm_product_id' => 574,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			187 => 
			array (
				'id' => 1688,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 574,
				'm_product_id' => 574,
				'created_at' => '2015-08-05 08:54:36',
				'updated_at' => '2015-08-05 08:54:36',
			),
			188 => 
			array (
				'id' => 1689,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 575,
				'm_product_id' => 575,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			189 => 
			array (
				'id' => 1690,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 575,
				'm_product_id' => 575,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			190 => 
			array (
				'id' => 1691,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 575,
				'm_product_id' => 575,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			191 => 
			array (
				'id' => 1692,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 575,
				'm_product_id' => 575,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			192 => 
			array (
				'id' => 1693,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 576,
				'm_product_id' => 576,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			193 => 
			array (
				'id' => 1694,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 576,
				'm_product_id' => 576,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			194 => 
			array (
				'id' => 1695,
				'name' => 'Giá Shop',
				'price' => 20500,
				'product_id' => 576,
				'm_product_id' => 576,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			195 => 
			array (
				'id' => 1696,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 576,
				'm_product_id' => 576,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			196 => 
			array (
				'id' => 1697,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 577,
				'm_product_id' => 577,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			197 => 
			array (
				'id' => 1698,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 577,
				'm_product_id' => 577,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			198 => 
			array (
				'id' => 1699,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 577,
				'm_product_id' => 577,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			199 => 
			array (
				'id' => 1700,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 577,
				'm_product_id' => 577,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			200 => 
			array (
				'id' => 1701,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 578,
				'm_product_id' => 578,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			201 => 
			array (
				'id' => 1702,
				'name' => 'Giá Đại lý',
				'price' => 19500,
				'product_id' => 578,
				'm_product_id' => 578,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			202 => 
			array (
				'id' => 1703,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 578,
				'm_product_id' => 578,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			203 => 
			array (
				'id' => 1704,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 578,
				'm_product_id' => 578,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			204 => 
			array (
				'id' => 1705,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 579,
				'm_product_id' => 579,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			205 => 
			array (
				'id' => 1706,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 579,
				'm_product_id' => 579,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			206 => 
			array (
				'id' => 1707,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 579,
				'm_product_id' => 579,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			207 => 
			array (
				'id' => 1708,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 579,
				'm_product_id' => 579,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			208 => 
			array (
				'id' => 1709,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 580,
				'm_product_id' => 580,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			209 => 
			array (
				'id' => 1710,
				'name' => 'Giá Đại lý',
				'price' => 21500,
				'product_id' => 580,
				'm_product_id' => 580,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			210 => 
			array (
				'id' => 1711,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 580,
				'm_product_id' => 580,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			211 => 
			array (
				'id' => 1712,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 580,
				'm_product_id' => 580,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			212 => 
			array (
				'id' => 1713,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 581,
				'm_product_id' => 581,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			213 => 
			array (
				'id' => 1714,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 581,
				'm_product_id' => 581,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			214 => 
			array (
				'id' => 1715,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 581,
				'm_product_id' => 581,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			215 => 
			array (
				'id' => 1716,
				'name' => 'Giá Bán lẻ',
				'price' => 29000,
				'product_id' => 581,
				'm_product_id' => 581,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			216 => 
			array (
				'id' => 1717,
				'name' => 'Giá NPP',
				'price' => 23000,
				'product_id' => 582,
				'm_product_id' => 582,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			217 => 
			array (
				'id' => 1718,
				'name' => 'Giá Đại lý',
				'price' => 23500,
				'product_id' => 582,
				'm_product_id' => 582,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			218 => 
			array (
				'id' => 1719,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 582,
				'm_product_id' => 582,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			219 => 
			array (
				'id' => 1720,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 582,
				'm_product_id' => 582,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			220 => 
			array (
				'id' => 1721,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 583,
				'm_product_id' => 583,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			221 => 
			array (
				'id' => 1722,
				'name' => 'Giá Đại lý',
				'price' => 25500,
				'product_id' => 583,
				'm_product_id' => 583,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			222 => 
			array (
				'id' => 1723,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 583,
				'm_product_id' => 583,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			223 => 
			array (
				'id' => 1724,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 583,
				'm_product_id' => 583,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			224 => 
			array (
				'id' => 1725,
				'name' => 'Giá NPP',
				'price' => 27000,
				'product_id' => 584,
				'm_product_id' => 584,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			225 => 
			array (
				'id' => 1726,
				'name' => 'Giá Đại lý',
				'price' => 27500,
				'product_id' => 584,
				'm_product_id' => 584,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			226 => 
			array (
				'id' => 1727,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 584,
				'm_product_id' => 584,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			227 => 
			array (
				'id' => 1728,
				'name' => 'Giá Bán lẻ',
				'price' => 34000,
				'product_id' => 584,
				'm_product_id' => 584,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			228 => 
			array (
				'id' => 1729,
				'name' => 'Giá NPP',
				'price' => 29000,
				'product_id' => 585,
				'm_product_id' => 585,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			229 => 
			array (
				'id' => 1730,
				'name' => 'Giá Đại lý',
				'price' => 29500,
				'product_id' => 585,
				'm_product_id' => 585,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			230 => 
			array (
				'id' => 1731,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 585,
				'm_product_id' => 585,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			231 => 
			array (
				'id' => 1732,
				'name' => 'Giá Bán lẻ',
				'price' => 36000,
				'product_id' => 585,
				'm_product_id' => 585,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			232 => 
			array (
				'id' => 1733,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 586,
				'm_product_id' => 586,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			233 => 
			array (
				'id' => 1734,
				'name' => 'Giá Đại lý',
				'price' => 31500,
				'product_id' => 586,
				'm_product_id' => 586,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			234 => 
			array (
				'id' => 1735,
				'name' => 'Giá Shop',
				'price' => 32000,
				'product_id' => 586,
				'm_product_id' => 586,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			235 => 
			array (
				'id' => 1736,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 586,
				'm_product_id' => 586,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			236 => 
			array (
				'id' => 1737,
				'name' => 'Giá NPP',
				'price' => 33000,
				'product_id' => 587,
				'm_product_id' => 587,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			237 => 
			array (
				'id' => 1738,
				'name' => 'Giá Đại lý',
				'price' => 33500,
				'product_id' => 587,
				'm_product_id' => 587,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			238 => 
			array (
				'id' => 1739,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 587,
				'm_product_id' => 587,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			239 => 
			array (
				'id' => 1740,
				'name' => 'Giá Bán lẻ',
				'price' => 40000,
				'product_id' => 587,
				'm_product_id' => 587,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			240 => 
			array (
				'id' => 1741,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 588,
				'm_product_id' => 588,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			241 => 
			array (
				'id' => 1742,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 588,
				'm_product_id' => 588,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			242 => 
			array (
				'id' => 1743,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 588,
				'm_product_id' => 588,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			243 => 
			array (
				'id' => 1744,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 588,
				'm_product_id' => 588,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			244 => 
			array (
				'id' => 1745,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 589,
				'm_product_id' => 589,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			245 => 
			array (
				'id' => 1746,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 589,
				'm_product_id' => 589,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			246 => 
			array (
				'id' => 1747,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 589,
				'm_product_id' => 589,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			247 => 
			array (
				'id' => 1748,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 589,
				'm_product_id' => 589,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			248 => 
			array (
				'id' => 1749,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 590,
				'm_product_id' => 590,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			249 => 
			array (
				'id' => 1750,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 590,
				'm_product_id' => 590,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			250 => 
			array (
				'id' => 1751,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 590,
				'm_product_id' => 590,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			251 => 
			array (
				'id' => 1752,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 590,
				'm_product_id' => 590,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			252 => 
			array (
				'id' => 1753,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 591,
				'm_product_id' => 591,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			253 => 
			array (
				'id' => 1754,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 591,
				'm_product_id' => 591,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			254 => 
			array (
				'id' => 1755,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 591,
				'm_product_id' => 591,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			255 => 
			array (
				'id' => 1756,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 591,
				'm_product_id' => 591,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			256 => 
			array (
				'id' => 1757,
				'name' => 'Giá NPP',
				'price' => 23500,
				'product_id' => 592,
				'm_product_id' => 592,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			257 => 
			array (
				'id' => 1758,
				'name' => 'Giá Đại lý',
				'price' => 24500,
				'product_id' => 592,
				'm_product_id' => 592,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			258 => 
			array (
				'id' => 1759,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 592,
				'm_product_id' => 592,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			259 => 
			array (
				'id' => 1760,
				'name' => 'Giá Bán lẻ',
				'price' => 30000,
				'product_id' => 592,
				'm_product_id' => 592,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			260 => 
			array (
				'id' => 1761,
				'name' => 'Giá NPP',
				'price' => 25500,
				'product_id' => 593,
				'm_product_id' => 593,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			261 => 
			array (
				'id' => 1762,
				'name' => 'Giá Đại lý',
				'price' => 26500,
				'product_id' => 593,
				'm_product_id' => 593,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			262 => 
			array (
				'id' => 1763,
				'name' => 'Giá Shop',
				'price' => 27000,
				'product_id' => 593,
				'm_product_id' => 593,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			263 => 
			array (
				'id' => 1764,
				'name' => 'Giá Bán lẻ',
				'price' => 32000,
				'product_id' => 593,
				'm_product_id' => 593,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			264 => 
			array (
				'id' => 1765,
				'name' => 'Giá NPP',
				'price' => 31500,
				'product_id' => 594,
				'm_product_id' => 594,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			265 => 
			array (
				'id' => 1766,
				'name' => 'Giá Đại lý',
				'price' => 32500,
				'product_id' => 594,
				'm_product_id' => 594,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			266 => 
			array (
				'id' => 1767,
				'name' => 'Giá Shop',
				'price' => 33000,
				'product_id' => 594,
				'm_product_id' => 594,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			267 => 
			array (
				'id' => 1768,
				'name' => 'Giá Bán lẻ',
				'price' => 38000,
				'product_id' => 594,
				'm_product_id' => 594,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			268 => 
			array (
				'id' => 1769,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 595,
				'm_product_id' => 595,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			269 => 
			array (
				'id' => 1770,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 595,
				'm_product_id' => 595,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			270 => 
			array (
				'id' => 1771,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 595,
				'm_product_id' => 595,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			271 => 
			array (
				'id' => 1772,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 595,
				'm_product_id' => 595,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			272 => 
			array (
				'id' => 1773,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 596,
				'm_product_id' => 596,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			273 => 
			array (
				'id' => 1774,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 596,
				'm_product_id' => 596,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			274 => 
			array (
				'id' => 1775,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 596,
				'm_product_id' => 596,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			275 => 
			array (
				'id' => 1776,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 596,
				'm_product_id' => 596,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			276 => 
			array (
				'id' => 1777,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 597,
				'm_product_id' => 597,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			277 => 
			array (
				'id' => 1778,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 597,
				'm_product_id' => 597,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			278 => 
			array (
				'id' => 1779,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 597,
				'm_product_id' => 597,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			279 => 
			array (
				'id' => 1780,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 597,
				'm_product_id' => 597,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			280 => 
			array (
				'id' => 1781,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 598,
				'm_product_id' => 598,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			281 => 
			array (
				'id' => 1782,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 598,
				'm_product_id' => 598,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			282 => 
			array (
				'id' => 1783,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 598,
				'm_product_id' => 598,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			283 => 
			array (
				'id' => 1784,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 598,
				'm_product_id' => 598,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			284 => 
			array (
				'id' => 1785,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 599,
				'm_product_id' => 599,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			285 => 
			array (
				'id' => 1786,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 599,
				'm_product_id' => 599,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			286 => 
			array (
				'id' => 1787,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 599,
				'm_product_id' => 599,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			287 => 
			array (
				'id' => 1788,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 599,
				'm_product_id' => 599,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			288 => 
			array (
				'id' => 1789,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 600,
				'm_product_id' => 600,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			289 => 
			array (
				'id' => 1790,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 600,
				'm_product_id' => 600,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			290 => 
			array (
				'id' => 1791,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 600,
				'm_product_id' => 600,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			291 => 
			array (
				'id' => 1792,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 600,
				'm_product_id' => 600,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			292 => 
			array (
				'id' => 1793,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 601,
				'm_product_id' => 601,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			293 => 
			array (
				'id' => 1794,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 601,
				'm_product_id' => 601,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			294 => 
			array (
				'id' => 1795,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 601,
				'm_product_id' => 601,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			295 => 
			array (
				'id' => 1796,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 601,
				'm_product_id' => 601,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			296 => 
			array (
				'id' => 1797,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 602,
				'm_product_id' => 602,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			297 => 
			array (
				'id' => 1798,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 602,
				'm_product_id' => 602,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			298 => 
			array (
				'id' => 1799,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 602,
				'm_product_id' => 602,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			299 => 
			array (
				'id' => 1800,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 602,
				'm_product_id' => 602,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			300 => 
			array (
				'id' => 1801,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 603,
				'm_product_id' => 603,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			301 => 
			array (
				'id' => 1802,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 603,
				'm_product_id' => 603,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			302 => 
			array (
				'id' => 1803,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 603,
				'm_product_id' => 603,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			303 => 
			array (
				'id' => 1804,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 603,
				'm_product_id' => 603,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			304 => 
			array (
				'id' => 1805,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 604,
				'm_product_id' => 604,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			305 => 
			array (
				'id' => 1806,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 604,
				'm_product_id' => 604,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			306 => 
			array (
				'id' => 1807,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 604,
				'm_product_id' => 604,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			307 => 
			array (
				'id' => 1808,
				'name' => 'Giá Bán lẻ',
				'price' => 25000,
				'product_id' => 604,
				'm_product_id' => 604,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			308 => 
			array (
				'id' => 1809,
				'name' => 'Giá NPP',
				'price' => 9500,
				'product_id' => 605,
				'm_product_id' => 605,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			309 => 
			array (
				'id' => 1810,
				'name' => 'Giá Đại lý',
				'price' => 10000,
				'product_id' => 605,
				'm_product_id' => 605,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			310 => 
			array (
				'id' => 1811,
				'name' => 'Giá Shop',
				'price' => 10500,
				'product_id' => 605,
				'm_product_id' => 605,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			311 => 
			array (
				'id' => 1812,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 605,
				'm_product_id' => 605,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			312 => 
			array (
				'id' => 1813,
				'name' => 'Giá NPP',
				'price' => 10500,
				'product_id' => 606,
				'm_product_id' => 606,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			313 => 
			array (
				'id' => 1814,
				'name' => 'Giá Đại lý',
				'price' => 11000,
				'product_id' => 606,
				'm_product_id' => 606,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			314 => 
			array (
				'id' => 1815,
				'name' => 'Giá Shop',
				'price' => 11500,
				'product_id' => 606,
				'm_product_id' => 606,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			315 => 
			array (
				'id' => 1816,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 606,
				'm_product_id' => 606,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			316 => 
			array (
				'id' => 1817,
				'name' => 'Giá NPP',
				'price' => 11500,
				'product_id' => 607,
				'm_product_id' => 607,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			317 => 
			array (
				'id' => 1818,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 607,
				'm_product_id' => 607,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			318 => 
			array (
				'id' => 1819,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 607,
				'm_product_id' => 607,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			319 => 
			array (
				'id' => 1820,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 607,
				'm_product_id' => 607,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			320 => 
			array (
				'id' => 1821,
				'name' => 'Giá NPP',
				'price' => 12500,
				'product_id' => 608,
				'm_product_id' => 608,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			321 => 
			array (
				'id' => 1822,
				'name' => 'Giá Đại lý',
				'price' => 13000,
				'product_id' => 608,
				'm_product_id' => 608,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			322 => 
			array (
				'id' => 1823,
				'name' => 'Giá Shop',
				'price' => 13500,
				'product_id' => 608,
				'm_product_id' => 608,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			323 => 
			array (
				'id' => 1824,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 608,
				'm_product_id' => 608,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			324 => 
			array (
				'id' => 1825,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 609,
				'm_product_id' => 609,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			325 => 
			array (
				'id' => 1826,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 609,
				'm_product_id' => 609,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			326 => 
			array (
				'id' => 1827,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 609,
				'm_product_id' => 609,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			327 => 
			array (
				'id' => 1828,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 609,
				'm_product_id' => 609,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			328 => 
			array (
				'id' => 1829,
				'name' => 'Giá NPP',
				'price' => 10000,
				'product_id' => 610,
				'm_product_id' => 610,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			329 => 
			array (
				'id' => 1830,
				'name' => 'Giá Đại lý',
				'price' => 10500,
				'product_id' => 610,
				'm_product_id' => 610,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			330 => 
			array (
				'id' => 1831,
				'name' => 'Giá Shop',
				'price' => 11000,
				'product_id' => 610,
				'm_product_id' => 610,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			331 => 
			array (
				'id' => 1832,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 610,
				'm_product_id' => 610,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			332 => 
			array (
				'id' => 1833,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 611,
				'm_product_id' => 611,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			333 => 
			array (
				'id' => 1834,
				'name' => 'Giá Đại lý',
				'price' => 11500,
				'product_id' => 611,
				'm_product_id' => 611,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			334 => 
			array (
				'id' => 1835,
				'name' => 'Giá Shop',
				'price' => 12000,
				'product_id' => 611,
				'm_product_id' => 611,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			335 => 
			array (
				'id' => 1836,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 611,
				'm_product_id' => 611,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			336 => 
			array (
				'id' => 1837,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 612,
				'm_product_id' => 612,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			337 => 
			array (
				'id' => 1838,
				'name' => 'Giá Đại lý',
				'price' => 12500,
				'product_id' => 612,
				'm_product_id' => 612,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			338 => 
			array (
				'id' => 1839,
				'name' => 'Giá Shop',
				'price' => 13000,
				'product_id' => 612,
				'm_product_id' => 612,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			339 => 
			array (
				'id' => 1840,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 612,
				'm_product_id' => 612,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			340 => 
			array (
				'id' => 1841,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 613,
				'm_product_id' => 613,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			341 => 
			array (
				'id' => 1842,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 613,
				'm_product_id' => 613,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			342 => 
			array (
				'id' => 1843,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 613,
				'm_product_id' => 613,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			343 => 
			array (
				'id' => 1844,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 613,
				'm_product_id' => 613,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			344 => 
			array (
				'id' => 1845,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 614,
				'm_product_id' => 614,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			345 => 
			array (
				'id' => 1846,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 614,
				'm_product_id' => 614,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			346 => 
			array (
				'id' => 1847,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 614,
				'm_product_id' => 614,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			347 => 
			array (
				'id' => 1848,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 614,
				'm_product_id' => 614,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			348 => 
			array (
				'id' => 1849,
				'name' => 'Giá NPP',
				'price' => 7500,
				'product_id' => 615,
				'm_product_id' => 615,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			349 => 
			array (
				'id' => 1850,
				'name' => 'Giá Đại lý',
				'price' => 8000,
				'product_id' => 615,
				'm_product_id' => 615,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			350 => 
			array (
				'id' => 1851,
				'name' => 'Giá Shop',
				'price' => 8500,
				'product_id' => 615,
				'm_product_id' => 615,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			351 => 
			array (
				'id' => 1852,
				'name' => 'Giá Bán lẻ',
				'price' => 13000,
				'product_id' => 615,
				'm_product_id' => 615,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			352 => 
			array (
				'id' => 1853,
				'name' => 'Giá NPP',
				'price' => 8500,
				'product_id' => 616,
				'm_product_id' => 616,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			353 => 
			array (
				'id' => 1854,
				'name' => 'Giá Đại lý',
				'price' => 9000,
				'product_id' => 616,
				'm_product_id' => 616,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			354 => 
			array (
				'id' => 1855,
				'name' => 'Giá Shop',
				'price' => 9500,
				'product_id' => 616,
				'm_product_id' => 616,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			355 => 
			array (
				'id' => 1856,
				'name' => 'Giá Bán lẻ',
				'price' => 14000,
				'product_id' => 616,
				'm_product_id' => 616,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			356 => 
			array (
				'id' => 1857,
				'name' => 'Giá NPP',
				'price' => 9500,
				'product_id' => 617,
				'm_product_id' => 617,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			357 => 
			array (
				'id' => 1858,
				'name' => 'Giá Đại lý',
				'price' => 10000,
				'product_id' => 617,
				'm_product_id' => 617,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			358 => 
			array (
				'id' => 1859,
				'name' => 'Giá Shop',
				'price' => 10500,
				'product_id' => 617,
				'm_product_id' => 617,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			359 => 
			array (
				'id' => 1860,
				'name' => 'Giá Bán lẻ',
				'price' => 15000,
				'product_id' => 617,
				'm_product_id' => 617,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			360 => 
			array (
				'id' => 1861,
				'name' => 'Giá NPP',
				'price' => 10500,
				'product_id' => 618,
				'm_product_id' => 618,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			361 => 
			array (
				'id' => 1862,
				'name' => 'Giá Đại lý',
				'price' => 11000,
				'product_id' => 618,
				'm_product_id' => 618,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			362 => 
			array (
				'id' => 1863,
				'name' => 'Giá Shop',
				'price' => 11500,
				'product_id' => 618,
				'm_product_id' => 618,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			363 => 
			array (
				'id' => 1864,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 618,
				'm_product_id' => 618,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			364 => 
			array (
				'id' => 1865,
				'name' => 'Giá NPP',
				'price' => 11500,
				'product_id' => 619,
				'm_product_id' => 619,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			365 => 
			array (
				'id' => 1866,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 619,
				'm_product_id' => 619,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			366 => 
			array (
				'id' => 1867,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 619,
				'm_product_id' => 619,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			367 => 
			array (
				'id' => 1868,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 619,
				'm_product_id' => 619,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			368 => 
			array (
				'id' => 1869,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 620,
				'm_product_id' => 620,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			369 => 
			array (
				'id' => 1870,
				'name' => 'Giá Đại lý',
				'price' => 12500,
				'product_id' => 620,
				'm_product_id' => 620,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			370 => 
			array (
				'id' => 1871,
				'name' => 'Giá Shop',
				'price' => 13000,
				'product_id' => 620,
				'm_product_id' => 620,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			371 => 
			array (
				'id' => 1872,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 620,
				'm_product_id' => 620,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			372 => 
			array (
				'id' => 1873,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 621,
				'm_product_id' => 621,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			373 => 
			array (
				'id' => 1874,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 621,
				'm_product_id' => 621,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			374 => 
			array (
				'id' => 1875,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 621,
				'm_product_id' => 621,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			375 => 
			array (
				'id' => 1876,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 621,
				'm_product_id' => 621,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			376 => 
			array (
				'id' => 1877,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 622,
				'm_product_id' => 622,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			377 => 
			array (
				'id' => 1878,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 622,
				'm_product_id' => 622,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			378 => 
			array (
				'id' => 1879,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 622,
				'm_product_id' => 622,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			379 => 
			array (
				'id' => 1880,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 622,
				'm_product_id' => 622,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			380 => 
			array (
				'id' => 1881,
				'name' => 'Giá NPP',
				'price' => 7500,
				'product_id' => 623,
				'm_product_id' => 623,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			381 => 
			array (
				'id' => 1882,
				'name' => 'Giá Đại lý',
				'price' => 8000,
				'product_id' => 623,
				'm_product_id' => 623,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			382 => 
			array (
				'id' => 1883,
				'name' => 'Giá Shop',
				'price' => 8500,
				'product_id' => 623,
				'm_product_id' => 623,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			383 => 
			array (
				'id' => 1884,
				'name' => 'Giá Bán lẻ',
				'price' => 13000,
				'product_id' => 623,
				'm_product_id' => 623,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			384 => 
			array (
				'id' => 1885,
				'name' => 'Giá NPP',
				'price' => 8500,
				'product_id' => 624,
				'm_product_id' => 624,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			385 => 
			array (
				'id' => 1886,
				'name' => 'Giá Đại lý',
				'price' => 9000,
				'product_id' => 624,
				'm_product_id' => 624,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			386 => 
			array (
				'id' => 1887,
				'name' => 'Giá Shop',
				'price' => 9500,
				'product_id' => 624,
				'm_product_id' => 624,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			387 => 
			array (
				'id' => 1888,
				'name' => 'Giá Bán lẻ',
				'price' => 14000,
				'product_id' => 624,
				'm_product_id' => 624,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			388 => 
			array (
				'id' => 1889,
				'name' => 'Giá NPP',
				'price' => 9500,
				'product_id' => 625,
				'm_product_id' => 625,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			389 => 
			array (
				'id' => 1890,
				'name' => 'Giá Đại lý',
				'price' => 10000,
				'product_id' => 625,
				'm_product_id' => 625,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			390 => 
			array (
				'id' => 1891,
				'name' => 'Giá Shop',
				'price' => 10500,
				'product_id' => 625,
				'm_product_id' => 625,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			391 => 
			array (
				'id' => 1892,
				'name' => 'Giá Bán lẻ',
				'price' => 15000,
				'product_id' => 625,
				'm_product_id' => 625,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			392 => 
			array (
				'id' => 1893,
				'name' => 'Giá NPP',
				'price' => 10500,
				'product_id' => 626,
				'm_product_id' => 626,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			393 => 
			array (
				'id' => 1894,
				'name' => 'Giá Đại lý',
				'price' => 11000,
				'product_id' => 626,
				'm_product_id' => 626,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			394 => 
			array (
				'id' => 1895,
				'name' => 'Giá Shop',
				'price' => 11500,
				'product_id' => 626,
				'm_product_id' => 626,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			395 => 
			array (
				'id' => 1896,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 626,
				'm_product_id' => 626,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			396 => 
			array (
				'id' => 1897,
				'name' => 'Giá NPP',
				'price' => 11500,
				'product_id' => 627,
				'm_product_id' => 627,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			397 => 
			array (
				'id' => 1898,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 627,
				'm_product_id' => 627,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			398 => 
			array (
				'id' => 1899,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 627,
				'm_product_id' => 627,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			399 => 
			array (
				'id' => 1900,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 627,
				'm_product_id' => 627,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			400 => 
			array (
				'id' => 1901,
				'name' => 'Giá NPP',
				'price' => 12500,
				'product_id' => 628,
				'm_product_id' => 628,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			401 => 
			array (
				'id' => 1902,
				'name' => 'Giá Đại lý',
				'price' => 13000,
				'product_id' => 628,
				'm_product_id' => 628,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			402 => 
			array (
				'id' => 1903,
				'name' => 'Giá Shop',
				'price' => 13500,
				'product_id' => 628,
				'm_product_id' => 628,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			403 => 
			array (
				'id' => 1904,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 628,
				'm_product_id' => 628,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			404 => 
			array (
				'id' => 1905,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 629,
				'm_product_id' => 629,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			405 => 
			array (
				'id' => 1906,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 629,
				'm_product_id' => 629,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			406 => 
			array (
				'id' => 1907,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 629,
				'm_product_id' => 629,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			407 => 
			array (
				'id' => 1908,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 629,
				'm_product_id' => 629,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			408 => 
			array (
				'id' => 1909,
				'name' => 'Giá NPP',
				'price' => 14500,
				'product_id' => 630,
				'm_product_id' => 630,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			409 => 
			array (
				'id' => 1910,
				'name' => 'Giá Đại lý',
				'price' => 15000,
				'product_id' => 630,
				'm_product_id' => 630,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			410 => 
			array (
				'id' => 1911,
				'name' => 'Giá Shop',
				'price' => 15500,
				'product_id' => 630,
				'm_product_id' => 630,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			411 => 
			array (
				'id' => 1912,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 630,
				'm_product_id' => 630,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			412 => 
			array (
				'id' => 1913,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 631,
				'm_product_id' => 631,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			413 => 
			array (
				'id' => 1914,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 631,
				'm_product_id' => 631,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			414 => 
			array (
				'id' => 1915,
				'name' => 'Giá Shop',
				'price' => 16500,
				'product_id' => 631,
				'm_product_id' => 631,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			415 => 
			array (
				'id' => 1916,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 631,
				'm_product_id' => 631,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			416 => 
			array (
				'id' => 1917,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 632,
				'm_product_id' => 632,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			417 => 
			array (
				'id' => 1918,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 632,
				'm_product_id' => 632,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			418 => 
			array (
				'id' => 1919,
				'name' => 'Giá Shop',
				'price' => 17500,
				'product_id' => 632,
				'm_product_id' => 632,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			419 => 
			array (
				'id' => 1920,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 632,
				'm_product_id' => 632,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			420 => 
			array (
				'id' => 1921,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 633,
				'm_product_id' => 633,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			421 => 
			array (
				'id' => 1922,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 633,
				'm_product_id' => 633,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			422 => 
			array (
				'id' => 1923,
				'name' => 'Giá Shop',
				'price' => 19500,
				'product_id' => 633,
				'm_product_id' => 633,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			423 => 
			array (
				'id' => 1924,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 633,
				'm_product_id' => 633,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			424 => 
			array (
				'id' => 1925,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 634,
				'm_product_id' => 634,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			425 => 
			array (
				'id' => 1926,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 634,
				'm_product_id' => 634,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			426 => 
			array (
				'id' => 1927,
				'name' => 'Giá Shop',
				'price' => 21500,
				'product_id' => 634,
				'm_product_id' => 634,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			427 => 
			array (
				'id' => 1928,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 634,
				'm_product_id' => 634,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			428 => 
			array (
				'id' => 1929,
				'name' => 'Giá NPP',
				'price' => 9000,
				'product_id' => 635,
				'm_product_id' => 635,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			429 => 
			array (
				'id' => 1930,
				'name' => 'Giá Đại lý',
				'price' => 9500,
				'product_id' => 635,
				'm_product_id' => 635,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			430 => 
			array (
				'id' => 1931,
				'name' => 'Giá Shop',
				'price' => 10000,
				'product_id' => 635,
				'm_product_id' => 635,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			431 => 
			array (
				'id' => 1932,
				'name' => 'Giá Bán lẻ',
				'price' => 15000,
				'product_id' => 635,
				'm_product_id' => 635,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			432 => 
			array (
				'id' => 1933,
				'name' => 'Giá NPP',
				'price' => 10000,
				'product_id' => 636,
				'm_product_id' => 636,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			433 => 
			array (
				'id' => 1934,
				'name' => 'Giá Đại lý',
				'price' => 10500,
				'product_id' => 636,
				'm_product_id' => 636,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			434 => 
			array (
				'id' => 1935,
				'name' => 'Giá Shop',
				'price' => 11000,
				'product_id' => 636,
				'm_product_id' => 636,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			435 => 
			array (
				'id' => 1936,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 636,
				'm_product_id' => 636,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			436 => 
			array (
				'id' => 1937,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 637,
				'm_product_id' => 637,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			437 => 
			array (
				'id' => 1938,
				'name' => 'Giá Đại lý',
				'price' => 11500,
				'product_id' => 637,
				'm_product_id' => 637,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			438 => 
			array (
				'id' => 1939,
				'name' => 'Giá Shop',
				'price' => 12000,
				'product_id' => 637,
				'm_product_id' => 637,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			439 => 
			array (
				'id' => 1940,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 637,
				'm_product_id' => 637,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			440 => 
			array (
				'id' => 1941,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 638,
				'm_product_id' => 638,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			441 => 
			array (
				'id' => 1942,
				'name' => 'Giá Đại lý',
				'price' => 12500,
				'product_id' => 638,
				'm_product_id' => 638,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			442 => 
			array (
				'id' => 1943,
				'name' => 'Giá Shop',
				'price' => 13000,
				'product_id' => 638,
				'm_product_id' => 638,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			443 => 
			array (
				'id' => 1944,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 638,
				'm_product_id' => 638,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			444 => 
			array (
				'id' => 1945,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 639,
				'm_product_id' => 639,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			445 => 
			array (
				'id' => 1946,
				'name' => 'Giá Đại lý',
				'price' => 13500,
				'product_id' => 639,
				'm_product_id' => 639,
				'created_at' => '2015-08-05 08:54:37',
				'updated_at' => '2015-08-05 08:54:37',
			),
			446 => 
			array (
				'id' => 1947,
				'name' => 'Giá Shop',
				'price' => 14000,
				'product_id' => 639,
				'm_product_id' => 639,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			447 => 
			array (
				'id' => 1948,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 639,
				'm_product_id' => 639,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			448 => 
			array (
				'id' => 1949,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 640,
				'm_product_id' => 640,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			449 => 
			array (
				'id' => 1950,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 640,
				'm_product_id' => 640,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			450 => 
			array (
				'id' => 1951,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 640,
				'm_product_id' => 640,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			451 => 
			array (
				'id' => 1952,
				'name' => 'Giá Bán lẻ',
				'price' => 20000,
				'product_id' => 640,
				'm_product_id' => 640,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			452 => 
			array (
				'id' => 1953,
				'name' => 'Giá NPP',
				'price' => 15000,
				'product_id' => 641,
				'm_product_id' => 641,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			453 => 
			array (
				'id' => 1954,
				'name' => 'Giá Đại lý',
				'price' => 15500,
				'product_id' => 641,
				'm_product_id' => 641,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			454 => 
			array (
				'id' => 1955,
				'name' => 'Giá Shop',
				'price' => 16000,
				'product_id' => 641,
				'm_product_id' => 641,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			455 => 
			array (
				'id' => 1956,
				'name' => 'Giá Bán lẻ',
				'price' => 21000,
				'product_id' => 641,
				'm_product_id' => 641,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			456 => 
			array (
				'id' => 1957,
				'name' => 'Giá NPP',
				'price' => 16000,
				'product_id' => 642,
				'm_product_id' => 642,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			457 => 
			array (
				'id' => 1958,
				'name' => 'Giá Đại lý',
				'price' => 16500,
				'product_id' => 642,
				'm_product_id' => 642,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			458 => 
			array (
				'id' => 1959,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 642,
				'm_product_id' => 642,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			459 => 
			array (
				'id' => 1960,
				'name' => 'Giá Bán lẻ',
				'price' => 22000,
				'product_id' => 642,
				'm_product_id' => 642,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			460 => 
			array (
				'id' => 1961,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 643,
				'm_product_id' => 643,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			461 => 
			array (
				'id' => 1962,
				'name' => 'Giá Đại lý',
				'price' => 17500,
				'product_id' => 643,
				'm_product_id' => 643,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			462 => 
			array (
				'id' => 1963,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 643,
				'm_product_id' => 643,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			463 => 
			array (
				'id' => 1964,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 643,
				'm_product_id' => 643,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			464 => 
			array (
				'id' => 1965,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 644,
				'm_product_id' => 644,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			465 => 
			array (
				'id' => 1966,
				'name' => 'Giá Đại lý',
				'price' => 18500,
				'product_id' => 644,
				'm_product_id' => 644,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			466 => 
			array (
				'id' => 1967,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 644,
				'm_product_id' => 644,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			467 => 
			array (
				'id' => 1968,
				'name' => 'Giá Bán lẻ',
				'price' => 24000,
				'product_id' => 644,
				'm_product_id' => 644,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			468 => 
			array (
				'id' => 1969,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 645,
				'm_product_id' => 645,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			469 => 
			array (
				'id' => 1970,
				'name' => 'Giá Đại lý',
				'price' => 20500,
				'product_id' => 645,
				'm_product_id' => 645,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			470 => 
			array (
				'id' => 1971,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 645,
				'm_product_id' => 645,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			471 => 
			array (
				'id' => 1972,
				'name' => 'Giá Bán lẻ',
				'price' => 26000,
				'product_id' => 645,
				'm_product_id' => 645,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			472 => 
			array (
				'id' => 1973,
				'name' => 'Giá NPP',
				'price' => 22000,
				'product_id' => 646,
				'm_product_id' => 646,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			473 => 
			array (
				'id' => 1974,
				'name' => 'Giá Đại lý',
				'price' => 22500,
				'product_id' => 646,
				'm_product_id' => 646,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			474 => 
			array (
				'id' => 1975,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 646,
				'm_product_id' => 646,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			475 => 
			array (
				'id' => 1976,
				'name' => 'Giá Bán lẻ',
				'price' => 28000,
				'product_id' => 646,
				'm_product_id' => 646,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			476 => 
			array (
				'id' => 1977,
				'name' => 'Giá NPP',
				'price' => 9500,
				'product_id' => 647,
				'm_product_id' => 647,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			477 => 
			array (
				'id' => 1978,
				'name' => 'Giá Đại lý',
				'price' => 10000,
				'product_id' => 647,
				'm_product_id' => 647,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			478 => 
			array (
				'id' => 1979,
				'name' => 'Giá Shop',
				'price' => 10500,
				'product_id' => 647,
				'm_product_id' => 647,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			479 => 
			array (
				'id' => 1980,
				'name' => 'Giá Bán lẻ',
				'price' => 15000,
				'product_id' => 647,
				'm_product_id' => 647,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			480 => 
			array (
				'id' => 1981,
				'name' => 'Giá NPP',
				'price' => 10500,
				'product_id' => 648,
				'm_product_id' => 648,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			481 => 
			array (
				'id' => 1982,
				'name' => 'Giá Đại lý',
				'price' => 11000,
				'product_id' => 648,
				'm_product_id' => 648,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			482 => 
			array (
				'id' => 1983,
				'name' => 'Giá Shop',
				'price' => 11500,
				'product_id' => 648,
				'm_product_id' => 648,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			483 => 
			array (
				'id' => 1984,
				'name' => 'Giá Bán lẻ',
				'price' => 16000,
				'product_id' => 648,
				'm_product_id' => 648,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			484 => 
			array (
				'id' => 1985,
				'name' => 'Giá NPP',
				'price' => 11500,
				'product_id' => 649,
				'm_product_id' => 649,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			485 => 
			array (
				'id' => 1986,
				'name' => 'Giá Đại lý',
				'price' => 12000,
				'product_id' => 649,
				'm_product_id' => 649,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			486 => 
			array (
				'id' => 1987,
				'name' => 'Giá Shop',
				'price' => 12500,
				'product_id' => 649,
				'm_product_id' => 649,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			487 => 
			array (
				'id' => 1988,
				'name' => 'Giá Bán lẻ',
				'price' => 17000,
				'product_id' => 649,
				'm_product_id' => 649,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			488 => 
			array (
				'id' => 1989,
				'name' => 'Giá NPP',
				'price' => 12500,
				'product_id' => 650,
				'm_product_id' => 650,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			489 => 
			array (
				'id' => 1990,
				'name' => 'Giá Đại lý',
				'price' => 13000,
				'product_id' => 650,
				'm_product_id' => 650,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			490 => 
			array (
				'id' => 1991,
				'name' => 'Giá Shop',
				'price' => 13500,
				'product_id' => 650,
				'm_product_id' => 650,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			491 => 
			array (
				'id' => 1992,
				'name' => 'Giá Bán lẻ',
				'price' => 18000,
				'product_id' => 650,
				'm_product_id' => 650,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			492 => 
			array (
				'id' => 1993,
				'name' => 'Giá NPP',
				'price' => 13500,
				'product_id' => 651,
				'm_product_id' => 651,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			493 => 
			array (
				'id' => 1994,
				'name' => 'Giá Đại lý',
				'price' => 14000,
				'product_id' => 651,
				'm_product_id' => 651,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			494 => 
			array (
				'id' => 1995,
				'name' => 'Giá Shop',
				'price' => 14500,
				'product_id' => 651,
				'm_product_id' => 651,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			495 => 
			array (
				'id' => 1996,
				'name' => 'Giá Bán lẻ',
				'price' => 19000,
				'product_id' => 651,
				'm_product_id' => 651,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			496 => 
			array (
				'id' => 1997,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 652,
				'm_product_id' => 652,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			497 => 
			array (
				'id' => 1998,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 652,
				'm_product_id' => 652,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			498 => 
			array (
				'id' => 1999,
				'name' => 'Giá Shop',
				'price' => 18500,
				'product_id' => 652,
				'm_product_id' => 652,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			499 => 
			array (
				'id' => 2000,
				'name' => 'Giá Bán lẻ',
				'price' => 23000,
				'product_id' => 652,
				'm_product_id' => 652,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 2001,
				'name' => 'Giá NPP',
				'price' => 15500,
				'product_id' => 653,
				'm_product_id' => 653,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			1 => 
			array (
				'id' => 2002,
				'name' => 'Giá Đại lý',
				'price' => 16000,
				'product_id' => 653,
				'm_product_id' => 653,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			2 => 
			array (
				'id' => 2003,
				'name' => 'Giá Shop',
				'price' => 17000,
				'product_id' => 653,
				'm_product_id' => 653,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			3 => 
			array (
				'id' => 2004,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 653,
				'm_product_id' => 653,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			4 => 
			array (
				'id' => 2005,
				'name' => 'Giá NPP',
				'price' => 16500,
				'product_id' => 654,
				'm_product_id' => 654,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			5 => 
			array (
				'id' => 2006,
				'name' => 'Giá Đại lý',
				'price' => 17000,
				'product_id' => 654,
				'm_product_id' => 654,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			6 => 
			array (
				'id' => 2007,
				'name' => 'Giá Shop',
				'price' => 18000,
				'product_id' => 654,
				'm_product_id' => 654,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			7 => 
			array (
				'id' => 2008,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 654,
				'm_product_id' => 654,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			8 => 
			array (
				'id' => 2009,
				'name' => 'Giá NPP',
				'price' => 17500,
				'product_id' => 655,
				'm_product_id' => 655,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			9 => 
			array (
				'id' => 2010,
				'name' => 'Giá Đại lý',
				'price' => 18000,
				'product_id' => 655,
				'm_product_id' => 655,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			10 => 
			array (
				'id' => 2011,
				'name' => 'Giá Shop',
				'price' => 19000,
				'product_id' => 655,
				'm_product_id' => 655,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			11 => 
			array (
				'id' => 2012,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 655,
				'm_product_id' => 655,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			12 => 
			array (
				'id' => 2013,
				'name' => 'Giá NPP',
				'price' => 18500,
				'product_id' => 656,
				'm_product_id' => 656,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			13 => 
			array (
				'id' => 2014,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 656,
				'm_product_id' => 656,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			14 => 
			array (
				'id' => 2015,
				'name' => 'Giá Shop',
				'price' => 20000,
				'product_id' => 656,
				'm_product_id' => 656,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			15 => 
			array (
				'id' => 2016,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 656,
				'm_product_id' => 656,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			16 => 
			array (
				'id' => 2017,
				'name' => 'Giá NPP',
				'price' => 19500,
				'product_id' => 657,
				'm_product_id' => 657,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			17 => 
			array (
				'id' => 2018,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 657,
				'm_product_id' => 657,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			18 => 
			array (
				'id' => 2019,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 657,
				'm_product_id' => 657,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			19 => 
			array (
				'id' => 2020,
				'name' => 'Giá Bán lẻ',
				'price' => 27000,
				'product_id' => 657,
				'm_product_id' => 657,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			20 => 
			array (
				'id' => 2021,
				'name' => 'Giá NPP',
				'price' => 20500,
				'product_id' => 658,
				'm_product_id' => 658,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			21 => 
			array (
				'id' => 2022,
				'name' => 'Giá Đại lý',
				'price' => 21000,
				'product_id' => 658,
				'm_product_id' => 658,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			22 => 
			array (
				'id' => 2023,
				'name' => 'Giá Shop',
				'price' => 22000,
				'product_id' => 658,
				'm_product_id' => 658,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			23 => 
			array (
				'id' => 2024,
				'name' => 'Giá Bán lẻ',
				'price' => 35000,
				'product_id' => 658,
				'm_product_id' => 658,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			24 => 
			array (
				'id' => 2025,
				'name' => 'Giá NPP',
				'price' => 21500,
				'product_id' => 659,
				'm_product_id' => 659,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			25 => 
			array (
				'id' => 2026,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 659,
				'm_product_id' => 659,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			26 => 
			array (
				'id' => 2027,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 659,
				'm_product_id' => 659,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			27 => 
			array (
				'id' => 2028,
				'name' => 'Giá Bán lẻ',
				'price' => 35000,
				'product_id' => 659,
				'm_product_id' => 659,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			28 => 
			array (
				'id' => 2029,
				'name' => 'Giá NPP',
				'price' => 22500,
				'product_id' => 660,
				'm_product_id' => 660,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			29 => 
			array (
				'id' => 2030,
				'name' => 'Giá Đại lý',
				'price' => 23000,
				'product_id' => 660,
				'm_product_id' => 660,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			30 => 
			array (
				'id' => 2031,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 660,
				'm_product_id' => 660,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			31 => 
			array (
				'id' => 2032,
				'name' => 'Giá Bán lẻ',
				'price' => 35000,
				'product_id' => 660,
				'm_product_id' => 660,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			32 => 
			array (
				'id' => 2033,
				'name' => 'Giá NPP',
				'price' => 23500,
				'product_id' => 661,
				'm_product_id' => 661,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			33 => 
			array (
				'id' => 2034,
				'name' => 'Giá Đại lý',
				'price' => 24000,
				'product_id' => 661,
				'm_product_id' => 661,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			34 => 
			array (
				'id' => 2035,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 661,
				'm_product_id' => 661,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			35 => 
			array (
				'id' => 2036,
				'name' => 'Giá Bán lẻ',
				'price' => 35000,
				'product_id' => 661,
				'm_product_id' => 661,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			36 => 
			array (
				'id' => 2037,
				'name' => 'Giá NPP',
				'price' => 24500,
				'product_id' => 662,
				'm_product_id' => 662,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			37 => 
			array (
				'id' => 2038,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 662,
				'm_product_id' => 662,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			38 => 
			array (
				'id' => 2039,
				'name' => 'Giá Shop',
				'price' => 26000,
				'product_id' => 662,
				'm_product_id' => 662,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			39 => 
			array (
				'id' => 2040,
				'name' => 'Giá Bán lẻ',
				'price' => 35000,
				'product_id' => 662,
				'm_product_id' => 662,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			40 => 
			array (
				'id' => 2041,
				'name' => 'Giá NPP',
				'price' => 26500,
				'product_id' => 663,
				'm_product_id' => 663,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			41 => 
			array (
				'id' => 2042,
				'name' => 'Giá Đại lý',
				'price' => 27000,
				'product_id' => 663,
				'm_product_id' => 663,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			42 => 
			array (
				'id' => 2043,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 663,
				'm_product_id' => 663,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			43 => 
			array (
				'id' => 2044,
				'name' => 'Giá Bán lẻ',
				'price' => 45000,
				'product_id' => 663,
				'm_product_id' => 663,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			44 => 
			array (
				'id' => 2045,
				'name' => 'Giá NPP',
				'price' => 28500,
				'product_id' => 664,
				'm_product_id' => 664,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			45 => 
			array (
				'id' => 2046,
				'name' => 'Giá Đại lý',
				'price' => 29000,
				'product_id' => 664,
				'm_product_id' => 664,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			46 => 
			array (
				'id' => 2047,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 664,
				'm_product_id' => 664,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			47 => 
			array (
				'id' => 2048,
				'name' => 'Giá Bán lẻ',
				'price' => 45000,
				'product_id' => 664,
				'm_product_id' => 664,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			48 => 
			array (
				'id' => 2049,
				'name' => 'Giá NPP',
				'price' => 30500,
				'product_id' => 665,
				'm_product_id' => 665,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			49 => 
			array (
				'id' => 2050,
				'name' => 'Giá Đại lý',
				'price' => 31000,
				'product_id' => 665,
				'm_product_id' => 665,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			50 => 
			array (
				'id' => 2051,
				'name' => 'Giá Shop',
				'price' => 32000,
				'product_id' => 665,
				'm_product_id' => 665,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			51 => 
			array (
				'id' => 2052,
				'name' => 'Giá Bán lẻ',
				'price' => 45000,
				'product_id' => 665,
				'm_product_id' => 665,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			52 => 
			array (
				'id' => 2053,
				'name' => 'Giá NPP',
				'price' => 32500,
				'product_id' => 666,
				'm_product_id' => 666,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			53 => 
			array (
				'id' => 2054,
				'name' => 'Giá Đại lý',
				'price' => 33000,
				'product_id' => 666,
				'm_product_id' => 666,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			54 => 
			array (
				'id' => 2055,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 666,
				'm_product_id' => 666,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			55 => 
			array (
				'id' => 2056,
				'name' => 'Giá Bán lẻ',
				'price' => 45000,
				'product_id' => 666,
				'm_product_id' => 666,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			56 => 
			array (
				'id' => 2057,
				'name' => 'Giá NPP',
				'price' => 34500,
				'product_id' => 667,
				'm_product_id' => 667,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			57 => 
			array (
				'id' => 2058,
				'name' => 'Giá Đại lý',
				'price' => 35000,
				'product_id' => 667,
				'm_product_id' => 667,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			58 => 
			array (
				'id' => 2059,
				'name' => 'Giá Shop',
				'price' => 36000,
				'product_id' => 667,
				'm_product_id' => 667,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			59 => 
			array (
				'id' => 2060,
				'name' => 'Giá Bán lẻ',
				'price' => 45000,
				'product_id' => 667,
				'm_product_id' => 667,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			60 => 
			array (
				'id' => 2061,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 668,
				'm_product_id' => 668,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			61 => 
			array (
				'id' => 2062,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 668,
				'm_product_id' => 668,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			62 => 
			array (
				'id' => 2063,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 668,
				'm_product_id' => 668,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			63 => 
			array (
				'id' => 2064,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 668,
				'm_product_id' => 668,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			64 => 
			array (
				'id' => 2065,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 669,
				'm_product_id' => 669,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			65 => 
			array (
				'id' => 2066,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 669,
				'm_product_id' => 669,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			66 => 
			array (
				'id' => 2067,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 669,
				'm_product_id' => 669,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			67 => 
			array (
				'id' => 2068,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 669,
				'm_product_id' => 669,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			68 => 
			array (
				'id' => 2069,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 670,
				'm_product_id' => 670,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			69 => 
			array (
				'id' => 2070,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 670,
				'm_product_id' => 670,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			70 => 
			array (
				'id' => 2071,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 670,
				'm_product_id' => 670,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			71 => 
			array (
				'id' => 2072,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 670,
				'm_product_id' => 670,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			72 => 
			array (
				'id' => 2073,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 671,
				'm_product_id' => 671,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			73 => 
			array (
				'id' => 2074,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 671,
				'm_product_id' => 671,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			74 => 
			array (
				'id' => 2075,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 671,
				'm_product_id' => 671,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			75 => 
			array (
				'id' => 2076,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 671,
				'm_product_id' => 671,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			76 => 
			array (
				'id' => 2077,
				'name' => 'Giá NPP',
				'price' => 61000,
				'product_id' => 672,
				'm_product_id' => 672,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			77 => 
			array (
				'id' => 2078,
				'name' => 'Giá Đại lý',
				'price' => 63000,
				'product_id' => 672,
				'm_product_id' => 672,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			78 => 
			array (
				'id' => 2079,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 672,
				'm_product_id' => 672,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			79 => 
			array (
				'id' => 2080,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 672,
				'm_product_id' => 672,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			80 => 
			array (
				'id' => 2081,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 673,
				'm_product_id' => 673,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			81 => 
			array (
				'id' => 2082,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 673,
				'm_product_id' => 673,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			82 => 
			array (
				'id' => 2083,
				'name' => 'Giá Shop',
				'price' => 24000,
				'product_id' => 673,
				'm_product_id' => 673,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			83 => 
			array (
				'id' => 2084,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 673,
				'm_product_id' => 673,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			84 => 
			array (
				'id' => 2085,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 674,
				'm_product_id' => 674,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			85 => 
			array (
				'id' => 2086,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 674,
				'm_product_id' => 674,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			86 => 
			array (
				'id' => 2087,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 674,
				'm_product_id' => 674,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			87 => 
			array (
				'id' => 2088,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 674,
				'm_product_id' => 674,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			88 => 
			array (
				'id' => 2089,
				'name' => 'Giá NPP',
				'price' => 66000,
				'product_id' => 675,
				'm_product_id' => 675,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			89 => 
			array (
				'id' => 2090,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 675,
				'm_product_id' => 675,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			90 => 
			array (
				'id' => 2091,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 675,
				'm_product_id' => 675,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			91 => 
			array (
				'id' => 2092,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 675,
				'm_product_id' => 675,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			92 => 
			array (
				'id' => 2093,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 676,
				'm_product_id' => 676,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			93 => 
			array (
				'id' => 2094,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 676,
				'm_product_id' => 676,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			94 => 
			array (
				'id' => 2095,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 676,
				'm_product_id' => 676,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			95 => 
			array (
				'id' => 2096,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 676,
				'm_product_id' => 676,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			96 => 
			array (
				'id' => 2097,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 677,
				'm_product_id' => 677,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			97 => 
			array (
				'id' => 2098,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 677,
				'm_product_id' => 677,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			98 => 
			array (
				'id' => 2099,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 677,
				'm_product_id' => 677,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			99 => 
			array (
				'id' => 2100,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 677,
				'm_product_id' => 677,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			100 => 
			array (
				'id' => 2101,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 678,
				'm_product_id' => 678,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			101 => 
			array (
				'id' => 2102,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 678,
				'm_product_id' => 678,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			102 => 
			array (
				'id' => 2103,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 678,
				'm_product_id' => 678,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			103 => 
			array (
				'id' => 2104,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 678,
				'm_product_id' => 678,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			104 => 
			array (
				'id' => 2105,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 679,
				'm_product_id' => 679,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			105 => 
			array (
				'id' => 2106,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 679,
				'm_product_id' => 679,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			106 => 
			array (
				'id' => 2107,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 679,
				'm_product_id' => 679,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			107 => 
			array (
				'id' => 2108,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 679,
				'm_product_id' => 679,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			108 => 
			array (
				'id' => 2109,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 680,
				'm_product_id' => 680,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			109 => 
			array (
				'id' => 2110,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 680,
				'm_product_id' => 680,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			110 => 
			array (
				'id' => 2111,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 680,
				'm_product_id' => 680,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			111 => 
			array (
				'id' => 2112,
				'name' => 'Giá Bán lẻ',
				'price' => 120000,
				'product_id' => 680,
				'm_product_id' => 680,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			112 => 
			array (
				'id' => 2113,
				'name' => 'Giá NPP',
				'price' => 6000,
				'product_id' => 681,
				'm_product_id' => 681,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			113 => 
			array (
				'id' => 2114,
				'name' => 'Giá Đại lý',
				'price' => 6500,
				'product_id' => 681,
				'm_product_id' => 681,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			114 => 
			array (
				'id' => 2115,
				'name' => 'Giá Shop',
				'price' => 7000,
				'product_id' => 681,
				'm_product_id' => 681,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			115 => 
			array (
				'id' => 2116,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 682,
				'm_product_id' => 682,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			116 => 
			array (
				'id' => 2117,
				'name' => 'Giá Đại lý',
				'price' => 42000,
				'product_id' => 682,
				'm_product_id' => 682,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			117 => 
			array (
				'id' => 2118,
				'name' => 'Giá Shop',
				'price' => 43000,
				'product_id' => 682,
				'm_product_id' => 682,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			118 => 
			array (
				'id' => 2119,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 683,
				'm_product_id' => 683,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			119 => 
			array (
				'id' => 2120,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 683,
				'm_product_id' => 683,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			120 => 
			array (
				'id' => 2121,
				'name' => 'Giá Shop',
				'price' => 46000,
				'product_id' => 683,
				'm_product_id' => 683,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			121 => 
			array (
				'id' => 2122,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 684,
				'm_product_id' => 684,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			122 => 
			array (
				'id' => 2123,
				'name' => 'Giá Đại lý',
				'price' => 28000,
				'product_id' => 684,
				'm_product_id' => 684,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			123 => 
			array (
				'id' => 2124,
				'name' => 'Giá Shop',
				'price' => 30000,
				'product_id' => 684,
				'm_product_id' => 684,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			124 => 
			array (
				'id' => 2125,
				'name' => 'Giá Bán lẻ',
				'price' => 45000,
				'product_id' => 684,
				'm_product_id' => 684,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			125 => 
			array (
				'id' => 2126,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 685,
				'm_product_id' => 685,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			126 => 
			array (
				'id' => 2127,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 685,
				'm_product_id' => 685,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			127 => 
			array (
				'id' => 2128,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 685,
				'm_product_id' => 685,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			128 => 
			array (
				'id' => 2129,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 685,
				'm_product_id' => 685,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			129 => 
			array (
				'id' => 2130,
				'name' => 'Giá NPP',
				'price' => 19000,
				'product_id' => 686,
				'm_product_id' => 686,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			130 => 
			array (
				'id' => 2131,
				'name' => 'Giá Đại lý',
				'price' => 20000,
				'product_id' => 686,
				'm_product_id' => 686,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			131 => 
			array (
				'id' => 2132,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 686,
				'm_product_id' => 686,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			132 => 
			array (
				'id' => 2133,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 686,
				'm_product_id' => 686,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			133 => 
			array (
				'id' => 2134,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 687,
				'm_product_id' => 687,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			134 => 
			array (
				'id' => 2135,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 687,
				'm_product_id' => 687,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			135 => 
			array (
				'id' => 2136,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 687,
				'm_product_id' => 687,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			136 => 
			array (
				'id' => 2137,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 687,
				'm_product_id' => 687,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			137 => 
			array (
				'id' => 2138,
				'name' => 'Giá NPP',
				'price' => 150000,
				'product_id' => 688,
				'm_product_id' => 688,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			138 => 
			array (
				'id' => 2139,
				'name' => 'Giá Đại lý',
				'price' => 158000,
				'product_id' => 688,
				'm_product_id' => 688,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			139 => 
			array (
				'id' => 2140,
				'name' => 'Giá Shop',
				'price' => 165000,
				'product_id' => 688,
				'm_product_id' => 688,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			140 => 
			array (
				'id' => 2141,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 689,
				'm_product_id' => 689,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			141 => 
			array (
				'id' => 2142,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 689,
				'm_product_id' => 689,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			142 => 
			array (
				'id' => 2143,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 689,
				'm_product_id' => 689,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			143 => 
			array (
				'id' => 2144,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 689,
				'm_product_id' => 689,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			144 => 
			array (
				'id' => 2145,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 690,
				'm_product_id' => 690,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			145 => 
			array (
				'id' => 2146,
				'name' => 'Giá Đại lý',
				'price' => 59000,
				'product_id' => 690,
				'm_product_id' => 690,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			146 => 
			array (
				'id' => 2147,
				'name' => 'Giá Shop',
				'price' => 61000,
				'product_id' => 690,
				'm_product_id' => 690,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			147 => 
			array (
				'id' => 2148,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 690,
				'm_product_id' => 690,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			148 => 
			array (
				'id' => 2149,
				'name' => 'Giá NPP',
				'price' => 20000,
				'product_id' => 691,
				'm_product_id' => 691,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			149 => 
			array (
				'id' => 2150,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 691,
				'm_product_id' => 691,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			150 => 
			array (
				'id' => 2151,
				'name' => 'Giá Shop',
				'price' => 25000,
				'product_id' => 691,
				'm_product_id' => 691,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			151 => 
			array (
				'id' => 2152,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 691,
				'm_product_id' => 691,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			152 => 
			array (
				'id' => 2153,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 692,
				'm_product_id' => 692,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			153 => 
			array (
				'id' => 2154,
				'name' => 'Giá Đại lý',
				'price' => 38000,
				'product_id' => 692,
				'm_product_id' => 692,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			154 => 
			array (
				'id' => 2155,
				'name' => 'Giá Shop',
				'price' => 39000,
				'product_id' => 692,
				'm_product_id' => 692,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			155 => 
			array (
				'id' => 2156,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 692,
				'm_product_id' => 692,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			156 => 
			array (
				'id' => 2157,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 693,
				'm_product_id' => 693,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			157 => 
			array (
				'id' => 2158,
				'name' => 'Giá Đại lý',
				'price' => 42000,
				'product_id' => 693,
				'm_product_id' => 693,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			158 => 
			array (
				'id' => 2159,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 693,
				'm_product_id' => 693,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			159 => 
			array (
				'id' => 2160,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 693,
				'm_product_id' => 693,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			160 => 
			array (
				'id' => 2161,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 694,
				'm_product_id' => 694,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			161 => 
			array (
				'id' => 2162,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 694,
				'm_product_id' => 694,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			162 => 
			array (
				'id' => 2163,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 694,
				'm_product_id' => 694,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			163 => 
			array (
				'id' => 2164,
				'name' => 'Giá NPP',
				'price' => 54000,
				'product_id' => 695,
				'm_product_id' => 695,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			164 => 
			array (
				'id' => 2165,
				'name' => 'Giá Đại lý',
				'price' => 56000,
				'product_id' => 695,
				'm_product_id' => 695,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			165 => 
			array (
				'id' => 2166,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 695,
				'm_product_id' => 695,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			166 => 
			array (
				'id' => 2167,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 695,
				'm_product_id' => 695,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			167 => 
			array (
				'id' => 2168,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 696,
				'm_product_id' => 696,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			168 => 
			array (
				'id' => 2169,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 696,
				'm_product_id' => 696,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			169 => 
			array (
				'id' => 2170,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 696,
				'm_product_id' => 696,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			170 => 
			array (
				'id' => 2171,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 696,
				'm_product_id' => 696,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			171 => 
			array (
				'id' => 2172,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 697,
				'm_product_id' => 697,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			172 => 
			array (
				'id' => 2173,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 697,
				'm_product_id' => 697,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			173 => 
			array (
				'id' => 2174,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 697,
				'm_product_id' => 697,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			174 => 
			array (
				'id' => 2175,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 697,
				'm_product_id' => 697,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			175 => 
			array (
				'id' => 2176,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 698,
				'm_product_id' => 698,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			176 => 
			array (
				'id' => 2177,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 698,
				'm_product_id' => 698,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			177 => 
			array (
				'id' => 2178,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 698,
				'm_product_id' => 698,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			178 => 
			array (
				'id' => 2179,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 698,
				'm_product_id' => 698,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			179 => 
			array (
				'id' => 2180,
				'name' => 'Giá NPP',
				'price' => 33000,
				'product_id' => 699,
				'm_product_id' => 699,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			180 => 
			array (
				'id' => 2181,
				'name' => 'Giá Đại lý',
				'price' => 35000,
				'product_id' => 699,
				'm_product_id' => 699,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			181 => 
			array (
				'id' => 2182,
				'name' => 'Giá Shop',
				'price' => 38000,
				'product_id' => 699,
				'm_product_id' => 699,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			182 => 
			array (
				'id' => 2183,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 699,
				'm_product_id' => 699,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			183 => 
			array (
				'id' => 2184,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 700,
				'm_product_id' => 700,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			184 => 
			array (
				'id' => 2185,
				'name' => 'Giá Đại lý',
				'price' => 66000,
				'product_id' => 700,
				'm_product_id' => 700,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			185 => 
			array (
				'id' => 2186,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 700,
				'm_product_id' => 700,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			186 => 
			array (
				'id' => 2187,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 700,
				'm_product_id' => 700,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			187 => 
			array (
				'id' => 2188,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 701,
				'm_product_id' => 701,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			188 => 
			array (
				'id' => 2189,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 701,
				'm_product_id' => 701,
				'created_at' => '2015-08-05 08:54:38',
				'updated_at' => '2015-08-05 08:54:38',
			),
			189 => 
			array (
				'id' => 2190,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 701,
				'm_product_id' => 701,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			190 => 
			array (
				'id' => 2191,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 701,
				'm_product_id' => 701,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			191 => 
			array (
				'id' => 2192,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 702,
				'm_product_id' => 702,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			192 => 
			array (
				'id' => 2193,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 702,
				'm_product_id' => 702,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			193 => 
			array (
				'id' => 2194,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 702,
				'm_product_id' => 702,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			194 => 
			array (
				'id' => 2195,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 702,
				'm_product_id' => 702,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			195 => 
			array (
				'id' => 2196,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 703,
				'm_product_id' => 703,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			196 => 
			array (
				'id' => 2197,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 703,
				'm_product_id' => 703,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			197 => 
			array (
				'id' => 2198,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 703,
				'm_product_id' => 703,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			198 => 
			array (
				'id' => 2199,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 703,
				'm_product_id' => 703,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			199 => 
			array (
				'id' => 2200,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 704,
				'm_product_id' => 704,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			200 => 
			array (
				'id' => 2201,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 704,
				'm_product_id' => 704,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			201 => 
			array (
				'id' => 2202,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 704,
				'm_product_id' => 704,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			202 => 
			array (
				'id' => 2203,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 704,
				'm_product_id' => 704,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			203 => 
			array (
				'id' => 2204,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 705,
				'm_product_id' => 705,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			204 => 
			array (
				'id' => 2205,
				'name' => 'Giá Đại lý',
				'price' => 46000,
				'product_id' => 705,
				'm_product_id' => 705,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			205 => 
			array (
				'id' => 2206,
				'name' => 'Giá Shop',
				'price' => 48000,
				'product_id' => 705,
				'm_product_id' => 705,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			206 => 
			array (
				'id' => 2207,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 705,
				'm_product_id' => 705,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			207 => 
			array (
				'id' => 2208,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 706,
				'm_product_id' => 706,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			208 => 
			array (
				'id' => 2209,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 706,
				'm_product_id' => 706,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			209 => 
			array (
				'id' => 2210,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 706,
				'm_product_id' => 706,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			210 => 
			array (
				'id' => 2211,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 706,
				'm_product_id' => 706,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			211 => 
			array (
				'id' => 2212,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 707,
				'm_product_id' => 707,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			212 => 
			array (
				'id' => 2213,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 707,
				'm_product_id' => 707,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			213 => 
			array (
				'id' => 2214,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 707,
				'm_product_id' => 707,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			214 => 
			array (
				'id' => 2215,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 707,
				'm_product_id' => 707,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			215 => 
			array (
				'id' => 2216,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 708,
				'm_product_id' => 708,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			216 => 
			array (
				'id' => 2217,
				'name' => 'Giá Đại lý',
				'price' => 36000,
				'product_id' => 708,
				'm_product_id' => 708,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			217 => 
			array (
				'id' => 2218,
				'name' => 'Giá Shop',
				'price' => 38000,
				'product_id' => 708,
				'm_product_id' => 708,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			218 => 
			array (
				'id' => 2219,
				'name' => 'Giá NPP',
				'price' => 36000,
				'product_id' => 709,
				'm_product_id' => 709,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			219 => 
			array (
				'id' => 2220,
				'name' => 'Giá Đại lý',
				'price' => 37000,
				'product_id' => 709,
				'm_product_id' => 709,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			220 => 
			array (
				'id' => 2221,
				'name' => 'Giá Shop',
				'price' => 37500,
				'product_id' => 709,
				'm_product_id' => 709,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			221 => 
			array (
				'id' => 2222,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 709,
				'm_product_id' => 709,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			222 => 
			array (
				'id' => 2223,
				'name' => 'Giá NPP',
				'price' => 39000,
				'product_id' => 710,
				'm_product_id' => 710,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			223 => 
			array (
				'id' => 2224,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 710,
				'm_product_id' => 710,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			224 => 
			array (
				'id' => 2225,
				'name' => 'Giá Shop',
				'price' => 40500,
				'product_id' => 710,
				'm_product_id' => 710,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			225 => 
			array (
				'id' => 2226,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 710,
				'm_product_id' => 710,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			226 => 
			array (
				'id' => 2227,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 711,
				'm_product_id' => 711,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			227 => 
			array (
				'id' => 2228,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 711,
				'm_product_id' => 711,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			228 => 
			array (
				'id' => 2229,
				'name' => 'Giá Shop',
				'price' => 43500,
				'product_id' => 711,
				'm_product_id' => 711,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			229 => 
			array (
				'id' => 2230,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 711,
				'm_product_id' => 711,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			230 => 
			array (
				'id' => 2231,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 712,
				'm_product_id' => 712,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			231 => 
			array (
				'id' => 2232,
				'name' => 'Giá Đại lý',
				'price' => 49000,
				'product_id' => 712,
				'm_product_id' => 712,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			232 => 
			array (
				'id' => 2233,
				'name' => 'Giá Shop',
				'price' => 49500,
				'product_id' => 712,
				'm_product_id' => 712,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			233 => 
			array (
				'id' => 2234,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 712,
				'm_product_id' => 712,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			234 => 
			array (
				'id' => 2235,
				'name' => 'Giá NPP',
				'price' => 89000,
				'product_id' => 713,
				'm_product_id' => 713,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			235 => 
			array (
				'id' => 2236,
				'name' => 'Giá Đại lý',
				'price' => 93000,
				'product_id' => 713,
				'm_product_id' => 713,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			236 => 
			array (
				'id' => 2237,
				'name' => 'Giá Shop',
				'price' => 95000,
				'product_id' => 713,
				'm_product_id' => 713,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			237 => 
			array (
				'id' => 2238,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 713,
				'm_product_id' => 713,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			238 => 
			array (
				'id' => 2239,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 714,
				'm_product_id' => 714,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			239 => 
			array (
				'id' => 2240,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 714,
				'm_product_id' => 714,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			240 => 
			array (
				'id' => 2241,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 714,
				'm_product_id' => 714,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			241 => 
			array (
				'id' => 2242,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 714,
				'm_product_id' => 714,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			242 => 
			array (
				'id' => 2243,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 715,
				'm_product_id' => 715,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			243 => 
			array (
				'id' => 2244,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 715,
				'm_product_id' => 715,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			244 => 
			array (
				'id' => 2245,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 715,
				'm_product_id' => 715,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			245 => 
			array (
				'id' => 2246,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 715,
				'm_product_id' => 715,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			246 => 
			array (
				'id' => 2247,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 716,
				'm_product_id' => 716,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			247 => 
			array (
				'id' => 2248,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 716,
				'm_product_id' => 716,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			248 => 
			array (
				'id' => 2249,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 716,
				'm_product_id' => 716,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			249 => 
			array (
				'id' => 2250,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 716,
				'm_product_id' => 716,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			250 => 
			array (
				'id' => 2251,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 717,
				'm_product_id' => 717,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			251 => 
			array (
				'id' => 2252,
				'name' => 'Giá Đại lý',
				'price' => 46000,
				'product_id' => 717,
				'm_product_id' => 717,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			252 => 
			array (
				'id' => 2253,
				'name' => 'Giá Shop',
				'price' => 48000,
				'product_id' => 717,
				'm_product_id' => 717,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			253 => 
			array (
				'id' => 2254,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 717,
				'm_product_id' => 717,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			254 => 
			array (
				'id' => 2255,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 718,
				'm_product_id' => 718,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			255 => 
			array (
				'id' => 2256,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 718,
				'm_product_id' => 718,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			256 => 
			array (
				'id' => 2257,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 718,
				'm_product_id' => 718,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			257 => 
			array (
				'id' => 2258,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 718,
				'm_product_id' => 718,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			258 => 
			array (
				'id' => 2259,
				'name' => 'Giá NPP',
				'price' => 93000,
				'product_id' => 719,
				'm_product_id' => 719,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			259 => 
			array (
				'id' => 2260,
				'name' => 'Giá Đại lý',
				'price' => 96000,
				'product_id' => 719,
				'm_product_id' => 719,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			260 => 
			array (
				'id' => 2261,
				'name' => 'Giá Shop',
				'price' => 98000,
				'product_id' => 719,
				'm_product_id' => 719,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			261 => 
			array (
				'id' => 2262,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 719,
				'm_product_id' => 719,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			262 => 
			array (
				'id' => 2263,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 720,
				'm_product_id' => 720,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			263 => 
			array (
				'id' => 2264,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 720,
				'm_product_id' => 720,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			264 => 
			array (
				'id' => 2265,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 720,
				'm_product_id' => 720,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			265 => 
			array (
				'id' => 2266,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 720,
				'm_product_id' => 720,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			266 => 
			array (
				'id' => 2267,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 721,
				'm_product_id' => 721,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			267 => 
			array (
				'id' => 2268,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 721,
				'm_product_id' => 721,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			268 => 
			array (
				'id' => 2269,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 721,
				'm_product_id' => 721,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			269 => 
			array (
				'id' => 2270,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 721,
				'm_product_id' => 721,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			270 => 
			array (
				'id' => 2271,
				'name' => 'Giá NPP',
				'price' => 26000,
				'product_id' => 722,
				'm_product_id' => 722,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			271 => 
			array (
				'id' => 2272,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 722,
				'm_product_id' => 722,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			272 => 
			array (
				'id' => 2273,
				'name' => 'Giá Shop',
				'price' => 32000,
				'product_id' => 722,
				'm_product_id' => 722,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			273 => 
			array (
				'id' => 2274,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 722,
				'm_product_id' => 722,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			274 => 
			array (
				'id' => 2275,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 723,
				'm_product_id' => 723,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			275 => 
			array (
				'id' => 2276,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 723,
				'm_product_id' => 723,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			276 => 
			array (
				'id' => 2277,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 723,
				'm_product_id' => 723,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			277 => 
			array (
				'id' => 2278,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 723,
				'm_product_id' => 723,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			278 => 
			array (
				'id' => 2279,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 724,
				'm_product_id' => 724,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			279 => 
			array (
				'id' => 2280,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 724,
				'm_product_id' => 724,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			280 => 
			array (
				'id' => 2281,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 724,
				'm_product_id' => 724,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			281 => 
			array (
				'id' => 2282,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 724,
				'm_product_id' => 724,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			282 => 
			array (
				'id' => 2283,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 725,
				'm_product_id' => 725,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			283 => 
			array (
				'id' => 2284,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 725,
				'm_product_id' => 725,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			284 => 
			array (
				'id' => 2285,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 725,
				'm_product_id' => 725,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			285 => 
			array (
				'id' => 2286,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 725,
				'm_product_id' => 725,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			286 => 
			array (
				'id' => 2287,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 726,
				'm_product_id' => 726,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			287 => 
			array (
				'id' => 2288,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 726,
				'm_product_id' => 726,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			288 => 
			array (
				'id' => 2289,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 726,
				'm_product_id' => 726,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			289 => 
			array (
				'id' => 2290,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 726,
				'm_product_id' => 726,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			290 => 
			array (
				'id' => 2291,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 727,
				'm_product_id' => 727,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			291 => 
			array (
				'id' => 2292,
				'name' => 'Giá Đại lý',
				'price' => 66000,
				'product_id' => 727,
				'm_product_id' => 727,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			292 => 
			array (
				'id' => 2293,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 727,
				'm_product_id' => 727,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			293 => 
			array (
				'id' => 2294,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 727,
				'm_product_id' => 727,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			294 => 
			array (
				'id' => 2295,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 728,
				'm_product_id' => 728,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			295 => 
			array (
				'id' => 2296,
				'name' => 'Giá Đại lý',
				'price' => 56000,
				'product_id' => 728,
				'm_product_id' => 728,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			296 => 
			array (
				'id' => 2297,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 728,
				'm_product_id' => 728,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			297 => 
			array (
				'id' => 2298,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 728,
				'm_product_id' => 728,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			298 => 
			array (
				'id' => 2299,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 729,
				'm_product_id' => 729,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			299 => 
			array (
				'id' => 2300,
				'name' => 'Giá Đại lý',
				'price' => 38000,
				'product_id' => 729,
				'm_product_id' => 729,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			300 => 
			array (
				'id' => 2301,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 729,
				'm_product_id' => 729,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			301 => 
			array (
				'id' => 2302,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 729,
				'm_product_id' => 729,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			302 => 
			array (
				'id' => 2303,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 730,
				'm_product_id' => 730,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			303 => 
			array (
				'id' => 2304,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 730,
				'm_product_id' => 730,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			304 => 
			array (
				'id' => 2305,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 730,
				'm_product_id' => 730,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			305 => 
			array (
				'id' => 2306,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 731,
				'm_product_id' => 731,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			306 => 
			array (
				'id' => 2307,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 731,
				'm_product_id' => 731,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			307 => 
			array (
				'id' => 2308,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 731,
				'm_product_id' => 731,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			308 => 
			array (
				'id' => 2309,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 731,
				'm_product_id' => 731,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			309 => 
			array (
				'id' => 2310,
				'name' => 'Giá NPP',
				'price' => 32000,
				'product_id' => 732,
				'm_product_id' => 732,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			310 => 
			array (
				'id' => 2311,
				'name' => 'Giá Đại lý',
				'price' => 33000,
				'product_id' => 732,
				'm_product_id' => 732,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			311 => 
			array (
				'id' => 2312,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 732,
				'm_product_id' => 732,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			312 => 
			array (
				'id' => 2313,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 732,
				'm_product_id' => 732,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			313 => 
			array (
				'id' => 2314,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 733,
				'm_product_id' => 733,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			314 => 
			array (
				'id' => 2315,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 733,
				'm_product_id' => 733,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			315 => 
			array (
				'id' => 2316,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 733,
				'm_product_id' => 733,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			316 => 
			array (
				'id' => 2317,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 733,
				'm_product_id' => 733,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			317 => 
			array (
				'id' => 2318,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 734,
				'm_product_id' => 734,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			318 => 
			array (
				'id' => 2319,
				'name' => 'Giá Đại lý',
				'price' => 86000,
				'product_id' => 734,
				'm_product_id' => 734,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			319 => 
			array (
				'id' => 2320,
				'name' => 'Giá Shop',
				'price' => 88000,
				'product_id' => 734,
				'm_product_id' => 734,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			320 => 
			array (
				'id' => 2321,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 734,
				'm_product_id' => 734,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			321 => 
			array (
				'id' => 2322,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 735,
				'm_product_id' => 735,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			322 => 
			array (
				'id' => 2323,
				'name' => 'Giá Đại lý',
				'price' => 63000,
				'product_id' => 735,
				'm_product_id' => 735,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			323 => 
			array (
				'id' => 2324,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 735,
				'm_product_id' => 735,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			324 => 
			array (
				'id' => 2325,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 735,
				'm_product_id' => 735,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			325 => 
			array (
				'id' => 2326,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 736,
				'm_product_id' => 736,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			326 => 
			array (
				'id' => 2327,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 736,
				'm_product_id' => 736,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			327 => 
			array (
				'id' => 2328,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 736,
				'm_product_id' => 736,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			328 => 
			array (
				'id' => 2329,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 736,
				'm_product_id' => 736,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			329 => 
			array (
				'id' => 2330,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 737,
				'm_product_id' => 737,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			330 => 
			array (
				'id' => 2331,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 737,
				'm_product_id' => 737,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			331 => 
			array (
				'id' => 2332,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 737,
				'm_product_id' => 737,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			332 => 
			array (
				'id' => 2333,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 737,
				'm_product_id' => 737,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			333 => 
			array (
				'id' => 2334,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 738,
				'm_product_id' => 738,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			334 => 
			array (
				'id' => 2335,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 738,
				'm_product_id' => 738,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			335 => 
			array (
				'id' => 2336,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 738,
				'm_product_id' => 738,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			336 => 
			array (
				'id' => 2337,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 738,
				'm_product_id' => 738,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			337 => 
			array (
				'id' => 2338,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 739,
				'm_product_id' => 739,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			338 => 
			array (
				'id' => 2339,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 739,
				'm_product_id' => 739,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			339 => 
			array (
				'id' => 2340,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 739,
				'm_product_id' => 739,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			340 => 
			array (
				'id' => 2341,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 739,
				'm_product_id' => 739,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			341 => 
			array (
				'id' => 2342,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 740,
				'm_product_id' => 740,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			342 => 
			array (
				'id' => 2343,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 740,
				'm_product_id' => 740,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			343 => 
			array (
				'id' => 2344,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 740,
				'm_product_id' => 740,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			344 => 
			array (
				'id' => 2345,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 740,
				'm_product_id' => 740,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			345 => 
			array (
				'id' => 2346,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 741,
				'm_product_id' => 741,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			346 => 
			array (
				'id' => 2347,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 741,
				'm_product_id' => 741,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			347 => 
			array (
				'id' => 2348,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 741,
				'm_product_id' => 741,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			348 => 
			array (
				'id' => 2349,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 741,
				'm_product_id' => 741,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			349 => 
			array (
				'id' => 2350,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 742,
				'm_product_id' => 742,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			350 => 
			array (
				'id' => 2351,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 742,
				'm_product_id' => 742,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			351 => 
			array (
				'id' => 2352,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 742,
				'm_product_id' => 742,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			352 => 
			array (
				'id' => 2353,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 742,
				'm_product_id' => 742,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			353 => 
			array (
				'id' => 2354,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 743,
				'm_product_id' => 743,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			354 => 
			array (
				'id' => 2355,
				'name' => 'Giá Đại lý',
				'price' => 38000,
				'product_id' => 743,
				'm_product_id' => 743,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			355 => 
			array (
				'id' => 2356,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 743,
				'm_product_id' => 743,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			356 => 
			array (
				'id' => 2357,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 743,
				'm_product_id' => 743,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			357 => 
			array (
				'id' => 2358,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 744,
				'm_product_id' => 744,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			358 => 
			array (
				'id' => 2359,
				'name' => 'Giá Đại lý',
				'price' => 38000,
				'product_id' => 744,
				'm_product_id' => 744,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			359 => 
			array (
				'id' => 2360,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 744,
				'm_product_id' => 744,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			360 => 
			array (
				'id' => 2361,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 744,
				'm_product_id' => 744,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			361 => 
			array (
				'id' => 2362,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 745,
				'm_product_id' => 745,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			362 => 
			array (
				'id' => 2363,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 745,
				'm_product_id' => 745,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			363 => 
			array (
				'id' => 2364,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 745,
				'm_product_id' => 745,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			364 => 
			array (
				'id' => 2365,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 745,
				'm_product_id' => 745,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			365 => 
			array (
				'id' => 2366,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 746,
				'm_product_id' => 746,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			366 => 
			array (
				'id' => 2367,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 746,
				'm_product_id' => 746,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			367 => 
			array (
				'id' => 2368,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 746,
				'm_product_id' => 746,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			368 => 
			array (
				'id' => 2369,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 746,
				'm_product_id' => 746,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			369 => 
			array (
				'id' => 2370,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 747,
				'm_product_id' => 747,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			370 => 
			array (
				'id' => 2371,
				'name' => 'Giá Đại lý',
				'price' => 92000,
				'product_id' => 747,
				'm_product_id' => 747,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			371 => 
			array (
				'id' => 2372,
				'name' => 'Giá Shop',
				'price' => 97000,
				'product_id' => 747,
				'm_product_id' => 747,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			372 => 
			array (
				'id' => 2373,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 747,
				'm_product_id' => 747,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			373 => 
			array (
				'id' => 2374,
				'name' => 'Giá NPP',
				'price' => 100000,
				'product_id' => 748,
				'm_product_id' => 748,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			374 => 
			array (
				'id' => 2375,
				'name' => 'Giá Đại lý',
				'price' => 103000,
				'product_id' => 748,
				'm_product_id' => 748,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			375 => 
			array (
				'id' => 2376,
				'name' => 'Giá Shop',
				'price' => 105000,
				'product_id' => 748,
				'm_product_id' => 748,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			376 => 
			array (
				'id' => 2377,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 748,
				'm_product_id' => 748,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			377 => 
			array (
				'id' => 2378,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 749,
				'm_product_id' => 749,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			378 => 
			array (
				'id' => 2379,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 749,
				'm_product_id' => 749,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			379 => 
			array (
				'id' => 2380,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 749,
				'm_product_id' => 749,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			380 => 
			array (
				'id' => 2381,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 749,
				'm_product_id' => 749,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			381 => 
			array (
				'id' => 2382,
				'name' => 'Giá NPP',
				'price' => 64000,
				'product_id' => 750,
				'm_product_id' => 750,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			382 => 
			array (
				'id' => 2383,
				'name' => 'Giá Đại lý',
				'price' => 66000,
				'product_id' => 750,
				'm_product_id' => 750,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			383 => 
			array (
				'id' => 2384,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 750,
				'm_product_id' => 750,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			384 => 
			array (
				'id' => 2385,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 750,
				'm_product_id' => 750,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			385 => 
			array (
				'id' => 2386,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 751,
				'm_product_id' => 751,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			386 => 
			array (
				'id' => 2387,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 751,
				'm_product_id' => 751,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			387 => 
			array (
				'id' => 2388,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 751,
				'm_product_id' => 751,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			388 => 
			array (
				'id' => 2389,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 751,
				'm_product_id' => 751,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			389 => 
			array (
				'id' => 2390,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 752,
				'm_product_id' => 752,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			390 => 
			array (
				'id' => 2391,
				'name' => 'Giá Đại lý',
				'price' => 92000,
				'product_id' => 752,
				'm_product_id' => 752,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			391 => 
			array (
				'id' => 2392,
				'name' => 'Giá Shop',
				'price' => 95000,
				'product_id' => 752,
				'm_product_id' => 752,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			392 => 
			array (
				'id' => 2393,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 752,
				'm_product_id' => 752,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			393 => 
			array (
				'id' => 2394,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 753,
				'm_product_id' => 753,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			394 => 
			array (
				'id' => 2395,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 753,
				'm_product_id' => 753,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			395 => 
			array (
				'id' => 2396,
				'name' => 'Giá Shop',
				'price' => 54000,
				'product_id' => 753,
				'm_product_id' => 753,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			396 => 
			array (
				'id' => 2397,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 753,
				'm_product_id' => 753,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			397 => 
			array (
				'id' => 2398,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 754,
				'm_product_id' => 754,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			398 => 
			array (
				'id' => 2399,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 754,
				'm_product_id' => 754,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			399 => 
			array (
				'id' => 2400,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 754,
				'm_product_id' => 754,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			400 => 
			array (
				'id' => 2401,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 754,
				'm_product_id' => 754,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			401 => 
			array (
				'id' => 2402,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 755,
				'm_product_id' => 755,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			402 => 
			array (
				'id' => 2403,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 755,
				'm_product_id' => 755,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			403 => 
			array (
				'id' => 2404,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 755,
				'm_product_id' => 755,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			404 => 
			array (
				'id' => 2405,
				'name' => 'Giá Bán lẻ',
				'price' => 80000,
				'product_id' => 755,
				'm_product_id' => 755,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			405 => 
			array (
				'id' => 2406,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 756,
				'm_product_id' => 756,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			406 => 
			array (
				'id' => 2407,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 756,
				'm_product_id' => 756,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			407 => 
			array (
				'id' => 2408,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 756,
				'm_product_id' => 756,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			408 => 
			array (
				'id' => 2409,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 757,
				'm_product_id' => 757,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			409 => 
			array (
				'id' => 2410,
				'name' => 'Giá Đại lý',
				'price' => 160000,
				'product_id' => 757,
				'm_product_id' => 757,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			410 => 
			array (
				'id' => 2411,
				'name' => 'Giá Shop',
				'price' => 165000,
				'product_id' => 757,
				'm_product_id' => 757,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			411 => 
			array (
				'id' => 2412,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 757,
				'm_product_id' => 757,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			412 => 
			array (
				'id' => 2413,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 758,
				'm_product_id' => 758,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			413 => 
			array (
				'id' => 2414,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 758,
				'm_product_id' => 758,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			414 => 
			array (
				'id' => 2415,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 758,
				'm_product_id' => 758,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			415 => 
			array (
				'id' => 2416,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 758,
				'm_product_id' => 758,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			416 => 
			array (
				'id' => 2417,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 759,
				'm_product_id' => 759,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			417 => 
			array (
				'id' => 2418,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 759,
				'm_product_id' => 759,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			418 => 
			array (
				'id' => 2419,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 759,
				'm_product_id' => 759,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			419 => 
			array (
				'id' => 2420,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 759,
				'm_product_id' => 759,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			420 => 
			array (
				'id' => 2421,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 760,
				'm_product_id' => 760,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			421 => 
			array (
				'id' => 2422,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 760,
				'm_product_id' => 760,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			422 => 
			array (
				'id' => 2423,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 760,
				'm_product_id' => 760,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			423 => 
			array (
				'id' => 2424,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 760,
				'm_product_id' => 760,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			424 => 
			array (
				'id' => 2425,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 761,
				'm_product_id' => 761,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			425 => 
			array (
				'id' => 2426,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 761,
				'm_product_id' => 761,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			426 => 
			array (
				'id' => 2427,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 761,
				'm_product_id' => 761,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			427 => 
			array (
				'id' => 2428,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 761,
				'm_product_id' => 761,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			428 => 
			array (
				'id' => 2429,
				'name' => 'Giá NPP',
				'price' => 33000,
				'product_id' => 762,
				'm_product_id' => 762,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			429 => 
			array (
				'id' => 2430,
				'name' => 'Giá Đại lý',
				'price' => 35000,
				'product_id' => 762,
				'm_product_id' => 762,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			430 => 
			array (
				'id' => 2431,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 762,
				'm_product_id' => 762,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			431 => 
			array (
				'id' => 2432,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 762,
				'm_product_id' => 762,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			432 => 
			array (
				'id' => 2433,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 763,
				'm_product_id' => 763,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			433 => 
			array (
				'id' => 2434,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 763,
				'm_product_id' => 763,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			434 => 
			array (
				'id' => 2435,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 763,
				'm_product_id' => 763,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			435 => 
			array (
				'id' => 2436,
				'name' => 'Giá Bán lẻ',
				'price' => 65000,
				'product_id' => 763,
				'm_product_id' => 763,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			436 => 
			array (
				'id' => 2437,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 764,
				'm_product_id' => 764,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			437 => 
			array (
				'id' => 2438,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 764,
				'm_product_id' => 764,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			438 => 
			array (
				'id' => 2439,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 764,
				'm_product_id' => 764,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			439 => 
			array (
				'id' => 2440,
				'name' => 'Giá Bán lẻ',
				'price' => 65000,
				'product_id' => 764,
				'm_product_id' => 764,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			440 => 
			array (
				'id' => 2441,
				'name' => 'Giá NPP',
				'price' => 54000,
				'product_id' => 765,
				'm_product_id' => 765,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			441 => 
			array (
				'id' => 2442,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 765,
				'm_product_id' => 765,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			442 => 
			array (
				'id' => 2443,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 765,
				'm_product_id' => 765,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			443 => 
			array (
				'id' => 2444,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 765,
				'm_product_id' => 765,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			444 => 
			array (
				'id' => 2445,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 766,
				'm_product_id' => 766,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			445 => 
			array (
				'id' => 2446,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 766,
				'm_product_id' => 766,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			446 => 
			array (
				'id' => 2447,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 766,
				'm_product_id' => 766,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			447 => 
			array (
				'id' => 2448,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 766,
				'm_product_id' => 766,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			448 => 
			array (
				'id' => 2449,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 767,
				'm_product_id' => 767,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			449 => 
			array (
				'id' => 2450,
				'name' => 'Giá Đại lý',
				'price' => 98000,
				'product_id' => 767,
				'm_product_id' => 767,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			450 => 
			array (
				'id' => 2451,
				'name' => 'Giá Shop',
				'price' => 100000,
				'product_id' => 767,
				'm_product_id' => 767,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			451 => 
			array (
				'id' => 2452,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 767,
				'm_product_id' => 767,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			452 => 
			array (
				'id' => 2453,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 768,
				'm_product_id' => 768,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			453 => 
			array (
				'id' => 2454,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 768,
				'm_product_id' => 768,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			454 => 
			array (
				'id' => 2455,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 768,
				'm_product_id' => 768,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			455 => 
			array (
				'id' => 2456,
				'name' => 'Giá Bán lẻ',
				'price' => 60000,
				'product_id' => 768,
				'm_product_id' => 768,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			456 => 
			array (
				'id' => 2457,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 769,
				'm_product_id' => 769,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			457 => 
			array (
				'id' => 2458,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 769,
				'm_product_id' => 769,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			458 => 
			array (
				'id' => 2459,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 769,
				'm_product_id' => 769,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			459 => 
			array (
				'id' => 2460,
				'name' => 'Giá Bán lẻ',
				'price' => 55000,
				'product_id' => 769,
				'm_product_id' => 769,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			460 => 
			array (
				'id' => 2461,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 770,
				'm_product_id' => 770,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			461 => 
			array (
				'id' => 2462,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 770,
				'm_product_id' => 770,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			462 => 
			array (
				'id' => 2463,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 770,
				'm_product_id' => 770,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			463 => 
			array (
				'id' => 2464,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 770,
				'm_product_id' => 770,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			464 => 
			array (
				'id' => 2465,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 771,
				'm_product_id' => 771,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			465 => 
			array (
				'id' => 2466,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 771,
				'm_product_id' => 771,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			466 => 
			array (
				'id' => 2467,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 771,
				'm_product_id' => 771,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			467 => 
			array (
				'id' => 2468,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 771,
				'm_product_id' => 771,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			468 => 
			array (
				'id' => 2469,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 772,
				'm_product_id' => 772,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			469 => 
			array (
				'id' => 2470,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 772,
				'm_product_id' => 772,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			470 => 
			array (
				'id' => 2471,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 772,
				'm_product_id' => 772,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			471 => 
			array (
				'id' => 2472,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 772,
				'm_product_id' => 772,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			472 => 
			array (
				'id' => 2473,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 773,
				'm_product_id' => 773,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			473 => 
			array (
				'id' => 2474,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 773,
				'm_product_id' => 773,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			474 => 
			array (
				'id' => 2475,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 773,
				'm_product_id' => 773,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			475 => 
			array (
				'id' => 2476,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 773,
				'm_product_id' => 773,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			476 => 
			array (
				'id' => 2477,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 774,
				'm_product_id' => 774,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			477 => 
			array (
				'id' => 2478,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 774,
				'm_product_id' => 774,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			478 => 
			array (
				'id' => 2479,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 774,
				'm_product_id' => 774,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			479 => 
			array (
				'id' => 2480,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 774,
				'm_product_id' => 774,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			480 => 
			array (
				'id' => 2481,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 775,
				'm_product_id' => 775,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			481 => 
			array (
				'id' => 2482,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 775,
				'm_product_id' => 775,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			482 => 
			array (
				'id' => 2483,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 775,
				'm_product_id' => 775,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			483 => 
			array (
				'id' => 2484,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 775,
				'm_product_id' => 775,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			484 => 
			array (
				'id' => 2485,
				'name' => 'Giá NPP',
				'price' => 163000,
				'product_id' => 776,
				'm_product_id' => 776,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			485 => 
			array (
				'id' => 2486,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 776,
				'm_product_id' => 776,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			486 => 
			array (
				'id' => 2487,
				'name' => 'Giá Shop',
				'price' => 175000,
				'product_id' => 776,
				'm_product_id' => 776,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			487 => 
			array (
				'id' => 2488,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 776,
				'm_product_id' => 776,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			488 => 
			array (
				'id' => 2489,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 777,
				'm_product_id' => 777,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			489 => 
			array (
				'id' => 2490,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 777,
				'm_product_id' => 777,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			490 => 
			array (
				'id' => 2491,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 777,
				'm_product_id' => 777,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			491 => 
			array (
				'id' => 2492,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 777,
				'm_product_id' => 777,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			492 => 
			array (
				'id' => 2493,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 778,
				'm_product_id' => 778,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			493 => 
			array (
				'id' => 2494,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 778,
				'm_product_id' => 778,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			494 => 
			array (
				'id' => 2495,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 778,
				'm_product_id' => 778,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			495 => 
			array (
				'id' => 2496,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 778,
				'm_product_id' => 778,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			496 => 
			array (
				'id' => 2497,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 779,
				'm_product_id' => 779,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			497 => 
			array (
				'id' => 2498,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 779,
				'm_product_id' => 779,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			498 => 
			array (
				'id' => 2499,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 779,
				'm_product_id' => 779,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			499 => 
			array (
				'id' => 2500,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 779,
				'm_product_id' => 779,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 2501,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 780,
				'm_product_id' => 780,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			1 => 
			array (
				'id' => 2502,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 780,
				'm_product_id' => 780,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			2 => 
			array (
				'id' => 2503,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 780,
				'm_product_id' => 780,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			3 => 
			array (
				'id' => 2504,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 780,
				'm_product_id' => 780,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			4 => 
			array (
				'id' => 2505,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 781,
				'm_product_id' => 781,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			5 => 
			array (
				'id' => 2506,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 781,
				'm_product_id' => 781,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			6 => 
			array (
				'id' => 2507,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 781,
				'm_product_id' => 781,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			7 => 
			array (
				'id' => 2508,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 781,
				'm_product_id' => 781,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			8 => 
			array (
				'id' => 2509,
				'name' => 'Giá NPP',
				'price' => 125000,
				'product_id' => 782,
				'm_product_id' => 782,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			9 => 
			array (
				'id' => 2510,
				'name' => 'Giá Đại lý',
				'price' => 130000,
				'product_id' => 782,
				'm_product_id' => 782,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			10 => 
			array (
				'id' => 2511,
				'name' => 'Giá Shop',
				'price' => 135000,
				'product_id' => 782,
				'm_product_id' => 782,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			11 => 
			array (
				'id' => 2512,
				'name' => 'Giá Bán lẻ',
				'price' => 140000,
				'product_id' => 782,
				'm_product_id' => 782,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			12 => 
			array (
				'id' => 2513,
				'name' => 'Giá NPP',
				'price' => 170000,
				'product_id' => 783,
				'm_product_id' => 783,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			13 => 
			array (
				'id' => 2514,
				'name' => 'Giá Đại lý',
				'price' => 175000,
				'product_id' => 783,
				'm_product_id' => 783,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			14 => 
			array (
				'id' => 2515,
				'name' => 'Giá Shop',
				'price' => 180000,
				'product_id' => 783,
				'm_product_id' => 783,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			15 => 
			array (
				'id' => 2516,
				'name' => 'Giá Bán lẻ',
				'price' => 185000,
				'product_id' => 783,
				'm_product_id' => 783,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			16 => 
			array (
				'id' => 2517,
				'name' => 'Giá NPP',
				'price' => 117000,
				'product_id' => 784,
				'm_product_id' => 784,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			17 => 
			array (
				'id' => 2518,
				'name' => 'Giá Đại lý',
				'price' => 120000,
				'product_id' => 784,
				'm_product_id' => 784,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			18 => 
			array (
				'id' => 2519,
				'name' => 'Giá Shop',
				'price' => 125000,
				'product_id' => 784,
				'm_product_id' => 784,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			19 => 
			array (
				'id' => 2520,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 784,
				'm_product_id' => 784,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			20 => 
			array (
				'id' => 2521,
				'name' => 'Giá NPP',
				'price' => 170000,
				'product_id' => 785,
				'm_product_id' => 785,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			21 => 
			array (
				'id' => 2522,
				'name' => 'Giá Đại lý',
				'price' => 175000,
				'product_id' => 785,
				'm_product_id' => 785,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			22 => 
			array (
				'id' => 2523,
				'name' => 'Giá Shop',
				'price' => 180000,
				'product_id' => 785,
				'm_product_id' => 785,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			23 => 
			array (
				'id' => 2524,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 785,
				'm_product_id' => 785,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			24 => 
			array (
				'id' => 2525,
				'name' => 'Giá NPP',
				'price' => 180000,
				'product_id' => 786,
				'm_product_id' => 786,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			25 => 
			array (
				'id' => 2526,
				'name' => 'Giá Đại lý',
				'price' => 185000,
				'product_id' => 786,
				'm_product_id' => 786,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			26 => 
			array (
				'id' => 2527,
				'name' => 'Giá Shop',
				'price' => 190000,
				'product_id' => 786,
				'm_product_id' => 786,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			27 => 
			array (
				'id' => 2528,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 786,
				'm_product_id' => 786,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			28 => 
			array (
				'id' => 2529,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 787,
				'm_product_id' => 787,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			29 => 
			array (
				'id' => 2530,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 787,
				'm_product_id' => 787,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			30 => 
			array (
				'id' => 2531,
				'name' => 'Giá Shop',
				'price' => 175000,
				'product_id' => 787,
				'm_product_id' => 787,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			31 => 
			array (
				'id' => 2532,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 787,
				'm_product_id' => 787,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			32 => 
			array (
				'id' => 2533,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 788,
				'm_product_id' => 788,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			33 => 
			array (
				'id' => 2534,
				'name' => 'Giá Đại lý',
				'price' => 160000,
				'product_id' => 788,
				'm_product_id' => 788,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			34 => 
			array (
				'id' => 2535,
				'name' => 'Giá Shop',
				'price' => 165000,
				'product_id' => 788,
				'm_product_id' => 788,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			35 => 
			array (
				'id' => 2536,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 788,
				'm_product_id' => 788,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			36 => 
			array (
				'id' => 2537,
				'name' => 'Giá NPP',
				'price' => 47000,
				'product_id' => 789,
				'm_product_id' => 789,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			37 => 
			array (
				'id' => 2538,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 789,
				'm_product_id' => 789,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			38 => 
			array (
				'id' => 2539,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 789,
				'm_product_id' => 789,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			39 => 
			array (
				'id' => 2540,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 789,
				'm_product_id' => 789,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			40 => 
			array (
				'id' => 2541,
				'name' => 'Giá NPP',
				'price' => 300000,
				'product_id' => 790,
				'm_product_id' => 790,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			41 => 
			array (
				'id' => 2542,
				'name' => 'Giá Đại lý',
				'price' => 310000,
				'product_id' => 790,
				'm_product_id' => 790,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			42 => 
			array (
				'id' => 2543,
				'name' => 'Giá Shop',
				'price' => 320000,
				'product_id' => 790,
				'm_product_id' => 790,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			43 => 
			array (
				'id' => 2544,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 790,
				'm_product_id' => 790,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			44 => 
			array (
				'id' => 2545,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 791,
				'm_product_id' => 791,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			45 => 
			array (
				'id' => 2546,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 791,
				'm_product_id' => 791,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			46 => 
			array (
				'id' => 2547,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 791,
				'm_product_id' => 791,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			47 => 
			array (
				'id' => 2548,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 791,
				'm_product_id' => 791,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			48 => 
			array (
				'id' => 2549,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 792,
				'm_product_id' => 792,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			49 => 
			array (
				'id' => 2550,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 792,
				'm_product_id' => 792,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			50 => 
			array (
				'id' => 2551,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 792,
				'm_product_id' => 792,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			51 => 
			array (
				'id' => 2552,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 792,
				'm_product_id' => 792,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			52 => 
			array (
				'id' => 2553,
				'name' => 'Giá NPP',
				'price' => 225000,
				'product_id' => 793,
				'm_product_id' => 793,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			53 => 
			array (
				'id' => 2554,
				'name' => 'Giá Đại lý',
				'price' => 230000,
				'product_id' => 793,
				'm_product_id' => 793,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			54 => 
			array (
				'id' => 2555,
				'name' => 'Giá Shop',
				'price' => 240000,
				'product_id' => 793,
				'm_product_id' => 793,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			55 => 
			array (
				'id' => 2556,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 793,
				'm_product_id' => 793,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			56 => 
			array (
				'id' => 2557,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 794,
				'm_product_id' => 794,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			57 => 
			array (
				'id' => 2558,
				'name' => 'Giá Đại lý',
				'price' => 195000,
				'product_id' => 794,
				'm_product_id' => 794,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			58 => 
			array (
				'id' => 2559,
				'name' => 'Giá Shop',
				'price' => 205000,
				'product_id' => 794,
				'm_product_id' => 794,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			59 => 
			array (
				'id' => 2560,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 794,
				'm_product_id' => 794,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			60 => 
			array (
				'id' => 2561,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 795,
				'm_product_id' => 795,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			61 => 
			array (
				'id' => 2562,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 795,
				'm_product_id' => 795,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			62 => 
			array (
				'id' => 2563,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 795,
				'm_product_id' => 795,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			63 => 
			array (
				'id' => 2564,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 795,
				'm_product_id' => 795,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			64 => 
			array (
				'id' => 2565,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 796,
				'm_product_id' => 796,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			65 => 
			array (
				'id' => 2566,
				'name' => 'Giá Đại lý',
				'price' => 73000,
				'product_id' => 796,
				'm_product_id' => 796,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			66 => 
			array (
				'id' => 2567,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 796,
				'm_product_id' => 796,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			67 => 
			array (
				'id' => 2568,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 796,
				'm_product_id' => 796,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			68 => 
			array (
				'id' => 2569,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 797,
				'm_product_id' => 797,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			69 => 
			array (
				'id' => 2570,
				'name' => 'Giá Đại lý',
				'price' => 100000,
				'product_id' => 797,
				'm_product_id' => 797,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			70 => 
			array (
				'id' => 2571,
				'name' => 'Giá Shop',
				'price' => 110000,
				'product_id' => 797,
				'm_product_id' => 797,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			71 => 
			array (
				'id' => 2572,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 797,
				'm_product_id' => 797,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			72 => 
			array (
				'id' => 2573,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 798,
				'm_product_id' => 798,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			73 => 
			array (
				'id' => 2574,
				'name' => 'Giá Đại lý',
				'price' => 158000,
				'product_id' => 798,
				'm_product_id' => 798,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			74 => 
			array (
				'id' => 2575,
				'name' => 'Giá Shop',
				'price' => 165000,
				'product_id' => 798,
				'm_product_id' => 798,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			75 => 
			array (
				'id' => 2576,
				'name' => 'Giá Bán lẻ',
				'price' => 170000,
				'product_id' => 798,
				'm_product_id' => 798,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			76 => 
			array (
				'id' => 2577,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 799,
				'm_product_id' => 799,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			77 => 
			array (
				'id' => 2578,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 799,
				'm_product_id' => 799,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			78 => 
			array (
				'id' => 2579,
				'name' => 'Giá Shop',
				'price' => 175000,
				'product_id' => 799,
				'm_product_id' => 799,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			79 => 
			array (
				'id' => 2580,
				'name' => 'Giá Bán lẻ',
				'price' => 180000,
				'product_id' => 799,
				'm_product_id' => 799,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			80 => 
			array (
				'id' => 2581,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 800,
				'm_product_id' => 800,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			81 => 
			array (
				'id' => 2582,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 800,
				'm_product_id' => 800,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			82 => 
			array (
				'id' => 2583,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 800,
				'm_product_id' => 800,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			83 => 
			array (
				'id' => 2584,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 800,
				'm_product_id' => 800,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			84 => 
			array (
				'id' => 2585,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 801,
				'm_product_id' => 801,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			85 => 
			array (
				'id' => 2586,
				'name' => 'Giá Đại lý',
				'price' => 165000,
				'product_id' => 801,
				'm_product_id' => 801,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			86 => 
			array (
				'id' => 2587,
				'name' => 'Giá Shop',
				'price' => 170000,
				'product_id' => 801,
				'm_product_id' => 801,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			87 => 
			array (
				'id' => 2588,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 801,
				'm_product_id' => 801,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			88 => 
			array (
				'id' => 2589,
				'name' => 'Giá NPP',
				'price' => 160000,
				'product_id' => 802,
				'm_product_id' => 802,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			89 => 
			array (
				'id' => 2590,
				'name' => 'Giá Đại lý',
				'price' => 165000,
				'product_id' => 802,
				'm_product_id' => 802,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			90 => 
			array (
				'id' => 2591,
				'name' => 'Giá Shop',
				'price' => 175000,
				'product_id' => 802,
				'm_product_id' => 802,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			91 => 
			array (
				'id' => 2592,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 802,
				'm_product_id' => 802,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			92 => 
			array (
				'id' => 2593,
				'name' => 'Giá NPP',
				'price' => 175000,
				'product_id' => 803,
				'm_product_id' => 803,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			93 => 
			array (
				'id' => 2594,
				'name' => 'Giá Đại lý',
				'price' => 180000,
				'product_id' => 803,
				'm_product_id' => 803,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			94 => 
			array (
				'id' => 2595,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 803,
				'm_product_id' => 803,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			95 => 
			array (
				'id' => 2596,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 803,
				'm_product_id' => 803,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			96 => 
			array (
				'id' => 2597,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 804,
				'm_product_id' => 804,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			97 => 
			array (
				'id' => 2598,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 804,
				'm_product_id' => 804,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			98 => 
			array (
				'id' => 2599,
				'name' => 'Giá Shop',
				'price' => 175000,
				'product_id' => 804,
				'm_product_id' => 804,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			99 => 
			array (
				'id' => 2600,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 804,
				'm_product_id' => 804,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			100 => 
			array (
				'id' => 2601,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 805,
				'm_product_id' => 805,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			101 => 
			array (
				'id' => 2602,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 805,
				'm_product_id' => 805,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			102 => 
			array (
				'id' => 2603,
				'name' => 'Giá Shop',
				'price' => 180000,
				'product_id' => 805,
				'm_product_id' => 805,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			103 => 
			array (
				'id' => 2604,
				'name' => 'Giá Bán lẻ',
				'price' => 185000,
				'product_id' => 805,
				'm_product_id' => 805,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			104 => 
			array (
				'id' => 2605,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 806,
				'm_product_id' => 806,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			105 => 
			array (
				'id' => 2606,
				'name' => 'Giá Đại lý',
				'price' => 160000,
				'product_id' => 806,
				'm_product_id' => 806,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			106 => 
			array (
				'id' => 2607,
				'name' => 'Giá Shop',
				'price' => 165000,
				'product_id' => 806,
				'm_product_id' => 806,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			107 => 
			array (
				'id' => 2608,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 806,
				'm_product_id' => 806,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			108 => 
			array (
				'id' => 2609,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 807,
				'm_product_id' => 807,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			109 => 
			array (
				'id' => 2610,
				'name' => 'Giá Đại lý',
				'price' => 160000,
				'product_id' => 807,
				'm_product_id' => 807,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			110 => 
			array (
				'id' => 2611,
				'name' => 'Giá Shop',
				'price' => 165000,
				'product_id' => 807,
				'm_product_id' => 807,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			111 => 
			array (
				'id' => 2612,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 807,
				'm_product_id' => 807,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			112 => 
			array (
				'id' => 2613,
				'name' => 'Giá NPP',
				'price' => 160000,
				'product_id' => 808,
				'm_product_id' => 808,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			113 => 
			array (
				'id' => 2614,
				'name' => 'Giá Đại lý',
				'price' => 165000,
				'product_id' => 808,
				'm_product_id' => 808,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			114 => 
			array (
				'id' => 2615,
				'name' => 'Giá Shop',
				'price' => 170000,
				'product_id' => 808,
				'm_product_id' => 808,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			115 => 
			array (
				'id' => 2616,
				'name' => 'Giá Bán lẻ',
				'price' => 175000,
				'product_id' => 808,
				'm_product_id' => 808,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			116 => 
			array (
				'id' => 2617,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 809,
				'm_product_id' => 809,
				'created_at' => '2015-08-05 08:54:39',
				'updated_at' => '2015-08-05 08:54:39',
			),
			117 => 
			array (
				'id' => 2618,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 809,
				'm_product_id' => 809,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			118 => 
			array (
				'id' => 2619,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 809,
				'm_product_id' => 809,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			119 => 
			array (
				'id' => 2620,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 809,
				'm_product_id' => 809,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			120 => 
			array (
				'id' => 2621,
				'name' => 'Giá NPP',
				'price' => 160000,
				'product_id' => 810,
				'm_product_id' => 810,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			121 => 
			array (
				'id' => 2622,
				'name' => 'Giá Đại lý',
				'price' => 165000,
				'product_id' => 810,
				'm_product_id' => 810,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			122 => 
			array (
				'id' => 2623,
				'name' => 'Giá Shop',
				'price' => 175000,
				'product_id' => 810,
				'm_product_id' => 810,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			123 => 
			array (
				'id' => 2624,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 810,
				'm_product_id' => 810,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			124 => 
			array (
				'id' => 2625,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 811,
				'm_product_id' => 811,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			125 => 
			array (
				'id' => 2626,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 811,
				'm_product_id' => 811,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			126 => 
			array (
				'id' => 2627,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 811,
				'm_product_id' => 811,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			127 => 
			array (
				'id' => 2628,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 811,
				'm_product_id' => 811,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			128 => 
			array (
				'id' => 2629,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 812,
				'm_product_id' => 812,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			129 => 
			array (
				'id' => 2630,
				'name' => 'Giá Đại lý',
				'price' => 100000,
				'product_id' => 812,
				'm_product_id' => 812,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			130 => 
			array (
				'id' => 2631,
				'name' => 'Giá Shop',
				'price' => 105000,
				'product_id' => 812,
				'm_product_id' => 812,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			131 => 
			array (
				'id' => 2632,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 812,
				'm_product_id' => 812,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			132 => 
			array (
				'id' => 2633,
				'name' => 'Giá NPP',
				'price' => 130000,
				'product_id' => 813,
				'm_product_id' => 813,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			133 => 
			array (
				'id' => 2634,
				'name' => 'Giá Đại lý',
				'price' => 135000,
				'product_id' => 813,
				'm_product_id' => 813,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			134 => 
			array (
				'id' => 2635,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 813,
				'm_product_id' => 813,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			135 => 
			array (
				'id' => 2636,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 813,
				'm_product_id' => 813,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			136 => 
			array (
				'id' => 2637,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 814,
				'm_product_id' => 814,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			137 => 
			array (
				'id' => 2638,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 814,
				'm_product_id' => 814,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			138 => 
			array (
				'id' => 2639,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 814,
				'm_product_id' => 814,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			139 => 
			array (
				'id' => 2640,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 814,
				'm_product_id' => 814,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			140 => 
			array (
				'id' => 2641,
				'name' => 'Giá NPP',
				'price' => 115000,
				'product_id' => 815,
				'm_product_id' => 815,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			141 => 
			array (
				'id' => 2642,
				'name' => 'Giá Đại lý',
				'price' => 125000,
				'product_id' => 815,
				'm_product_id' => 815,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			142 => 
			array (
				'id' => 2643,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 815,
				'm_product_id' => 815,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			143 => 
			array (
				'id' => 2644,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 815,
				'm_product_id' => 815,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			144 => 
			array (
				'id' => 2645,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 816,
				'm_product_id' => 816,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			145 => 
			array (
				'id' => 2646,
				'name' => 'Giá Đại lý',
				'price' => 175000,
				'product_id' => 816,
				'm_product_id' => 816,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			146 => 
			array (
				'id' => 2647,
				'name' => 'Giá Shop',
				'price' => 185000,
				'product_id' => 816,
				'm_product_id' => 816,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			147 => 
			array (
				'id' => 2648,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 816,
				'm_product_id' => 816,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			148 => 
			array (
				'id' => 2649,
				'name' => 'Giá NPP',
				'price' => 115000,
				'product_id' => 817,
				'm_product_id' => 817,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			149 => 
			array (
				'id' => 2650,
				'name' => 'Giá Đại lý',
				'price' => 125000,
				'product_id' => 817,
				'm_product_id' => 817,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			150 => 
			array (
				'id' => 2651,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 817,
				'm_product_id' => 817,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			151 => 
			array (
				'id' => 2652,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 817,
				'm_product_id' => 817,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			152 => 
			array (
				'id' => 2653,
				'name' => 'Giá NPP',
				'price' => 160000,
				'product_id' => 818,
				'm_product_id' => 818,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			153 => 
			array (
				'id' => 2654,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 818,
				'm_product_id' => 818,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			154 => 
			array (
				'id' => 2655,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 818,
				'm_product_id' => 818,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			155 => 
			array (
				'id' => 2656,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 818,
				'm_product_id' => 818,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			156 => 
			array (
				'id' => 2657,
				'name' => 'Giá NPP',
				'price' => 170000,
				'product_id' => 819,
				'm_product_id' => 819,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			157 => 
			array (
				'id' => 2658,
				'name' => 'Giá Đại lý',
				'price' => 180000,
				'product_id' => 819,
				'm_product_id' => 819,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			158 => 
			array (
				'id' => 2659,
				'name' => 'Giá Shop',
				'price' => 190000,
				'product_id' => 819,
				'm_product_id' => 819,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			159 => 
			array (
				'id' => 2660,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 819,
				'm_product_id' => 819,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			160 => 
			array (
				'id' => 2661,
				'name' => 'Giá NPP',
				'price' => 170000,
				'product_id' => 820,
				'm_product_id' => 820,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			161 => 
			array (
				'id' => 2662,
				'name' => 'Giá Đại lý',
				'price' => 180000,
				'product_id' => 820,
				'm_product_id' => 820,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			162 => 
			array (
				'id' => 2663,
				'name' => 'Giá Shop',
				'price' => 185000,
				'product_id' => 820,
				'm_product_id' => 820,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			163 => 
			array (
				'id' => 2664,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 820,
				'm_product_id' => 820,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			164 => 
			array (
				'id' => 2665,
				'name' => 'Giá NPP',
				'price' => 170000,
				'product_id' => 821,
				'm_product_id' => 821,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			165 => 
			array (
				'id' => 2666,
				'name' => 'Giá Đại lý',
				'price' => 180000,
				'product_id' => 821,
				'm_product_id' => 821,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			166 => 
			array (
				'id' => 2667,
				'name' => 'Giá Shop',
				'price' => 190000,
				'product_id' => 821,
				'm_product_id' => 821,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			167 => 
			array (
				'id' => 2668,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 821,
				'm_product_id' => 821,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			168 => 
			array (
				'id' => 2669,
				'name' => 'Giá NPP',
				'price' => 155000,
				'product_id' => 822,
				'm_product_id' => 822,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			169 => 
			array (
				'id' => 2670,
				'name' => 'Giá Đại lý',
				'price' => 160000,
				'product_id' => 822,
				'm_product_id' => 822,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			170 => 
			array (
				'id' => 2671,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 822,
				'm_product_id' => 822,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			171 => 
			array (
				'id' => 2672,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 822,
				'm_product_id' => 822,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			172 => 
			array (
				'id' => 2673,
				'name' => 'Giá NPP',
				'price' => 120000,
				'product_id' => 823,
				'm_product_id' => 823,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			173 => 
			array (
				'id' => 2674,
				'name' => 'Giá Đại lý',
				'price' => 125000,
				'product_id' => 823,
				'm_product_id' => 823,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			174 => 
			array (
				'id' => 2675,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 823,
				'm_product_id' => 823,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			175 => 
			array (
				'id' => 2676,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 823,
				'm_product_id' => 823,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			176 => 
			array (
				'id' => 2677,
				'name' => 'Giá NPP',
				'price' => 110000,
				'product_id' => 824,
				'm_product_id' => 824,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			177 => 
			array (
				'id' => 2678,
				'name' => 'Giá Đại lý',
				'price' => 120000,
				'product_id' => 824,
				'm_product_id' => 824,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			178 => 
			array (
				'id' => 2679,
				'name' => 'Giá Shop',
				'price' => 125000,
				'product_id' => 824,
				'm_product_id' => 824,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			179 => 
			array (
				'id' => 2680,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 824,
				'm_product_id' => 824,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			180 => 
			array (
				'id' => 2681,
				'name' => 'Giá NPP',
				'price' => 270000,
				'product_id' => 825,
				'm_product_id' => 825,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			181 => 
			array (
				'id' => 2682,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 825,
				'm_product_id' => 825,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			182 => 
			array (
				'id' => 2683,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 825,
				'm_product_id' => 825,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			183 => 
			array (
				'id' => 2684,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 825,
				'm_product_id' => 825,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			184 => 
			array (
				'id' => 2685,
				'name' => 'Giá NPP',
				'price' => 30000,
				'product_id' => 826,
				'm_product_id' => 826,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			185 => 
			array (
				'id' => 2686,
				'name' => 'Giá Đại lý',
				'price' => 31000,
				'product_id' => 826,
				'm_product_id' => 826,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			186 => 
			array (
				'id' => 2687,
				'name' => 'Giá Shop',
				'price' => 32000,
				'product_id' => 826,
				'm_product_id' => 826,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			187 => 
			array (
				'id' => 2688,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 826,
				'm_product_id' => 826,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			188 => 
			array (
				'id' => 2689,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 827,
				'm_product_id' => 827,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			189 => 
			array (
				'id' => 2690,
				'name' => 'Giá Đại lý',
				'price' => 195000,
				'product_id' => 827,
				'm_product_id' => 827,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			190 => 
			array (
				'id' => 2691,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 827,
				'm_product_id' => 827,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			191 => 
			array (
				'id' => 2692,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 827,
				'm_product_id' => 827,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			192 => 
			array (
				'id' => 2693,
				'name' => 'Giá NPP',
				'price' => 215000,
				'product_id' => 828,
				'm_product_id' => 828,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			193 => 
			array (
				'id' => 2694,
				'name' => 'Giá Đại lý',
				'price' => 220000,
				'product_id' => 828,
				'm_product_id' => 828,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			194 => 
			array (
				'id' => 2695,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 828,
				'm_product_id' => 828,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			195 => 
			array (
				'id' => 2696,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 828,
				'm_product_id' => 828,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			196 => 
			array (
				'id' => 2697,
				'name' => 'Giá NPP',
				'price' => 18000,
				'product_id' => 829,
				'm_product_id' => 829,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			197 => 
			array (
				'id' => 2698,
				'name' => 'Giá Đại lý',
				'price' => 19000,
				'product_id' => 829,
				'm_product_id' => 829,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			198 => 
			array (
				'id' => 2699,
				'name' => 'Giá Shop',
				'price' => 21000,
				'product_id' => 829,
				'm_product_id' => 829,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			199 => 
			array (
				'id' => 2700,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 829,
				'm_product_id' => 829,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			200 => 
			array (
				'id' => 2701,
				'name' => 'Giá NPP',
				'price' => 270000,
				'product_id' => 830,
				'm_product_id' => 830,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			201 => 
			array (
				'id' => 2702,
				'name' => 'Giá Đại lý',
				'price' => 280000,
				'product_id' => 830,
				'm_product_id' => 830,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			202 => 
			array (
				'id' => 2703,
				'name' => 'Giá Shop',
				'price' => 300000,
				'product_id' => 830,
				'm_product_id' => 830,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			203 => 
			array (
				'id' => 2704,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 830,
				'm_product_id' => 830,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			204 => 
			array (
				'id' => 2705,
				'name' => 'Giá NPP',
				'price' => 245000,
				'product_id' => 831,
				'm_product_id' => 831,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			205 => 
			array (
				'id' => 2706,
				'name' => 'Giá Đại lý',
				'price' => 255000,
				'product_id' => 831,
				'm_product_id' => 831,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			206 => 
			array (
				'id' => 2707,
				'name' => 'Giá Shop',
				'price' => 260000,
				'product_id' => 831,
				'm_product_id' => 831,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			207 => 
			array (
				'id' => 2708,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 831,
				'm_product_id' => 831,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			208 => 
			array (
				'id' => 2709,
				'name' => 'Giá NPP',
				'price' => 120000,
				'product_id' => 832,
				'm_product_id' => 832,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			209 => 
			array (
				'id' => 2710,
				'name' => 'Giá Đại lý',
				'price' => 125000,
				'product_id' => 832,
				'm_product_id' => 832,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			210 => 
			array (
				'id' => 2711,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 832,
				'm_product_id' => 832,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			211 => 
			array (
				'id' => 2712,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 832,
				'm_product_id' => 832,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			212 => 
			array (
				'id' => 2713,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 833,
				'm_product_id' => 833,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			213 => 
			array (
				'id' => 2714,
				'name' => 'Giá Đại lý',
				'price' => 195000,
				'product_id' => 833,
				'm_product_id' => 833,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			214 => 
			array (
				'id' => 2715,
				'name' => 'Giá Shop',
				'price' => 200000,
				'product_id' => 833,
				'm_product_id' => 833,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			215 => 
			array (
				'id' => 2716,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 833,
				'm_product_id' => 833,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			216 => 
			array (
				'id' => 2717,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 834,
				'm_product_id' => 834,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			217 => 
			array (
				'id' => 2718,
				'name' => 'Giá Đại lý',
				'price' => 195000,
				'product_id' => 834,
				'm_product_id' => 834,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			218 => 
			array (
				'id' => 2719,
				'name' => 'Giá Shop',
				'price' => 200000,
				'product_id' => 834,
				'm_product_id' => 834,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			219 => 
			array (
				'id' => 2720,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 834,
				'm_product_id' => 834,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			220 => 
			array (
				'id' => 2721,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 835,
				'm_product_id' => 835,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			221 => 
			array (
				'id' => 2722,
				'name' => 'Giá Đại lý',
				'price' => 195000,
				'product_id' => 835,
				'm_product_id' => 835,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			222 => 
			array (
				'id' => 2723,
				'name' => 'Giá Shop',
				'price' => 200000,
				'product_id' => 835,
				'm_product_id' => 835,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			223 => 
			array (
				'id' => 2724,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 835,
				'm_product_id' => 835,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			224 => 
			array (
				'id' => 2725,
				'name' => 'Giá NPP',
				'price' => 235000,
				'product_id' => 836,
				'm_product_id' => 836,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			225 => 
			array (
				'id' => 2726,
				'name' => 'Giá Đại lý',
				'price' => 240000,
				'product_id' => 836,
				'm_product_id' => 836,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			226 => 
			array (
				'id' => 2727,
				'name' => 'Giá Shop',
				'price' => 250000,
				'product_id' => 836,
				'm_product_id' => 836,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			227 => 
			array (
				'id' => 2728,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 836,
				'm_product_id' => 836,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			228 => 
			array (
				'id' => 2729,
				'name' => 'Giá NPP',
				'price' => 210000,
				'product_id' => 837,
				'm_product_id' => 837,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			229 => 
			array (
				'id' => 2730,
				'name' => 'Giá Đại lý',
				'price' => 220000,
				'product_id' => 837,
				'm_product_id' => 837,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			230 => 
			array (
				'id' => 2731,
				'name' => 'Giá Shop',
				'price' => 230000,
				'product_id' => 837,
				'm_product_id' => 837,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			231 => 
			array (
				'id' => 2732,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 837,
				'm_product_id' => 837,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			232 => 
			array (
				'id' => 2733,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 838,
				'm_product_id' => 838,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			233 => 
			array (
				'id' => 2734,
				'name' => 'Giá Đại lý',
				'price' => 195000,
				'product_id' => 838,
				'm_product_id' => 838,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			234 => 
			array (
				'id' => 2735,
				'name' => 'Giá Shop',
				'price' => 200000,
				'product_id' => 838,
				'm_product_id' => 838,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			235 => 
			array (
				'id' => 2736,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 838,
				'm_product_id' => 838,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			236 => 
			array (
				'id' => 2737,
				'name' => 'Giá NPP',
				'price' => 28000,
				'product_id' => 839,
				'm_product_id' => 839,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			237 => 
			array (
				'id' => 2738,
				'name' => 'Giá Đại lý',
				'price' => 30000,
				'product_id' => 839,
				'm_product_id' => 839,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			238 => 
			array (
				'id' => 2739,
				'name' => 'Giá Shop',
				'price' => 35000,
				'product_id' => 839,
				'm_product_id' => 839,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			239 => 
			array (
				'id' => 2740,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 839,
				'm_product_id' => 839,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			240 => 
			array (
				'id' => 2741,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 840,
				'm_product_id' => 840,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			241 => 
			array (
				'id' => 2742,
				'name' => 'Giá Đại lý',
				'price' => 69000,
				'product_id' => 840,
				'm_product_id' => 840,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			242 => 
			array (
				'id' => 2743,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 840,
				'm_product_id' => 840,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			243 => 
			array (
				'id' => 2744,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 840,
				'm_product_id' => 840,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			244 => 
			array (
				'id' => 2745,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 841,
				'm_product_id' => 841,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			245 => 
			array (
				'id' => 2746,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 841,
				'm_product_id' => 841,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			246 => 
			array (
				'id' => 2747,
				'name' => 'Giá Shop',
				'price' => 82000,
				'product_id' => 841,
				'm_product_id' => 841,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			247 => 
			array (
				'id' => 2748,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 841,
				'm_product_id' => 841,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			248 => 
			array (
				'id' => 2749,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 842,
				'm_product_id' => 842,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			249 => 
			array (
				'id' => 2750,
				'name' => 'Giá Đại lý',
				'price' => 47000,
				'product_id' => 842,
				'm_product_id' => 842,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			250 => 
			array (
				'id' => 2751,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 842,
				'm_product_id' => 842,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			251 => 
			array (
				'id' => 2752,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 842,
				'm_product_id' => 842,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			252 => 
			array (
				'id' => 2753,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 843,
				'm_product_id' => 843,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			253 => 
			array (
				'id' => 2754,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 843,
				'm_product_id' => 843,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			254 => 
			array (
				'id' => 2755,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 843,
				'm_product_id' => 843,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			255 => 
			array (
				'id' => 2756,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 843,
				'm_product_id' => 843,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			256 => 
			array (
				'id' => 2757,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 844,
				'm_product_id' => 844,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			257 => 
			array (
				'id' => 2758,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 844,
				'm_product_id' => 844,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			258 => 
			array (
				'id' => 2759,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 844,
				'm_product_id' => 844,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			259 => 
			array (
				'id' => 2760,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 844,
				'm_product_id' => 844,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			260 => 
			array (
				'id' => 2761,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 845,
				'm_product_id' => 845,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			261 => 
			array (
				'id' => 2762,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 845,
				'm_product_id' => 845,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			262 => 
			array (
				'id' => 2763,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 845,
				'm_product_id' => 845,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			263 => 
			array (
				'id' => 2764,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 845,
				'm_product_id' => 845,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			264 => 
			array (
				'id' => 2765,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 846,
				'm_product_id' => 846,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			265 => 
			array (
				'id' => 2766,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 846,
				'm_product_id' => 846,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			266 => 
			array (
				'id' => 2767,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 846,
				'm_product_id' => 846,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			267 => 
			array (
				'id' => 2768,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 846,
				'm_product_id' => 846,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			268 => 
			array (
				'id' => 2769,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 847,
				'm_product_id' => 847,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			269 => 
			array (
				'id' => 2770,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 847,
				'm_product_id' => 847,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			270 => 
			array (
				'id' => 2771,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 847,
				'm_product_id' => 847,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			271 => 
			array (
				'id' => 2772,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 847,
				'm_product_id' => 847,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			272 => 
			array (
				'id' => 2773,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 848,
				'm_product_id' => 848,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			273 => 
			array (
				'id' => 2774,
				'name' => 'Giá Đại lý',
				'price' => 84000,
				'product_id' => 848,
				'm_product_id' => 848,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			274 => 
			array (
				'id' => 2775,
				'name' => 'Giá Shop',
				'price' => 86000,
				'product_id' => 848,
				'm_product_id' => 848,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			275 => 
			array (
				'id' => 2776,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 848,
				'm_product_id' => 848,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			276 => 
			array (
				'id' => 2777,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 849,
				'm_product_id' => 849,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			277 => 
			array (
				'id' => 2778,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 849,
				'm_product_id' => 849,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			278 => 
			array (
				'id' => 2779,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 849,
				'm_product_id' => 849,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			279 => 
			array (
				'id' => 2780,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 849,
				'm_product_id' => 849,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			280 => 
			array (
				'id' => 2781,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 850,
				'm_product_id' => 850,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			281 => 
			array (
				'id' => 2782,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 850,
				'm_product_id' => 850,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			282 => 
			array (
				'id' => 2783,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 850,
				'm_product_id' => 850,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			283 => 
			array (
				'id' => 2784,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 850,
				'm_product_id' => 850,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			284 => 
			array (
				'id' => 2785,
				'name' => 'Giá NPP',
				'price' => 24000,
				'product_id' => 851,
				'm_product_id' => 851,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			285 => 
			array (
				'id' => 2786,
				'name' => 'Giá Đại lý',
				'price' => 25000,
				'product_id' => 851,
				'm_product_id' => 851,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			286 => 
			array (
				'id' => 2787,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 851,
				'm_product_id' => 851,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			287 => 
			array (
				'id' => 2788,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 851,
				'm_product_id' => 851,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			288 => 
			array (
				'id' => 2789,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 852,
				'm_product_id' => 852,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			289 => 
			array (
				'id' => 2790,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 852,
				'm_product_id' => 852,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			290 => 
			array (
				'id' => 2791,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 852,
				'm_product_id' => 852,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			291 => 
			array (
				'id' => 2792,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 852,
				'm_product_id' => 852,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			292 => 
			array (
				'id' => 2793,
				'name' => 'Giá NPP',
				'price' => 74000,
				'product_id' => 853,
				'm_product_id' => 853,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			293 => 
			array (
				'id' => 2794,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 853,
				'm_product_id' => 853,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			294 => 
			array (
				'id' => 2795,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 853,
				'm_product_id' => 853,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			295 => 
			array (
				'id' => 2796,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 853,
				'm_product_id' => 853,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			296 => 
			array (
				'id' => 2797,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 854,
				'm_product_id' => 854,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			297 => 
			array (
				'id' => 2798,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 854,
				'm_product_id' => 854,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			298 => 
			array (
				'id' => 2799,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 854,
				'm_product_id' => 854,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			299 => 
			array (
				'id' => 2800,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 854,
				'm_product_id' => 854,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			300 => 
			array (
				'id' => 2801,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 855,
				'm_product_id' => 855,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			301 => 
			array (
				'id' => 2802,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 855,
				'm_product_id' => 855,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			302 => 
			array (
				'id' => 2803,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 855,
				'm_product_id' => 855,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			303 => 
			array (
				'id' => 2804,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 855,
				'm_product_id' => 855,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			304 => 
			array (
				'id' => 2805,
				'name' => 'Giá NPP',
				'price' => 100000,
				'product_id' => 856,
				'm_product_id' => 856,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			305 => 
			array (
				'id' => 2806,
				'name' => 'Giá Đại lý',
				'price' => 102000,
				'product_id' => 856,
				'm_product_id' => 856,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			306 => 
			array (
				'id' => 2807,
				'name' => 'Giá Shop',
				'price' => 105000,
				'product_id' => 856,
				'm_product_id' => 856,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			307 => 
			array (
				'id' => 2808,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 856,
				'm_product_id' => 856,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			308 => 
			array (
				'id' => 2809,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 857,
				'm_product_id' => 857,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			309 => 
			array (
				'id' => 2810,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 857,
				'm_product_id' => 857,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			310 => 
			array (
				'id' => 2811,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 857,
				'm_product_id' => 857,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			311 => 
			array (
				'id' => 2812,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 857,
				'm_product_id' => 857,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			312 => 
			array (
				'id' => 2813,
				'name' => 'Giá NPP',
				'price' => 61000,
				'product_id' => 858,
				'm_product_id' => 858,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			313 => 
			array (
				'id' => 2814,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 858,
				'm_product_id' => 858,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			314 => 
			array (
				'id' => 2815,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 858,
				'm_product_id' => 858,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			315 => 
			array (
				'id' => 2816,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 858,
				'm_product_id' => 858,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			316 => 
			array (
				'id' => 2817,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 859,
				'm_product_id' => 859,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			317 => 
			array (
				'id' => 2818,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 859,
				'm_product_id' => 859,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			318 => 
			array (
				'id' => 2819,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 859,
				'm_product_id' => 859,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			319 => 
			array (
				'id' => 2820,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 859,
				'm_product_id' => 859,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			320 => 
			array (
				'id' => 2821,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 860,
				'm_product_id' => 860,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			321 => 
			array (
				'id' => 2822,
				'name' => 'Giá Đại lý',
				'price' => 86000,
				'product_id' => 860,
				'm_product_id' => 860,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			322 => 
			array (
				'id' => 2823,
				'name' => 'Giá Shop',
				'price' => 88000,
				'product_id' => 860,
				'm_product_id' => 860,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			323 => 
			array (
				'id' => 2824,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 860,
				'm_product_id' => 860,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			324 => 
			array (
				'id' => 2825,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 861,
				'm_product_id' => 861,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			325 => 
			array (
				'id' => 2826,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 861,
				'm_product_id' => 861,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			326 => 
			array (
				'id' => 2827,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 861,
				'm_product_id' => 861,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			327 => 
			array (
				'id' => 2828,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 861,
				'm_product_id' => 861,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			328 => 
			array (
				'id' => 2829,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 862,
				'm_product_id' => 862,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			329 => 
			array (
				'id' => 2830,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 862,
				'm_product_id' => 862,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			330 => 
			array (
				'id' => 2831,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 862,
				'm_product_id' => 862,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			331 => 
			array (
				'id' => 2832,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 862,
				'm_product_id' => 862,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			332 => 
			array (
				'id' => 2833,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 863,
				'm_product_id' => 863,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			333 => 
			array (
				'id' => 2834,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 863,
				'm_product_id' => 863,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			334 => 
			array (
				'id' => 2835,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 863,
				'm_product_id' => 863,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			335 => 
			array (
				'id' => 2836,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 863,
				'm_product_id' => 863,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			336 => 
			array (
				'id' => 2837,
				'name' => 'Giá NPP',
				'price' => 54000,
				'product_id' => 864,
				'm_product_id' => 864,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			337 => 
			array (
				'id' => 2838,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 864,
				'm_product_id' => 864,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			338 => 
			array (
				'id' => 2839,
				'name' => 'Giá Shop',
				'price' => 57000,
				'product_id' => 864,
				'm_product_id' => 864,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			339 => 
			array (
				'id' => 2840,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 864,
				'm_product_id' => 864,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			340 => 
			array (
				'id' => 2841,
				'name' => 'Giá NPP',
				'price' => 59000,
				'product_id' => 865,
				'm_product_id' => 865,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			341 => 
			array (
				'id' => 2842,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 865,
				'm_product_id' => 865,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			342 => 
			array (
				'id' => 2843,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 865,
				'm_product_id' => 865,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			343 => 
			array (
				'id' => 2844,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 865,
				'm_product_id' => 865,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			344 => 
			array (
				'id' => 2845,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 866,
				'm_product_id' => 866,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			345 => 
			array (
				'id' => 2846,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 866,
				'm_product_id' => 866,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			346 => 
			array (
				'id' => 2847,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 866,
				'm_product_id' => 866,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			347 => 
			array (
				'id' => 2848,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 866,
				'm_product_id' => 866,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			348 => 
			array (
				'id' => 2849,
				'name' => 'Giá NPP',
				'price' => 59000,
				'product_id' => 867,
				'm_product_id' => 867,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			349 => 
			array (
				'id' => 2850,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 867,
				'm_product_id' => 867,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			350 => 
			array (
				'id' => 2851,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 867,
				'm_product_id' => 867,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			351 => 
			array (
				'id' => 2852,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 867,
				'm_product_id' => 867,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			352 => 
			array (
				'id' => 2853,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 868,
				'm_product_id' => 868,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			353 => 
			array (
				'id' => 2854,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 868,
				'm_product_id' => 868,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			354 => 
			array (
				'id' => 2855,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 868,
				'm_product_id' => 868,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			355 => 
			array (
				'id' => 2856,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 868,
				'm_product_id' => 868,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			356 => 
			array (
				'id' => 2857,
				'name' => 'Giá NPP',
				'price' => 59000,
				'product_id' => 869,
				'm_product_id' => 869,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			357 => 
			array (
				'id' => 2858,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 869,
				'm_product_id' => 869,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			358 => 
			array (
				'id' => 2859,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 869,
				'm_product_id' => 869,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			359 => 
			array (
				'id' => 2860,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 869,
				'm_product_id' => 869,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			360 => 
			array (
				'id' => 2861,
				'name' => 'Giá NPP',
				'price' => 59000,
				'product_id' => 870,
				'm_product_id' => 870,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			361 => 
			array (
				'id' => 2862,
				'name' => 'Giá Đại lý',
				'price' => 61000,
				'product_id' => 870,
				'm_product_id' => 870,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			362 => 
			array (
				'id' => 2863,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 870,
				'm_product_id' => 870,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			363 => 
			array (
				'id' => 2864,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 870,
				'm_product_id' => 870,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			364 => 
			array (
				'id' => 2865,
				'name' => 'Giá NPP',
				'price' => 66000,
				'product_id' => 871,
				'm_product_id' => 871,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			365 => 
			array (
				'id' => 2866,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 871,
				'm_product_id' => 871,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			366 => 
			array (
				'id' => 2867,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 871,
				'm_product_id' => 871,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			367 => 
			array (
				'id' => 2868,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 871,
				'm_product_id' => 871,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			368 => 
			array (
				'id' => 2869,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 872,
				'm_product_id' => 872,
				'created_at' => '2015-08-05 08:54:40',
				'updated_at' => '2015-08-05 08:54:40',
			),
			369 => 
			array (
				'id' => 2870,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 872,
				'm_product_id' => 872,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			370 => 
			array (
				'id' => 2871,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 872,
				'm_product_id' => 872,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			371 => 
			array (
				'id' => 2872,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 872,
				'm_product_id' => 872,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			372 => 
			array (
				'id' => 2873,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 873,
				'm_product_id' => 873,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			373 => 
			array (
				'id' => 2874,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 873,
				'm_product_id' => 873,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			374 => 
			array (
				'id' => 2875,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 873,
				'm_product_id' => 873,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			375 => 
			array (
				'id' => 2876,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 873,
				'm_product_id' => 873,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			376 => 
			array (
				'id' => 2877,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 874,
				'm_product_id' => 874,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			377 => 
			array (
				'id' => 2878,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 874,
				'm_product_id' => 874,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			378 => 
			array (
				'id' => 2879,
				'name' => 'Giá Shop',
				'price' => 44000,
				'product_id' => 874,
				'm_product_id' => 874,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			379 => 
			array (
				'id' => 2880,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 874,
				'm_product_id' => 874,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			380 => 
			array (
				'id' => 2881,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 875,
				'm_product_id' => 875,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			381 => 
			array (
				'id' => 2882,
				'name' => 'Giá Đại lý',
				'price' => 14500,
				'product_id' => 875,
				'm_product_id' => 875,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			382 => 
			array (
				'id' => 2883,
				'name' => 'Giá Shop',
				'price' => 15000,
				'product_id' => 875,
				'm_product_id' => 875,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			383 => 
			array (
				'id' => 2884,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 875,
				'm_product_id' => 875,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			384 => 
			array (
				'id' => 2885,
				'name' => 'Giá NPP',
				'price' => 11000,
				'product_id' => 876,
				'm_product_id' => 876,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			385 => 
			array (
				'id' => 2886,
				'name' => 'Giá Đại lý',
				'price' => 11500,
				'product_id' => 876,
				'm_product_id' => 876,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			386 => 
			array (
				'id' => 2887,
				'name' => 'Giá Shop',
				'price' => 12000,
				'product_id' => 876,
				'm_product_id' => 876,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			387 => 
			array (
				'id' => 2888,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 876,
				'm_product_id' => 876,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			388 => 
			array (
				'id' => 2889,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 877,
				'm_product_id' => 877,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			389 => 
			array (
				'id' => 2890,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 877,
				'm_product_id' => 877,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			390 => 
			array (
				'id' => 2891,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 877,
				'm_product_id' => 877,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			391 => 
			array (
				'id' => 2892,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 877,
				'm_product_id' => 877,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			392 => 
			array (
				'id' => 2893,
				'name' => 'Giá NPP',
				'price' => 81000,
				'product_id' => 878,
				'm_product_id' => 878,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			393 => 
			array (
				'id' => 2894,
				'name' => 'Giá Đại lý',
				'price' => 83000,
				'product_id' => 878,
				'm_product_id' => 878,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			394 => 
			array (
				'id' => 2895,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 878,
				'm_product_id' => 878,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			395 => 
			array (
				'id' => 2896,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 878,
				'm_product_id' => 878,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			396 => 
			array (
				'id' => 2897,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 879,
				'm_product_id' => 879,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			397 => 
			array (
				'id' => 2898,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 879,
				'm_product_id' => 879,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			398 => 
			array (
				'id' => 2899,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 879,
				'm_product_id' => 879,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			399 => 
			array (
				'id' => 2900,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 879,
				'm_product_id' => 879,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			400 => 
			array (
				'id' => 2901,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 880,
				'm_product_id' => 880,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			401 => 
			array (
				'id' => 2902,
				'name' => 'Giá Đại lý',
				'price' => 41000,
				'product_id' => 880,
				'm_product_id' => 880,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			402 => 
			array (
				'id' => 2903,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 880,
				'm_product_id' => 880,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			403 => 
			array (
				'id' => 2904,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 880,
				'm_product_id' => 880,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			404 => 
			array (
				'id' => 2905,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 881,
				'm_product_id' => 881,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			405 => 
			array (
				'id' => 2906,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 881,
				'm_product_id' => 881,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			406 => 
			array (
				'id' => 2907,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 881,
				'm_product_id' => 881,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			407 => 
			array (
				'id' => 2908,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 881,
				'm_product_id' => 881,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			408 => 
			array (
				'id' => 2909,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 882,
				'm_product_id' => 882,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			409 => 
			array (
				'id' => 2910,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 882,
				'm_product_id' => 882,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			410 => 
			array (
				'id' => 2911,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 882,
				'm_product_id' => 882,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			411 => 
			array (
				'id' => 2912,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 882,
				'm_product_id' => 882,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			412 => 
			array (
				'id' => 2913,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 883,
				'm_product_id' => 883,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			413 => 
			array (
				'id' => 2914,
				'name' => 'Giá Đại lý',
				'price' => 56000,
				'product_id' => 883,
				'm_product_id' => 883,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			414 => 
			array (
				'id' => 2915,
				'name' => 'Giá Shop',
				'price' => 57000,
				'product_id' => 883,
				'm_product_id' => 883,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			415 => 
			array (
				'id' => 2916,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 883,
				'm_product_id' => 883,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			416 => 
			array (
				'id' => 2917,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 884,
				'm_product_id' => 884,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			417 => 
			array (
				'id' => 2918,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 884,
				'm_product_id' => 884,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			418 => 
			array (
				'id' => 2919,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 884,
				'm_product_id' => 884,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			419 => 
			array (
				'id' => 2920,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 884,
				'm_product_id' => 884,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			420 => 
			array (
				'id' => 2921,
				'name' => 'Giá NPP',
				'price' => 49000,
				'product_id' => 885,
				'm_product_id' => 885,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			421 => 
			array (
				'id' => 2922,
				'name' => 'Giá Đại lý',
				'price' => 51000,
				'product_id' => 885,
				'm_product_id' => 885,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			422 => 
			array (
				'id' => 2923,
				'name' => 'Giá Shop',
				'price' => 53000,
				'product_id' => 885,
				'm_product_id' => 885,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			423 => 
			array (
				'id' => 2924,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 885,
				'm_product_id' => 885,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			424 => 
			array (
				'id' => 2925,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 886,
				'm_product_id' => 886,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			425 => 
			array (
				'id' => 2926,
				'name' => 'Giá Đại lý',
				'price' => 32000,
				'product_id' => 886,
				'm_product_id' => 886,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			426 => 
			array (
				'id' => 2927,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 886,
				'm_product_id' => 886,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			427 => 
			array (
				'id' => 2928,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 886,
				'm_product_id' => 886,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			428 => 
			array (
				'id' => 2929,
				'name' => 'Giá NPP',
				'price' => 14000,
				'product_id' => 887,
				'm_product_id' => 887,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			429 => 
			array (
				'id' => 2930,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 887,
				'm_product_id' => 887,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			430 => 
			array (
				'id' => 2931,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 887,
				'm_product_id' => 887,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			431 => 
			array (
				'id' => 2932,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 887,
				'm_product_id' => 887,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			432 => 
			array (
				'id' => 2933,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 888,
				'm_product_id' => 888,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			433 => 
			array (
				'id' => 2934,
				'name' => 'Giá Đại lý',
				'price' => 43000,
				'product_id' => 888,
				'm_product_id' => 888,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			434 => 
			array (
				'id' => 2935,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 888,
				'm_product_id' => 888,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			435 => 
			array (
				'id' => 2936,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 888,
				'm_product_id' => 888,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			436 => 
			array (
				'id' => 2937,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 889,
				'm_product_id' => 889,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			437 => 
			array (
				'id' => 2938,
				'name' => 'Giá Đại lý',
				'price' => 71000,
				'product_id' => 889,
				'm_product_id' => 889,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			438 => 
			array (
				'id' => 2939,
				'name' => 'Giá Shop',
				'price' => 73000,
				'product_id' => 889,
				'm_product_id' => 889,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			439 => 
			array (
				'id' => 2940,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 889,
				'm_product_id' => 889,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			440 => 
			array (
				'id' => 2941,
				'name' => 'Giá NPP',
				'price' => 79000,
				'product_id' => 890,
				'm_product_id' => 890,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			441 => 
			array (
				'id' => 2942,
				'name' => 'Giá Đại lý',
				'price' => 81000,
				'product_id' => 890,
				'm_product_id' => 890,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			442 => 
			array (
				'id' => 2943,
				'name' => 'Giá Shop',
				'price' => 83000,
				'product_id' => 890,
				'm_product_id' => 890,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			443 => 
			array (
				'id' => 2944,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 890,
				'm_product_id' => 890,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			444 => 
			array (
				'id' => 2945,
				'name' => 'Giá NPP',
				'price' => 92000,
				'product_id' => 891,
				'm_product_id' => 891,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			445 => 
			array (
				'id' => 2946,
				'name' => 'Giá Đại lý',
				'price' => 94000,
				'product_id' => 891,
				'm_product_id' => 891,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			446 => 
			array (
				'id' => 2947,
				'name' => 'Giá Shop',
				'price' => 96000,
				'product_id' => 891,
				'm_product_id' => 891,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			447 => 
			array (
				'id' => 2948,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 891,
				'm_product_id' => 891,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			448 => 
			array (
				'id' => 2949,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 892,
				'm_product_id' => 892,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			449 => 
			array (
				'id' => 2950,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 892,
				'm_product_id' => 892,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			450 => 
			array (
				'id' => 2951,
				'name' => 'Giá Shop',
				'price' => 77000,
				'product_id' => 892,
				'm_product_id' => 892,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			451 => 
			array (
				'id' => 2952,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 892,
				'm_product_id' => 892,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			452 => 
			array (
				'id' => 2953,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 893,
				'm_product_id' => 893,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			453 => 
			array (
				'id' => 2954,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 893,
				'm_product_id' => 893,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			454 => 
			array (
				'id' => 2955,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 893,
				'm_product_id' => 893,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			455 => 
			array (
				'id' => 2956,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 893,
				'm_product_id' => 893,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			456 => 
			array (
				'id' => 2957,
				'name' => 'Giá NPP',
				'price' => 69000,
				'product_id' => 894,
				'm_product_id' => 894,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			457 => 
			array (
				'id' => 2958,
				'name' => 'Giá Đại lý',
				'price' => 71000,
				'product_id' => 894,
				'm_product_id' => 894,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			458 => 
			array (
				'id' => 2959,
				'name' => 'Giá Shop',
				'price' => 73000,
				'product_id' => 894,
				'm_product_id' => 894,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			459 => 
			array (
				'id' => 2960,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 894,
				'm_product_id' => 894,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			460 => 
			array (
				'id' => 2961,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 895,
				'm_product_id' => 895,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			461 => 
			array (
				'id' => 2962,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 895,
				'm_product_id' => 895,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			462 => 
			array (
				'id' => 2963,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 895,
				'm_product_id' => 895,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			463 => 
			array (
				'id' => 2964,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 895,
				'm_product_id' => 895,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			464 => 
			array (
				'id' => 2965,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 896,
				'm_product_id' => 896,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			465 => 
			array (
				'id' => 2966,
				'name' => 'Giá Đại lý',
				'price' => 66000,
				'product_id' => 896,
				'm_product_id' => 896,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			466 => 
			array (
				'id' => 2967,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 896,
				'm_product_id' => 896,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			467 => 
			array (
				'id' => 2968,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 896,
				'm_product_id' => 896,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			468 => 
			array (
				'id' => 2969,
				'name' => 'Giá NPP',
				'price' => 61000,
				'product_id' => 897,
				'm_product_id' => 897,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			469 => 
			array (
				'id' => 2970,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 897,
				'm_product_id' => 897,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			470 => 
			array (
				'id' => 2971,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 897,
				'm_product_id' => 897,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			471 => 
			array (
				'id' => 2972,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 897,
				'm_product_id' => 897,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			472 => 
			array (
				'id' => 2973,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 898,
				'm_product_id' => 898,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			473 => 
			array (
				'id' => 2974,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 898,
				'm_product_id' => 898,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			474 => 
			array (
				'id' => 2975,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 898,
				'm_product_id' => 898,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			475 => 
			array (
				'id' => 2976,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 898,
				'm_product_id' => 898,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			476 => 
			array (
				'id' => 2977,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 899,
				'm_product_id' => 899,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			477 => 
			array (
				'id' => 2978,
				'name' => 'Giá Đại lý',
				'price' => 68000,
				'product_id' => 899,
				'm_product_id' => 899,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			478 => 
			array (
				'id' => 2979,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 899,
				'm_product_id' => 899,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			479 => 
			array (
				'id' => 2980,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 899,
				'm_product_id' => 899,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			480 => 
			array (
				'id' => 2981,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 900,
				'm_product_id' => 900,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			481 => 
			array (
				'id' => 2982,
				'name' => 'Giá Đại lý',
				'price' => 36000,
				'product_id' => 900,
				'm_product_id' => 900,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			482 => 
			array (
				'id' => 2983,
				'name' => 'Giá Shop',
				'price' => 37000,
				'product_id' => 900,
				'm_product_id' => 900,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			483 => 
			array (
				'id' => 2984,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 900,
				'm_product_id' => 900,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			484 => 
			array (
				'id' => 2985,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 901,
				'm_product_id' => 901,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			485 => 
			array (
				'id' => 2986,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 901,
				'm_product_id' => 901,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			486 => 
			array (
				'id' => 2987,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 901,
				'm_product_id' => 901,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			487 => 
			array (
				'id' => 2988,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 901,
				'm_product_id' => 901,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			488 => 
			array (
				'id' => 2989,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 902,
				'm_product_id' => 902,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			489 => 
			array (
				'id' => 2990,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 902,
				'm_product_id' => 902,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			490 => 
			array (
				'id' => 2991,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 902,
				'm_product_id' => 902,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			491 => 
			array (
				'id' => 2992,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 902,
				'm_product_id' => 902,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			492 => 
			array (
				'id' => 2993,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 903,
				'm_product_id' => 903,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			493 => 
			array (
				'id' => 2994,
				'name' => 'Giá Đại lý',
				'price' => 22000,
				'product_id' => 903,
				'm_product_id' => 903,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			494 => 
			array (
				'id' => 2995,
				'name' => 'Giá Shop',
				'price' => 23000,
				'product_id' => 903,
				'm_product_id' => 903,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			495 => 
			array (
				'id' => 2996,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 903,
				'm_product_id' => 903,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			496 => 
			array (
				'id' => 2997,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 904,
				'm_product_id' => 904,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			497 => 
			array (
				'id' => 2998,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 904,
				'm_product_id' => 904,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			498 => 
			array (
				'id' => 2999,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 904,
				'm_product_id' => 904,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			499 => 
			array (
				'id' => 3000,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 904,
				'm_product_id' => 904,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 3001,
				'name' => 'Giá NPP',
				'price' => 140000,
				'product_id' => 905,
				'm_product_id' => 905,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			1 => 
			array (
				'id' => 3002,
				'name' => 'Giá Đại lý',
				'price' => 145000,
				'product_id' => 905,
				'm_product_id' => 905,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			2 => 
			array (
				'id' => 3003,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 905,
				'm_product_id' => 905,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			3 => 
			array (
				'id' => 3004,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 905,
				'm_product_id' => 905,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			4 => 
			array (
				'id' => 3005,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 906,
				'm_product_id' => 906,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			5 => 
			array (
				'id' => 3006,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 906,
				'm_product_id' => 906,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			6 => 
			array (
				'id' => 3007,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 906,
				'm_product_id' => 906,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			7 => 
			array (
				'id' => 3008,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 906,
				'm_product_id' => 906,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			8 => 
			array (
				'id' => 3009,
				'name' => 'Giá NPP',
				'price' => 86000,
				'product_id' => 907,
				'm_product_id' => 907,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			9 => 
			array (
				'id' => 3010,
				'name' => 'Giá Đại lý',
				'price' => 88000,
				'product_id' => 907,
				'm_product_id' => 907,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			10 => 
			array (
				'id' => 3011,
				'name' => 'Giá Shop',
				'price' => 90000,
				'product_id' => 907,
				'm_product_id' => 907,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			11 => 
			array (
				'id' => 3012,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 907,
				'm_product_id' => 907,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			12 => 
			array (
				'id' => 3013,
				'name' => 'Giá NPP',
				'price' => 140000,
				'product_id' => 908,
				'm_product_id' => 908,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			13 => 
			array (
				'id' => 3014,
				'name' => 'Giá Đại lý',
				'price' => 145000,
				'product_id' => 908,
				'm_product_id' => 908,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			14 => 
			array (
				'id' => 3015,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 908,
				'm_product_id' => 908,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			15 => 
			array (
				'id' => 3016,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 908,
				'm_product_id' => 908,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			16 => 
			array (
				'id' => 3017,
				'name' => 'Giá NPP',
				'price' => 190000,
				'product_id' => 909,
				'm_product_id' => 909,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			17 => 
			array (
				'id' => 3018,
				'name' => 'Giá Đại lý',
				'price' => 200000,
				'product_id' => 909,
				'm_product_id' => 909,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			18 => 
			array (
				'id' => 3019,
				'name' => 'Giá Shop',
				'price' => 210000,
				'product_id' => 909,
				'm_product_id' => 909,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			19 => 
			array (
				'id' => 3020,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 909,
				'm_product_id' => 909,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			20 => 
			array (
				'id' => 3021,
				'name' => 'Giá NPP',
				'price' => 21000,
				'product_id' => 910,
				'm_product_id' => 910,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			21 => 
			array (
				'id' => 3022,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 910,
				'm_product_id' => 910,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			22 => 
			array (
				'id' => 3023,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 910,
				'm_product_id' => 910,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			23 => 
			array (
				'id' => 3024,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 910,
				'm_product_id' => 910,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			24 => 
			array (
				'id' => 3025,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 911,
				'm_product_id' => 911,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			25 => 
			array (
				'id' => 3026,
				'name' => 'Giá Đại lý',
				'price' => 77000,
				'product_id' => 911,
				'm_product_id' => 911,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			26 => 
			array (
				'id' => 3027,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 911,
				'm_product_id' => 911,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			27 => 
			array (
				'id' => 3028,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 911,
				'm_product_id' => 911,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			28 => 
			array (
				'id' => 3029,
				'name' => 'Giá NPP',
				'price' => 53000,
				'product_id' => 912,
				'm_product_id' => 912,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			29 => 
			array (
				'id' => 3030,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 912,
				'm_product_id' => 912,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			30 => 
			array (
				'id' => 3031,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 912,
				'm_product_id' => 912,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			31 => 
			array (
				'id' => 3032,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 912,
				'm_product_id' => 912,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			32 => 
			array (
				'id' => 3033,
				'name' => 'Giá NPP',
				'price' => 7000,
				'product_id' => 913,
				'm_product_id' => 913,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			33 => 
			array (
				'id' => 3034,
				'name' => 'Giá Đại lý',
				'price' => 7500,
				'product_id' => 913,
				'm_product_id' => 913,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			34 => 
			array (
				'id' => 3035,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 913,
				'm_product_id' => 913,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			35 => 
			array (
				'id' => 3036,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 913,
				'm_product_id' => 913,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			36 => 
			array (
				'id' => 3037,
				'name' => 'Giá NPP',
				'price' => 5000,
				'product_id' => 914,
				'm_product_id' => 914,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			37 => 
			array (
				'id' => 3038,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 914,
				'm_product_id' => 914,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			38 => 
			array (
				'id' => 3039,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 914,
				'm_product_id' => 914,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			39 => 
			array (
				'id' => 3040,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 914,
				'm_product_id' => 914,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			40 => 
			array (
				'id' => 3041,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 915,
				'm_product_id' => 915,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			41 => 
			array (
				'id' => 3042,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 915,
				'm_product_id' => 915,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			42 => 
			array (
				'id' => 3043,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 915,
				'm_product_id' => 915,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			43 => 
			array (
				'id' => 3044,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 915,
				'm_product_id' => 915,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			44 => 
			array (
				'id' => 3045,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 916,
				'm_product_id' => 916,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			45 => 
			array (
				'id' => 3046,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 916,
				'm_product_id' => 916,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			46 => 
			array (
				'id' => 3047,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 916,
				'm_product_id' => 916,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			47 => 
			array (
				'id' => 3048,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 916,
				'm_product_id' => 916,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			48 => 
			array (
				'id' => 3049,
				'name' => 'Giá NPP',
				'price' => 7000,
				'product_id' => 917,
				'm_product_id' => 917,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			49 => 
			array (
				'id' => 3050,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 917,
				'm_product_id' => 917,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			50 => 
			array (
				'id' => 3051,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 917,
				'm_product_id' => 917,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			51 => 
			array (
				'id' => 3052,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 917,
				'm_product_id' => 917,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			52 => 
			array (
				'id' => 3053,
				'name' => 'Giá NPP',
				'price' => 7000,
				'product_id' => 918,
				'm_product_id' => 918,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			53 => 
			array (
				'id' => 3054,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 918,
				'm_product_id' => 918,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			54 => 
			array (
				'id' => 3055,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 918,
				'm_product_id' => 918,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			55 => 
			array (
				'id' => 3056,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 918,
				'm_product_id' => 918,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			56 => 
			array (
				'id' => 3057,
				'name' => 'Giá NPP',
				'price' => 6000,
				'product_id' => 919,
				'm_product_id' => 919,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			57 => 
			array (
				'id' => 3058,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 919,
				'm_product_id' => 919,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			58 => 
			array (
				'id' => 3059,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 919,
				'm_product_id' => 919,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			59 => 
			array (
				'id' => 3060,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 919,
				'm_product_id' => 919,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			60 => 
			array (
				'id' => 3061,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 920,
				'm_product_id' => 920,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			61 => 
			array (
				'id' => 3062,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 920,
				'm_product_id' => 920,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			62 => 
			array (
				'id' => 3063,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 920,
				'm_product_id' => 920,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			63 => 
			array (
				'id' => 3064,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 920,
				'm_product_id' => 920,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			64 => 
			array (
				'id' => 3065,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 921,
				'm_product_id' => 921,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			65 => 
			array (
				'id' => 3066,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 921,
				'm_product_id' => 921,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			66 => 
			array (
				'id' => 3067,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 921,
				'm_product_id' => 921,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			67 => 
			array (
				'id' => 3068,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 921,
				'm_product_id' => 921,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			68 => 
			array (
				'id' => 3069,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 922,
				'm_product_id' => 922,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			69 => 
			array (
				'id' => 3070,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 922,
				'm_product_id' => 922,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			70 => 
			array (
				'id' => 3071,
				'name' => 'Giá Shop',
				'price' => 74000,
				'product_id' => 922,
				'm_product_id' => 922,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			71 => 
			array (
				'id' => 3072,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 922,
				'm_product_id' => 922,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			72 => 
			array (
				'id' => 3073,
				'name' => 'Giá NPP',
				'price' => 100000,
				'product_id' => 923,
				'm_product_id' => 923,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			73 => 
			array (
				'id' => 3074,
				'name' => 'Giá Đại lý',
				'price' => 103000,
				'product_id' => 923,
				'm_product_id' => 923,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			74 => 
			array (
				'id' => 3075,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 923,
				'm_product_id' => 923,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			75 => 
			array (
				'id' => 3076,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 923,
				'm_product_id' => 923,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			76 => 
			array (
				'id' => 3077,
				'name' => 'Giá NPP',
				'price' => 165000,
				'product_id' => 924,
				'm_product_id' => 924,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			77 => 
			array (
				'id' => 3078,
				'name' => 'Giá Đại lý',
				'price' => 170000,
				'product_id' => 924,
				'm_product_id' => 924,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			78 => 
			array (
				'id' => 3079,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 924,
				'm_product_id' => 924,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			79 => 
			array (
				'id' => 3080,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 924,
				'm_product_id' => 924,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			80 => 
			array (
				'id' => 3081,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 925,
				'm_product_id' => 925,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			81 => 
			array (
				'id' => 3082,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 925,
				'm_product_id' => 925,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			82 => 
			array (
				'id' => 3083,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 925,
				'm_product_id' => 925,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			83 => 
			array (
				'id' => 3084,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 925,
				'm_product_id' => 925,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			84 => 
			array (
				'id' => 3085,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 926,
				'm_product_id' => 926,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			85 => 
			array (
				'id' => 3086,
				'name' => 'Giá Đại lý',
				'price' => 52000,
				'product_id' => 926,
				'm_product_id' => 926,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			86 => 
			array (
				'id' => 3087,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 926,
				'm_product_id' => 926,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			87 => 
			array (
				'id' => 3088,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 926,
				'm_product_id' => 926,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			88 => 
			array (
				'id' => 3089,
				'name' => 'Giá NPP',
				'price' => 46000,
				'product_id' => 927,
				'm_product_id' => 927,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			89 => 
			array (
				'id' => 3090,
				'name' => 'Giá Đại lý',
				'price' => 47000,
				'product_id' => 927,
				'm_product_id' => 927,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			90 => 
			array (
				'id' => 3091,
				'name' => 'Giá Shop',
				'price' => 50000,
				'product_id' => 927,
				'm_product_id' => 927,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			91 => 
			array (
				'id' => 3092,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 927,
				'm_product_id' => 927,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			92 => 
			array (
				'id' => 3093,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 928,
				'm_product_id' => 928,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			93 => 
			array (
				'id' => 3094,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 928,
				'm_product_id' => 928,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			94 => 
			array (
				'id' => 3095,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 928,
				'm_product_id' => 928,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			95 => 
			array (
				'id' => 3096,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 928,
				'm_product_id' => 928,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			96 => 
			array (
				'id' => 3097,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 929,
				'm_product_id' => 929,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			97 => 
			array (
				'id' => 3098,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 929,
				'm_product_id' => 929,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			98 => 
			array (
				'id' => 3099,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 929,
				'm_product_id' => 929,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			99 => 
			array (
				'id' => 3100,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 929,
				'm_product_id' => 929,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			100 => 
			array (
				'id' => 3101,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 930,
				'm_product_id' => 930,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			101 => 
			array (
				'id' => 3102,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 930,
				'm_product_id' => 930,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			102 => 
			array (
				'id' => 3103,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 930,
				'm_product_id' => 930,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			103 => 
			array (
				'id' => 3104,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 930,
				'm_product_id' => 930,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			104 => 
			array (
				'id' => 3105,
				'name' => 'Giá NPP',
				'price' => 57000,
				'product_id' => 931,
				'm_product_id' => 931,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			105 => 
			array (
				'id' => 3106,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 931,
				'm_product_id' => 931,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			106 => 
			array (
				'id' => 3107,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 931,
				'm_product_id' => 931,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			107 => 
			array (
				'id' => 3108,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 931,
				'm_product_id' => 931,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			108 => 
			array (
				'id' => 3109,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 932,
				'm_product_id' => 932,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			109 => 
			array (
				'id' => 3110,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 932,
				'm_product_id' => 932,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			110 => 
			array (
				'id' => 3111,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 932,
				'm_product_id' => 932,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			111 => 
			array (
				'id' => 3112,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 932,
				'm_product_id' => 932,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			112 => 
			array (
				'id' => 3113,
				'name' => 'Giá NPP',
				'price' => 38000,
				'product_id' => 933,
				'm_product_id' => 933,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			113 => 
			array (
				'id' => 3114,
				'name' => 'Giá Đại lý',
				'price' => 40000,
				'product_id' => 933,
				'm_product_id' => 933,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			114 => 
			array (
				'id' => 3115,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 933,
				'm_product_id' => 933,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			115 => 
			array (
				'id' => 3116,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 933,
				'm_product_id' => 933,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			116 => 
			array (
				'id' => 3117,
				'name' => 'Giá NPP',
				'price' => 42000,
				'product_id' => 934,
				'm_product_id' => 934,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			117 => 
			array (
				'id' => 3118,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 934,
				'm_product_id' => 934,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			118 => 
			array (
				'id' => 3119,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 934,
				'm_product_id' => 934,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			119 => 
			array (
				'id' => 3120,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 934,
				'm_product_id' => 934,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			120 => 
			array (
				'id' => 3121,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 935,
				'm_product_id' => 935,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			121 => 
			array (
				'id' => 3122,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 935,
				'm_product_id' => 935,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			122 => 
			array (
				'id' => 3123,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 935,
				'm_product_id' => 935,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			123 => 
			array (
				'id' => 3124,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 935,
				'm_product_id' => 935,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			124 => 
			array (
				'id' => 3125,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 936,
				'm_product_id' => 936,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			125 => 
			array (
				'id' => 3126,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 936,
				'm_product_id' => 936,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			126 => 
			array (
				'id' => 3127,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 936,
				'm_product_id' => 936,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			127 => 
			array (
				'id' => 3128,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 936,
				'm_product_id' => 936,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			128 => 
			array (
				'id' => 3129,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 937,
				'm_product_id' => 937,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			129 => 
			array (
				'id' => 3130,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 937,
				'm_product_id' => 937,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			130 => 
			array (
				'id' => 3131,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 937,
				'm_product_id' => 937,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			131 => 
			array (
				'id' => 3132,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 937,
				'm_product_id' => 937,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			132 => 
			array (
				'id' => 3133,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 938,
				'm_product_id' => 938,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			133 => 
			array (
				'id' => 3134,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 938,
				'm_product_id' => 938,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			134 => 
			array (
				'id' => 3135,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 938,
				'm_product_id' => 938,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			135 => 
			array (
				'id' => 3136,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 938,
				'm_product_id' => 938,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			136 => 
			array (
				'id' => 3137,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 939,
				'm_product_id' => 939,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			137 => 
			array (
				'id' => 3138,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 939,
				'm_product_id' => 939,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			138 => 
			array (
				'id' => 3139,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 939,
				'm_product_id' => 939,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			139 => 
			array (
				'id' => 3140,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 939,
				'm_product_id' => 939,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			140 => 
			array (
				'id' => 3141,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 940,
				'm_product_id' => 940,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			141 => 
			array (
				'id' => 3142,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 940,
				'm_product_id' => 940,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			142 => 
			array (
				'id' => 3143,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 940,
				'm_product_id' => 940,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			143 => 
			array (
				'id' => 3144,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 940,
				'm_product_id' => 940,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			144 => 
			array (
				'id' => 3145,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 941,
				'm_product_id' => 941,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			145 => 
			array (
				'id' => 3146,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 941,
				'm_product_id' => 941,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			146 => 
			array (
				'id' => 3147,
				'name' => 'Giá Shop',
				'price' => 64000,
				'product_id' => 941,
				'm_product_id' => 941,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			147 => 
			array (
				'id' => 3148,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 941,
				'm_product_id' => 941,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			148 => 
			array (
				'id' => 3149,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 942,
				'm_product_id' => 942,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			149 => 
			array (
				'id' => 3150,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 942,
				'm_product_id' => 942,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			150 => 
			array (
				'id' => 3151,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 942,
				'm_product_id' => 942,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			151 => 
			array (
				'id' => 3152,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 942,
				'm_product_id' => 942,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			152 => 
			array (
				'id' => 3153,
				'name' => 'Giá NPP',
				'price' => 76000,
				'product_id' => 943,
				'm_product_id' => 943,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			153 => 
			array (
				'id' => 3154,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 943,
				'm_product_id' => 943,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			154 => 
			array (
				'id' => 3155,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 943,
				'm_product_id' => 943,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			155 => 
			array (
				'id' => 3156,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 943,
				'm_product_id' => 943,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			156 => 
			array (
				'id' => 3157,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 944,
				'm_product_id' => 944,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			157 => 
			array (
				'id' => 3158,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 944,
				'm_product_id' => 944,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			158 => 
			array (
				'id' => 3159,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 944,
				'm_product_id' => 944,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			159 => 
			array (
				'id' => 3160,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 944,
				'm_product_id' => 944,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			160 => 
			array (
				'id' => 3161,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 945,
				'm_product_id' => 945,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			161 => 
			array (
				'id' => 3162,
				'name' => 'Giá Đại lý',
				'price' => 84000,
				'product_id' => 945,
				'm_product_id' => 945,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			162 => 
			array (
				'id' => 3163,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 945,
				'm_product_id' => 945,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			163 => 
			array (
				'id' => 3164,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 945,
				'm_product_id' => 945,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			164 => 
			array (
				'id' => 3165,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 946,
				'm_product_id' => 946,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			165 => 
			array (
				'id' => 3166,
				'name' => 'Giá Đại lý',
				'price' => 84000,
				'product_id' => 946,
				'm_product_id' => 946,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			166 => 
			array (
				'id' => 3167,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 946,
				'm_product_id' => 946,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			167 => 
			array (
				'id' => 3168,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 946,
				'm_product_id' => 946,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			168 => 
			array (
				'id' => 3169,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 947,
				'm_product_id' => 947,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			169 => 
			array (
				'id' => 3170,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 947,
				'm_product_id' => 947,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			170 => 
			array (
				'id' => 3171,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 947,
				'm_product_id' => 947,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			171 => 
			array (
				'id' => 3172,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 947,
				'm_product_id' => 947,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			172 => 
			array (
				'id' => 3173,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 948,
				'm_product_id' => 948,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			173 => 
			array (
				'id' => 3174,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 948,
				'm_product_id' => 948,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			174 => 
			array (
				'id' => 3175,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 948,
				'm_product_id' => 948,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			175 => 
			array (
				'id' => 3176,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 948,
				'm_product_id' => 948,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			176 => 
			array (
				'id' => 3177,
				'name' => 'Giá NPP',
				'price' => 13000,
				'product_id' => 949,
				'm_product_id' => 949,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			177 => 
			array (
				'id' => 3178,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 949,
				'm_product_id' => 949,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			178 => 
			array (
				'id' => 3179,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 949,
				'm_product_id' => 949,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			179 => 
			array (
				'id' => 3180,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 949,
				'm_product_id' => 949,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			180 => 
			array (
				'id' => 3181,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 950,
				'm_product_id' => 950,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			181 => 
			array (
				'id' => 3182,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 950,
				'm_product_id' => 950,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			182 => 
			array (
				'id' => 3183,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 950,
				'm_product_id' => 950,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			183 => 
			array (
				'id' => 3184,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 950,
				'm_product_id' => 950,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			184 => 
			array (
				'id' => 3185,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 951,
				'm_product_id' => 951,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			185 => 
			array (
				'id' => 3186,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 951,
				'm_product_id' => 951,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			186 => 
			array (
				'id' => 3187,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 951,
				'm_product_id' => 951,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			187 => 
			array (
				'id' => 3188,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 951,
				'm_product_id' => 951,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			188 => 
			array (
				'id' => 3189,
				'name' => 'Giá NPP',
				'price' => 25000,
				'product_id' => 952,
				'm_product_id' => 952,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			189 => 
			array (
				'id' => 3190,
				'name' => 'Giá Đại lý',
				'price' => 26000,
				'product_id' => 952,
				'm_product_id' => 952,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			190 => 
			array (
				'id' => 3191,
				'name' => 'Giá Shop',
				'price' => 28000,
				'product_id' => 952,
				'm_product_id' => 952,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			191 => 
			array (
				'id' => 3192,
				'name' => 'Giá NPP',
				'price' => 84000,
				'product_id' => 953,
				'm_product_id' => 953,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			192 => 
			array (
				'id' => 3193,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 953,
				'm_product_id' => 953,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			193 => 
			array (
				'id' => 3194,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 953,
				'm_product_id' => 953,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			194 => 
			array (
				'id' => 3195,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 953,
				'm_product_id' => 953,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			195 => 
			array (
				'id' => 3196,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 954,
				'm_product_id' => 954,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			196 => 
			array (
				'id' => 3197,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 954,
				'm_product_id' => 954,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			197 => 
			array (
				'id' => 3198,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 954,
				'm_product_id' => 954,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			198 => 
			array (
				'id' => 3199,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 954,
				'm_product_id' => 954,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			199 => 
			array (
				'id' => 3200,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 955,
				'm_product_id' => 955,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			200 => 
			array (
				'id' => 3201,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 955,
				'm_product_id' => 955,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			201 => 
			array (
				'id' => 3202,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 955,
				'm_product_id' => 955,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			202 => 
			array (
				'id' => 3203,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 955,
				'm_product_id' => 955,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			203 => 
			array (
				'id' => 3204,
				'name' => 'Giá NPP',
				'price' => 35000,
				'product_id' => 956,
				'm_product_id' => 956,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			204 => 
			array (
				'id' => 3205,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 956,
				'm_product_id' => 956,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			205 => 
			array (
				'id' => 3206,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 956,
				'm_product_id' => 956,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			206 => 
			array (
				'id' => 3207,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 956,
				'm_product_id' => 956,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			207 => 
			array (
				'id' => 3208,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 957,
				'm_product_id' => 957,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			208 => 
			array (
				'id' => 3209,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 957,
				'm_product_id' => 957,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			209 => 
			array (
				'id' => 3210,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 957,
				'm_product_id' => 957,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			210 => 
			array (
				'id' => 3211,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 957,
				'm_product_id' => 957,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			211 => 
			array (
				'id' => 3212,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 958,
				'm_product_id' => 958,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			212 => 
			array (
				'id' => 3213,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 958,
				'm_product_id' => 958,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			213 => 
			array (
				'id' => 3214,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 958,
				'm_product_id' => 958,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			214 => 
			array (
				'id' => 3215,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 958,
				'm_product_id' => 958,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			215 => 
			array (
				'id' => 3216,
				'name' => 'Giá NPP',
				'price' => 32000,
				'product_id' => 959,
				'm_product_id' => 959,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			216 => 
			array (
				'id' => 3217,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 959,
				'm_product_id' => 959,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			217 => 
			array (
				'id' => 3218,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 959,
				'm_product_id' => 959,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			218 => 
			array (
				'id' => 3219,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 959,
				'm_product_id' => 959,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			219 => 
			array (
				'id' => 3220,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 960,
				'm_product_id' => 960,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			220 => 
			array (
				'id' => 3221,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 960,
				'm_product_id' => 960,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			221 => 
			array (
				'id' => 3222,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 960,
				'm_product_id' => 960,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			222 => 
			array (
				'id' => 3223,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 960,
				'm_product_id' => 960,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			223 => 
			array (
				'id' => 3224,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 961,
				'm_product_id' => 961,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			224 => 
			array (
				'id' => 3225,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 961,
				'm_product_id' => 961,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			225 => 
			array (
				'id' => 3226,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 961,
				'm_product_id' => 961,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			226 => 
			array (
				'id' => 3227,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 961,
				'm_product_id' => 961,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			227 => 
			array (
				'id' => 3228,
				'name' => 'Giá NPP',
				'price' => 12000,
				'product_id' => 962,
				'm_product_id' => 962,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			228 => 
			array (
				'id' => 3229,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 962,
				'm_product_id' => 962,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			229 => 
			array (
				'id' => 3230,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 962,
				'm_product_id' => 962,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			230 => 
			array (
				'id' => 3231,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 962,
				'm_product_id' => 962,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			231 => 
			array (
				'id' => 3232,
				'name' => 'Giá NPP',
				'price' => 17000,
				'product_id' => 963,
				'm_product_id' => 963,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			232 => 
			array (
				'id' => 3233,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 963,
				'm_product_id' => 963,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			233 => 
			array (
				'id' => 3234,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 963,
				'm_product_id' => 963,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			234 => 
			array (
				'id' => 3235,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 963,
				'm_product_id' => 963,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			235 => 
			array (
				'id' => 3236,
				'name' => 'Giá NPP',
				'price' => 34000,
				'product_id' => 964,
				'm_product_id' => 964,
				'created_at' => '2015-08-05 08:54:41',
				'updated_at' => '2015-08-05 08:54:41',
			),
			236 => 
			array (
				'id' => 3237,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 964,
				'm_product_id' => 964,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			237 => 
			array (
				'id' => 3238,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 964,
				'm_product_id' => 964,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			238 => 
			array (
				'id' => 3239,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 964,
				'm_product_id' => 964,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			239 => 
			array (
				'id' => 3240,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 965,
				'm_product_id' => 965,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			240 => 
			array (
				'id' => 3241,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 965,
				'm_product_id' => 965,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			241 => 
			array (
				'id' => 3242,
				'name' => 'Giá Shop',
				'price' => 62000,
				'product_id' => 965,
				'm_product_id' => 965,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			242 => 
			array (
				'id' => 3243,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 965,
				'm_product_id' => 965,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			243 => 
			array (
				'id' => 3244,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 966,
				'm_product_id' => 966,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			244 => 
			array (
				'id' => 3245,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 966,
				'm_product_id' => 966,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			245 => 
			array (
				'id' => 3246,
				'name' => 'Giá Shop',
				'price' => 68000,
				'product_id' => 966,
				'm_product_id' => 966,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			246 => 
			array (
				'id' => 3247,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 966,
				'm_product_id' => 966,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			247 => 
			array (
				'id' => 3248,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 967,
				'm_product_id' => 967,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			248 => 
			array (
				'id' => 3249,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 967,
				'm_product_id' => 967,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			249 => 
			array (
				'id' => 3250,
				'name' => 'Giá Shop',
				'price' => 52000,
				'product_id' => 967,
				'm_product_id' => 967,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			250 => 
			array (
				'id' => 3251,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 967,
				'm_product_id' => 967,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			251 => 
			array (
				'id' => 3252,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 968,
				'm_product_id' => 968,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			252 => 
			array (
				'id' => 3253,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 968,
				'm_product_id' => 968,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			253 => 
			array (
				'id' => 3254,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 968,
				'm_product_id' => 968,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			254 => 
			array (
				'id' => 3255,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 968,
				'm_product_id' => 968,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			255 => 
			array (
				'id' => 3256,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 969,
				'm_product_id' => 969,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			256 => 
			array (
				'id' => 3257,
				'name' => 'Giá Đại lý',
				'price' => 56000,
				'product_id' => 969,
				'm_product_id' => 969,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			257 => 
			array (
				'id' => 3258,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 969,
				'm_product_id' => 969,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			258 => 
			array (
				'id' => 3259,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 969,
				'm_product_id' => 969,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			259 => 
			array (
				'id' => 3260,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 970,
				'm_product_id' => 970,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			260 => 
			array (
				'id' => 3261,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 970,
				'm_product_id' => 970,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			261 => 
			array (
				'id' => 3262,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 970,
				'm_product_id' => 970,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			262 => 
			array (
				'id' => 3263,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 970,
				'm_product_id' => 970,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			263 => 
			array (
				'id' => 3264,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 971,
				'm_product_id' => 971,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			264 => 
			array (
				'id' => 3265,
				'name' => 'Giá Đại lý',
				'price' => 92000,
				'product_id' => 971,
				'm_product_id' => 971,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			265 => 
			array (
				'id' => 3266,
				'name' => 'Giá Shop',
				'price' => 95000,
				'product_id' => 971,
				'm_product_id' => 971,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			266 => 
			array (
				'id' => 3267,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 971,
				'm_product_id' => 971,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			267 => 
			array (
				'id' => 3268,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 972,
				'm_product_id' => 972,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			268 => 
			array (
				'id' => 3269,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 972,
				'm_product_id' => 972,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			269 => 
			array (
				'id' => 3270,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 972,
				'm_product_id' => 972,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			270 => 
			array (
				'id' => 3271,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 972,
				'm_product_id' => 972,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			271 => 
			array (
				'id' => 3272,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 973,
				'm_product_id' => 973,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			272 => 
			array (
				'id' => 3273,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 973,
				'm_product_id' => 973,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			273 => 
			array (
				'id' => 3274,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 973,
				'm_product_id' => 973,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			274 => 
			array (
				'id' => 3275,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 973,
				'm_product_id' => 973,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			275 => 
			array (
				'id' => 3276,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 974,
				'm_product_id' => 974,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			276 => 
			array (
				'id' => 3277,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 974,
				'm_product_id' => 974,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			277 => 
			array (
				'id' => 3278,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 974,
				'm_product_id' => 974,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			278 => 
			array (
				'id' => 3279,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 974,
				'm_product_id' => 974,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			279 => 
			array (
				'id' => 3280,
				'name' => 'Giá NPP',
				'price' => 83000,
				'product_id' => 975,
				'm_product_id' => 975,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			280 => 
			array (
				'id' => 3281,
				'name' => 'Giá Đại lý',
				'price' => 85000,
				'product_id' => 975,
				'm_product_id' => 975,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			281 => 
			array (
				'id' => 3282,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 975,
				'm_product_id' => 975,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			282 => 
			array (
				'id' => 3283,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 975,
				'm_product_id' => 975,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			283 => 
			array (
				'id' => 3284,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 976,
				'm_product_id' => 976,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			284 => 
			array (
				'id' => 3285,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 976,
				'm_product_id' => 976,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			285 => 
			array (
				'id' => 3286,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 976,
				'm_product_id' => 976,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			286 => 
			array (
				'id' => 3287,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 976,
				'm_product_id' => 976,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			287 => 
			array (
				'id' => 3288,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 977,
				'm_product_id' => 977,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			288 => 
			array (
				'id' => 3289,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 977,
				'm_product_id' => 977,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			289 => 
			array (
				'id' => 3290,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 977,
				'm_product_id' => 977,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			290 => 
			array (
				'id' => 3291,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 977,
				'm_product_id' => 977,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			291 => 
			array (
				'id' => 3292,
				'name' => 'Giá NPP',
				'price' => 82000,
				'product_id' => 978,
				'm_product_id' => 978,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			292 => 
			array (
				'id' => 3293,
				'name' => 'Giá Đại lý',
				'price' => 85000,
				'product_id' => 978,
				'm_product_id' => 978,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			293 => 
			array (
				'id' => 3294,
				'name' => 'Giá Shop',
				'price' => 90000,
				'product_id' => 978,
				'm_product_id' => 978,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			294 => 
			array (
				'id' => 3295,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 978,
				'm_product_id' => 978,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			295 => 
			array (
				'id' => 3296,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 979,
				'm_product_id' => 979,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			296 => 
			array (
				'id' => 3297,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 979,
				'm_product_id' => 979,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			297 => 
			array (
				'id' => 3298,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 979,
				'm_product_id' => 979,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			298 => 
			array (
				'id' => 3299,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 979,
				'm_product_id' => 979,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			299 => 
			array (
				'id' => 3300,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 980,
				'm_product_id' => 980,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			300 => 
			array (
				'id' => 3301,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 980,
				'm_product_id' => 980,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			301 => 
			array (
				'id' => 3302,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 980,
				'm_product_id' => 980,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			302 => 
			array (
				'id' => 3303,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 980,
				'm_product_id' => 980,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			303 => 
			array (
				'id' => 3304,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 981,
				'm_product_id' => 981,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			304 => 
			array (
				'id' => 3305,
				'name' => 'Giá Đại lý',
				'price' => 54000,
				'product_id' => 981,
				'm_product_id' => 981,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			305 => 
			array (
				'id' => 3306,
				'name' => 'Giá Shop',
				'price' => 56000,
				'product_id' => 981,
				'm_product_id' => 981,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			306 => 
			array (
				'id' => 3307,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 982,
				'm_product_id' => 982,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			307 => 
			array (
				'id' => 3308,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 982,
				'm_product_id' => 982,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			308 => 
			array (
				'id' => 3309,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 982,
				'm_product_id' => 982,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			309 => 
			array (
				'id' => 3310,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 982,
				'm_product_id' => 982,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			310 => 
			array (
				'id' => 3311,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 983,
				'm_product_id' => 983,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			311 => 
			array (
				'id' => 3312,
				'name' => 'Giá Đại lý',
				'price' => 88000,
				'product_id' => 983,
				'm_product_id' => 983,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			312 => 
			array (
				'id' => 3313,
				'name' => 'Giá Shop',
				'price' => 90000,
				'product_id' => 983,
				'm_product_id' => 983,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			313 => 
			array (
				'id' => 3314,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 983,
				'm_product_id' => 983,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			314 => 
			array (
				'id' => 3315,
				'name' => 'Giá NPP',
				'price' => 79000,
				'product_id' => 984,
				'm_product_id' => 984,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			315 => 
			array (
				'id' => 3316,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 984,
				'm_product_id' => 984,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			316 => 
			array (
				'id' => 3317,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 984,
				'm_product_id' => 984,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			317 => 
			array (
				'id' => 3318,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 984,
				'm_product_id' => 984,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			318 => 
			array (
				'id' => 3319,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 985,
				'm_product_id' => 985,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			319 => 
			array (
				'id' => 3320,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 985,
				'm_product_id' => 985,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			320 => 
			array (
				'id' => 3321,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 985,
				'm_product_id' => 985,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			321 => 
			array (
				'id' => 3322,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 985,
				'm_product_id' => 985,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			322 => 
			array (
				'id' => 3323,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 986,
				'm_product_id' => 986,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			323 => 
			array (
				'id' => 3324,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 986,
				'm_product_id' => 986,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			324 => 
			array (
				'id' => 3325,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 986,
				'm_product_id' => 986,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			325 => 
			array (
				'id' => 3326,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 986,
				'm_product_id' => 986,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			326 => 
			array (
				'id' => 3327,
				'name' => 'Giá NPP',
				'price' => 40000,
				'product_id' => 987,
				'm_product_id' => 987,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			327 => 
			array (
				'id' => 3328,
				'name' => 'Giá Đại lý',
				'price' => 41000,
				'product_id' => 987,
				'm_product_id' => 987,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			328 => 
			array (
				'id' => 3329,
				'name' => 'Giá Shop',
				'price' => 42000,
				'product_id' => 987,
				'm_product_id' => 987,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			329 => 
			array (
				'id' => 3330,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 987,
				'm_product_id' => 987,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			330 => 
			array (
				'id' => 3331,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 988,
				'm_product_id' => 988,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			331 => 
			array (
				'id' => 3332,
				'name' => 'Giá Đại lý',
				'price' => 54000,
				'product_id' => 988,
				'm_product_id' => 988,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			332 => 
			array (
				'id' => 3333,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 988,
				'm_product_id' => 988,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			333 => 
			array (
				'id' => 3334,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 988,
				'm_product_id' => 988,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			334 => 
			array (
				'id' => 3335,
				'name' => 'Giá NPP',
				'price' => 70000,
				'product_id' => 989,
				'm_product_id' => 989,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			335 => 
			array (
				'id' => 3336,
				'name' => 'Giá Đại lý',
				'price' => 72000,
				'product_id' => 989,
				'm_product_id' => 989,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			336 => 
			array (
				'id' => 3337,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 989,
				'm_product_id' => 989,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			337 => 
			array (
				'id' => 3338,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 989,
				'm_product_id' => 989,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			338 => 
			array (
				'id' => 3339,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 990,
				'm_product_id' => 990,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			339 => 
			array (
				'id' => 3340,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 990,
				'm_product_id' => 990,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			340 => 
			array (
				'id' => 3341,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 990,
				'm_product_id' => 990,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			341 => 
			array (
				'id' => 3342,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 990,
				'm_product_id' => 990,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			342 => 
			array (
				'id' => 3343,
				'name' => 'Giá NPP',
				'price' => 58000,
				'product_id' => 991,
				'm_product_id' => 991,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			343 => 
			array (
				'id' => 3344,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 991,
				'm_product_id' => 991,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			344 => 
			array (
				'id' => 3345,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 991,
				'm_product_id' => 991,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			345 => 
			array (
				'id' => 3346,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 991,
				'm_product_id' => 991,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			346 => 
			array (
				'id' => 3347,
				'name' => 'Giá NPP',
				'price' => 50000,
				'product_id' => 992,
				'm_product_id' => 992,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			347 => 
			array (
				'id' => 3348,
				'name' => 'Giá Đại lý',
				'price' => 53000,
				'product_id' => 992,
				'm_product_id' => 992,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			348 => 
			array (
				'id' => 3349,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 992,
				'm_product_id' => 992,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			349 => 
			array (
				'id' => 3350,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 992,
				'm_product_id' => 992,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			350 => 
			array (
				'id' => 3351,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 993,
				'm_product_id' => 993,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			351 => 
			array (
				'id' => 3352,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 993,
				'm_product_id' => 993,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			352 => 
			array (
				'id' => 3353,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 993,
				'm_product_id' => 993,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			353 => 
			array (
				'id' => 3354,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 993,
				'm_product_id' => 993,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			354 => 
			array (
				'id' => 3355,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 994,
				'm_product_id' => 994,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			355 => 
			array (
				'id' => 3356,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 994,
				'm_product_id' => 994,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			356 => 
			array (
				'id' => 3357,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 994,
				'm_product_id' => 994,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			357 => 
			array (
				'id' => 3358,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 994,
				'm_product_id' => 994,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			358 => 
			array (
				'id' => 3359,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 995,
				'm_product_id' => 995,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			359 => 
			array (
				'id' => 3360,
				'name' => 'Giá Đại lý',
				'price' => 63000,
				'product_id' => 995,
				'm_product_id' => 995,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			360 => 
			array (
				'id' => 3361,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 995,
				'm_product_id' => 995,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			361 => 
			array (
				'id' => 3362,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 995,
				'm_product_id' => 995,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			362 => 
			array (
				'id' => 3363,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 996,
				'm_product_id' => 996,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			363 => 
			array (
				'id' => 3364,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 996,
				'm_product_id' => 996,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			364 => 
			array (
				'id' => 3365,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 996,
				'm_product_id' => 996,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			365 => 
			array (
				'id' => 3366,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 996,
				'm_product_id' => 996,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			366 => 
			array (
				'id' => 3367,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 997,
				'm_product_id' => 997,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			367 => 
			array (
				'id' => 3368,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 997,
				'm_product_id' => 997,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			368 => 
			array (
				'id' => 3369,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 997,
				'm_product_id' => 997,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			369 => 
			array (
				'id' => 3370,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 997,
				'm_product_id' => 997,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			370 => 
			array (
				'id' => 3371,
				'name' => 'Giá NPP',
				'price' => 81000,
				'product_id' => 998,
				'm_product_id' => 998,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			371 => 
			array (
				'id' => 3372,
				'name' => 'Giá Đại lý',
				'price' => 83000,
				'product_id' => 998,
				'm_product_id' => 998,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			372 => 
			array (
				'id' => 3373,
				'name' => 'Giá Shop',
				'price' => 85000,
				'product_id' => 998,
				'm_product_id' => 998,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			373 => 
			array (
				'id' => 3374,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 998,
				'm_product_id' => 998,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			374 => 
			array (
				'id' => 3375,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 999,
				'm_product_id' => 999,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			375 => 
			array (
				'id' => 3376,
				'name' => 'Giá Đại lý',
				'price' => 87000,
				'product_id' => 999,
				'm_product_id' => 999,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			376 => 
			array (
				'id' => 3377,
				'name' => 'Giá Shop',
				'price' => 89000,
				'product_id' => 999,
				'm_product_id' => 999,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			377 => 
			array (
				'id' => 3378,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 999,
				'm_product_id' => 999,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			378 => 
			array (
				'id' => 3379,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1000,
				'm_product_id' => 1000,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			379 => 
			array (
				'id' => 3380,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 1000,
				'm_product_id' => 1000,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			380 => 
			array (
				'id' => 3381,
				'name' => 'Giá Shop',
				'price' => 66000,
				'product_id' => 1000,
				'm_product_id' => 1000,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			381 => 
			array (
				'id' => 3382,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1000,
				'm_product_id' => 1000,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			382 => 
			array (
				'id' => 3383,
				'name' => 'Giá NPP',
				'price' => 72000,
				'product_id' => 1001,
				'm_product_id' => 1001,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			383 => 
			array (
				'id' => 3384,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 1001,
				'm_product_id' => 1001,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			384 => 
			array (
				'id' => 3385,
				'name' => 'Giá Shop',
				'price' => 77000,
				'product_id' => 1001,
				'm_product_id' => 1001,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			385 => 
			array (
				'id' => 3386,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1001,
				'm_product_id' => 1001,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			386 => 
			array (
				'id' => 3387,
				'name' => 'Giá NPP',
				'price' => 88000,
				'product_id' => 1002,
				'm_product_id' => 1002,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			387 => 
			array (
				'id' => 3388,
				'name' => 'Giá Đại lý',
				'price' => 91000,
				'product_id' => 1002,
				'm_product_id' => 1002,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			388 => 
			array (
				'id' => 3389,
				'name' => 'Giá Shop',
				'price' => 93000,
				'product_id' => 1002,
				'm_product_id' => 1002,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			389 => 
			array (
				'id' => 3390,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1002,
				'm_product_id' => 1002,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			390 => 
			array (
				'id' => 3391,
				'name' => 'Giá NPP',
				'price' => 77000,
				'product_id' => 1003,
				'm_product_id' => 1003,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			391 => 
			array (
				'id' => 3392,
				'name' => 'Giá Đại lý',
				'price' => 80000,
				'product_id' => 1003,
				'm_product_id' => 1003,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			392 => 
			array (
				'id' => 3393,
				'name' => 'Giá Shop',
				'price' => 82000,
				'product_id' => 1003,
				'm_product_id' => 1003,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			393 => 
			array (
				'id' => 3394,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1003,
				'm_product_id' => 1003,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			394 => 
			array (
				'id' => 3395,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 1004,
				'm_product_id' => 1004,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			395 => 
			array (
				'id' => 3396,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 1004,
				'm_product_id' => 1004,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			396 => 
			array (
				'id' => 3397,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 1004,
				'm_product_id' => 1004,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			397 => 
			array (
				'id' => 3398,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1004,
				'm_product_id' => 1004,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			398 => 
			array (
				'id' => 3399,
				'name' => 'Giá NPP',
				'price' => 102000,
				'product_id' => 1005,
				'm_product_id' => 1005,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			399 => 
			array (
				'id' => 3400,
				'name' => 'Giá Đại lý',
				'price' => 105000,
				'product_id' => 1005,
				'm_product_id' => 1005,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			400 => 
			array (
				'id' => 3401,
				'name' => 'Giá Shop',
				'price' => 108000,
				'product_id' => 1005,
				'm_product_id' => 1005,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			401 => 
			array (
				'id' => 3402,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1005,
				'm_product_id' => 1005,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			402 => 
			array (
				'id' => 3403,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 1006,
				'm_product_id' => 1006,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			403 => 
			array (
				'id' => 3404,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1006,
				'm_product_id' => 1006,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			404 => 
			array (
				'id' => 3405,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 1006,
				'm_product_id' => 1006,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			405 => 
			array (
				'id' => 3406,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1006,
				'm_product_id' => 1006,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			406 => 
			array (
				'id' => 3407,
				'name' => 'Giá NPP',
				'price' => 110000,
				'product_id' => 1007,
				'm_product_id' => 1007,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			407 => 
			array (
				'id' => 3408,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 1007,
				'm_product_id' => 1007,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			408 => 
			array (
				'id' => 3409,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1007,
				'm_product_id' => 1007,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			409 => 
			array (
				'id' => 3410,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1007,
				'm_product_id' => 1007,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			410 => 
			array (
				'id' => 3411,
				'name' => 'Giá NPP',
				'price' => 72000,
				'product_id' => 1008,
				'm_product_id' => 1008,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			411 => 
			array (
				'id' => 3412,
				'name' => 'Giá Đại lý',
				'price' => 76000,
				'product_id' => 1008,
				'm_product_id' => 1008,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			412 => 
			array (
				'id' => 3413,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 1008,
				'm_product_id' => 1008,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			413 => 
			array (
				'id' => 3414,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1008,
				'm_product_id' => 1008,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			414 => 
			array (
				'id' => 3415,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 1009,
				'm_product_id' => 1009,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			415 => 
			array (
				'id' => 3416,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 1009,
				'm_product_id' => 1009,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			416 => 
			array (
				'id' => 3417,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 1009,
				'm_product_id' => 1009,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			417 => 
			array (
				'id' => 3418,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1009,
				'm_product_id' => 1009,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			418 => 
			array (
				'id' => 3419,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 1010,
				'm_product_id' => 1010,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			419 => 
			array (
				'id' => 3420,
				'name' => 'Giá Đại lý',
				'price' => 63000,
				'product_id' => 1010,
				'm_product_id' => 1010,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			420 => 
			array (
				'id' => 3421,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 1010,
				'm_product_id' => 1010,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			421 => 
			array (
				'id' => 3422,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1010,
				'm_product_id' => 1010,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			422 => 
			array (
				'id' => 3423,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 1011,
				'm_product_id' => 1011,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			423 => 
			array (
				'id' => 3424,
				'name' => 'Giá Đại lý',
				'price' => 63000,
				'product_id' => 1011,
				'm_product_id' => 1011,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			424 => 
			array (
				'id' => 3425,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 1011,
				'm_product_id' => 1011,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			425 => 
			array (
				'id' => 3426,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1011,
				'm_product_id' => 1011,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			426 => 
			array (
				'id' => 3427,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1012,
				'm_product_id' => 1012,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			427 => 
			array (
				'id' => 3428,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1012,
				'm_product_id' => 1012,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			428 => 
			array (
				'id' => 3429,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 1012,
				'm_product_id' => 1012,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			429 => 
			array (
				'id' => 3430,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1012,
				'm_product_id' => 1012,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			430 => 
			array (
				'id' => 3431,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 1013,
				'm_product_id' => 1013,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			431 => 
			array (
				'id' => 3432,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 1013,
				'm_product_id' => 1013,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			432 => 
			array (
				'id' => 3433,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 1013,
				'm_product_id' => 1013,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			433 => 
			array (
				'id' => 3434,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1013,
				'm_product_id' => 1013,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			434 => 
			array (
				'id' => 3435,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 1014,
				'm_product_id' => 1014,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			435 => 
			array (
				'id' => 3436,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 1014,
				'm_product_id' => 1014,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			436 => 
			array (
				'id' => 3437,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 1014,
				'm_product_id' => 1014,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			437 => 
			array (
				'id' => 3438,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1014,
				'm_product_id' => 1014,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			438 => 
			array (
				'id' => 3439,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 1015,
				'm_product_id' => 1015,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			439 => 
			array (
				'id' => 3440,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 1015,
				'm_product_id' => 1015,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			440 => 
			array (
				'id' => 3441,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 1015,
				'm_product_id' => 1015,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			441 => 
			array (
				'id' => 3442,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1015,
				'm_product_id' => 1015,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			442 => 
			array (
				'id' => 3443,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 1016,
				'm_product_id' => 1016,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			443 => 
			array (
				'id' => 3444,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 1016,
				'm_product_id' => 1016,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			444 => 
			array (
				'id' => 3445,
				'name' => 'Giá Shop',
				'price' => 60000,
				'product_id' => 1016,
				'm_product_id' => 1016,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			445 => 
			array (
				'id' => 3446,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1016,
				'm_product_id' => 1016,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			446 => 
			array (
				'id' => 3447,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 1017,
				'm_product_id' => 1017,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			447 => 
			array (
				'id' => 3448,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 1017,
				'm_product_id' => 1017,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			448 => 
			array (
				'id' => 3449,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1017,
				'm_product_id' => 1017,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			449 => 
			array (
				'id' => 3450,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1017,
				'm_product_id' => 1017,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			450 => 
			array (
				'id' => 3451,
				'name' => 'Giá NPP',
				'price' => 120000,
				'product_id' => 1018,
				'm_product_id' => 1018,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			451 => 
			array (
				'id' => 3452,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 1018,
				'm_product_id' => 1018,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			452 => 
			array (
				'id' => 3453,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1018,
				'm_product_id' => 1018,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			453 => 
			array (
				'id' => 3454,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1018,
				'm_product_id' => 1018,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			454 => 
			array (
				'id' => 3455,
				'name' => 'Giá NPP',
				'price' => 54000,
				'product_id' => 1019,
				'm_product_id' => 1019,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			455 => 
			array (
				'id' => 3456,
				'name' => 'Giá Đại lý',
				'price' => 55000,
				'product_id' => 1019,
				'm_product_id' => 1019,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			456 => 
			array (
				'id' => 3457,
				'name' => 'Giá Shop',
				'price' => 58000,
				'product_id' => 1019,
				'm_product_id' => 1019,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			457 => 
			array (
				'id' => 3458,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1019,
				'm_product_id' => 1019,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			458 => 
			array (
				'id' => 3459,
				'name' => 'Giá NPP',
				'price' => 48000,
				'product_id' => 1020,
				'm_product_id' => 1020,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			459 => 
			array (
				'id' => 3460,
				'name' => 'Giá Đại lý',
				'price' => 50000,
				'product_id' => 1020,
				'm_product_id' => 1020,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			460 => 
			array (
				'id' => 3461,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 1020,
				'm_product_id' => 1020,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			461 => 
			array (
				'id' => 3462,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1020,
				'm_product_id' => 1020,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			462 => 
			array (
				'id' => 3463,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 1021,
				'm_product_id' => 1021,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			463 => 
			array (
				'id' => 3464,
				'name' => 'Giá Đại lý',
				'price' => 60000,
				'product_id' => 1021,
				'm_product_id' => 1021,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			464 => 
			array (
				'id' => 3465,
				'name' => 'Giá Shop',
				'price' => 65000,
				'product_id' => 1021,
				'm_product_id' => 1021,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			465 => 
			array (
				'id' => 3466,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1021,
				'm_product_id' => 1021,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			466 => 
			array (
				'id' => 3467,
				'name' => 'Giá NPP',
				'price' => 67000,
				'product_id' => 1022,
				'm_product_id' => 1022,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			467 => 
			array (
				'id' => 3468,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 1022,
				'm_product_id' => 1022,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			468 => 
			array (
				'id' => 3469,
				'name' => 'Giá Shop',
				'price' => 75000,
				'product_id' => 1022,
				'm_product_id' => 1022,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			469 => 
			array (
				'id' => 3470,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1022,
				'm_product_id' => 1022,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			470 => 
			array (
				'id' => 3471,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 1023,
				'm_product_id' => 1023,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			471 => 
			array (
				'id' => 3472,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 1023,
				'm_product_id' => 1023,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			472 => 
			array (
				'id' => 3473,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1023,
				'm_product_id' => 1023,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			473 => 
			array (
				'id' => 3474,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1023,
				'm_product_id' => 1023,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			474 => 
			array (
				'id' => 3475,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 1024,
				'm_product_id' => 1024,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			475 => 
			array (
				'id' => 3476,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1024,
				'm_product_id' => 1024,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			476 => 
			array (
				'id' => 3477,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 1024,
				'm_product_id' => 1024,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			477 => 
			array (
				'id' => 3478,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1024,
				'm_product_id' => 1024,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			478 => 
			array (
				'id' => 3479,
				'name' => 'Giá NPP',
				'price' => 95000,
				'product_id' => 1025,
				'm_product_id' => 1025,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			479 => 
			array (
				'id' => 3480,
				'name' => 'Giá Đại lý',
				'price' => 100000,
				'product_id' => 1025,
				'm_product_id' => 1025,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			480 => 
			array (
				'id' => 3481,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1025,
				'm_product_id' => 1025,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			481 => 
			array (
				'id' => 3482,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1025,
				'm_product_id' => 1025,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			482 => 
			array (
				'id' => 3483,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1026,
				'm_product_id' => 1026,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			483 => 
			array (
				'id' => 3484,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1026,
				'm_product_id' => 1026,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			484 => 
			array (
				'id' => 3485,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1026,
				'm_product_id' => 1026,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			485 => 
			array (
				'id' => 3486,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1026,
				'm_product_id' => 1026,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			486 => 
			array (
				'id' => 3487,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 1027,
				'm_product_id' => 1027,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			487 => 
			array (
				'id' => 3488,
				'name' => 'Giá Đại lý',
				'price' => 82000,
				'product_id' => 1027,
				'm_product_id' => 1027,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			488 => 
			array (
				'id' => 3489,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1027,
				'm_product_id' => 1027,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			489 => 
			array (
				'id' => 3490,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1027,
				'm_product_id' => 1027,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			490 => 
			array (
				'id' => 3491,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1028,
				'm_product_id' => 1028,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			491 => 
			array (
				'id' => 3492,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1028,
				'm_product_id' => 1028,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			492 => 
			array (
				'id' => 3493,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 1028,
				'm_product_id' => 1028,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			493 => 
			array (
				'id' => 3494,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1028,
				'm_product_id' => 1028,
				'created_at' => '2015-08-05 08:54:42',
				'updated_at' => '2015-08-05 08:54:42',
			),
			494 => 
			array (
				'id' => 3495,
				'name' => 'Giá NPP',
				'price' => 68000,
				'product_id' => 1029,
				'm_product_id' => 1029,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			495 => 
			array (
				'id' => 3496,
				'name' => 'Giá Đại lý',
				'price' => 70000,
				'product_id' => 1029,
				'm_product_id' => 1029,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			496 => 
			array (
				'id' => 3497,
				'name' => 'Giá Shop',
				'price' => 72000,
				'product_id' => 1029,
				'm_product_id' => 1029,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			497 => 
			array (
				'id' => 3498,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1029,
				'm_product_id' => 1029,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			498 => 
			array (
				'id' => 3499,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1030,
				'm_product_id' => 1030,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			499 => 
			array (
				'id' => 3500,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1030,
				'm_product_id' => 1030,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
		));
		\DB::table('sell_prices')->insert(array (
			0 => 
			array (
				'id' => 3501,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1030,
				'm_product_id' => 1030,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			1 => 
			array (
				'id' => 3502,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1030,
				'm_product_id' => 1030,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			2 => 
			array (
				'id' => 3503,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1031,
				'm_product_id' => 1031,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			3 => 
			array (
				'id' => 3504,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1031,
				'm_product_id' => 1031,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			4 => 
			array (
				'id' => 3505,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 1031,
				'm_product_id' => 1031,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			5 => 
			array (
				'id' => 3506,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1031,
				'm_product_id' => 1031,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			6 => 
			array (
				'id' => 3507,
				'name' => 'Giá NPP',
				'price' => 80000,
				'product_id' => 1032,
				'm_product_id' => 1032,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			7 => 
			array (
				'id' => 3508,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 1032,
				'm_product_id' => 1032,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			8 => 
			array (
				'id' => 3509,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1032,
				'm_product_id' => 1032,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			9 => 
			array (
				'id' => 3510,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1032,
				'm_product_id' => 1032,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			10 => 
			array (
				'id' => 3511,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 1033,
				'm_product_id' => 1033,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			11 => 
			array (
				'id' => 3512,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 1033,
				'm_product_id' => 1033,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			12 => 
			array (
				'id' => 3513,
				'name' => 'Giá Shop',
				'price' => 78000,
				'product_id' => 1033,
				'm_product_id' => 1033,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			13 => 
			array (
				'id' => 3514,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1033,
				'm_product_id' => 1033,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			14 => 
			array (
				'id' => 3515,
				'name' => 'Giá NPP',
				'price' => 44000,
				'product_id' => 1034,
				'm_product_id' => 1034,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			15 => 
			array (
				'id' => 3516,
				'name' => 'Giá Đại lý',
				'price' => 45000,
				'product_id' => 1034,
				'm_product_id' => 1034,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			16 => 
			array (
				'id' => 3517,
				'name' => 'Giá Shop',
				'price' => 47000,
				'product_id' => 1034,
				'm_product_id' => 1034,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			17 => 
			array (
				'id' => 3518,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1034,
				'm_product_id' => 1034,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			18 => 
			array (
				'id' => 3519,
				'name' => 'Giá NPP',
				'price' => 31000,
				'product_id' => 1035,
				'm_product_id' => 1035,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			19 => 
			array (
				'id' => 3520,
				'name' => 'Giá Đại lý',
				'price' => 32000,
				'product_id' => 1035,
				'm_product_id' => 1035,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			20 => 
			array (
				'id' => 3521,
				'name' => 'Giá Shop',
				'price' => 34000,
				'product_id' => 1035,
				'm_product_id' => 1035,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			21 => 
			array (
				'id' => 3522,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1035,
				'm_product_id' => 1035,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			22 => 
			array (
				'id' => 3523,
				'name' => 'Giá NPP',
				'price' => 52000,
				'product_id' => 1036,
				'm_product_id' => 1036,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			23 => 
			array (
				'id' => 3524,
				'name' => 'Giá Đại lý',
				'price' => 53000,
				'product_id' => 1036,
				'm_product_id' => 1036,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			24 => 
			array (
				'id' => 3525,
				'name' => 'Giá Shop',
				'price' => 55000,
				'product_id' => 1036,
				'm_product_id' => 1036,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			25 => 
			array (
				'id' => 3526,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1036,
				'm_product_id' => 1036,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			26 => 
			array (
				'id' => 3527,
				'name' => 'Giá NPP',
				'price' => 37000,
				'product_id' => 1037,
				'm_product_id' => 1037,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			27 => 
			array (
				'id' => 3528,
				'name' => 'Giá Đại lý',
				'price' => 38000,
				'product_id' => 1037,
				'm_product_id' => 1037,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			28 => 
			array (
				'id' => 3529,
				'name' => 'Giá Shop',
				'price' => 40000,
				'product_id' => 1037,
				'm_product_id' => 1037,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			29 => 
			array (
				'id' => 3530,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1037,
				'm_product_id' => 1037,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			30 => 
			array (
				'id' => 3531,
				'name' => 'Giá NPP',
				'price' => 56000,
				'product_id' => 1038,
				'm_product_id' => 1038,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			31 => 
			array (
				'id' => 3532,
				'name' => 'Giá Đại lý',
				'price' => 58000,
				'product_id' => 1038,
				'm_product_id' => 1038,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			32 => 
			array (
				'id' => 3533,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1038,
				'm_product_id' => 1038,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			33 => 
			array (
				'id' => 3534,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1038,
				'm_product_id' => 1038,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			34 => 
			array (
				'id' => 3535,
				'name' => 'Giá NPP',
				'price' => 43000,
				'product_id' => 1039,
				'm_product_id' => 1039,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			35 => 
			array (
				'id' => 3536,
				'name' => 'Giá Đại lý',
				'price' => 44000,
				'product_id' => 1039,
				'm_product_id' => 1039,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			36 => 
			array (
				'id' => 3537,
				'name' => 'Giá Shop',
				'price' => 45000,
				'product_id' => 1039,
				'm_product_id' => 1039,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			37 => 
			array (
				'id' => 3538,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1039,
				'm_product_id' => 1039,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			38 => 
			array (
				'id' => 3539,
				'name' => 'Giá NPP',
				'price' => 60000,
				'product_id' => 1040,
				'm_product_id' => 1040,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			39 => 
			array (
				'id' => 3540,
				'name' => 'Giá Đại lý',
				'price' => 62000,
				'product_id' => 1040,
				'm_product_id' => 1040,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			40 => 
			array (
				'id' => 3541,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1040,
				'm_product_id' => 1040,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			41 => 
			array (
				'id' => 3542,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1040,
				'm_product_id' => 1040,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			42 => 
			array (
				'id' => 3543,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 1041,
				'm_product_id' => 1041,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			43 => 
			array (
				'id' => 3544,
				'name' => 'Giá Đại lý',
				'price' => 85000,
				'product_id' => 1041,
				'm_product_id' => 1041,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			44 => 
			array (
				'id' => 3545,
				'name' => 'Giá Shop',
				'price' => 90000,
				'product_id' => 1041,
				'm_product_id' => 1041,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			45 => 
			array (
				'id' => 3546,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1041,
				'm_product_id' => 1041,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			46 => 
			array (
				'id' => 3547,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 1042,
				'm_product_id' => 1042,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			47 => 
			array (
				'id' => 3548,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 1042,
				'm_product_id' => 1042,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			48 => 
			array (
				'id' => 3549,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1042,
				'm_product_id' => 1042,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			49 => 
			array (
				'id' => 3550,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1042,
				'm_product_id' => 1042,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			50 => 
			array (
				'id' => 3551,
				'name' => 'Giá NPP',
				'price' => 62000,
				'product_id' => 1043,
				'm_product_id' => 1043,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			51 => 
			array (
				'id' => 3552,
				'name' => 'Giá Đại lý',
				'price' => 64000,
				'product_id' => 1043,
				'm_product_id' => 1043,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			52 => 
			array (
				'id' => 3553,
				'name' => 'Giá Shop',
				'price' => 66000,
				'product_id' => 1043,
				'm_product_id' => 1043,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			53 => 
			array (
				'id' => 3554,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1043,
				'm_product_id' => 1043,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			54 => 
			array (
				'id' => 3555,
				'name' => 'Giá NPP',
				'price' => 59000,
				'product_id' => 1044,
				'm_product_id' => 1044,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			55 => 
			array (
				'id' => 3556,
				'name' => 'Giá Đại lý',
				'price' => 61000,
				'product_id' => 1044,
				'm_product_id' => 1044,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			56 => 
			array (
				'id' => 3557,
				'name' => 'Giá Shop',
				'price' => 63000,
				'product_id' => 1044,
				'm_product_id' => 1044,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			57 => 
			array (
				'id' => 3558,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1044,
				'm_product_id' => 1044,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			58 => 
			array (
				'id' => 3559,
				'name' => 'Giá NPP',
				'price' => 73000,
				'product_id' => 1045,
				'm_product_id' => 1045,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			59 => 
			array (
				'id' => 3560,
				'name' => 'Giá Đại lý',
				'price' => 75000,
				'product_id' => 1045,
				'm_product_id' => 1045,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			60 => 
			array (
				'id' => 3561,
				'name' => 'Giá Shop',
				'price' => 77000,
				'product_id' => 1045,
				'm_product_id' => 1045,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			61 => 
			array (
				'id' => 3562,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1045,
				'm_product_id' => 1045,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			62 => 
			array (
				'id' => 3563,
				'name' => 'Giá NPP',
				'price' => 84000,
				'product_id' => 1046,
				'm_product_id' => 1046,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			63 => 
			array (
				'id' => 3564,
				'name' => 'Giá Đại lý',
				'price' => 86000,
				'product_id' => 1046,
				'm_product_id' => 1046,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			64 => 
			array (
				'id' => 3565,
				'name' => 'Giá Shop',
				'price' => 88000,
				'product_id' => 1046,
				'm_product_id' => 1046,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			65 => 
			array (
				'id' => 3566,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1046,
				'm_product_id' => 1046,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			66 => 
			array (
				'id' => 3567,
				'name' => 'Giá NPP',
				'price' => 0,
				'product_id' => 1047,
				'm_product_id' => 1047,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			67 => 
			array (
				'id' => 3568,
				'name' => 'Giá Đại lý',
				'price' => 0,
				'product_id' => 1047,
				'm_product_id' => 1047,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			68 => 
			array (
				'id' => 3569,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1047,
				'm_product_id' => 1047,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			69 => 
			array (
				'id' => 3570,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1047,
				'm_product_id' => 1047,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			70 => 
			array (
				'id' => 3571,
				'name' => 'Giá NPP',
				'price' => 65000,
				'product_id' => 1048,
				'm_product_id' => 1048,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			71 => 
			array (
				'id' => 3572,
				'name' => 'Giá Đại lý',
				'price' => 67000,
				'product_id' => 1048,
				'm_product_id' => 1048,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			72 => 
			array (
				'id' => 3573,
				'name' => 'Giá Shop',
				'price' => 69000,
				'product_id' => 1048,
				'm_product_id' => 1048,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			73 => 
			array (
				'id' => 3574,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1048,
				'm_product_id' => 1048,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			74 => 
			array (
				'id' => 3575,
				'name' => 'Giá NPP',
				'price' => 85000,
				'product_id' => 1049,
				'm_product_id' => 1049,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			75 => 
			array (
				'id' => 3576,
				'name' => 'Giá Đại lý',
				'price' => 87000,
				'product_id' => 1049,
				'm_product_id' => 1049,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			76 => 
			array (
				'id' => 3577,
				'name' => 'Giá Shop',
				'price' => 90000,
				'product_id' => 1049,
				'm_product_id' => 1049,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			77 => 
			array (
				'id' => 3578,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1049,
				'm_product_id' => 1049,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			78 => 
			array (
				'id' => 3579,
				'name' => 'Giá NPP',
				'price' => 104000,
				'product_id' => 1050,
				'm_product_id' => 1050,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			79 => 
			array (
				'id' => 3580,
				'name' => 'Giá Đại lý',
				'price' => 106000,
				'product_id' => 1050,
				'm_product_id' => 1050,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			80 => 
			array (
				'id' => 3581,
				'name' => 'Giá Shop',
				'price' => 110000,
				'product_id' => 1050,
				'm_product_id' => 1050,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			81 => 
			array (
				'id' => 3582,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1050,
				'm_product_id' => 1050,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			82 => 
			array (
				'id' => 3583,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 1051,
				'm_product_id' => 1051,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			83 => 
			array (
				'id' => 3584,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1051,
				'm_product_id' => 1051,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			84 => 
			array (
				'id' => 3585,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 1051,
				'm_product_id' => 1051,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			85 => 
			array (
				'id' => 3586,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1051,
				'm_product_id' => 1051,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			86 => 
			array (
				'id' => 3587,
				'name' => 'Giá NPP',
				'price' => 115000,
				'product_id' => 1052,
				'm_product_id' => 1052,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			87 => 
			array (
				'id' => 3588,
				'name' => 'Giá Đại lý',
				'price' => 120000,
				'product_id' => 1052,
				'm_product_id' => 1052,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			88 => 
			array (
				'id' => 3589,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1052,
				'm_product_id' => 1052,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			89 => 
			array (
				'id' => 3590,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1052,
				'm_product_id' => 1052,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			90 => 
			array (
				'id' => 3591,
				'name' => 'Giá NPP',
				'price' => 75000,
				'product_id' => 1053,
				'm_product_id' => 1053,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			91 => 
			array (
				'id' => 3592,
				'name' => 'Giá Đại lý',
				'price' => 78000,
				'product_id' => 1053,
				'm_product_id' => 1053,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			92 => 
			array (
				'id' => 3593,
				'name' => 'Giá Shop',
				'price' => 80000,
				'product_id' => 1053,
				'm_product_id' => 1053,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			93 => 
			array (
				'id' => 3594,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1053,
				'm_product_id' => 1053,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			94 => 
			array (
				'id' => 3595,
				'name' => 'Giá NPP',
				'price' => 96000,
				'product_id' => 1054,
				'm_product_id' => 1054,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			95 => 
			array (
				'id' => 3596,
				'name' => 'Giá Đại lý',
				'price' => 99000,
				'product_id' => 1054,
				'm_product_id' => 1054,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			96 => 
			array (
				'id' => 3597,
				'name' => 'Giá Shop',
				'price' => 102000,
				'product_id' => 1054,
				'm_product_id' => 1054,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			97 => 
			array (
				'id' => 3598,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1054,
				'm_product_id' => 1054,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			98 => 
			array (
				'id' => 3599,
				'name' => 'Giá NPP',
				'price' => 78000,
				'product_id' => 1055,
				'm_product_id' => 1055,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			99 => 
			array (
				'id' => 3600,
				'name' => 'Giá Đại lý',
				'price' => 81000,
				'product_id' => 1055,
				'm_product_id' => 1055,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			100 => 
			array (
				'id' => 3601,
				'name' => 'Giá Shop',
				'price' => 83000,
				'product_id' => 1055,
				'm_product_id' => 1055,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			101 => 
			array (
				'id' => 3602,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1055,
				'm_product_id' => 1055,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			102 => 
			array (
				'id' => 3603,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 1056,
				'm_product_id' => 1056,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			103 => 
			array (
				'id' => 3604,
				'name' => 'Giá Đại lý',
				'price' => 57000,
				'product_id' => 1056,
				'm_product_id' => 1056,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			104 => 
			array (
				'id' => 3605,
				'name' => 'Giá Shop',
				'price' => 59000,
				'product_id' => 1056,
				'm_product_id' => 1056,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			105 => 
			array (
				'id' => 3606,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1056,
				'm_product_id' => 1056,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			106 => 
			array (
				'id' => 3607,
				'name' => 'Giá NPP',
				'price' => 45000,
				'product_id' => 1057,
				'm_product_id' => 1057,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			107 => 
			array (
				'id' => 3608,
				'name' => 'Giá Đại lý',
				'price' => 47000,
				'product_id' => 1057,
				'm_product_id' => 1057,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			108 => 
			array (
				'id' => 3609,
				'name' => 'Giá Shop',
				'price' => 49000,
				'product_id' => 1057,
				'm_product_id' => 1057,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			109 => 
			array (
				'id' => 3610,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1057,
				'm_product_id' => 1057,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			110 => 
			array (
				'id' => 3611,
				'name' => 'Giá NPP',
				'price' => 63000,
				'product_id' => 1058,
				'm_product_id' => 1058,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			111 => 
			array (
				'id' => 3612,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1058,
				'm_product_id' => 1058,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			112 => 
			array (
				'id' => 3613,
				'name' => 'Giá Shop',
				'price' => 67000,
				'product_id' => 1058,
				'm_product_id' => 1058,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			113 => 
			array (
				'id' => 3614,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1058,
				'm_product_id' => 1058,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			114 => 
			array (
				'id' => 3615,
				'name' => 'Giá NPP',
				'price' => 90000,
				'product_id' => 1059,
				'm_product_id' => 1059,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			115 => 
			array (
				'id' => 3616,
				'name' => 'Giá Đại lý',
				'price' => 92000,
				'product_id' => 1059,
				'm_product_id' => 1059,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			116 => 
			array (
				'id' => 3617,
				'name' => 'Giá Shop',
				'price' => 0,
				'product_id' => 1059,
				'm_product_id' => 1059,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			117 => 
			array (
				'id' => 3618,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1059,
				'm_product_id' => 1059,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			118 => 
			array (
				'id' => 3619,
				'name' => 'Giá NPP',
				'price' => 55000,
				'product_id' => 1060,
				'm_product_id' => 1060,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			119 => 
			array (
				'id' => 3620,
				'name' => 'Giá Đại lý',
				'price' => 65000,
				'product_id' => 1060,
				'm_product_id' => 1060,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			120 => 
			array (
				'id' => 3621,
				'name' => 'Giá Shop',
				'price' => 70000,
				'product_id' => 1060,
				'm_product_id' => 1060,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
			121 => 
			array (
				'id' => 3622,
				'name' => 'Giá Bán lẻ',
				'price' => 0,
				'product_id' => 1060,
				'm_product_id' => 1060,
				'created_at' => '2015-08-05 08:54:43',
				'updated_at' => '2015-08-05 08:54:43',
			),
		));
	}

}
