# DelicIA’S

Principalmente nosotros teníamos un par de ideas, entre ellas estaba hacer una página web que sirviera para estudiar los diferentes tipos de carnets de conducir pero hablando con los 
profesores y valorando nuestras ideas vimos que teníamos un alto porcentaje de que a mediados del proyecto este se nos pudiera cancelar por culpa de permisos que teniamos que solicitar de la DGT cosa que nosotros no podíamos
hacer nada, entonces fuimos a algo más difícil pero que nos gusta más ya que la idea es más innovadora, queríamos hacer una IA desde cero y entrenarla para hacer recetas, pero al final
hemos decidido coger una Ia ya hecha y entrenarla porque hacerla desde cero se nos complica y no tenemos los conocimientos suficientes.

Nuestro objetivo en este proyecto es desarollar nuestros conocimientos sobre la IA  y las WEBS ya que nos da curiosidad porque las usamos casi diariamente, también por así decirlo nos hace ilusión saber 
que somos capaces de hacer algo así y si en un futuro puede ser útil para la gente mejor, en un principio nos lo tomamos como un proyecto para estudiar pero estaría bien 
ver hasta dónde podemos llegar desarrollando nuestra idea.

Para poder desarrollar nuestro proyecto principalmente vamos a necesitar una plantilla de una IA para poderla entrenar para lo que querramos que responda y con que lenguaje y también una plantilla de una 
página web, cosa que ambas ya las tenemos a la mano, la plantilla de la página web estamos decidiendo cuál nos gusta más y nos va ser más útil. También necesitamos organizar 
todo de una manera adecuada para no liarnos, esto lo conseguiremos haciendo una bibliografía, desarrollar bien el trello con la información bien puesta.

 ESTRUCTURA DEL INFORME:
"Información para almacenar en la base de datos de mi proyecto"     


1. Descripción general del proyecto web
¿De qué trata tu web?


DelicIA’s es una plataforma de recetas de cocina que integra inteligencia artificial. Los usuarios ingresan ingredientes o preferencias (por ejemplo, “pollo y brócoli, cena ligera”) y la IA genera una receta personalizada con pasos, tiempos y consejos.


¿Qué funcionalidades ofrecerá a los usuarios?


Los usuarios podrán acceder al registro o inicio de sesión, 
Búsqueda de recetas generadas por una IA, 
Almacenar recetas favoritas y las que te gusten, 
Poner reseñas de las recetas, sugerir ingredientes, (vegano, sin gluten, etc.), 
Opción de generar imágenes del plato (IA de imágenes), 
Búsqueda de recetas por filtros.


2. Identificación de entidades principales
¿Qué elementos importantes hay en tu web que necesitan almacenarse?


Usuarios, recetas, ingredientes, comentarios, valoraciones, favoritos.


¿Qué tema de información almacena? -> Esto nos dará el nombre de la Tabla.
	
Los datos de cada persona registrada 
Información de cada receta generada
Lista de ingredientes. 
Opiniones de los usuarios.
Puntuaciones.
Relación usuario receta.
	








¿Por qué necesitas guardarla en la base de datos? -> Esto nos ayudará a entender si es necesario guardar esta información o no.


Control de acceso
Personalización de recetas
Historial de la web
Guardar las recetas para consultas posteriores y permitir que otros usuarios las vean
Estandarizar ingredientes para búsquedas y filtrados
Permitir feedback y participación en cada receta 
Calificar recetas y mostrar ranking
Que cada usuario pueda marcar recetas como favoritas




3. Datos que se deben guardar de cada entidad (atributos)

Para cada entidad identificada en el punto anterior, describe qué información concreta se necesita guardar.
Tabla: Usuarios

<table>
  <tr>
    <th style="width: 200px;">Columna 1</th>
    <th style="width: 100px;">Columna 2</th>
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

Tabla: Recetas

ID receta
 INT, PK
Título
VARCHAR 150
Descripción
TEXT
Pasos
TEXT
Imagen URL
VARCHAR 255, opcional si se genera una imagen
ID usuario
INT, FK Usuario e id usuario 
Fecha creación
DATETIME

Tabla: Ingredientes

ID ingrediente
 INT, PK
Nombre
VARCHAR 100
Tipo
VARCHAR 50

Tabla: Receta_Ingrediente

ID Receta
 INT, FK
ID Ingrediente
INT FK
Cantidad
VARCHAR 50          EJ: “2 CUCHARADAS”

Comentarios
ID comentario
INT,PK
ID receta
INT,FK
ID usuario
INT,FK
Texto
TEXT
Fecha
DATETIME

Tabla: Valoraciones
ID valoración
INT, PK
ID receta
INT, FK
ID usuario
INT, FK
Puntuación
TINYNT - 1 a 5

Favoritos

ID favorito
INT, PK
ID usuario
INT, FK
ID receta
INT, FK
Fecha guardado
DATETIME



4. Relaciones entre las entidades
¿Cómo se relacionan unas entidades con otras?


Usuario – Receta: 
Un usuario puede crear muchas recetas, pero cada receta pertenece a un solo usuario.


Receta – Ingrediente:
 Una receta tiene muchos ingredientes y un ingrediente puede usarse en muchas recetas.


Receta – Comentarios: 
Cada receta puede tener muchos comentarios, pero cada comentario está asociado a una sola receta.


Receta – Valoraciones : 
Cada receta puede recibir muchas valoraciones, pero cada valoración pertenece a una sola receta.


Usuario – Favoritos – Receta: 
Un usuario puede tener muchas recetas favoritas, y una receta puede ser favorita de muchos usuarios.




5. Ejemplo de datos 

Usuario
ID_usuario
Nombre 
Gmail
Registro
1
Hector Abad
Hector555@gmail.com
30-09-2025

Recetas
ID_receta
Nombre receta
Descripción
Pasos
ID_usuario
Fecha_creacion
1
Macarrones
Cocina rápida
1.hervir los macarrones 
2. escurrirlos
1
30-09-2025

Ingredientes
Id Ingrediente 
Nombre 
Tipo
1
Macarrones
Pasta
2
Tomate
Salsa

Cantidad
Id receta
id ingrediente 
Cantidad
1
1
200g
1
2
10g


Comentarios
Id Comentario
Id Receta
Id Usuario
Texto
Fecha
1
1
1
Rico y rapido
30-09-2025

Valoraciones
ID Valoración
ID Receta 
ID Usuario
Puntuación
1
1
1
5



6. Reflexiones, dificultades y dudas que tienes sobre la base de datos


Decisión sobre recetas IA:
 Guardar la receta generada para no perder resultados buenos, en vez de generarla en vivo cada vez.
Imágenes:
 Mejor almacenar sólo la URL en un servidor, no el BLOB en la base de datos.
Prompt:
 Conviene guardar el prompt exacto para posibles reentrenamientos y análisis futuros.
