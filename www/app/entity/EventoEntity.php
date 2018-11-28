<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="evento")
 **/
class EventoEntity extends BaseEntity {
	/** @ORM\Column(type="string", nullable=false) **/
	protected $nome;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $descricao;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $img_capa;

	/**
	* @ORM\ManyToOne(targetEntity="InstituicaoEntity", inversedBy="eventos")
	**/
	protected $evento;
	
	public function __construct($nome, $descricao, $img_capa) {
		$this->nome = $nome;
		$this->img_capa = $img_capa;
		$this->descricao = $descricao;
	}

	/**
	 * Get the value of nome
	 */ 
	public function getNome() {
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @return  self
	 */ 
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * Get the value of descricao
	 */ 
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * Set the value of descricao
	 *
	 * @return  self
	 */ 
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
		return $this;
	}

	/**
	 * Get the value of img_capa
	 */ 
	public function getImg_capa() {
		return $this->img_capa;
	}

	/**
	 * Set the value of img_capa
	 *
	 * @return  self
	 */ 
	public function setImg_capa($img_capa) {
		$this->img_capa = $img_capa;
		return $this;
	}

	/**
	 * Get 	* @ManyToOne(targetEntity="InstituicaoEntity", inversedBy="eventos")
	 */ 
	public function getEvento()	{
		return $this->evento;
	}

	/**
	 * Set 	* @ManyToOne(targetEntity="InstituicaoEntity", inversedBy="eventos")
	 *
	 * @return  self
	 */ 
	public function setEvento($evento) {
		$this->evento = $evento;
		return $this;
	}
}
