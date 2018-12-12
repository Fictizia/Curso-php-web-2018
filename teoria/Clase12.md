 Relacionar entidades:
Base de datos: 
===
modelo entidad relacion
===
https://es.wikipedia.org/wiki/Modelo_entidad-relaci%C3%B3n
https://www.genbeta.com/desarrollo/fundamento-de-las-bases-de-datos-modelo-entidad-relacion

relaciones 1:n. 
===
https://fmhelp.filemaker.com/help/17/fmp/es/index.html#page/FMP_Help%2Fone-to-many-relationships.html%23

la id se pone en el sitio donde solo hay uno

claves ajenas
===
https://programacion.net/articulo/integridad_referencial_en_mysql_263/4


ALTER TABLE
===
añadir un campo a una tabla
http://www.mysqltutorial.org/mysql-add-column/

añadir una clave ajena a una tabla
http://www.mysqltutorial.org/mysql-foreign-key/


Principios de diseño de codigo
===
repaso: clases
===
https://rimorsoft.com/clases-y-objetos-en-php

Diseño de responsabilidades: filtrado de caracteres peligrosos
===
preparación de statements

http://php.net/manual/es/mysqli.prepare.php

Diseño de responsabilidades: normalizador. 
===
su responsabilidad es pasar de un formato de entrada a un formato de datos en nuestro dominio de datos, y hacer el camino contrario: de un objeto a un array
o de un objeto a un conjunto de variables.

ejemplos: 
* crear un objeto desde un array
* crear un objeto desde una variable
y al revés


Diseño de responsabilidades: validador. 
===
comprueba que los datos de un objecto son validos en nuestro dominio de datos.
Suele ser responsabilidad del modelo.


Excepciones
===
diferencia entre errores y excepciones
https://desarrolla2.com/post/manejo-de-excepciones-en-php

capturar excepciones: bloque try-catch
