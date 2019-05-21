<?php

/**
 * File index.php
 * 
 * Índex del ApiREST que crea un objeto de tipo Gafas y llama a la función ApiREST.
 * 
 * @package Source Files
 */
require_once 'model/Gafas.php';

$gafas = new Gafas();
$gafas->ApiREST();
