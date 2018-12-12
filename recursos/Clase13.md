composer
===
instalación

```
mkdir bin
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=bin --filename=composer
```

uso

````
php bin/composer install
`````
para actualizar nuestras librerias con las que esten en el composer.lock

````
php bin/composer update
```
para actualizar el composer.lock a las ultimas versiones (y luego actualiza nuestras librerias)


AGILE-BOARD
===
!img(agile_board.png)