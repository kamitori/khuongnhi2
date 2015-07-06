<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptMonthsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receipt_months', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('date',20);
			$table->double('sum_amount')->unsigned()->default(0);
			$table->double('paid')->unsigned()->default(0);
			$table->double('no_cu')->unsigned()->default(0);
			$table->double('con_lai')->unsigned()->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('receipt_months');
	}

}
