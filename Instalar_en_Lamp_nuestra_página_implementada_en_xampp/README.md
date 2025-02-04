# Migración de Página XAMP a LAMP

Dentro de este fichero creamos nuestra página en nuestro servidor local y le ponemos esta IP

![](1.png)

![](2.png)

Creamos este fichero en la ruta /var/www/html y lo copiamos en la carpeta donde va a estar toda nuestra estructura de la página

![](3.png)

![](4.png)

Entramos a etc/apache2/sites-available y creamos un archivo llamado (nombre-de-la-página).conf y le ponemos el siguiente código

![](5.png)

![](6.png)

Habilitamos el archivo que acabamos de crear

![](7.png)

Instalamos phpmyadmin

![](8.png)

Entramos en esta ruta y creamos el siguiente fichero, poniendole el siguiente código

![](9.png)

![](10.png)

![](11.png)

Dentro de MariaDb creamos una base de datos phpmyadmin, que debería estar creada ya, pero lo comprobamos, y le damos privilegios al usuario que creamos en la práctica anterior

![](12.png)

Dentro de phpmyadmin en el buscador importamos la base de datos que tenía XAMP

![](13.png)

Y yendo al apartado de bases de datos comprobamos que se haya importad correctamente

![](14.png)