<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$URL_BASE = '/clientes/{id_cliente}/eventos';

$app->get("$URL_BASE", function (Request $request, Response $response, $args) {
    return $response->withStatus(200)->withHeader('Content-Type', 'application/json')
        ->write(json_encode(array('success' => true, 'msg' => 'ok')));
});

$app->get("$URL_BASE/{id}", function (Request $request, Response $response, $args) {
    $id = $args['id'];
    return $response->withStatus(200)->withHeader('Content-Type', 'application/json')
        ->write(json_encode(array('success' => true, 'msg' => "ok-$id")));
});

$app->post("$URL_BASE", function (Request $request, Response $response) {

});

$app->put("$URL_BASE/{id}", function (Request $request, Response $response) {

});

$app->delete("$URL_BASE/{id}", function (Request $request, Response $response) {

});


