#Proyecto de Tesis, Software para el Hospital Nacional Especializado de Villa Nueva

Pasos para utilizar el software en un entorno de desarrollo:
Revisar la caperta Aplicaciones, es donde se encuentra todos los software a utilizar
1. Instalar Xampp

2. En el panel de control de Xampp dar click en config del servicio Apache --> PHP (php.ini) --> insertar las siguientes filas:
extension=php_pdo_sqlsrv_72_nts.dll
extension=php_pdo_sqlsrv_72_ts.dll
extension=php_sqlsrv_72_nts.dll
extension=php_sqlsrv_72_ts.dll

Imagen de referencia:
![](C:\xampp\htdocs\almacen-farmacia\Aplicaciones\Seguimientos\XAMPP.png)

3. Ir a la siguiente carpeta: Disco local C: --> xampp --> php --> ext, pegar 4 archivos php que se encuentran en la carpeta aplicaciones --> seguimientos, de este proyecto
Imagen de Referencia: 
![](C:\xampp\htdocs\almacen-farmacia\Aplicaciones\Seguimientos\Archivos PHP.png)

4. Tener instaldo Microsoft SQL Server 2016
        De no contar con SQL instalado lo pueden descargar en el siguiente enlace
        https://www.microsoft.com/es-es/sql-server/sql-server-downloads
Se pueden apoyar con el siguiente video: https://www.youtube.com/watch?v=xdodPVr9PKw

5. Restaurar la BD que se encuentra en la carpeta aplicaciones->Tesis.bak

6. En una nueva Query de la bd HNE001 ejecutar lo siguiente:
         CREATE LOGIN [Tesis] WITH PASSWORD = 'Clave123',
               DEFAULT_DATABASE = [HNE001],
               DEFAULT_LANGUAGE = [Español]
               go
               exec sp_addsrvrolemember [Tesis], 'sysadmin'
               go
7. Descargar el proyecto de GitHub, clonar en la carpeta
Link: https://github.com/Fernando-systems/Seminario.git 

8. Dentro del proyecto ir a carpeta functions, editar el
Colocar el nombre del SQL local que tengan instalado    