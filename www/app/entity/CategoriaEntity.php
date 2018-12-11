<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="categoria")
 **/
class CategoriaEntity extends BaseEntity {

	/** @ORM\Column(type="string", nullable=false) **/
	protected $nome;
	/** @ORM\Column(type="integer", nullable=false) **/
	protected $idade_max;
	/** @ORM\Column(type="integer", nullable=false) **/
	protected $idade_min;
	/** @ORM\Column(type="string", length=1, nullable=false) **/
	protected $genero;
	/** @ORM\Column(type="text", nullable=false) **/
	protected $geral;

	/**
	* @ORM\ManyToOne(targetEntity="EdicaoEntity", inversedBy="categorias")
	**/
	protected $edicao;

	/**
	* @ORM\OneToMany(targetEntity="InscricaoEntity", mappedBy="categoria")
	**/
	protected $inscricoes;

	public function __construct( ) {
		$this->inscricoes =  new ArrayCollection();
	}

	/**
	 * Get the value of nome
	 */ 
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @return  self
	 */ 
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Get the value of idade_max
	 */ 
	public function getIdade_max()
	{
		return $this->idade_max;
	}

	/**
	 * Set the value of idade_max
	 *
	 * @return  self
	 */ 
	public function setIdade_max($idade_max)
	{
		$this->idade_max = $idade_max;

		return $this;
	}

	/**
	 * Get the value of idade_min
	 */ 
	public function getIdade_min()
	{
		return $this->idade_min;
	}

	/**
	 * Set the value of idade_min
	 *
	 * @return  self
	 */ 
	public function setIdade_min($idade_min)
	{
		$this->idade_min = $idade_min;

		return $this;
	}

	/**
	 * Get the value of genero
	 */ 
	public function getGenero()
	{
		return $this->genero;
	}

	/**
	 * Set the value of genero
	 *
	 * @return  self
	 */ 
	public function setGenero($genero)
	{
		$this->genero = $genero;

		return $this;
	}

	/**
	 * Get the value of geral
	 */ 
	public function getGeral()
	{
		return $this->geral;
	}

	/**
	 * Set the value of geral
	 *
	 * @return  self
	 */ 
	public function setGeral($geral)
	{
		$this->geral = $geral;

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
	public function getEdicao()
	{
		return $this->edicao;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setEdicao($edicao)
	{
		$this->edicao = $edicao;

		return $this;
	}

	/**
	 * Get
	 */ 
	public function getInscricoes()
	{
		return $this->inscricoes;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setInscricoes($inscricoes)
	{
		$this->inscricoes = $inscricoes;

		return $this;
	}
}
