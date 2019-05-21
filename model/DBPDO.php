<?php

/**
 * File DBPDO.php
 * 
 * Archivo que se encuentra en la parte del modelo con el acceso a datos.
 * 
 * @package model
 */
require_once 'config/configDB_localhost.php';

/**
 * Class DBPDO
 * 
 * Clase con una función usada en las clases PDO para ejecutar los query.
 *
 * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
 */
class DBPDO {

    /**
     * Function ejecutaConsulta
     * 
     * Se crea la conexión con la base de datos y prepara la consulta.
     * 
     * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
     * @param String $sentenciaSQL sentencia sql de la bbdd
     * @param Array $parametros parametros que se le pasan a la consulta a la bbdd
     * @return String consulta con los parámetos pasados
     */
    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(HOST_DB_localhost, USER_DB_localhost, PASS_DB_localhost);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $miDB->prepare($sentenciaSQL);
            $statement->execute($parametros);
        } catch (PDOException $pdoe) {
            $statement = null;
            header('Location: index.php');
        } finally {
            unset($miDB);
        }
        return $statement;
    }

}
