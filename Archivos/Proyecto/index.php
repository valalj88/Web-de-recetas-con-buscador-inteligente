<?php 
  session_start();
  include 'config.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DelicIA's — Tu chef personal con inteligencia artificial">
    <title>DelicIA's</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/header-modal.css" rel="stylesheet" />
</head>
<body>

    <!-- ═══════════════════════════════════════
         NAVBAR
    ═══════════════════════════════════════ -->
    <nav class="navbar" id="navbar">
        <a class="nav-logo" href="#">
            <img src="assets/img/Logo.png" alt="DelicIA's Logo">
            <span>DelicIA's</span>
        </a>
        <ul class="nav-links">
            <li><a href="#fotos" class="nav-link">Fotos recetas</a></li>
            <li><a href="#valoraciones" class="nav-link">Valoraciones</a></li>
            <li><a href="#Destacados" class="nav-link">Destacados</a></li>
            <li><a href="#favoritos" class="nav-link">Favoritos</a></li>
            <li><a href="#Otros" class="nav-link">Otros</a></li>
        </ul>
        <button class="nav-login-btn" id="openLoginBtn">
            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
        </button>
    </nav>

    <main class="main-content">

        <!-- ═══════════════════════════════════════
             HERO
        ═══════════════════════════════════════ -->
        <header class="hero masthead">
            <div class="hero-left">
                <span class="hero-eyebrow">Tu chef personal con IA</span>
                <h1 class="hero-title">La cocina que<br><em>siempre soñaste</em></h1>
                <p class="hero-desc">Descubre, crea y comparte recetas únicas generadas por inteligencia artificial. Adaptadas a tus gustos, tu nevera y tu tiempo.</p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-num">500+</span>
                        <span class="stat-label">Recetas</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">12K</span>
                        <span class="stat-label">Usuarios</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">4.9★</span>
                        <span class="stat-label">Valoración</span>
                    </div>
                </div>
            </div>
            <div class="hero-right">
                <div class="hero-img-grid">
                    <img class="img-large" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=900&q=80" alt="Receta destacada">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=80" alt="Ensalada">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=600&q=80" alt="Desayuno">
                </div>
                <div class="hero-badge">
                    <span class="hero-badge-icon">🍳</span>
                    <div class="hero-badge-text">
                        <span class="hero-badge-main">Chef DelicIA's</span>
                        <span class="hero-badge-sub">Responde en segundos</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- ═══════════════════════════════════════
             FEATURED STRIP
        ═══════════════════════════════════════ -->
        <div class="featured-strip">
            <div class="strip-scroll">
                <span class="strip-item"><span></span> Pasta italiana</span>
                <span class="strip-item"><span></span> Ensaladas frescas</span>
                <span class="strip-item"><span></span> Carnes a la brasa</span>
                <span class="strip-item"><span></span> Pescados del mar</span>
                <span class="strip-item"><span></span> Postres artesanos</span>
                <span class="strip-item"><span></span> Recetas veganas</span>
                <span class="strip-item"><span></span> Platos de cuchara</span>
                <span class="strip-item"><span></span> Repostería casera</span>
                <!-- duplicado para loop -->
                <span class="strip-item"><span></span> Pasta italiana</span>
                <span class="strip-item"><span></span> Ensaladas frescas</span>
                <span class="strip-item"><span></span> Carnes a la brasa</span>
                <span class="strip-item"><span></span> Pescados del mar</span>
                <span class="strip-item"><span></span> Postres artesanos</span>
                <span class="strip-item"><span></span> Recetas veganas</span>
                <span class="strip-item"><span></span> Platos de cuchara</span>
                <span class="strip-item"><span></span> Repostería casera</span>
            </div>
        </div>

        <!-- ═══════════════════════════════════════
             FEATURES ICONS
        ═══════════════════════════════════════ -->
        <section class="features-section">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16"><path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/></svg>
                    </div>
                    <h3>Tu Chef Personal</h3>
                    <p>La IA que entiende tus antojos y crea recetas únicas para ti.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16"><path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"/></svg>
                    </div>
                    <h3>Sabores que Inspiran</h3>
                    <p>Explora, guarda y comparte tus platos favoritos en segundos.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16"><path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/></svg>
                    </div>
                    <h3>Fácil, Bonita y Práctica</h3>
                    <p>Hecha para que cocinar sea una experiencia deliciosa y sin estrés.</p>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             BARRA BÚSQUEDA CON IA
        ═══════════════════════════════════════ -->
        <section class="search-section">
            <div class="search-inner">
                <div class="section-tag">Inteligencia Artificial</div>
                <h2 class="section-title">Pregunta al <em>Chef DelicIA's</em></h2>
                <p class="search-sub">¿Qué tienes en la nevera? ¿Qué te apetece hoy? Cuéntanoslo.</p>
                <div class="barra-busqueda">
                    <input type="text" id="input-busqueda" placeholder="Ej: tengo pollo, arroz y limón..." autocomplete="off">
                    <button id="btn-preguntar-ia" class="search-btn">
                        <svg viewBox="0 0 24 24" width="18" height="18"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" fill="currentColor"/></svg>
                        Preguntar
                    </button>
                    <div id="search-login-tooltip" class="search-login-tooltip" style="display:none;">
                        <span>🔒 Inicia sesión para usar el chef IA</span>
                        <button class="tooltip-login-btn" id="tooltip-login-btn">Iniciar sesión</button>
                    </div>
                </div>
                <div id="chef-respuesta" class="chef-respuesta" style="display:none;"></div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             SHOWCASE / FOTOS RECETAS
        ═══════════════════════════════════════ -->
        <section class="showcase-section" id="fotos">
            <div class="section-header">
                <div class="section-header-left">
                    <div class="section-tag">Recetas destacadas</div>
                    <h2 class="section-title">Lo mejor de <em>nuestra cocina</em></h2>
                </div>
                <span class="section-count">03</span>
            </div>
            <div class="showcase-list">
                <div class="showcase-item">
                    <div class="showcase-img" style="background-image: url('assets/img/pasta.jpg');"></div>
                    <div class="showcase-body">
                        <span class="showcase-tag">Pasta · Italiana</span>
                        <h3>Espaguetis al Pesto</h3>
                        <p>Los Espagueti Pesto Verde Vivo han sido reconocidos como la receta innovadora del mes. Albahaca fresca, piñones y parmesano.</p>
                        <a href="#" class="showcase-link">Ver receta →</a>
                    </div>
                </div>
                <div class="showcase-item reverse">
                    <div class="showcase-img" style="background-image: url('https://imag.bonviveur.com/arroz-al-horno.webp');"></div>
                    <div class="showcase-body">
                        <span class="showcase-tag">Arroz · Valenciana</span>
                        <h3>Arroz al Horno</h3>
                        <p>El arroz crujiente ha sido elegido como la receta del mes. Cocción perfecta, costrada dorada y sabor auténtico de siempre.</p>
                        <a href="#" class="showcase-link">Ver receta →</a>
                    </div>
                </div>
                <div class="showcase-item">
                    <div class="showcase-img" style="background-image: url('https://lacocinadefrabisa.lavozdegalicia.es/wp-content/uploads/2024/01/croquetas-cocido-3.jpg');"></div>
                    <div class="showcase-body">
                        <span class="showcase-tag">Aperitivo · Clásico</span>
                        <h3>Croquetas de Jamón</h3>
                        <p>Estas croquetas se han convertido en la receta más visitada. Bechamel sedosa, jamón ibérico y rebozado crujiente perfecto.</p>
                        <a href="#" class="showcase-link">Ver receta →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             VALORACIONES + GALERÍA (solo logueados)
        ═══════════════════════════════════════ -->
        <section class="valoraciones-section" id="valoraciones">

            <!-- BLOQUEO no logueados -->
            <div class="valoraciones-lock" id="valoraciones-lock">
                <div class="lock-card">
                    <div class="lock-icon">🔒</div>
                    <h2>Sección exclusiva para miembros</h2>
                    <p>Inicia sesión para ver las valoraciones, leer comentarios y compartir tu opinión sobre nuestras recetas.</p>
                    <button class="lock-btn" id="openLoginBtn-val">
                        <i class="fas fa-sign-in-alt"></i> Iniciar sesión para continuar
                    </button>
                </div>
            </div>

            <!-- CONTENIDO visible logueado -->
            <div class="valoraciones-contenido" id="valoraciones-contenido" style="display:none;">
                <div class="section-header">
                    <div class="section-header-left">
                        <div class="section-tag">Comunidad</div>
                        <h2 class="section-title">Danos tu <em>opinión</em></h2>
                    </div>
                </div>

                <!-- Galería slider -->
                <div id="gallery" class="gallery-wrapper">
                    <div class="gallery-container">
                        <figure class="gallery-item">
                            <img src="assets/img/pasta.jpg" alt="Sinfonía Napolitana">
                            <div class="gallery-info">
                                <h3>Sinfonía Napolitana</h3>
                                <div class="gallery-stars" data-receta="napolitana">
                                    <span class="star" data-val="1">★</span>
                                    <span class="star" data-val="2">★</span>
                                    <span class="star" data-val="3">★</span>
                                    <span class="star" data-val="4">★</span>
                                    <span class="star" data-val="5">★</span>
                                </div>
                                <p class="gallery-quote">"Sencillez elevada a la excelencia..."</p>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <img src="assets/img/canelones.jpg" alt="Tradición Viva">
                            <div class="gallery-info">
                                <h3>Tradición Viva</h3>
                                <div class="gallery-stars" data-receta="canelones">
                                    <span class="star" data-val="1">★</span>
                                    <span class="star" data-val="2">★</span>
                                    <span class="star" data-val="3">★</span>
                                    <span class="star" data-val="4">★</span>
                                    <span class="star" data-val="5">★</span>
                                </div>
                                <p class="gallery-quote">"Textura cremosa y sabor potente..."</p>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <img src="assets/img/Ensalada-Cesar3.jpg" alt="Arte en el Plato">
                            <div class="gallery-info">
                                <h3>Arte en el Plato</h3>
                                <div class="gallery-stars" data-receta="ensalada">
                                    <span class="star" data-val="1">★</span>
                                    <span class="star" data-val="2">★</span>
                                    <span class="star" data-val="3">★</span>
                                    <span class="star" data-val="4">★</span>
                                    <span class="star" data-val="5">★</span>
                                </div>
                                <p class="gallery-quote">"Frescura y elegancia en cada bocado..."</p>
                            </div>
                        </figure>
                    </div>
                    <nav class="gallery-navigation">
                        <button class="nav-button prev-button"><span>&#8249;</span></button>
                        <button class="nav-button next-button"><span>&#8250;</span></button>
                    </nav>
                </div>

                <!-- Formulario de comentarios -->
                <div class="comentarios-wrapper">
                    <h3 class="comentarios-titulo">💬 Deja tu comentario</h3>
                    <div class="comentario-form-card">
                        <div class="form-row-inline">
                            <select id="select-receta-comentario" class="select-receta">
                                <option value="">— Elige una receta —</option>
                                <option value="napolitana">Sinfonía Napolitana</option>
                                <option value="canelones">Tradición Viva (Canelones)</option>
                                <option value="ensalada">Arte en el Plato (Ensalada César)</option>
                            </select>
                            <div class="form-stars-inline" id="form-stars">
                                <span class="fstar" data-val="1">★</span>
                                <span class="fstar" data-val="2">★</span>
                                <span class="fstar" data-val="3">★</span>
                                <span class="fstar" data-val="4">★</span>
                                <span class="fstar" data-val="5">★</span>
                            </div>
                        </div>
                        <textarea id="comentario-texto" class="comentario-textarea" rows="3" placeholder="Escribe tu experiencia con esta receta..."></textarea>
                        <button class="comentario-submit" id="btn-enviar-comentario">
                            <svg viewBox="0 0 24 24" width="16" height="16"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" fill="currentColor"/></svg>
                            Publicar valoración
                        </button>
                        <!-- Feedback inline (éxito / error) -->
                        <div id="comentario-feedback" style="display:none; margin-top:12px;"></div>
                    </div>
                    <!-- Lista de comentarios — se carga dinámicamente desde BD -->
                    <div class="comentarios-lista" id="lista-comentarios">
                        <p class="comentarios-cargando">Cargando valoraciones...</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             SECCIÓN FAVORITOS
        ═══════════════════════════════════════ -->
        <section class="favoritos-section" id="favoritos">
            <div class="section-header" style="padding: 80px 80px 50px;">
                <div class="section-header-left">
                    <div class="section-tag">Mis recetas</div>
                    <h2 class="section-title">Mis <em>Favoritos</em></h2>
                </div>
            </div>

            <!-- No logueado -->
            <div class="favoritos-lock" id="favoritos-lock">
                <div class="lock-card">
                    <div class="lock-icon">🔒</div>
                    <h2>Guarda tus recetas favoritas</h2>
                    <p>Inicia sesión para guardar recetas de los platos destacados y tenerlas siempre a mano.</p>
                    <button class="lock-btn" id="openLoginBtn-fav">
                        <i class="fas fa-sign-in-alt"></i> Iniciar sesión para continuar
                    </button>
                </div>
            </div>

            <!-- Logueado -->
            <div class="favoritos-contenido" id="favoritos-contenido" style="display:none;">
                <div class="favoritos-grid" id="favoritos-grid"></div>
                <p class="favoritos-vacio" id="favoritos-vacio" style="display:none;">
                    ❤️ Aún no tienes recetas favoritas. ¡Dale al corazón en los platos destacados!
                </p>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             HIGHLIGHT BAND (CTA)
        ═══════════════════════════════════════ -->
        <div class="highlight-band">
            <div class="highlight-band-content">
                <p class="highlight-band-eyebrow">Chef con IA</p>
                <h2 class="highlight-band-title">¿No sabes qué <em>cocinar hoy?</em></h2>
                <p class="highlight-band-desc">Dinos qué tienes en casa y nuestro chef IA crea una receta personalizada para ti en segundos. Sin complicaciones.</p>
            </div>
            <div class="highlight-band-cta">
                <a href="thermomix.html" class="cta-main">Ver recetas con Thermomix</a>
                <span class="cta-sub">Más de 500 recetas disponibles</span>
            </div>
        </div>

        <!-- ═══════════════════════════════════════
             FILTRO DE RECETAS POR CATEGORÍA
        ═══════════════════════════════════════ -->
        <section class="filtro-section" id="Destacados">
            <div class="section-header" style="padding: 80px 80px 30px;">
                <div class="section-header-left">
                    <div class="section-tag">Explorar</div>
                    <h2 class="section-title">Platos <em>Destacados</em></h2>
                </div>
            </div>
            <div class="filtro-categorias-bar" style="padding: 0 80px 30px;">
                <button class="filtro-cat activo" data-cat="pasta">🍝 Pasta</button>
                <button class="filtro-cat" data-cat="carnes">🥩 Carnes</button>
                <button class="filtro-cat" data-cat="pescado">🐟 Pescado</button>
                <button class="filtro-cat" data-cat="ensaladas">🥗 Ensaladas</button>
                <button class="filtro-cat" data-cat="postres">🍰 Postres</button>
            </div>
            <div class="filtro-recetas-grid" id="filtro-recetas-grid" style="padding: 0 80px 80px;"></div>
        </section>

        <!-- Modal detalle receta -->
        <div id="modal-detalle" class="modal-detalle-overlay" style="display:none;">
            <div class="modal-detalle-inner">
                <button class="modal-detalle-close" onclick="document.getElementById('modal-detalle').style.display='none'; document.body.style.overflow=''">&times;</button>
                <img id="md-img" src="" alt="" class="md-img" style="display:none;">
                <div class="md-body">
                    <div class="md-tags">
                        <span id="md-cat" class="md-tag-cat"></span>
                        <span id="md-dif" class="md-tag-dif"></span>
                    </div>
                    <h2 id="md-nombre" class="md-nombre"></h2>
                    <p id="md-desc" class="md-desc"></p>
                    <div class="md-stats">
                        <div class="md-stat"><svg viewBox="0 0 24 24" fill="none" stroke="#f5c518" stroke-width="2.2" width="18" height="18"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><strong id="md-tiempo"></strong></div>
                        <div class="md-stat"><svg viewBox="0 0 24 24" fill="none" stroke="#f5c518" stroke-width="2.2" width="18" height="18"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg><strong id="md-raciones"></strong></div>
                        <div class="md-stat"><svg viewBox="0 0 24 24" fill="none" stroke="#f5c518" stroke-width="2.2" width="18" height="18"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/></svg><strong id="md-calorias"></strong></div>
                    </div>
                    <div class="md-grid">
                        <div>
                            <h3 class="md-subtitle">Ingredientes</h3>
                            <ul id="md-ingredientes" class="md-ingredientes"></ul>
                        </div>
                        <div>
                            <h3 class="md-subtitle">Preparación</h3>
                            <ol id="md-pasos" class="md-pasos"></ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══════════════════════════════════════
             PLATOS DESTACADOS (grid dinámico)
        ═══════════════════════════════════════ -->
        <div class="platos-grid" id="gridDestacados"></div>
        <div id="modalDestacados" class="modal-receta">
            <div class="modal-content-receta">
                <span class="close-modal" onclick="cerrarModalDestacados()">&times;</span>
                <div class="receta-header">
                    <img id="destImg" src="" alt="">
                    <div>
                        <h2 id="destTitulo" style="margin-top:0; color: black;"></h2>
                        <p id="destTiempo" style="font-weight:bold; color: #555;"></p>
                        <p id="destDesc"></p>
                    </div>
                </div>
                <div class="receta-body-grid">
                    <div><h3>INGREDIENTES</h3><ul id="destIngredientes"></ul></div>
                    <div><h3>PASOS</h3><ol id="destPasos"></ol></div>
                </div>
            </div>
        </div>

        <!-- ═══════════════════════════════════════
             CATEGORÍAS
        ═══════════════════════════════════════ -->
        <section class="categorias-section" id="Otros">
            <div class="section-header" style="padding: 80px 80px 50px;">
                <div class="section-header-left">
                    <div class="section-tag">Navegar</div>
                    <h2 class="section-title">Todas las <em>categorías</em></h2>
                </div>
            </div>
            <div class="grid-categorias">
                <a href="thermomix.html" class="categoria-btn">🤖 Recetas con Thermomix</a>
                <a href="postres.html" class="categoria-btn">🍰 Postres</a>
                <a href="saludables.html" class="categoria-btn">🥦 Más saludables</a>
                <a href="plato_del_mes.html" class="categoria-btn">⭐ Plato del mes</a>
                <a href="cremas.html" class="categoria-btn">🫕 Recetas de cremas</a>
                <a href="vegano.html" class="categoria-btn">🌱 Vegano</a>
                <a href="huevos.html" class="categoria-btn">🥚 Huevos</a>
                <a href="salud-integral.html" class="categoria-btn">🌾 Recetas integrales</a>
                <a href="restaurantes.html" class="categoria-btn">🍽️ Restaurantes</a>
                <a href="horno.html" class="categoria-btn">🔥 Horno</a>
                <a href="cuchara.html" class="categoria-btn">🥣 Platos de cuchara</a>
                <a href="aperitivos.html" class="categoria-btn">🫒 Aperitivos</a>
            </div>
        </section>

    </main>

    <!-- ═══════════════════════════════════════
         MODAL LOGIN / REGISTRO
    ═══════════════════════════════════════ -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-container">
            <div class="modal-header">
                <div class="modal-tabs">
                    <button class="tab active" id="loginTab">Iniciar Sesión</button>
                    <button class="tab" id="registerTab">Registrarse</button>
                </div>
                <button class="close-btn" id="closeModalBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-content" id="loginContent">
                <form class="modal-form" id="loginForm">
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                        <input type="email" id="email" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
                        <input type="password" id="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Recordarme</label>
                        </div>
                        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="submit-btn">Iniciar Sesión</button>
                    <div class="divider"><span>O continuar con</span></div>
                    <div class="social-login">
                        <button type="button" class="social-btn google"><i class="fab fa-google"></i> Google</button>
                        <button type="button" class="social-btn github"><i class="fab fa-github"></i> GitHub</button>
                    </div>
                </form>
            </div>
            <div class="modal-content hidden" id="registerContent">
                <form class="modal-form" id="registerForm">
                    <div class="form-group">
                        <label for="regName"><i class="fas fa-user"></i> Nombre Completo</label>
                        <input type="text" id="regName" placeholder="Tu nombre y apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="regEmail"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                        <input type="email" id="regEmail" placeholder="tucorreo@dominio.com" required>
                    </div>
                    <div class="form-group">
                        <label for="regPassword"><i class="fas fa-lock"></i> Contraseña</label>
                        <input type="password" id="regPassword" placeholder="mín. 8 caracteres" required>
                    </div>
                    <div class="form-group">
                        <label for="regConfirmPassword"><i class="fas fa-lock"></i> Confirmar Contraseña</label>
                        <input type="password" id="regConfirmPassword" placeholder="Repite tu contraseña" required>
                    </div>
                    <div class="terms">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">Acepto los <a href="#">términos y condiciones</a></label>
                    </div>
                    <button type="submit" class="submit-btn">Crear Cuenta</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/header-modal.js"></script>
    <script src="js/scripts.js"></script>
    <!-- <script src="js/snap-scroll.js"></script> -->

</body>
</html>
