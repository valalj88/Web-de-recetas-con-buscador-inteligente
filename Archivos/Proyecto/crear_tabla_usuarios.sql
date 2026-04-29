-- ============================================================
-- SQL para crear la tabla de usuarios en tu base de datos
-- Ejecuta esto UNA VEZ en phpMyAdmin o tu cliente MySQL
-- ============================================================

CREATE TABLE IF NOT EXISTS `usuarios` (
    `id`         INT(11)      NOT NULL AUTO_INCREMENT,
    `nombre`     VARCHAR(120) NOT NULL,
    `email`      VARCHAR(180) NOT NULL UNIQUE,
    `password`   VARCHAR(255) NOT NULL,          -- hash bcrypt
    `created_at` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
