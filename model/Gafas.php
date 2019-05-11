<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'model/GafasPDO.php';

/**
 * Description of Gafas
 *
 * @author israel
 */
class Gafas {

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
