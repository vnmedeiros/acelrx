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
	protected $instituicao;
	
	/**
	* @ORM\OneToMany(targetEntity="EdicaoEntity", mappedBy="evento")
	**/
	protected $edicoes;
	
	public function __construct($nome, $descricao, $img_capa) {
		$this->nome = $nome;
		$this->img_capa = $img_capa;
		$this->descricao = $descricao;
		$this->edicoes = new ArrayCollection();
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
	 * Get
	 */ 
	public function getInstituicao()	{
		return $this->instituicao;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setInstituicao($instituicao) {
		$this->instituicao = $instituicao;
		return $this;
	}

	/**
	 * Get
	 */ 
	public function getEdicoes()
	{
		return $this->edicoes;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setEdicoes($edicoes)
	{
		$this->edicoes = $edicoes;

		return $this;
	}
}
