<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="inscricao")
 **/
class InscricaoEntity extends BaseEntity {

	/** @ORM\Column(type="string", nullable=false, options={"default" : "aberta"}) **/
	protected $situacao = 'aberta'; //aberta, paga, cortesia, cancelada

	/** @ORM\Column(type="date", nullable=false) **/
	protected $data_inscricao;

	/** @ORM\Column(type="string", nullable=true) **/
	protected $cod_financeiro;

	/** @ORM\Column(type="string", nullable=true) **/
	protected $info_financeiro;

	/**
	* @ORM\ManyToOne(targetEntity="UsuarioEntity", inversedBy="inscricoes")
	**/
	protected $inscrito;

	/**
	* @ORM\ManyToOne(targetEntity="CategoriaEntity", inversedBy="inscricoes")
	**/
	protected $categoria;

		/**
	* @ORM\ManyToOne(targetEntity="LoteEntity", inversedBy="inscricoes")
	**/
	protected $lote;

	public function __construct( ) {
		
	}

	/**
	 * Get
	 */ 
	public function getInscrito()
	{
		return $this->inscrito;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setInscrito($inscrito)
	{
		$this->inscrito = $inscrito;

		return $this;
	}

	/**
	 * Get
	 */ 
	public function getCategoria()
	{
		return $this->categoria;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setCategoria($categoria)
	{
		$this->categoria = $categoria;

		return $this;
	}

	/**
	 * Get
	 */ 
	public function getLote()
	{
		return $this->lote;
	}

	/**
	 * Set
	 *
	 * @return  self
	 */ 
	public function setLote($lote)
	{
		$this->lote = $lote;

		return $this;
	}

	/**
	 * Get the value of data_inscricao
	 */ 
	public function getData_inscricao()
	{
		return $this->data_inscricao;
	}

	/**
	 * Set the value of data_inscricao
	 *
	 * @return  self
	 */ 
	public function setData_inscricao($data_inscricao)
	{
		$this->data_inscricao = $data_inscricao;

		return $this;
	}

	/**
	 * Get the value of situacao
	 */ 
	public function getSituacao()
	{
		return $this->situacao;
	}

	/**
	 * Set the value of situacao
	 *
	 * @return  self
	 */ 
	public function setSituacao($situacao)
	{
		$this->situacao = $situacao;

		return $this;
	}

	/**
	 * Get the value of cod_financeiro
	 */ 
	public function getCod_financeiro()
	{
		return $this->cod_financeiro;
	}

	/**
	 * Set the value of cod_financeiro
	 *
	 * @return  self
	 */ 
	public function setCod_financeiro($cod_financeiro)
	{
		$this->cod_financeiro = $cod_financeiro;

		return $this;
	}

	/**
	 * Get the value of info_financeiro
	 */ 
	public function getInfo_financeiro()
	{
		return $this->info_financeiro;
	}

	/**
	 * Set the value of info_financeiro
	 *
	 * @return  self
	 */ 
	public function setInfo_financeiro($info_financeiro)
	{
		$this->info_financeiro = $info_financeiro;

		return $this;
	}
}
