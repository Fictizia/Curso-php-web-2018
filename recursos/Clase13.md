composer
===
instalación

entrar a la carpeta php

```
mkdir bin
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php composer-setup.php --install-dir=bin --filename=composer
rm composer-setup.php
```

para comprobar que está correctamente instalado

````
docker exec -it php_web_C12 php bin/composer -v`````

si aparece en la pantalla la lista de instrucciones disponible, esta ok
como docker-compose, necesita un fichero de configuración se llama composer.json(al especificar lo que queremos en lugar de como se hace, se dice que es declarativo)


uso

````
docker exec -it php_web_C12 php bin/composer install
`````
para actualizar nuestras librerias con las que esten en el composer.lock

````
docker exec -it php_web_C12 php bin/composer update
```
para actualizar el composer.lock a las ultimas versiones (y luego actualiza nuestras librerias)

 
 crear un fichero composer.json en el mismo directorio donde está docker-compose.yml
 