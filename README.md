# ApiREST

Este proyecto tiene como objetivo la creación de un REST propio con PHP y MySQL con el uso de .htaccess.

## Índice

1.- [Estructura de directorios.](#estructura)  
2.- [Uso del REST propio.](#uso)  
3.- [Enlaces externos.](#enlaces)

<div id='estructura'>
  
  ## Estructura de directorios
  
  * config
    * configDB_ED.php
    * configDB_EE.php
    * configDB_localhost.php
    * configDB_ionos.php
    
  * model
    * DBPDO.php
    * Gafas.php
    * GafasDB.php
    * GafasPDO.php
    
  * scriptDB
    * 01_Creacion.sql
    * 02_Insercion.sql
    
  * .htaccess
  
  * index.php
  
</div>

<div id='uso'>
  
  ## Uso del REST propio
  
  * Para mostrar los datos de todos los productos:
    
    ~~~
    www.dominio.com/ApiREST/gafas
    ~~~
    
  * Para mostrar los datos de un producto por su id:
  
    ~~~
    www.dominio.com/ApiREST/gafas/[ID]
    ~~~
  
</div>

<div id='enlaces'>
  
  ## Enlaces externos
  
  * [Insomnia REST Client](https://insomnia.rest/), aplicación usada para el debug del REST.
  
</div>
