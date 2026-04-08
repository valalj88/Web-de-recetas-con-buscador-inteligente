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

### - Sistema de recuperación de contraseña
**Diseño del proceso de recuperación de contraseña.**
<br>
Se definirá el flujo necesario para recuperar la contraseña: petición del correo, verificación y formulario para la nueva clave.
**Programación de la recuperación y restablecimiento en PHP.**
<br>
Se programará el sistema que permita al usuario restablecer su contraseña, incluyendo el re-cifrado con "password_hash()"
<br>

## 6_ Instalación y configuración del servidor web en Debian

**Preparación del entorno con sistema operativo Debian.**
<br>
Se realizará la instalación inicial del sistema operativo Debian y la configuración básica necesaria para alojar el servidor web.
<br>

## 7_ Instalación y configuración de Apache

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

## 9_ Implementación del campo de consulta del usuario
**Añadir un campo de texto para consultas.**
<br>
Se agregará un cuadro de texto (input o textarea) para que el usuario pueda escribir su consulta, como ingredientes o el tipo de receta que desea obtener.
<br>

## 10_ Creación del botón para enviar la consulta
**Incorporación del botón de envío.**
<br>
Se implementará un botón que permitirá al usuario enviar la información escrita, enviando la consulta al sistema para que la IA pueda procesarla.
<br>

## 11_ Integración con la IA para generar respuestas
**Conexión del formulario con la IA entrenada.**
<br>
Se configurará el sistema para que, una vez enviada la consulta, la IA procese el texto introducido por el usuario y genere automáticamente una receta basada en su prompt.
<br>

## 12_ Acceso a los menús y secciones de la web
**Diseño de los accesos a las categorías de la web.**
<br>
Se añadirán enlaces o botones en la página principal para acceder a diferentes categorías como valoraciones, fotos de recetas, platos destacados, etc.
<br>
</details>

---

<details>
  <summary>🧱 Arquitectura del software</summary>
	<br>
<details>
	
<summary>Diagrama de gantt</summary>
<br>
Un diseño de Gantt es una tabla o gráfico que muestra las tareas de un proyecto colocadas en una línea de tiempo, indicando cuándo empiezan, cuándo terminan y cuánto duran. Es útil para un proyecto porque permite ver de forma clara la planificación, organizar el trabajo por fases, detectar retrasos y controlar el avance. Gracias al diagrama de Gantt, es más fácil gestionar el proyecto y asegurarse de que todo se haga a tiempo.
<br>

<img src="https://github.com/valalj88/Web-de-recetas-con-buscador-inteligente/blob/main/Archivos/DiagramaDeGantt.png" alt="Página Tareas" width="1300">	

<br>


[Diagrama de Gantt DelicIA's](https://docs.google.com/spreadsheets/d/1v8SxtipMUR5VIm4CUHCaQV0vc51-1jquD_x6YIupjv8/edit?usp=sharing)
	
</details>
<br>
<details>
<summary>Funcionalidades a considerar</summary>
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
	<summary>Estudio de la base de datos</summary>	
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
  <summary>🖥️ Web</summary>
<br>
<details>
  <summary>a. Teoría del color DelicIA's</summary>
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
  <summary>b. Diseño y mockup</summary>
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
  <summary>c. Mapa de navegabilidad</summary>
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
	
  <summary>Pi-hole</summary>
	
## Pi-hole

Para empezar a realizar la instalación de nuestro **pi-hole** en ubuntu deberemos tener un ubuntu server instalado previamente.

Si ya esta instalado empezaremos a introducir comandos.

El primer paso es introducir el comando “sudo nano /etc/netplan/00-installet-config.yaml” para ver la configuración de la red de la maquina.

**Ubuntu 20.04** utiliza Netplan para configurar la red en el sistema operativo. Netplan configura los parámetros de red del host a partir de ficheros de configuración YAML.
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
<br>
<details>
  <summary>Apache</summary>
	<br> 

# APACHE
Apache es un programa que funciona como servidor web, se encarga de entregar las páginas y recursos de un sitio cuando un usuario los solicita desde su navegador. Es útil para un proyecto porque permite publicar una web o aplicación de forma segura y estable, gestionar el acceso de los usuarios y asegurar que el contenido se cargue correctamente. Con Apache, tu proyecto puede estar disponible para cualquiera que necesite acceder a él desde internet o desde una red local.
Apache se encarga de:

- Gestionar peticiones HTTP y HTTPS
- Servir archivos HTML, CSS, JavaScript y PHP
- Conectar la web con PHP y la base de datos

---

## ¿En qué equipo se instala y qué requisitos necesita?

### Sistema operativo

Debian

### IP del servidor

192.168.1.10

??

### Recursos utilizados

- CPU: 1 núcleo
- RAM: 1 GB
- Disco: 10 GB

  ??

### Dependencias necesarias

- PHP
- Módulo mod_php
- Acceso a MySQL

---

## ¿Qué parámetros básicos debo configurar?

### Puertos

- 80 → HTTP
- 443 → HTTPS

### Directorio principal

/var/www/html

??

### Archivos de configuración

/etc/apache2/apache2.conf  
/etc/apache2/sites-available/000-default.conf

??

### Virtual Hosts

Permiten alojar diferentes webs en el mismo servidor.

---

## ¿Cómo verifico que funciona correctamente?

### Comprobar estado del servicio

systemctl status apache2

### Probar desde navegador

http://192.168.1.10

??

### Ver logs

/var/log/apache2/access.log  
/var/log/apache2/error.log

<br>

[Instalación de servidor Apache en Debian - Hector Abad y Alejandro Valero.pdf](https://github.com/user-attachments/files/25045002/Instalacion.de.servidor.Apache.en.Debian.-.Hector.Abad.y.Alejandro.Valero.pdf)

</details>
<br>
<details>
  <summary>PHP</summary>
	<br> 
# PHP

PHP es un lenguaje de programación del lado del servidor que se usa principalmente para crear páginas web dinámicas. Se ejecuta en el servidor y genera contenido HTML que luego se envía al navegador. 
Es muy común para manejar formularios, bases de datos y sistemas web como WordPress.  
En nuestro proyecto PHP se utiliza para:

- Procesar formularios de la web
- Conectar con la base de datos MySQL
- Gestionar usuarios y recetas
- Ejecutar la API que genera recetas

---

## ¿En qué equipo se instala y qué requisitos necesita?

### Sistema operativo

Debian

### IP del servidor

192.168.1.10

??

### Recursos mínimos

- CPU: 1 núcleo
- RAM: 1 GB
- Disco: 10 GB

  ??

### Dependencias necesarias

- Apache
- Módulo php para Apache
- Extensión php-mysql

---

## ¿Qué parámetros básicos debo configurar?

### Archivos principales

/etc/php/*/apache2/php.ini

??

### Directorio de scripts

/var/www/html

??

### Extensiones necesarias

php-mysql  
php-curl  
php-json

---

## ¿Cómo verifico que funciona correctamente?

### Comprobar versión

php -v

### Crear archivo de prueba

info.php

Contenido:

<?php phpinfo(); ?>

Acceder desde navegador:

http://192.168.1.10/info.php
??

</details>
<br>
<details>
  <summary>d. Firewall</summary>
<br>
Un firewall es un sistema que controla qué tráfico puede entrar o salir de una red, actuando como una especie de “muro de seguridad” que bloquea accesos no autorizados. Es útil para un proyecto porque protege los equipos y datos de ataques, virus y conexiones sospechosas, asegurando que solo pasen las comunicaciones permitidas. Gracias al firewall, el proyecto funciona de forma más segura y estable.
</details>
<br>
<details>
  <summary>TrueNAS</summary>
<br>
	
# Servicio: TrueNAS

## ¿Qué función cumple exactamente este servicio dentro de la red?

TrueNAS es un sistema operativo especializado en almacenamiento en red y copias de seguridad.
Su función dentro de la red es centralizar el almacenamiento de datos y permitir que otros servidores o equipos puedan guardar, compartir y acceder a archivos.
En nuestro proyecto, TrueNAS se utiliza para:

- Almacenar copias de seguridad del servidor web y la base de datos.
- Guardar archivos del proyecto.
- Permitir acceso a archivos desde otros servidores de la red.
- Mantener los datos organizados y protegidos.

El problema que resuelvemos con TrueNAS es evitar que nuestros datos estén repartidos en distintos equipos, permitiendo gestionar todo el almacenamiento desde un único servidor centralizado.

## ¿Que vamos a guardar?

| Servidor | Servicio | Directorio + Archivo de configuración |
|----------|----------|---------------------------------------|
| Ubuntu Server | Pi-hole | /etc/pihole/ |
| Ubuntu Server | Pi-hole | /etc/dnsmasq.d/ |
| Debian | Apache2 | /etc/apache2/apache2.conf |
| Debian | PHP | /etc/php/ |
| Ubuntu Server | MySQL | /etc/mysql/mysql.conf.d/mysqld.cnf |
| TrueNAS | NAS | Configuración desde la interfaz web |

---

## ¿En qué equipo se instala y qué requisitos necesita?

Necesitamos que sea virtualizado por tanto instalamos nuestro servidor de TrueNAS en VirtualBox

### Sistema operativo

TrueNAS CORE ¿POR QUÉ?

TrueNAS CORE es preferido por nuestra parte ante TrueNAS SCALE ya que tiene más estabilidad. Con esto nos referimos a que históricamente es más maduro y estable para almacenamiento puro (NAS tradicional).
Y en cuanto al rendimiento a veces es más eficiente que SCALE. Aunque SCALE sea el nuevo CORE es el clásico y más cómodo.

### IP del servidor

?? Pendiente

### Recursos mínimos

- CPU: 2 núcleos
- RAM: 8 GB (recomendado para ZFS)
- Discos:
  - 16 GB para el sistema
  - 50 GB
  - 50 GB

---

## ¿Qué parámetros básicos debo configurar?

### Puertos

- 80 / 443 → acceso a interfaz web
- 445 → SMB

**SMB** es un protocolo de red cliente-servidor que permite compartir archivos, impresoras y puertos serie entre computadoras

### Directorios de trabajo

Los datos se almacenan dentro de pools ZFS.

Ejemplo:

/mnt/pool_datos/backups  
/mnt/pool_datos/proyecto
??
Pendiente de confirmar

### Configuración

Se configura desde la interfaz web:

- Pools de almacenamiento
- Datasets
- Permisos
- Recursos compartidos

---

## ¿Cómo verifico que funciona correctamente?

### Acceso a la interfaz web

http://192.168.1.20

### Comprobación de red

ping 192.168.1.20

### Acceso a recursos compartidos

showmount -e 192.168.1.20
</details>

<br>

<details>
  <summary>d. API</summary>
<br>	

# Servicio: API de inteligencia artificial

# ¿Por qué usamos una API?

Porque después conectaremos esta IA a nuestra web mediante:

Backend (probablemente con PHP) para la seguridad de nuestra clave de la IA, ya que no dijo Quim que nos la podrían robar.
Servidor Apache
Base de datos MySQL

Así, cuando un usuario pida una receta, la web enviará una petición a la API y recibirá la receta ya estructurada.

---

## ¿Qué función cumple exactamente este servicio dentro de la red?

La API de Inteligencia Artificial haremos que se encargue de generar recetas automáticamente utilizando un modelo de IA. Este servicio permite que los usuarios de la web puedan obtener recetas completas generadas dinámicamente.

Las recetas generadas incluyen:

- Título del plato
- Descripción del plato
- Lista de ingredientes
- Pasos de preparación
- Tiempo estimado de elaboración

Cuando un usuario solicita una receta desde la página web, el servidor envía una petición a la API de IA y esta devuelve una receta generada en formato estructurado.

Este servicio da soporte a:

- Usuarios de la página web
- Backend de la aplicación web
- Sistema de generación de contenido dinámico

El problema que resuelve es evitar tener que crear manualmente todas las recetas, permitiendo generar nuevas recetas automáticamente.

---

## ¿Cuál hemos elegido?

Para implementar la generación de recetas se analizaron varias APIs de inteligencia artificial disponibles actualmente.

Las alternativas fueron:

- API de OpenAI (ChatGPT)
- API de Meta (Llama)
- API de Google Gemini (Gemini Studio)

Finalmente se decidió utilizar **Gemini Studio** por varios motivos:

- Ofrece una cuota gratuita más amplia, lo que permite realizar más peticiones sin consumir tokens rápidamente.
- Permite entrenar el comportamiento de la IA desde la propia plataforma, definiendo cómo debe responder, el formato de salida y el tipo de contenido generado.
- Nos facilita la creación de prompts personalizados sin tener que programarlos completamente desde cero.

En otras APIs como OpenAI o Meta era necesario diseñar manualmente todos los prompts y el control del formato de salida, lo que complicaba el desarrollo inicial del proyecto.

---

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

**Ingeniería de prompt**

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

</details>
</details>

---

<details>
  <summary>🌐 Red</summary>
<br>
	
# Diagrama de la red

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
  <summary>🗞️ Plan de contingencia</summary>

## PLAN DE CONTINGENCIA DEL SISTEMA

### 1. INTRODUCCIÓN

Este plan de contingencia tiene como objetivo garantizar la continuidad del servicio del sistema desarrollado, basado en una infraestructura con servidores Linux, servicios web (Apache, PHP), base de datos MySQL, sistema de filtrado Pi-hole y almacenamiento en TrueNAS.
Se definen los procedimientos a seguir ante posibles incidencias, así como las medidas preventivas y de recuperación necesarias para minimizar el impacto de fallos.

### 2. OBJETIVOS DEL PLAN

• Garantizar la disponibilidad del sistema en todo momento

• Minimizar el tiempo de inactividad

• Proteger la información y configuraciones críticas del sistema y la red

• Establecer procedimientos claros ante incidencias

• Asegurar una recuperación rápida y eficiente del proyecto

### 3. ALCANCE

Este plan cubre:

• Máquinas virtuales del sistema (ova's)

• Servidores Ubuntu y Debian

• Servicios: Apache, PHP, MySQL y Pi-hole

• Sistema de almacenamiento TrueNAS

• Copias de seguridad y restauración

### 4. IDENTIFICACIÓN DE RIESGOS

Principales riesgos del sistema:

• Caída del servidor

• Fallos en alguna máquina virtual

• Pérdida de datos

• Errores de configuración

• Ataques externos o malware

• Fallos de hardware (discos duros que tenemos y pendrive)

### 5. ANÁLISIS DE IMPACTO
   
| Riesgo                 | Impacto                                   | Nivel |
|------------------------|-------------------------------------------|-------|
| Caída del servidor     | Interrupción total del servicio web       | Alto  |
| Fallo de base de datos | Pérdida de acceso a la información        | Alto  |
| Error de configuración | Fallos en servicios                       | Medio |
| Ataque externo         | Compromiso de seguridad                   | Alto  |
| Fallo de hardware      | Pérdida de datos                          | Alto  |


### 6. RECURSOS CRÍTICOS

| Servidor | Servicio | Directorio + Archivo de configuración |
|----------|----------|---------------------------------------|
| Ubuntu Server | Pi-hole | /etc/pihole/ |
| Ubuntu Server | Pi-hole | /etc/dnsmasq.d/ |
| Debian | Apache2 | /etc/apache2/apache2.conf |
| Debian | PHP | /etc/php/ |
| Ubuntu Server | MySQL | /etc/mysql/mysql.conf.d/mysqld.cnf |
| TrueNAS | NAS | Configuración desde la interfaz web |

### 7. PLAN DE RESPUESTA ANTE INCIDENCIAS
**Ejemplo:** Se nos cae del servidor

• Detectar el problema mediante monitorización o fallo de acceso
• Reiniciar los servicios afectados
• Restaurar desde copia de seguridad si es necesario

### 8. PLAN DE RECUPERACIÓN
   
Cómo volveremos a la normalidad:

• Restauración de la máquina virtual desde copia de seguridad
• Reconfiguración o reinicio de los servicios (Apache, PHP, MySQL, Pi-hole)
• Verificación de que el sistema esté funcionando correctamente despsués de ejecutar los pasos anteriores.

Tiempos:

• Tiempo máximo de recuperación (RTO): 2 – 4 horas
• Pérdida de datos aceptable (RPO): 24 horas

### 9. COPIAS DE SEGURIDAD
    
Tipo de backup:

• Copias completas de las máquinas virtuales
• Copias de archivos de la configuración de los servicios

Frecuencia:

• Copia manual semanal
• Copias antes de cambios importantes

Ubicación:

• 2 discos duros externos
• 1 memoria USB
• TrueNAS

Herramientas utilizadas:

• TrueNAS
• Exportación manual de máquinas virtuales
• Copia directa de archivos

### 10. MEDIDAS PREVENTIVAS
    
- Firewall / Seguridad
- Configuración de red segura para evitar accesos no autorizados.
- Actualización periódica de sistema y servicios.
- Control de accesos
- Usuarios con permisos limitados.
- Revisión periódica del estado del sistema.
- Pi-hole
- Bloqueo de dominios maliciosos mediante filtrado DNS.
  
### 11. RESPONSABLES

| Rol              | Persona | Función                      |
|------------------|--------|-----------------------------|
| Administrador    | Alumno | Gestión del sistema         |
| Técnico soporte  | Alumno | Resolución de incidencias   |
| Seguridad        | Alumno | Control de accesos          |

### 12. PLAN DE COMUNICACIÓN

• Avisar al administrador del sistema sobre esta incidéncia
• Tiempo de respuesta: máximo 1 hora

### 13. PRUEBAS DEL PLAN

• Simulación de caída del servidor que nos hará hacer Alina

• Restauración desde copia de seguridad

• Verificación del sistema al completo

Expectativa de resultados: recuperación del sistema con éxito
Mejoras: optimizar tiempos de restauración

### 14. MANTENIMIENTO DEL PLAN

• Revisión periódica

• Actualización por el administrador del sistema

### 15. MEJORAS FUTURAS

• Automatización de copias de seguridad

• Mejora de nuestras medidas de seguridad

### 16. CONCLUSIÓN DEL PLAN DE CONTINGENCIA

Este plan de contingencia es fundamental para garantizar la continuidad del sistema ante fallos que podamos tener.
Nos permite actuar de forma rápida y organizada, reduciendo el impacto de incidencias.
Además, nos ha permitido comprender la importancia de la seguridad de un servicio, las copias de seguridad de una empresa y la planificación que se debe hacer en entornos reales.

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

