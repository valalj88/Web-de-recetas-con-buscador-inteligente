<div align="center">

<img src="Logo.png" alt="Example Image" width="300" height="500">

![Banner](https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/ImagenPanoramica.png)

</div>

---

<details>
  <summary>Introducción</summary>
	<br>
DelicIA’s es una plataforma de recetas de cocina que integra inteligencia artificial. Los usuarios ingresan ingredientes o preferencias (por ejemplo, “pollo y brócoli, cena ligera”) y la IA genera una receta personalizada con pasos, tiempos y consejos.

Nuestro objetivo en este proyecto es desarrollar nuestros conocimientos sobre la IA y las WEBs ya que nos da curiosidad porque las usamos casi diariamente. También nos hace ilusión saber que somos capaces de hacer algo así y si en un futuro puede ser útil para la gente mejor, en un principio nos lo tomamos como un proyecto para estudiar pero estaría bien ver hasta dónde podemos llegar desarrollando nuestra idea.
</details>

---

<details>
  <summary>💡Briefing de ideas</summary>
	<br>
  Principalmente nosotros teníamos un par de ideas, entre ellas estaba hacer una página web que sirviera para estudiar los diferentes tipos de carnets de conducir pero hablando con los profesores y valorando nuestras ideas vimos que teníamos un alto porcentaje de que a mediados del proyecto este se nos pudiera cancelar por culpa de permisos que teniamos que solicitar de la DGT cosa que nosotros no podíamos hacer nada, entonces fuimos a algo más difícil pero que nos gusta más ya que la idea es más innovadora, queríamos hacer una IA desde cero y entrenarla para hacer recetas, pero al final hemos decidido coger una Ia ya hecha y entrenarla porque hacerla desde cero se nos complica y no tenemos los conocimientos suficientes.

Para poder desarrollar nuestro proyecto principalmente vamos a necesitar una plantilla de una IA para poderla entrenar para lo que querramos que responda y con que lenguaje y también una plantilla de una página web, cosa que ambas ya las tenemos a la mano, la plantilla de la página web estamos decidiendo cuál nos gusta más y nos va ser más útil. También necesitamos organizar todo de una manera adecuada para no liarnos, esto lo conseguiremos haciendo una bibliografía, desarrollar bien el trello con la información bien puesta.

- Desarrollar una web funcional y atractiva con una interfaz moderna y adaptable.
  
- Implementar un sistema de registro y autenticación de usuarios

- Permitir la publicación, valoración y almacenamiento de recetas

- Crear una sección de “favoritos” y otra de “recetas destacadas”.

- Integrar una IA funcional o simulada que interactúe con el usuario y recomiende recetas.

- Diseñar una arquitectura cliente-servidor estable con base de datos relacional.

- Documentar el proyecto en GitHub.   

</details>

---

<details>
  <summary>🧱 Arquitectura del software</summary>
	<br>
<details>
	
<summary>Diagrama De Gantt</summary>
<br>
Un diseño de Gantt es una tabla o gráfico que muestra las tareas de un proyecto colocadas en una línea de tiempo, indicando cuándo empiezan, cuándo terminan y cuánto duran. Es útil para un proyecto porque permite ver de forma clara la planificación, organizar el trabajo por fases, detectar retrasos y controlar el avance. Gracias al diagrama de Gantt, es más fácil gestionar el proyecto y asegurarse de que todo se haga a tiempo.
<br>

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/DiagramaDeGantt.png" alt="Página Tareas" width="1300">	

<br>


[Diagrama de Gantt DelicIA's](https://docs.google.com/spreadsheets/d/1v8SxtipMUR5VIm4CUHCaQV0vc51-1jquD_x6YIupjv8/edit?usp=sharing)
	
</details>
<br>
<details>
<summary>Funcionalidades A Considerar</summary>
<br>
<table>
  <tr>
    <th style="width: 200px;">ID</th>
    <th style="width: 100px;">Prioridad</th>
	<th style="width: 200px;">Objetivo</th>
    <th style="width: 100px;">FUNCIONALIDAD</th>
	<th style="width: 100px;">ESTADO</th>
  </tr>
  <tr>
    <td>ID0</td>
    <td>Alta</td>
	<td>Login/Register</td>
    <td>Permite crear una cuenta, iniciar sesión y guardar datos del usuario.</td>
    <td>Pendiente</td>
  </tr>
  <tr>
    <td>ID1</td>
    <td>Alta</td>
	<td>API Visualizar Recetas</td>
    <td>Muestra recetas con imagen, nombre, valoración y categoría.</td>
    <td>Pendiente</td>
  </tr>
  <tr>
    <td>ID2</td>
    <td>Media</td>
	<td>Favoritos</td>
	<td>Permite marcar recetas como favoritas y acceder rápidamente a ellas.</td>
    <td>Pendiente</td>
  <tr>
    <td>ID3</td>
    <td>Alta</td>
	<td>Valoraciones</td>
    <td>Sistema para puntuar recetas y dejar reseñas visibles a otros usuarios.</td>
    <td>Pendiente</td>
  </tr>
  <tr>
    <td>ID4</td>
    <td>Media</td>
	<td>Recetas Destacadas</td>
    <td>Muestra recetas más populares, fáciles o mejor valoradas con breve descripción.</td>
    <td>Pendiente</td>
  </tr>
  <tr>
    <td>ID5</td>
    <td>Alta</td>
	<td>Inteligencia Artificial</td>
    <td>Asistente virtual que recomienda recetas según gustos o ingredientes disponibles.</td>
    <td>Pendiente</td>
</table>
</details>
<br>
<details>
	<summary>Estudio De La Base De Datos</summary>	
	<br>
    <br>
	
**¿Qué funcionalidades ofrecerá a los usuarios?**
	
- Los usuarios podrán acceder al registro o inicio de sesión.
- Búsqueda de recetas generadas por una IA.
- Almacenar recetas favoritas y las que te gusten.
- Poner reseñas de las recetas, sugerir ingredientes, (vegano, sin gluten, etc.). 
- Opción de generar imágenes del plato (IA de imágenes).
- Búsqueda de recetas por filtros.
  <br>
  <br>
  
**¿Qué tema de información almacena?**
	
- Los datos de cada persona registrada.
- Información de cada receta generada.
- Lista de ingredientes. 
- Opiniones de los usuarios.
- Puntuaciones.
- Relación usuario receta.
  <br>
  <br>

**¿Por qué necesitas guardarla en la base de datos?**

- Control de acceso.
- Personalización de recetas.
- Historial de la web
- Guardar las recetas para consultas posteriores y permitir que otros usuarios las vean.
- Estandarizar ingredientes para búsquedas y filtrados.
- Permitir feedback y participación en cada receta.
- Calificar recetas y mostrar ranking.
- Que cada usuario pueda marcar recetas como favoritas.

<br>

### DATOS QUE ALMACENA CADA ENTIDAD

<br>

**Tabla: Usuarios**

Esta tabla “Usuarios” almacena la información básica de los usuarios de un sistema, donde cada usuario tiene un ID único, nombre, email único, contraseña en formato hash y la fecha en que se registró.

<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Usuario</td>
    <td>INT,PK,AUTO_INCREMENT</td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>VARCHAR 100</td>
  </tr>
  <tr>
	<td>Email</td>
	<td>VARCHAR 150, ÚNICO</td>
  </tr>
  <tr>
	<td>Contraseña Hash</td>
	<td>VARCHAR 255</td>
  </tr>
  <tr>
	<td>Fecha De Registro</td>
	<td>DATETIME</td>
</table>
<br>
<br>

**Tabla: Recetas**
<br>

Esta Tabla guarda las recetas con título, descripción, pasos, imagen opcional, usuario que la creó y fecha de creación.
<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Receta</td>
    <td>INT,PK</td>
  </tr>
  <tr>
    <td>Título</td>
    <td>VARCHAR 150</td>
  </tr>
  <tr>
	<td>Descripción</td>
	<td>TEXT</td>
  </tr>
  <tr>
	<td>Pasos</td>
	<td>TEXT</td>
  </tr>
  <tr>
	<td>Imagen URL</td>
	<td>VARCHAR 255, opcional si se genera una imagen.</td>
  </tr>
  <tr>
	<td>Id Usuario</td>
	<td>INT, FK</td>
  </tr>
  <tr>
	<td>Fecha De Creación</td>
	<td>DATETIME</td>
</table>
<br>
<br>

**Tabla: Ingredientes**

Contiene los ingredientes disponibles, con nombre y tipo.

<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Ingrediente</td>
    <td>INT,PK</td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>VARCHAR 100</td>
  </tr>
  <tr>
	<td>Tipo</td>
	<td>VARCHAR 50</td>
</table>
<br>
<br>

**Tabla: Receta_Ingrediente**

Relaciona recetas con sus ingredientes y la cantidad necesaria de cada uno.

<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Receta</td>
    <td>INT,FK</td>
  </tr>
  <tr>
    <td>ID Ingrediente</td>
    <td>INT, FK</td>
  </tr>
  <tr>
	<td>Cantidad</td>
	<td>VARCHAR 50   EJ: "2 cucharadas"</td>
</table>


**Comentarios**

<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Comentario</td>
    <td>INT,PK</td>
  </tr>
  <tr>
    <td>ID receta</td>
    <td>INT, FK</td>
  </tr>
  <tr>
	<td>ID Usuario</td>
	<td>INT, FK</td>
  </tr>
  <tr>
	<td>Texto</td>
	<td>TEXT</td>
  </tr>
  <tr>
	<td>Fecha</td></td>
	<td>DATETIME</td>
</table>


**Tabla: Valoraciones**

<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Valoración</td>
    <td>INT,PK</td>
  </tr>
  <tr>
    <td>ID receta</td>
    <td>INT, FK</td>
  </tr>
  <tr>
	<td>ID Usuario</td>
	<td>INT, FK</td>
  </tr>
  <tr>
	<td>Puntuación</td>
	<td>INT(1)</td>
</table>

**FAVORITOS**
<table>
  <tr>
    <th style="width: 200px;">ATRIBUTOS</th>
    <th style="width: 100px;">TIPOS DE DATOS</th>
  </tr>
  <tr>
    <td>ID Favorito</td>
    <td>INT,PK</td>
  </tr>
  <tr>
    <td>ID receta</td>
    <td>INT, FK</td>
  </tr>
  <tr>
	<td>ID Usuario</td>
	<td>INT, FK</td>
  </tr>
  <tr>
	<td>Texto</td>
	<td>TEXT</td>
  </tr>
  <tr>
	<td>Fecha Guardado</td></td>
	<td>DATETIME</td>
</table>


### 4. Relaciones entre las entidades
**¿Cómo se relacionan unas entidades con otras?**

Usuario – Receta: 
Un usuario puede crear muchas recetas, pero cada receta pertenece a un solo usuario.


Receta – Ingrediente:
 Una receta tiene muchos ingredientes y un ingrediente puede usarse en muchas recetas.


Receta – Comentarios: 
Cada receta puede tener muchos comentarios, pero cada comentario está asociado a una sola receta.


Receta – Valoraciones : 
Cada receta puede recibir muchas valoraciones, pero cada valoración pertenece a una sola receta.


Favoritos: Recetas_fav_Usuarios: 
Un usuario puede tener muchas recetas favoritas, y una receta puede ser favorita de muchos usuarios.


### 5. Ejemplo de datos

**USUARIO**

<table>
  <tr>
    <th style="width: 200px;">ID_USUARIO</th>
    <th style="width: 100px;">NOMBRE</th>
    <th style="width: 100px;">GMAIL</th>
    <th style="width: 100px;">REGISTRO</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Hector Abad</td>
    <td>Hector555@gmail.com</td>
    <td>30-09-2025</td>
</table>

**RECETAS**
<table>
  <tr>
    <th style="width: 200px;">ID_RECETA</th>
    <th style="width: 100px;">NOMBRE RECETA</th>
    <th style="width: 100px;">DESCRIPCIÓN</th>
    <th style="width: 100px;">PASOS</th>
    <th style="width: 100px;">ID_USUARIO</th>
	<th style="width: 100px;">FECHA CREACIÓN</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Macarrones</td>
    <td>Cocina Rápida</td>
    <td>1. Hervir los macarrones, 2. escurrirlos</td>
	<td>1</td>
	<td>30-09-2025</td>
</table>

**INGREDIENTES**
<table>
  <tr>
    <th style="width: 200px;">ID_INGREDIENTE</th>
    <th style="width: 100px;">NOMBRE</th>
    <th style="width: 100px;">TIPO</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Macarrones</td>
    <td>Pasta</td>
  </tr>
  <tr>
    <td>2</td>
	<td>Tomate</td>
	<td>Salsa</td>
</table>

**CANTIDAD**
<table>
  <tr>
    <th style="width: 200px;">ID_RECETA</th>
    <th style="width: 100px;">ID_INGREDIENTE</th>
    <th style="width: 100px;">CANTIDAD</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1</td>
    <td>200G</td>
  </tr>
  <tr>
    <td>1</td>
	<td>2</td>
	<td>10G</td>
</table>

**COMENTARIOS**
<table>
  <tr>
    <th style="width: 200px;">ID_COMENTARIO</th>
    <th style="width: 100px;">ID_RECETA</th>
    <th style="width: 100px;">ID_USUARIO</th>
	<th style="width: 100px;">TEXTO</th>
    <th style="width: 100px;">FECHA</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1</td>
    <td>1</td>
	<td>Rico Y Rápido</td>
	<td>30-09-2025</td>
</table>

**VALORACIONES**
<table>
  <tr>
    <th style="width: 200px;">ID_VALORACIÓN</th>
    <th style="width: 100px;">ID_RECETA</th>
    <th style="width: 100px;">ID_USUARIO</th>
	<th style="width: 100px;">PUNTUACIÓN</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1</td>
    <td>1</td>
	<td>5</td>
</table>


### 6. Reflexiones sobre la base de datos

**Decisión sobre recetas IA:**
 Guardar la receta generada para no perder resultados buenos, en vez de generarla en vivo cada vez, asi a la API le costara menos procesar información y crear una receta solicitada por un usuario.
 Poniendo un ejemplo digamos que ya hay una receta de macarrones a la carbonara, un cliente genera con el asistente de DelicIA's otros macarrones a la carbonara y ahora hay dos platos de macarrones a la carbonara procesados solo porque la descripción es diferente una de la otra. Intentaremos evitar este duplicado de datos mediante las peticiones del usuario.

  
</details>
</details>

---

<details>
  <summary>🔧 Tecnologías a utilizar</summary>
<br>
	
<details>
  <summary> Servicios y tecnologias implementadas</summary>

<br>

<table>
  <tr>
    <th>Tecnología</th>
    <th>Función en el Proyecto</th>
    <th>Requisitos Mínimos (Aproximados)</th>
  </tr>

  <tr>
    <td>pfSense</td>
    <td>
      Funciona como el firewall y router principal, controlando el tráfico que entra y sale de la red.
      Proporciona protección perimetral, gestiona el NAT (Traducción de Direcciones de Red)
      y puede ofrecer VPNs.
    </td>
    <td>
      CPU: Procesador compatible de 64 bits (x86-64). <br>
      RAM: 1 GB o más (se recomienda 2 GB para mejor rendimiento). <br>
      Almacenamiento: 8 GB de disco duro/SSD. <br>
      Red: Mínimo dos tarjetas de red (WAN y LAN).
    </td>
  </tr>

  <tr>
    <td>Cloudflare</td>
    <td>
      Se infiere que gestiona el DNS externo y posiblemente la CDN (Red de Distribución
      de Contenidos) y la protección contra ataques DDoS para el dominio
      delicias.tallerdekirby.es.
    </td>
    <td>
      No tiene requisitos de hardware propios, solo requiere el registro del dominio
      en su plataforma y la configuración de los Nameservers.
    </td>
  </tr>

  <tr>
    <td>DHCP</td>
    <td>
      Protocolo de configuración dinámica de hosts. Se encarga de asignar direcciones
      IP y otros parámetros de red (máscara, puerta de enlace, DNS) automáticamente
      a los dispositivos de la red.
    </td>
    <td>
      Normalmente, se implementa como un servicio dentro de pfSense o en un
      servidor ligero dedicado. Los requisitos son mínimos (baja CPU y RAM).
    </td>
  </tr>

  <tr>
    <td>Apache HTTP Server</td>
    <td>
      Es el servidor web que atiende las peticiones del navegador, procesa las
      solicitudes HTTP y sirve el contenido de la página web al cliente (navegador).
    </td>
    <td>
      CPU/RAM: Mínimos para la instalación, pero dependen de la carga esperada
      (usuarios concurrentes, complejidad del sitio). <br>
      Se requieren unos 50 MB de espacio para la instalación base.
    </td>
  </tr>

  <tr>
    <td>PHP</td>
    <td>
      Lenguaje de programación de scripting del lado del servidor utilizado para
      generar contenido web dinámico. Esencial para la lógica del sitio web.
    </td>
    <td>
      Funciona como un módulo o FPM de Apache/Nginx. <br>
      Los requisitos de hardware son bajos, pero aumentan según la complejidad del
      código y el número de solicitudes concurrentes.
    </td>
  </tr>

  <tr>
    <td>CSS</td>
    <td>
      Lenguaje de Hojas de Estilo en Cascada que define la presentación visual
      del sitio web (diseño, colores, fuentes).
    </td>
    <td>
      No tiene requisitos de servidor, ya que son archivos servidos
      directamente por Apache.
    </td>
  </tr>

  <tr>
    <td>HTML5</td>
    <td>
      Lenguaje de Marcado de Hipertexto, la estructura fundamental del contenido
      del sitio web (texto, imágenes, enlaces).
    </td>
    <td>
      No tiene requisitos de servidor, ya que son archivos servidos
      directamente por Apache.
    </td>
  </tr>

  <tr>
    <td>MySQL (o MariaDB)</td>
    <td>
      Sistema de Gestión de Bases de Datos Relacionales (SGBDR).
      Almacena todos los datos dinámicos del sitio web (usuarios,
      contenido, pedidos, etc.).
    </td>
    <td>
      RAM: Mínimo 512 MB, se recomienda 1 GB o más. <br>
      Almacenamiento: Mínimo 500 MB para la instalación base,
      más el espacio necesario para los datos.
    </td>
  </tr>

  <tr>
    <td>PhpMyAdmin</td>
    <td>
      Herramienta de gestión de bases de datos basada en web para
      MySQL/MariaDB. Permite a los administradores interactuar con la
      base de datos de forma gráfica.
    </td>
    <td>
      Funciona como una aplicación PHP, con requisitos de hosting
      muy bajos. Depende de PHP y Apache/Nginx.
    </td>
  </tr>

  <tr>
    <td>TrueNAS</td>
    <td>
      Sistema operativo Network Attached Storage (NAS) para almacenamiento
      centralizado de datos. En este esquema, guarda la información en un
      disco duro (HDD) externo y puede proveer copias de seguridad,
      almacenamiento compartido y servicios de ficheros.
    </td>
    <td>
      CPU: Procesador de 64 bits. <br>
      RAM: 8 GB (fundamental para ZFS). <br>
      Almacenamiento: 8 GB de dispositivo de arranque + al menos
      1 disco adicional para datos.
    </td>
  </tr>

  <tr>
    <td>HDD (Disco Duro)</td>
    <td>
      Unidad física de almacenamiento de datos conectada a TrueNAS,
      donde se guarda la información a largo plazo.
    </td>
    <td>
      Capacidad determinada por las necesidades del proyecto.
    </td>
  </tr>

  <tr>
    <td>Pi-hole</td>
    <td>
      Actúa como un servidor DNS de la red local con capacidad de
      bloqueo de publicidad y rastreadores a nivel de red,
      mejorando el rendimiento y la privacidad. Se ejecuta
      sobre un dispositivo Raspberry Pi.
    </td>
    <td>
      RAM: 512 MB. <br>
      Almacenamiento: 2 GB de espacio libre en la tarjeta SD.
    </td>
  </tr>

  <tr>
    <td>DNS (General)</td>
    <td>
      Protocolo de resolución de nombres de dominio. Convierte
      nombres de dominio (como delicias.tallerdekirby.es)
      en direcciones IP para que los dispositivos puedan comunicarse.
    </td>
    <td>
      En este esquema, es manejado por Cloudflare (externo)
      y Pi-hole (interno), con requisitos mínimos si se ejecuta
      en hardware dedicado.
    </td>
  </tr>

</table>

</details>

<details>
	<summary>Tecnologias, puertos y apps a utilizar</summary>
	<br>
	
<table>
  <tr>
    <th style="width: 200px;">Componente del sistema</th>
    <th style="width: 100px;">Tecnología / Framework</th>
	<th style="width: 200px;">Versión</th>
    <th style="width: 100px;">Puerto</th>
	<th style="width: 100px;">Descripción de uso o requisitos</th>
  </tr>
  <tr>
    <td>Frontend (Interfaz de usuario)</td>
    <td>HTML5 + CSS3</td>
	<td>-</td>
    <td>-</td>
    <td>Construye la interfaz visual del sitio web. Permite mostrar recetas, realizar búsquedas, filtrar por ingredientes y visualizar resultados generados por la IA.</td>
  </tr>
  <tr>
    <td>Backend (Lógica de negocio)</td>
    <td>PHP</td>
	<td>8.4</td>
    <td>-</td>
    <td>Procesa formularios, gestiona usuarios, autentificación, conexión a la base de datos y llamadas a la IA. Implementa la lógica REST del proyecto.</td>
  </tr>
  <tr>
    <td>Servidor Web</td>
    <td>Apache</td>
	<td>2.4.65</td>
	<td>80 / 443</td>
    <td>Servidor HTTP/HTTPS que atiende las peticiones del cliente. Ejecuta PHP y sirve los recursos del frontend.</td>
  </tr>
  <tr>
    <td>Base de Datos</td>
    <td>MySQL</td>
	<td>8.4</td>
    <td>3306</td>
    <td>Gestiona la información del sistema: usuarios, contraseñas cifradas, recetas, valoraciones, ingredientes y datos relacionales.</td>
  </tr>
   <tr>
    <td>Herramienta de gestión BD</td>
    <td>phpMyAdmin</td>
	<td>5.2.3</td>
    <td>80 / 443</td>
    <td>Interfaz web para administrar MySQL: creación de tablas, carga de datos, consultas SQL, permisos y mantenimiento.</td>
  </tr>
  <tr>
    <td>Servicios de APIs</td>
    <td>https://www.mrcook.app/es/business/api</td>
	<td>-</td>
	<td>-</td>
    <td>API externa REST utilizada para funcionalidades avanzadas como recomendación o análisis automático.</td>
   </tr>
   <tr>
    <td>IA (motor de recomendaciones)</td>
    <td>Python + FastAPI + modelo GPT</td>
	<td>Python 3.12</td>
    <td>8000</td>
    <td>Microservicio de IA que recibe la consulta del usuario y genera respuestas o recetas personalizadas. FastAPI gestiona el endpoint.</td>
   </tr>
   <tr>
    <td>Dominio</td>
    <td>deliciastallerdekirby.es</td>
	<td>-</td>
    <td>-</td>
    <td>Dominio principal del sitio. Se configurará con certificado SSL (Let’s Encrypt) para navegación segura HTTPS.</td>
  </tr>
  <tr>
    <td>Sistema Operativo del Servidor</td>
    <td>Ubuntu Server LTS</td>
	<td>24.04 LTS</td>
	<td>-</td>
    <td>SO estable y muy usado en entornos de producción. Optmizado para servidores web, bases de datos y microservicios.</td>
   </tr>
   <tr>
    <td>Hardware del Servidor (VPS)</td>
    <td>DigitalOcean / AWS EC2</td>
	<td>-</td>
    <td>-</td>
    <td>Configuración recomendada: 4 vCPU / 8 GB RAM / 100 GB SSD / 1 Gbps. Suficiente para manejar tráfico medio, IA y BD.</td>
   </tr>
</table>

</details>
</details>

---

<details>
  <summary>🌐 Red</summary>
<br>
	
# Diagrama De La Red

---

El diagrama representamos la **arquitectura de red e infraestructura del proyecto web** con el dominio **delicias.tallerdekirby.es**. En él se encuentran los diferentes servicios, servidores y tecnologías que permiten que nuestra página web funcione, desde el acceso del usuario en Internet hasta el almacenamiento de los datos.

---

# 1. Acceso al dominio y gestión externa

Nuestro punto de entrada al sistema es el **dominio web delicias.tallerdekirby.es**.

Cuando un usuario introduzca este dominio en su navegador pasa lo siguiente:

1.1 El navegador consulta el **DNS público gestionado por Cloudflare**.

1.2 Cloudflare traduce el nombre de dominio a la **dirección IP pública del servidor**.

1.3 Además, Cloudflare puede proporcionar:

   - **Protección contra ataques DDoS**
   - **CDN para optimizar la carga**
   - **Gestión segura del tráfico HTTPS**

Una vez resuelta la dirección IP, el tráfico se dirige hacia la red del servidor.

---

# 2. Firewall y control de red (pfSense)

Antes de llegar a los servidores internos, el tráfico pasa por el **pfSense** que se encarga de:

- Filtrar el tráfico entrante y saliente.
- Permitir solo conexiones necesarias (por ejemplo HTTP y HTTPS).
- Proteger la red interna de accesos no autorizados.

De esta manera, ningún servidor interno queda expuesto directamente a Internet.

---

# 3. Servicio de red interno (DHCP)

Dentro de la red local, **pfSense también gestiona el servicio DHCP**.

El **DHCP** se encarga de:

- Asignar direcciones IP automáticamente a los dispositivos de la red.
- Configurar parámetros como:

  - Puerta de enlace
  - DNS
  - Máscara de red

Esto permite que los servidores y dispositivos se conecten automáticamente a la red interna.

---

# 4. Servidor web y aplicación

Una vez que el tráfico atraviesa el firewall, llegaremos al servidor web principal, donde se ejecuta la aplicación web.

Este servidor utiliza varias tecnologías:

### Apache HTTP Server

Es el servidor web encargado de:

- Recibir peticiones HTTP/HTTPS del navegador.
- Procesar solicitudes del cliente.
- Servir el contenido de la página web.

### PHP

PHP funciona dentro de Apache como lenguaje de programación del lado del servidor.

Se encarga de:

- Procesar la lógica de la aplicación.
- Generar páginas dinámicas.
- Gestionar la comunicación con la base de datos.

### HTML5 y CSS

Son las tecnologías utilizadas para la **estructura y diseño de la página web**.

- HTML5 define el contenido.
- CSS controla la apariencia visual.

Estas páginas son generadas por PHP y enviadas al navegador del usuario.

---

# 5. Servidor de base de datos

Seguido, la aplicación web se conecta a un servidor de base de datos MySQL.

La base de datos almacena información dinámica como:

- Usuarios
- Recetas
- Ingredientes
- Favoritos

  etc.

El flujo es el siguiente:

1. El usuario realiza una acción en la web.
2. Apache recibe la petición.
3. PHP procesa la lógica.
4. PHP consulta o modifica datos en MySQL.
5. MySQL devuelve los datos al servidor web.
6. El servidor genera la página final.

---

# 6. Administración de la base de datos

Para gestionar la base de datos se utilizaremos PHP.

PHP es una interfaz web que permite:

- Crear tablas
- Modificar registros
- Realizar consultas SQL
- Administrar usuarios de base de datos

Normalmente solo es accesible desde la red interna por seguridad.

---

# 7. DNS interno y filtrado (Pi-hole)

Dentro de la red también existe un servidor **Pi-hole** que funciona como:

- **Servidor DNS local**
- **Bloqueador de publicidad y rastreadores**

Sus funciones principales son:

- Resolver nombres de dominio dentro de la red.
- Filtrar dominios maliciosos o publicitarios.
- Mejorar la privacidad y el rendimiento.

Los dispositivos de la red consultan primero a Pi-hole antes de acceder a DNS externos.

---

# 8. Almacenamiento de datos (TrueNAS)

El sistema también incluye un servidor TrueNAS.

TrueNAS permite:

- Guardar archivos del sistema o copias de seguridad.
- Compartir almacenamiento entre servidores.

---

# 9. Flujo completo de funcionamiento

El funcionamiento completo del sistema sería el siguiente:

1. El usuario accede al dominio **delicias.tallerdekirby.es** desde su navegador.
2. **Cloudflare** resuelve el dominio y dirige la conexión hacia el servidor.
3. La conexión llega al **firewall pfSense**.
4. pfSense verifica las reglas de seguridad y permite el tráfico.
5. La petición llega al **servidor Apache**.
6. Apache ejecuta **PHP** para procesar la lógica del sitio.
7. PHP consulta datos en **MySQL** si es necesario.
8. La respuesta se genera en **HTML y CSS** accesible para el usuario.
9. El navegador del usuario recibe y muestra la página web.

Mientras tanto:

- **Pi-hole** gestiona el DNS interno.
- **TrueNAS** almacena archivos y copias de seguridad.
- **phpMyAdmin** permite administrar la base de datos.
	<br>
	<br>
<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Organigrama.png" alt="Página Tareas" width="1000">
</p>

</details>

---

<details>
  <summary>📋 Tareas</summary>
<br>
	
## 1_ Organización del proyecto
 
**Creación y configuración del tablero de Trello con las primeras tarjetas.**
<br>
Hemos creado la estructura inicial de gestión del proyecto.
<br>

**Creación del repositorio en GitHub y organización de carpetas.**
<br>
Se ha preparado el entorno de trabajo colaborativo.
<br>

**Redacción del listado de funcionalidades principales del proyecto.**
<br>
Se han definido los objetivos generales de la aplicación.
<br>

## 2_ Lluvia de ideas

**Propuesta inicial de funcionalidades y estructura general.**
<br>
Se han recopilado las primeras ideas del proyecto, y hemos investigado cual sería la más efectiva.
<br>

**Clasificación y priorización de las ideas más relevantes.**
<br>
Se ha organizado la información en categorías según prioridad.
<br>

## 3_ Mapa de navegabilidad

**Creación del esquema visual con las secciones principales del sitio.**
<br>
Se ha diseñado el recorrido principal del usuario.
<br>

**Revisión y ajuste del mapa de navegabilidad según las ideas definidas.**
<br>
Se ha validado la estructura general del sitio web.
<br>

## 4_ Diseño inicial de la web

**Diseño del primer boceto visual de la página principal.**
<br>
Se ha elaborado un prototipo básico de la interfaz.
<br>

**Aportación de ideas sobre colores, estructura y disposición de elementos.**
<br> 
Se ha colaborado en la definición del estilo visual.
<br>

## 5_ Preparación de la siguiente fase

### - Trello
**Revisión de materiales y tareas en Trello.**
<br>
Se ha organizado el trabajo pendiente para la próxima etapa.
<br>

### - Login/Register
**Planificación de la funcionalidad de Login, Registro y Recuperación de contraseña.**
Se planificará la estructura y las pantallas necesarias para el sistema de autenticación (login, registro y recuperar contraseña), definiendo su integración en la web.

### - Botones De La Web
**Preparación de los botones principales del sistema.**
<br>
Se diseñarán y añadirán los botones para acceder al Login, Registro y Recuperación de contraseña, organizándolos dentro de la navegación del sitio.
<br>

### - Desarrollo Backend en PHP

**Desarrollo del formulario y lógica de registro en PHP.**
<br>
Se creará un formulario para que el usuario pueda introducir su contraseña y demás datos, y se programará la validación e inserción en la base de datos.
<br>

**Implementación del sistema de seguridad mediante HASH.**
<br>
Se aplicará un sistema de cifrado utilizando password_hash() en PHP para proteger las contraseñas cuando sean almacenadas.
<br>

### - Sistema de Recuperación de Contraseña
**Diseño del proceso de recuperación de contraseña.**
<br>
Se definirá el flujo necesario para recuperar la contraseña: petición del correo, verificación y formulario para la nueva clave.
**Programación de la recuperación y restablecimiento en PHP.**
<br>
Se programará el sistema que permita al usuario restablecer su contraseña, incluyendo el re-cifrado con "password_hash()"
<br>

## 6_ Instalación y Configuración del Servidor Web en Debian

**Preparación del entorno con sistema operativo Debian.**
<br>
Se realizará la instalación inicial del sistema operativo Debian y la configuración básica necesaria para alojar el servidor web.
<br>

## 7_ Instalación y Configuración de Apache

- **Instalación del servidor Apache.**
Se instalará y configurará Apache en Debian para permitir la ejecución de páginas web y archivos PHP.
<br>

- **Integración de Apache con PHP.**
Se configurará Apache para que interprete correctamente los archivos PHP y se validará su funcionamiento mediante pruebas básicas de acceso al servidor.
<br>

## 8_ Creación de la Estructura Básica de la Página Web
**Creación del archivo HTML base.**
<br>
Se generará un archivo HTML inicial que definirá la estructura y el contenido principal que verán los usuarios al entrar en la página.
<br>

## 9_ Implementación del Campo de Consulta del Usuario
**Añadir un campo de texto para consultas.**
<br>
Se agregará un cuadro de texto (input o textarea) para que el usuario pueda escribir su consulta, como ingredientes o el tipo de receta que desea obtener.
<br>

## 10_ Creación del Botón para Enviar la Consulta
**Incorporación del botón de envío.**
<br>
Se implementará un botón que permitirá al usuario enviar la información escrita, enviando la consulta al sistema para que la IA pueda procesarla.
<br>

## 11_ Integración con la IA para Generar Respuestas
**Conexión del formulario con la IA entrenada.**
<br>
Se configurará el sistema para que, una vez enviada la consulta, la IA procese el texto introducido por el usuario y genere automáticamente una receta basada en su prompt.
<br>

## 12_ Acceso a los Menús y Secciones de la Web
**Diseño de los accesos a las categorías de la web.**
<br>
Se añadirán enlaces o botones en la página principal para acceder a diferentes categorías como valoraciones, fotos de recetas, platos destacados, etc.
<br>
</details>

---

<details>
  <summary>🖥️ Web</summary>
<br>
<details>
  <summary>a. Teoría Del Color DelicIA's</summary>
<br>
	
## 🎨 Teoría del color de la web DeliciA’s

La web utiliza una paleta cálida y alegre, pensada para despertar el apetito y transmitir una sensación acogedora y cercana. Los tonos principales están inspirados en el mundo de la cocina y los ingredientes frescos, generando una experiencia visual agradable y coherente.

<table>
  <tr>
    <th style="width: 200px;">Color</th>
    <th style="width: 100px;">Código</th>
    <th style="width: 100px;">Uso Principal</th>
    <th style="width: 100px;">Significado</th>
  </tr>
  <tr>
    <td>🟨 Amarillo claro</td>
    <td>#FEE070</td>
    <td>Fondo principal y cabecera</td>
    <td>Representa energía y apetito. Es el color protagonista y da identidad a la web.</td>
  <tr>
	<td>⚫ Negro
	<td>#000000
	<td>Texto y bordes
	<td>Aporta contraste, claridad y elegancia, facilitando la lectura.
  <tr>
	<td>⚪ Blanco
	<td>#FFFFFF
	<td>Fondo de secciones y tarjetas
	<td>Da equilibrio a la web, limpieza visual y resalta las imágenes de los platos.
  <tr>
	<td>🟦 Azul medio
	<td>#3A8DFF (aprox.)
	<td>Botones de login y registro
	<td>Transmite confianza y profesionalidad, creando contraste con el amarillo.
  <tr>
	<td>🟫 Gris claro
	<td>#D9D9D9
	<td>Botones de categorías (“Otros”)
	<td>Neutraliza el conjunto, ayudando al equilibrio visual.
</table>

## Análisis general

El color amarillo crea una ambiente cálido, ideal para una web de cocina. La combinación que hemos usado con el negro mejora la legibilidad y añade un toque moderno. El blanco y los tonos grises sirven para dar respiro visual, mientras que los detalles en azul rompen la monotonía y guían la atención hacia acciones importantes como iniciar sesión o registrarse.

La paleta en conjunto comunica alegría, hemos intentado usar los colores para hacer que el usuario se sienta cómodo mientras explora las recetas.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/paletadecolores.png" alt="Página Tareas" width="700">
</p>

<br>
</details>
<br>
<details>
  <summary>b. Diseño y Mockup</summary>
<br>
<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img1.png" alt="Página Tareas" width="700">
</p>
<br>
La página principal de DelicIA’s da una bienvenida cálida y moderna al usuario. Nuestro color amarillo domina el diseño, transmitiendo energía y apetito, mientras que el fondo con fotos de comida crea un ambiente fresco y apetecible. El logo con el gorro de chef y la palabra “IA” refleja la mezcla entre cocina y tecnología. En la parte superior, el menú permite navegar fácilmente entre recetas, valoraciones y platos destacados, y los botones Login y Registro invitan a unirse a la comunidad. En el centro, el gran título “DelicIA’s” y el mensaje “Aprende a cocinar con nosotros”, acompañado por una barra de búsqueda que anima a explorar recetas de forma rápida y sencilla con la Inteligencia Artificial.	
<br>
<br>
	
<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img2.png" alt="Página Tareas" width="700">
</p>
<br>

Esta pantalla de inicio de sesión mantiene la estética general de DelicIA’s, con el fondo de comida saludable y el color amarillo que se conserva en todas las páginas de la web para darle coherencia. En el centro, un recuadro redondeado destaca sobre el fondo, creando un espacio limpio y visualmente agradable donde se observa claramente que és el inicio de sesión del usuario, unos botones en los que ingresar el correo y la contraseña. Los iconos dentro de los campos, y el botón gris de “Iniciar sesión” junto con la opción de acceder con Google ofrecen una entrada rápida y moderna. En la parte inferior, los enlaces para recuperar la contraseña o registrarse están bien ubicados para guiar al usuario según su necesidad. En conjunto, esta página mantiene un diseño simple, funcional y coherente con la identidad visual de DelicIA’s.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img3.png" alt="Página Tareas" width="700">
</p>
La página del apartado de Registro es practicamente la misma que la de Inicio de sesión. Los campos para ingresar usuario, contraseña y confirmación están acompañados de iconos que hacen más intuitivo el proceso. El botón gris de “Registrarse” es claro y accesible, y la opción de registro con Google agiliza el acceso para los usuarios. Al final, el enlace “¿Ya tienes cuenta? Iniciar sesión” ofrece una navegación fluida entre las dos pantallas principales. En conjunto, esta página mantiene la misma calidez y simplicidad que caracteriza a toda la web.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img4.png" alt="Página Tareas" width="700">
</p>
La página web de DeliciA’s usa los mismos colores que las anteriores, con un fondo amarillo que da sensación de alegría y energía, haciendo que todo se vea coherente y atractivo. El diseño es sencillo, y lo que más llama la atención son las fotos de los platos, que son el centro de la página.En la parte de arriba hay un menú que permite entrar fácilmente a las recetas, valoraciones o favoritos. Los botones azules para iniciar sesión y registrarse se notan mucho por el contraste, y se mantienen para mostrar que esas son las pocas cosas
que se pueden hacer sin iniciar sesión. Las imágenes de comida tienen un efecto que, al pasar el ratón por encima, muestra el nombre del plato e invita a saber más.
En general, la web se ve ordenada, cálida y apetecible, perfecta para una página de cocina moderna y fácil de usar. El objetivo de esta página es mostrar recetas creadas por otros usuarios o por la Inteligencia Artificial, con la idea de que alguna receta le guste al usuario.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img5.png" alt="Página Tareas" width="700">
</p>
En esta parte de la web, los usuarios pueden ver las fotos de las recetas, su valoración y los comentarios, a los que se accede con el botón “Ver Opiniones”, que es amarillo con letras negras. Cada plato muestra una puntuación dentro de un recuadro con una estrella, lo que permite comparar fácilmente cuál es el más popular. El diseño es sencillo y ordenado, con imágenes grandes que facilitan explorar, elegir una receta, valorarla o guardarla como favorita. En general, la página mantiene un estilo moderno, visual y coherente, que invita a participar y disfrutar del contenido de cocina.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img6.png" alt="Página Tareas" width="700">
</p>
Esta página de DeliciA’s usa los mismos colores que las anteriores, con un fondo amarillo que mantiene la coherencia y da una sensación alegre. Aquí se muestran los platos más destacados, una selección de recetas populares por su buen sabor y por ser fáciles de preparar. El título y el texto de introducción explican claramente el propósito de la sección, animando al usuario a descubrir opciones sencillas y deliciosas. Cada imagen de plato tiene un botón amarillo con el texto “Ver Receta”, que destaca e invita a hacer clic. El diseño es limpio y ordenado, con las imágenes bien colocadas y centradas, lo que hace que la navegación sea fácil y mantiene el estilo moderno, atractivo y apetecible de toda la web.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img7.png" alt="Página Tareas" width="700">
</p>
Aquí el usuario encuentra las recetas, presentadas con una foto atractiva, el nombre del plato y el tiempo de preparación. Cada tarjeta permite acceder al detalle de la receta, donde se pueden ver los ingredientes, los pasos, la descripción y las reseñas. En la parte superior hay una barra de búsqueda manual y un botón de filtros a la derecha, pensados para encontrar más recetas de forma rápida y personalizada. En conjunto, la página es práctica, clara y visualmente agradable, ideal para explorar y organizar las recetas guardadas.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img8.png" alt="Página Tareas" width="700">
</p>
En este apartado, el usuario puede ver todos los platos que ha guardado como favoritos, con una presentación ordenada que muestra la imagen del plato, su nombre y el tiempo estimado de preparación. Cada receta se puede abrir para ver su descripción, los ingredientes, los pasos y las opiniones de otros usuarios. En la parte superior, hay una barra de búsqueda y un botón de filtros que ayudan a encontrar recetas específicas o a clasificarlas según las preferencias del usuario. En conjunto, la página transmite orden, facilidad de uso y una estética atractiva que invita a seguir explorando nuevas recetas.
<br>
<br>

<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/img9.png" alt="Página Tareas" width="700">
</p>
En esta página, el usuario puede explorar otras categorías de recetas, como platos veganos, saludables, de horno, platos de cuchara o postres, lo que facilita encontrar exactamente el tipo de receta que busca. Cada categoría está representada por un botón gris con bordes redondeados y texto negro, lo que da una apariencia limpia y fácil de leer. La organización en filas y columnas hace que la navegación sea rápida e intuitiva, manteniendo la estética clara, práctica y coherente con el resto de la web.
<br>
<br>

</details>
<br>
<details>
  <summary>c. Mapa De Navegabilidad</summary>
	<br>
Un mapa de navegabilidad es un dibujo que muestra cómo se conectan entre sí las distintas pantallas o secciones de una aplicación o página web. Es importante porque permite ver de un vistazo cómo se moverá el usuario dentro del sistema, ayuda a organizar mejor la información y a detectar si hay pasos confusos o innecesarios. Gracias a este mapa, es más fácil planificar un diseño claro y sencillo que mejore la experiencia del usuario.
	<br>
	<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Mockup%20DelicIA's/MapaNavegabilidad.png" alt="Página Tareas" width="1200">
</p>
	
[Mapa De Navegabilidad Figma](https://www.figma.com/design/upHGaQZQPooRiEkaitpQMz/Sin-t%C3%ADtulo?node-id=0-1&p=f&t=nfCwLF66udVG8ufu-0)
	
</details>
<br>
<details>
  <summary>d. BackEnd</summary>
	
## Antes
La base de datos presentaba las entidades principales (usuarios, recetas, ingredientes, comentarios, valoraciones y favoritos) conectadas entre sí, pero sin una estandarización clara en los nombres, tipos de datos ni tablas intermedias bien definidas.
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/DataBaseEntidadRelacion.png" alt="Página Tareas" width="700">

## Después
Antes teníamos un modelo más básico y poco organizado. Después lo reestructuramos para que fuera más claro, ordenado y coherente, ajustando relaciones, estandarizando la información y dejando una base más limpia y mejor organizada en MySql.
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/DataBaseRelacional.png" alt="Página Tareas" width="700">

</details>
</details>

---

<details>
  <summary>⚙️ Servicios</summary>
<br>
<details>
  <summary>a. DNS</summary>
<br>
El DNS es un servicio que se encarga de traducir los nombres de las páginas web, como ejemplo.com, a direcciones numéricas que los ordenadores entienden. Es útil para un proyecto porque permite que los usuarios accedan fácilmente a tu página o aplicación usando un nombre sencillo en lugar de una dirección difícil de recordar. Gracias al DNS, el acceso es más rápido, más claro y más profesional.
<br>
<br>
	
<details>
	
  <summary>Pi-hole</summary>
	
## Pi-hole

Para empezar a realizar la instalación de nuestro **pi-hole** en ubuntu deberemos tener un ubuntu server instalado previamente.

Si ya esta instalado empezaremos a introducir comandos.

El primer paso es introducir el comando “sudo nano /etc/netplan/00-installet-config.yaml” para ver la configuración de la red de la maquina.

Ubuntu 20.04 utiliza Netplan para configurar la red en el sistema operativo. Netplan configura los parámetros de red del host a partir de ficheros de configuración YAML.
El directorio de configuración de Netplan es: /etc/netplan
En su interior el instalador de Ubuntu habrá dejado el fichero de configuración diferente según se trate de la versión de escritorio o de servidor.

Directiva routes en lugar de gateway4
Las versiones actuales desaconsejan el uso de la directiva gateway4. En su lugar se aconseja el uso de la directiva routes que permite añadir la ruta por defecto o cualquier otra ruta.
En este caso, la configuración anterior podría ser:

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Netplanconfig.png" alt="Página Tareas" width="700">

Cuando se haya editado de configuración de Netplan se puede:
Utilizar el comando netplan apply para aplicar la configuración. Si se detecta algún error en el fichero se indicará.
Reiniciar la máquina para que arranque con la nueva configuración. Si hay algún error en la configuración de Netplan la máquina arrancará sin configurar la red.

Después hemos ejecutado netplan try para comprobar que todo funcione bien y haremos un ping a google.com.
Y una vez hecho todo esto, es la verificación de que podemos continuar a la siguiente fase:

## INSTALACIÓN DE PI-HOLE

Para realizar la instalación de Pi-hole, lo primero que se hizo fue ejecutar con el  comando curl -sSL https://install.pi-hole.net | bash desde la terminal del sistema. Este comando sirve para descargar e iniciar el instalador oficial de Pi-hole de forma automática. Al ejecutarlo, se abre una ventana que guía paso a paso durante toda la instalación.

Durante el inicio del instalación skypeamos todo hasta llegar a la interfaz de red que se iba a utilizar, eligiendo la interfaz llamada enp0s3, que es la que conecta el equipo con la red local. Después de esto, el instalador mostró la dirección IP que se iba a asignar al servidor, que en este caso era 192.168.135.254. Esta IP se aceptó porque es importante que el servidor DNS tenga siempre la misma dirección para que funcione correctamente.

En este paso tuvimos problemas ya que al poner la ip ponemos una cualquiera y no la ip del aula.

En el siguiente paso se eligió el servidor DNS externo que Pi-hole utilizaría para resolver las consultas que no se bloquean. En este caso se seleccionó Google, que utiliza las direcciones 8.8.8.8 ya que es un servidor DNS muy conocido y fiable una vez hecho esto durante la instalación se generó una contraseña para el acceso de administrador, la cual se guardó porque es necesaria para entrar al panel de control.

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/PiHoleSoulcion.png" alt="Página Tareas" width="700">

<br>

En este paso hemos configurado dentro de Pi-hole el DHCP, con la maquina encendida en la que hemos hecho la instalación de Pi-hole hemos mirado la ip que tenia esa maquina y hemos ido a google en nuestro PC y hemos puesto e este caso en el buscador 192.168.135.36/admin ahi se nos a abierto la interfaz de Pi-hole y hemos establecido una contraseña desde el cmd de  la máquina virtual.

Una vez hecho esto nos a dejado entrar y hemos configurado el DHCP con el Rango de ips del 192.168.1.100 hasta la ip 110, para el gateway hemos utilizado la 192.168.1.254. 

Cuando hemos terminado de hacer esto hemos guardado los cambios y para comprobar que funcionaba correctamente hemos abierto otra máquina virtual que estaba en modo red interna y efectivamente funcionaba correctamente.


</details>
</details>
<br>
<details>
  <summary>b. DHCP</summary>
<br>
El DHCP es un servicio que asigna automáticamente direcciones IP y otros datos de red a los dispositivos cuando se conectan. Es útil para un proyecto porque evita tener que configurar cada equipo a mano, reduce errores y hace que la red funcione de forma rápida y ordenada. Gracias al DHCP, todos los dispositivos pueden conectarse y comunicarse sin complicaciones.

### 1. Introducción y Propósito
En este proyecto, hemos utilizado el servidor Pi-hole, convirtiéndolo no solo en un bloqueador de publicidad y rastreadores, sino en el DHCP principal de la infraestructura.

Esta decisión técnica busca centralizar la administración de la red y garantizar que todos los dispositivos conectados utilicen automáticamente los filtros DNS de Pi-hole sin necesidad de configuración manual individual.

### 2. Procedimiento de Configuración
Para implementar esta funcionalidad, se siguieron estos pasos críticos:

Desactivación en el Gateway: Se accedió a la configuración del router de la operadora para desactivar su servidor DHCP. Esto es vital para evitar el conflicto de dos servidores asignando IPs en el mismo segmento.

Activación en Pi-hole: En la interfaz de administración (Settings > DHCP), se habilitó el "DHCP Server".

Configuración del Pool de IPs: Se definió un rango de direcciones (ej. 192.168.1.50 a 192.168.1.150) y el tiempo de concesión (lease time).

Asignación de DNS: Al activar esta opción, Pi-hole se anuncia a sí mismo como la puerta de enlace DNS para todos los clientes mediante el proceso de negociación DHCP.

### 3. Justificación Técnica y Ventajas
La migración del DHCP del router hacia Pi-hole se justifica por los siguientes puntos clave:

A. Visibilidad y Auditoría de Red
Por defecto, muchos routers realizan una función de NAT que oculta el origen de las peticiones DNS, haciendo que en los registros de Pi-hole solo aparezca la IP del router. Al gestionar el DHCP, Pi-hole puede:

Identificar dispositivos por nombre: Asocia cada consulta DNS a un hostname específico (ej. "iPhone-de-Juan" en lugar de 192.168.1.15).

Generar estadísticas granulares: Permite saber con precisión qué dispositivo en la red está generando tráfico sospechoso o bloqueado.

B. Control de Asignaciones Estáticas
La interfaz de Pi-hole es significativamente más intuitiva y estable que la de la mayoría de los routers comerciales. Permite fijar direcciones IP a direcciones MAC específicas de forma rápida, asegurando que servidores o impresoras mantengan siempre la misma ubicación.

C. Bypass de Restricciones del Router
Muchos routers de proveedores de internet (ISP) bloquean la posibilidad de cambiar los DNS. Al asumir el rol de servidor DHCP, Pi-hole "fuerza" a los dispositivos a usar su filtrado, saltándose las limitaciones impuestas por el hardware del ISP.
</details>
<br>
<details>
  <summary>c. Apache y PHP</summary>
	<br> 

## APACHE
Apache es un programa que funciona como servidor web, se encarga de entregar las páginas y recursos de un sitio cuando un usuario los solicita desde su navegador. Es útil para un proyecto porque permite publicar una web o aplicación de forma segura y estable, gestionar el acceso de los usuarios y asegurar que el contenido se cargue correctamente. Con Apache, tu proyecto puede estar disponible para cualquiera que necesite acceder a él desde internet o desde una red local.

<br>

[Instalación de servidor Apache en Debian - Hector Abad y Alejandro Valero.pdf](https://github.com/user-attachments/files/25045002/Instalacion.de.servidor.Apache.en.Debian.-.Hector.Abad.y.Alejandro.Valero.pdf)

## PHP

PHP es un lenguaje de programación del lado del servidor que se usa principalmente para crear páginas web dinámicas. Se ejecuta en el servidor y genera contenido HTML que luego se envía al navegador. 
Es muy común para manejar formularios, bases de datos y sistemas web como WordPress.  

---

Una vez hecho el html procederemos a instalar PHP

Hemos instalado Apache para presentar su contenido y MySQL para almacenar y gestionar sus datos. PHP es el componente de nuestra configuración que procesará el código para mostrar contenido dinámico al usuario final, con el siguiente comando:

**sudo apt install php libapache2-mod-php php-mysql**

Una vez que la instalación se complete, hemos ejecutado el siguiente comando para confirmar tanto la versión de PHP como si se ha instalado correctamente:

**php -v**

<img width="543" height="123" alt="Captura de pantalla 2026-02-10 105635" src="https://github.com/user-attachments/assets/c4e31970-2f8a-44af-8bfb-0401dc9fb60d" />

## Configurar hosts virtuales (recomendado)

Al emplear el servidor web Apache, puede utilizar _hosts virtuales _(similares a bloques de servidor de Nginx) para encapsular detalles de configuración y alojar más de un dominio desde un único servidor. Configuraremos un dominio llamado example.com, pero debería cambiarlo por su propio nombre de dominio.

Por defecto, Apache en Debian 9 tiene habilitado un bloque de servidor que está configurado para proporcionar documentos del directorio /var/www/html. Si bien esto funciona bien para un solo sitio, puede ser difícil de manejar si aloja varios. En vez de modificar /var/www/html, crearemos una estructura de directorio dentro de /var/www para nuestro sitio example.com y dejaremos /var/www/html como directorio predeterminado que se abastecerá si una solicitud de cliente no coincide con otros sitios.

Cree el directorio para example.com, utilizando el indicador -p para crear cualquier directorio principal necesario:

**sudo mkdir -p /var/www/webDelicIA's.com/html**

A continuación, asigne la propiedad del directorio con la variable de entorno data:

**sudo chown -R www-data:www-data /var/www/webDelicIA's.com/html**

A continuación, cree una página de ejemplo index.html utilizando nano o su editor favorito:

**nano /var/www/DelicIA's.com/html/index.html**

Dentro de ella, agregue el siguiente ejemplo de HTML:

<img width="595" height="191" alt="Captura de pantalla 2026-02-03 131806" src="https://github.com/user-attachments/assets/d09f000a-a544-4ac1-a78f-17e76a26d34c" />

Guarde y cierre el archivo cuando termine.

Para que Apache proporcione este contenido, es necesario crear un archivo de host virtual con las directivas correctas. En lugar de modificar el archivo de configuración predeterminado situado en /etc/apache2/sites-available/000-default.conf directamente, crearemos uno nuevo en /etc/apache2/sites-available/example.com.conf:

Péguelo en el siguiente bloque de configuración, similar al predeterminado, pero actualizado para nuestro nuevo directorio y nombre de dominio:

<img width="480" height="182" alt="image" src="https://github.com/user-attachments/assets/071108f5-5320-4262-add9-d3f111a5a6d8" />

Tenga en cuenta que cambiamos DocumentRoot por nuestro nuevo directorio y ServerAdmin por un correo electrónico al que pueda acceder el administrador del sitio example.com. También agregamos dos directivas: ServerName, que establece el dominio de base que debería coincidir para esta definición de host virtual, y ServerAlias, que define más nombres que deberían coincidir como si fuesen el nombre de base.

Guarde y cierre el archivo cuando termine.

Habilitaremos el archivo con la herramienta a2ensite:

**sudo a2ensite DelicIA's.com.conf**

Deshabilite el sitio predeterminado definido en 000-default.conf:

**sudo a2dissite 000-default.conf**

A continuación, realizaremos una prueba para ver que no haya errores de configuración:

**sudo apache2ctl configtest**

Debería ver el siguiente resultado:

**Output
Syntax OK**	

Reinicie Apache para implementar sus cambios:

**sudo systemctl restart apache2**

Con esto, Apache debería ser el servidor de su nombre de dominio. Puede probar esto visitando http://example.com. Allí, debería ver algo como lo siguiente:

Y ya nos mostraría el HTML que hemos hecho.

Si vemos esta página, nuestro host virtual de Apache está funcionando según lo previsto.

Dejaremos este archivo establecido como página de destino temporal de la aplicación hasta que configuremos un archivo index.php que lo sustituya. Cuando lo haga, eliminaremos el archivo index.html de su root de documentos, o cambiarle el nombre, ya que tendría precedencia sobre un archivo index.php por defecto.

En nuestro caso que queremos cambiar este comportamiento, editaremos el archivo /etc/apache2/mods-enabled/dir.conf y modificar el orden en el que el archivo index.php se enumera en la directiva DirectoryIndex:

<img width="1664" height="982" alt="image" src="https://github.com/user-attachments/assets/0e0aa188-0d90-4cbd-9904-512446152be5" />


## INCIDENCIAS

Durante el proceso hemos tenido un par de incidencias:
### 1

---

En la instalación de PHP no conseguiamos cambiar la interfaz cuando entrabamos en el navegador, esto nos estaba pasando por que DEBIAN antepone el "index.html" que hicimos de prueba al "index.php" que habiamos editado recientemente.

### 2

---

Pero aun cambiando esto tuvimos otra incidencia y fue nada más y nada menos que el orden el el que escribimos dentro de la configuración, DEBIAN tiene muy en cuenta el orden por lo que al poner infophp cuando era **phpinfo**.

</details>
<br>
<details>
  <summary>d. Firewall</summary>
<br>
Un firewall es un sistema que controla qué tráfico puede entrar o salir de una red, actuando como una especie de “muro de seguridad” que bloquea accesos no autorizados. Es útil para un proyecto porque protege los equipos y datos de ataques, virus y conexiones sospechosas, asegurando que solo pasen las comunicaciones permitidas. Gracias al firewall, el proyecto funciona de forma más segura y estable.
</details>
<br>
<details>
  <summary>e. Copias De Seguridad</summary>
<br>
Las copias de seguridad son duplicados de los archivos y datos importantes que se guardan en otro lugar para no perderlos si ocurre un fallo, un borrado accidental o un ataque informático. Son útiles para un proyecto porque garantizan que, pase lo que pase, siempre podrás recuperar la información necesaria y continuar trabajando sin perder tiempo ni contenido.
</details>

<br>

<details>
  <summary>d. API</summary>
<br>	

# PROCESO DE ENTRENO DE API IA (DELICIA'S ASSISTANT)

Estamos configurando y entrenando una API de inteligencia artificial utilizando Google AI Studio.

<img width="1340" height="695" alt="Captura de pantalla 2026-02-27 103253" src="https://github.com/user-attachments/assets/bb511dd7-1e5f-4287-a086-3936c6d24b2f" />

<br>

El objetivo no es “programarla desde cero”, sino definir su comportamiento mediante instrucciones claras, estableciendo:

 - Qué debe hacer

 - Qué debe responder

 - Cómo debe responder

 - Con qué tono y estilo debe comunicarse

 - Qué estructura deben tener sus respuestas

Investigando sobre como hacer el proceso se lo conoce como:

**Ingeniería de Prompt**

Consiste en darle instrucciones detalladas a la IA para moldear su comportamiento.
En nuestro caso estamos definiendo el "Rol de la IA"
Le indicamos que actúe como un generador profesional de recetas y asistente gastronómico inteligente

## ¿Qué debe generar?

 - Título del plato que quiere el usuario
 - Para cuantas personas es ideal el plato
 - Tiempo estimado
 - Lista de ingredientes
 - Pasos detallados

Esto garantiza que la respuesta sea estructurada y usable directamente en la web.

## Tono y lenguaje

Definimos:

 - Lenguaje claro y profesional
 - Descripciones atractivas
 - Estilo gastronómico
 - Sin respuestas técnicas innecesarias
 - Sin salirse del contexto culinario

Esto es clave para que la experiencia del usuario sea coherente con nuestra plataforma.

## Restricciones

 - También le indicamos lo que NO debe hacer:
 - No inventar información incoherente
 - No salirse del tema de cocina
 - No responder preguntas fuera del ámbito gastronómico
 - No generar contenido inapropiado

---

# ¿Por qué usamos una API?

Porque después conectaremos esta IA a nuestra web mediante:

Backend (probablemente con PHP) para la seguridad de nuestra clave de la IA, ya que no dijo Quim que nos la podrían robar.
Servidor Apache
Base de datos MySQL

Así, cuando un usuario pida una receta, la web enviará una petición a la API y recibirá la receta ya estructurada.

</details>

<br>

<details>
  <summary>e. Copias De Seguridad</summary>
<br>
Las copias de seguridad son duplicados de los archivos y datos importantes que se guardan en otro lugar para no perderlos si ocurre un fallo, un borrado accidental o un ataque informático. Son útiles para un proyecto porque garantizan que, pase lo que pase, siempre podrás recuperar la información necesaria y continuar trabajando sin perder tiempo ni contenido.
</details>

</details>

---

<details>
  <summary>📄 Conclusiones</summary>
</details>

---

<details>
  <summary>📖 Bibliografia</summary>
	<br>
	<a href="https://www.youtube.com/watch?v=44ziZ12rJwU">¿Como usar GitHub? </a>
	<br>
	<a href="https://www.llama.com/llama-downloads/">API Meta Llama (IA) </a>
	<br>
	<a href="https://v2.auth.mistral.ai/login?flow=9a02f924-90cd-4698-b4ef-059d93d6ef3a"> API Mistral (IA) </a>
	<br>
	<a href="https://www.youtube.com/watch?v=SmNsfs1x92Y"> ¿Como crear carrusel? <a/>
	<br>
	<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/border-block-color"> Referencia para comandos HTML/CSS/JAVAScript </a>
	<br>
	<a href="https://icons.getbootstrap.com/?q=login"> Logos Bootstrap </a>
	<br>
	<a href="https://kinsta.com/es/blog/contorno-texto-css/"> Comandos CSS </a>
	<br>
	<a href="https://startbootstrap.com/themes#google_vignette"> Plantillas Webs </a>


</details>

 ---
 
<details>
	<summary>Arduino</summary>
<br>
<details>
	<summary>Introducción Arduino</summary>
<p align="center">
<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/BannerArduino.jpg" alt="Mi banner" width="800" height="200">
  </p>

<br>

**¿Que es arduino?**
<br>
	Es una plataforma de hardware y software libre usada para crear proyectos electrónicos de forma fácil para principiantes y expertos.
<br>

**¿Cuáles son sus características más importantes?**
<br>
	Arduino destaca por ser una plataforma de código abierto, fácil de usar, con su propio entorno de programación (IDE) y una amplia comunidad que brinda soporte.

**¿Cuál es el origen de Arduino?**
<br>
	Arduino fue creado en 2005 en el Instituto IVREA, en Italia, como una herramienta para estudiantes de diseño sin conocimientos técnicos en electrónica y programación. Sus fundadores son: Massimo Banzi, David Cuartielles, Tom Igoe, Gianluca Martino y David Mellis 		desarrollaron Arduino como una plataforma de hardware libre y de bajo costo, con el objetivo de facilitar la creación de proyectos interactivos.
<br>
	El nombre "Arduino" proviene de un bar en Ivrea frecuentado por los fundadores, que también toma el nombre de un rey italiano.
	
**¿Qué modelos de Arduino hay? Haz una tabla donde especifiques para cada modelo: microcontrolador, voltaje, pines digitales, entradas analógicas, memoria, reloj.**
<br>

<table>
  <tr>
    <th>Modelo</th>
    <th>Microcontrolador</th>
    <th>Voltaje de operación</th>
    <th>Pines digitales</th>
    <th>Entradas analógicas</th>
    <th>Memoria Flash</th>
    <th>Frecuencia de reloj</th>
  </tr>

  <tr>
    <td>Arduino Uno R3</td>
    <td>ATmega328P</td>
    <td>5V</td>
    <td>14</td>
    <td>6</td>
    <td>32 KB</td>
    <td>16 MHz</td>
  </tr>

  <tr>
    <td>Arduino Mega 2560</td>
    <td>ATmega2560</td>
    <td>5V</td>
    <td>54</td>
    <td>16</td>
    <td>256 KB</td>
    <td>16 MHz</td>
  </tr>

  <tr>
    <td>Arduino Nano</td>
    <td>ATmega328P</td>
    <td>5V</td>
    <td>22</td>
    <td>8</td>
    <td>32 KB</td>
    <td>16 MHz</td>
  </tr>

  <tr>
    <td>Arduino Leonardo</td>
    <td>ATmega32u4</td>
    <td>5V</td>
    <td>20</td>
    <td>12</td>
    <td>32 KB</td>
    <td>16 MHz</td>
  </tr>

  <tr>
    <td>Arduino Due</td>
    <td>AT91SAM3X8E (ARM Cortex-M3)</td>
    <td>3.3V</td>
    <td>54</td>
    <td>12</td>
    <td>512 KB</td>
    <td>84 MHz</td>
  </tr>

  <tr>
    <td>Arduino Micro</td>
    <td>ATmega32u4</td>
    <td>5V</td>
    <td>20</td>
    <td>12</td>
    <td>32 KB</td>
    <td>16 MHz</td>
  </tr>

  <tr>
    <td>Arduino MKR1000</td>
    <td>SAMD21 Cortex-M0+</td>
    <td>3.3V</td>
    <td>8</td>
    <td>7</td>
    <td>256 KB</td>
    <td>48 MHz</td>
  </tr>

  <tr>
    <td>Arduino Nano 33 IoT</td>
    <td>SAMD21 Cortex-M0+</td>
    <td>3.3V</td>
    <td>14</td>
    <td>8</td>
    <td>256 KB</td>
    <td>48 MHz</td>
  </tr>
</table>

**¿Para qué sirve un Arduino?**

La principal utilidad que se le da a un arduino es la automatización que esto sirve para controlar las luces por ejemplo de una casa, sensores, motores etc.. que esto puede hacer que podamos abrir una puerta de un parking de un garaje con un mando pero también se les puede dar otras funciones como para el aprendizaje básico de de la programación o en un nivel mas avanzado tambien lo podriamos utilizar en el área de IoT que lo que podemos hacer con esto es recoger los datos de los sensores de los arduino y mandarlos a la nube.

En resumen esta tecnología cada vez está creciendo más gracias a la integración que está teniendo en diferentes ámbitos ya que si nos paramos a pensar estamos rodeados de esta tecnología.

**¿Qué lenguaje utiliza?**

Arduino usa un lenguaje C/C++, pero adaptado para que sea más fácil de entender y usar ya que esto muchas veces se utiliza para el aprendizaje o para gente que está empezando a programar. Se usa principalmente en el entorno llamado Arduino IDE, donde escribes y juntas la información envías el código a la placa.

Este lenguaje solo permite controlar un par de objetos básicos como: Luces Leds,Rgb, Motores servos o DC,Sensores de temperatura,humedad o ultrasonido, Pantallas Lcd o Oled y por ultimo para comunicaciones como Bluetooth, Wi-fi etc….

**¿Qué es el Arduino IDE?**

Es el programa que usas en el ordenador para escribir, compilar y cargar código en una placa Arduino y este software es totalmente gratuito.

</details>

<details>
<summary>Actividades</summary>
<br>
<details>
<summary>Actividad_1</summary>
<br>

## Blink
**(1) Objetivo de la práctica**

En una placa de arduino ESP32 tenemos que conseguir que un led parpadee constantemente .

**(2) Material y explicacion de cada componente**
- Un led
- Dos Jumpers
- Una Resistencia 

**(3) Esquema del circuito como se muestra mas abajo**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/1/%20CircuitoA1.png" alt="Página Tareas" width="700">

**(4) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/1/CodigoA1.png" width="500">

**(5) Video de la practica**

https://github.com/user-attachments/assets/66268bca-320a-4598-8e20-6374dae1f2a2


**(6) Imagen para la entrada del blog o proyecto**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/1/FotoA1.png" alt="Página Tareas" width="700">

</details>

<details>
<summary>Actividad_2</summary>
<br>
	
## A2-led+button

**(1) Objetivo de la práctica**

En una placa de arduino ESP32 tenemos que conseguir que al pulsar el boton se encienda el led y se apague cuando soltemos en la primera parte y en la segunda tiene que hacer función de lámpara, cuando pulsemos se enciende y tendremos que volver a pulsar para que se apague.

**(2) Material y explicación de cada componente**
- 4 Jumpers
- 3 Resistencias
- 1 Leds
- 1 Boton

**(3) Esquema del circuito como se muestra mas abajo**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/2/image.png" alt="Página Tareas" width="700">

**(4) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

**Boton Parte 1:**

#define PIN_LED    2
#define PIN_BUTTON 13
void setup() {
  pinMode(PIN_LED, OUTPUT);
  pinMode(PIN_BUTTON, INPUT);
}

void loop() {
  if (digitalRead(PIN_BUTTON) == LOW) {
    digitalWrite(PIN_LED,HIGH);
  }else{
    digitalWrite(PIN_LED,LOW);
  }
}

**Lampara parte 2:**

#define PIN_LED    2
#define PIN_BUTTON 13

bool ledState = LOW;          // Estado actual del LED
bool lastButtonState = HIGH;  // Estado anterior del botón

void setup() {
  pinMode(PIN_LED, OUTPUT);
  pinMode(PIN_BUTTON, INPUT);
}

void loop() {
  bool buttonState = digitalRead(PIN_BUTTON);

  if (lastButtonState == HIGH && buttonState == LOW) {
    ledState = !ledState;              // Cambia el estado del LED
    digitalWrite(PIN_LED, ledState);
    delay(200);                        // Anti-rebote simple
  }

lastButtonState = buttonState

}
--

**(5) Video de la practica**

https://github.com/user-attachments/assets/284d87e3-51cc-4833-aa10-a21d4093001c

**(6) Imagen para la entrada del blog o proyecto**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/2/IMG_1893.jpg" alt="Página Tareas" width="700">

</details>

<details>
<summary>Actividad_3</summary>
<br>
	
## A3-led_RGB

**(1) Objetivo de la práctica**

En esta Actividad aprenderemos cómo controlar un LED RGB y observaran que puede emitir diferentes colores de luz (usaremos LED RGB para crear una luz multicolor). También podrán entender la función random así como el concepto de gradiente y su aplicación en la actividad.


**(2) Material y explicación de cada componente**
- 4 Jumpers
- 3 Resistencias
- 1 Led RGB

**(3) Esquema del circuito como se muestra mas abajo**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/2/image.png" alt="Página Tareas" width="700">

**Parte 1**
**(4) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

**Boton Parte 1:**

const byte ledPins[] = {4, 0, 2};   // Pines RGB
const byte chns[] = {0, 1, 2};      // Canales PWM

void setup() {
  for (int i = 0; i < 3; i++) {
    // Asocia pin + canal + frecuencia + resolución
    ledcAttach(ledPins[i], 1000, 8);
  }
}

void loop() {
  for (int i = 0; i < 256; i++) {
    setColor(wheel(i));
    delay(30);
  }
}

void setColor(long rgb) {
  ledcWrite(ledPins[0], 255 - ((rgb >> 16) & 0xFF)); // Rojo
  ledcWrite(ledPins[1], 255 - ((rgb >> 8) & 0xFF));  // Verde
  ledcWrite(ledPins[2], 255 - (rgb & 0xFF));         // Azul
}

long wheel(int pos) {
  pos = pos % 256;

  if (pos < 85) {
    return ((255 - pos * 3) << 16) | ((pos * 3) << 8);
  } 
  else if (pos < 170) {
    pos -= 85;
    return ((255 - pos * 3) << 8) | (pos * 3);
  } 
  else {
    pos -= 170;
    return ((pos * 3) << 16) | (255 - pos * 3);
  }
}

**Parte 2:**

const uint8_t PIN_R = 4;
const uint8_t PIN_G = 0;
const uint8_t PIN_B = 2;

void setup() {
  ledcAttach(PIN_R, 1000, 8);
  ledcAttach(PIN_G, 1000, 8);
  ledcAttach(PIN_B, 1000, 8);
}

void loop() {
  // Color 1: Azul dominante
  setRGB(50, 50, 255);
  delay(3000);

  // Color 2: Verde amarillento
  setRGB(180, 255, 50);
  delay(3000);
}

void setRGB(uint8_t r, uint8_t g, uint8_t b) {
  // Ánodo común → valores invertidos
  ledcWrite(PIN_R, 255 - r);
  ledcWrite(PIN_G, 255 - g);
  ledcWrite(PIN_B, 255 - b);
}

}

**Parte 3**

const byte ledPins[] = {2, 0, 4}; // Pinos RGB GPIO2, GPIO0, GPI04 
const byte chns[] = {0, 1, 2}; // Canales PWM

void setup() {
	for (int i = 0; i < 3; i++) {
ledcAttach (ledPins[i], 1000, 8);
	}
}

void loop() {
	for (int i = 0; i < 256; i++) {
		setColor(wheel(i));
		delay(20);
	}
}

void setColor(long rgb) {
	int red = (rgb >> 16) & 0xFF; 
	int green (rgb >> 8) & 0xFF; int blue rgb & 0xFF;

	ledcwrite(ledPins[0], red); // Rojo 
	ledcWrite(ledPins [1], green); // Verde 
	ledcWrite(ledPins [2], blue); // Azul

}

long wheel (int pos) {
	pos = pos % 256;
	
	if (pos85) {
		// Rojo -> Verde
		return ((255 - pos * 3) << 16) | ((pos * 3 ) << 8);
	}else if (pos < 170) {
		// Verde -> Azul
		pos- 85;
		return ((pos * 3) << 16) | ((255 - pos * 3) << 8) | (pos * 3);
	} else {
		// Azul -> Rojo
		pos = 170;
		return ((pos* 3) << 16) (255 - pos 3);
	}
}

--

**(5) Video de la practica**



https://github.com/user-attachments/assets/d3f503d3-ed57-47f2-aca4-5ad668606159



**(6) Imagen para la entrada del blog o proyecto**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/3/CircuitoA3.jpeg" alt="Página Tareas" width="700">

**(7) Preguntas**

**Que observa tras cargar y correr el código del programa con respecto a lo que vimos antes. Explique la diferencia y argumente que es el gradiente y que es lo que hace (En el código) que en este ejercicio se pueda observar.**

Al cargar y ejecutar este programa se observa que el LED RGB cambia de color de manera suave y continua, pasando gradualmente por diferentes tonalidades (rojo, verde, azul y combinaciones intermedias).
Diferencia con lo visto antes
Antes, normalmente:
Los LEDs cambiaban bruscamente de un color a otro

O se encendían/apagaban en valores fijos

En este ejercicio:
El cambio de color es progresivo

No se perciben saltos entre colores

Se genera un efecto visual continuo

Esto ocurre porque ahora se usan valores intermedios de PWM y no solo encendido/apagado.

<br>

**¿Que es un gradiente?**

Un gradiente es una transición gradual entre valores, en este caso, entre colores.
En un LED RGB:
Cada color (R, G, B) puede variar su intensidad

Al cambiar esas intensidades poco a poco, se crea un gradiente de color

Explique que es el tipo de dato long y su diferencia con el int y porque se utiliza en el ejercicio.

¿Qué es el tipo de dato long? ¿Diferencia con int y por qué se usa?
Tipo de dato int
Tamaño: 16 bits en Arduino clásico

Rango: -32,768 a 32,767
Tipo de dato long
Tamaño: 32 bits
Rango: -2,147,483,648 a 2,147,483,647

<br>

**Explique el funcionamiento de la función wheel de manera general.**

Funcionamiento general de la función wheel
La función wheel(int pos):
Recibe un valor entre 0 y 255

Devuelve un color RGB codificado en un long

Funcionamiento general
Divide el rango 0–255 en tres secciones

En cada sección:

Un color baja su intensidad

Otro color la aumenta

<br>

**Busque en las referencias para que se utiliza la función ledcWrite() además indique cual es la salida de esta función y qué significado tiene en el código.
Buscar información de cada función del script en: https://www.arduino.cc/reference/en/ ?
¿Para qué sirve?
Escribe un valor PWM en un pin**

Controla la intensidad de una señal

Salida de la función
No devuelve ningún valor

Su efecto es físico: modifica la señal del pin

Significado en el código
En este ejercicio:
Controla la intensidad de cada color del LED RGB

Valores bajos → más brillo (ánodo común)

Valores altos → menos brillo


</details>

<details>
<summary>Actividad_4</summary>
<br>
	
## A4-led_bar

**(1) Objetivo de la práctica**

En esta Actividad aprenderemos cómo poner en funcionamiento una barra de leds, en la que probaremos el efecto de “Kitt” del coche fantástico, iluminando los leds con efecto movimiento de izquierda a derecha con rebote en bucle.


**(2) Material y explicación de cada componente**
- 10 Jumpers
- 10 Resistencias
- 1 Barra de leds

**(3) Esquema del circuito como se muestra mas abajo**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/4/EsquemaCircuitoA4.jpg" alt="Página Tareas" width="700">

**(4) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**


<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/4/C%C3%B3digoA4.png" alt="Página Tareas" width="700">

--

**(5) Video de la practica**

https://github.com/user-attachments/assets/f37fa5d1-2595-4d97-8c5e-56573ac8b5ab

**(6) Imagen para la entrada del blog o proyecto**

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/Actividades/4/ImagenCircuitoA4.jpeg" alt="Página Tareas" width="700">

</details>

<details>
<summary>Actividad_5</summary>
<br>
	
## A5-Serial-IO

**(1) Objetivo de la práctica**

La comunicación serial es un método de transferencia de datos en el que la información se envía de manera secuencial, un bit a la vez, a través de un solo conductor o un par de conductores.
En otras actividades hemos visto como la comunicación serial nos permitía subir información a la placa ESP32. Hay varios conceptos que tenemos que tener claros para esta comunicación: tramas, baud rate y la sincronización.
La información se organiza en tramas. Cada trama suele comenzar con un bit de inicio y terminar con uno o más bits de parada. Estos bits ayudan al receptor a sincronizarse y a saber dónde comienza y termina cada trama.

La velocidad a la que se transmiten los bits se mide en baudios (baud rate). Representa la cantidad de cambios de estado (de 0 a 1 o de 1 a 0) por segundo. En Arduino se llama “Upload speed” y lo cneontramos en “Herramientas”. Por ejemplo, a una velocidad de 9600 baudios, se transmiten 9600 bits por segundo.

La sincronización es crucial en la comunicación serial, los dispositivos deben estar configurados para interpretar los bits en el momento correcto. La secuencia de bits y la velocidad deben ser conocidas y acordadas entre el transmisor y el receptor mediante protocolos. Algunos ejemplos son UART (Universal Asynchronous Receiver/Transmitter) y SPI (Serial Peripheral Interface).

## PARTE 1

Para esta práctica vamos simplemente a probar como funciona la comunicación de la placa con el ordenador para, en próximas prácticas, explotar esta funcionalidad. 

**(2) Material y explicación de cada componente**

- Placa conectada a PC vacía

**¿Que debemos hacer?**

Para poder observar la salida de información, debemos acudir a herramientas > Monitor serie y aparecerá una pestaña extra junto a la de “salida” por la que siempre leemos las incidencias con la placa.
Pon el monitor serial en “115200 baud” para que funcione.

**PREGUNTAS**

**1 ¿Que aparece en serial monitor?**

Texto configurado en el programa

Tiempo en segundos

Mensajes repetitivos si están dentro del loop()


**2 Pulsa los botones de boot+EN que hay en la placa de Arduino, ¿qué ocurre? Ahora pulsa solo EN, ¿qué ha ocurrido? ¿para qué nos puede servir esto?**

BOOT + EN → La placa entra en modo programación (modo carga).

Solo EN → La placa se reinicia (reset).

**2.1¿Para qué sirve?**

Reiniciar el programa cuando hay errores.

Forzar el modo carga si el ordenador no detecta bien la placa.

**3 ¿Qué indica la linea de código “Serial.begin(115200);”?**

Indica que se inicia la comunicación serial a una velocidad de 115200 baudios.
Serial.begin() → Inicia la comunicación.

115200 → Velocidad de transmisión en bits por segundo.

**4 Averigua que significa “%.1f s\n“.**

% : Indicador de formato


.1f : Número decimal con 1 cifra después del punto


s : Se añade la letra “s” (segundos)


\n :  Salto de línea


## PARTE 2

Una pantalla LCD1602 típica puede mostrar 2 líneas de caracteres en 16 columnas y es capaz de mostrar números, letras, símbolos, código ASCII, etc. A continuación, puedes ver los pines de los que dispone:
Como puedes ver son muchos pines para tener controlados así que se simplifica en la versión I2C, que conecta la entrada en serie y la salida en paralelo, lo cual nos permite usar solo 4 líneas para operar la pantalla:
El chip IC de serie a paralelo utilizado en este módulo es PCF8574T (PCF8574AT), y su dirección I2C predeterminada es 0x27(0x3F).

**(2) Material y explicación de cada componente**

- 4 jumpers de tipo hembra-macho
- La pantalla LCD


**¿Que debemos hacer?**

Revisa la información del capítulo 20 del libro:
Conecta la pantalla tal y como se muestra en el circuito anterior
En el Arduino IDE incluye la librería que puedes encontrar en Github, busca el paquete de LiquidCrystal_I2C.zip y añádelo al IDE para que funcione.
Pon el “Upload speed” de “Herramientas>Upload speed” a 115200
NO utilices el puerto 12 de la GPIO 
Usa el código que encuentres en el capítulo.


**PREGUNTAS**

**1 Revisa las conexiones en el circuito eléctrico:**

SCL			13
SDA			14
VCC			Positivo
GND			Negativo


**2 ¿Que hace la función “lcd.print()”? ¿Y “lcd.clear”?**

Clear: Borra completamente la pantalla.
Print: Muestra texto o números en la pantalla LCD.

**3 Por último, busca como conseguir que el mensaje de la primera fila se desplace de izquierda a derecha o a la inversa.**

lcd.setCursor(columna, fila); →  (0,0)

---

**(3) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

![IMG_4096](https://github.com/user-attachments/assets/e151ca5a-6804-4411-8e1f-2a84a261569c)


---

**(4) Imagen para la entrada del blog o proyecto**

![IMG_4097](https://github.com/user-attachments/assets/560cd874-8285-4490-b55a-38453728319b)

---

## PARTE 3

Un higrotermógrafo es un instrumento de medición utilizado para registrar y monitorizar las variaciones de temperatura y humedad relativa en el tiempo. 

Su diseño combina las funciones de un termógrafo (para medir la temperatura) y un higrógrafo (para medir la humedad relativa).
En nuestro proyecto utilizaremos el dispositivo DHT11 que tiene 4 pines de los cuales el SDA es el que registra los datos por el pin, el VCC y el GND son los que le ofrecen la energía y cierran el circuito.

**PREGUNTAS**

**1 Primero prueba que el código funciona por monitor serial. Prueba a soplar sobre el sensor para modificar los valores de humedad.**

Aumenta la humedad relativa

Puede variar ligeramente la temperatura

**2 Busca que hace esta linea “DHTesp dht; “ al principio del código. ¿Que es un objeto en programación y que es lo que hace?**

Es una instancia de una clase.

Permite usar funciones asociadas al sensor.

**3 Prueba a codificar los valores para que muestre en la primera fila la temperatura en grados Kelvin y en la segunda fila en grados Farenheit.**

Programalo de tal forma que se muestre algo así:
Temp: 303,15ºK
Temp: 86ºF

![IMG_4100](https://github.com/user-attachments/assets/72f4873f-d5ca-4519-ad0f-16c7a8d7c1b6)


**(3) Esquema del circuito como se muestra mas abajo**

<img width="521" height="376" alt="Captura de pantalla 2026-02-20 125136" src="https://github.com/user-attachments/assets/0800ce39-9887-4042-90f0-b48cf460ad66" />


**(4) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**


![IMG_4099](https://github.com/user-attachments/assets/8a8c7e0b-c0af-43f1-b6ec-191ef4b2fb51)

--

**(5) Video de la practica**


https://github.com/user-attachments/assets/3ae8ab58-ef58-4ff9-9a7f-d11ce1928cf6


**(6) Imagen para la entrada del blog o proyecto**

![IMG_4100](https://github.com/user-attachments/assets/57bcbda4-c379-429e-b5b5-933865f0b885)

</details>

<details>
<summary>Actividad_6</summary>
<br>
	
## A6-WIFI

**(1) Objetivo de la práctica**

El objetivo principal de esta práctica es aprender a configurar y utilizar la conectividad WiFi del ESP32 en distintos modos de funcionamiento, comprendiendo cómo se comunica un dispositivo IoT dentro de una red.

---

## PARTE 1

El objetivo del modo Station es aprender a configurar el ESP32 como cliente WiFi, conectándolo a una red inalámbrica existente (router), obteniendo una dirección IP automática mediante DHCP y verificando la comunicación con otros dispositivos de la red.

**(2) Material y explicación de cada componente**

- Placa conectada a PC vacía

**¿Que debemos hacer?**

Tienes que poner el SSID y la PASSWORD de una red WiFi. A continuación, abre el serial monitor y lo pones a 115200 baudios. Una vez hecho esto, compilas el script previamente escrito.


**PREGUNTAS**

**¿A qué red te has podido conectar? Es 5G, 2.4G? Explica.**

El ESP32-S3 solo es compatible con redes 2.4 GHz, no con 5 GHz.
Por tanto, la conexión debe realizarse a una red 2.4G.

La diferencia principal:
2.4 GHz → Mayor alcance, menor velocidad.
5 GHz → Mayor velocidad, menor alcance.
ESP32 trabaja únicamente en banda 2.4 GHz.

**Verifica el uso de las librerías que aparecen en el código. ¿Son necesarias las tres: WiFi.h, WiFiClient.h, WiFiClientSecure.h)?**

Para este ejemplo básico solo es necesaria WiFi.h.
Las otras dos no son imprescindibles si no realizamos conexiones TCP o HTTPS.

**¿En qué casos utilizaría las librerías de arduino WiFiClient.h y WiFiClientSecure.h?**

WiFiClient.h → Cuando queremos que el ESP32 actúe como cliente y se conecte a un servidor (por ejemplo enviar datos a una API REST).

WiFiClientSecure.h → Cuando la conexión es HTTPS (segura con certificado SSL).

**¿Es posible seleccionar el canal de comunicación de la WiFi? Argumenta.?**
	
En modo Station no directamente (lo gestiona el router).
En modo Access Point sí podemos hacerlo con:
WiFi.softAP(ssid, password, channel);
En 2.4 GHz los canales van del 1 al 13.

**Prueba la conectividad entre un dispositivo como e PC o el móvil a la IP que te brinda el ESP32.**

Una vez obtenida la IP del ESP32:

- Abrimos navegador.

- Escribimos la IP mostrada en el Monitor Serie.

- Si hay servidor web cargado, accederemos correctamente.

<img width="1919" height="1037" alt="image (4)" src="https://github.com/user-attachments/assets/eff79e49-aa16-4369-bfd9-af4c55c12f43" />

---

## PARTE 2

El objetivo del modo Access Point (AP) es aprender a configurar el ESP32 como punto de acceso WiFi, creando su propia red inalámbrica independiente del router.

**(2) Material y explicación de cada componente**

- Placa conectada a PC vacía

**¿Que debemos hacer?**

En este caso vamos a configurar nuestro ESP32 pero esta vez como un Access Point. Cuando el ESP32-S3 selecciona el modo AP, crea una red de punto de acceso que está separada de Internet y espera para que se conecten otros dispositivos WiFi. 


**PREGUNTAS**

**¿Cuál es el uso de softAPConfig? Argumenta**

WiFi.softAPConfig(local_IP, gateway, subnet);

- IP estática del ESP32

- Gateway

- Máscara de subred


Sirve para controlar la red creada por el ESP32.

**¿Cómo puedo conocer la cantidad de dispositivos conectados a mi AP? Para ello investiga el uso de WiFi.softAPgetStationNum() y añade las líneas necesarias al código.**

WiFi.softAPgetStationNum();


**¿Qué método me permite visualizar la dirección IP de la interfaz de red del punto de acceso?**

WiFi.softAPIP()

**¿Qué nos permite la opción c_str() en el código?**

WiFi.softAPmacAddress().c_str();


---

**(3) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

<img width="1919" height="1033" alt="image (5)" src="https://github.com/user-attachments/assets/a8dae836-14fb-42f7-a956-7d45d5bb3b30" />

---


## PARTE 3

**(1) Objetivo de la práctica**

El objetivo del modo AP + Station es aprender a combinar ambos modos de funcionamiento simultáneamente, permitiendo que el ESP32:

Se conecte a Internet a través del router.

Cree su propia red WiFi para otros dispositivos.

Actúe como puente de comunicación entre redes.

**(2) Material y explicación de cada componente**

- Placa conectada a PC vacía

**PREGUNTAS**

Compila y testea la conexión.
Añade el código correspondiente para acceder a la página web

**(3) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

<img width="1919" height="1017" alt="image (6)" src="https://github.com/user-attachments/assets/9df2ce3a-97ab-4243-9f6e-1d143d41cb63" />

--


## PARTE 4

**(1) Objetivo de la práctica**

El objetivo de este apartado es implementar un servidor web en el ESP32, comprendiendo el funcionamiento básico del protocolo HTTP y la creación de páginas web dinámicas desde el microcontrolador.

Cuando alguien se conecta a nuestro servidor se invoca una función y otra cuando se genera un error. Estas funciones las podemos llamar como queramos pero mejor si utilizamos la denominación estándar. Por supuesto, que las tenemos que crear y agregar como otras funciones que ya hemos utilizado.


**(2) Material y explicación de cada componente**

- Placa conectada a PC vacía

**PREGUNTAS**

**Explica brevemente los diferentes parámetros que se envían en las líneas siguientes: 
server.send(200, "text/html", SendHTML("Hola a todos")); 
server.send(404,"text/plain", "No hay respuesta");**

server.send(200, "text/html", SendHTML("Hola a todos"));

- 200 → Código HTTP correcto (OK)

- text/html → Tipo de contenido

- SendHTML("Hola a todos") → Contenido enviado


server.send(404,"text/plain", "No hay respuesta");

- 404 → Error, página no encontrada

- text/plain → Texto simple

- "No hay respuesta" → Mensaje mostrado

**Añade las líneas de código correspondientes al servidor web. Cambia el puerto de comunicación de la página web.**


**(3) How To + Codigo explicado: uso de las variables, funciones y demas componentes del codigo**

<img width="1919" height="1010" alt="image (7)" src="https://github.com/user-attachments/assets/da2da2f4-5b4f-4267-a08a-8e032dbb58cb" />

--


**(6) Imagen para la entrada del blog o proyecto**

![IMG_4173](https://github.com/user-attachments/assets/8c7457c7-f19e-4d28-9e9d-a97222a2cd94)

</details>

<details>
	<summary>PROYECTO</summary>
	
https://es.aliexpress.com/item/1005008005112441.html?spm=a2g0o.productlist.main.3.49815PYP5PYPU4&algo_pvid=c9df27e4-4ec3-462e-a19c-4d10c06e8dc6&algo_exp_id=c9df27e4-4ec3-462e-a19c-4d10c06e8dc6-		2&pdp_ext_f=%7B%22order%22%3A%225285%22%2C%22eval%22%3A%221%22%2C%22fromPage%22%3A%22search%22%7D&pdp_npi=6%40dis%21EUR%2114.16%210.99%21%21%21111.74%217.80%21%40211b6a7a17721932195753311ea003%2112000043231311504%21sea%21ES%210%21ABX%211%210%21n_tag%3A-29910%3Bd%3Aa26c3c1%3Bm03_new_user%3A-29895%3BpisId%3A5000000197846831&curPageLogUid=MiK9wu0n3W2F&utparam-url=scene%3Asearch%7Cquery_from%3A%7Cx_object_id%3A1005008005112441%7C_p_origin_prod%3A

https://youtu.be/FvsWhVsc19c

</details>

<details>
	<summary>Plan De Trabajo</summary>
	
	<table>
  <tr>
    <th style="width: 200px;">FASE</th>
    <th style="width: 100px;">10-16 Mar</th>
	<th style="width: 200px;">17-23 Mar</th>
    <th style="width: 100px;">24-30 Mar</th>
	<th style="width: 100px;">31 Mar-6 Abr</th>
	<th style="width: 200px;">7-13 Abr</th>
    <th style="width: 100px;">14-20 Abr</th>
	<th style="width: 200px;">21-27 Abr</th>
    <th style="width: 100px;">28-30 Abr</th>
	<th style="width: 100px;">1-3 May</th>
  </tr>
</details>
</details>
</details>

ordenar puntos
Explicar porque PIhole
 - Todos los servicios igual (mirar guia manual)
Apache tambien
PHP e "incidencias de PHP explicar  y solución"
API explicar las opciones que teniamos y porque
Mayus minus "Diagrama de red"
