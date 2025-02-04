# Instalación de servidor LAMP

Primero actualizamos los paquetes de nuestra máquina

![](1.png)

Actualizamos todos los paquetes instalados

![](2.png)

Más tarde instalamos apache con el siguiente comando

![](3.png)

Instalamos el servidor y cliente de MariaDB

![](4.png)

Aqui podemos ver que el servicio de MariaDB está activo

![](5.png)

Aquí activamos el servicio de MariaDB, aunque normalmente cuando instalas un paquete este viene activo, nunca está de más comprobarlo.

![](6.png)

Revisamos que la versión sea la más nueva

![](7.png)

Instalamos el script de seguridad de MySQL

![](8.png)

Entramos a MariaDB como root

![](9.png)

Creamos el usuario developer

![](10.png)

Instalamos PHP

![](11.png)

Habilitamos PHP

![](12.png)

Y miramos que version tenemos instalada

![](13.png)

Creamos este ficher en la ruta /var/www/html y escribimos lo siguiente

![](14.png)
![](15.png)

Accedemos al fichero que acabamos de crear desde el buscador que tengamos, y si lo hemos hecho todo bien nos debería salir la siguiente página

![](16.png)

Ahora deshabilitaremos PHP

![](17.png)

Ahora con PHP deshabilitado instalaremos el siguiente paquete para ejecutar código en PHP.

![](18.png)

Habilitamos el siguiente paquete

![](19.png)

Y configuramos lo instalado previamente

![](20.png)

Y si lo hemos hecho todo bien pues aparecerá esta página

![](21.png)
