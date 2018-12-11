<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="lote")
 **/
class LoteEntity extends BaseEntity {
	/** @ORM\Column(type="string", nullable=false) **/
	protected $nome;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $data_limite;

	/**
	* @ORM\ManyToOne(targetEntity="EdicaoEntity", inversedBy="lotes")
	**/
	protected $edicao;

	/**
	* @ORM\OneToMany(targetEntity="InscricaoEntity", mappedBy="lote")
	**/
	protected $inscricoes;
	
	public function __construct($nome, $descricao, $data_limite) {
		$this->nome = $nome;
		$this->data_limite = $data_limite;
		$this->inscricoes = new ArrayCollection();
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
	 * Get the value of data_limite
	 */ 
	public function getData_limite() {
		return $this->data_limite;
	}

	/**
	 * Set the value of data_limite
	 *
	 * @return  self
	 */ 
	public function setData_limite($data_limite) {
		$this->data_limite = $data_limite;
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
