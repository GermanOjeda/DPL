# Certificado Let's Encrypt y protección CertBot en Nginx

Instalamos los paquetes necesarios para esta práctica.

![](1.png)


Entramos en nuestro fichero de configuración de nginx y ponemos el siguiente código.

![](2.png)
![](3.png)


Creamos un enlace simbólico del fichero de configuración para activarlo después en nuestro servidor

![](4.png)


Tenemos que dejar que el tráfico HTTPS entre en el servidor, para ello usaremos el siguiente comando:

![](5.png)


Y con este último comando generaremos el certificado de CertBot

![](6.png)