-- ═══════════════════════════════════════════════════════════════
--  DelicIA's — Tabla favoritos (versión corregida)
--  Error anterior: INT UNSIGNED no coincidía con usuarios.id
--  Esta versión usa INT normal, compatible con la mayoría de tablas
-- ═══════════════════════════════════════════════════════════════

CREATE TABLE IF NOT EXISTS favoritos (
    id              INT          NOT NULL AUTO_INCREMENT,
    usuario_id      INT          NOT NULL,
    receta_nombre   VARCHAR(150) NOT NULL,
    receta_tiempo   VARCHAR(30)  NOT NULL DEFAULT '',
    receta_img      VARCHAR(500) NOT NULL DEFAULT '',
    receta_idx      TINYINT      NOT NULL DEFAULT 0,
    creado_en       TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (id),
    UNIQUE KEY uq_usuario_receta (usuario_id, receta_nombre),
    KEY idx_usuario (usuario_id),

    CONSTRAINT fk_fav_usuario
        FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
