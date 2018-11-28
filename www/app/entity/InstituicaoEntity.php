<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="instituicao")
 **/
class InstituicaoEntity extends BaseEntity {
	/** @ORM\Column(type="string") **/
	protected $nome;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $email_responsavel;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $telefone;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $logradouro;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $bairro;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $cep;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $cidade;
	/** @ORM\Column(type="string", nullable=true) **/
	protected $UF;

	/**
	* @ORM\OneToMany(targetEntity="EventoEntity", mappedBy="evento")
	**/
	protected $eventos;

	public function __construct($nome, $UF = null, $cep = null,
															$bairro = null, $cidade = null,
															$telefone = null, $logradouro = null,
															$email_responsavel = null) {
		$this->UF = $UF;
		$this->cep = $cep;
		$this->nome = $nome;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->telefone = $telefone;
		$this->logradouro = $logradouro;
		$this->email_responsavel = $email_responsavel;
		$this->eventos = new ArrayCollection();
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}

	public function getEmail_responsavel() {
		return $this->email_responsavel;
	}

	public function setEmail_responsavel($email_responsavel) {
		$this->email_responsavel = $email_responsavel;
		return $this;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
		return $this;
	}

	public function getLogradouro() {
		return $this->logradouro;
	}

	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
		return $this;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
		return $this;
	}

	public function getCep() {
		return $this->cep;
	}

	public function setCep($cep) {
		$this->cep = $cep;
		return $this;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
		return $this;
	}

	public function getUF() {
		return $this->UF;
	}

	public function setUF($UF) {
		$this->UF = $UF;
		return $this;
	}

	public function getEventos() {
		return $this->eventos;
	}

	public function setEventos($eventos) {
		$this->eventos = $eventos;
		return $this;
	}

	public function addEvento(EventoEntity $evento) {
		$this->eventos[] = $evento;
	}
}
