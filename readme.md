# PoYaKe
PoYaKe que es un prototipo de framework.

## ¿Por qué el nombre?
Nos pidieron un mini proyecto en PHP (sin framework) que hiciera un CRUD de forma asíncrona con JS (sin framework) y...

**Po' Ya Que Estamos...**

## Objetivo
Crear un prototipo de framework que se acerque a DDD  (Domain-Driven Design).

## Estructura de Carpetas
### app
Esta carpeta contendrá una carpeta por cada entidad del dominio y dentro de esta carpeta deberán de existir los siguientes archivos:
- model.php
- controller.php
- router.php
Además de una carpeta **view** donde se deben almacenar los componentes de las vistas.
### lib
En esta carpeta de colocaran las librerías externas divididas según el tipo se archivo de la siguiente forma:
- php
- js
- css
**Nota, la carpeta css podria contener archivos sass o scss en un futuro**
### public
Esta es la carpeta de inicio del servidor web, contiene los archivos compilados y estáticos, se recomienda (pero no limita) la siguiente estructura:
- img
- css
- js
### core
Esta carpeta contiene el núcleo del framework, aloja los midleware relacionados con el login y perfiles de usuario (tomados como obligatorios en aplicaciones *modernas*), también contendrá helpers de validación y las clases para conexión a la base de datos.
Ademas debera contener el **loader** para las entidades del dominio.
### .env
archivo de configuración el cual deberá almacenar el nombre de la aplicación y los datos de conexión a la base de datos y servicios de correo.
