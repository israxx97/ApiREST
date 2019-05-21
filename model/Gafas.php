<?php

/**
 * File Gafas.php
 * 
 * Clase Gafas con funciones.
 * 
 * @package model
 */
require_once 'model/GafasPDO.php';

/**
 * Class Gafas
 * 
 * Clase con funciones usadas para el método de llamada de la Api.
 *
 * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
 */
class Gafas {

    /**
     * Function ApiREST
     * 
     * Se coge el método HTTP para el Api.
     * 
     * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
     */
    public function ApiREST() {
        header('Content-Type: application/JSON');
        $metodo = $_SERVER['REQUEST_METHOD'];

        switch ($metodo) {
            case 'GET':
                $this->getGafas();

                break;

            case 'POST':

                break;

            case 'PUT':

                break;

            case 'DELETE':

                break;

            default:
                echo 'MÉTODO NO SOPORTADO.';

                break;
        }
    }

    /**
     * Function getGafas
     * 
     * Se usa una función de GafasPDO dependiendo de los parámetros pasados.
     * 
     * @author Israel García Cabañeros <israel.garcab@educa.jcyl.es>
     */
    public static function getGafas() {
        if ($_REQUEST['action'] == 'gafas') {
            $gafasPdo = new GafasPDO();

            if (isset($_REQUEST['id'])) {
                $respuesta = $gafasPdo->getGafasPorId($_REQUEST['id']);
                echo json_encode($respuesta, JSON_PRETTY_PRINT);
            } else {
                $respuesta = $gafasPdo->getGafas();
                echo json_encode($respuesta, JSON_PRETTY_PRINT);
            }
        }
    }

}
