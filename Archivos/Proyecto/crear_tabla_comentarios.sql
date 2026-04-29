-- ============================================================
--  DelicIA's — Crear tabla de comentarios/valoraciones
--  Ejecutar en phpMyAdmin > pestaña "SQL"
--  Selecciona primero tu base de datos en el panel izquierdo
-- ============================================================

CREATE TABLE IF NOT EXISTS `comentarios` (
    `id`         INT          NOT NULL AUTO_INCREMENT,
    `user_id`    INT          NOT NULL,
    `receta`     VARCHAR(120) NOT NULL,
    `estrellas`  TINYINT      NOT NULL,
    `texto`      TEXT         NOT NULL,
    `created_at` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    INDEX `idx_receta` (`receta`),
    INDEX `idx_user`   (`user_id`)

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

-- ============================================================
--  Verificar que se creó correctamente (opcional)
-- ============================================================
DESCRIBE `comentarios`;
