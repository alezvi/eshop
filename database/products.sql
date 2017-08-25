
/**
 * Create products table
 */

CREATE TABLE `products` (
    
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `brand` VARCHAR(255) NOT NULL,
    `price` DOUBLE(7,2) NOT NULL DEFAULT '0',
    `stock` INT NOT NULL DEFAULT '0',
    `category_id` INT NOT NULL DEFAULT '0',
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `deleted_at` TIMESTAMP NULL DEFAULT NULL,
    
    PRIMARY KEY(`id`),
    INDEX `fk_product_belongs_to_category` (`category_id`)
    
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=MyISAM
AUTO_INCREMENT=1
;
