<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/configDB_ED.php';

/**
 * Description of DBPDO
 *
 * @author israel
 */
class DBPDO {

    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(HOST_DB_ED, USER_DB_ED, PASS_DB_ED);
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
