<?php

/**
 * File GafasDB.php
 * 
 * Archivo que contiene métodos que se implementarán en GafasPDO.
 * 
 * @package model
 */

/**
 * Interface GafasDB
 * 
 * Archivo que contiene métodos que se implementarán en GafasPDO.
 * 
 * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
 */
interface GafasDB {

    /**
     * Function getGafasPorId
     * 
     * Declaración de la función getGafasPorId que se usará en GafasPDO.
     * 
     * @param String $idGafas ID único de las gafas
     * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
     */
    public static function getGafasPorId($idGafas);

    /**
     * Function getGafas
     * 
     * Declaración de la función getGafas que se usará en GafasPDO.
     * 
     * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
     */
    public static function getGafas();
}
