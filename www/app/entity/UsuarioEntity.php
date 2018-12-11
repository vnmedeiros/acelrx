<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity() 
 * @ORM\Table(name="usuario")
 **/
class UsuarioEntity extends BaseEntity {
	/** @ORM\Column(type="string", nullable=false) **/
	protected $nome;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $CPF;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $email;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $celular;
	/** @ORM\Column(type="date", nullable=false) **/
	protected $nascimento;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $logradouro;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $bairro;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $cep;
	/** @ORM\Column(type="string", nullable=false) **/
	protected $cidade;
	/** @ORM\Column(type="string", length=2, nullable=false) **/
	protected $UF;
	/** @ORM\Column(type="string", length=2, nullable=false) **/
	protected $hash;

	/**
	* @ORM\OneToMany(targetEntity="InscricaoEntity", mappedBy="inscrito")
	**/
	protected $inscricoes;

	public function __construct( ) {
		$this->inscricoes = new ArrayCollection();
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
	 * Get the value of CPF
	 */ 
	public function getCPF()
	{
		return $this->CPF;
	}

	/**
	 * Set the value of CPF
	 *
	 * @return  self
	 */ 
	public function setCPF($CPF)
	{
		$this->CPF = $CPF;

		return $this;
	}

	/**
	 * Get the value of email
	 */ 
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */ 
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of celular
	 */ 
	public function getCelular()
	{
		return $this->celular;
	}

	/**
	 * Set the value of celular
	 *
	 * @return  self
	 */ 
	public function setCelular($celular)
	{
		$this->celular = $celular;

		return $this;
	}

	/**
	 * Get the value of nascimento
	 */ 
	public function getNascimento()
	{
		return $this->nascimento;
	}

	/**
	 * Set the value of nascimento
	 *
	 * @return  self
	 */ 
	public function setNascimento($nascimento)
	{
		$this->nascimento = $nascimento;

		return $this;
	}

	/**
	 * Get the value of logradouro
	 */ 
	public function getLogradouro()
	{
		return $this->logradouro;
	}

	/**
	 * Set the value of logradouro
	 *
	 * @return  self
	 */ 
	public function setLogradouro($logradouro)
	{
		$this->logradouro = $logradouro;

		return $this;
	}

	/**
	 * Get the value of bairro
	 */ 
	public function getBairro()
	{
		return $this->bairro;
	}

	/**
	 * Set the value of bairro
	 *
	 * @return  self
	 */ 
	public function setBairro($bairro)
	{
		$this->bairro = $bairro;

		return $this;
	}

	/**
	 * Get the value of cep
	 */ 
	public function getCep()
	{
		return $this->cep;
	}

	/**
	 * Set the value of cep
	 *
	 * @return  self
	 */ 
	public function setCep($cep)
	{
		$this->cep = $cep;

		return $this;
	}

	/**
	 * Get the value of cidade
	 */ 
	public function getCidade()
	{
		return $this->cidade;
	}

	/**
	 * Set the value of cidade
	 *
	 * @return  self
	 */ 
	public function setCidade($cidade)
	{
		$this->cidade = $cidade;

		return $this;
	}

	/**
	 * Get the value of UF
	 */ 
	public function getUF()
	{
		return $this->UF;
	}

	/**
	 * Set the value of UF
	 *
	 * @return  self
	 */ 
	public function setUF($UF)
	{
		$this->UF = $UF;

		return $this;
	}

	/**
	 * Get the value of hash
	 */ 
	public function getHash()
	{
		return $this->hash;
	}

	/**
	 * Set the value of hash
	 *
	 * @return  self
	 */ 
	public function setHash($hash)
	{
		$this->hash = $hash;

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
