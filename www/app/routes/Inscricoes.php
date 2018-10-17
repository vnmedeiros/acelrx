<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$URL_BASE = '/inscricoes';

    /**
     * input data
     * {
     *    "id_usuario":'',
     *    "id_evento":'',
     *    "id_categoria":''
     * }
     **/
$app->post("$URL_BASE", function (Request $request, Response $response) {
    
});

$app->patch("$URL_BASE/{id}/pago", function (Request $request, Response $response) {

});

$app->post("$URL_BASE/{id}/cortesia", function (Request $request, Response $response) {

});

$app->delete("$URL_BASE/{id}/cortesia", function (Request $request, Response $response) {

});



