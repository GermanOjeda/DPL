# Instalación de servidor DNS

Instalamos el paquete bind9

![](1.png)

Comenzamos y habilitamos el servicio que acabamos de instalar

![](2.png)

Aquí le damos acceso al puerto que tiene que usar

![](3.png)

En la ruta /etc/bind/ le creamos un archivo llamado named.conf.options y le ponemos el siguiente código

![](4.png)

![](5.png)

En la ruta /etc/default/ le creamos un archivo llamado named y modificamos esta linea de código para que quede así

![](6.png)

![](7.png)

Comprobamos que esté todo bien escrito, reiniciamos el servicio y comprobamos que está activado

![](8.png)

En la ruta /etc/bind/ le creamos un archivo llamado named.conf.local y modificamos esta linea de código para que quede así

![](9.png)

![](10.png)

Creamos la siguiente carpeta y dentro creamos un fichero llamado db.(nombre-de-página)

![](11.png)

![](12.png)

Dentro de esta misma carpeta creamos otro fichero llamado db.(tres-primeros-digitos-de-nuestra-ip-en-reverso) y le añadimos el siguiente código

![](13.png)

![](14.png)

Con estos comandos comprobamos que todo lo que escribimos está correcto

![](15.png)

Y con el comando ping podemos ver que nuestro servidor DNS está funcionando correctamente

![](16.png)