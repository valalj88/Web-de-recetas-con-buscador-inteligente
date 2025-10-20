<div align="center">

# DelicIA’S

<Logo.png>
</div>

---

## 2. Introducción
<details>
  <summary>Haz clic aquí para ver más</summary>
	<br>
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
</details>

---

## 3. Briefing de ideas
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

## 4. Arquitectura del software
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

## 5. Tecnologías a utilizar
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

## 6. Red
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic

---

###  a. Diagrama De La Red
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

### b. Mapa Físico
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

### c. Mapa Lógico
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>
</details>

---

## 7. Web
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic

---

### a. Diseño
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

### b. Mockup
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

### c. Mapa De Navegabilidad
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>
</details>

---

## 8. Servicios
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic


### a. DNS
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>


### b. DHCP
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>


### c. Apache
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>


### d. Firewall
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>


### e. Copias De Seguridad
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>
</details>

---

## 9. Conclusiones
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>

---

## 10. Bibliografia
<details>
  <summary>Haz clic aquí</summary>
  Contenido oculto que se despliega al hacer clic.
</details>


## Estructura Del Informe
"Información para almacenar en la base de datos de mi proyecto"     


### 1. Descripción general del proyecto web
**¿De qué trata tu web?**

DelicIA’s es una plataforma de recetas de cocina que integra inteligencia artificial. Los usuarios ingresan ingredientes o preferencias (por ejemplo, “pollo y brócoli, cena ligera”) y la IA genera una receta personalizada con pasos, tiempos y consejos.


**¿Qué funcionalidades ofrecerá a los usuarios?**

- Los usuarios podrán acceder al registro o inicio de sesión, 
- Búsqueda de recetas generadas por una IA, 
- Almacenar recetas favoritas y las que te gusten, 
- Poner reseñas de las recetas, sugerir ingredientes, (vegano, sin gluten, etc.), 
- Opción de generar imágenes del plato (IA de imágenes), 
- Búsqueda de recetas por filtros.


### 2. Identificación de entidades principales###
¿Qué elementos importantes hay en tu web que necesitan almacenarse?

Usuarios, recetas, ingredientes, comentarios, valoraciones, favoritos.


**¿Qué tema de información almacena? -> Esto nos dará el nombre de la Tabla.**
	
- Los datos de cada persona registrada 
- Información de cada receta generada
- Lista de ingredientes. 
- Opiniones de los usuarios.
- Puntuaciones.
- Relación usuario receta.

	
**¿Por qué necesitas guardarla en la base de datos? -> Esto nos ayudará a entender si es necesario guardar esta información o no.**

- Control de acceso
- Personalización de recetas
- Historial de la web
- Guardar las recetas para consultas posteriores y permitir que otros usuarios las vean
- Estandarizar ingredientes para búsquedas y filtrados
- Permitir feedback y participación en cada receta 
- Calificar recetas y mostrar ranking
- Que cada usuario pueda marcar recetas como favoritas


### 3. Datos que se deben guardar de cada entidad (atributos)

Para cada entidad identificada en el punto anterior, describe qué información concreta se necesita guardar.


**Tabla: Usuarios**

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

**Tabla: Recetas**

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

**Tabla: Ingredientes**

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

**Tabla: Receta_Ingrediente**

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
	<td>TINYNT - 1 A 5</td>
</table>

*FAVORITOS**
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


Usuario – Favoritos – Receta: 
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

**Ingredientes**
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


### 6. Reflexiones, dificultades y dudas que tienes sobre la base de datos

**Decisión sobre recetas IA:**
 Guardar la receta generada para no perder resultados buenos, en vez de generarla en vivo cada vez.
**Imágenes:**
 Mejor almacenar sólo la URL en un servidor, no el BLOB en la base de datos.
**Prompt:**
 Conviene guardar el prompt exacto para posibles reentrenamientos y análisis futuros.
