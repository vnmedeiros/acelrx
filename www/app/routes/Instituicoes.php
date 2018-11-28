<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$URL_BASE = '/instituicoes';

function mount_data($data) {
	$data = json_decode($data);
	$instituicao = new InstituicaoEntity(
							$data->nome, $data->UF, $data->cep,
							$data->bairro,   $data->cidade,
							$data->telefone, $data->logradouro,
							$data->email_responsavel);
	return $instituicao;
}

$app->get("$URL_BASE", function (Request $request, Response $response, $args) {
		$instituicoes = InstituicaoRepository::get_instance($this)->get_all();
		return $response->withJson($instituicoes, 200)
				->withHeader('Content-type', 'application/json');
});

$app->get("$URL_BASE/{id}", function (Request $request, Response $response, $args) {
	$id = $args['id'];
	$instituicao = InstituicaoRepository::get_instance($this)->get_by_id($id);
	return $response->withJson($instituicao, 200)
				->withHeader('Content-type', 'application/json');
});

$app->post("$URL_BASE", function (Request $request, Response $response) {
	$instituicao = mount_data($request->getBody());
	$instituicao = InstituicaoRepository::get_instance($this)->persist($instituicao);
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')
				->write(json_encode($instituicao));
});

$app->put("$URL_BASE/{id}", function (Request $request, Response $response, $args) {
	$id = $args['id'];
	$instituicao_update = mount_data($request->getBody());
	$instituicao = InstituicaoRepository::get_instance($this)->get_by_id($id);
	InstituicaoRepository::get_instance($this)->merger_to_update($instituicao, $instituicao_update);
	$instituicao = InstituicaoRepository::get_instance($this)->persist($instituicao);
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')
				->write(json_encode($instituicao));
});

$app->delete("$URL_BASE/{id}", function (Request $request, Response $response, $args) {
	$id = $args['id'];
	$instituicao = InstituicaoRepository::get_instance($this)->get_by_id($id);
	$instituicao = InstituicaoRepository::get_instance($this)->remove($instituicao);
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')
				->write(json_encode($instituicao));
});