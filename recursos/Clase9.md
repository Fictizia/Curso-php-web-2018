
paso a paso
===

* actualizar Git:
===

- colocarse en el directorio raiz del curso
(Curso-php-web-2018)
```
git pull origin master
``` 
actualiza nuestra rama con los cambios
```
git status 
```
nos dice lo que hemos cambiado

```
git commit -m"mensaje de commit"
```
nos hace un commit 

```
git push origin master
```
sube los cambios al servidor

y ya estamos listos para seguir


* levantar docker:
===

* ir a la carpeta ejemploCrud de la carpeta de ejercicios

```
docker-compose up -d
```
* comprobar maquinas:
```
docker ps
```
* conectar la base de datos (los datos estan en docker-compose)
===
```
host: localhost
port: 9906
user: root
pass: rootsecretpass
```

* crear tabla de users 
copiar, pegar y ejecutar en mysqlWorkbench el contenido del fichero create.sql que está en el directorio basedatos

* insertar valores
copiar, pegar y ejecutar en mysqlWorkbench el contenido del fichero fixtures.sql que está en el directorio basedatos


* entrar desde el navegador 

localhost:8100
(el puerto se puede consultar en el fichero docker-compose.yml)