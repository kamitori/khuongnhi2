<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
// Create company  --> create address
		DB::unprepared("
			CREATE TRIGGER tr_Create_Company_Address AFTER INSERT ON `companies` FOR EACH ROW
			BEGIN
				INSERT INTO `khuongnhi`.`addresses` (`id`, `address`, `zip_postcode`, `town_city`, `province_id`, `country_id`, `module_id`, `module_type`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
				VALUES (NULL, '', '', '', '0', '0', NEW.id, 'App\\\\Company', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
			END
		");

		DB::unprepared("
			CREATE TRIGGER tr_Delete_Company_Address AFTER DELETE ON `companies` FOR EACH ROW
			BEGIN
				DELETE  FROM `khuongnhi`.`addresses` WHERE `module_id`=OLD.id and `module_type` = 'App\\\\Company';
			END
		");

// Create order --> create address
		DB::unprepared("
			CREATE TRIGGER tr_Create_PO_Address AFTER INSERT ON `purchaseorders` FOR EACH ROW
			BEGIN
				INSERT INTO `khuongnhi`.`addresses` (`id`, `address`, `zip_postcode`, `town_city`, `province_id`, `country_id`, `module_id`, `module_type`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
				VALUES (NULL, '', '', '', '0', '0', NEW.id, 'App\\\\Purchaseorder', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
			END
		");
		DB::unprepared("
			CREATE TRIGGER tr_Create_SO_Address AFTER INSERT ON `saleorders` FOR EACH ROW
			BEGIN
				INSERT INTO `khuongnhi`.`addresses` (`id`, `address`, `zip_postcode`, `town_city`, `province_id`, `country_id`, `module_id`, `module_type`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
				VALUES (NULL, '', '', '', '0', '0', NEW.id, 'App\\\\Saleorder', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
			END
		");
		DB::unprepared("
			CREATE TRIGGER tr_Create_RPO_Address AFTER INSERT ON `return_purchaseorders` FOR EACH ROW
			BEGIN
				INSERT INTO `khuongnhi`.`addresses` (`id`, `address`, `zip_postcode`, `town_city`, `province_id`, `country_id`, `module_id`, `module_type`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
				VALUES (NULL, '', '', '', '0', '0', NEW.id, 'App\\\\ReturnPurchaseorder', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
			END
		");
		DB::unprepared("
			CREATE TRIGGER tr_Create_RSO_Address AFTER INSERT ON `return_saleorders` FOR EACH ROW
			BEGIN
				INSERT INTO `khuongnhi`.`addresses` (`id`, `address`, `zip_postcode`, `town_city`, `province_id`, `country_id`, `module_id`, `module_type`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
				VALUES (NULL, '', '', '', '0', '0', NEW.id, 'App\\\\ReturnSaleorder', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
			END
		");

// Delete order --> delete address

		DB::unprepared("
			CREATE TRIGGER tr_Delete_PO_Address AFTER DELETE ON `purchaseorders` FOR EACH ROW
			BEGIN
				DELETE  FROM `khuongnhi`.`addresses` WHERE `module_id`=OLD.id and `module_type` = 'App\\\\Purchaseorder';
			END
		");
		DB::unprepared("
			CREATE TRIGGER tr_Delete_SO_Address AFTER DELETE ON `saleorders` FOR EACH ROW
			BEGIN
				DELETE  FROM `khuongnhi`.`addresses` WHERE `module_id`=OLD.id and `module_type` = 'App\\\\Saleorder';
			END
		");
		DB::unprepared("
			CREATE TRIGGER tr_Delete_RPO_Address AFTER DELETE ON `return_purchaseorders` FOR EACH ROW
			BEGIN
				DELETE  FROM `khuongnhi`.`addresses` WHERE `module_id`=OLD.id and `module_type` = 'App\\\\ReturnPurchaseorder';
			END
		");
		DB::unprepared("
			CREATE TRIGGER tr_Delete_RSO_Address AFTER DELETE ON `return_saleorders` FOR EACH ROW
			BEGIN
				DELETE  FROM `khuongnhi`.`addresses` WHERE `module_id`=OLD.id and `module_type` = 'App\\\\ReturnSaleorder';
			END
		");

// Create mproduct --> create product stock
		DB::unprepared("
			CREATE TRIGGER tr_Create_Mproduct_Productstock AFTER INSERT ON `m_products` FOR EACH ROW
			BEGIN
				DECLARE status_po INT;
				IF(NEW.module_type = 'App\\\\Purchaseorder') THEN
					SET status_po = (SELECT `status` from `purchaseorders` where `id`=New.module_id);
					IF(status_po=1) THEN
						INSERT INTO `khuongnhi`.`product_stocks` (`id`, `m_product_id`, `product_id`, `in_stock`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
						VALUES (NULL, NEW.id, NEW.product_id, NEW.quantity*NEW.specification, '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
					ELSE
						INSERT INTO `khuongnhi`.`product_stocks` (`id`, `m_product_id`, `product_id`, `in_stock`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
						VALUES (NULL, NEW.id, NEW.product_id, '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
					END IF;
				END IF;
				
				IF(NEW.module_type = 'in_stock') THEN
					INSERT INTO `khuongnhi`.`product_stocks` (`id`, `m_product_id`, `product_id`, `in_stock`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
					VALUES (NULL, NEW.id, NEW.product_id, NEW.quantity*NEW.specification, '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
				END IF;
				 
			END
		");

		DB::unprepared("
			CREATE TRIGGER tr_Delete_Mproduct_Productstock AFTER DELETE ON `m_products` FOR EACH ROW
			BEGIN
				DELETE  FROM `khuongnhi`.`product_stocks` WHERE `m_product_id`=OLD.id;
			END
		");

// Update Mproduct --> update Amount or Invest
		DB::unprepared("
			CREATE TRIGGER tr_Update_Mproduct_Order AFTER UPDATE ON `m_products` 
			FOR EACH ROW
			BEGIN
			IF NEW.module_type = 'App\\\\Purchaseorder' THEN
			
				UPDATE `khuongnhi`.`purchaseorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`invest`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\Purchaseorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.id = NEW.module_id
				AND o.status = 1;
			END IF; 
			IF NEW.module_type = 'App\\\\ReturnPurchaseorder' THEN
			
				UPDATE `khuongnhi`.`return_purchaseorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`invest`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\ReturnPurchaseorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.id = NEW.module_id
				AND o.status = 1;
			END IF; 
			IF NEW.module_type = 'App\\\\Saleorder' THEN
			
				UPDATE `khuongnhi`.`saleorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`amount`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\Saleorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.id = NEW.module_id
				AND o.status = 1;
			END IF; 
			IF NEW.module_type = 'App\\\\ReturnSaleorder' THEN
			
				UPDATE `khuongnhi`.`return_saleorders` o
				INNER JOIN
				(
				SELECT `module_id`, SUM(`amount`) sum_amount
				FROM `m_products`
				WHERE `module_type` = 'App\\\\ReturnSaleorder'
				GROUP BY `module_id`
				) i ON o.id = i.module_id
				SET o.sum_amount = i.sum_amount
				WHERE o.id = NEW.module_id
				AND o.status = 1;
			END IF; 
			END
		");

// Update Mproduct
		DB::unprepared("
			CREATE TRIGGER tr_Update_Mproduct_Order_Before BEFORE UPDATE ON `m_products` 
			FOR EACH ROW
			BEGIN
				IF(NEW.specification <> OLD.specification OR NEW.quantity <> OLD.quantity OR NEW.origin_price <> OLD.origin_price OR NEW.sell_price <> OLD.sell_price) THEN
					SET NEW.amount = NEW.specification * NEW.quantity * NEW.sell_price;
					SET NEW.invest = NEW.specification * NEW.quantity * NEW.origin_price;
				END IF;
			END
		");

// Update order --> Update receipt month
	}
			
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::unprepared('DROP TRIGGER `tr_Create_Company_Address`');
		DB::unprepared('DROP TRIGGER `tr_Delete_Company_Address`');

		DB::unprepared('DROP TRIGGER `tr_Create_PO_Address`');
		DB::unprepared('DROP TRIGGER `tr_Create_SO_Address`');
		DB::unprepared('DROP TRIGGER `tr_Create_RPO_Address`');
		DB::unprepared('DROP TRIGGER `tr_Create_RSO_Address`');

		DB::unprepared('DROP TRIGGER `tr_Delete_PO_Address`');
		DB::unprepared('DROP TRIGGER `tr_Delete_SO_Address`');
		DB::unprepared('DROP TRIGGER `tr_Delete_RPO_Address`');
		DB::unprepared('DROP TRIGGER `tr_Delete_RSO_Address`');

		DB::unprepared('DROP TRIGGER `tr_Create_Mproduct_Productstock`');
		DB::unprepared('DROP TRIGGER `tr_Delete_Mproduct_Productstock`');

		DB::unprepared('DROP TRIGGER `tr_Update_Mproduct_Order`');
		DB::unprepared('DROP TRIGGER `tr_Update_Mproduct_Order_Before`');

	}

}
