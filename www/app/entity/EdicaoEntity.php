<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="edicao")
 **/
class EdicaoEntity extends BaseEntity {
	/** @ORM\Column(type="string", nullable=false) **/
	protected $nome;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $descricao;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $data_evento;

	/**
	* @ORM\ManyToOne(targetEntity="EventoEntity", inversedBy="edicoes")
	**/
	protected $evento;

	/**
	* @ORM\OneToMany(targetEntity="LoteEntity", mappedBy="edicao")
	**/
	protected $lotes;

	/**
	* @ORM\OneToMany(targetEntity="CategoriaEntity", mappedBy="edicao")
	**/
	protected $categorias;
	
	public function __construct($nome, $descricao, $data_evento) {
		$this->nome = $nome;
		$this->data_evento = $data_evento;
		$this->descricao = $descricao;
		$this->lotes = new ArrayCollection();
		$this->categorias = new ArrayCollection();
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
	 * Get the value of data_evento
	 */ 
	public function getData_evento() {
		return $this->data_evento;
	}

	/**
	 * Set the value of data_evento
	 *
	 * @return  self
	 */ 
	public function setData_evento($data_evento) {
		$this->data_evento = $data_evento;
		return $this;
	}

	/**
	 * Get
	 */ 
	public function getEvento()
	{
		return $this->evento;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setEvento($evento)
	{
		$this->evento = $evento;

		return $this;
	}

	/**
	 * Get
	 */ 
	public function getCategorias()
	{
		return $this->categorias;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setCategorias($categorias)
	{
		$this->categorias = $categorias;

		return $this;
	}
}
