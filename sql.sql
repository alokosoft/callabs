ALTER TABLE `packages` ADD `no_of_tests` VARCHAR(50) NULL AFTER `package_name`;


ALTER TABLE `packages` CHANGE `package_desc` `package_desc` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;

ALTER TABLE `packages` ADD `price` VARCHAR(50) NULL AFTER `parent_test_name`;