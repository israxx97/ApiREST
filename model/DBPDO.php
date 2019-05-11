<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/configDB_localhost.php';

/**
 * Description of DBPDO
 *
 * @author israel
 */
class DBPDO {

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
