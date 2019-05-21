<?php

/**
 * File GafasPDO.php
 * 
 * Archivo con las funciones que hacen el acceso a datos.
 * 
 * @package model
 */
require_once 'model/GafasDB.php';
require_once 'model/DBPDO.php';

/**
 * Class GafasPDO
 * 
 * Declaración de la función getGafas que se usará en GafasPDO.
 * 
 * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
 * @implements GafasDB
 */
class GafasPDO implements GafasDB {

    /**
     * Function getGafasPorId
     * 
     * Función que devuelve un array con las gafas que coinciden con el id de las gafas pasado por parámetro.
     * 
     * @param String $idGafas ID de las gafas
     * @return Array $a_gafas
     */
    public static function getGafasPorId($idGafas) {
        $a_gafas = [];
        $sql = 'SELECT * FROM T05_Gafas WHERE T05_IdGafas = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$idGafas]);

        if ($statement->rowCount() != 0) {
            $resultado = $statement->fetchObject();
            $a_gafas['T05_IdGafas'] = $resultado->T05_IdGafas;
            $a_gafas['T05_Name'] = $resultado->T05_Name;
            $a_gafas['T05_Modelo'] = $resultado->T05_Modelo;
        }
        return $a_gafas;
    }

    /**
     * Function getGafas
     * 
     * Función que devuelve un array con todas las gafas.
     * 
     * @param String $idGafas
     * @return Array $a_gafas
     */
    public static function getGafas() {
        $a_gafa = [];
        $a_gafas = [];
        $contador = 0;
        $sql = 'SELECT * FROM T05_Gafas';
        $statement = DBPDO::ejecutaConsulta($sql, []);

        if ($statement->rowCount() != 0) {
            while ($resultado = $statement->fetchObject()) {
                $a_gafas['T05_IdGafas'] = $resultado->T05_IdGafas;
                $a_gafas['T05_Name'] = $resultado->T05_Name;
                $a_gafas['T05_Modelo'] = $resultado->T05_Modelo;
                $a_gafa[$contador] = $a_gafas;
                $contador++;
            }
        }

        return $a_gafa;
    }

}
