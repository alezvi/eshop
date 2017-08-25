
/**
 * Create orders_products table
 */

CREATE TABLE `orders_products` (
    
    `product_id` INT UNSIGNED NOT NULL,
    `order_id` INT UNSIGNED NOT NULL,
    `quantity` INT NOT NULL DEFAULT 1,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `deleted_at` TIMESTAMP NULL DEFAULT NULL,
    
    PRIMARY KEY(`id`),
    INDEX `fk_product_id_references_product` (`product_id`),
    INDEX `fk_order_id_references_order` (`order_id`)
    
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=MyISAM
AUTO_INCREMENT=1
;
