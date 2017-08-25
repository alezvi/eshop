
/**
 * Create the orders table
 */

CREATE TABLE `orders` (
	`id` INT(10) UNSIGNED NOT NULL,
	`customer_id` INT(10) UNSIGNED NULL DEFAULT NULL,
	`subtotal` INT(11) NULL DEFAULT NULL,
	`payment_stauts` ENUM('pending','rejected','accepted') NULL DEFAULT 'pending',
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	`deleted_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	INDEX `customer_id` (`customer_id`)
)
ENGINE=InnoDB
;
