# Instalar y configurar OpenLDAP


Como primer paso debemos hacer in ping a la ip de nuestro servidor para comprobar que está activo

También necesitamos prepara el hostname de nuestro servidor con este comando:

```
sudo hostnamectl set-hostname apacheserver.german.local
```

También necesitamos ajustar la carpeta /etc/hosts para que funcione, de esta manera:

```
127.0.0.1   localhost
127.0.1.1   apacheserver.german.local
10.109.99.107    apacheserver.german.local
```

Actualizamos el repositorio de paquetes con este comando:
```
sudo apt-get update -y
```

E instalamos estos paquetes
```
sudo apt-get install slapd ldap-utils -y
```

Ejecutamos los paquetes 

```
sudo dpkg-reconfigure slapd
```

Ahora debemos crear una unidad organizativa, para ello vamos a empezar por creal la plantilla

```
sudo nano ou.ldif
```

Y ponemos lo siguiente dentro:

```
dn: ou=informatica,dc=clockwork,dc=local
objectClass: top
objectClass: organizationalUnit
ou: informatica
```

Y añadimos la unidad con este comando:

```
sudo ldapadd -x -D cn=admin,dc=clockwork,dc=local -W -f ou.ldfi
```

Y ahora metemos el grupo

```
sudo ldapapp -x -D cn=admin,dc=clockwork,dc=local -W -f grp.ldfi
```

Ahora vamos a crear un usuario con este comando, así creando la plantilla para este:

```
cp grp.ldif usr.ldif
nano usr.ldif
```

E introducimos estos valores:

```
dn: uid=clockworker,ou=informatica,dc=clockwork,dc=local
objectClass: top
objectClass: posixAccount
objectClass: inetOrgPerson
objectClass: person
cn: clockworker 
uid: clockworker 
ou: informatica 
uidNumber: 2000 
gidNumber: 10000 
homeDirectory: /home/clockworker 
loginShell: /bin/bash 
userPassword: Cursos1
sn: Worker 
mail: clockworker@clockwork.local
givenName: clockworker # Nombre de pila
```

Y metemos la estructura en la plantilla

```
sudo ldapadd -x -D cn=admin,dc=clockwork,dc=local -W -f usr.ldif
```

También podemos modificar usuarios de esta manera:

```
dn: uid=clockworker,ou=informatica,dc=clockwork,dc=local
changetype: modify
replace: mail
mail: newworker@clockwork.local
```

Y aplicamos los cambios con este comando:

```
sudo ldapmodify -x -D cn=admin,dc=clockwork,dc=local -W -f changes.ldif
```

También se pueden eliminar con el siguiente comando:

```
sudo ldapdelete -x -W -D 'cn=admin,dc=clockwork,dc=local' "uid=clockworker,ou=informatica,dc=clockwork,dc=local"
```

Ahora para instalar LDAP en el cliente instalamos los siguientes paquetes:

```
sudo apt-get install libnss-ldap libpam-ldap ldap-utils -y
```

Para configurar el cliente ponemos lo siguiente dentro del fichero /etc/nsswitch.conf:

```
passwd:   files ldap
group:    files ldap
shadow:   files ldap
```

Ahora hay que hacer un cambio en el fichero /etc/pam.d/common-session, y es poner esto al final:

```
session optional    pam_mkhomedir.so skel=/etc/skel umask=077
```

Ahora para comprobar que todo funciona podemos hacer una busqueda dentro del servidor como esta por ejemplo:

```
ldapsearch -x -H ldap://<ip-del-server> -b "dc=clockwork,dc=local"
```