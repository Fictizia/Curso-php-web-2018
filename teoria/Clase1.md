Introducción
====
* terminal de linux 
    * command + espacio y buscar terminal
    * comandos basicos de linux:
        * ir a algun directorio 
            ```
            $ cd nombre_directorio 
            ```
        * saber en que directorio estoy 
            ```
            $ pwd
            ```
        * crear directorio 
            ```
            $ mkdir nombre_directorio 
            ```
        * listar el contenido del directorio: 
            ```
            $ ls -lhart
            ```
        
            optiones de ls : https://en.wikipedia.org/wiki/Ls

        * crear un fichero 
            ```
            $ touch nombre_fichero 
            ```
          tambien se crea un fichero si le redirijimos la salida de otro:
            ```
            $ echo 'hola' > nombre_fichero 
            ```
          

Primer Script y su test
====
* ejecutamos scripts de php
    * para saber la version de php:
        ```
        $ php -v
        ``` 
    * para ejecutar un script de php:
        ```
        $ php XXXXXX.php
        ```

Arrancar el servidor web
===
* para ejecutar el servidor web integrado en php (para servir archivos de un directorio concreto, lo más sencillo es arrancar el servicio desde ese directorio):
    ```
    $ cd Clase_1
    
    $ php -S localhost:8000
    ```
    