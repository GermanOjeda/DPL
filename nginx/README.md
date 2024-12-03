# Instalación y configuración básica de NGINX

Actualizamos los paquetes:

![](./1.png)

Instalamos NGINX:

![](./2.png)

Vemos el status de NGINX:

![](./3.png)

Comprobamos la configuración de NGINX:

![](./4.png)

Entramos en /etc/nginx/ y hacemos un ls para ver qué hay en la carpeta

![](./5.png)

Entramos en /etc/nginx/sites-available y hacemos ls para ver los contenidos

![](./6.png)

Entramos en sites-enabled y hacemos otro ls

![](./7.png)

Hacemos un cat en default para ver los contenidos de la plantilla

![](./8-0.png)
![](./8-1.png)
![](./8-2.png)

Vamos a /var/www/html para ver lo que tenemos dentro

![](./9.png)

Reiniciamos NGINX

![](./10.png)

Quitamos index.nginx-debian.html y reescribimos el interior de index.html con algo que nosotros queramos

![](./11.png)
![](./14.png)

Reiniciamos NGINX de nuevo y ahora podemos acceder a nuestro html desde el buscador con "localhost"

![](./13.png)